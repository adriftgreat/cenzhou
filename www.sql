/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50715
Source Host           : localhost:3306
Source Database       : www

Target Server Type    : MYSQL
Target Server Version : 50715
File Encoding         : 65001

Date: 2017-06-19 18:01:14
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for article
-- ----------------------------
DROP TABLE IF EXISTS `article`;
CREATE TABLE `article` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `sort` int(10) NOT NULL DEFAULT '0',
  `column_id` int(10) NOT NULL,
  `add_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `edit_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of article
-- ----------------------------
INSERT INTO `article` VALUES ('2', 'asdasdsad', 'asdasd', '0', '1', '2017-06-19 16:15:23', '2017-06-19 16:15:57');
INSERT INTO `article` VALUES ('3', 'asdasd', '<p>asdasdasdasd</p><p>adasdasdasdasdasd</p>', '0', '0', '2017-06-19 16:40:40', '2017-06-19 16:40:40');
INSERT INTO `article` VALUES ('4', 'asdasd', '<p>asdasdasda<br/></p><p>asda</p><p>sda</p><p>sd</p><p>asd</p><p>as</p><p>d</p>', '0', '0', '2017-06-19 16:42:09', '2017-06-19 16:42:09');

-- ----------------------------
-- Table structure for columns
-- ----------------------------
DROP TABLE IF EXISTS `columns`;
CREATE TABLE `columns` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `p_id` int(10) NOT NULL DEFAULT '0' COMMENT '上级分类',
  `title` varchar(255) NOT NULL COMMENT '名称',
  `sort` int(2) NOT NULL DEFAULT '0' COMMENT '排序',
  `add_time` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of columns
-- ----------------------------
INSERT INTO `columns` VALUES ('3', '0', '首页', '0', '2017-06-19 16:57:50');
INSERT INTO `columns` VALUES ('4', '0', '关于', '0', '2017-06-19 16:57:55');
SET FOREIGN_KEY_CHECKS=1;
