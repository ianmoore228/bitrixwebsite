<?php
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) {
    die();
}

if (empty($arResult)) {
    return;
}
?>

<div class="breadcrumb-area brand-bg ptb-100">
    <div class="container width-100">
        <div class="row z-index">

            <div class="col-md-7 col-sm-6">
                <div class="breadcrumb-title">
                    <h2 class="white-text">
<!--                        --><?php //= htmlspecialcharsbx($arResult[0]["TITLE"]) ?>
                    </h2>
                </div>
            </div>

            <div class="col-md-5 col-sm-6">
                <div class="breadcrumb-menu">
                    <ol class="breadcrumb text-right">

                        <?php foreach ($arResult as $item): ?>

                            <li>

                                <?php if (!empty($item["LINK"])): ?>

                                    <a href="<?= $item["LINK"] ?>">
                                        <?= $item["TITLE"] ?>
                                    </a>

                                <?php else: ?>

                                    <span>
                                        <?= $item["TITLE"] ?>
                                    </span>

                                <?php endif; ?>

                            </li>

                        <?php endforeach; ?>

                    </ol>
                </div>
            </div>

        </div>
    </div>
</div>