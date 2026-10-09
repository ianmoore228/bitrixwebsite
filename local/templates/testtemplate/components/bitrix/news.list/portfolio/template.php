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

$sections = [];

$rsSections = \CIBlockSection::GetList(
        ['SORT' => 'ASC', 'NAME' => 'ASC'],
        [
                'IBLOCK_ID' => $iblockId,
                'ACTIVE' => 'Y',
                'GLOBAL_ACTIVE' => 'Y',
        ],
        false,
        ['ID', 'NAME', 'CODE']
);

while ($section = $rsSections->Fetch()) {
    if (!empty($section['CODE'])) {
        $sections[] = $section;
    }
}

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

                        <?php foreach ($sections as $section): ?>
                            <div
                                    class="filter"
                                    data-filter=".<?= htmlspecialcharsbx($section['CODE']) ?>"
                            >
                                <?= htmlspecialcharsbx($section['NAME']) ?>
                            </div>
                        <?php endforeach; ?>

                </div>
            </div>

            <div id="Container">
                <?php foreach ($items as $arItem): ?>
                    <?php
                    $imageSrc = $arItem['PREVIEW_PICTURE']['SRC'] ?? '';

                    $sectionId = (int)($arItem['IBLOCK_SECTION_ID'] ?? 0);
                    $sectionCode = '';

                    foreach ($sections as $section) {
                        if ((int)$section['ID'] === $sectionId) {
                            $sectionCode = $section['CODE'];
                            break;
                        }
                    }
                    ?>

                    <div class="col-md-4 col-sm-6 col-xs-12 mb-30 mix <?= htmlspecialcharsbx($sectionCode) ?>">
                        <div class="portfolio-wrapper portfolio-title">
                            <div class="portfolio-img">
                                <?php if ($imageSrc !== ''): ?>
                                    <img
                                            src="<?= htmlspecialcharsbx($imageSrc) ?>"
                                            alt="<?= htmlspecialcharsbx($arItem['NAME'] ?? '') ?>"
                                    >
                                <?php endif; ?>

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
                                    <a href="#">
                                        <?= htmlspecialcharsbx($arItem['NAME'] ?? '') ?>
                                    </a>
                                </h4>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</section>

