<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
IncludeTemplateLangFile(__FILE__); ?>

<head>
    <?
    $APPLICATION->ShowHead();
    $dir = $APPLICATION->GetCurDir();
    ?>

    <title><?$APPLICATION->ShowTitle()?></title>

    <? $APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH . '/js/jquery-1.8.2.min.js'); ?>
    <? $APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH . '/js/functions.js'); ?>

    <!--[if gte IE 9]><style type="text/css">.gradient {filter: none;}</style><![endif]-->
</head>
<body>
<div class="wrap">
    <div id="panel"><?$APPLICATION->ShowPanel();?></div>
    <div class="hd_header_area">
        <div class="hd_header">
            <table>
                <tr>
                    <td rowspan="2" class="hd_companyname">
                        <h1>
                            <? if($dir == '/products/') {?>
                            <a style="color: #2e76b4" href="<?=SITE_DIR?>">Мебельный магазин</a></h1>
                            <? } else { ?>
                            <a href="<?=SITE_DIR?>">Мебельный магазин</a></h1>
                            <? } ?>
                    </td>
                    <td rowspan="2" class="hd_txarea">
                        <span class="tel">8 (495) 212-85-06</span>	<br/>
                        <?=GetMessage('WORKING_TIME')?> <span class="workhours">ежедневно с 9-00 до 18-00</span>
                    </td>
                    <td style="width:232px">

                        <?$APPLICATION->IncludeComponent(
                            "bitrix:search.form",
                            "search",
                            Array(
                                "PAGE" => "#SITE_DIR#search/index.php",
                                "USE_SUGGEST" => "N"
                            )
                        );?>

                    </td>
                </tr>
                <tr>
                    <td style="padding-top: 11px;">
    <?$APPLICATION->IncludeComponent(
	"bitrix:system.auth.form", 
	"auth", 
	array(
		"FORGOT_PASSWORD_URL" => "/person/",
		"PROFILE_URL" => "/person/profil.php",
		"REGISTER_URL" => "/person/registratsiya.php",
		"SHOW_ERRORS" => "Y",
		"COMPONENT_TEMPLATE" => "auth"
	),
	false
);?>

                    </td>
                </tr>
            </table>

            <?$APPLICATION->IncludeComponent(
	"bitrix:menu", 
	"main_menu", 
	array(
		"ALLOW_MULTI_SELECT" => "N",
		"CHILD_MENU_TYPE" => "left",
		"DELAY" => "N",
		"MAX_LEVEL" => "2",
		"MENU_CACHE_GET_VARS" => array(
		),
		"MENU_CACHE_TIME" => "3600",
		"MENU_CACHE_TYPE" => "A",
		"MENU_CACHE_USE_GROUPS" => "Y",
		"ROOT_MENU_TYPE" => "top",
		"USE_EXT" => "N",
		"COMPONENT_TEMPLATE" => "main_menu"
	),
	false
);?>
        </div>
    </div>

    <!--- // end header area --->
    <?$APPLICATION->IncludeComponent(
        "bitrix:breadcrumb",
        "bread",
        Array(
            "PATH" => "",
            "SITE_ID" => "s1",
            "START_FROM" => "0"
        )
    );?>


    <div class="main_container page">
        <div class="mn_container">
            <div class="mn_content">
                <div class="main_post">
                    <div class="main_title">
                        <h1><? $APPLICATION->ShowTitle(false); ?></h1>
                    </div>

