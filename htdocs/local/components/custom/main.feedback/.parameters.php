<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();


$arComponentParameters = array(
	"PARAMETERS" => array(
		"DEFAULT_TITLE" => Array(
			"NAME" => GetMessage("MFP_TITLE"),
			"TYPE" => "STRING",
			"DEFAULT" => GetMessage("MFP_DEFAULT_TITLE"),
			"PARENT" => "BASE",
		),
        "DEFAULT_DESC" => Array(
            "NAME" => GetMessage("DEFAULT_DESC"),
            "TYPE" => "STRING",
            "DEFAULT" => GetMessage("MFP_DEFAULT_DESC"),
            "PARENT" => "BASE",
        ),
        "BUTTON_TEXT" => Array(
            "NAME" => GetMessage("BUTTON_TEXT"),
            "TYPE" => "STRING",
            "DEFAULT" => GetMessage("DEFAULT_BUTTON_TEXT"),
            "PARENT" => "BASE",
        ),
        "CACHE_TIME"  =>  array("DEFAULT"=>36000000),
	)
);

