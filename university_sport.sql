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

-- --------------------------------------------------------

-- 
-- Table structure for table `langskill`
-- 

CREATE TABLE `langskill` (
  `id` int(5) NOT NULL,
  `lang` varchar(20) NOT NULL,
  `level` varchar(6) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;


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
