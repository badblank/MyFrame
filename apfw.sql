/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50630
Source Host           : 127.0.0.1:3306
Source Database       : adgh

Target Server Type    : MYSQL
Target Server Version : 50630
File Encoding         : 65001

Date: 2017-10-13 17:54:14
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for guestbook
-- ----------------------------
DROP TABLE IF EXISTS `guestbook`;
CREATE TABLE `guestbook` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `content` text,
  `createtime` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Table structure for test
-- ----------------------------
DROP TABLE IF EXISTS `test`;
CREATE TABLE `test` (
  `name` varchar(30) DEFAULT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
