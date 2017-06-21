/*
Navicat MySQL Data Transfer

Source Server         : local
Source Server Version : 50718
Source Host           : localhost:3306
Source Database       : www

Target Server Type    : MYSQL
Target Server Version : 50718
File Encoding         : 65001

Date: 2017-06-21 23:36:59
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
  `status` int(1) NOT NULL DEFAULT '1' COMMENT '0:已删除   1:正常',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of article
-- ----------------------------
INSERT INTO `article` VALUES ('2', '1111111', '<p>1</p><p>2</p><p>3</p><p>4</p><p>5</p><p>6</p><p>7</p><p>8</p><p><br/></p>', '0', '1', '2017-06-19 16:15:23', '2017-06-19 23:02:58', '1');
INSERT INTO `article` VALUES ('3', 'asdasd', '<p>asdasdasdasd</p><p>adasdasdasdasdasd</p>', '0', '0', '2017-06-19 16:40:40', '2017-06-19 16:40:40', '1');
INSERT INTO `article` VALUES ('4', 'asdasd', '<p>asdasdasda<br/></p><p>asda</p><p>sda</p><p>sd</p><p>asd</p><p>as</p><p>d</p>', '0', '0', '2017-06-19 16:42:09', '2017-06-19 16:42:09', '1');
INSERT INTO `article` VALUES ('5', 'asasd', '<p>asdazcz<br/></p><p>czx</p><p>czx</p><p>czx</p><p>c</p><p style=\"text-align: center;\">zxc</p><p>z</p><p>c</p><p>zx</p><p>czczxc</p><p>zxc</p><p>zxczx</p><p>zc</p><p>zx</p><p>c</p><p>zxc</p><p>zx</p><p>c</p><p>zxc</p><p>xz</p><p>vxc</p>', '0', '0', '2017-06-19 21:48:55', '2017-06-19 21:48:55', '1');
INSERT INTO `article` VALUES ('6', 'asasd', '<p>asdazcz<br/></p><p>czx</p><p>czx</p><p>czx</p><p>c</p><p style=\"text-align: center;\">zxc</p><p>z</p><p>c</p><p>zx</p><p>czczxc</p><p>zxc</p><p>zxczx</p><p>zc</p><p>zx</p><p>c</p><p>zxc</p><p>zx</p><p>c</p><p>zxc</p><p>xz</p><p>vxc</p>', '0', '0', '2017-06-19 21:49:00', '2017-06-19 21:49:00', '1');
INSERT INTO `article` VALUES ('7', 'asasd', '<p>asdazcz<br/></p><p>czx</p><p>czx</p><p>czx</p><p>c</p><p style=\"text-align: center;\">zxc</p><p>z</p><p>c</p><p>zx</p><p>czczxc</p><p>zxc</p><p>zxczx</p><p>zc</p><p>zx</p><p>c</p><p>zxc</p><p>zx</p><p>c</p><p>zxc</p><p>xz</p><p>vxc</p>', '0', '0', '2017-06-19 21:49:03', '2017-06-19 21:49:03', '1');
INSERT INTO `article` VALUES ('8', 'asasd', '<p>asdazcz<br/></p><p>czx</p><p>czx</p><p>czx</p><p>c</p><p style=\"text-align: center;\">zxc</p><p>z</p><p>c</p><p>zx</p><p>czczxc</p><p>zxc</p><p>zxczx</p><p>zc</p><p>zx</p><p>c</p><p>zxc</p><p>zx</p><p>c</p><p>zxc</p><p>xz</p><p>vxc</p><p>&#39;</p><p>&#39;</p><p>&#39;</p><p>&#39;</p><p>&#39;</p><p><br/></p>', '0', '0', '2017-06-19 21:49:24', '2017-06-19 21:49:24', '1');

-- ----------------------------
-- Table structure for columns
-- ----------------------------
DROP TABLE IF EXISTS `columns`;
CREATE TABLE `columns` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `p_id` int(10) NOT NULL DEFAULT '0' COMMENT '上级分类',
  `title` varchar(255) NOT NULL COMMENT '名称',
  `sort` int(2) NOT NULL DEFAULT '0' COMMENT '排序',
  `status` int(1) NOT NULL DEFAULT '1',
  `add_time` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of columns
-- ----------------------------
INSERT INTO `columns` VALUES ('3', '0', '首页', '0', '1', '2017-06-19 16:57:50');
INSERT INTO `columns` VALUES ('4', '0', '关于', '0', '1', '2017-06-19 16:57:55');
INSERT INTO `columns` VALUES ('5', '4', '关于我们', '0', '1', '2017-06-19 16:57:55');
INSERT INTO `columns` VALUES ('6', '5', '集团介绍', '0', '1', '2017-06-20 22:41:30');
INSERT INTO `columns` VALUES ('7', '0', 'aaaa', '1', '1', '2017-06-21 20:48:13');
INSERT INTO `columns` VALUES ('8', '0', 'aaaa', '0', '1', '2017-06-21 22:25:16');
INSERT INTO `columns` VALUES ('9', '0', '啊啊啊啊啊啊啊', '0', '1', '2017-06-21 23:07:54');
INSERT INTO `columns` VALUES ('10', '0', 'bbb', '0', '1', '2017-06-21 23:21:54');

-- ----------------------------
-- Table structure for images
-- ----------------------------
DROP TABLE IF EXISTS `images`;
CREATE TABLE `images` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `img_url` varchar(255) NOT NULL,
  `add_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `sort` int(10) NOT NULL DEFAULT '0',
  `type` int(1) NOT NULL DEFAULT '0' COMMENT '1:栏目  2:内容',
  `p_id` int(10) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of images
-- ----------------------------
INSERT INTO `images` VALUES ('2', '/public/images/uploads/', '2017-06-19 22:48:49', '0', '1', '0');
INSERT INTO `images` VALUES ('3', '/public/images/uploads/', '2017-06-19 22:49:23', '0', '1', '0');
INSERT INTO `images` VALUES ('4', '/public/images/uploads/20170621125340254.png', '2017-06-21 20:53:40', '0', '0', '0');
INSERT INTO `images` VALUES ('5', '/public/images/uploads/20170621141212694.png', '2017-06-21 22:12:12', '0', '0', '0');
INSERT INTO `images` VALUES ('6', '/public/images/uploads/20170621141636813.png', '2017-06-21 22:16:36', '0', '0', '0');
INSERT INTO `images` VALUES ('7', '/public/images/uploads/20170621141718588.png', '2017-06-21 22:17:18', '0', '0', '0');
INSERT INTO `images` VALUES ('8', '/public/images/uploads/20170621141741346.png', '2017-06-21 22:17:41', '0', '0', '0');
INSERT INTO `images` VALUES ('9', '/public/images/uploads/20170621141812775.png', '2017-06-21 22:18:12', '0', '0', '0');
INSERT INTO `images` VALUES ('10', '/public/images/uploads/20170621141839200.jpg', '2017-06-21 22:18:39', '0', '0', '0');
INSERT INTO `images` VALUES ('11', '/public/images/uploads/20170621141923931.jpg', '2017-06-21 22:19:23', '0', '0', '0');
INSERT INTO `images` VALUES ('12', '/public/images/uploads/20170621142455814.jpg', '2017-06-21 22:24:55', '0', '0', '0');
INSERT INTO `images` VALUES ('13', '/public/images/uploads/20170621150753252.png', '2017-06-21 23:07:53', '0', '1', '1');
INSERT INTO `images` VALUES ('14', '/public/images/uploads/20170621152151631.jpg', '2017-06-21 23:21:51', '0', '1', '10');
SET FOREIGN_KEY_CHECKS=1;
