<?php if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
?>

<?php

if (!empty($arResult)) : ?>

<section class="who-area-are pad-90" id="about_us">

<!--    <h1>TESTTTTTTT</h1>-->
    <div class="container">
        <h2 class="title-1">
            <?= isset($arResult["NAME"]) ? $arResult["NAME"] : '' ?>

        </h2>
        <div class="row">
            <div class="col-md-7">
                <div class="who-we">
                    <p>
                        <?= isset($arResult["DETAIL_TEXT"]) ? $arResult["DETAIL_TEXT"] : '' ?>
                    </p>
                </div>
            </div>
            <div class="col-md-5">
                <?php if (!empty($arResult["PREVIEW_PICTURE"]["SRC"])): ?>
                    <div class="about-bg">
                        <img src="<?= $arResult["PREVIEW_PICTURE"]["SRC"] ?>" alt="">
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>


<?php endif;?>

<!---->
<!--<div class="news-detail">-->
<!--	--><?//if((!isset($arParams["DISPLAY_PICTURE"]) || $arParams["DISPLAY_PICTURE"]!="N") && is_array($arResult["DETAIL_PICTURE"])):?>
<!--		<img-->
<!--			class="detail_picture"-->
<!--			border="0"-->
<!--			src="--><?php //=$arResult["DETAIL_PICTURE"]["SRC"]?><!--"-->
<!--			width="--><?php //=$arResult["DETAIL_PICTURE"]["WIDTH"]?><!--"-->
<!--			height="--><?php //=$arResult["DETAIL_PICTURE"]["HEIGHT"]?><!--"-->
<!--			alt="--><?php //=$arResult["DETAIL_PICTURE"]["ALT"]?><!--"-->
<!--			title="--><?php //=$arResult["DETAIL_PICTURE"]["TITLE"]?><!--"-->
<!--			/>-->
<!--	--><?//endif?>
<!--	--><?//if((!isset($arParams["DISPLAY_DATE"]) || $arParams["DISPLAY_DATE"]!="N") && $arResult["DISPLAY_ACTIVE_FROM"]):?>
<!--		<span class="news-date-time">--><?php //=$arResult["DISPLAY_ACTIVE_FROM"]?><!--</span>-->
<!--	--><?//endif;?>
<!--	--><?//if((!isset($arParams["DISPLAY_NAME"]) || $arParams["DISPLAY_NAME"]!="N") && $arResult["NAME"]):?>
<!--		<h3>--><?php //=$arResult["NAME"]?><!--</h3>-->
<!--	--><?//endif;?>
<!--	--><?//if((!isset($arParams["DISPLAY_PREVIEW_TEXT"]) || $arParams["DISPLAY_PREVIEW_TEXT"]!="N") && ($arResult["FIELDS"]["PREVIEW_TEXT"] ?? '') !== ''):?>
<!--		<p>--><?php //=$arResult["FIELDS"]["PREVIEW_TEXT"];unset($arResult["FIELDS"]["PREVIEW_TEXT"]);?><!--</p>-->
<!--	--><?//endif;?>
<!--	--><?//if($arResult["NAV_RESULT"]):?>
<!--		--><?//if($arParams["DISPLAY_TOP_PAGER"]):?><!----><?php //=$arResult["NAV_STRING"]?><!--<br />--><?//endif;?>
<!--		--><?//echo $arResult["NAV_TEXT"];?>
<!--		--><?//if($arParams["DISPLAY_BOTTOM_PAGER"]):?><!--<br />--><?php //=$arResult["NAV_STRING"]?><!----><?//endif;?>
<!--	--><?//elseif($arResult["DETAIL_TEXT"] <> ''):?>
<!--		--><?//echo $arResult["DETAIL_TEXT"];?>
<!--	--><?//else:?>
<!--		--><?//echo $arResult["PREVIEW_TEXT"];?>
<!--	--><?//endif?>
<!--	<div style="clear:both"></div>-->
<!--	<br />-->
<!--	--><?//foreach($arResult["FIELDS"] as $code=>$value):
//		if ('PREVIEW_PICTURE' == $code || 'DETAIL_PICTURE' == $code)
//		{
//			?><!----><?php //=GetMessage("IBLOCK_FIELD_".$code)?><!--:&nbsp;--><?//
//			if (!empty($value) && is_array($value))
//			{
//				?><!--<img border="0" src="--><?php //=$value["SRC"]?><!--" width="--><?php //=$value["WIDTH"]?><!--" height="--><?php //=$value["HEIGHT"]?><!--">--><?//
//			}
//		}
//		else
//		{
//			?><!----><?php //=GetMessage("IBLOCK_FIELD_".$code)?><!--:&nbsp;--><?php //=$value;?><!----><?//
//		}
//		?><!--<br />-->
<!--	--><?//endforeach;
//	foreach($arResult["DISPLAY_PROPERTIES"] as $pid=>$arProperty):?>
<!---->
<!--		--><?php //=$arProperty["NAME"]?><!--:&nbsp;-->
<!--		--><?//if(is_array($arProperty["DISPLAY_VALUE"])):?>
<!--			--><?php //=implode("&nbsp;/&nbsp;", $arProperty["DISPLAY_VALUE"]);?>
<!--		--><?//else:?>
<!--			--><?php //=$arProperty["DISPLAY_VALUE"];?>
<!--		--><?//endif?>
<!--		<br />-->
<!--	--><?//endforeach;
//	if(array_key_exists("USE_SHARE", $arParams) && $arParams["USE_SHARE"] == "Y")
//	{
//		?>
<!--		<div class="news-detail-share">-->
<!--			<noindex>-->
<!--			--><?//
//			$APPLICATION->IncludeComponent("bitrix:main.share", "", array(
//					"HANDLERS" => $arParams["SHARE_HANDLERS"],
//					"PAGE_URL" => $arResult["~DETAIL_PAGE_URL"],
//					"PAGE_TITLE" => $arResult["~NAME"],
//					"SHORTEN_URL_LOGIN" => $arParams["SHARE_SHORTEN_URL_LOGIN"],
//					"SHORTEN_URL_KEY" => $arParams["SHARE_SHORTEN_URL_KEY"],
//					"HIDE" => $arParams["SHARE_HIDE"],
//				),
//				$component,
//				array("HIDE_ICONS" => "Y")
//			);
//			?>
<!--			</noindex>-->
<!--		</div>-->
<!--		--><?//
//	}
//	?>
<!--</div>-->