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
  `user_class'	int(10) NOT NULL,
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
  `enlistment_date` int(10) NOT NULL,
  `induction_date` int(10) NOT NULL,
  `promotion_date` int(10) NOT NULL,
  `recruiter_id` int(10) NOT NULL,
  `recruiting_medium` text,
  `application_id` int(10) NOT NULL,
  `status_id` int(10) NOT NULL,
  `mos` text,
  `serial` text,
  `supervisor` int(10) NOT NULL,
  `admin_unit` text,
  `timezone` text,
  `country` text,
  PRIMARY KEY (`rost_id`)
) ENGINE=MyISAM AUTO_INCREMENT=1;

CREATE TABLE IF NOT EXISTS `mos_exe` (
  `mos_id` int(10) NOT NULL auto_increment,
  `mos` text,
  `mos_description` text,
  PRIMARY KEY(`mos_id`)
) ENGINE=MyISAM AUTO_INCREMENT=1;

CREATE TABLE IF NOT EXISTS `requests_exe` (
  `request_id` int(10) NOT NULL AUTO_INCREMENT,
  `user_id` int(10) NOT NULL,
  `date` int(10) NOT NULL,
  `description` text,
  `rtype_id` int(10) NOT NULL,
  `status_id` int(10) NOT NULL,
  `accepted_id` int(10) NULL,
  PRIMARY KEY(`request_id`)
) ENGINE=MyISAM AUTO_INCREMENT=1;

CREATE TABLE IF NOT EXISTS `service_records_exe` (
  `sr_id` int(10) NOT NULL auto_increment,
  `user_id int(11) NOT NULL,
  `date` int(10) NOT NULL,
  `entry` text,
  `type` text,
  `award` text,
  `rank` text,
  `citation` text,
  `discharge_grade` text,
  `position` text,
  `rocat_id` int(10) DEFAULT NULL,
  `display` text,
  PRIMARY KEY(`sr_id`)
) ENGINE=MyISAM AUTO_INCREMENT=1;

CREATE TABLE IF NOT EXISTS `promitions_exe` (
  `promo_id` int(10) NOT NULL AUTO_INCREMENT,
  `user_id` int(10) NOT NULL,
  `current_rank' int(10) NOT NULL,
  `prom_rank` int(10) NOT NULL,
  `reason` text,
  `who_promo` int(10) NOT NULL,
  `date` int(10) NOT NULL,
  PRIMARY KEY(`promo_id`)
) ENGINE=MyISAM AUTO_INCREMENT=1;

CREATE TABLE IF NOT EXISTS `retype_exe` (
  `rtype_id` int(10) NOT NULL AUTO_INCREMENT,
  `request` text NOT NULL,
  `rtype_description` text,
  PRIMARY KEY(`rtype_id`)
) ENGINE=MyISAM AUTO_INCREMENT=1;