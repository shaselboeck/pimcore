<?php

$db = \Pimcore\Db::get();

$db->query('ALTER TABLE `documents_page` CHANGE COLUMN `description` `description` VARCHAR(383) NULL DEFAULT NULL;');
$db->query('ALTER table users ADD COLUMN `lastLogin` int(11) unsigned NULL;');
