<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();

$arComponentDescription = array(
	"NAME" => GetMessage("CUSTOM_COMPONENT_NAME"),
	"DESCRIPTION" => GetMessage("MAIN_FEEDBACK_COMPONENT_DESCR"),
	"ICON" => "/images/feedback.gif",
	"PATH" => array(
        "ID" => "custom",
        'NAME'  => GetMessage('API_SEARCH_PAGE_CP_PATH_NAME'),
	),
);