<?php

/**
 *      [Discuz!] (C)2001-2099 Comsenz Inc.
 *      This is NOT a freeware, use is subject to license terms
 *
 *      $Id: install.php 31281 2012-08-03 02:29:27Z zhangjie $
 */

if(!defined('IN_DISCUZ')) {
	exit('Access Denied');
}

$sql = <<<EOF

DROP TABLE IF EXISTS pre_common_devicetoken;
CREATE TABLE pre_common_devicetoken (
  `uid` mediumint(8) unsigned NOT NULL,
  `token` char(50) NOT NULL,
  PRIMARY KEY (`uid`),
  KEY `token` (`token`)
) ENGINE=MyISAM;

DROP TABLE IF EXISTS pre_mobile_setting;
CREATE TABLE pre_mobile_setting (
  `skey` varchar(255) NOT NULL DEFAULT '',
  `svalue` text NOT NULL,
  PRIMARY KEY (`skey`)
) ENGINE=MyISAM;

REPLACE INTO pre_mobile_setting VALUES ('extend_used', '1');
REPLACE INTO pre_mobile_setting VALUES ('extend_lastupdate', '1343182299');

EOF;

runquery($sql);

$finish = TRUE;

?>