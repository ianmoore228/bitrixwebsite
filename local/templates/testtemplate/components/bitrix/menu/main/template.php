<?php
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) {
    die();
}
?>

<ul class="main-menu text-right">

    <?php foreach ($arResult as $key => $arItem): ?>

        <?php if ($arItem["DEPTH_LEVEL"] == 1): ?>

            <li>

            <a href="<?= htmlspecialcharsbx($arItem["LINK"]) ?>"
                    <?php if ($arItem["SELECTED"]): ?>
                        style="color: #0aa0d0"
                    <?php endif; ?>>

                <?= htmlspecialcharsbx($arItem["TEXT"]) ?>

                <?php if ($arItem["IS_PARENT"]): ?>
                    <span class="indicator">
                            <i class="fa fa-angle-down"></i>
                        </span>
                <?php endif; ?>

            </a>

            <?php if ($arItem["IS_PARENT"]): ?>
                <ul class="dropdown">
            <?php endif; ?>

        <?php elseif ($arItem["DEPTH_LEVEL"] == 2): ?>

            <li>
                <a href="<?= htmlspecialcharsbx($arItem["LINK"]) ?>">
                    <?= htmlspecialcharsbx($arItem["TEXT"]) ?>
                </a>
            </li>

            <?php
            $nextItem = $arResult[$key + 1] ?? null;

            if (!$nextItem || $nextItem["DEPTH_LEVEL"] == 1):
                ?>
                </ul>
                </li>
            <?php endif; ?>

        <?php endif; ?>

    <?php endforeach; ?>

</ul>

