<?
function IncludeComponent($COMPONENT_NAME, $COMPONENT_TEMPLATE, $PARAMS) {
    $GLOBALS['TEMPLATE_NAME'] = $COMPONENT_TEMPLATE;
    $GLOBALS['arParams'] = $PARAMS;
    include(__DIR__."/$COMPONENT_NAME/start.php");
    unset($TEMPLATE_NAME);
    unset($arParams);
}
?>