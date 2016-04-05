/*
Navicat MySQL Data Transfer

Source Server         : LOCAL 
Source Server Version : 50624
Source Host           : localhost:3306
Source Database       : consoltest

Target Server Type    : MYSQL
Target Server Version : 50624
File Encoding         : 65001

Date: 2016-02-15 10:22:28
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `codes_for_school_prefixes`
-- ----------------------------
DROP TABLE IF EXISTS `codes_for_school_prefixes`;
CREATE TABLE `codes_for_school_prefixes` (
  `id` tinyint(4) NOT NULL,
  `level` varchar(20) NOT NULL,
  `prefix` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of codes_for_school_prefixes
-- ----------------------------
INSERT INTO `codes_for_school_prefixes` VALUES ('1', 'Primary', 'GBPS and GGPS');
INSERT INTO `codes_for_school_prefixes` VALUES ('2', 'Middle', 'GBLSS and GGLSS');
INSERT INTO `codes_for_school_prefixes` VALUES ('3', 'Elementary', 'GBELS and GGELS');
INSERT INTO `codes_for_school_prefixes` VALUES ('4', 'Secondary', 'GBHS and GGHS');
INSERT INTO `codes_for_school_prefixes` VALUES ('5', 'Higher Secondary', 'GBHSS and GGHSS');
