-- phpMyAdmin SQL Dump
-- version 3.2.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Aug 09, 2010 at 10:27 AM
-- Server version: 5.1.41
-- PHP Version: 5.3.1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `formdata`
--

-- --------------------------------------------------------

--
-- Table structure for table `ap_column_preferences`
--

CREATE TABLE IF NOT EXISTS `ap_column_preferences` (
  `acp_id` int(11) NOT NULL AUTO_INCREMENT,
  `form_id` int(11) DEFAULT NULL,
  `element_name` varchar(255) NOT NULL DEFAULT '',
  `position` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`acp_id`),
  KEY `acp_position` (`form_id`,`position`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `ap_column_preferences`
--


-- --------------------------------------------------------

--
-- Table structure for table `ap_element_options`
--

CREATE TABLE IF NOT EXISTS `ap_element_options` (
  `aeo_id` int(11) NOT NULL AUTO_INCREMENT,
  `form_id` int(11) NOT NULL DEFAULT '0',
  `element_id` int(11) NOT NULL DEFAULT '0',
  `option_id` int(11) NOT NULL DEFAULT '0',
  `position` int(11) NOT NULL DEFAULT '0',
  `option` text,
  `option_is_default` int(11) NOT NULL DEFAULT '0',
  `live` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`aeo_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `ap_element_options`
--

INSERT INTO `ap_element_options` (`aeo_id`, `form_id`, `element_id`, `option_id`, `position`, `option`, `option_is_default`, `live`) VALUES
(1, 1, 6, 1, 1, 'First option', 0, 1),
(2, 1, 6, 2, 2, 'Second option', 0, 1),
(3, 1, 6, 3, 3, 'Third option', 0, 1),
(9, 2, 18, 1, 1, 'One', 0, 1),
(9, 2, 17, 3, 3, 'PR/Marketing', 0, 1),
(8, 2, 17, 2, 2, 'Photography', 0, 1),
(7, 2, 17, 1, 1, 'Editorial', 0, 1),
(10, 2, 18, 2, 2, 'Two', 0, 1),
(11, 2, 18, 3, 3, 'Three', 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `ap_forms`
--

CREATE TABLE IF NOT EXISTS `ap_forms` (
  `form_id` int(11) NOT NULL AUTO_INCREMENT,
  `form_name` text,
  `form_description` text,
  `form_email` varchar(255) DEFAULT NULL,
  `form_redirect` text,
  `form_success_message` text,
  `form_password` varchar(100) DEFAULT NULL,
  `form_unique_ip` int(1) NOT NULL DEFAULT '0',
  `form_frame_height` int(11) DEFAULT NULL,
  `form_has_css` int(11) NOT NULL DEFAULT '0',
  `form_captcha` int(11) NOT NULL DEFAULT '0',
  `form_active` int(11) NOT NULL DEFAULT '1',
  `form_review` int(11) NOT NULL DEFAULT '0',
  `esl_from_name` text,
  `esl_from_email_address` varchar(255) DEFAULT NULL,
  `esl_subject` text,
  `esl_content` mediumtext,
  `esl_plain_text` int(11) NOT NULL DEFAULT '0',
  `esr_email_address` varchar(255) DEFAULT NULL,
  `esr_from_name` text,
  `esr_from_email_address` varchar(255) DEFAULT NULL,
  `esr_subject` text,
  `esr_content` mediumtext,
  `esr_plain_text` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`form_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `ap_forms`
--

INSERT INTO `ap_forms` (`form_id`, `form_name`, `form_description`, `form_email`, `form_redirect`, `form_success_message`, `form_password`, `form_unique_ip`, `form_frame_height`, `form_has_css`, `form_captcha`, `form_active`, `form_review`, `esl_from_name`, `esl_from_email_address`, `esl_subject`, `esl_content`, `esl_plain_text`, `esr_email_address`, `esr_from_name`, `esr_from_email_address`, `esr_subject`, `esr_content`, `esr_plain_text`) VALUES
(1, '', '', NULL, '', 'Congradulations', '', 0, 1308, 1, 1, 1, 1, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, 0),
(2, '', '', NULL, '', 'Congradulations', '', 0, 1409, 1, 1, 1, 1, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, 0),
(3, 'Contact Us', '', NULL, '', 'Success! Your submission has been saved!', '', 0, 429, 1, 1, 1, 1, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, 0);

-- --------------------------------------------------------

--
-- Table structure for table `ap_form_1`
--

CREATE TABLE IF NOT EXISTS `ap_form_1` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `date_created` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `date_updated` datetime DEFAULT NULL,
  `ip_address` varchar(15) DEFAULT NULL,
  `element_1` text COMMENT 'Single Line Text',
  `element_2` mediumtext COMMENT 'Paragraph Text',
  `element_3` mediumtext COMMENT 'Paragraph Text',
  `element_4` text COMMENT 'Single Line Text',
  `element_5` text COMMENT 'Single Line Text',
  `element_6` tinyint(6) unsigned NOT NULL DEFAULT '0' COMMENT 'Drop Down',
  `element_7` text COMMENT 'Single Line Text',
  `element_10` text COMMENT 'Web Site',
  `element_11` text COMMENT 'Web Site',
  `element_12` text COMMENT 'Web Site',
  `element_13` text COMMENT 'File Upload',
  `element_14` text COMMENT 'File Upload',
  `element_15` text COMMENT 'File Upload',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `ap_form_1`
--

INSERT INTO `ap_form_1` (`id`, `date_created`, `date_updated`, `ip_address`, `element_1`, `element_2`, `element_3`, `element_4`, `element_5`, `element_6`, `element_7`, `element_10`, `element_11`, `element_12`, `element_13`, `element_14`, `element_15`) VALUES
(3, '2010-08-07 11:05:34', NULL, '::1', 'Ryo Chiba', 'Because we''re goood', 'etc.', '13', 'ryochiba@gmail.com', 1, NULL, 'http://Stuff.com', NULL, NULL, 'element_13-3-IMG_0869.JPG', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `ap_form_1_review`
--

CREATE TABLE IF NOT EXISTS `ap_form_1_review` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `date_created` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `date_updated` datetime DEFAULT NULL,
  `ip_address` varchar(15) DEFAULT NULL,
  `element_1` text COMMENT 'Single Line Text',
  `element_2` mediumtext COMMENT 'Paragraph Text',
  `element_3` mediumtext COMMENT 'Paragraph Text',
  `element_4` text COMMENT 'Single Line Text',
  `element_5` text COMMENT 'Single Line Text',
  `element_6` tinyint(6) unsigned NOT NULL DEFAULT '0' COMMENT 'Drop Down',
  `element_7` text COMMENT 'Single Line Text',
  `element_10` text COMMENT 'Web Site',
  `element_11` text COMMENT 'Web Site',
  `element_12` text COMMENT 'Web Site',
  `element_13` text COMMENT 'File Upload',
  `element_14` text COMMENT 'File Upload',
  `element_15` text COMMENT 'File Upload',
  `session_id` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `ap_form_1_review`
--


-- --------------------------------------------------------

--
-- Table structure for table `ap_form_2`
--

CREATE TABLE IF NOT EXISTS `ap_form_2` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `date_created` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `date_updated` datetime DEFAULT NULL,
  `ip_address` varchar(15) DEFAULT NULL,
  `element_1` text COMMENT 'Single Line Text',
  `element_2` mediumtext COMMENT 'Paragraph Text',
  `element_3` mediumtext COMMENT 'Paragraph Text',
  `element_4` text COMMENT 'Single Line Text',
  `element_5` text COMMENT 'Single Line Text',
  `element_10` text COMMENT 'Web Site',
  `element_11` text COMMENT 'Web Site',
  `element_12` text COMMENT 'Web Site',
  `element_13` text COMMENT 'File Upload',
  `element_14` text COMMENT 'File Upload',
  `element_15` text COMMENT 'File Upload',
  `element_17_1` tinyint(6) unsigned NOT NULL DEFAULT '0' COMMENT 'Checkbox - 1',
  `element_17_2` tinyint(6) unsigned NOT NULL DEFAULT '0' COMMENT 'Checkbox - 2',
  `element_18` tinyint(6) unsigned NOT NULL DEFAULT '0' COMMENT 'Multiple Choixe',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `ap_form_2`
--


-- --------------------------------------------------------

--
-- Table structure for table `ap_form_2_review`
--

CREATE TABLE IF NOT EXISTS `ap_form_2_review` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `date_created` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `date_updated` datetime DEFAULT NULL,
  `ip_address` varchar(15) DEFAULT NULL,
  `element_1` text COMMENT 'Single Line Text',
  `element_2` mediumtext COMMENT 'Paragraph Text',
  `element_3` mediumtext COMMENT 'Paragraph Text',
  `element_4` text COMMENT 'Single Line Text',
  `element_5` text COMMENT 'Single Line Text',
  `element_10` text COMMENT 'Web Site',
  `element_11` text COMMENT 'Web Site',
  `element_12` text COMMENT 'Web Site',
  `element_13` text COMMENT 'File Upload',
  `element_14` text COMMENT 'File Upload',
  `element_15` text COMMENT 'File Upload',
  `element_17_1` tinyint(6) unsigned NOT NULL DEFAULT '0' COMMENT 'Checkbox - 1',
  `element_17_2` tinyint(6) unsigned NOT NULL DEFAULT '0' COMMENT 'Checkbox - 2',
  `element_18` tinyint(6) unsigned NOT NULL DEFAULT '0' COMMENT 'Multiple Choixe',
  `session_id` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `ap_form_2_review`
--


-- --------------------------------------------------------

--
-- Table structure for table `ap_form_3`
--

CREATE TABLE IF NOT EXISTS `ap_form_3` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `date_created` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `date_updated` datetime DEFAULT NULL,
  `ip_address` varchar(15) DEFAULT NULL,
  `element_1` text COMMENT 'Single Line Text',
  `element_2` text COMMENT 'Single Line Text',
  `element_3` mediumtext COMMENT 'Paragraph Text',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `ap_form_3`
--


-- --------------------------------------------------------

--
-- Table structure for table `ap_form_3_review`
--

CREATE TABLE IF NOT EXISTS `ap_form_3_review` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `date_created` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `date_updated` datetime DEFAULT NULL,
  `ip_address` varchar(15) DEFAULT NULL,
  `element_1` text COMMENT 'Single Line Text',
  `element_2` text COMMENT 'Single Line Text',
  `element_3` mediumtext COMMENT 'Paragraph Text',
  `session_id` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `ap_form_3_review`
--


-- --------------------------------------------------------

--
-- Table structure for table `ap_form_elements`
--

CREATE TABLE IF NOT EXISTS `ap_form_elements` (
  `form_id` int(11) NOT NULL DEFAULT '0',
  `element_id` int(11) NOT NULL DEFAULT '0',
  `element_title` text,
  `element_guidelines` text,
  `element_size` varchar(6) NOT NULL DEFAULT 'medium',
  `element_is_required` int(11) NOT NULL DEFAULT '0',
  `element_is_unique` int(11) NOT NULL DEFAULT '0',
  `element_is_private` int(11) NOT NULL DEFAULT '0',
  `element_type` varchar(50) DEFAULT NULL,
  `element_position` int(11) NOT NULL DEFAULT '0',
  `element_default_value` text,
  `element_constraint` varchar(50) DEFAULT NULL,
  `element_total_child` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`form_id`,`element_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `ap_form_elements`
--

INSERT INTO `ap_form_elements` (`form_id`, `element_id`, `element_title`, `element_guidelines`, `element_size`, `element_is_required`, `element_is_unique`, `element_is_private`, `element_type`, `element_position`, `element_default_value`, `element_constraint`, `element_total_child`) VALUES
(1, 1, 'Name', '', 'medium', 1, 0, 0, 'text', 1, '', '', 0),
(1, 2, 'Why are you (or your peer) on the BRINK?', '', 'medium', 1, 0, 0, 'textarea', 7, '', '', 0),
(1, 3, 'What distinguishes you from others in your industry?', '', 'medium', 1, 0, 0, 'textarea', 8, '', '', 0),
(1, 4, 'Age', '', 'medium', 1, 0, 0, 'text', 2, '', '', 0),
(1, 5, 'Email', '', 'medium', 1, 0, 0, 'text', 3, '', '', 0),
(1, 6, 'Category (if ''other'', please specify)', '', 'medium', 1, 0, 0, 'select', 4, '', '', 2),
(1, 7, 'Other', '', 'medium', 0, 0, 0, 'text', 5, '', '', 0),
(1, 8, 'Elevator Pitch', 'Give us your story.', 'medium', 0, 0, 0, 'section', 6, '', '', 0),
(1, 9, 'Media (optional)', 'Resumes, pictures, websites, and other interesting tidbits.', 'medium', 0, 0, 0, 'section', 9, '', '', 0),
(1, 10, 'Links', '', 'medium', 0, 0, 0, 'url', 10, '', '', 0),
(1, 11, '', '', 'medium', 0, 0, 0, 'url', 11, '', '', 0),
(1, 12, '', '', 'medium', 0, 0, 0, 'url', 12, '', '', 0),
(1, 13, 'Files', '', 'medium', 0, 0, 0, 'file', 13, '', '', 0),
(1, 14, '', '', 'medium', 0, 0, 0, 'file', 14, '', '', 0),
(1, 15, '', '', 'medium', 0, 0, 0, 'file', 15, '', '', 0),
(1, 16, 'Stats', 'The basics.', 'medium', 0, 0, 0, 'section', 0, '', '', 0),
(2, 1, 'Name', '', 'medium', 1, 0, 0, 'text', 1, '', '', 0),
(2, 2, 'Tell us a little about yourself. (300 words or less)', '', 'medium', 1, 0, 0, 'textarea', 7, '', '', 0),
(2, 3, 'What would you bring to BRINK? (300 words or less)', '', 'medium', 1, 0, 0, 'textarea', 8, '', '', 0),
(2, 4, 'Age', '', 'medium', 1, 0, 0, 'text', 2, '', '', 0),
(2, 5, 'Email', '', 'medium', 1, 0, 0, 'text', 3, '', '', 0),
(2, 17, 'Department', '', 'medium', 1, 0, 0, 'checkbox', 4, '', '', 1),
(2, 8, 'Why you?', 'Give us your story.', 'medium', 0, 0, 0, 'section', 6, '', '', 0),
(2, 9, 'Media (optional)', 'Resumes, pictures, websites, and other interesting tidbits.', 'medium', 0, 0, 0, 'section', 9, '', '', 0),
(2, 10, 'Links', '', 'medium', 0, 0, 0, 'url', 10, '', '', 0),
(2, 11, '', '', 'medium', 0, 0, 0, 'url', 11, '', '', 0),
(2, 12, '', '', 'medium', 0, 0, 0, 'url', 12, '', '', 0),
(2, 13, 'Files', '', 'medium', 0, 0, 0, 'file', 13, '', '', 0),
(2, 14, '', '', 'medium', 0, 0, 0, 'file', 14, '', '', 0),
(2, 15, '', '', 'medium', 0, 0, 0, 'file', 15, '', '', 0),
(2, 16, 'Stats', 'The basics.', 'medium', 0, 0, 0, 'section', 0, '', '', 0),
(2, 18, 'How many interviews/photoshoots could you contribute per month?', '', 'medium', 1, 0, 0, 'radio', 5, '', '', 2),
(3, 1, 'Name', '', 'medium', 1, 0, 0, 'text', 0, '', '', 0),
(3, 2, 'Email', '', 'medium', 1, 0, 0, 'text', 1, '', '', 0),
(3, 3, 'Message', '', 'medium', 1, 0, 0, 'textarea', 2, '', '', 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
