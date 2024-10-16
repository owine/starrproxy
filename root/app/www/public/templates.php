<?php

/*
----------------------------------
 ------  Created: 101124   ------
 ------  Austin Best	   ------
----------------------------------
*/

$templateList = getTemplateList();
?>

<div class="row p3">
    <div class="col-sm-1">
    <?php
    $index = 0;
    foreach ($templateList as $app => $starrApps) {
        ?>
        <h4><?= $app ?></h4>
        <ul>
            <?php
            foreach ($starrApps as $starrApp) {
                $index++;
                ?><li class="app-index-<?= $index ?>" style="cursor: pointer;" onclick="viewTemplate('<?= $starrApp ?>/<?= $app ?>.json', <?= $index ?>)"><?= $starrApp ?></li><?php
            }
            ?>
        </ul>
        <?php
    }
    ?>
    </div>
    <div class="col-sm-11">
        <div id="template-viewer" class="mt-1"></div>
    </div>
</div>
