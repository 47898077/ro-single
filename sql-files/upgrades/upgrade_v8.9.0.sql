/*
--------------------------------------------
-         ����������ȫ��v8.8.0�û�         -
--------------------------------------------
*/

-- ������ 2014.09.09 --
ALTER TABLE `char` MODIFY COLUMN `uniqueitem_counter` int(11) unsigned NOT NULL default '0';

-- ������ 2014.09.21 --
ALTER TABLE `mail` ADD `bound` TINYINT( 1 ) UNSIGNED NOT NULL DEFAULT '0';
ALTER TABLE `picklog` ADD `bound` TINYINT( 1 ) UNSIGNED NOT NULL DEFAULT '0';
