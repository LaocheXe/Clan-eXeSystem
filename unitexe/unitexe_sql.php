<?php exit;?>

CREATE TABLE IF NOT EXISTS `awards_exesystem` (
  `award_id` int(10) NOT NULL AUTO_INCREMENT,
  `award_name` varchar(200) NOT NULL,
  `award_description` text NOT NULL,
  `award_image` varchar(255) NOT NULL,
  PRIMARY KEY (`award_id`)
) ENGINE=MyISAM AUTO_INCREMENT=1;

CREATE TABLE IF NOT EXISTS `badges_exesystem` (
  `badge_id` int(10) NOT NULL AUTO_INCREMENT,
  `badge_name` varchar(200) NOT NULL,
  `badge_description` text NOT NULL,
  `badge_image` varchar(255) NOT NULL,
  PRIMARY KEY (`badge_id`)
) ENGINE=MyISAM AUTO_INCREMENT=1;

CREATE TABLE IF NOT EXISTS `medals_exesystem` (
  `medal_id` int(10) NOT NULL AUTO_INCREMENT,
  `medal_name` varchar(200) NOT NULL,
  `medal_description` text NOT NULL,
  `medal_image` varchar(255) NOT NULL,
  PRIMARY KEY (`medal_id`)
) ENGINE=MyISAM AUTO_INCREMENT=1;

CREATE TABLE IF NOT EXISTS `patches_exesystem` (
  `patch_id` int(10) NOT NULL AUTO_INCREMENT,
  `patch_name` varchar(200) NOT NULL,
  `patch_description` text NOT NULL,
  `patch_image` varchar(255) NOT NULL,
  PRIMARY KEY (`patch_id`)
) ENGINE=MyISAM AUTO_INCREMENT=1;

CREATE TABLE IF NOT EXISTS `pins_exesystem` (
  `pin_id` int(10) NOT NULL AUTO_INCREMENT,
  `pin_name` varchar(200) NOT NULL,
  `pin_description` text NOT NULL,
  `pin_image` varchar(255) NOT NULL,
  PRIMARY KEY (`pin_id`)
) ENGINE=MyISAM AUTO_INCREMENT=1;

CREATE TABLE IF NOT EXISTS `qualifications_exesystem` (
  `qual_id` int(10) NOT NULL AUTO_INCREMENT,
  `qual_name` varchar(200) NOT NULL,
  `qual_description` text NOT NULL,
  `qual_image` varchar(255) NOT NULL,
  PRIMARY KEY (`qual_id`)
) ENGINE=MyISAM AUTO_INCREMENT=1;

CREATE TABLE IF NOT EXISTS `ranks_exesystem` (
  `rank_id` int(10) NOT NULL AUTO_INCREMENT,
  `rank_fullname` varchar(250) NOT NULL,
  `rank_shortname` varchar(5) NOT NULL,
  `rank_description` text,
  `rank_image` varchar(255) DEFAULT NULL,
  `rank_parent` int(10) unsigned NOT NULL DEFAULT '0',
  `rank_order` int(10) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`rank_id`),
  KEY `rank_parent` (`rank_parent`)
) ENGINE=MyISAM AUTO_INCREMENT=1;

CREATE TABLE IF NOT EXISTS `ribbons_exesystem` (
  `ribbon_id` int(10) NOT NULL AUTO_INCREMENT,
  `ribbon_name` varchar(200) NOT NULL,
  `ribbon_description` text NOT NULL,
  `ribbon_image` varchar(255) NOT NULL,
  PRIMARY KEY (`ribbon_id`)
) ENGINE=MyISAM AUTO_INCREMENT=1;

CREATE TABLE IF NOT EXISTS `training_exesystem` (
  `train_id` int(10) unsigned NOT NULL auto_increment,
  `train_name` varchar(250) NOT NULL default '',
  `train_description` text,
  `train_parent` int(10) unsigned NOT NULL default '0',
  `train_sub` int(10) unsigned NOT NULL default '0',
  `train_order` int(10) unsigned NOT NULL default '0',
  PRIMARY KEY  (`train_id`),
  KEY `train_parent` (`train_parent`),
  KEY `train_sub` (`train_sub`)
) ENGINE=MyISAM AUTO_INCREMENT=1;

CREATE TABLE IF NOT EXISTS `loa_exesystem` (
  `loa_id` int(10) NOT NULL AUTO_INCREMENT,
  `user_id` int(10) NOT NULL,
  `created_date` int(10) NOT NULL,
  `start_date` int(10) NOT NULL,
  `end_date`int(10) NOT NULL,
  `approvaed_date` int(10) NOT NULL,
  `reason` text NOT NULL,
  `status_id` int(10) NOT NULL,
  `returned` text NOT NULL,
  `approved_user_id` int(10) NOT NULL,
  `rocat_id` int(10) NOT NULL,
  PRIMARY KEY  (`loa_id`)
) ENGINE=MyISAM AUTO_INCREMENT=1;

CREATE TABLE IF NOT EXISTS `status_exesystem` (
  `status_id` int(10) NOT NULL AUTO_INCREMENT,
  `status` text NOT NULL,
  `hex_color` text NOT NULL,
  PRIMARY KEY(`status_id`)
) ENGINE=MyISAM AUTO_INCREMENT=1;
