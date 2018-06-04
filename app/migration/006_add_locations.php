<?php defined ('OACI') || exit ('此檔案不允許讀取。');

/**
 * @author      OA Wu <comdan66@gmail.com>
 * @copyright   Copyright (c) 2013 - 2018, OACI
 * @license     http://opensource.org/licenses/MIT  MIT License
 * @link        https://www.ioa.tw/
 */

return array (
    'up' => "CREATE TABLE `locations` (
      `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
      
      `event_id` int(11) unsigned NOT NULL DEFAULT '0' COMMENT '事件',
      `latitude` double DEFAULT NULL COMMENT '緯度',
      `longitude` double DEFAULT NULL COMMENT '經度',
      `altitude` double DEFAULT NULL COMMENT '高度，以水平為 0，高為正，低為負，單位為公尺',
      `horizontal_accuracy` double NOT NULL DEFAULT '-1' COMMENT '水平準度，-1 代表經緯度無效',
      `vertical_accuracy` double NOT NULL DEFAULT '-1' COMMENT '垂直準度，-1 代表無效',
      `speed` double NOT NULL DEFAULT '-1' COMMENT '速度 m/s，負數代表無效',
      `course` double NOT NULL DEFAULT '-1' COMMENT '方向，北 0，南 180，東 90，西 270，-1 代表無效',
      `time` datetime DEFAULT NULL COMMENT 'GPS 裝置時間',
      `battery` double DEFAULT NULL COMMENT 'GPS 裝置電量',
      `ori_id` int(11) unsigned NOT NULL DEFAULT '0' COMMENT '原始 ID',
      
      `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT '新增時間',
      PRIMARY KEY (`id`)
    ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;",

    'down' => "DROP TABLE `locations`;",
    'at' => "2018-05-27 15:11:44",
  );