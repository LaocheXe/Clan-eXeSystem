<?php exit;?>

CREATE TABLE IF NOT EXISTS `rostercat_exe` (
  `rocat_id` int(10) NOT NULL AUTO_INCREMENT,
  `rocat_name` varchar(255) NOT NULL,
  `rocat_tags` varchar(5) DEFAULT NULL,
  `rocat_description` text,
  `rocat_image` varchar(255) DEFAULT NULL,
  `rocat_parent` int(10) NOT NULL,
  `rocat_sub` int(10) unsigned NOT NULL default '0',
  `rocat_order` int(10) NOT NULL,
  PRIMARY KEY (`rocat_id`)
) ENGINE=MyISAM AUTO_INCREMENT=1;

CREATE TABLE IF NOT EXISTS `roster_exe` (
  `rost_id` int(10) NOT NULL AUTO_INCREMENT,
  `rank_id` int(10) NOT NULL,
  `user_id` int(10) NOT NULL,
  `rocat_id` int(10) DEFAULT NULL,
  `pos_id` int(10) DEFAULT NULL,
  `award_id` text,
  `badge_id` text,
  `medal_id` text,
  `patch_id` text,
  `pin_id` text,
  `qual_id` text,
  `ribbon_id` text,
  `train_id` text,
  PRIMARY KEY (`rost_id`)
) ENGINE=MyISAM AUTO_INCREMENT=1;