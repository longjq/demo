/*
Navicat MySQL Data Transfer

Source Server         : localhost_3306
Source Server Version : 50540
Source Host           : localhost:3306
Source Database       : daogou_1501

Target Server Type    : MYSQL
Target Server Version : 50540
File Encoding         : 65001

Date: 2016-01-04 00:57:02
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `xda_oto_sms_err_log`
-- ----------------------------
DROP TABLE IF EXISTS `xda_oto_sms_err_log`;
CREATE TABLE `xda_oto_sms_err_log` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `area_code` char(4) DEFAULT NULL,
  `phone_operator` varchar(255) DEFAULT NULL,
  `send_code` varchar(255) DEFAULT NULL,
  `send_code_type` varchar(255) DEFAULT NULL,
  `phone_number` int(11) DEFAULT NULL,
  `sms_text` text,
  `add_time` int(10) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of xda_oto_sms_err_log
-- ----------------------------
INSERT INTO `xda_oto_sms_err_log` VALUES ('1', '0755', 'chinamobile', 'cxtq', 'tc', '2147483647', '尊敬的15889686009客户12', '1451838904');
INSERT INTO `xda_oto_sms_err_log` VALUES ('2', '0755', 'chinamobile', 'cxtq', 'tc', '2147483647', '尊敬的15889686009客户12', '1451839191');
INSERT INTO `xda_oto_sms_err_log` VALUES ('3', '0755', 'chinamobile', 'cxtq', 'tc', '2147483647', '尊敬的15889686009客户12', '1451839249');

-- ----------------------------
-- Table structure for `xda_oto_sms_regex`
-- ----------------------------
DROP TABLE IF EXISTS `xda_oto_sms_regex`;
CREATE TABLE `xda_oto_sms_regex` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `area_code` char(4) DEFAULT NULL COMMENT '地区代码',
  `phone_operator` varchar(255) DEFAULT '' COMMENT '运营商',
  `send_code` varchar(255) DEFAULT '' COMMENT '发送指令',
  `send_code_type` varchar(255) DEFAULT '' COMMENT '指令类型',
  `sms_pattern` text COMMENT '匹配正则',
  `add_time` int(10) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of xda_oto_sms_regex
-- ----------------------------
INSERT INTO `xda_oto_sms_regex` VALUES ('1', '0755', 'chinamobile', 'cx11', 'tc,ye', 'sms_regex', null);
INSERT INTO `xda_oto_sms_regex` VALUES ('2', '0755', 'chinamobile', 'cxtq', 'tc,tq', '/流量共(\\d+)M.*已用(\\d+\\.\\d+)M.*剩余(\\d+\\.\\d+)M/', null);
