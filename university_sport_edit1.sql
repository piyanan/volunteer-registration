-- phpMyAdmin SQL Dump
-- version 2.10.2
-- http://www.phpmyadmin.net
-- 
-- โฮสต์: localhost
-- เวลาในการสร้าง: 31 ต.ค. 2010  น.
-- รุ่นของเซิร์ฟเวอร์: 5.0.45
-- รุ่นของ PHP: 5.2.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

-- 
-- ฐานข้อมูล: `university_sport`
-- 

-- --------------------------------------------------------

-- 
-- โครงสร้างตาราง `unconfirm`
-- 

CREATE TABLE `unconfirm` (
  `id` int(5) NOT NULL,
  `date` date NOT NULL,
  `time` varchar(10) NOT NULL,
  `place` varchar(30) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
