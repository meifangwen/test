/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50505
Source Host           : localhost:3306
Source Database       : guoan

Target Server Type    : MYSQL
Target Server Version : 50505
File Encoding         : 65001

Date: 2019-07-31 09:40:38
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for banner
-- ----------------------------
DROP TABLE IF EXISTS `banner`;
CREATE TABLE `banner` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(50) DEFAULT NULL,
  `src` varchar(255) DEFAULT NULL COMMENT '图片地址',
  `is_show` int(2) DEFAULT '0' COMMENT '是否显示 默认显示',
  `datetime` int(12) DEFAULT NULL,
  `type` varchar(255) DEFAULT 'index' COMMENT '幻灯类型 index为首页幻灯，suo为溯源页面幻灯',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4;

-- ----------------------------
-- Records of banner
-- ----------------------------
INSERT INTO `banner` VALUES ('1', '123123', 'b907dd5bedc1fbbb12b2438790e94b42.png', '0', '1563610675', 'index');
INSERT INTO `banner` VALUES ('2', '123123', 'c05dcd3fda9ab983869540cfe4b79c94.png', '0', '1563611074', 'index');
INSERT INTO `banner` VALUES ('4', 'dsadasd', '4de251a30f67ab28345546816cdd65e3.png', '0', '1563957781', 'index');
INSERT INTO `banner` VALUES ('5', '123', '21f5dea5cc8b1c5639bdcec392bcaf22.png', '0', '1564190507', 'suo');
INSERT INTO `banner` VALUES ('6', '大萨达', 'a1f8d10f269daf1535d2ffe586cb711d.png', '0', '1564190528', 'suo');
INSERT INTO `banner` VALUES ('7', 'as', '2917e96f8f2232cc0edbb6e899f53bd8.png', '0', '1564190544', 'suo');
INSERT INTO `banner` VALUES ('8', 'as', '2917e96f8f2232cc0edbb6e899f53bd8.png', '0', '1564190544', 'suo');

-- ----------------------------
-- Table structure for events
-- ----------------------------
DROP TABLE IF EXISTS `events`;
CREATE TABLE `events` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `date` varchar(255) CHARACTER SET utf8 DEFAULT NULL COMMENT '时间区间',
  `event` text CHARACTER SET utf8 COMMENT '事件记录',
  `time` int(11) DEFAULT NULL COMMENT '添加时间',
  `is_show` tinyint(4) NOT NULL DEFAULT '0' COMMENT '是否显示（默认0显示，1不显示）',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of events
-- ----------------------------
INSERT INTO `events` VALUES ('5', '2018年4月23日', '与云南瀛滇律师事务所签订了史上第一份用区块链代币支付劳务费用的法律服务协议', '1', '0');
INSERT INTO `events` VALUES ('6', '2018年5月22日', '与云南瀛滇律师事务所签订了史上第一份用区块链代币支付劳务费用的法律服务协议', '1', '0');
INSERT INTO `events` VALUES ('7', '2018年6月18日', '成为云南省青年企业家商会副会长单位', '1', '0');
INSERT INTO `events` VALUES ('8', '2018年7月-8月', '连续举办三届“企业教练技术培训”，参与人数近千人', '1', '0');
INSERT INTO `events` VALUES ('9', '2018年4月23日', '在昆明创立', '1', '0');
INSERT INTO `events` VALUES ('10', '2018年5月22日', '与云南瀛滇律师事务所签订了史上第一份用区块链代币支付劳务费用的法律服务协议', '1', '0');

-- ----------------------------
-- Table structure for index
-- ----------------------------
DROP TABLE IF EXISTS `index`;
CREATE TABLE `index` (
  `id` int(22) NOT NULL AUTO_INCREMENT,
  `part` varchar(50) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `title_en` varchar(255) DEFAULT NULL COMMENT '英文标题',
  `content` text,
  `src` varchar(255) DEFAULT NULL COMMENT '排序',
  `time` int(12) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=20 DEFAULT CHARSET=utf8 COMMENT='新闻资讯表';

-- ----------------------------
-- Records of index
-- ----------------------------
INSERT INTO `index` VALUES ('2', '2', '实体产业与互联网高度融合', 'High Integration of Real Industry and Internet', '<p>共享经济，一般是指以获得一定报酬为主要目的 基于陌生人且存在物品使用权暂时转移的一种新 的经济模式。1</p>', '20190723/7e103fa804fb0fec5d667818c5264eb3.jpg', '1564480120');
INSERT INTO `index` VALUES ('3', '3', '线上销售和线下服务为一体', null, '<p>其本质是整合线下的闲散物品、劳动力、教育 医疗资源。有的也说共享经济是人们公平享有 社会资源各自以不同的方式付出和受益，共同获得经济红利</p>', '20190723/a91b705abaf544cfb00d632432c46439.jpg', '1563853553');
INSERT INTO `index` VALUES ('4', '4', '质量溯源方面', null, '<p>实现全产业链数据采集、存储与共享，近实时为 参与者提供商品整个生命周期内一切关联信息。</p>', '20190724/9b1574ec7370fd4a64b79861102636c4.png', '1563958878');
INSERT INTO `index` VALUES ('5', '5', '供需信息方面', null, '<p>打造了产业链所有环节共同参与的信息互动平台 能及时传导供需信息，为实现大规模订单式生产 提供有力支撑。</p>', '20190724/565a1fb847528f18352a0dbf8501b94b.png', '1563959479');
INSERT INTO `index` VALUES ('6', '6', '流通成本控制方面', null, '<p>采用TOKEN经济模式和IOT技术，将上下游产业链节点的责权 利在智能合约上约定，实时监控物流、仓储信息及时调控商品 流向流量，有效压降中间环节和库存消耗</p>', '20190724/0fc2778e3f0bf59050d073e361639fbb.jpg', '1563959663');
INSERT INTO `index` VALUES ('7', '7', '分享经济方面', null, '<p>基于区块链技术的创新模式，实现了海量分散和闲置资源平台化 协同化集聚，独创的激励机制重新定位了分享者经济角色，使分 享者不再是单纯的消费者，而是与平台利益高度一致的参与者</p>', '20190724/f762ee7b8da127752205b88afa6fc756.png', '1564107376');
INSERT INTO `index` VALUES ('1', '1', '共享经济两个特点', 'SHARED ECONOMIC CHARACTERISTICS', '', '', '1563959743');

-- ----------------------------
-- Table structure for messages
-- ----------------------------
DROP TABLE IF EXISTS `messages`;
CREATE TABLE `messages` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(155) NOT NULL,
  `email` varchar(155) DEFAULT NULL,
  `phone` varchar(15) DEFAULT NULL COMMENT '手机号',
  `content` varchar(255) DEFAULT NULL,
  `reply` varchar(255) DEFAULT NULL COMMENT '管理员回复',
  `is_show` int(2) DEFAULT '0' COMMENT '默认为0显示',
  `status` int(2) DEFAULT '0' COMMENT '默认是未回复',
  `time` int(12) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=17 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of messages
-- ----------------------------
INSERT INTO `messages` VALUES ('15', '123123', null, '12313123', 'dasdsada', null, '0', '0', null);
INSERT INTO `messages` VALUES ('16', '23werqwe', null, '13670208426', 'wqewqe', null, '0', '0', null);

-- ----------------------------
-- Table structure for news
-- ----------------------------
DROP TABLE IF EXISTS `news`;
CREATE TABLE `news` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(155) DEFAULT NULL,
  `content` text,
  `img` varchar(50) DEFAULT NULL,
  `sort` int(2) DEFAULT NULL COMMENT '排序',
  `is_show` int(1) DEFAULT '0' COMMENT '是否首页显示0是1否',
  `time` int(12) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=utf8 COMMENT='新闻资讯表';

-- ----------------------------
-- Records of news
-- ----------------------------
INSERT INTO `news` VALUES ('1', '123', '<p style=\"text-align: center;\">哈哈哈哈哈</p><p style=\"text-align: center;\"><img src=\"/ueditor/php/upload/image/20190730/1564455614867176.png\" title=\"1564455614867176.png\" alt=\"1@23x.png\" style=\"width: 438px; height: 374px;\" width=\"438\" height=\"374\"/></p>', '20190723/8de10202b0929f360431344ec77589f4.jpg', '23213', '0', '1563873165');
INSERT INTO `news` VALUES ('2', '123', '<p>123123123123<br/></p>', '20190723/8de10202b0929f360431344ec77589f4.jpg', '23213', '0', '1563873165');
INSERT INTO `news` VALUES ('3', '123', '<p>123123123123<br/></p>', '20190723/8de10202b0929f360431344ec77589f4.jpg', '23213', '0', '1563873165');
INSERT INTO `news` VALUES ('4', '123', '<p>123123123123<br/></p>', '20190723/8de10202b0929f360431344ec77589f4.jpg', '23213', '0', '1563873165');
INSERT INTO `news` VALUES ('5', '123', '<p>123123123123<br/></p>', '20190723/8de10202b0929f360431344ec77589f4.jpg', '23213', '0', '1563873165');
INSERT INTO `news` VALUES ('6', '123', '<p>123123123123<br/></p>', '20190723/8de10202b0929f360431344ec77589f4.jpg', '23213', '0', '1563873165');
INSERT INTO `news` VALUES ('7', '123', '<p>123123123123<br/></p>', '20190723/8de10202b0929f360431344ec77589f4.jpg', '23213', '0', '1563873165');
INSERT INTO `news` VALUES ('8', '123', '<p>123123123123<br/></p>', '20190723/8de10202b0929f360431344ec77589f4.jpg', '23213', '0', '1563873165');
INSERT INTO `news` VALUES ('9', '123', '<p>123123123123<br/></p>', '20190723/8de10202b0929f360431344ec77589f4.jpg', '23213', '0', '1563873165');
INSERT INTO `news` VALUES ('10', '123', '<p>123123123123<br/></p>', '20190723/8de10202b0929f360431344ec77589f4.jpg', '23213', '0', '1563873165');
INSERT INTO `news` VALUES ('11', '123', '<p>123123123123<br/></p>', '20190723/8de10202b0929f360431344ec77589f4.jpg', '23213', '0', '1563873165');
INSERT INTO `news` VALUES ('12', '123', '<p>123123123123<br/></p>', '20190723/8de10202b0929f360431344ec77589f4.jpg', '23213', '0', '1563873165');
INSERT INTO `news` VALUES ('13', '123', '<p>123123123123<br/></p>', '20190723/8de10202b0929f360431344ec77589f4.jpg', '23213', '0', '1563873165');
INSERT INTO `news` VALUES ('14', '123', '<p>123123123123<br/></p>', '20190723/8de10202b0929f360431344ec77589f4.jpg', '23213', '0', '1563873165');
INSERT INTO `news` VALUES ('15', '123', '<p>123123123123<br/></p>', '20190723/8de10202b0929f360431344ec77589f4.jpg', '23213', '0', '1563873165');

-- ----------------------------
-- Table structure for notice
-- ----------------------------
DROP TABLE IF EXISTS `notice`;
CREATE TABLE `notice` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(155) DEFAULT NULL,
  `content` text,
  `img` varchar(50) DEFAULT NULL,
  `sort` int(2) DEFAULT NULL COMMENT '排序',
  `is_show` int(1) DEFAULT '0' COMMENT '是否首页显示0是1否',
  `time` int(12) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='新闻资讯表';

-- ----------------------------
-- Records of notice
-- ----------------------------

-- ----------------------------
-- Table structure for plan
-- ----------------------------
DROP TABLE IF EXISTS `plan`;
CREATE TABLE `plan` (
  `id` int(22) NOT NULL AUTO_INCREMENT,
  `part` varchar(50) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `content` text,
  `src` varchar(255) DEFAULT NULL COMMENT '排序',
  `time` int(12) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='新闻资讯表';

-- ----------------------------
-- Records of plan
-- ----------------------------

-- ----------------------------
-- Table structure for system
-- ----------------------------
DROP TABLE IF EXISTS `system`;
CREATE TABLE `system` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `logo` varchar(50) DEFAULT NULL COMMENT '网站logo',
  `describe` varchar(100) DEFAULT NULL COMMENT '网站描述',
  `web_name` varchar(15) DEFAULT NULL COMMENT '网站名',
  `seo` varchar(255) DEFAULT '0' COMMENT '搜索优化',
  `web_close` int(2) DEFAULT '0' COMMENT '站点关闭',
  `close_desc` varchar(150) DEFAULT NULL COMMENT '关闭描述',
  `record` varchar(100) DEFAULT NULL COMMENT '备案号',
  `wechat` varchar(50) DEFAULT NULL COMMENT '网站微信公众号',
  `email` varchar(30) DEFAULT NULL,
  `phone` int(11) DEFAULT NULL COMMENT '网站联系方式',
  `qrcode` varchar(50) DEFAULT NULL COMMENT '客服二维码',
  `company` varchar(255) DEFAULT NULL COMMENT '公司名称',
  `address` varchar(200) DEFAULT NULL COMMENT '公司地址',
  `qq` varchar(20) DEFAULT NULL,
  `weibo` varchar(20) DEFAULT NULL COMMENT '微博号',
  `zx_phone` varchar(20) DEFAULT NULL COMMENT '咨询电话',
  `longitude` decimal(11,8) NOT NULL COMMENT '经度',
  `latitude` decimal(11,8) DEFAULT NULL COMMENT '纬度',
  `wechat_public` varchar(50) DEFAULT NULL COMMENT '微信公众号',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COMMENT='新闻资讯表';

-- ----------------------------
-- Records of system
-- ----------------------------
INSERT INTO `system` VALUES ('1', '20190530/f0d193b68e982cb7bc8857f14f06171c.png', '涵盖溯源防伪、供应链支付结算等领域的底层公链，致力于通过质量溯源、破除供需信息壁垒、调控商品供给，打造高度互信的新型经济协作生态体系，是祛除零售业痛点的根源性解决方案.', '熵云链', '熵云链', '1', '紧急关闭', '粤ICP备19007922号', '11', 'shangyunlian@163.com', '2147483647', '20190731/1fefed42f244b7ac8ad274467fc8e70d.png', '©国安较真（广东）科技有限公司', '广东省广州市 黄埔区科学大道50号绿地中央广场A3栋1802室', '200000000', 'shangyunlian@163.com', '13355225', '113.43758000', '23.17053800', '20190731/6405c69b396a9fd992973344bf08952a.png');

-- ----------------------------
-- Table structure for team
-- ----------------------------
DROP TABLE IF EXISTS `team`;
CREATE TABLE `team` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(155) DEFAULT NULL COMMENT '姓名',
  `position` varchar(20) DEFAULT NULL COMMENT '职务',
  `content` text,
  `img` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='新闻资讯表';

-- ----------------------------
-- Records of team
-- ----------------------------

-- ----------------------------
-- Table structure for trend
-- ----------------------------
DROP TABLE IF EXISTS `trend`;
CREATE TABLE `trend` (
  `id` int(22) NOT NULL AUTO_INCREMENT,
  `part` varchar(50) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `content` text,
  `src` varchar(255) DEFAULT NULL COMMENT '排序',
  `time` int(12) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=utf8 COMMENT='新闻资讯表';

-- ----------------------------
-- Records of trend
-- ----------------------------
INSERT INTO `trend` VALUES ('1', '1', '从农田到餐桌1', '<p>我国是农业大国，但农业发展举步维艰，农产品安全问题更是屡见报端，虽然管理部门积极采取措施加强各方面的管理和监督，但效果一直不理想。一方面消费者难以知晓农产品的“前世今生”，无法对农产品产生信任感；另一方面，一些虚假报道又对农产品的生产者造成难以估量的损失，伤农坑农现象屡屡发生。为此，基于二维码技术的农产品溯源系统，集中展示了农产品种植生产和加工销售过程，不仅保障了农产品质量安全、打消了消费者的担忧，更是对农业生产者的督促与支持。可以说溯源系统是解决农产品安全问题、促进农业发展的重要应用。1111111</p>', '20190730/c021f59ea83b59bf7bfee09c54197ec6.jpg', '1564481262');
INSERT INTO `trend` VALUES ('2', '2', '种植业溯源', '<p>对种子产品的生产、仓储、物流运输、市场巡检及消费等环节进行数据采集跟踪，实现产品生产环节、仓储环节、销售环节、流通环节和服务环\r\n节的全生命周期管理\r\n &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</p>', '20190727/0528fbb44bf77c41d8b215cfa8173de8.png', '1564192140');
INSERT INTO `trend` VALUES ('3', '3', '畜牧业溯源', '<p>畜牧养殖追溯体系能实现畜禽养殖、屠宰加工物流配送、消费终端等全产业链的无缝监管，做到肉类来源可追溯、去向可查证、责任可追究\r\n &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</p>', '20190727/c06155b5a866bfa8f034f3f5ea2fd0b8.png', '1564192239');
INSERT INTO `trend` VALUES ('4', '4', '食品溯源', '<p>畜牧养殖追溯体系能实现畜禽养殖、屠宰加工物流配送、消费终端等全产业链的无缝监管，做到肉类来源可追溯、去向可查证、责任可追究</p>', '20190727/2267f660f90f8963fbc0495b89a089e8.png', '1564192289');
INSERT INTO `trend` VALUES ('5', '5', '重要产品溯源', '<p>畜牧养殖追溯体系能实现畜禽养殖、屠宰加工物流配送、消费终端等全产业链的无缝监管，做到肉类来源可追溯、去向可查证、责任可追究</p>', '20190727/7da8ba6f14992c1ffa3599451a4318b4.png', '1564192319');
INSERT INTO `trend` VALUES ('6', '6', '国以民为本 民以食为天 食以安为先', '<p>国家以人民为根基，而人民以粮食为自己生活所系，食物以安全为首要条件，食物安全以食物的质量为根本，而要做保证食物的质量，又得以食物的生产者（生产商和农户等）的诚信为根本</p>', '20190727/9917950691a049c3c5be9dee290a1567.png', '1564192464');
INSERT INTO `trend` VALUES ('7', '7', '国安溯源云平台', '<p>通过记录产品的源头，从供应链下游至上游进行识别，追溯每一批产品品质来源。企业通过扫描产品上的二维码即可查询产品来源信息、营养元素信息、生产加工操作信息、运输仓储和销售等环节的相关信息，以便于监控和追溯产品源头。同时也能够了解产品从源头到物流一系列信息出现问题也可层层溯源……\r\n &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</p>', '20190727/dcab8ce944843d80255c161d6729d148.png', '1564192503');
INSERT INTO `trend` VALUES ('8', '8', '食品溯源意义', '', '20190727/28a8cf5856ae16966c028f1a1350409e.png', '1564192537');
INSERT INTO `trend` VALUES ('9', '9', '对社会', '<p>提高食品质量安全监管水平提高对问题食品的发现和处理能力防止重大安全事件的发生于蔓延促进食品流通和出口贸易</p>', '20190726/f37f0f721f9ddf701c0e0784643aea9a.jpg', '1564192576');
INSERT INTO `trend` VALUES ('10', '10', '对企业', '<p>杜绝假冒伪劣注重产品的品质和服务提升企业品牌和知名度拓宽市场份额树立行业标杆打造核心竞争力持续优化企业产品生产流通经销全流程提高企业生产效率\r\n 提高企业生产经营利润</p>', '20190726/f37f0f721f9ddf701c0e0784643aea9a.jpg', '1564192614');
INSERT INTO `trend` VALUES ('11', '11', '对消费者', '<p>提高产品生产加工流通销售各环节信息透明保障消费者合法权益\r\n有利于消费者维权及反馈使消费者得到更优质的售前体验和售后服务</p>', '20190726/f37f0f721f9ddf701c0e0784643aea9a.jpg', '1564192644');
INSERT INTO `trend` VALUES ('12', '12', '种植农特溯源', '<p>平台整合农产品产地环境、生产档案、检测数据形成农产品质量安全溯源数据。终端用户通过平台进行农产品全程溯源信息查询的统计入口，用户通过农产品唯一安全码（二维码）即可查看农产品从生长到销售各个重要环节的详细信息\r\n &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</p>', '20190727/41ef78f63282603495dd83c1894c1d9f.png', '1564192705');
INSERT INTO `trend` VALUES ('13', '13', '散养禽畜溯源', '<p>畜牧养殖追溯体系能实现畜禽养殖、屠宰加工、物流配送、消费终端等全产业链的无缝监管，做到肉类来源可追溯、去向可查证、责任可追究，应用于散养禽类（运动记步、健康监测）、散养畜类（运动轨迹、健康监测）等业务场景</p>', '20190727/c3c1c0daa3e19f37c3e9c2bfc391c21c.png', '1564192757');

-- ----------------------------
-- Table structure for user
-- ----------------------------
DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(15) NOT NULL,
  `password` varchar(36) NOT NULL,
  `pass` int(2) DEFAULT '0' COMMENT '是否通过,0代表正常,1代表封号',
  `img` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COMMENT='后台管理员表';

-- ----------------------------
-- Records of user
-- ----------------------------
INSERT INTO `user` VALUES ('1', 'admin', '5d73137c4ab5fca28f421b2bf3cd0e89', '0', null);
INSERT INTO `user` VALUES ('3', 'lisi', '5d73137c4ab5fca28f421b2bf3cd0e89', '1', null);
INSERT INTO `user` VALUES ('4', 'wangwu', '5d73137c4ab5fca28f421b2bf3cd0e89', '0', null);
INSERT INTO `user` VALUES ('5', 'zhangsan', '5d73137c4ab5fca28f421b2bf3cd0e89', '0', null);
INSERT INTO `user` VALUES ('6', 'zhaoliu', '5d73137c4ab5fca28f421b2bf3cd0e89', '0', null);
