<?php
if(!defined("B_PROLOG_INCLUDED")||B_PROLOG_INCLUDED!==true)die();

use Bitrix\Main\Context,
    Bitrix\Main\Loader,
    Bitrix\Iblock,
    Bitrix\Highloadblock as HL;

/**
 * Bitrix vars
 *
 * @var array $arParams
 * @var array $arResult
 * @var CBitrixComponent $this
 * @global CMain $APPLICATION
 * @global CUser $USER
 */
$hlblock_id = $arParams['BLOCK_ID'];

if (empty($hlblock_id))
{
    ShowError(GetMessage('HLBLOCK_VIEW_NO_ID'));
    return 0;
}
$hlblock = HL\HighloadBlockTable::getById($hlblock_id)->fetch();

if (empty($hlblock))
{
    ShowError('404');
    return 0;
}

$entity = HL\HighloadBlockTable::compileEntity($hlblock);

// row data
$main_query = new Entity\Query($entity);
$main_query->setSelect(array('*'));
$main_query->setFilter(array('=ID' => $arParams['ROW_ID']));

$result = $main_query->exec();
$result = new CDBResult($result);
$row = $result->Fetch();


if(!isset($arParams["CACHE_TIME"]))
    $arParams["CACHE_TIME"] = 36000000;

$arResult['row'] = $row;

$this->IncludeComponentTemplate();
