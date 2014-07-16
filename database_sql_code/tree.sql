-- phpMyAdmin SQL Dump
-- version 3.4.10.1deb1
-- http://www.phpmyadmin.net
--
-- 主机: localhost
-- 生成日期: 2014 年 07 月 16 日 16:56
-- 服务器版本: 5.5.29
-- PHP 版本: 5.3.10-1ubuntu3.11

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 数据库: `tree`
--

-- --------------------------------------------------------

--
-- 表的结构 `category`
--

CREATE TABLE IF NOT EXISTS `category` (
  `CATID` bigint(20) NOT NULL,
  `CATMEMO` varchar(500) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `CATNAME` varchar(100) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `PARENT_CATID_OID` bigint(20) DEFAULT NULL,
  `CATEGORIES_INTEGER_IDX` int(11) DEFAULT NULL,
  PRIMARY KEY (`CATID`),
  KEY `CATEGORY_N49` (`PARENT_CATID_OID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `category`
--

INSERT INTO `category` (`CATID`, `CATMEMO`, `CATNAME`, `PARENT_CATID_OID`, `CATEGORIES_INTEGER_IDX`) VALUES
(1, 'momo1', '種樹救地球', NULL, -1),
(2, 'momo2', '種樹行動', 1, 0),
(3, 'momo3', '種樹團體', 1, 1),
(4, 'momo4', '種樹理念', 1, 2),
(5, 'momo5', '社會企業', NULL, -1);

-- --------------------------------------------------------

--
-- 表的结构 `post`
--

CREATE TABLE IF NOT EXISTS `post` (
  `POSTID` bigint(20) NOT NULL,
  `CATEGORY_CATID_OID` bigint(20) DEFAULT NULL,
  `CONTENT` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `REFERURL` varchar(300) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `SUMMARY` varchar(200) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `TITLE` varchar(100) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `TITLE2` varchar(100) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  PRIMARY KEY (`POSTID`),
  KEY `POST_N49` (`CATEGORY_CATID_OID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `post`
--

INSERT INTO `post` (`POSTID`, `CATEGORY_CATID_OID`, `CONTENT`, `REFERURL`, `SUMMARY`, `TITLE`, `TITLE2`) VALUES
(1, 1, 'content', 'referUrl', 'summary', 'title', 'title2'),
(2, 5, '文章內容', '參照網址', '30字摘要', '主旨', '特別標題');

--
-- 限制导出的表
--

--
-- 限制表 `category`
--
ALTER TABLE `category`
  ADD CONSTRAINT `CATEGORY_FK1` FOREIGN KEY (`PARENT_CATID_OID`) REFERENCES `category` (`CATID`);

--
-- 限制表 `post`
--
ALTER TABLE `post`
  ADD CONSTRAINT `POST_FK1` FOREIGN KEY (`CATEGORY_CATID_OID`) REFERENCES `category` (`CATID`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
