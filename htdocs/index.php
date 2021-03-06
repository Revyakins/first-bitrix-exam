<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Мебельная компания");
?><p>
	 <?$APPLICATION->IncludeComponent(
	"api:search.page",
	"",
	Array(
		"BUTTON_TEXT" => "НАЙТИ",
		"CONVERT_CURRENCY" => "N",
		"DISPLAY_BOTTOM_PAGER" => "Y",
		"DISPLAY_TOP_PAGER" => "N",
		"IBLOCK_2_FIELD" => array("NAME"),
		"IBLOCK_2_PROPERTY" => array(""),
		"IBLOCK_2_REGEX" => "",
		"IBLOCK_2_SECTION" => array("",""),
		"IBLOCK_2_SHOW_FIELD" => array(""),
		"IBLOCK_2_SHOW_PROPERTY" => array(""),
		"IBLOCK_2_SHOW_SECTION" => "N",
		"IBLOCK_2_TITLE" => "[s1] Продукция",
		"IBLOCK_ID" => array("2"),
		"IBLOCK_TYPE" => array("products"),
		"INCLUDE_CSS" => "Y",
		"INCLUDE_JQUERY" => "N",
		"INPUT_PLACEHOLDER" => "Поиск",
		"ITEMS_LIMIT" => "15",
		"MORE_BUTTON_CLASS" => "api-button",
		"MORE_BUTTON_TEXT" => "",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "N",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_TEMPLATE" => ".default",
		"PAGER_TITLE" => "Результаты поиска",
		"PICTURE" => array(),
		"PRICE_CODE" => array(),
		"PRICE_EXT" => "N",
		"PRICE_VAT_INCLUDE" => "Y",
		"RESIZE_PICTURE" => "64x64",
		"RESULT_NOT_FOUND" => "По вашему запросу ничего не найдено...",
		"SEARCH_MODE" => "EXACT",
		"SORT_BY1" => "SORT",
		"SORT_BY2" => "SHOW_COUNTER",
		"SORT_BY3" => "NAME",
		"SORT_ORDER1" => "ASC",
		"SORT_ORDER2" => "DESC",
		"SORT_ORDER3" => "ASC",
		"THEME" => "list",
		"TRUNCATE_LENGTH" => "",
		"USE_CURRENCY_SYMBOL" => "N",
		"USE_TITLE_RANK" => "Y"
	)
);?><br>
</p>
<p>
	 Наша компания существует на Российском рынке с 1992 года. За это время «Мебельная компания» прошла большой путь от маленькой торговой фирмы до одного из крупнейших производителей корпусной мебели в России.
</p>
<p>
	 «Мебельная компания» осуществляет производство мебели на высококлассном оборудовании с применением минимальной доли ручного труда, что позволяет обеспечить высокое качество нашей продукции. Налажен производственный процесс как массового и индивидуального характера, что с одной стороны позволяет обеспечить постоянную номенклатуру изделий и индивидуальный подход – с другой.
</p>
<h3>Наша продукция</h3>
 <?$APPLICATION->IncludeComponent(
	"bitrix:furniture.catalog.index",
	"",
	Array(
		"CACHE_GROUPS" => "N",
		"CACHE_TIME" => "36000000",
		"CACHE_TYPE" => "A",
		"IBLOCK_BINDING" => "section",
		"IBLOCK_ID" => "2",
		"IBLOCK_TYPE" => "products"
	)
);?>
<h3>Наши услуги</h3>
 <?$APPLICATION->IncludeComponent(
	"bitrix:furniture.catalog.index",
	"",
	Array(
		"CACHE_GROUPS" => "N",
		"CACHE_TIME" => "36000000",
		"CACHE_TYPE" => "A",
		"IBLOCK_BINDING" => "element",
		"IBLOCK_ID" => "3",
		"IBLOCK_TYPE" => "products"
	)
);?> <br>
 <br>
<h2>Выставка новых образцов</h2>
 <img src="/local/templates/exam/content/10.png" align="left" alt="">
<p>
	 Ваш портал приобретет все возможности для осуществления горизонтальных коммуникаций и управлению Экстранетом. Вы сможете организовать внутри компании коллективную работу над проектами в рабочих группах, вести учет и планирование времени и событий, обмениваться сообщениями и почтой через портал, проводить внутри компании видеоконференции и делать многое другое.
</p>
<h3>Заголовок</h3>
<p>
 <i>Можете сразу перейти с «младшей», базовой редакции на «Бизнес-процессы». После такого перехода ваш портал можно будет интегрировать с внешним сайтом, на портале добавятся возможности визуального проектирования бизнес-процессов и управления списками, включая списки в рабочих группах. Кроме того, вы сможете анализировать посещаемость своего портала </i>
</p>
<p>
	 При переходе вся информация на портале сохранится. Вам не потребуется создавать сайт заново. С помощью технологии SiteUpdate вы получите новые модули продукта и установите их без помощи разработчиков.
</p>
 <br>
<p>
</p><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>