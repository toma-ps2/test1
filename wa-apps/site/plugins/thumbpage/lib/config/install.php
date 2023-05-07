<?php

$model = new waModel();
try {
    $sql = 'SELECT `thumbpage` FROM `site_page` WHERE 0';
    $model->query($sql);
} catch (waDbException $ex) {
    $sql = 'ALTER TABLE  `site_page` ADD  `thumbpage` varchar(255) DEFAULT NULL ';
    $model->query($sql);
}