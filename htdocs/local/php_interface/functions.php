<?php

    function print_c($message)
    {
        if ( is_array($message) ) {
            echo '<script>console.log('.json_encode($message).')</script>';
        } else {
            echo '<script>console.log("'.$message.'")</script>';
        }
    }


    function custom_dd($arr)
    {
        echo '<pre>';
        var_dump($arr);
        echo '</pre>';
    }

 function getHighLoadBlockList($hlbl, $arOrder = array(), $filter = array(), $arSelect = array('*'), $limit = null)
{
    $hlblock = HL\HighloadBlockTable::getList(
        array("filter" => array('TABLE_NAME' => $hlbl))
    )->fetch();
    $entity = HL\HighloadBlockTable::compileEntity($hlblock);
    $Query = new \Bitrix\Main\Entity\Query($entity);

    $Query->setSelect($arSelect);
    $Query->setFilter($filter);
    $Query->setOrder($arOrder);
    $Query->setLimit($limit);

    $result = $Query->exec();

    $arResult = new CDBResult($result);
    return $arResult;
}

 function addToHighloadBlock($hlbl, $data = array(), $unical = '')
{
    $res = null;
    $id = 0;
    if (!empty($unical)) {
        $res = getHighLoadBlockList(
            $hlbl, array(), array($unical => $data[$unical]), array('ID')
        )->Fetch();
    }

    if (!empty($data)) {
        $hlblock = HL\HighloadBlockTable::getList(
            array("filter" => array('TABLE_NAME' => $hlbl))
        )->fetch();
        $entity = HL\HighloadBlockTable::compileEntity($hlblock);
        $entityDataClass = $entity->getDataClass();

        if ($res != null) {
            $id = $res["ID"];
            $entityDataClass::update($res["ID"], $data);
        } else {
            $id = $entityDataClass::add($data);
            return $id->getId();
        }
    }

    if ($id > 0) {
        return true;
    }
}

/** deleteFromHighloadBlock - удаляет запись в hl блоке
 * @param $hlbl - имя таблицы БД hl блока
 * @param $id - ID удаляемой записи
 */
 function deleteFromHighloadBlock($hlbl, $id)
{
    $hlblock = HL\HighloadBlockTable::getList(
        array("filter" => array('TABLE_NAME' => $hlbl))
    )->fetch();
    $entity = HL\HighloadBlockTable::compileEntity($hlblock);
    $entityDataClass = $entity->getDataClass();
    $result = $entityDataClass::delete($id);

    return $result;
}