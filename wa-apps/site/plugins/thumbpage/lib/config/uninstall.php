<?php

$model = new waModel();
try {
    $model->exec("ALTER TABLE `site_page` DROP `thumbpage`");
} catch (waDbException $e) {

}

