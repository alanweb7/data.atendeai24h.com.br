<?php

defined('BASEPATH') or exit('No direct script access allowed');

/**
* if (!$CI->db->table_exists(db_prefix() . 'notifications')) {
*    $CI->db->query("
*        CREATE TABLE `" . db_prefix() . "notifications` (
*            `id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
*            `title` VARCHAR(255) NOT NULL,
*            `description` TEXT,
*            `created_at` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
*            PRIMARY KEY (`id`)
*        ) ENGINE=InnoDB DEFAULT CHARSET=;
*    ");
*}
**/