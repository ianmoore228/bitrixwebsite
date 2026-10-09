<?php

if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) {
    die();
}

$this->setFrameMode(true);

$iblockId = (int)($arParams['IBLOCK_ID'] ?? 0);
$iblock = $iblockId > 0
        ? \CIBlock::GetByID($iblockId)->Fetch()
        : false;

$heading = $iblock['NAME'] ?? 'Портфолио';
$description = $iblock['DESCRIPTION'] ?? '';

$items = $arResult['ITEMS'] ?? [];
//
//echo '<pre>';
//print_r($items);
//echo '</pre>';
?>

<section class="work-area pt-90 pb-60" id="portfolio">
    <div class="container">
        <div class="row">
            <div class="section-heading text-center mb-70">
                <h2><?= htmlspecialcharsbx($heading) ?></h2>

                <?php if ($description !== ''): ?>
                    <p><?= htmlspecialcharsbx($description) ?></p>
                <?php endif; ?>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <div class="portfolio-menu brand-filter text-center mb-70">
                    <div class="filter" data-filter="all">Все</div>
                    <div class="filter" data-filter=".landing">Лендинги</div>
                    <div class="filter" data-filter=".internet_shop">Интренет магазины</div>
                    <div class="filter" data-filter=".promo">Промо сайты</div>
                    <div class="filter" data-filter=".corporative_site">Корпоративные порталы</div>
                </div>
            </div>

            <div id="Container">
                <?php foreach ($items as $arItem): ?>
                    <?php
//                    $title = $arItem['NAME'];
////                    $subtitle = $arItem['PREVIEW_TEXT'] ?? '';
//
//                    $imageSrc = $arItem['PREVIEW_PICTURE']['SRC'];
//                    echo $arItem['NAME'];
//
//                    echo $arItem['PREVIEW_PICTURE']['SRC'];
//
//                    echo '<img src="' . htmlspecialcharsbx($imageSrc) . '" alt="">';
                    ?>


                    <div class="col-md-4 col-sm-6 col-xs-12 mb-30 mix landing promo">
                        <div class="portfolio-wrapper portfolio-title">
                            <div class="portfolio-img">
                                <img src="<?= $arItem['PREVIEW_PICTURE']['SRC']?>" alt=""/>
                                <div class="work-text brand-bg">
                                    <div class="inner-text">
                                        <a class="view-portfolio image-link" href="#">
                                            <span class="plus"></span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="portfolio-heading pd-15">
                                <h4 class="mb-10">
                                    <a href="#">Green Planet</a>
                                </h4>
                                <h5 class="m-0">Дизайн</h5>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</section>

