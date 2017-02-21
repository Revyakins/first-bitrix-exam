<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
/*
<div class="sb_reviewed">
        <img src="<?=SITE_TEMPLATE_PATH?>/content/8.png" class="sb_rw_avatar" alt=""/>
        <span class="sb_rw_name">Сергей Антонов</span>
        <span class="sb_rw_job">Руководитель финансового отдела “Банк+”</span>
        <p>“Покупал офисные стулья и столы, остался очень доволен! Низкие цены, быстрая доставка, обслуживание на высоте! Спасибо!”</p>
        <div class="clearboth"></div>
        <div class="sb_rw_arrow"></div>
    </div>

<?=$this->GetEditAreaId($arItem['ID']);?>
*/
$this->setFrameMode(true);
?>

<?foreach($arResult["ITEMS"] as $arItem):?>
	<?
	$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
	$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
	?>

    <div class="sb_reviewed" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
        <? if(!empty($arItem['PREVIEW_PICTURE']['SRC'])) { ?>
            <a href="<?=$arItem['DETAIL_PAGE_URL']?>">
        <img src="<?=$arItem['PREVIEW_PICTURE']['SRC'];?>" class="sb_rw_avatar" alt="<?=$arItem['NAME'];?>"/>
            </a>
        <? }?>

        <span class="sb_rw_name"><?=$arItem['NAME'];?></span>
        <span class="sb_rw_job"><?echo $arItem['PROPERTIES']['POSITION']['VALUE'] . ' ' .  $arItem['PROPERTIES']['COMPANY']['VALUE'];?></span>
        <p><?=$arItem['PREVIEW_TEXT'];?></p>
        <div class="clearboth"></div>
        <div class="sb_rw_arrow"></div>
    </div>
<?endforeach;?>


