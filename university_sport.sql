-- phpMyAdmin SQL Dump
-- version 2.10.3
-- http://www.phpmyadmin.net
-- 
-- Host: localhost
-- Generation Time: Sep 14, 2010 at 02:26 PM
-- Server version: 6.0.4
-- PHP Version: 6.0.0-dev

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

-- 
-- Database: `university_sport`
-- 

-- --------------------------------------------------------

-- 
-- Table structure for table `committee`
-- 

CREATE TABLE `committee` (
  `id` int(5) NOT NULL,
  `pass` tinyint(1) DEFAULT NULL,
  `staff` varchar(30) NOT NULL,
  `sport` varchar(30) DEFAULT NULL,
  `country` varchar(30) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- 
-- Dumping data for table `committee`
-- 

INSERT INTO `committee` VALUES (1, 1, '', '', '');
INSERT INTO `committee` VALUES (2, 1, '', '', '');
INSERT INTO `committee` VALUES (3, NULL, '', NULL, NULL);

-- --------------------------------------------------------

-- 
-- Table structure for table `contactinfo`
-- 

CREATE TABLE `contactinfo` (
  `id` int(5) NOT NULL,
  `number` char(10) NOT NULL,
  `moo` int(3) DEFAULT NULL,
  `street` varchar(20) DEFAULT NULL,
  `soi` varchar(20) DEFAULT NULL,
  `tumbol` varchar(20) NOT NULL,
  `aumpher` varchar(20) NOT NULL,
  `province` varchar(20) NOT NULL,
  `zipcode` varchar(6) NOT NULL,
  `mobilephone` varchar(10) NOT NULL,
  `phone` varchar(10) DEFAULT NULL,
  `email` varchar(30) NOT NULL,
  `emerphone` varchar(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- 
-- Dumping data for table `contactinfo`
-- 

INSERT INTO `contactinfo` VALUES (3, '1', 1, '-', '-', 'น้ำบ่อ', 'น้ำคลอง', 'น่าน', '12345', '0843182999', '055123456', 'qwertyui@mail.com', '191');
INSERT INTO `contactinfo` VALUES (1, '1', 1, '-', '-', 'น้ำบ่อ', 'น้ำคลอง', 'น่าน', '12345', '0843182999', '055123456', 'qwertyui@mail.com', '191');
INSERT INTO `contactinfo` VALUES (2, '1', 1, '-', '-', 'น้ำบ่อ', 'น้ำคลอง', 'น่าน', '12345', '0843182999', '055123456', 'qwertyui@mail.com', '191');

-- --------------------------------------------------------

-- 
-- Table structure for table `langskill`
-- 

CREATE TABLE `langskill` (
  `id` int(5) NOT NULL,
  `lang` varchar(20) NOT NULL,
  `level` varchar(6) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- 
-- Dumping data for table `langskill`
-- 

INSERT INTO `langskill` VALUES (3, 'ไทย', 'ดีมาก');
INSERT INTO `langskill` VALUES (3, 'อังกฤษ', 'ดี');
INSERT INTO `langskill` VALUES (2, 'ไทย', 'ดีมาก');
INSERT INTO `langskill` VALUES (2, 'อังกฤษ', 'ดี');
INSERT INTO `langskill` VALUES (1, 'ไทย', 'ดีมาก');
INSERT INTO `langskill` VALUES (1, 'อังกฤษ', 'ดี');

-- --------------------------------------------------------

-- 
-- Table structure for table `personalinfo`
-- 

CREATE TABLE `personalinfo` (
  `id` int(5) NOT NULL,
  `fnameth` varchar(30) NOT NULL,
  `lnameth` varchar(30) NOT NULL,
  `fnameen` varchar(30) NOT NULL,
  `lnameen` varchar(30) NOT NULL,
  `gender` varchar(5) NOT NULL,
  `age` int(2) NOT NULL,
  `birthdate` date NOT NULL,
  `faculty` varchar(30) NOT NULL,
  `major` varchar(30) NOT NULL,
  `grade` int(1) NOT NULL,
  `Institution` varchar(40) NOT NULL,
  `religion` varchar(20) NOT NULL,
  `degree` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- 
-- Dumping data for table `personalinfo`
-- 

INSERT INTO `personalinfo` VALUES (3, 'ธิติชน', 'ชัยพินิจ', 'Thitichon', 'Chaipinij', 'ชาย', 30, '2535-02-10', 'วิศวกรรมศาสตร์', 'คอมพิวเตอร์', 4, 'มหาวิทยาลัยเชียงใหม่', 'พุทธ', 'ปริญญาตรี');
INSERT INTO `personalinfo` VALUES (0, '', '', '', '', '', 0, '0000-00-00', '', '', 0, '', '', '');
INSERT INTO `personalinfo` VALUES (1, 'ธิติชน', 'ชัยพินิจ', 'Thitichon', 'Chaipinij', 'ชาย', 30, '2535-02-10', 'วิศวกรรมศาสตร์', 'คอมพิวเตอร์', 4, 'มหาวิทยาลัยเชียงใหม่', 'พุทธ', 'ปริญญาตรี');
INSERT INTO `personalinfo` VALUES (2, 'ธิติชน', 'ชัยพินิจ', 'Thitichon', 'Chaipinij', 'ชาย', 30, '2535-02-10', 'วิศวกรรมศาสตร์', 'คอมพิวเตอร์', 4, 'มหาวิทยาลัยเชียงใหม่', 'พุทธ', 'ปริญญาตรี');

-- --------------------------------------------------------

-- 
-- Table structure for table `sport`
-- 

CREATE TABLE `sport` (
  `id` int(5) NOT NULL,
  `1stcountry` varchar(30) NOT NULL,
  `1stsport` varchar(30) NOT NULL,
  `2ndcountry` varchar(30) NOT NULL,
  `2ndsport` varchar(30) NOT NULL,
  `3rdcountry` varchar(30) NOT NULL,
  `3rdsport` varchar(30) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- 
-- Dumping data for table `sport`
-- 

INSERT INTO `sport` VALUES (3, 'Thailand', 'Sepak Takraw (Men)', 'Thailand', 'Taekwondo', 'Philippines', 'Badminton');
INSERT INTO `sport` VALUES (1, 'Lao PDR', 'Taekwondo', 'Lao PDR', 'Beach Volleyball', 'Indonesia', 'Sepak Takraw (Men)');

-- --------------------------------------------------------

-- 
-- Table structure for table `wantstaff`
-- 

CREATE TABLE `wantstaff` (
  `id` int(5) NOT NULL,
  `first` varchar(30) NOT NULL,
  `second` varchar(30) NOT NULL,
  `third` varchar(30) NOT NULL,
  `sport` tinyint(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- 
-- Dumping data for table `wantstaff`
-- 

INSERT INTO `wantstaff` VALUES (1, 'ประจำสนามบินเชียงใหม่', 'ประจำกีฬา', 'ประสานงานทั่วไป', 1);
INSERT INTO `wantstaff` VALUES (2, 'ประจำสนามบินเชียงใหม่', 'รับรองแขก VIP', 'รับรองแขก VIP', 0);
INSERT INTO `wantstaff` VALUES (3, 'ประจำกีฬา', 'รับรองแขก VIP', 'ประสานงานทั่วไป', 1);
