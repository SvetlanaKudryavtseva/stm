<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

global $APPLICATION;

/*echo "component-epilog подключился";*/

?>

<?/*

function getViewedProductsId(){

    $viewedProductids = [];
    $filter = [

        '=SITE_ID' => SITE_ID
    ];

    $viewedIterator = Catalog\CatalogViewedProductTable::getList([
        'select' => ['ELEMENT_ID'],
        'filter' => $filter,
        'order' => ['DATE_VISIT' => 'DESC'],
        'limit' => 12
    ]);

    while ($viewedProduct = $viewedIterator->fetch()) {
        $viewedProductids[] = (int)$viewedProduct['ELEMENT_ID'];
    }

    print_r($viewedProductids);
}

*/?>
	<h2>Вы так же смотрели:</h2>
	<?
			$GLOBALS["APPLICATION"]->IncludeComponent(
			"bitrix:catalog.products.viewed",
			".default",
			Array(
				"ACTION_VARIABLE" => "action_cpv",
				"ADD_PROPERTIES_TO_BASKET" => "Y",
				"ADD_TO_BASKET_ACTION" => "ADD",
				"BASKET_URL" => "/personal/basket.php",
				"CACHE_GROUPS" => "Y",
				"CACHE_TIME" => "3600",
				"CACHE_TYPE" => "A",
				"COMPONENT_TEMPLATE" => ".default",
				"CONVERT_CURRENCY" => "N",
				"DEPTH" => "2",
				"DISPLAY_COMPARE" => "N",
				"ENLARGE_PRODUCT" => "STRICT",
				"HIDE_NOT_AVAILABLE" => "N",
				"HIDE_NOT_AVAILABLE_OFFERS" => "N",
				"IBLOCK_ID" => "43",
				"IBLOCK_MODE" => "single",
				"IBLOCK_TYPE" => "aspro_allcorp3_catalog",
				"LABEL_PROP_POSITION" => "top-left",
				"MESS_BTN_ADD_TO_BASKET" => "В корзину",
				"MESS_BTN_BUY" => "Купить",
				"MESS_BTN_DETAIL" => "Подробнее",
				"MESS_BTN_SUBSCRIBE" => "Подписаться",
				"MESS_NOT_AVAILABLE" => "Нет в наличии",
				"PAGE_ELEMENT_COUNT" => "6",
				"PARTIAL_PRODUCT_PROPERTIES" => "N",
				"PRICE_CODE" => array(),
				"PRICE_VAT_INCLUDE" => "Y",
				"PRODUCT_BLOCKS_ORDER" => "price,props,sku,quantityLimit,quantity,buttons",
				"PRODUCT_ID_VARIABLE" => "id",
				"PRODUCT_PROPS_VARIABLE" => "prop",
				"PRODUCT_QUANTITY_VARIABLE" => "quantity",
				"PRODUCT_ROW_VARIANTS" => "[{'VARIANT':'6','BIG_DATA':false}]",
				"PRODUCT_SUBSCRIPTION" => "N",
				"SECTION_CODE" => "",
				"SECTION_ELEMENT_CODE" => "",
				"SECTION_ELEMENT_ID" => $GLOBALS["CATALOG_CURRENT_ELEMENT_ID"],
				"SECTION_ID" => $GLOBALS["CATALOG_CURRENT_SECTION_ID"],
				"SHOW_CLOSE_POPUP" => "N",
				"SHOW_DISCOUNT_PERCENT" => "N",
				"SHOW_FROM_SECTION" => "N",
				"SHOW_MAX_QUANTITY" => "N",
				"SHOW_OLD_PRICE" => "N",
				"SHOW_PRICE_COUNT" => "1",
				"SHOW_SLIDER" => "Y",
				"SLIDER_INTERVAL" => "3000",
				"SLIDER_PROGRESS" => "Y",
				"TEMPLATE_THEME" => "green",
				"USE_ENHANCED_ECOMMERCE" => "N",
				"USE_PRICE_COUNT" => "N",
				"USE_PRODUCT_QUANTITY" => "N"
			)
		);
	?>
