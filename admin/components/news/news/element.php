<? global $arResult; ?>
<div class="detail-news">
    <h2><?=$arResult['NAME']?></h2>
    <?if ($arResult['PREVIEW_IMAGE_PATH'] != ""):?>
        <img src="<?=$arResult['PREVIEW_IMAGE_PATH']?>" alt="<?=$arResult['NAME']?>">
    <?endif;?>
    <?=$arResult["DETAIL_TEXT"]?>
</div>