/*
---------------------------------------------
-       ����������ȫ��v8.13.0�û�           -
---------------------------------------------
*/

ALTER TABLE `vendings` ADD COLUMN `extended_vending_item` smallint(5) unsigned NOT NULL DEFAULT '0' AFTER `sit`;
