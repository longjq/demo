/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50540
Source Host           : localhost:3306
Source Database       : demo

Target Server Type    : MYSQL
Target Server Version : 50540
File Encoding         : 65001

Date: 2015-11-11 00:31:30
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `ecs_brand`
-- ----------------------------
DROP TABLE IF EXISTS `ecs_brand`;
CREATE TABLE `ecs_brand` (
  `brand_id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `brand_name` varchar(60) NOT NULL DEFAULT '',
  `brand_logo` varchar(80) NOT NULL DEFAULT '',
  `brand_desc` text NOT NULL,
  `site_url` varchar(255) NOT NULL DEFAULT '',
  `sort_order` tinyint(3) unsigned NOT NULL DEFAULT '50',
  `is_show` tinyint(1) unsigned NOT NULL DEFAULT '1',
  PRIMARY KEY (`brand_id`),
  KEY `is_show` (`is_show`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of ecs_brand
-- ----------------------------
INSERT INTO `ecs_brand` VALUES ('1', '诺基亚', '1240803062307572427.gif', '公司网站：http://www.nokia.com.cn/\n\n客服电话：400-880-0123', 'http://www.nokia.com.cn/', '50', '1');
INSERT INTO `ecs_brand` VALUES ('2', '摩托罗拉', '1240802922410634065.gif', '官方咨询电话：4008105050\n售后网点：http://www.motorola.com.cn/service/carecenter/search.asp ', 'http://www.motorola.com.cn', '50', '1');
INSERT INTO `ecs_brand` VALUES ('3', '多普达', '1240803144788047486.gif', '官方咨询电话：4008201668\n售后网点：http://www.dopod.com/pc/service/searchresult2.php ', 'http://www.dopod.com ', '50', '1');
INSERT INTO `ecs_brand` VALUES ('4', '飞利浦', '1240803247838195732.gif', '官方咨询电话：4008800008\n售后网点：http://www.philips.com.cn/service/mustservice/index.page ', 'http://www.philips.com.cn ', '50', '1');
INSERT INTO `ecs_brand` VALUES ('5', '夏新', '1240803352280856940.gif', '官方咨询电话：4008875777\n售后网点：http://www.amobile.com.cn/service_fwyzc.asp ', 'http://www.amobile.com.cn', '50', '1');
INSERT INTO `ecs_brand` VALUES ('6', '三星', '1240803412367015368.gif', '官方咨询电话：8008105858\n售后网点：http://cn.samsungmobile.com/cn/support/search_area_o.jsp ', 'http://cn.samsungmobile.com', '50', '1');
INSERT INTO `ecs_brand` VALUES ('7', '索爱', '1240803482283160654.gif', '官方咨询电话：4008100000\n售后网点：http://www.sonyericsson.com/cws/common/contact?cc=cn&lc=zh ', 'http://www.sonyericsson.com.cn/', '50', '1');
INSERT INTO `ecs_brand` VALUES ('8', 'LG', '1240803526904622792.gif', '官方咨询电话：4008199999\n售后网点：http://www.lg.com.cn/front.support.svccenter.retrieveCenter.laf?hrefId=9 ', 'http://cn.wowlg.com', '50', '1');
INSERT INTO `ecs_brand` VALUES ('9', '联想', '1240803578417877983.gif', '官方咨询电话：4008188818\n售后网点：http://www.lenovomobile.com/service/kf-wanglou.asp', 'http://www.lenovomobile.com/', '50', '1');
INSERT INTO `ecs_brand` VALUES ('10', '金立', '', '官方咨询电话：4007796666\n售后网点：http://www.gionee.net/service.asp ', 'http://www.gionee.net', '50', '1');
INSERT INTO `ecs_brand` VALUES ('11', '  恒基伟业', '1240803736391383580.gif', '官方咨询电话：4008899126\n售后网点：http://www.htwchina.com/htwt/wexiu.shtml ', 'http://www.htwchina.com', '50', '1');

-- ----------------------------
-- Table structure for `ecs_category`
-- ----------------------------
DROP TABLE IF EXISTS `ecs_category`;
CREATE TABLE `ecs_category` (
  `cat_id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `cat_name` varchar(90) NOT NULL DEFAULT '',
  `keywords` varchar(255) NOT NULL DEFAULT '',
  `cat_desc` varchar(255) NOT NULL DEFAULT '',
  `parent_id` smallint(5) unsigned NOT NULL DEFAULT '0',
  `sort_order` tinyint(1) unsigned NOT NULL DEFAULT '50',
  `template_file` varchar(50) NOT NULL DEFAULT '',
  `measure_unit` varchar(15) NOT NULL DEFAULT '',
  `show_in_nav` tinyint(1) NOT NULL DEFAULT '0',
  `style` varchar(150) NOT NULL,
  `is_show` tinyint(1) unsigned NOT NULL DEFAULT '1',
  `grade` tinyint(4) NOT NULL DEFAULT '0',
  `filter_attr` varchar(255) NOT NULL DEFAULT '0',
  PRIMARY KEY (`cat_id`),
  KEY `parent_id` (`parent_id`)
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of ecs_category
-- ----------------------------
INSERT INTO `ecs_category` VALUES ('1', '手机类型', '', '', '0', '50', '', '', '0', '', '1', '5', '172,185,178');
INSERT INTO `ecs_category` VALUES ('2', 'CDMA手机', '', '', '1', '50', '', '', '0', '', '1', '0', '6');
INSERT INTO `ecs_category` VALUES ('3', 'GSM手机', '', '', '1', '50', '', '台', '1', '', '1', '4', '185,189,173,178');
INSERT INTO `ecs_category` VALUES ('4', '3G手机', '', '', '1', '50', '', '', '1', '', '1', '0', '28');
INSERT INTO `ecs_category` VALUES ('5', '双模手机', '', '', '1', '50', '', '', '0', '', '1', '5', '18');
INSERT INTO `ecs_category` VALUES ('6', '手机配件', '', '', '0', '50', '', '', '1', '', '1', '0', '0');
INSERT INTO `ecs_category` VALUES ('7', '充电器', '', '', '6', '50', '', '', '0', '', '1', '0', '0');
INSERT INTO `ecs_category` VALUES ('8', '耳机', '', '', '6', '50', '', '', '0', '', '1', '0', '0');
INSERT INTO `ecs_category` VALUES ('9', '电池', '', '', '6', '50', '', '', '0', '', '1', '0', '0');
INSERT INTO `ecs_category` VALUES ('11', '读卡器和内存卡', '', '', '6', '50', '', '', '0', '', '1', '0', '0');
INSERT INTO `ecs_category` VALUES ('12', '充值卡', '', '', '0', '50', '', '', '0', '', '1', '0', '0');
INSERT INTO `ecs_category` VALUES ('13', '小灵通/固话充值卡', '', '', '12', '50', '', '', '0', '', '1', '0', '0');
INSERT INTO `ecs_category` VALUES ('14', '移动手机充值卡', '', '', '12', '50', '', '', '0', '', '1', '0', '0');
INSERT INTO `ecs_category` VALUES ('15', '联通手机充值卡', '', '', '12', '50', '', '', '0', '', '1', '0', '0');

-- ----------------------------
-- Table structure for `info`
-- ----------------------------
DROP TABLE IF EXISTS `info`;
CREATE TABLE `info` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(500) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of info
-- ----------------------------
INSERT INTO `info` VALUES ('1', 'lon\'gjq');
INSERT INTO `info` VALUES ('2', 'aaaa\'aaa');

-- ----------------------------
-- Table structure for `shop_plugin`
-- ----------------------------
DROP TABLE IF EXISTS `shop_plugin`;
CREATE TABLE `shop_plugin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `intro` text,
  `startdate` int(11) DEFAULT NULL,
  `enddate` int(11) DEFAULT NULL,
  `isopen` tinyint(1) DEFAULT NULL,
  `addtime` int(11) DEFAULT NULL,
  `keyword` varchar(255) DEFAULT NULL,
  `data` text NOT NULL,
  `plugin_id` int(11) DEFAULT NULL,
  `plugin_name` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of shop_plugin
-- ----------------------------
INSERT INTO `shop_plugin` VALUES ('1', '双11，大酬宾，满1000减200', '双11，大酬宾，满1000减200双11，大酬宾，满1000减200双11，大酬宾，满1000减200双11，大酬宾，满1000减200双11，大酬宾，满1000减200', '1447167600', '1449759600', '1', '1447167748', '满,减', '', '1', '直减');
