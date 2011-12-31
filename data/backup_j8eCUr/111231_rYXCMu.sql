DROP TABLE IF EXISTS aq_adminfields;
CREATE TABLE `aq_adminfields` (
  `member_id` int(10) NOT NULL DEFAULT '-1',
  `depart_id` tinyint(1) NOT NULL DEFAULT '0',
  `first_name` varchar(25) NOT NULL DEFAULT '',
  `last_name` varchar(25) NOT NULL DEFAULT '',
  `level` tinyint(1) NOT NULL DEFAULT '0',
  `last_login` int(10) NOT NULL DEFAULT '0',
  `last_ip` varchar(25) NOT NULL DEFAULT '',
  `expired` int(10) NOT NULL DEFAULT '0',
  `permissions` text NOT NULL,
  `created` int(10) NOT NULL DEFAULT '0',
  `modified` int(10) NOT NULL DEFAULT '0',
  PRIMARY KEY (`member_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

INSERT INTO aq_adminfields VALUES('1','0','','管理员','0','0','','0','','1325314536','1325314536');

DROP TABLE IF EXISTS aq_adminmodules;
CREATE TABLE `aq_adminmodules` (
  `id` smallint(3) NOT NULL AUTO_INCREMENT,
  `parent_id` smallint(3) NOT NULL DEFAULT '0',
  `name` varchar(50) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;


DROP TABLE IF EXISTS aq_adminnotes;
CREATE TABLE `aq_adminnotes` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `member_id` int(10) NOT NULL DEFAULT '0',
  `title` varchar(100) NOT NULL DEFAULT '',
  `content` text,
  `created` int(10) NOT NULL DEFAULT '0',
  `modified` int(10) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;


DROP TABLE IF EXISTS aq_adminprivileges;
CREATE TABLE `aq_adminprivileges` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `adminmodule_id` int(5) NOT NULL DEFAULT '0',
  `name` varchar(25) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;


DROP TABLE IF EXISTS aq_adminroles;
CREATE TABLE `aq_adminroles` (
  `id` tinyint(2) NOT NULL AUTO_INCREMENT,
  `name` varchar(25) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;


DROP TABLE IF EXISTS aq_adses;
CREATE TABLE `aq_adses` (
  `id` smallint(6) NOT NULL AUTO_INCREMENT,
  `adzone_id` smallint(3) NOT NULL DEFAULT '0',
  `title` varchar(50) NOT NULL DEFAULT '',
  `description` text,
  `is_image` tinyint(1) NOT NULL DEFAULT '1',
  `source_name` varchar(100) NOT NULL DEFAULT '',
  `source_type` varchar(100) NOT NULL DEFAULT '',
  `source_url` varchar(255) NOT NULL DEFAULT '',
  `target_url` varchar(255) NOT NULL DEFAULT '',
  `width` smallint(6) NOT NULL DEFAULT '0',
  `height` smallint(6) NOT NULL DEFAULT '0',
  `alt_words` varchar(25) NOT NULL DEFAULT '',
  `start_date` int(10) NOT NULL DEFAULT '0',
  `end_date` int(10) NOT NULL DEFAULT '0',
  `priority` tinyint(1) NOT NULL DEFAULT '0',
  `clicked` smallint(6) NOT NULL DEFAULT '1',
  `target` enum('_parent','_self','_blank') NOT NULL DEFAULT '_blank',
  `seq` tinyint(1) NOT NULL DEFAULT '0',
  `state` tinyint(1) NOT NULL DEFAULT '1',
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `picture_replace` varchar(255) NOT NULL DEFAULT '',
  `created` int(10) NOT NULL DEFAULT '0',
  `modified` int(10) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=25 DEFAULT CHARSET=utf8;

INSERT INTO aq_adses VALUES('1','1','GIF','示例广告1','1','','image/gif','attachment/sample/default/blue.gif','','152','52','','0','0','0','1','_blank','0','1','1','','1325314541','1325314541');
INSERT INTO aq_adses VALUES('2','1','JPG','示例广告2','1','','image/gif','attachment/sample/default/blue.gif','','152','52','','0','0','0','1','_blank','0','1','1','','1325314541','1325314541');
INSERT INTO aq_adses VALUES('3','1','PNG','示例广告3','1','','image/gif','attachment/sample/default/blue.gif','','152','52','','0','0','0','1','_blank','0','1','1','','1325314541','1325314541');
INSERT INTO aq_adses VALUES('4','1','示例广告4','','1','','image/gif','attachment/sample/default/blue.gif','','152','52','','0','0','0','1','_blank','0','1','1','','1325314541','1325314541');
INSERT INTO aq_adses VALUES('5','1','示例广告5','PNG','1','','image/gif','attachment/sample/default/blue.gif','','152','52','','0','0','0','1','_blank','0','1','1','','1325314541','1325314541');
INSERT INTO aq_adses VALUES('6','1','示例广告6','','1','','image/gif','attachment/sample/default/blue.gif','','152','52','','0','0','0','1','_blank','0','1','1','','1325314541','1325314541');
INSERT INTO aq_adses VALUES('7','2','新一代行业电子商务平台','','1','','image/pjpeg','attachment/sample/example_958.jpg','http://www.phpb2b.com','958','62','','0','0','0','1','_blank','0','1','1','attachment/sample/example_958.jpg','1325314541','1325314541');
INSERT INTO aq_adses VALUES('8','3','商机广告','','1','','image/pjpeg','attachment/sample/breathe-offer1.jpg','','477','170','','0','0','0','1','_blank','0','1','1','images/nopicture_small.gif','1325314541','1325314541');
INSERT INTO aq_adses VALUES('9','3','欢迎注册','注册','1','','image/pjpeg','attachment/sample/breathe-offer2.jpg','','477','170','','0','0','0','1','_blank','0','1','1','images/nopicture_small.gif','1325314541','1325314541');
INSERT INTO aq_adses VALUES('15','4','产品首页大图','','1','','image/pjpeg','attachment/sample/breathe-product1.jpg','','500','200','','0','0','0','1','_blank','0','1','1','images/nopicture_small.gif','1325314541','1303735837');
INSERT INTO aq_adses VALUES('16','5','首页大图','','1','','image/pjpeg','attachment/sample/breathe-index1.jpg','','500','200','','0','0','0','1','_blank','0','1','1','images/nopicture_small.gif','1325314541','1325314541');
INSERT INTO aq_adses VALUES('18','4','加入会员商机无限','','1','','image/pjpeg','attachment/sample/breathe-product2.jpg','','570','170','','0','0','0','1','_blank','0','1','1','images/nopicture_small.gif','1325314541','1325314541');
INSERT INTO aq_adses VALUES('17','5','会员广告','asdf','1','','image/pjpeg','attachment/sample/breathe-index2.jpg','','500','200','','0','0','0','1','_blank','0','1','1','images/nopicture_small.gif','1325314541','1325314541');
INSERT INTO aq_adses VALUES('19','6','专题广告示例1','示例','1','','image/pjpeg','attachment/sample/144x120.png','http://www.phpb2b.com/','500','200','','0','0','0','1','_blank','0','1','1','images/nopicture_small.gif','1325314541','1325314541');
INSERT INTO aq_adses VALUES('20','6','专题广告示例2','','1','','image/pjpeg','attachment/sample/144x120.png','http://www.phpb2b.com/','500','200','','0','0','0','1','_blank','0','1','1','images/nopicture_small.gif','1325314541','1325314541');
INSERT INTO aq_adses VALUES('21','6','专题广告示例3','','1','','image/pjpeg','attachment/sample/144x120.png','http://www.phpb2b.com/','500','200','','0','0','0','1','_blank','0','1','1','images/nopicture_small.gif','1325314541','1325314541');
INSERT INTO aq_adses VALUES('24','7','社区','','1','','image/pjpeg','attachment/sample/phpb2b.jpg','http://bbs.phpb2b.com/','220','82','','0','0','0','1','_blank','0','1','1','images/nopicture_small.gif','1325314541','1325314541');

DROP TABLE IF EXISTS aq_adzones;
CREATE TABLE `aq_adzones` (
  `id` smallint(6) NOT NULL AUTO_INCREMENT,
  `membergroup_ids` varchar(50) NOT NULL DEFAULT '',
  `what` varchar(10) NOT NULL DEFAULT '',
  `style` tinyint(1) NOT NULL DEFAULT '0',
  `name` varchar(100) NOT NULL DEFAULT '',
  `description` text,
  `additional_adwords` text,
  `price` float(9,2) NOT NULL DEFAULT '0.00',
  `file_name` varchar(100) NOT NULL DEFAULT '',
  `width` smallint(6) NOT NULL DEFAULT '0',
  `height` smallint(6) NOT NULL DEFAULT '0',
  `wrap` smallint(6) NOT NULL DEFAULT '0',
  `max_ad` smallint(6) NOT NULL DEFAULT '0',
  `created` int(10) NOT NULL DEFAULT '0',
  `modified` int(10) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

INSERT INTO aq_adzones VALUES('1','8,9','1','0','首页顶部小图片广告','6个图片一行，首页显示','','1000.00','index.php','760','52','6','12','1325314541','1325314541');
INSERT INTO aq_adzones VALUES('2','0','1','0','首页横幅广告','免费开源，支持多国语言，友邻B2B','','3000.00','index.php','958','62','0','0','1325314541','1325314541');
INSERT INTO aq_adzones VALUES('3','','1','1','商机首页广告','找商机首页','','1000.00','','380','270','0','0','1325314541','1325314541');
INSERT INTO aq_adzones VALUES('4','','1','1','产品首页广告','6个图片一行，首页显示','','0.01','','570','170','0','0','1325314541','1325314541');
INSERT INTO aq_adzones VALUES('5','0','1','1','首页大图广告','首页宣传1','','0.01','','473','170','0','0','1325314541','1325314541');
INSERT INTO aq_adzones VALUES('6','','1','0','专题页面左侧广告','左侧位置广告','','0.00','','0','0','0','0','1325314541','1325314541');
INSERT INTO aq_adzones VALUES('7','','1','0','Community','PHPB2B community','','0.00','','0','0','0','0','1325314541','1325314541');

DROP TABLE IF EXISTS aq_albums;
CREATE TABLE `aq_albums` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `member_id` int(10) NOT NULL DEFAULT '0',
  `attachment_id` int(10) NOT NULL DEFAULT '0',
  `type_id` smallint(3) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;


DROP TABLE IF EXISTS aq_albumtypes;
CREATE TABLE `aq_albumtypes` (
  `id` smallint(3) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL DEFAULT '',
  `display_order` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

INSERT INTO aq_albumtypes VALUES('1','企业相册','0');
INSERT INTO aq_albumtypes VALUES('2','产品图片','0');
INSERT INTO aq_albumtypes VALUES('3','广告宣传','0');

DROP TABLE IF EXISTS aq_announcements;
CREATE TABLE `aq_announcements` (
  `id` smallint(6) unsigned NOT NULL AUTO_INCREMENT,
  `announcetype_id` smallint(3) NOT NULL DEFAULT '0',
  `subject` varchar(255) NOT NULL DEFAULT '',
  `message` text,
  `display_order` tinyint(1) NOT NULL DEFAULT '0',
  `display_expiration` int(10) unsigned NOT NULL DEFAULT '0',
  `created` int(10) unsigned NOT NULL DEFAULT '0',
  `modified` int(10) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

INSERT INTO aq_announcements VALUES('4','1','如何让您的产品排名更靠前','','0','0','1325314541','0');
INSERT INTO aq_announcements VALUES('3','2','网站会员服务介绍','','0','0','1325314541','0');
INSERT INTO aq_announcements VALUES('2','1','开通金牌旺铺','','0','0','1325314541','0');
INSERT INTO aq_announcements VALUES('1','1','精彩世博，关注环保 ','精彩世博，关注环保','0','0','1325314541','0');

DROP TABLE IF EXISTS aq_announcementtypes;
CREATE TABLE `aq_announcementtypes` (
  `id` smallint(3) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

INSERT INTO aq_announcementtypes VALUES('1','网站公告');
INSERT INTO aq_announcementtypes VALUES('2','广告时间');

DROP TABLE IF EXISTS aq_areas;
CREATE TABLE `aq_areas` (
  `id` smallint(6) NOT NULL AUTO_INCREMENT,
  `attachment_id` int(10) NOT NULL DEFAULT '0',
  `areatype_id` smallint(3) NOT NULL DEFAULT '0',
  `child_ids` text,
  `top_parentid` smallint(6) NOT NULL DEFAULT '0',
  `level` tinyint(1) NOT NULL DEFAULT '1',
  `name` varchar(255) NOT NULL DEFAULT '',
  `url` varchar(255) NOT NULL DEFAULT '',
  `alias_name` varchar(255) NOT NULL DEFAULT '',
  `highlight` tinyint(1) NOT NULL DEFAULT '0',
  `parent_id` smallint(6) NOT NULL DEFAULT '0',
  `display_order` tinyint(1) NOT NULL DEFAULT '0',
  `description` text,
  `available` tinyint(1) NOT NULL DEFAULT '1',
  `created` int(10) NOT NULL DEFAULT '0',
  `modified` int(10) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=1943 DEFAULT CHARSET=utf8;

INSERT INTO aq_areas VALUES('1','0','1','','0','1','北京','','','0','0','0','','1','0','0');
INSERT INTO aq_areas VALUES('2','0','1','','0','1','天津','','','0','0','0','','1','0','0');
INSERT INTO aq_areas VALUES('3','0','1','','0','1','河北','','','0','0','0','','1','0','0');
INSERT INTO aq_areas VALUES('4','0','1','','0','1','山西','','','0','0','0','','1','0','0');
INSERT INTO aq_areas VALUES('5','0','1','','0','1','内蒙古','','','0','0','0','','1','0','0');
INSERT INTO aq_areas VALUES('6','0','1','','0','1','辽宁','','','0','0','0','','1','0','0');
INSERT INTO aq_areas VALUES('7','0','1','','0','1','吉林','','','0','0','0','','1','0','0');
INSERT INTO aq_areas VALUES('8','0','1','','0','1','黑龙江','','','0','0','0','','1','0','0');
INSERT INTO aq_areas VALUES('9','0','1','','0','1','上海','','','0','0','0','','1','0','0');
INSERT INTO aq_areas VALUES('10','0','1','','0','1','江苏','','','0','0','0','','1','0','0');
INSERT INTO aq_areas VALUES('11','0','1','','0','1','浙江','','','0','0','0','','1','0','0');
INSERT INTO aq_areas VALUES('12','0','1','','0','1','安徽','','','0','0','0','','1','0','0');
INSERT INTO aq_areas VALUES('13','0','1','','0','1','福建','','','0','0','0','','1','0','0');
INSERT INTO aq_areas VALUES('14','0','1','','0','1','江西','','','0','0','0','','1','0','0');
INSERT INTO aq_areas VALUES('15','0','1','','0','1','山东','','','0','0','0','','1','0','0');
INSERT INTO aq_areas VALUES('16','0','1','','0','1','河南','','','0','0','0','','1','0','0');
INSERT INTO aq_areas VALUES('17','0','1','','0','1','湖北','','','0','0','0','','1','0','0');
INSERT INTO aq_areas VALUES('18','0','1','','0','1','湖南','','','0','0','0','','1','0','0');
INSERT INTO aq_areas VALUES('19','0','1','','0','1','广东','','','0','0','0','','1','0','0');
INSERT INTO aq_areas VALUES('20','0','1','','0','1','广西','','','0','0','0','','1','0','0');
INSERT INTO aq_areas VALUES('21','0','1','','0','1','海南','','','0','0','0','','1','0','0');
INSERT INTO aq_areas VALUES('22','0','1','','0','1','重庆','','','0','0','0','','1','0','0');
INSERT INTO aq_areas VALUES('23','0','1','','0','1','四川','','','0','0','0','','1','0','0');
INSERT INTO aq_areas VALUES('24','0','1','','0','1','贵州','','','0','0','0','','1','0','0');
INSERT INTO aq_areas VALUES('25','0','1','','0','1','云南','','','0','0','0','','1','0','0');
INSERT INTO aq_areas VALUES('26','0','1','','0','1','西藏','','','0','0','0','','1','0','0');
INSERT INTO aq_areas VALUES('27','0','1','','0','1','陕西','','','0','0','0','','1','0','0');
INSERT INTO aq_areas VALUES('28','0','1','','0','1','甘肃','','','0','0','0','','1','0','0');
INSERT INTO aq_areas VALUES('29','0','1','','0','1','青海','','','0','0','0','','1','0','0');
INSERT INTO aq_areas VALUES('30','0','1','','0','1','宁夏','','','0','0','0','','1','0','0');
INSERT INTO aq_areas VALUES('31','0','1','','0','1','新疆','','','0','0','0','','1','0','0');
INSERT INTO aq_areas VALUES('32','0','1','','0','1','台湾','','','0','0','0','','1','0','0');
INSERT INTO aq_areas VALUES('33','0','1','','0','1','香港','','','0','0','0','','1','0','0');
INSERT INTO aq_areas VALUES('34','0','1','','0','1','澳门','','','0','0','0','','1','0','0');
INSERT INTO aq_areas VALUES('35','0','1','','1','2','市辖区','','','0','1','0','','1','0','0');
INSERT INTO aq_areas VALUES('36','0','1','','1','2','县','','','0','1','0','','1','0','0');
INSERT INTO aq_areas VALUES('37','0','1','','2','2','市辖区','','','0','2','0','','1','0','0');
INSERT INTO aq_areas VALUES('38','0','1','','2','2','县','','','0','2','0','','1','0','0');
INSERT INTO aq_areas VALUES('39','0','1','','3','2','石家庄市','','','0','3','0','','1','0','0');
INSERT INTO aq_areas VALUES('40','0','1','','3','2','唐山市','','','0','3','0','','1','0','0');
INSERT INTO aq_areas VALUES('41','0','1','','3','2','秦皇岛市','','','0','3','0','','1','0','0');
INSERT INTO aq_areas VALUES('42','0','1','','3','2','邯郸市','','','0','3','0','','1','0','0');
INSERT INTO aq_areas VALUES('43','0','1','','3','2','邢台市','','','0','3','0','','1','0','0');
INSERT INTO aq_areas VALUES('44','0','1','','3','2','保定市','','','0','3','0','','1','0','0');
INSERT INTO aq_areas VALUES('45','0','1','','3','2','张家口市','','','0','3','0','','1','0','0');
INSERT INTO aq_areas VALUES('46','0','1','','3','2','承德市','','','0','3','0','','1','0','0');
INSERT INTO aq_areas VALUES('47','0','1','','3','2','沧州市','','','0','3','0','','1','0','0');
INSERT INTO aq_areas VALUES('48','0','1','','3','2','廊坊市','','','0','3','0','','1','0','0');
INSERT INTO aq_areas VALUES('49','0','1','','3','2','衡水市','','','0','3','0','','1','0','0');
INSERT INTO aq_areas VALUES('50','0','1','','4','2','太原市','','','0','4','0','','1','0','0');
INSERT INTO aq_areas VALUES('51','0','1','','4','2','大同市','','','0','4','0','','1','0','0');
INSERT INTO aq_areas VALUES('52','0','1','','4','2','阳泉市','','','0','4','0','','1','0','0');
INSERT INTO aq_areas VALUES('53','0','1','','4','2','长治市','','','0','4','0','','1','0','0');
INSERT INTO aq_areas VALUES('54','0','1','','4','2','晋城市','','','0','4','0','','1','0','0');
INSERT INTO aq_areas VALUES('55','0','1','','4','2','朔州市','','','0','4','0','','1','0','0');
INSERT INTO aq_areas VALUES('56','0','1','','4','2','晋中市','','','0','4','0','','1','0','0');
INSERT INTO aq_areas VALUES('57','0','1','','4','2','运城市','','','0','4','0','','1','0','0');
INSERT INTO aq_areas VALUES('58','0','1','','4','2','忻州市','','','0','4','0','','1','0','0');
INSERT INTO aq_areas VALUES('59','0','1','','4','2','临汾市','','','0','4','0','','1','0','0');
INSERT INTO aq_areas VALUES('60','0','1','','4','2','吕梁市','','','0','4','0','','1','0','0');
INSERT INTO aq_areas VALUES('61','0','1','','5','2','呼和浩特市','','','0','5','0','','1','0','0');
INSERT INTO aq_areas VALUES('62','0','1','','5','2','包头市','','','0','5','0','','1','0','0');
INSERT INTO aq_areas VALUES('63','0','1','','5','2','乌海市','','','0','5','0','','1','0','0');
INSERT INTO aq_areas VALUES('64','0','1','','5','2','赤峰市','','','0','5','0','','1','0','0');
INSERT INTO aq_areas VALUES('65','0','1','','5','2','通辽市','','','0','5','0','','1','0','0');
INSERT INTO aq_areas VALUES('66','0','1','','5','2','鄂尔多斯市','','','0','5','0','','1','0','0');
INSERT INTO aq_areas VALUES('67','0','1','','5','2','呼伦贝尔市','','','0','5','0','','1','0','0');
INSERT INTO aq_areas VALUES('68','0','1','','5','2','巴彦淖尔市','','','0','5','0','','1','0','0');
INSERT INTO aq_areas VALUES('69','0','1','','5','2','乌兰察布市','','','0','5','0','','1','0','0');
INSERT INTO aq_areas VALUES('70','0','1','','5','2','兴安盟','','','0','5','0','','1','0','0');
INSERT INTO aq_areas VALUES('71','0','1','','5','2','锡林郭勒盟','','','0','5','0','','1','0','0');
INSERT INTO aq_areas VALUES('72','0','1','','5','2','阿拉善盟','','','0','5','0','','1','0','0');
INSERT INTO aq_areas VALUES('73','0','1','','6','2','沈阳市','','','0','6','0','','1','0','0');
INSERT INTO aq_areas VALUES('74','0','1','','6','2','大连市','','','0','6','0','','1','0','0');
INSERT INTO aq_areas VALUES('75','0','1','','6','2','鞍山市','','','0','6','0','','1','0','0');
INSERT INTO aq_areas VALUES('76','0','1','','6','2','抚顺市','','','0','6','0','','1','0','0');
INSERT INTO aq_areas VALUES('77','0','1','','6','2','本溪市','','','0','6','0','','1','0','0');
INSERT INTO aq_areas VALUES('78','0','1','','6','2','丹东市','','','0','6','0','','1','0','0');
INSERT INTO aq_areas VALUES('79','0','1','','6','2','锦州市','','','0','6','0','','1','0','0');
INSERT INTO aq_areas VALUES('80','0','1','','6','2','营口市','','','0','6','0','','1','0','0');
INSERT INTO aq_areas VALUES('81','0','1','','6','2','阜新市','','','0','6','0','','1','0','0');
INSERT INTO aq_areas VALUES('82','0','1','','6','2','辽阳市','','','0','6','0','','1','0','0');
INSERT INTO aq_areas VALUES('83','0','1','','6','2','盘锦市','','','0','6','0','','1','0','0');
INSERT INTO aq_areas VALUES('84','0','1','','6','2','铁岭市','','','0','6','0','','1','0','0');
INSERT INTO aq_areas VALUES('85','0','1','','6','2','朝阳市','','','0','6','0','','1','0','0');
INSERT INTO aq_areas VALUES('86','0','1','','6','2','葫芦岛市','','','0','6','0','','1','0','0');
INSERT INTO aq_areas VALUES('87','0','1','','7','2','长春市','','','0','7','0','','1','0','0');
INSERT INTO aq_areas VALUES('88','0','1','','7','2','吉林市','','','0','7','0','','1','0','0');
INSERT INTO aq_areas VALUES('89','0','1','','7','2','四平市','','','0','7','0','','1','0','0');
INSERT INTO aq_areas VALUES('90','0','1','','7','2','辽源市','','','0','7','0','','1','0','0');
INSERT INTO aq_areas VALUES('91','0','1','','7','2','通化市','','','0','7','0','','1','0','0');
INSERT INTO aq_areas VALUES('92','0','1','','7','2','白山市','','','0','7','0','','1','0','0');
INSERT INTO aq_areas VALUES('93','0','1','','7','2','松原市','','','0','7','0','','1','0','0');
INSERT INTO aq_areas VALUES('94','0','1','','7','2','白城市','','','0','7','0','','1','0','0');
INSERT INTO aq_areas VALUES('95','0','1','','7','2','延边朝鲜族自治州','','','0','7','0','','1','0','0');
INSERT INTO aq_areas VALUES('96','0','1','','8','2','哈尔滨市','','','0','8','0','','1','0','0');
INSERT INTO aq_areas VALUES('97','0','1','','8','2','齐齐哈尔市','','','0','8','0','','1','0','0');
INSERT INTO aq_areas VALUES('98','0','1','','8','2','鸡西市','','','0','8','0','','1','0','0');
INSERT INTO aq_areas VALUES('99','0','1','','8','2','鹤岗市','','','0','8','0','','1','0','0');
INSERT INTO aq_areas VALUES('100','0','1','','8','2','双鸭山市','','','0','8','0','','1','0','0');
INSERT INTO aq_areas VALUES('101','0','1','','8','2','大庆市','','','0','8','0','','1','0','0');
INSERT INTO aq_areas VALUES('102','0','1','','8','2','伊春市','','','0','8','0','','1','0','0');
INSERT INTO aq_areas VALUES('103','0','1','','8','2','佳木斯市','','','0','8','0','','1','0','0');
INSERT INTO aq_areas VALUES('104','0','1','','8','2','七台河市','','','0','8','0','','1','0','0');
INSERT INTO aq_areas VALUES('105','0','1','','8','2','牡丹江市','','','0','8','0','','1','0','0');
INSERT INTO aq_areas VALUES('106','0','1','','8','2','黑河市','','','0','8','0','','1','0','0');
INSERT INTO aq_areas VALUES('107','0','1','','8','2','绥化市','','','0','8','0','','1','0','0');
INSERT INTO aq_areas VALUES('108','0','1','','8','2','大兴安岭地区','','','0','8','0','','1','0','0');
INSERT INTO aq_areas VALUES('109','0','1','','9','2','市辖区','','','0','9','0','','1','0','0');
INSERT INTO aq_areas VALUES('110','0','1','','9','2','县','','','0','9','0','','1','0','0');
INSERT INTO aq_areas VALUES('111','0','1','','10','2','南京市','','','0','10','0','','1','0','0');
INSERT INTO aq_areas VALUES('112','0','1','','10','2','无锡市','','','0','10','0','','1','0','0');
INSERT INTO aq_areas VALUES('113','0','1','','10','2','徐州市','','','0','10','0','','1','0','0');
INSERT INTO aq_areas VALUES('114','0','1','','10','2','常州市','','','0','10','0','','1','0','0');
INSERT INTO aq_areas VALUES('115','0','1','','10','2','苏州市','','','0','10','0','','1','0','0');
INSERT INTO aq_areas VALUES('116','0','1','','10','2','南通市','','','0','10','0','','1','0','0');
INSERT INTO aq_areas VALUES('117','0','1','','10','2','连云港市','','','0','10','0','','1','0','0');
INSERT INTO aq_areas VALUES('118','0','1','','10','2','淮安市','','','0','10','0','','1','0','0');
INSERT INTO aq_areas VALUES('119','0','1','','10','2','盐城市','','','0','10','0','','1','0','0');
INSERT INTO aq_areas VALUES('120','0','1','','10','2','扬州市','','','0','10','0','','1','0','0');
INSERT INTO aq_areas VALUES('121','0','1','','10','2','镇江市','','','0','10','0','','1','0','0');
INSERT INTO aq_areas VALUES('122','0','1','','10','2','泰州市','','','0','10','0','','1','0','0');
INSERT INTO aq_areas VALUES('123','0','1','','10','2','宿迁市','','','0','10','0','','1','0','0');
INSERT INTO aq_areas VALUES('124','0','1','','11','2','杭州市','','','0','11','0','','1','0','0');
INSERT INTO aq_areas VALUES('125','0','1','','11','2','宁波市','','','0','11','0','','1','0','0');
INSERT INTO aq_areas VALUES('126','0','1','','11','2','温州市','','','0','11','0','','1','0','0');
INSERT INTO aq_areas VALUES('127','0','1','','11','2','嘉兴市','','','0','11','0','','1','0','0');
INSERT INTO aq_areas VALUES('128','0','1','','11','2','湖州市','','','0','11','0','','1','0','0');
INSERT INTO aq_areas VALUES('129','0','1','','11','2','绍兴市','','','0','11','0','','1','0','0');
INSERT INTO aq_areas VALUES('130','0','1','','11','2','金华市','','','0','11','0','','1','0','0');
INSERT INTO aq_areas VALUES('131','0','1','','11','2','衢州市','','','0','11','0','','1','0','0');
INSERT INTO aq_areas VALUES('132','0','1','','11','2','舟山市','','','0','11','0','','1','0','0');
INSERT INTO aq_areas VALUES('133','0','1','','11','2','台州市','','','0','11','0','','1','0','0');
INSERT INTO aq_areas VALUES('134','0','1','','11','2','丽水市','','','0','11','0','','1','0','0');
INSERT INTO aq_areas VALUES('135','0','1','','12','2','合肥市','','','0','12','0','','1','0','0');
INSERT INTO aq_areas VALUES('136','0','1','','12','2','芜湖市','','','0','12','0','','1','0','0');
INSERT INTO aq_areas VALUES('137','0','1','','12','2','蚌埠市','','','0','12','0','','1','0','0');
INSERT INTO aq_areas VALUES('138','0','1','','12','2','淮南市','','','0','12','0','','1','0','0');
INSERT INTO aq_areas VALUES('139','0','1','','12','2','马鞍山市','','','0','12','0','','1','0','0');
INSERT INTO aq_areas VALUES('140','0','1','','12','2','淮北市','','','0','12','0','','1','0','0');
INSERT INTO aq_areas VALUES('141','0','1','','12','2','铜陵市','','','0','12','0','','1','0','0');
INSERT INTO aq_areas VALUES('142','0','1','','12','2','安庆市','','','0','12','0','','1','0','0');
INSERT INTO aq_areas VALUES('143','0','1','','12','2','黄山市','','','0','12','0','','1','0','0');
INSERT INTO aq_areas VALUES('144','0','1','','12','2','滁州市','','','0','12','0','','1','0','0');
INSERT INTO aq_areas VALUES('145','0','1','','12','2','阜阳市','','','0','12','0','','1','0','0');
INSERT INTO aq_areas VALUES('146','0','1','','12','2','宿州市','','','0','12','0','','1','0','0');
INSERT INTO aq_areas VALUES('147','0','1','','12','2','巢湖市','','','0','12','0','','1','0','0');
INSERT INTO aq_areas VALUES('148','0','1','','12','2','六安市','','','0','12','0','','1','0','0');
INSERT INTO aq_areas VALUES('149','0','1','','12','2','亳州市','','','0','12','0','','1','0','0');
INSERT INTO aq_areas VALUES('150','0','1','','12','2','池州市','','','0','12','0','','1','0','0');
INSERT INTO aq_areas VALUES('151','0','1','','12','2','宣城市','','','0','12','0','','1','0','0');
INSERT INTO aq_areas VALUES('152','0','1','','13','2','福州市','','','0','13','0','','1','0','0');
INSERT INTO aq_areas VALUES('153','0','1','','13','2','厦门市','','','0','13','0','','1','0','0');
INSERT INTO aq_areas VALUES('154','0','1','','13','2','莆田市','','','0','13','0','','1','0','0');
INSERT INTO aq_areas VALUES('155','0','1','','13','2','三明市','','','0','13','0','','1','0','0');
INSERT INTO aq_areas VALUES('156','0','1','','13','2','泉州市','','','0','13','0','','1','0','0');
INSERT INTO aq_areas VALUES('157','0','1','','13','2','漳州市','','','0','13','0','','1','0','0');
INSERT INTO aq_areas VALUES('158','0','1','','13','2','南平市','','','0','13','0','','1','0','0');
INSERT INTO aq_areas VALUES('159','0','1','','13','2','龙岩市','','','0','13','0','','1','0','0');
INSERT INTO aq_areas VALUES('160','0','1','','13','2','宁德市','','','0','13','0','','1','0','0');
INSERT INTO aq_areas VALUES('161','0','1','','14','2','南昌市','','','0','14','0','','1','0','0');
INSERT INTO aq_areas VALUES('162','0','1','','14','2','景德镇市','','','0','14','0','','1','0','0');
INSERT INTO aq_areas VALUES('163','0','1','','14','2','萍乡市','','','0','14','0','','1','0','0');
INSERT INTO aq_areas VALUES('164','0','1','','14','2','九江市','','','0','14','0','','1','0','0');
INSERT INTO aq_areas VALUES('165','0','1','','14','2','新余市','','','0','14','0','','1','0','0');
INSERT INTO aq_areas VALUES('166','0','1','','14','2','鹰潭市','','','0','14','0','','1','0','0');
INSERT INTO aq_areas VALUES('167','0','1','','14','2','赣州市','','','0','14','0','','1','0','0');
INSERT INTO aq_areas VALUES('168','0','1','','14','2','吉安市','','','0','14','0','','1','0','0');
INSERT INTO aq_areas VALUES('169','0','1','','14','2','宜春市','','','0','14','0','','1','0','0');
INSERT INTO aq_areas VALUES('170','0','1','','14','2','抚州市','','','0','14','0','','1','0','0');
INSERT INTO aq_areas VALUES('171','0','1','','14','2','上饶市','','','0','14','0','','1','0','0');
INSERT INTO aq_areas VALUES('172','0','1','','15','2','济南市','','','0','15','0','','1','0','0');
INSERT INTO aq_areas VALUES('173','0','1','','15','2','青岛市','','','0','15','0','','1','0','0');
INSERT INTO aq_areas VALUES('174','0','1','','15','2','淄博市','','','0','15','0','','1','0','0');
INSERT INTO aq_areas VALUES('175','0','1','','15','2','枣庄市','','','0','15','0','','1','0','0');
INSERT INTO aq_areas VALUES('176','0','1','','15','2','东营市','','','0','15','0','','1','0','0');
INSERT INTO aq_areas VALUES('177','0','1','','15','2','烟台市','','','0','15','0','','1','0','0');
INSERT INTO aq_areas VALUES('178','0','1','','15','2','潍坊市','','','0','15','0','','1','0','0');
INSERT INTO aq_areas VALUES('179','0','1','','15','2','济宁市','','','0','15','0','','1','0','0');
INSERT INTO aq_areas VALUES('180','0','1','','15','2','泰安市','','','0','15','0','','1','0','0');
INSERT INTO aq_areas VALUES('181','0','1','','15','2','威海市','','','0','15','0','','1','0','0');
INSERT INTO aq_areas VALUES('182','0','1','','15','2','日照市','','','0','15','0','','1','0','0');
INSERT INTO aq_areas VALUES('183','0','1','','15','2','莱芜市','','','0','15','0','','1','0','0');
INSERT INTO aq_areas VALUES('184','0','1','','15','2','临沂市','','','0','15','0','','1','0','0');
INSERT INTO aq_areas VALUES('185','0','1','','15','2','德州市','','','0','15','0','','1','0','0');
INSERT INTO aq_areas VALUES('186','0','1','','15','2','聊城市','','','0','15','0','','1','0','0');
INSERT INTO aq_areas VALUES('187','0','1','','15','2','滨州市','','','0','15','0','','1','0','0');
INSERT INTO aq_areas VALUES('188','0','1','','15','2','荷泽市','','','0','15','0','','1','0','0');
INSERT INTO aq_areas VALUES('189','0','1','','16','2','郑州市','','','0','16','0','','1','0','0');
INSERT INTO aq_areas VALUES('190','0','1','','16','2','开封市','','','0','16','0','','1','0','0');
INSERT INTO aq_areas VALUES('191','0','1','','16','2','洛阳市','','','0','16','0','','1','0','0');
INSERT INTO aq_areas VALUES('192','0','1','','16','2','平顶山市','','','0','16','0','','1','0','0');
INSERT INTO aq_areas VALUES('193','0','1','','16','2','安阳市','','','0','16','0','','1','0','0');
INSERT INTO aq_areas VALUES('194','0','1','','16','2','鹤壁市','','','0','16','0','','1','0','0');
INSERT INTO aq_areas VALUES('195','0','1','','16','2','新乡市','','','0','16','0','','1','0','0');
INSERT INTO aq_areas VALUES('196','0','1','','16','2','焦作市','','','0','16','0','','1','0','0');
INSERT INTO aq_areas VALUES('197','0','1','','16','2','濮阳市','','','0','16','0','','1','0','0');
INSERT INTO aq_areas VALUES('198','0','1','','16','2','许昌市','','','0','16','0','','1','0','0');
INSERT INTO aq_areas VALUES('199','0','1','','16','2','漯河市','','','0','16','0','','1','0','0');
INSERT INTO aq_areas VALUES('200','0','1','','16','2','三门峡市','','','0','16','0','','1','0','0');
INSERT INTO aq_areas VALUES('201','0','1','','16','2','南阳市','','','0','16','0','','1','0','0');
INSERT INTO aq_areas VALUES('202','0','1','','16','2','商丘市','','','0','16','0','','1','0','0');
INSERT INTO aq_areas VALUES('203','0','1','','16','2','信阳市','','','0','16','0','','1','0','0');
INSERT INTO aq_areas VALUES('204','0','1','','16','2','周口市','','','0','16','0','','1','0','0');
INSERT INTO aq_areas VALUES('205','0','1','','16','2','驻马店市','','','0','16','0','','1','0','0');
INSERT INTO aq_areas VALUES('206','0','1','','17','2','武汉市','','','0','17','0','','1','0','0');
INSERT INTO aq_areas VALUES('207','0','1','','17','2','黄石市','','','0','17','0','','1','0','0');
INSERT INTO aq_areas VALUES('208','0','1','','17','2','十堰市','','','0','17','0','','1','0','0');
INSERT INTO aq_areas VALUES('209','0','1','','17','2','宜昌市','','','0','17','0','','1','0','0');
INSERT INTO aq_areas VALUES('210','0','1','','17','2','襄樊市','','','0','17','0','','1','0','0');
INSERT INTO aq_areas VALUES('211','0','1','','17','2','鄂州市','','','0','17','0','','1','0','0');
INSERT INTO aq_areas VALUES('212','0','1','','17','2','荆门市','','','0','17','0','','1','0','0');
INSERT INTO aq_areas VALUES('213','0','1','','17','2','孝感市','','','0','17','0','','1','0','0');
INSERT INTO aq_areas VALUES('214','0','1','','17','2','荆州市','','','0','17','0','','1','0','0');
INSERT INTO aq_areas VALUES('215','0','1','','17','2','黄冈市','','','0','17','0','','1','0','0');
INSERT INTO aq_areas VALUES('216','0','1','','17','2','咸宁市','','','0','17','0','','1','0','0');
INSERT INTO aq_areas VALUES('217','0','1','','17','2','随州市','','','0','17','0','','1','0','0');
INSERT INTO aq_areas VALUES('218','0','1','','17','2','恩施土家族苗族自治州','','','0','17','0','','1','0','0');
INSERT INTO aq_areas VALUES('219','0','1','','17','2','省直辖行政单位','','','0','17','0','','1','0','0');
INSERT INTO aq_areas VALUES('220','0','1','','18','2','长沙市','','','0','18','0','','1','0','0');
INSERT INTO aq_areas VALUES('221','0','1','','18','2','株洲市','','','0','18','0','','1','0','0');
INSERT INTO aq_areas VALUES('222','0','1','','18','2','湘潭市','','','0','18','0','','1','0','0');
INSERT INTO aq_areas VALUES('223','0','1','','18','2','衡阳市','','','0','18','0','','1','0','0');
INSERT INTO aq_areas VALUES('224','0','1','','18','2','邵阳市','','','0','18','0','','1','0','0');
INSERT INTO aq_areas VALUES('225','0','1','','18','2','岳阳市','','','0','18','0','','1','0','0');
INSERT INTO aq_areas VALUES('226','0','1','','18','2','常德市','','','0','18','0','','1','0','0');
INSERT INTO aq_areas VALUES('227','0','1','','18','2','张家界市','','','0','18','0','','1','0','0');
INSERT INTO aq_areas VALUES('228','0','1','','18','2','益阳市','','','0','18','0','','1','0','0');
INSERT INTO aq_areas VALUES('229','0','1','','18','2','郴州市','','','0','18','0','','1','0','0');
INSERT INTO aq_areas VALUES('230','0','1','','18','2','永州市','','','0','18','0','','1','0','0');
INSERT INTO aq_areas VALUES('231','0','1','','18','2','怀化市','','','0','18','0','','1','0','0');
INSERT INTO aq_areas VALUES('232','0','1','','18','2','娄底市','','','0','18','0','','1','0','0');
INSERT INTO aq_areas VALUES('233','0','1','','18','2','湘西土家族苗族自治州','','','0','18','0','','1','0','0');
INSERT INTO aq_areas VALUES('234','0','1','','19','2','广州市','','','0','19','0','','1','0','0');
INSERT INTO aq_areas VALUES('235','0','1','','19','2','韶关市','','','0','19','0','','1','0','0');
INSERT INTO aq_areas VALUES('236','0','1','','19','2','深圳市','','','0','19','0','','1','0','0');
INSERT INTO aq_areas VALUES('237','0','1','','19','2','珠海市','','','0','19','0','','1','0','0');
INSERT INTO aq_areas VALUES('238','0','1','','19','2','汕头市','','','0','19','0','','1','0','0');
INSERT INTO aq_areas VALUES('239','0','1','','19','2','佛山市','','','0','19','0','','1','0','0');
INSERT INTO aq_areas VALUES('240','0','1','','19','2','江门市','','','0','19','0','','1','0','0');
INSERT INTO aq_areas VALUES('241','0','1','','19','2','湛江市','','','0','19','0','','1','0','0');
INSERT INTO aq_areas VALUES('242','0','1','','19','2','茂名市','','','0','19','0','','1','0','0');
INSERT INTO aq_areas VALUES('243','0','1','','19','2','肇庆市','','','0','19','0','','1','0','0');
INSERT INTO aq_areas VALUES('244','0','1','','19','2','惠州市','','','0','19','0','','1','0','0');
INSERT INTO aq_areas VALUES('245','0','1','','19','2','梅州市','','','0','19','0','','1','0','0');
INSERT INTO aq_areas VALUES('246','0','1','','19','2','汕尾市','','','0','19','0','','1','0','0');
INSERT INTO aq_areas VALUES('247','0','1','','19','2','河源市','','','0','19','0','','1','0','0');
INSERT INTO aq_areas VALUES('248','0','1','','19','2','阳江市','','','0','19','0','','1','0','0');
INSERT INTO aq_areas VALUES('249','0','1','','19','2','清远市','','','0','19','0','','1','0','0');
INSERT INTO aq_areas VALUES('250','0','1','','19','2','东莞市','','','0','19','0','','1','0','0');
INSERT INTO aq_areas VALUES('251','0','1','','19','2','中山市','','','0','19','0','','1','0','0');
INSERT INTO aq_areas VALUES('252','0','1','','19','2','潮州市','','','0','19','0','','1','0','0');
INSERT INTO aq_areas VALUES('253','0','1','','19','2','揭阳市','','','0','19','0','','1','0','0');
INSERT INTO aq_areas VALUES('254','0','1','','19','2','云浮市','','','0','19','0','','1','0','0');
INSERT INTO aq_areas VALUES('255','0','1','','20','2','南宁市','','','0','20','0','','1','0','0');
INSERT INTO aq_areas VALUES('256','0','1','','20','2','柳州市','','','0','20','0','','1','0','0');
INSERT INTO aq_areas VALUES('257','0','1','','20','2','桂林市','','','0','20','0','','1','0','0');
INSERT INTO aq_areas VALUES('258','0','1','','20','2','梧州市','','','0','20','0','','1','0','0');
INSERT INTO aq_areas VALUES('259','0','1','','20','2','北海市','','','0','20','0','','1','0','0');
INSERT INTO aq_areas VALUES('260','0','1','','20','2','防城港市','','','0','20','0','','1','0','0');
INSERT INTO aq_areas VALUES('261','0','1','','20','2','钦州市','','','0','20','0','','1','0','0');
INSERT INTO aq_areas VALUES('262','0','1','','20','2','贵港市','','','0','20','0','','1','0','0');
INSERT INTO aq_areas VALUES('263','0','1','','20','2','玉林市','','','0','20','0','','1','0','0');
INSERT INTO aq_areas VALUES('264','0','1','','20','2','百色市','','','0','20','0','','1','0','0');
INSERT INTO aq_areas VALUES('265','0','1','','20','2','贺州市','','','0','20','0','','1','0','0');
INSERT INTO aq_areas VALUES('266','0','1','','20','2','河池市','','','0','20','0','','1','0','0');
INSERT INTO aq_areas VALUES('267','0','1','','20','2','来宾市','','','0','20','0','','1','0','0');
INSERT INTO aq_areas VALUES('268','0','1','','20','2','崇左市','','','0','20','0','','1','0','0');
INSERT INTO aq_areas VALUES('269','0','1','','21','2','海口市','','','0','21','0','','1','0','0');
INSERT INTO aq_areas VALUES('270','0','1','','21','2','三亚市','','','0','21','0','','1','0','0');
INSERT INTO aq_areas VALUES('271','0','1','','21','2','省直辖县级行政单位','','','0','21','0','','1','0','0');
INSERT INTO aq_areas VALUES('272','0','1','','22','2','市辖区','','','0','22','0','','1','0','0');
INSERT INTO aq_areas VALUES('273','0','1','','22','2','县','','','0','22','0','','1','0','0');
INSERT INTO aq_areas VALUES('274','0','1','','22','2','市','','','0','22','0','','1','0','0');
INSERT INTO aq_areas VALUES('275','0','1','','23','2','成都市','','','0','23','0','','1','0','0');
INSERT INTO aq_areas VALUES('276','0','1','','23','2','自贡市','','','0','23','0','','1','0','0');
INSERT INTO aq_areas VALUES('277','0','1','','23','2','攀枝花市','','','0','23','0','','1','0','0');
INSERT INTO aq_areas VALUES('278','0','1','','23','2','泸州市','','','0','23','0','','1','0','0');
INSERT INTO aq_areas VALUES('279','0','1','','23','2','德阳市','','','0','23','0','','1','0','0');
INSERT INTO aq_areas VALUES('280','0','1','','23','2','绵阳市','','','0','23','0','','1','0','0');
INSERT INTO aq_areas VALUES('281','0','1','','23','2','广元市','','','0','23','0','','1','0','0');
INSERT INTO aq_areas VALUES('282','0','1','','23','2','遂宁市','','','0','23','0','','1','0','0');
INSERT INTO aq_areas VALUES('283','0','1','','23','2','内江市','','','0','23','0','','1','0','0');
INSERT INTO aq_areas VALUES('284','0','1','','23','2','乐山市','','','0','23','0','','1','0','0');
INSERT INTO aq_areas VALUES('285','0','1','','23','2','南充市','','','0','23','0','','1','0','0');
INSERT INTO aq_areas VALUES('286','0','1','','23','2','眉山市','','','0','23','0','','1','0','0');
INSERT INTO aq_areas VALUES('287','0','1','','23','2','宜宾市','','','0','23','0','','1','0','0');
INSERT INTO aq_areas VALUES('288','0','1','','23','2','广安市','','','0','23','0','','1','0','0');
INSERT INTO aq_areas VALUES('289','0','1','','23','2','达州市','','','0','23','0','','1','0','0');
INSERT INTO aq_areas VALUES('290','0','1','','23','2','雅安市','','','0','23','0','','1','0','0');
INSERT INTO aq_areas VALUES('291','0','1','','23','2','巴中市','','','0','23','0','','1','0','0');
INSERT INTO aq_areas VALUES('292','0','1','','23','2','资阳市','','','0','23','0','','1','0','0');
INSERT INTO aq_areas VALUES('293','0','1','','23','2','阿坝藏族羌族自治州','','','0','23','0','','1','0','0');
INSERT INTO aq_areas VALUES('294','0','1','','23','2','甘孜藏族自治州','','','0','23','0','','1','0','0');
INSERT INTO aq_areas VALUES('295','0','1','','23','2','凉山彝族自治州','','','0','23','0','','1','0','0');
INSERT INTO aq_areas VALUES('296','0','1','','24','2','贵阳市','','','0','24','0','','1','0','0');
INSERT INTO aq_areas VALUES('297','0','1','','24','2','六盘水市','','','0','24','0','','1','0','0');
INSERT INTO aq_areas VALUES('298','0','1','','24','2','遵义市','','','0','24','0','','1','0','0');
INSERT INTO aq_areas VALUES('299','0','1','','24','2','安顺市','','','0','24','0','','1','0','0');
INSERT INTO aq_areas VALUES('300','0','1','','24','2','铜仁地区','','','0','24','0','','1','0','0');
INSERT INTO aq_areas VALUES('301','0','1','','24','2','黔西南布依族苗族自治州','','','0','24','0','','1','0','0');
INSERT INTO aq_areas VALUES('302','0','1','','24','2','毕节地区','','','0','24','0','','1','0','0');
INSERT INTO aq_areas VALUES('303','0','1','','24','2','黔东南苗族侗族自治州','','','0','24','0','','1','0','0');
INSERT INTO aq_areas VALUES('304','0','1','','24','2','黔南布依族苗族自治州','','','0','24','0','','1','0','0');
INSERT INTO aq_areas VALUES('305','0','1','','25','2','昆明市','','','0','25','0','','1','0','0');
INSERT INTO aq_areas VALUES('306','0','1','','25','2','曲靖市','','','0','25','0','','1','0','0');
INSERT INTO aq_areas VALUES('307','0','1','','25','2','玉溪市','','','0','25','0','','1','0','0');
INSERT INTO aq_areas VALUES('308','0','1','','25','2','保山市','','','0','25','0','','1','0','0');
INSERT INTO aq_areas VALUES('309','0','1','','25','2','昭通市','','','0','25','0','','1','0','0');
INSERT INTO aq_areas VALUES('310','0','1','','25','2','丽江市','','','0','25','0','','1','0','0');
INSERT INTO aq_areas VALUES('311','0','1','','25','2','思茅市','','','0','25','0','','1','0','0');
INSERT INTO aq_areas VALUES('312','0','1','','25','2','临沧市','','','0','25','0','','1','0','0');
INSERT INTO aq_areas VALUES('313','0','1','','25','2','楚雄彝族自治州','','','0','25','0','','1','0','0');
INSERT INTO aq_areas VALUES('314','0','1','','25','2','红河哈尼族彝族自治州','','','0','25','0','','1','0','0');
INSERT INTO aq_areas VALUES('315','0','1','','25','2','文山壮族苗族自治州','','','0','25','0','','1','0','0');
INSERT INTO aq_areas VALUES('316','0','1','','25','2','西双版纳傣族自治州','','','0','25','0','','1','0','0');
INSERT INTO aq_areas VALUES('317','0','1','','25','2','大理白族自治州','','','0','25','0','','1','0','0');
INSERT INTO aq_areas VALUES('318','0','1','','25','2','德宏傣族景颇族自治州','','','0','25','0','','1','0','0');
INSERT INTO aq_areas VALUES('319','0','1','','25','2','怒江傈僳族自治州','','','0','25','0','','1','0','0');
INSERT INTO aq_areas VALUES('320','0','1','','25','2','迪庆藏族自治州','','','0','25','0','','1','0','0');
INSERT INTO aq_areas VALUES('321','0','1','','26','2','拉萨市','','','0','26','0','','1','0','0');
INSERT INTO aq_areas VALUES('322','0','1','','26','2','昌都地区','','','0','26','0','','1','0','0');
INSERT INTO aq_areas VALUES('323','0','1','','26','2','山南地区','','','0','26','0','','1','0','0');
INSERT INTO aq_areas VALUES('324','0','1','','26','2','日喀则地区','','','0','26','0','','1','0','0');
INSERT INTO aq_areas VALUES('325','0','1','','26','2','那曲地区','','','0','26','0','','1','0','0');
INSERT INTO aq_areas VALUES('326','0','1','','26','2','阿里地区','','','0','26','0','','1','0','0');
INSERT INTO aq_areas VALUES('327','0','1','','26','2','林芝地区','','','0','26','0','','1','0','0');
INSERT INTO aq_areas VALUES('328','0','1','','27','2','西安市','','','0','27','0','','1','0','0');
INSERT INTO aq_areas VALUES('329','0','1','','27','2','铜川市','','','0','27','0','','1','0','0');
INSERT INTO aq_areas VALUES('330','0','1','','27','2','宝鸡市','','','0','27','0','','1','0','0');
INSERT INTO aq_areas VALUES('331','0','1','','27','2','咸阳市','','','0','27','0','','1','0','0');
INSERT INTO aq_areas VALUES('332','0','1','','27','2','渭南市','','','0','27','0','','1','0','0');
INSERT INTO aq_areas VALUES('333','0','1','','27','2','延安市','','','0','27','0','','1','0','0');
INSERT INTO aq_areas VALUES('334','0','1','','27','2','汉中市','','','0','27','0','','1','0','0');
INSERT INTO aq_areas VALUES('335','0','1','','27','2','榆林市','','','0','27','0','','1','0','0');
INSERT INTO aq_areas VALUES('336','0','1','','27','2','安康市','','','0','27','0','','1','0','0');
INSERT INTO aq_areas VALUES('337','0','1','','27','2','商洛市','','','0','27','0','','1','0','0');
INSERT INTO aq_areas VALUES('338','0','1','','28','2','兰州市','','','0','28','0','','1','0','0');
INSERT INTO aq_areas VALUES('339','0','1','','28','2','嘉峪关市','','','0','28','0','','1','0','0');
INSERT INTO aq_areas VALUES('340','0','1','','28','2','金昌市','','','0','28','0','','1','0','0');
INSERT INTO aq_areas VALUES('341','0','1','','28','2','白银市','','','0','28','0','','1','0','0');
INSERT INTO aq_areas VALUES('342','0','1','','28','2','天水市','','','0','28','0','','1','0','0');
INSERT INTO aq_areas VALUES('343','0','1','','28','2','武威市','','','0','28','0','','1','0','0');
INSERT INTO aq_areas VALUES('344','0','1','','28','2','张掖市','','','0','28','0','','1','0','0');
INSERT INTO aq_areas VALUES('345','0','1','','28','2','平凉市','','','0','28','0','','1','0','0');
INSERT INTO aq_areas VALUES('346','0','1','','28','2','酒泉市','','','0','28','0','','1','0','0');
INSERT INTO aq_areas VALUES('347','0','1','','28','2','庆阳市','','','0','28','0','','1','0','0');
INSERT INTO aq_areas VALUES('348','0','1','','28','2','定西市','','','0','28','0','','1','0','0');
INSERT INTO aq_areas VALUES('349','0','1','','28','2','陇南市','','','0','28','0','','1','0','0');
INSERT INTO aq_areas VALUES('350','0','1','','28','2','临夏回族自治州','','','0','28','0','','1','0','0');
INSERT INTO aq_areas VALUES('351','0','1','','28','2','甘南藏族自治州','','','0','28','0','','1','0','0');
INSERT INTO aq_areas VALUES('352','0','1','','29','2','西宁市','','','0','29','0','','1','0','0');
INSERT INTO aq_areas VALUES('353','0','1','','29','2','海东地区','','','0','29','0','','1','0','0');
INSERT INTO aq_areas VALUES('354','0','1','','29','2','海北藏族自治州','','','0','29','0','','1','0','0');
INSERT INTO aq_areas VALUES('355','0','1','','29','2','黄南藏族自治州','','','0','29','0','','1','0','0');
INSERT INTO aq_areas VALUES('356','0','1','','29','2','海南藏族自治州','','','0','29','0','','1','0','0');
INSERT INTO aq_areas VALUES('357','0','1','','29','2','果洛藏族自治州','','','0','29','0','','1','0','0');
INSERT INTO aq_areas VALUES('358','0','1','','29','2','玉树藏族自治州','','','0','29','0','','1','0','0');
INSERT INTO aq_areas VALUES('359','0','1','','29','2','海西蒙古族藏族自治州','','','0','29','0','','1','0','0');
INSERT INTO aq_areas VALUES('360','0','1','','30','2','银川市','','','0','30','0','','1','0','0');
INSERT INTO aq_areas VALUES('361','0','1','','30','2','石嘴山市','','','0','30','0','','1','0','0');
INSERT INTO aq_areas VALUES('362','0','1','','30','2','吴忠市','','','0','30','0','','1','0','0');
INSERT INTO aq_areas VALUES('363','0','1','','30','2','固原市','','','0','30','0','','1','0','0');
INSERT INTO aq_areas VALUES('364','0','1','','30','2','中卫市','','','0','30','0','','1','0','0');
INSERT INTO aq_areas VALUES('365','0','1','','31','2','乌鲁木齐市','','','0','31','0','','1','0','0');
INSERT INTO aq_areas VALUES('366','0','1','','31','2','克拉玛依市','','','0','31','0','','1','0','0');
INSERT INTO aq_areas VALUES('367','0','1','','31','2','吐鲁番地区','','','0','31','0','','1','0','0');
INSERT INTO aq_areas VALUES('368','0','1','','31','2','哈密地区','','','0','31','0','','1','0','0');
INSERT INTO aq_areas VALUES('369','0','1','','31','2','昌吉回族自治州','','','0','31','0','','1','0','0');
INSERT INTO aq_areas VALUES('370','0','1','','31','2','博尔塔拉蒙古自治州','','','0','31','0','','1','0','0');
INSERT INTO aq_areas VALUES('371','0','1','','31','2','巴音郭楞蒙古自治州','','','0','31','0','','1','0','0');
INSERT INTO aq_areas VALUES('372','0','1','','31','2','阿克苏地区','','','0','31','0','','1','0','0');
INSERT INTO aq_areas VALUES('373','0','1','','31','2','克孜勒苏柯尔克孜自治州','','','0','31','0','','1','0','0');
INSERT INTO aq_areas VALUES('374','0','1','','31','2','喀什地区','','','0','31','0','','1','0','0');
INSERT INTO aq_areas VALUES('375','0','1','','31','2','和田地区','','','0','31','0','','1','0','0');
INSERT INTO aq_areas VALUES('376','0','1','','31','2','伊犁哈萨克自治州','','','0','31','0','','1','0','0');
INSERT INTO aq_areas VALUES('377','0','1','','31','2','塔城地区','','','0','31','0','','1','0','0');
INSERT INTO aq_areas VALUES('378','0','1','','31','2','阿勒泰地区','','','0','31','0','','1','0','0');
INSERT INTO aq_areas VALUES('379','0','1','','31','2','省直辖行政单位','','','0','31','0','','1','0','0');
INSERT INTO aq_areas VALUES('380','0','1','','33','2','香港','','','0','33','0','','1','0','0');
INSERT INTO aq_areas VALUES('381','0','1','','34','2','澳门','','','0','34','0','','1','0','0');
INSERT INTO aq_areas VALUES('382','0','1','','32','2','台北','','','0','32','0','','1','0','0');
INSERT INTO aq_areas VALUES('383','0','1','','32','2','高雄','','','0','32','0','','1','0','0');
INSERT INTO aq_areas VALUES('384','0','1','','32','2','基隆','','','0','32','0','','1','0','0');
INSERT INTO aq_areas VALUES('385','0','1','','32','2','台中','','','0','32','0','','1','0','0');
INSERT INTO aq_areas VALUES('386','0','1','','32','2','台南','','','0','32','0','','1','0','0');
INSERT INTO aq_areas VALUES('387','0','1','','32','2','新竹','','','0','32','0','','1','0','0');
INSERT INTO aq_areas VALUES('388','0','1','','32','2','嘉义','','','0','32','0','','1','0','0');
INSERT INTO aq_areas VALUES('389','0','1','','32','2','台北县','','','0','32','0','','1','0','0');
INSERT INTO aq_areas VALUES('390','0','1','','32','2','宜兰县','','','0','32','0','','1','0','0');
INSERT INTO aq_areas VALUES('391','0','1','','32','2','桃园县','','','0','32','0','','1','0','0');
INSERT INTO aq_areas VALUES('392','0','1','','32','2','新竹县','','','0','32','0','','1','0','0');
INSERT INTO aq_areas VALUES('393','0','1','','32','2','苗栗县','','','0','32','0','','1','0','0');
INSERT INTO aq_areas VALUES('394','0','1','','32','2','台中县','','','0','32','0','','1','0','0');
INSERT INTO aq_areas VALUES('395','0','1','','32','2','彰化县','','','0','32','0','','1','0','0');
INSERT INTO aq_areas VALUES('396','0','1','','32','2','南投县','','','0','32','0','','1','0','0');
INSERT INTO aq_areas VALUES('397','0','1','','32','2','云林县','','','0','32','0','','1','0','0');
INSERT INTO aq_areas VALUES('398','0','1','','32','2','嘉义县','','','0','32','0','','1','0','0');
INSERT INTO aq_areas VALUES('399','0','1','','32','2','台南县','','','0','32','0','','1','0','0');
INSERT INTO aq_areas VALUES('400','0','1','','32','2','高雄县','','','0','32','0','','1','0','0');
INSERT INTO aq_areas VALUES('401','0','1','','32','2','屏东县','','','0','32','0','','1','0','0');
INSERT INTO aq_areas VALUES('402','0','1','','32','2','台东县','','','0','32','0','','1','0','0');
INSERT INTO aq_areas VALUES('403','0','1','','32','2','花莲县','','','0','32','0','','1','0','0');
INSERT INTO aq_areas VALUES('404','0','1','','32','2','澎湖县','','','0','32','0','','1','0','0');
INSERT INTO aq_areas VALUES('405','0','0','','1','3','东城区','','','0','35','0','','1','0','0');
INSERT INTO aq_areas VALUES('406','0','0','','1','3','西城区','','','0','35','0','','1','0','0');
INSERT INTO aq_areas VALUES('407','0','0','','1','3','崇文区','','','0','35','0','','1','0','0');
INSERT INTO aq_areas VALUES('408','0','0','','1','3','宣武区','','','0','35','0','','1','0','0');
INSERT INTO aq_areas VALUES('409','0','0','','1','3','朝阳区','','','0','35','0','','1','0','0');
INSERT INTO aq_areas VALUES('410','0','0','','1','3','丰台区','','','0','35','0','','1','0','0');
INSERT INTO aq_areas VALUES('411','0','0','','1','3','石景山区','','','0','35','0','','1','0','0');
INSERT INTO aq_areas VALUES('412','0','0','','1','3','海淀区','','','0','35','0','','1','0','0');
INSERT INTO aq_areas VALUES('413','0','0','','1','3','门头沟区','','','0','35','0','','1','0','0');
INSERT INTO aq_areas VALUES('414','0','0','','1','3','房山区','','','0','35','0','','1','0','0');
INSERT INTO aq_areas VALUES('415','0','0','','1','3','通州区','','','0','35','0','','1','0','0');
INSERT INTO aq_areas VALUES('416','0','0','','1','3','顺义区','','','0','35','0','','1','0','0');
INSERT INTO aq_areas VALUES('417','0','0','','1','3','昌平区','','','0','35','0','','1','0','0');
INSERT INTO aq_areas VALUES('418','0','0','','1','3','大兴区','','','0','35','0','','1','0','0');
INSERT INTO aq_areas VALUES('419','0','0','','1','3','怀柔区','','','0','35','0','','1','0','0');
INSERT INTO aq_areas VALUES('420','0','0','','1','3','平谷区','','','0','35','0','','1','0','0');
INSERT INTO aq_areas VALUES('421','0','0','','1','3','密云县','','','0','36','0','','1','0','0');
INSERT INTO aq_areas VALUES('422','0','0','','1','3','延庆县','','','0','36','0','','1','0','0');
INSERT INTO aq_areas VALUES('423','0','0','','2','3','和平区','','','0','37','0','','1','0','0');
INSERT INTO aq_areas VALUES('424','0','0','','2','3','河东区','','','0','37','0','','1','0','0');
INSERT INTO aq_areas VALUES('425','0','0','','2','3','河西区','','','0','37','0','','1','0','0');
INSERT INTO aq_areas VALUES('426','0','0','','2','3','南开区','','','0','37','0','','1','0','0');
INSERT INTO aq_areas VALUES('427','0','0','','2','3','河北区','','','0','37','0','','1','0','0');
INSERT INTO aq_areas VALUES('428','0','0','','2','3','红桥区','','','0','37','0','','1','0','0');
INSERT INTO aq_areas VALUES('429','0','0','','2','3','塘沽区','','','0','37','0','','1','0','0');
INSERT INTO aq_areas VALUES('430','0','0','','2','3','汉沽区','','','0','37','0','','1','0','0');
INSERT INTO aq_areas VALUES('431','0','0','','2','3','大港区','','','0','37','0','','1','0','0');
INSERT INTO aq_areas VALUES('432','0','0','','2','3','东丽区','','','0','37','0','','1','0','0');
INSERT INTO aq_areas VALUES('433','0','0','','2','3','西青区','','','0','37','0','','1','0','0');
INSERT INTO aq_areas VALUES('434','0','0','','2','3','津南区','','','0','37','0','','1','0','0');
INSERT INTO aq_areas VALUES('435','0','0','','2','3','北辰区','','','0','37','0','','1','0','0');
INSERT INTO aq_areas VALUES('436','0','0','','2','3','武清区','','','0','37','0','','1','0','0');
INSERT INTO aq_areas VALUES('437','0','0','','2','3','宝坻区','','','0','37','0','','1','0','0');
INSERT INTO aq_areas VALUES('438','0','0','','2','3','宁河县','','','0','38','0','','1','0','0');
INSERT INTO aq_areas VALUES('439','0','0','','2','3','静海县','','','0','38','0','','1','0','0');
INSERT INTO aq_areas VALUES('440','0','0','','2','3','蓟县','','','0','38','0','','1','0','0');
INSERT INTO aq_areas VALUES('441','0','0','','3','3','市辖区','','','0','39','0','','1','0','0');
INSERT INTO aq_areas VALUES('442','0','0','','3','3','长安区','','','0','39','0','','1','0','0');
INSERT INTO aq_areas VALUES('443','0','0','','3','3','桥东区','','','0','39','0','','1','0','0');
INSERT INTO aq_areas VALUES('444','0','0','','3','3','桥西区','','','0','39','0','','1','0','0');
INSERT INTO aq_areas VALUES('445','0','0','','3','3','新华区','','','0','39','0','','1','0','0');
INSERT INTO aq_areas VALUES('446','0','0','','3','3','井陉矿区','','','0','39','0','','1','0','0');
INSERT INTO aq_areas VALUES('447','0','0','','3','3','裕华区','','','0','39','0','','1','0','0');
INSERT INTO aq_areas VALUES('448','0','0','','3','3','井陉县','','','0','39','0','','1','0','0');
INSERT INTO aq_areas VALUES('449','0','0','','3','3','正定县','','','0','39','0','','1','0','0');
INSERT INTO aq_areas VALUES('450','0','0','','3','3','栾城县','','','0','39','0','','1','0','0');
INSERT INTO aq_areas VALUES('451','0','0','','3','3','行唐县','','','0','39','0','','1','0','0');
INSERT INTO aq_areas VALUES('452','0','0','','3','3','灵寿县','','','0','39','0','','1','0','0');
INSERT INTO aq_areas VALUES('453','0','0','','3','3','高邑县','','','0','39','0','','1','0','0');
INSERT INTO aq_areas VALUES('454','0','0','','3','3','深泽县','','','0','39','0','','1','0','0');
INSERT INTO aq_areas VALUES('455','0','0','','3','3','赞皇县','','','0','39','0','','1','0','0');
INSERT INTO aq_areas VALUES('456','0','0','','3','3','无极县','','','0','39','0','','1','0','0');
INSERT INTO aq_areas VALUES('457','0','0','','3','3','平山县','','','0','39','0','','1','0','0');
INSERT INTO aq_areas VALUES('458','0','0','','3','3','元氏县','','','0','39','0','','1','0','0');
INSERT INTO aq_areas VALUES('459','0','0','','3','3','赵县','','','0','39','0','','1','0','0');
INSERT INTO aq_areas VALUES('460','0','0','','3','3','辛集市','','','0','39','0','','1','0','0');
INSERT INTO aq_areas VALUES('461','0','0','','3','3','藁城市','','','0','39','0','','1','0','0');
INSERT INTO aq_areas VALUES('462','0','0','','3','3','晋州市','','','0','39','0','','1','0','0');
INSERT INTO aq_areas VALUES('463','0','0','','3','3','新乐市','','','0','39','0','','1','0','0');
INSERT INTO aq_areas VALUES('464','0','0','','3','3','鹿泉市','','','0','39','0','','1','0','0');
INSERT INTO aq_areas VALUES('465','0','0','','3','3','市辖区','','','0','40','0','','1','0','0');
INSERT INTO aq_areas VALUES('466','0','0','','3','3','路南区','','','0','40','0','','1','0','0');
INSERT INTO aq_areas VALUES('467','0','0','','3','3','路北区','','','0','40','0','','1','0','0');
INSERT INTO aq_areas VALUES('468','0','0','','3','3','古冶区','','','0','40','0','','1','0','0');
INSERT INTO aq_areas VALUES('469','0','0','','3','3','开平区','','','0','40','0','','1','0','0');
INSERT INTO aq_areas VALUES('470','0','0','','3','3','丰南区','','','0','40','0','','1','0','0');
INSERT INTO aq_areas VALUES('471','0','0','','3','3','丰润区','','','0','40','0','','1','0','0');
INSERT INTO aq_areas VALUES('472','0','0','','3','3','滦县','','','0','40','0','','1','0','0');
INSERT INTO aq_areas VALUES('473','0','0','','3','3','滦南县','','','0','40','0','','1','0','0');
INSERT INTO aq_areas VALUES('474','0','0','','3','3','乐亭县','','','0','40','0','','1','0','0');
INSERT INTO aq_areas VALUES('475','0','0','','3','3','迁西县','','','0','40','0','','1','0','0');
INSERT INTO aq_areas VALUES('476','0','0','','3','3','玉田县','','','0','40','0','','1','0','0');
INSERT INTO aq_areas VALUES('477','0','0','','3','3','唐海县','','','0','40','0','','1','0','0');
INSERT INTO aq_areas VALUES('478','0','0','','3','3','遵化市','','','0','40','0','','1','0','0');
INSERT INTO aq_areas VALUES('479','0','0','','3','3','迁安市','','','0','40','0','','1','0','0');
INSERT INTO aq_areas VALUES('480','0','0','','3','3','市辖区','','','0','41','0','','1','0','0');
INSERT INTO aq_areas VALUES('481','0','0','','3','3','海港区','','','0','41','0','','1','0','0');
INSERT INTO aq_areas VALUES('482','0','0','','3','3','山海关区','','','0','41','0','','1','0','0');
INSERT INTO aq_areas VALUES('483','0','0','','3','3','北戴河区','','','0','41','0','','1','0','0');
INSERT INTO aq_areas VALUES('484','0','0','','3','3','青龙满族自治县','','','0','41','0','','1','0','0');
INSERT INTO aq_areas VALUES('485','0','0','','3','3','昌黎县','','','0','41','0','','1','0','0');
INSERT INTO aq_areas VALUES('486','0','0','','3','3','抚宁县','','','0','41','0','','1','0','0');
INSERT INTO aq_areas VALUES('487','0','0','','3','3','卢龙县','','','0','41','0','','1','0','0');
INSERT INTO aq_areas VALUES('488','0','0','','3','3','市辖区','','','0','42','0','','1','0','0');
INSERT INTO aq_areas VALUES('489','0','0','','3','3','邯山区','','','0','42','0','','1','0','0');
INSERT INTO aq_areas VALUES('490','0','0','','3','3','丛台区','','','0','42','0','','1','0','0');
INSERT INTO aq_areas VALUES('491','0','0','','3','3','复兴区','','','0','42','0','','1','0','0');
INSERT INTO aq_areas VALUES('492','0','0','','3','3','峰峰矿区','','','0','42','0','','1','0','0');
INSERT INTO aq_areas VALUES('493','0','0','','3','3','邯郸县','','','0','42','0','','1','0','0');
INSERT INTO aq_areas VALUES('494','0','0','','3','3','临漳县','','','0','42','0','','1','0','0');
INSERT INTO aq_areas VALUES('495','0','0','','3','3','成安县','','','0','42','0','','1','0','0');
INSERT INTO aq_areas VALUES('496','0','0','','3','3','大名县','','','0','42','0','','1','0','0');
INSERT INTO aq_areas VALUES('497','0','0','','3','3','涉县','','','0','42','0','','1','0','0');
INSERT INTO aq_areas VALUES('498','0','0','','3','3','磁县','','','0','42','0','','1','0','0');
INSERT INTO aq_areas VALUES('499','0','0','','3','3','肥乡县','','','0','42','0','','1','0','0');
INSERT INTO aq_areas VALUES('500','0','0','','3','3','永年县','','','0','42','0','','1','0','0');
INSERT INTO aq_areas VALUES('501','0','0','','3','3','邱县','','','0','42','0','','1','0','0');
INSERT INTO aq_areas VALUES('502','0','0','','3','3','鸡泽县','','','0','42','0','','1','0','0');
INSERT INTO aq_areas VALUES('503','0','0','','3','3','广平县','','','0','42','0','','1','0','0');
INSERT INTO aq_areas VALUES('504','0','0','','3','3','馆陶县','','','0','42','0','','1','0','0');
INSERT INTO aq_areas VALUES('505','0','0','','3','3','魏县','','','0','42','0','','1','0','0');
INSERT INTO aq_areas VALUES('506','0','0','','3','3','曲周县','','','0','42','0','','1','0','0');
INSERT INTO aq_areas VALUES('507','0','0','','3','3','武安市','','','0','42','0','','1','0','0');
INSERT INTO aq_areas VALUES('508','0','0','','3','3','市辖区','','','0','43','0','','1','0','0');
INSERT INTO aq_areas VALUES('509','0','0','','3','3','桥东区','','','0','43','0','','1','0','0');
INSERT INTO aq_areas VALUES('510','0','0','','3','3','桥西区','','','0','43','0','','1','0','0');
INSERT INTO aq_areas VALUES('511','0','0','','3','3','邢台县','','','0','43','0','','1','0','0');
INSERT INTO aq_areas VALUES('512','0','0','','3','3','临城县','','','0','43','0','','1','0','0');
INSERT INTO aq_areas VALUES('513','0','0','','3','3','内丘县','','','0','43','0','','1','0','0');
INSERT INTO aq_areas VALUES('514','0','0','','3','3','柏乡县','','','0','43','0','','1','0','0');
INSERT INTO aq_areas VALUES('515','0','0','','3','3','隆尧县','','','0','43','0','','1','0','0');
INSERT INTO aq_areas VALUES('516','0','0','','3','3','任县','','','0','43','0','','1','0','0');
INSERT INTO aq_areas VALUES('517','0','0','','3','3','南和县','','','0','43','0','','1','0','0');
INSERT INTO aq_areas VALUES('518','0','0','','3','3','宁晋县','','','0','43','0','','1','0','0');
INSERT INTO aq_areas VALUES('519','0','0','','3','3','巨鹿县','','','0','43','0','','1','0','0');
INSERT INTO aq_areas VALUES('520','0','0','','3','3','新河县','','','0','43','0','','1','0','0');
INSERT INTO aq_areas VALUES('521','0','0','','3','3','广宗县','','','0','43','0','','1','0','0');
INSERT INTO aq_areas VALUES('522','0','0','','3','3','平乡县','','','0','43','0','','1','0','0');
INSERT INTO aq_areas VALUES('523','0','0','','3','3','威县','','','0','43','0','','1','0','0');
INSERT INTO aq_areas VALUES('524','0','0','','3','3','清河县','','','0','43','0','','1','0','0');
INSERT INTO aq_areas VALUES('525','0','0','','3','3','临西县','','','0','43','0','','1','0','0');
INSERT INTO aq_areas VALUES('526','0','0','','3','3','南宫市','','','0','43','0','','1','0','0');
INSERT INTO aq_areas VALUES('527','0','0','','3','3','沙河市','','','0','43','0','','1','0','0');
INSERT INTO aq_areas VALUES('528','0','0','','3','3','市辖区','','','0','44','0','','1','0','0');
INSERT INTO aq_areas VALUES('529','0','0','','3','3','新市区','','','0','44','0','','1','0','0');
INSERT INTO aq_areas VALUES('530','0','0','','3','3','北市区','','','0','44','0','','1','0','0');
INSERT INTO aq_areas VALUES('531','0','0','','3','3','南市区','','','0','44','0','','1','0','0');
INSERT INTO aq_areas VALUES('532','0','0','','3','3','满城县','','','0','44','0','','1','0','0');
INSERT INTO aq_areas VALUES('533','0','0','','3','3','清苑县','','','0','44','0','','1','0','0');
INSERT INTO aq_areas VALUES('534','0','0','','3','3','涞水县','','','0','44','0','','1','0','0');
INSERT INTO aq_areas VALUES('535','0','0','','3','3','阜平县','','','0','44','0','','1','0','0');
INSERT INTO aq_areas VALUES('536','0','0','','3','3','徐水县','','','0','44','0','','1','0','0');
INSERT INTO aq_areas VALUES('537','0','0','','3','3','定兴县','','','0','44','0','','1','0','0');
INSERT INTO aq_areas VALUES('538','0','0','','3','3','唐县','','','0','44','0','','1','0','0');
INSERT INTO aq_areas VALUES('539','0','0','','3','3','高阳县','','','0','44','0','','1','0','0');
INSERT INTO aq_areas VALUES('540','0','0','','3','3','容城县','','','0','44','0','','1','0','0');
INSERT INTO aq_areas VALUES('541','0','0','','3','3','涞源县','','','0','44','0','','1','0','0');
INSERT INTO aq_areas VALUES('542','0','0','','3','3','望都县','','','0','44','0','','1','0','0');
INSERT INTO aq_areas VALUES('543','0','0','','3','3','安新县','','','0','44','0','','1','0','0');
INSERT INTO aq_areas VALUES('544','0','0','','3','3','易县','','','0','44','0','','1','0','0');
INSERT INTO aq_areas VALUES('545','0','0','','3','3','曲阳县','','','0','44','0','','1','0','0');
INSERT INTO aq_areas VALUES('546','0','0','','3','3','蠡县','','','0','44','0','','1','0','0');
INSERT INTO aq_areas VALUES('547','0','0','','3','3','顺平县','','','0','44','0','','1','0','0');
INSERT INTO aq_areas VALUES('548','0','0','','3','3','博野县','','','0','44','0','','1','0','0');
INSERT INTO aq_areas VALUES('549','0','0','','3','3','雄县','','','0','44','0','','1','0','0');
INSERT INTO aq_areas VALUES('550','0','0','','3','3','涿州市','','','0','44','0','','1','0','0');
INSERT INTO aq_areas VALUES('551','0','0','','3','3','定州市','','','0','44','0','','1','0','0');
INSERT INTO aq_areas VALUES('552','0','0','','3','3','安国市','','','0','44','0','','1','0','0');
INSERT INTO aq_areas VALUES('553','0','0','','3','3','高碑店','','','0','44','0','','1','0','0');
INSERT INTO aq_areas VALUES('554','0','0','','3','3','市辖区','','','0','45','0','','1','0','0');
INSERT INTO aq_areas VALUES('555','0','0','','3','3','桥东区','','','0','45','0','','1','0','0');
INSERT INTO aq_areas VALUES('556','0','0','','3','3','桥西区','','','0','45','0','','1','0','0');
INSERT INTO aq_areas VALUES('557','0','0','','3','3','宣化区','','','0','45','0','','1','0','0');
INSERT INTO aq_areas VALUES('558','0','0','','3','3','下花园区','','','0','45','0','','1','0','0');
INSERT INTO aq_areas VALUES('559','0','0','','3','3','宣化县','','','0','45','0','','1','0','0');
INSERT INTO aq_areas VALUES('560','0','0','','3','3','张北县','','','0','45','0','','1','0','0');
INSERT INTO aq_areas VALUES('561','0','0','','3','3','康保县','','','0','45','0','','1','0','0');
INSERT INTO aq_areas VALUES('562','0','0','','3','3','沽源县','','','0','45','0','','1','0','0');
INSERT INTO aq_areas VALUES('563','0','0','','3','3','尚义县','','','0','45','0','','1','0','0');
INSERT INTO aq_areas VALUES('564','0','0','','3','3','蔚县','','','0','45','0','','1','0','0');
INSERT INTO aq_areas VALUES('565','0','0','','3','3','阳原县','','','0','45','0','','1','0','0');
INSERT INTO aq_areas VALUES('566','0','0','','3','3','怀安县','','','0','45','0','','1','0','0');
INSERT INTO aq_areas VALUES('567','0','0','','3','3','万全县','','','0','45','0','','1','0','0');
INSERT INTO aq_areas VALUES('568','0','0','','3','3','怀来县','','','0','45','0','','1','0','0');
INSERT INTO aq_areas VALUES('569','0','0','','3','3','涿鹿县','','','0','45','0','','1','0','0');
INSERT INTO aq_areas VALUES('570','0','0','','3','3','赤城县','','','0','45','0','','1','0','0');
INSERT INTO aq_areas VALUES('571','0','0','','3','3','崇礼县','','','0','45','0','','1','0','0');
INSERT INTO aq_areas VALUES('572','0','0','','3','3','市辖区','','','0','46','0','','1','0','0');
INSERT INTO aq_areas VALUES('573','0','0','','3','3','双桥区','','','0','46','0','','1','0','0');
INSERT INTO aq_areas VALUES('574','0','0','','3','3','双滦区','','','0','46','0','','1','0','0');
INSERT INTO aq_areas VALUES('575','0','0','','3','3','鹰手营子矿区','','','0','46','0','','1','0','0');
INSERT INTO aq_areas VALUES('576','0','0','','3','3','承德县','','','0','46','0','','1','0','0');
INSERT INTO aq_areas VALUES('577','0','0','','3','3','兴隆县','','','0','46','0','','1','0','0');
INSERT INTO aq_areas VALUES('578','0','0','','3','3','平泉县','','','0','46','0','','1','0','0');
INSERT INTO aq_areas VALUES('579','0','0','','3','3','滦平县','','','0','46','0','','1','0','0');
INSERT INTO aq_areas VALUES('580','0','0','','3','3','隆化县','','','0','46','0','','1','0','0');
INSERT INTO aq_areas VALUES('581','0','0','','3','3','丰宁满族自治县','','','0','46','0','','1','0','0');
INSERT INTO aq_areas VALUES('582','0','0','','3','3','宽城满族自治县','','','0','46','0','','1','0','0');
INSERT INTO aq_areas VALUES('583','0','0','','3','3','围场满族蒙古族自治县','','','0','46','0','','1','0','0');
INSERT INTO aq_areas VALUES('588','0','0','','3','3','承德县','','','0','46','0','','1','0','0');
INSERT INTO aq_areas VALUES('596','0','0','','3','3','市辖区','','','0','46','0','','1','0','0');
INSERT INTO aq_areas VALUES('597','0','0','','3','3','双桥区','','','0','46','0','','1','0','0');
INSERT INTO aq_areas VALUES('598','0','0','','3','3','双滦区','','','0','46','0','','1','0','0');
INSERT INTO aq_areas VALUES('599','0','0','','3','3','鹰手营子矿区','','','0','46','0','','1','0','0');
INSERT INTO aq_areas VALUES('600','0','0','','3','3','承德县','','','0','46','0','','1','0','0');
INSERT INTO aq_areas VALUES('601','0','0','','3','3','兴隆县','','','0','46','0','','1','0','0');
INSERT INTO aq_areas VALUES('602','0','0','','3','3','平泉县','','','0','46','0','','1','0','0');
INSERT INTO aq_areas VALUES('603','0','0','','3','3','滦平县','','','0','46','0','','1','0','0');
INSERT INTO aq_areas VALUES('604','0','0','','3','3','隆化县','','','0','46','0','','1','0','0');
INSERT INTO aq_areas VALUES('605','0','0','','3','3','丰宁满族自治县','','','0','46','0','','1','0','0');
INSERT INTO aq_areas VALUES('606','0','0','','3','3','宽城满族自治县','','','0','46','0','','1','0','0');
INSERT INTO aq_areas VALUES('607','0','0','','3','3','围场满族蒙古族自治县','','','0','46','0','','1','0','0');
INSERT INTO aq_areas VALUES('608','0','0','','3','3','市辖区','','','0','46','0','','1','0','0');
INSERT INTO aq_areas VALUES('609','0','0','','3','3','双桥区','','','0','46','0','','1','0','0');
INSERT INTO aq_areas VALUES('610','0','0','','3','3','双滦区','','','0','46','0','','1','0','0');
INSERT INTO aq_areas VALUES('611','0','0','','3','3','鹰手营子矿区','','','0','46','0','','1','0','0');
INSERT INTO aq_areas VALUES('612','0','0','','3','3','承德县','','','0','46','0','','1','0','0');
INSERT INTO aq_areas VALUES('613','0','0','','3','3','兴隆县','','','0','46','0','','1','0','0');
INSERT INTO aq_areas VALUES('614','0','0','','3','3','平泉县','','','0','46','0','','1','0','0');
INSERT INTO aq_areas VALUES('615','0','0','','3','3','滦平县','','','0','46','0','','1','0','0');
INSERT INTO aq_areas VALUES('616','0','0','','3','3','隆化县','','','0','46','0','','1','0','0');
INSERT INTO aq_areas VALUES('617','0','0','','3','3','丰宁满族自治县','','','0','46','0','','1','0','0');
INSERT INTO aq_areas VALUES('618','0','0','','3','3','宽城满族自治县','','','0','46','0','','1','0','0');
INSERT INTO aq_areas VALUES('619','0','0','','3','3','围场满族蒙古族自治县','','','0','46','0','','1','0','0');
INSERT INTO aq_areas VALUES('620','0','0','','3','3','市辖区','','','0','47','0','','1','0','0');
INSERT INTO aq_areas VALUES('621','0','0','','3','3','新华区','','','0','47','0','','1','0','0');
INSERT INTO aq_areas VALUES('622','0','0','','3','3','运河区','','','0','47','0','','1','0','0');
INSERT INTO aq_areas VALUES('623','0','0','','3','3','沧县','','','0','47','0','','1','0','0');
INSERT INTO aq_areas VALUES('624','0','0','','3','3','青县','','','0','47','0','','1','0','0');
INSERT INTO aq_areas VALUES('625','0','0','','3','3','东光县','','','0','47','0','','1','0','0');
INSERT INTO aq_areas VALUES('626','0','0','','3','3','海兴县','','','0','47','0','','1','0','0');
INSERT INTO aq_areas VALUES('627','0','0','','3','3','盐山县','','','0','47','0','','1','0','0');
INSERT INTO aq_areas VALUES('628','0','0','','3','3','肃宁县','','','0','47','0','','1','0','0');
INSERT INTO aq_areas VALUES('629','0','0','','3','3','南皮县','','','0','47','0','','1','0','0');
INSERT INTO aq_areas VALUES('630','0','0','','3','3','吴桥县','','','0','47','0','','1','0','0');
INSERT INTO aq_areas VALUES('631','0','0','','3','3','献县','','','0','47','0','','1','0','0');
INSERT INTO aq_areas VALUES('632','0','0','','3','3','孟村回族自治县','','','0','47','0','','1','0','0');
INSERT INTO aq_areas VALUES('633','0','0','','3','3','泊头市','','','0','47','0','','1','0','0');
INSERT INTO aq_areas VALUES('634','0','0','','3','3','任丘市','','','0','47','0','','1','0','0');
INSERT INTO aq_areas VALUES('635','0','0','','3','3','黄骅市','','','0','47','0','','1','0','0');
INSERT INTO aq_areas VALUES('636','0','0','','3','3','河间市','','','0','47','0','','1','0','0');
INSERT INTO aq_areas VALUES('637','0','0','','3','3','市辖区','','','0','48','0','','1','0','0');
INSERT INTO aq_areas VALUES('638','0','0','','3','3','安次区','','','0','48','0','','1','0','0');
INSERT INTO aq_areas VALUES('639','0','0','','3','3','广阳区','','','0','48','0','','1','0','0');
INSERT INTO aq_areas VALUES('640','0','0','','3','3','固安县','','','0','48','0','','1','0','0');
INSERT INTO aq_areas VALUES('641','0','0','','3','3','永清县','','','0','48','0','','1','0','0');
INSERT INTO aq_areas VALUES('642','0','0','','3','3','香河县','','','0','48','0','','1','0','0');
INSERT INTO aq_areas VALUES('643','0','0','','3','3','大城县','','','0','48','0','','1','0','0');
INSERT INTO aq_areas VALUES('644','0','0','','3','3','文安县','','','0','48','0','','1','0','0');
INSERT INTO aq_areas VALUES('645','0','0','','3','3','大厂回族自治县','','','0','48','0','','1','0','0');
INSERT INTO aq_areas VALUES('646','0','0','','3','3','霸州市','','','0','48','0','','1','0','0');
INSERT INTO aq_areas VALUES('647','0','0','','3','3','三河市','','','0','48','0','','1','0','0');
INSERT INTO aq_areas VALUES('648','0','0','','3','3','市辖区','','','0','49','0','','1','0','0');
INSERT INTO aq_areas VALUES('649','0','0','','3','3','桃城区','','','0','49','0','','1','0','0');
INSERT INTO aq_areas VALUES('650','0','0','','3','3','枣强县','','','0','49','0','','1','0','0');
INSERT INTO aq_areas VALUES('651','0','0','','3','3','武邑县','','','0','49','0','','1','0','0');
INSERT INTO aq_areas VALUES('652','0','0','','3','3','武强县','','','0','49','0','','1','0','0');
INSERT INTO aq_areas VALUES('653','0','0','','3','3','饶阳县','','','0','49','0','','1','0','0');
INSERT INTO aq_areas VALUES('654','0','0','','3','3','安平县','','','0','49','0','','1','0','0');
INSERT INTO aq_areas VALUES('655','0','0','','3','3','故城县','','','0','49','0','','1','0','0');
INSERT INTO aq_areas VALUES('656','0','0','','3','3','景县','','','0','49','0','','1','0','0');
INSERT INTO aq_areas VALUES('657','0','0','','3','3','阜城县','','','0','49','0','','1','0','0');
INSERT INTO aq_areas VALUES('658','0','0','','3','3','冀州市','','','0','49','0','','1','0','0');
INSERT INTO aq_areas VALUES('659','0','0','','3','3','深州市','','','0','49','0','','1','0','0');
INSERT INTO aq_areas VALUES('660','0','0','','4','3','市辖区','','','0','50','0','','1','0','0');
INSERT INTO aq_areas VALUES('661','0','0','','4','3','小店区','','','0','50','0','','1','0','0');
INSERT INTO aq_areas VALUES('662','0','0','','4','3','迎泽区','','','0','50','0','','1','0','0');
INSERT INTO aq_areas VALUES('663','0','0','','4','3','杏花岭区','','','0','50','0','','1','0','0');
INSERT INTO aq_areas VALUES('664','0','0','','4','3','尖草坪区','','','0','50','0','','1','0','0');
INSERT INTO aq_areas VALUES('665','0','0','','4','3','万柏林区','','','0','50','0','','1','0','0');
INSERT INTO aq_areas VALUES('666','0','0','','4','3','晋源区','','','0','50','0','','1','0','0');
INSERT INTO aq_areas VALUES('667','0','0','','4','3','清徐县','','','0','50','0','','1','0','0');
INSERT INTO aq_areas VALUES('668','0','0','','4','3','阳曲县','','','0','50','0','','1','0','0');
INSERT INTO aq_areas VALUES('669','0','0','','4','3','娄烦县','','','0','50','0','','1','0','0');
INSERT INTO aq_areas VALUES('670','0','0','','4','3','古交市','','','0','50','0','','1','0','0');
INSERT INTO aq_areas VALUES('671','0','0','','4','3','市辖区','','','0','51','0','','1','0','0');
INSERT INTO aq_areas VALUES('672','0','0','','4','3','城区','','','0','51','0','','1','0','0');
INSERT INTO aq_areas VALUES('673','0','0','','4','3','矿区','','','0','51','0','','1','0','0');
INSERT INTO aq_areas VALUES('674','0','0','','4','3','南郊区','','','0','51','0','','1','0','0');
INSERT INTO aq_areas VALUES('675','0','0','','4','3','新荣区','','','0','51','0','','1','0','0');
INSERT INTO aq_areas VALUES('676','0','0','','4','3','阳高县','','','0','51','0','','1','0','0');
INSERT INTO aq_areas VALUES('677','0','0','','4','3','天镇县','','','0','51','0','','1','0','0');
INSERT INTO aq_areas VALUES('678','0','0','','4','3','广灵县','','','0','51','0','','1','0','0');
INSERT INTO aq_areas VALUES('679','0','0','','4','3','灵丘县','','','0','51','0','','1','0','0');
INSERT INTO aq_areas VALUES('680','0','0','','4','3','浑源县','','','0','51','0','','1','0','0');
INSERT INTO aq_areas VALUES('681','0','0','','4','3','左云县','','','0','51','0','','1','0','0');
INSERT INTO aq_areas VALUES('682','0','0','','4','3','大同县','','','0','51','0','','1','0','0');
INSERT INTO aq_areas VALUES('683','0','0','','4','3','市辖区','','','0','52','0','','1','0','0');
INSERT INTO aq_areas VALUES('684','0','0','','4','3','城区','','','0','52','0','','1','0','0');
INSERT INTO aq_areas VALUES('685','0','0','','4','3','矿区','','','0','52','0','','1','0','0');
INSERT INTO aq_areas VALUES('686','0','0','','4','3','郊区','','','0','52','0','','1','0','0');
INSERT INTO aq_areas VALUES('687','0','0','','4','3','平定县','','','0','52','0','','1','0','0');
INSERT INTO aq_areas VALUES('688','0','0','','4','3','盂县','','','0','52','0','','1','0','0');
INSERT INTO aq_areas VALUES('689','0','0','','4','3','市辖区','','','0','53','0','','1','0','0');
INSERT INTO aq_areas VALUES('690','0','0','','4','3','城区','','','0','53','0','','1','0','0');
INSERT INTO aq_areas VALUES('691','0','0','','4','3','郊区','','','0','53','0','','1','0','0');
INSERT INTO aq_areas VALUES('692','0','0','','4','3','长治县','','','0','53','0','','1','0','0');
INSERT INTO aq_areas VALUES('693','0','0','','4','3','襄垣县','','','0','53','0','','1','0','0');
INSERT INTO aq_areas VALUES('694','0','0','','4','3','屯留县','','','0','53','0','','1','0','0');
INSERT INTO aq_areas VALUES('695','0','0','','4','3','平顺县','','','0','53','0','','1','0','0');
INSERT INTO aq_areas VALUES('696','0','0','','4','3','黎城县','','','0','53','0','','1','0','0');
INSERT INTO aq_areas VALUES('697','0','0','','4','3','壶关县','','','0','53','0','','1','0','0');
INSERT INTO aq_areas VALUES('698','0','0','','4','3','长子县','','','0','53','0','','1','0','0');
INSERT INTO aq_areas VALUES('699','0','0','','4','3','武乡县','','','0','53','0','','1','0','0');
INSERT INTO aq_areas VALUES('700','0','0','','4','3','沁县','','','0','53','0','','1','0','0');
INSERT INTO aq_areas VALUES('701','0','0','','4','3','沁源县','','','0','53','0','','1','0','0');
INSERT INTO aq_areas VALUES('702','0','0','','4','3','潞城市','','','0','53','0','','1','0','0');
INSERT INTO aq_areas VALUES('703','0','0','','4','3','市辖区','','','0','54','0','','1','0','0');
INSERT INTO aq_areas VALUES('704','0','0','','4','3','城区','','','0','54','0','','1','0','0');
INSERT INTO aq_areas VALUES('705','0','0','','4','3','沁水县','','','0','54','0','','1','0','0');
INSERT INTO aq_areas VALUES('706','0','0','','4','3','阳城县','','','0','54','0','','1','0','0');
INSERT INTO aq_areas VALUES('707','0','0','','4','3','陵川县','','','0','54','0','','1','0','0');
INSERT INTO aq_areas VALUES('708','0','0','','4','3','泽州县','','','0','54','0','','1','0','0');
INSERT INTO aq_areas VALUES('709','0','0','','4','3','高平市','','','0','54','0','','1','0','0');
INSERT INTO aq_areas VALUES('710','0','0','','4','3','市辖区','','','0','55','0','','1','0','0');
INSERT INTO aq_areas VALUES('711','0','0','','4','3','朔城区','','','0','55','0','','1','0','0');
INSERT INTO aq_areas VALUES('712','0','0','','4','3','平鲁区','','','0','55','0','','1','0','0');
INSERT INTO aq_areas VALUES('713','0','0','','4','3','山阴县','','','0','55','0','','1','0','0');
INSERT INTO aq_areas VALUES('714','0','0','','4','3','应县','','','0','55','0','','1','0','0');
INSERT INTO aq_areas VALUES('715','0','0','','4','3','右玉县','','','0','55','0','','1','0','0');
INSERT INTO aq_areas VALUES('716','0','0','','4','3','怀仁县','','','0','55','0','','1','0','0');
INSERT INTO aq_areas VALUES('717','0','0','','4','3','市辖区','','','0','56','0','','1','0','0');
INSERT INTO aq_areas VALUES('718','0','0','','4','3','榆次区','','','0','56','0','','1','0','0');
INSERT INTO aq_areas VALUES('719','0','0','','4','3','榆社县','','','0','56','0','','1','0','0');
INSERT INTO aq_areas VALUES('720','0','0','','4','3','左权县','','','0','56','0','','1','0','0');
INSERT INTO aq_areas VALUES('721','0','0','','4','3','和顺县','','','0','56','0','','1','0','0');
INSERT INTO aq_areas VALUES('722','0','0','','4','3','昔阳县','','','0','56','0','','1','0','0');
INSERT INTO aq_areas VALUES('723','0','0','','4','3','寿阳县','','','0','56','0','','1','0','0');
INSERT INTO aq_areas VALUES('724','0','0','','4','3','太谷县','','','0','56','0','','1','0','0');
INSERT INTO aq_areas VALUES('725','0','0','','4','3','祁县','','','0','56','0','','1','0','0');
INSERT INTO aq_areas VALUES('726','0','0','','4','3','平遥县','','','0','56','0','','1','0','0');
INSERT INTO aq_areas VALUES('727','0','0','','4','3','灵石县','','','0','56','0','','1','0','0');
INSERT INTO aq_areas VALUES('728','0','0','','4','3','介休市','','','0','56','0','','1','0','0');
INSERT INTO aq_areas VALUES('729','0','0','','4','3','市辖区','','','0','57','0','','1','0','0');
INSERT INTO aq_areas VALUES('730','0','0','','4','3','盐湖区','','','0','57','0','','1','0','0');
INSERT INTO aq_areas VALUES('731','0','0','','4','3','临猗县','','','0','57','0','','1','0','0');
INSERT INTO aq_areas VALUES('732','0','0','','4','3','万荣县','','','0','57','0','','1','0','0');
INSERT INTO aq_areas VALUES('733','0','0','','4','3','闻喜县','','','0','57','0','','1','0','0');
INSERT INTO aq_areas VALUES('734','0','0','','4','3','稷山县','','','0','57','0','','1','0','0');
INSERT INTO aq_areas VALUES('735','0','0','','4','3','新绛县','','','0','57','0','','1','0','0');
INSERT INTO aq_areas VALUES('736','0','0','','4','3','绛县','','','0','57','0','','1','0','0');
INSERT INTO aq_areas VALUES('737','0','0','','4','3','垣曲县','','','0','57','0','','1','0','0');
INSERT INTO aq_areas VALUES('738','0','0','','4','3','夏县','','','0','57','0','','1','0','0');
INSERT INTO aq_areas VALUES('739','0','0','','4','3','平陆县','','','0','57','0','','1','0','0');
INSERT INTO aq_areas VALUES('740','0','0','','4','3','芮城县','','','0','57','0','','1','0','0');
INSERT INTO aq_areas VALUES('741','0','0','','4','3','永济市','','','0','57','0','','1','0','0');
INSERT INTO aq_areas VALUES('742','0','0','','4','3','河津市','','','0','57','0','','1','0','0');
INSERT INTO aq_areas VALUES('743','0','0','','4','3','市辖区','','','0','58','0','','1','0','0');
INSERT INTO aq_areas VALUES('744','0','0','','4','3','忻府区','','','0','58','0','','1','0','0');
INSERT INTO aq_areas VALUES('745','0','0','','4','3','定襄县','','','0','58','0','','1','0','0');
INSERT INTO aq_areas VALUES('746','0','0','','4','3','五台县','','','0','58','0','','1','0','0');
INSERT INTO aq_areas VALUES('747','0','0','','4','3','代县','','','0','58','0','','1','0','0');
INSERT INTO aq_areas VALUES('748','0','0','','4','3','繁峙县','','','0','58','0','','1','0','0');
INSERT INTO aq_areas VALUES('749','0','0','','4','3','宁武县','','','0','58','0','','1','0','0');
INSERT INTO aq_areas VALUES('750','0','0','','4','3','静乐县','','','0','58','0','','1','0','0');
INSERT INTO aq_areas VALUES('751','0','0','','4','3','神池县','','','0','58','0','','1','0','0');
INSERT INTO aq_areas VALUES('752','0','0','','4','3','五寨县','','','0','58','0','','1','0','0');
INSERT INTO aq_areas VALUES('753','0','0','','4','3','岢岚县','','','0','58','0','','1','0','0');
INSERT INTO aq_areas VALUES('754','0','0','','4','3','河曲县','','','0','58','0','','1','0','0');
INSERT INTO aq_areas VALUES('755','0','0','','4','3','保德县','','','0','58','0','','1','0','0');
INSERT INTO aq_areas VALUES('756','0','0','','4','3','偏关县','','','0','58','0','','1','0','0');
INSERT INTO aq_areas VALUES('757','0','0','','4','3','原平市','','','0','58','0','','1','0','0');
INSERT INTO aq_areas VALUES('758','0','0','','4','3','市辖区','','','0','59','0','','1','0','0');
INSERT INTO aq_areas VALUES('759','0','0','','4','3','尧都区','','','0','59','0','','1','0','0');
INSERT INTO aq_areas VALUES('760','0','0','','4','3','曲沃县','','','0','59','0','','1','0','0');
INSERT INTO aq_areas VALUES('761','0','0','','4','3','翼城县','','','0','59','0','','1','0','0');
INSERT INTO aq_areas VALUES('762','0','0','','4','3','襄汾县','','','0','59','0','','1','0','0');
INSERT INTO aq_areas VALUES('763','0','0','','4','3','洪洞县','','','0','59','0','','1','0','0');
INSERT INTO aq_areas VALUES('764','0','0','','4','3','古县','','','0','59','0','','1','0','0');
INSERT INTO aq_areas VALUES('765','0','0','','4','3','安泽县','','','0','59','0','','1','0','0');
INSERT INTO aq_areas VALUES('766','0','0','','4','3','浮山县','','','0','59','0','','1','0','0');
INSERT INTO aq_areas VALUES('767','0','0','','4','3','吉县','','','0','59','0','','1','0','0');
INSERT INTO aq_areas VALUES('768','0','0','','4','3','乡宁县','','','0','59','0','','1','0','0');
INSERT INTO aq_areas VALUES('769','0','0','','4','3','大宁县','','','0','59','0','','1','0','0');
INSERT INTO aq_areas VALUES('770','0','0','','4','3','隰县','','','0','59','0','','1','0','0');
INSERT INTO aq_areas VALUES('771','0','0','','4','3','永和县','','','0','59','0','','1','0','0');
INSERT INTO aq_areas VALUES('772','0','0','','4','3','蒲县','','','0','59','0','','1','0','0');
INSERT INTO aq_areas VALUES('773','0','0','','4','3','汾西县','','','0','59','0','','1','0','0');
INSERT INTO aq_areas VALUES('774','0','0','','4','3','侯马市','','','0','59','0','','1','0','0');
INSERT INTO aq_areas VALUES('775','0','0','','4','3','霍州市','','','0','59','0','','1','0','0');
INSERT INTO aq_areas VALUES('776','0','0','','4','3','市辖区','','','0','60','0','','1','0','0');
INSERT INTO aq_areas VALUES('777','0','0','','4','3','离石区','','','0','60','0','','1','0','0');
INSERT INTO aq_areas VALUES('778','0','0','','4','3','文水县','','','0','60','0','','1','0','0');
INSERT INTO aq_areas VALUES('779','0','0','','4','3','交城县','','','0','60','0','','1','0','0');
INSERT INTO aq_areas VALUES('780','0','0','','4','3','兴县','','','0','60','0','','1','0','0');
INSERT INTO aq_areas VALUES('781','0','0','','4','3','临县','','','0','60','0','','1','0','0');
INSERT INTO aq_areas VALUES('782','0','0','','4','3','柳林县','','','0','60','0','','1','0','0');
INSERT INTO aq_areas VALUES('783','0','0','','4','3','石楼县','','','0','60','0','','1','0','0');
INSERT INTO aq_areas VALUES('784','0','0','','4','3','岚县','','','0','60','0','','1','0','0');
INSERT INTO aq_areas VALUES('785','0','0','','4','3','方山县','','','0','60','0','','1','0','0');
INSERT INTO aq_areas VALUES('786','0','0','','4','3','中阳县','','','0','60','0','','1','0','0');
INSERT INTO aq_areas VALUES('787','0','0','','4','3','交口县','','','0','60','0','','1','0','0');
INSERT INTO aq_areas VALUES('788','0','0','','4','3','孝义市','','','0','60','0','','1','0','0');
INSERT INTO aq_areas VALUES('789','0','0','','4','3','汾阳市','','','0','60','0','','1','0','0');
INSERT INTO aq_areas VALUES('790','0','0','','5','3','市辖区','','','0','61','0','','1','0','0');
INSERT INTO aq_areas VALUES('791','0','0','','5','3','新城区','','','0','61','0','','1','0','0');
INSERT INTO aq_areas VALUES('792','0','0','','5','3','回民区','','','0','61','0','','1','0','0');
INSERT INTO aq_areas VALUES('793','0','0','','5','3','玉泉区','','','0','61','0','','1','0','0');
INSERT INTO aq_areas VALUES('794','0','0','','5','3','赛罕区','','','0','61','0','','1','0','0');
INSERT INTO aq_areas VALUES('795','0','0','','5','3','土默特左旗','','','0','61','0','','1','0','0');
INSERT INTO aq_areas VALUES('796','0','0','','5','3','托克托县','','','0','61','0','','1','0','0');
INSERT INTO aq_areas VALUES('797','0','0','','5','3','和林格尔县','','','0','61','0','','1','0','0');
INSERT INTO aq_areas VALUES('798','0','0','','5','3','清水河县','','','0','61','0','','1','0','0');
INSERT INTO aq_areas VALUES('799','0','0','','5','3','武川县','','','0','61','0','','1','0','0');
INSERT INTO aq_areas VALUES('800','0','0','','5','3','市辖区','','','0','62','0','','1','0','0');
INSERT INTO aq_areas VALUES('801','0','0','','5','3','东河区','','','0','62','0','','1','0','0');
INSERT INTO aq_areas VALUES('802','0','0','','5','3','昆都仑区','','','0','62','0','','1','0','0');
INSERT INTO aq_areas VALUES('803','0','0','','5','3','青山区','','','0','62','0','','1','0','0');
INSERT INTO aq_areas VALUES('804','0','0','','5','3','石拐区','','','0','62','0','','1','0','0');
INSERT INTO aq_areas VALUES('805','0','0','','5','3','白云矿区','','','0','62','0','','1','0','0');
INSERT INTO aq_areas VALUES('806','0','0','','5','3','九原区','','','0','62','0','','1','0','0');
INSERT INTO aq_areas VALUES('807','0','0','','5','3','土默特右旗','','','0','62','0','','1','0','0');
INSERT INTO aq_areas VALUES('808','0','0','','5','3','固阳县','','','0','62','0','','1','0','0');
INSERT INTO aq_areas VALUES('809','0','0','','5','3','达尔罕茂明安联合旗','','','0','62','0','','1','0','0');
INSERT INTO aq_areas VALUES('810','0','0','','5','3','市辖区','','','0','63','0','','1','0','0');
INSERT INTO aq_areas VALUES('811','0','0','','5','3','海勃湾区','','','0','63','0','','1','0','0');
INSERT INTO aq_areas VALUES('812','0','0','','5','3','海南区','','','0','63','0','','1','0','0');
INSERT INTO aq_areas VALUES('813','0','0','','5','3','乌达区','','','0','63','0','','1','0','0');
INSERT INTO aq_areas VALUES('814','0','0','','5','3','市辖区','','','0','64','0','','1','0','0');
INSERT INTO aq_areas VALUES('815','0','0','','5','3','红山区','','','0','64','0','','1','0','0');
INSERT INTO aq_areas VALUES('816','0','0','','5','3','元宝山区','','','0','64','0','','1','0','0');
INSERT INTO aq_areas VALUES('817','0','0','','5','3','松山区','','','0','64','0','','1','0','0');
INSERT INTO aq_areas VALUES('818','0','0','','5','3','阿鲁科尔沁旗','','','0','64','0','','1','0','0');
INSERT INTO aq_areas VALUES('819','0','0','','5','3','巴林左旗','','','0','64','0','','1','0','0');
INSERT INTO aq_areas VALUES('820','0','0','','5','3','巴林右旗','','','0','64','0','','1','0','0');
INSERT INTO aq_areas VALUES('821','0','0','','5','3','林西县','','','0','64','0','','1','0','0');
INSERT INTO aq_areas VALUES('822','0','0','','5','3','克什克腾旗','','','0','64','0','','1','0','0');
INSERT INTO aq_areas VALUES('823','0','0','','5','3','翁牛特旗','','','0','64','0','','1','0','0');
INSERT INTO aq_areas VALUES('824','0','0','','5','3','喀喇沁旗','','','0','64','0','','1','0','0');
INSERT INTO aq_areas VALUES('825','0','0','','5','3','宁城县','','','0','64','0','','1','0','0');
INSERT INTO aq_areas VALUES('826','0','0','','5','3','敖汉旗','','','0','64','0','','1','0','0');
INSERT INTO aq_areas VALUES('827','0','0','','5','3','市辖区','','','0','65','0','','1','0','0');
INSERT INTO aq_areas VALUES('828','0','0','','5','3','科尔沁区','','','0','65','0','','1','0','0');
INSERT INTO aq_areas VALUES('829','0','0','','5','3','科尔沁左翼中旗','','','0','65','0','','1','0','0');
INSERT INTO aq_areas VALUES('830','0','0','','5','3','科尔沁左翼后旗','','','0','65','0','','1','0','0');
INSERT INTO aq_areas VALUES('831','0','0','','5','3','开鲁县','','','0','65','0','','1','0','0');
INSERT INTO aq_areas VALUES('832','0','0','','5','3','库伦旗','','','0','65','0','','1','0','0');
INSERT INTO aq_areas VALUES('833','0','0','','5','3','奈曼旗','','','0','65','0','','1','0','0');
INSERT INTO aq_areas VALUES('834','0','0','','5','3','扎鲁特旗','','','0','65','0','','1','0','0');
INSERT INTO aq_areas VALUES('835','0','0','','5','3','霍林郭勒市','','','0','65','0','','1','0','0');
INSERT INTO aq_areas VALUES('836','0','0','','5','3','东胜区','','','0','66','0','','1','0','0');
INSERT INTO aq_areas VALUES('837','0','0','','5','3','达拉特旗','','','0','66','0','','1','0','0');
INSERT INTO aq_areas VALUES('838','0','0','','5','3','准格尔旗','','','0','66','0','','1','0','0');
INSERT INTO aq_areas VALUES('839','0','0','','5','3','鄂托克前旗','','','0','66','0','','1','0','0');
INSERT INTO aq_areas VALUES('840','0','0','','5','3','鄂托克旗','','','0','66','0','','1','0','0');
INSERT INTO aq_areas VALUES('841','0','0','','5','3','杭锦旗','','','0','66','0','','1','0','0');
INSERT INTO aq_areas VALUES('842','0','0','','5','3','乌审旗','','','0','66','0','','1','0','0');
INSERT INTO aq_areas VALUES('843','0','0','','5','3','伊金霍洛旗','','','0','66','0','','1','0','0');
INSERT INTO aq_areas VALUES('844','0','0','','5','3','市辖区','','','0','67','0','','1','0','0');
INSERT INTO aq_areas VALUES('845','0','0','','5','3','海拉尔区','','','0','67','0','','1','0','0');
INSERT INTO aq_areas VALUES('846','0','0','','5','3','阿荣旗','','','0','67','0','','1','0','0');
INSERT INTO aq_areas VALUES('847','0','0','','5','3','莫力达瓦达斡尔族自治旗','','','0','67','0','','1','0','0');
INSERT INTO aq_areas VALUES('848','0','0','','5','3','鄂伦春自治旗','','','0','67','0','','1','0','0');
INSERT INTO aq_areas VALUES('849','0','0','','5','3','鄂温克族自治旗','','','0','67','0','','1','0','0');
INSERT INTO aq_areas VALUES('850','0','0','','5','3','陈巴尔虎旗','','','0','67','0','','1','0','0');
INSERT INTO aq_areas VALUES('851','0','0','','5','3','新巴尔虎左旗','','','0','67','0','','1','0','0');
INSERT INTO aq_areas VALUES('852','0','0','','5','3','新巴尔虎右旗','','','0','67','0','','1','0','0');
INSERT INTO aq_areas VALUES('853','0','0','','5','3','满洲里市','','','0','67','0','','1','0','0');
INSERT INTO aq_areas VALUES('854','0','0','','5','3','牙克石市','','','0','67','0','','1','0','0');
INSERT INTO aq_areas VALUES('855','0','0','','5','3','扎兰屯市','','','0','67','0','','1','0','0');
INSERT INTO aq_areas VALUES('856','0','0','','5','3','额尔古纳市','','','0','67','0','','1','0','0');
INSERT INTO aq_areas VALUES('857','0','0','','5','3','根河市','','','0','67','0','','1','0','0');
INSERT INTO aq_areas VALUES('858','0','0','','5','3','市辖区','','','0','68','0','','1','0','0');
INSERT INTO aq_areas VALUES('859','0','0','','5','3','临河区','','','0','68','0','','1','0','0');
INSERT INTO aq_areas VALUES('860','0','0','','5','3','五原县','','','0','68','0','','1','0','0');
INSERT INTO aq_areas VALUES('861','0','0','','5','3','磴口县','','','0','68','0','','1','0','0');
INSERT INTO aq_areas VALUES('862','0','0','','5','3','乌拉特前旗','','','0','68','0','','1','0','0');
INSERT INTO aq_areas VALUES('863','0','0','','5','3','乌拉特中旗','','','0','68','0','','1','0','0');
INSERT INTO aq_areas VALUES('864','0','0','','5','3','乌拉特后旗','','','0','68','0','','1','0','0');
INSERT INTO aq_areas VALUES('865','0','0','','5','3','杭锦后旗','','','0','68','0','','1','0','0');
INSERT INTO aq_areas VALUES('866','0','0','','5','3','市辖区','','','0','69','0','','1','0','0');
INSERT INTO aq_areas VALUES('867','0','0','','5','3','集宁区','','','0','69','0','','1','0','0');
INSERT INTO aq_areas VALUES('868','0','0','','5','3','卓资县','','','0','69','0','','1','0','0');
INSERT INTO aq_areas VALUES('869','0','0','','5','3','化德县','','','0','69','0','','1','0','0');
INSERT INTO aq_areas VALUES('870','0','0','','5','3','商都县','','','0','69','0','','1','0','0');
INSERT INTO aq_areas VALUES('871','0','0','','5','3','兴和县','','','0','69','0','','1','0','0');
INSERT INTO aq_areas VALUES('872','0','0','','5','3','凉城县','','','0','69','0','','1','0','0');
INSERT INTO aq_areas VALUES('873','0','0','','5','3','察哈尔右翼前旗','','','0','69','0','','1','0','0');
INSERT INTO aq_areas VALUES('874','0','0','','5','3','察哈尔右翼中旗','','','0','69','0','','1','0','0');
INSERT INTO aq_areas VALUES('875','0','0','','5','3','察哈尔右翼后旗','','','0','69','0','','1','0','0');
INSERT INTO aq_areas VALUES('876','0','0','','5','3','四子王旗','','','0','69','0','','1','0','0');
INSERT INTO aq_areas VALUES('877','0','0','','5','3','丰镇市','','','0','69','0','','1','0','0');
INSERT INTO aq_areas VALUES('878','0','0','','5','3','乌兰浩特市','','','0','70','0','','1','0','0');
INSERT INTO aq_areas VALUES('879','0','0','','5','3','阿尔山市','','','0','70','0','','1','0','0');
INSERT INTO aq_areas VALUES('880','0','0','','5','3','科尔沁右翼前旗','','','0','70','0','','1','0','0');
INSERT INTO aq_areas VALUES('881','0','0','','5','3','科尔沁右翼中旗','','','0','70','0','','1','0','0');
INSERT INTO aq_areas VALUES('882','0','0','','5','3','扎赉特旗','','','0','70','0','','1','0','0');
INSERT INTO aq_areas VALUES('883','0','0','','5','3','突泉县','','','0','70','0','','1','0','0');
INSERT INTO aq_areas VALUES('884','0','0','','5','3','二连浩特市','','','0','71','0','','1','0','0');
INSERT INTO aq_areas VALUES('885','0','0','','5','3','锡林浩特市','','','0','71','0','','1','0','0');
INSERT INTO aq_areas VALUES('886','0','0','','5','3','阿巴嘎旗','','','0','71','0','','1','0','0');
INSERT INTO aq_areas VALUES('887','0','0','','5','3','苏尼特左旗','','','0','71','0','','1','0','0');
INSERT INTO aq_areas VALUES('888','0','0','','5','3','苏尼特右旗','','','0','71','0','','1','0','0');
INSERT INTO aq_areas VALUES('889','0','0','','5','3','东乌珠穆沁旗','','','0','71','0','','1','0','0');
INSERT INTO aq_areas VALUES('890','0','0','','5','3','西乌珠穆沁旗','','','0','71','0','','1','0','0');
INSERT INTO aq_areas VALUES('891','0','0','','5','3','太仆寺旗','','','0','71','0','','1','0','0');
INSERT INTO aq_areas VALUES('892','0','0','','5','3','镶黄旗','','','0','71','0','','1','0','0');
INSERT INTO aq_areas VALUES('893','0','0','','5','3','正镶白旗','','','0','71','0','','1','0','0');
INSERT INTO aq_areas VALUES('894','0','0','','5','3','正蓝旗','','','0','71','0','','1','0','0');
INSERT INTO aq_areas VALUES('895','0','0','','5','3','多伦县','','','0','71','0','','1','0','0');
INSERT INTO aq_areas VALUES('896','0','0','','5','3','阿拉善左旗','','','0','72','0','','1','0','0');
INSERT INTO aq_areas VALUES('897','0','0','','5','3','阿拉善右旗','','','0','72','0','','1','0','0');
INSERT INTO aq_areas VALUES('898','0','0','','5','3','额济纳旗','','','0','72','0','','1','0','0');
INSERT INTO aq_areas VALUES('899','0','0','','6','3','市辖区','','','0','73','0','','1','0','0');
INSERT INTO aq_areas VALUES('900','0','0','','6','3','和平区','','','0','73','0','','1','0','0');
INSERT INTO aq_areas VALUES('901','0','0','','6','3','沈河区','','','0','73','0','','1','0','0');
INSERT INTO aq_areas VALUES('902','0','0','','6','3','大东区','','','0','73','0','','1','0','0');
INSERT INTO aq_areas VALUES('903','0','0','','6','3','皇姑区','','','0','73','0','','1','0','0');
INSERT INTO aq_areas VALUES('904','0','0','','6','3','铁西区','','','0','73','0','','1','0','0');
INSERT INTO aq_areas VALUES('905','0','0','','6','3','苏家屯区','','','0','73','0','','1','0','0');
INSERT INTO aq_areas VALUES('906','0','0','','6','3','东陵区','','','0','73','0','','1','0','0');
INSERT INTO aq_areas VALUES('907','0','0','','6','3','新城子区','','','0','73','0','','1','0','0');
INSERT INTO aq_areas VALUES('908','0','0','','6','3','于洪区','','','0','73','0','','1','0','0');
INSERT INTO aq_areas VALUES('909','0','0','','6','3','辽中县','','','0','73','0','','1','0','0');
INSERT INTO aq_areas VALUES('910','0','0','','6','3','康平县','','','0','73','0','','1','0','0');
INSERT INTO aq_areas VALUES('911','0','0','','6','3','法库县','','','0','73','0','','1','0','0');
INSERT INTO aq_areas VALUES('912','0','0','','6','3','新民市','','','0','73','0','','1','0','0');
INSERT INTO aq_areas VALUES('913','0','0','','6','3','市辖区','','','0','74','0','','1','0','0');
INSERT INTO aq_areas VALUES('914','0','0','','6','3','中山区','','','0','74','0','','1','0','0');
INSERT INTO aq_areas VALUES('915','0','0','','6','3','西岗区','','','0','74','0','','1','0','0');
INSERT INTO aq_areas VALUES('916','0','0','','6','3','沙河口区','','','0','74','0','','1','0','0');
INSERT INTO aq_areas VALUES('917','0','0','','6','3','甘井子区','','','0','74','0','','1','0','0');
INSERT INTO aq_areas VALUES('918','0','0','','6','3','旅顺口区','','','0','74','0','','1','0','0');
INSERT INTO aq_areas VALUES('919','0','0','','6','3','金州区','','','0','74','0','','1','0','0');
INSERT INTO aq_areas VALUES('920','0','0','','6','3','长海县','','','0','74','0','','1','0','0');
INSERT INTO aq_areas VALUES('921','0','0','','6','3','瓦房店市','','','0','74','0','','1','0','0');
INSERT INTO aq_areas VALUES('922','0','0','','6','3','普兰店市','','','0','74','0','','1','0','0');
INSERT INTO aq_areas VALUES('923','0','0','','6','3','庄河市','','','0','74','0','','1','0','0');
INSERT INTO aq_areas VALUES('924','0','0','','6','3','市辖区','','','0','75','0','','1','0','0');
INSERT INTO aq_areas VALUES('925','0','0','','6','3','铁东区','','','0','75','0','','1','0','0');
INSERT INTO aq_areas VALUES('926','0','0','','6','3','铁西区','','','0','75','0','','1','0','0');
INSERT INTO aq_areas VALUES('927','0','0','','6','3','立山区','','','0','75','0','','1','0','0');
INSERT INTO aq_areas VALUES('928','0','0','','6','3','千山区','','','0','75','0','','1','0','0');
INSERT INTO aq_areas VALUES('929','0','0','','6','3','台安县','','','0','75','0','','1','0','0');
INSERT INTO aq_areas VALUES('930','0','0','','6','3','岫岩满族自治县','','','0','75','0','','1','0','0');
INSERT INTO aq_areas VALUES('931','0','0','','6','3','海城市','','','0','75','0','','1','0','0');
INSERT INTO aq_areas VALUES('932','0','0','','6','3','市辖区','','','0','76','0','','1','0','0');
INSERT INTO aq_areas VALUES('933','0','0','','6','3','新抚区','','','0','76','0','','1','0','0');
INSERT INTO aq_areas VALUES('934','0','0','','6','3','东洲区','','','0','76','0','','1','0','0');
INSERT INTO aq_areas VALUES('935','0','0','','6','3','望花区','','','0','76','0','','1','0','0');
INSERT INTO aq_areas VALUES('936','0','0','','6','3','顺城区','','','0','76','0','','1','0','0');
INSERT INTO aq_areas VALUES('937','0','0','','6','3','抚顺县','','','0','76','0','','1','0','0');
INSERT INTO aq_areas VALUES('938','0','0','','6','3','新宾满族自治县','','','0','76','0','','1','0','0');
INSERT INTO aq_areas VALUES('939','0','0','','6','3','清原满族自治县','','','0','76','0','','1','0','0');
INSERT INTO aq_areas VALUES('940','0','0','','6','3','市辖区','','','0','77','0','','1','0','0');
INSERT INTO aq_areas VALUES('941','0','0','','6','3','平山区','','','0','77','0','','1','0','0');
INSERT INTO aq_areas VALUES('942','0','0','','6','3','溪湖区','','','0','77','0','','1','0','0');
INSERT INTO aq_areas VALUES('943','0','0','','6','3','明山区','','','0','77','0','','1','0','0');
INSERT INTO aq_areas VALUES('944','0','0','','6','3','南芬区','','','0','77','0','','1','0','0');
INSERT INTO aq_areas VALUES('945','0','0','','6','3','本溪满族自治县','','','0','77','0','','1','0','0');
INSERT INTO aq_areas VALUES('946','0','0','','6','3','桓仁满族自治县','','','0','77','0','','1','0','0');
INSERT INTO aq_areas VALUES('947','0','0','','6','3','市辖区','','','0','78','0','','1','0','0');
INSERT INTO aq_areas VALUES('948','0','0','','6','3','元宝区','','','0','78','0','','1','0','0');
INSERT INTO aq_areas VALUES('949','0','0','','6','3','振兴区','','','0','78','0','','1','0','0');
INSERT INTO aq_areas VALUES('950','0','0','','6','3','振安区','','','0','78','0','','1','0','0');
INSERT INTO aq_areas VALUES('951','0','0','','6','3','宽甸满族自治县','','','0','78','0','','1','0','0');
INSERT INTO aq_areas VALUES('952','0','0','','6','3','东港市','','','0','78','0','','1','0','0');
INSERT INTO aq_areas VALUES('953','0','0','','6','3','凤城市','','','0','78','0','','1','0','0');
INSERT INTO aq_areas VALUES('954','0','0','','6','3','市辖区','','','0','79','0','','1','0','0');
INSERT INTO aq_areas VALUES('955','0','0','','6','3','古塔区','','','0','79','0','','1','0','0');
INSERT INTO aq_areas VALUES('956','0','0','','6','3','凌河区','','','0','79','0','','1','0','0');
INSERT INTO aq_areas VALUES('957','0','0','','6','3','太和区','','','0','79','0','','1','0','0');
INSERT INTO aq_areas VALUES('958','0','0','','6','3','黑山县','','','0','79','0','','1','0','0');
INSERT INTO aq_areas VALUES('959','0','0','','6','3','义县','','','0','79','0','','1','0','0');
INSERT INTO aq_areas VALUES('960','0','0','','6','3','凌海市','','','0','79','0','','1','0','0');
INSERT INTO aq_areas VALUES('961','0','0','','6','3','北宁市','','','0','79','0','','1','0','0');
INSERT INTO aq_areas VALUES('962','0','0','','6','3','市辖区','','','0','80','0','','1','0','0');
INSERT INTO aq_areas VALUES('963','0','0','','6','3','站前区','','','0','80','0','','1','0','0');
INSERT INTO aq_areas VALUES('964','0','0','','6','3','西市区','','','0','80','0','','1','0','0');
INSERT INTO aq_areas VALUES('965','0','0','','6','3','鲅鱼圈区','','','0','80','0','','1','0','0');
INSERT INTO aq_areas VALUES('966','0','0','','6','3','老边区','','','0','80','0','','1','0','0');
INSERT INTO aq_areas VALUES('967','0','0','','6','3','盖州市','','','0','80','0','','1','0','0');
INSERT INTO aq_areas VALUES('968','0','0','','6','3','大石桥市','','','0','80','0','','1','0','0');
INSERT INTO aq_areas VALUES('969','0','0','','6','3','市辖区','','','0','81','0','','1','0','0');
INSERT INTO aq_areas VALUES('970','0','0','','6','3','海州区','','','0','81','0','','1','0','0');
INSERT INTO aq_areas VALUES('971','0','0','','6','3','新邱区','','','0','81','0','','1','0','0');
INSERT INTO aq_areas VALUES('972','0','0','','6','3','太平区','','','0','81','0','','1','0','0');
INSERT INTO aq_areas VALUES('973','0','0','','6','3','清河门区','','','0','81','0','','1','0','0');
INSERT INTO aq_areas VALUES('974','0','0','','6','3','细河区','','','0','81','0','','1','0','0');
INSERT INTO aq_areas VALUES('975','0','0','','6','3','阜新蒙古族自治县','','','0','81','0','','1','0','0');
INSERT INTO aq_areas VALUES('976','0','0','','6','3','彰武县','','','0','81','0','','1','0','0');
INSERT INTO aq_areas VALUES('977','0','0','','6','3','市辖区','','','0','82','0','','1','0','0');
INSERT INTO aq_areas VALUES('978','0','0','','6','3','白塔区','','','0','82','0','','1','0','0');
INSERT INTO aq_areas VALUES('979','0','0','','6','3','文圣区','','','0','82','0','','1','0','0');
INSERT INTO aq_areas VALUES('980','0','0','','6','3','宏伟区','','','0','82','0','','1','0','0');
INSERT INTO aq_areas VALUES('981','0','0','','6','3','弓长岭区','','','0','82','0','','1','0','0');
INSERT INTO aq_areas VALUES('982','0','0','','6','3','太子河区','','','0','82','0','','1','0','0');
INSERT INTO aq_areas VALUES('983','0','0','','6','3','辽阳县','','','0','82','0','','1','0','0');
INSERT INTO aq_areas VALUES('984','0','0','','6','3','灯塔市','','','0','82','0','','1','0','0');
INSERT INTO aq_areas VALUES('985','0','0','','6','3','市辖区','','','0','83','0','','1','0','0');
INSERT INTO aq_areas VALUES('986','0','0','','6','3','双台子区','','','0','83','0','','1','0','0');
INSERT INTO aq_areas VALUES('987','0','0','','6','3','兴隆台区','','','0','83','0','','1','0','0');
INSERT INTO aq_areas VALUES('988','0','0','','6','3','大洼县','','','0','83','0','','1','0','0');
INSERT INTO aq_areas VALUES('989','0','0','','6','3','盘山县','','','0','83','0','','1','0','0');
INSERT INTO aq_areas VALUES('990','0','0','','6','3','市辖区','','','0','84','0','','1','0','0');
INSERT INTO aq_areas VALUES('991','0','0','','6','3','银州区','','','0','84','0','','1','0','0');
INSERT INTO aq_areas VALUES('992','0','0','','6','3','清河区','','','0','84','0','','1','0','0');
INSERT INTO aq_areas VALUES('993','0','0','','6','3','铁岭县','','','0','84','0','','1','0','0');
INSERT INTO aq_areas VALUES('994','0','0','','6','3','西丰县','','','0','84','0','','1','0','0');
INSERT INTO aq_areas VALUES('995','0','0','','6','3','昌图县','','','0','84','0','','1','0','0');
INSERT INTO aq_areas VALUES('996','0','0','','6','3','调兵山市','','','0','84','0','','1','0','0');
INSERT INTO aq_areas VALUES('997','0','0','','6','3','开原市','','','0','84','0','','1','0','0');
INSERT INTO aq_areas VALUES('998','0','0','','6','3','市辖区','','','0','85','0','','1','0','0');
INSERT INTO aq_areas VALUES('999','0','0','','6','3','双塔区','','','0','85','0','','1','0','0');
INSERT INTO aq_areas VALUES('1000','0','0','','6','3','龙城区','','','0','85','0','','1','0','0');
INSERT INTO aq_areas VALUES('1001','0','0','','6','3','朝阳县','','','0','85','0','','1','0','0');
INSERT INTO aq_areas VALUES('1002','0','0','','6','3','建平县','','','0','85','0','','1','0','0');
INSERT INTO aq_areas VALUES('1003','0','0','','6','3','喀喇沁左翼蒙古族自治县','','','0','85','0','','1','0','0');
INSERT INTO aq_areas VALUES('1004','0','0','','6','3','北票市','','','0','85','0','','1','0','0');
INSERT INTO aq_areas VALUES('1005','0','0','','6','3','凌源市','','','0','85','0','','1','0','0');
INSERT INTO aq_areas VALUES('1006','0','0','','6','3','市辖区','','','0','86','0','','1','0','0');
INSERT INTO aq_areas VALUES('1007','0','0','','6','3','连山区','','','0','86','0','','1','0','0');
INSERT INTO aq_areas VALUES('1008','0','0','','6','3','龙港区','','','0','86','0','','1','0','0');
INSERT INTO aq_areas VALUES('1009','0','0','','6','3','南票区','','','0','86','0','','1','0','0');
INSERT INTO aq_areas VALUES('1010','0','0','','6','3','绥中县','','','0','86','0','','1','0','0');
INSERT INTO aq_areas VALUES('1011','0','0','','6','3','建昌县','','','0','86','0','','1','0','0');
INSERT INTO aq_areas VALUES('1012','0','0','','6','3','兴城市','','','0','86','0','','1','0','0');
INSERT INTO aq_areas VALUES('1013','0','0','','7','3','市辖区','','','0','87','0','','1','0','0');
INSERT INTO aq_areas VALUES('1014','0','0','','7','3','南关区','','','0','87','0','','1','0','0');
INSERT INTO aq_areas VALUES('1015','0','0','','7','3','宽城区','','','0','87','0','','1','0','0');
INSERT INTO aq_areas VALUES('1016','0','0','','7','3','朝阳区','','','0','87','0','','1','0','0');
INSERT INTO aq_areas VALUES('1017','0','0','','7','3','二道区','','','0','87','0','','1','0','0');
INSERT INTO aq_areas VALUES('1018','0','0','','7','3','绿园区','','','0','87','0','','1','0','0');
INSERT INTO aq_areas VALUES('1019','0','0','','7','3','双阳区','','','0','87','0','','1','0','0');
INSERT INTO aq_areas VALUES('1020','0','0','','7','3','农安县','','','0','87','0','','1','0','0');
INSERT INTO aq_areas VALUES('1021','0','0','','7','3','九台市','','','0','87','0','','1','0','0');
INSERT INTO aq_areas VALUES('1022','0','0','','7','3','榆树市','','','0','87','0','','1','0','0');
INSERT INTO aq_areas VALUES('1023','0','0','','7','3','德惠市','','','0','87','0','','1','0','0');
INSERT INTO aq_areas VALUES('1024','0','0','','7','3','市辖区','','','0','88','0','','1','0','0');
INSERT INTO aq_areas VALUES('1025','0','0','','7','3','昌邑区','','','0','88','0','','1','0','0');
INSERT INTO aq_areas VALUES('1026','0','0','','7','3','龙潭区','','','0','88','0','','1','0','0');
INSERT INTO aq_areas VALUES('1027','0','0','','7','3','船营区','','','0','88','0','','1','0','0');
INSERT INTO aq_areas VALUES('1028','0','0','','7','3','丰满区','','','0','88','0','','1','0','0');
INSERT INTO aq_areas VALUES('1029','0','0','','7','3','永吉县','','','0','88','0','','1','0','0');
INSERT INTO aq_areas VALUES('1030','0','0','','7','3','蛟河市','','','0','88','0','','1','0','0');
INSERT INTO aq_areas VALUES('1031','0','0','','7','3','桦甸市','','','0','88','0','','1','0','0');
INSERT INTO aq_areas VALUES('1032','0','0','','7','3','舒兰市','','','0','88','0','','1','0','0');
INSERT INTO aq_areas VALUES('1033','0','0','','7','3','磐石市','','','0','88','0','','1','0','0');
INSERT INTO aq_areas VALUES('1034','0','0','','7','3','市辖区','','','0','89','0','','1','0','0');
INSERT INTO aq_areas VALUES('1035','0','0','','7','3','铁西区','','','0','89','0','','1','0','0');
INSERT INTO aq_areas VALUES('1036','0','0','','7','3','铁东区','','','0','89','0','','1','0','0');
INSERT INTO aq_areas VALUES('1037','0','0','','7','3','梨树县','','','0','89','0','','1','0','0');
INSERT INTO aq_areas VALUES('1038','0','0','','7','3','伊通满族自治县','','','0','89','0','','1','0','0');
INSERT INTO aq_areas VALUES('1039','0','0','','7','3','公主岭市','','','0','89','0','','1','0','0');
INSERT INTO aq_areas VALUES('1040','0','0','','7','3','双辽市','','','0','89','0','','1','0','0');
INSERT INTO aq_areas VALUES('1041','0','0','','7','3','市辖区','','','0','90','0','','1','0','0');
INSERT INTO aq_areas VALUES('1042','0','0','','7','3','龙山区','','','0','90','0','','1','0','0');
INSERT INTO aq_areas VALUES('1043','0','0','','7','3','西安区','','','0','90','0','','1','0','0');
INSERT INTO aq_areas VALUES('1044','0','0','','7','3','东丰县','','','0','90','0','','1','0','0');
INSERT INTO aq_areas VALUES('1045','0','0','','7','3','东辽县','','','0','90','0','','1','0','0');
INSERT INTO aq_areas VALUES('1046','0','0','','7','3','市辖区','','','0','91','0','','1','0','0');
INSERT INTO aq_areas VALUES('1047','0','0','','7','3','东昌区','','','0','91','0','','1','0','0');
INSERT INTO aq_areas VALUES('1048','0','0','','7','3','二道江区','','','0','91','0','','1','0','0');
INSERT INTO aq_areas VALUES('1049','0','0','','7','3','通化县','','','0','91','0','','1','0','0');
INSERT INTO aq_areas VALUES('1050','0','0','','7','3','辉南县','','','0','91','0','','1','0','0');
INSERT INTO aq_areas VALUES('1051','0','0','','7','3','柳河县','','','0','91','0','','1','0','0');
INSERT INTO aq_areas VALUES('1052','0','0','','7','3','梅河口市','','','0','91','0','','1','0','0');
INSERT INTO aq_areas VALUES('1053','0','0','','7','3','集安市','','','0','91','0','','1','0','0');
INSERT INTO aq_areas VALUES('1054','0','0','','7','3','市辖区','','','0','92','0','','1','0','0');
INSERT INTO aq_areas VALUES('1055','0','0','','7','3','八道江区','','','0','92','0','','1','0','0');
INSERT INTO aq_areas VALUES('1056','0','0','','7','3','抚松县','','','0','92','0','','1','0','0');
INSERT INTO aq_areas VALUES('1057','0','0','','7','3','靖宇县','','','0','92','0','','1','0','0');
INSERT INTO aq_areas VALUES('1058','0','0','','7','3','长白朝鲜族自治县','','','0','92','0','','1','0','0');
INSERT INTO aq_areas VALUES('1059','0','0','','7','3','江源县','','','0','92','0','','1','0','0');
INSERT INTO aq_areas VALUES('1060','0','0','','7','3','临江市','','','0','92','0','','1','0','0');
INSERT INTO aq_areas VALUES('1061','0','0','','7','3','市辖区','','','0','93','0','','1','0','0');
INSERT INTO aq_areas VALUES('1062','0','0','','7','3','宁江区','','','0','93','0','','1','0','0');
INSERT INTO aq_areas VALUES('1063','0','0','','7','3','前郭尔罗斯蒙古族自治县','','','0','93','0','','1','0','0');
INSERT INTO aq_areas VALUES('1064','0','0','','7','3','长岭县','','','0','93','0','','1','0','0');
INSERT INTO aq_areas VALUES('1065','0','0','','7','3','乾安县','','','0','93','0','','1','0','0');
INSERT INTO aq_areas VALUES('1066','0','0','','7','3','扶余县','','','0','93','0','','1','0','0');
INSERT INTO aq_areas VALUES('1067','0','0','','7','3','市辖区','','','0','94','0','','1','0','0');
INSERT INTO aq_areas VALUES('1068','0','0','','7','3','洮北区','','','0','94','0','','1','0','0');
INSERT INTO aq_areas VALUES('1069','0','0','','7','3','镇赉县','','','0','94','0','','1','0','0');
INSERT INTO aq_areas VALUES('1070','0','0','','7','3','通榆县','','','0','94','0','','1','0','0');
INSERT INTO aq_areas VALUES('1071','0','0','','7','3','洮南市','','','0','94','0','','1','0','0');
INSERT INTO aq_areas VALUES('1072','0','0','','7','3','大安市','','','0','94','0','','1','0','0');
INSERT INTO aq_areas VALUES('1073','0','0','','7','3','延吉市','','','0','95','0','','1','0','0');
INSERT INTO aq_areas VALUES('1074','0','0','','7','3','图们市','','','0','95','0','','1','0','0');
INSERT INTO aq_areas VALUES('1075','0','0','','7','3','敦化市','','','0','95','0','','1','0','0');
INSERT INTO aq_areas VALUES('1076','0','0','','7','3','珲春市','','','0','95','0','','1','0','0');
INSERT INTO aq_areas VALUES('1077','0','0','','7','3','龙井市','','','0','95','0','','1','0','0');
INSERT INTO aq_areas VALUES('1078','0','0','','7','3','和龙市','','','0','95','0','','1','0','0');
INSERT INTO aq_areas VALUES('1079','0','0','','7','3','汪清县','','','0','95','0','','1','0','0');
INSERT INTO aq_areas VALUES('1080','0','0','','7','3','安图县','','','0','95','0','','1','0','0');
INSERT INTO aq_areas VALUES('1081','0','0','','8','3','市辖区','','','0','96','0','','1','0','0');
INSERT INTO aq_areas VALUES('1082','0','0','','8','3','道里区','','','0','96','0','','1','0','0');
INSERT INTO aq_areas VALUES('1083','0','0','','8','3','南岗区','','','0','96','0','','1','0','0');
INSERT INTO aq_areas VALUES('1084','0','0','','8','3','道外区','','','0','96','0','','1','0','0');
INSERT INTO aq_areas VALUES('1085','0','0','','8','3','香坊区','','','0','96','0','','1','0','0');
INSERT INTO aq_areas VALUES('1086','0','0','','8','3','动力区','','','0','96','0','','1','0','0');
INSERT INTO aq_areas VALUES('1087','0','0','','8','3','平房区','','','0','96','0','','1','0','0');
INSERT INTO aq_areas VALUES('1088','0','0','','8','3','松北区','','','0','96','0','','1','0','0');
INSERT INTO aq_areas VALUES('1089','0','0','','8','3','呼兰区','','','0','96','0','','1','0','0');
INSERT INTO aq_areas VALUES('1090','0','0','','8','3','依兰县','','','0','96','0','','1','0','0');
INSERT INTO aq_areas VALUES('1091','0','0','','8','3','方正县','','','0','96','0','','1','0','0');
INSERT INTO aq_areas VALUES('1092','0','0','','8','3','宾县','','','0','96','0','','1','0','0');
INSERT INTO aq_areas VALUES('1093','0','0','','8','3','巴彦县','','','0','96','0','','1','0','0');
INSERT INTO aq_areas VALUES('1094','0','0','','8','3','木兰县','','','0','96','0','','1','0','0');
INSERT INTO aq_areas VALUES('1095','0','0','','8','3','通河县','','','0','96','0','','1','0','0');
INSERT INTO aq_areas VALUES('1096','0','0','','8','3','延寿县','','','0','96','0','','1','0','0');
INSERT INTO aq_areas VALUES('1097','0','0','','8','3','阿城市','','','0','96','0','','1','0','0');
INSERT INTO aq_areas VALUES('1098','0','0','','8','3','双城市','','','0','96','0','','1','0','0');
INSERT INTO aq_areas VALUES('1099','0','0','','8','3','尚志市','','','0','96','0','','1','0','0');
INSERT INTO aq_areas VALUES('1100','0','0','','8','3','五常市','','','0','96','0','','1','0','0');
INSERT INTO aq_areas VALUES('1101','0','0','','8','3','市辖区','','','0','97','0','','1','0','0');
INSERT INTO aq_areas VALUES('1102','0','0','','8','3','龙沙区','','','0','97','0','','1','0','0');
INSERT INTO aq_areas VALUES('1103','0','0','','8','3','建华区','','','0','97','0','','1','0','0');
INSERT INTO aq_areas VALUES('1104','0','0','','8','3','铁锋区','','','0','97','0','','1','0','0');
INSERT INTO aq_areas VALUES('1105','0','0','','8','3','昂昂溪区','','','0','97','0','','1','0','0');
INSERT INTO aq_areas VALUES('1106','0','0','','8','3','富拉尔基区','','','0','97','0','','1','0','0');
INSERT INTO aq_areas VALUES('1107','0','0','','8','3','碾子山区','','','0','97','0','','1','0','0');
INSERT INTO aq_areas VALUES('1108','0','0','','8','3','梅里斯达斡尔族区','','','0','97','0','','1','0','0');
INSERT INTO aq_areas VALUES('1109','0','0','','8','3','龙江县','','','0','97','0','','1','0','0');
INSERT INTO aq_areas VALUES('1110','0','0','','8','3','依安县','','','0','97','0','','1','0','0');
INSERT INTO aq_areas VALUES('1111','0','0','','8','3','泰来县','','','0','97','0','','1','0','0');
INSERT INTO aq_areas VALUES('1112','0','0','','8','3','甘南县','','','0','97','0','','1','0','0');
INSERT INTO aq_areas VALUES('1113','0','0','','8','3','富裕县','','','0','97','0','','1','0','0');
INSERT INTO aq_areas VALUES('1114','0','0','','8','3','克山县','','','0','97','0','','1','0','0');
INSERT INTO aq_areas VALUES('1115','0','0','','8','3','克东县','','','0','97','0','','1','0','0');
INSERT INTO aq_areas VALUES('1116','0','0','','8','3','拜泉县','','','0','97','0','','1','0','0');
INSERT INTO aq_areas VALUES('1117','0','0','','8','3','讷河市','','','0','97','0','','1','0','0');
INSERT INTO aq_areas VALUES('1118','0','0','','8','3','市辖区','','','0','98','0','','1','0','0');
INSERT INTO aq_areas VALUES('1119','0','0','','8','3','鸡冠区','','','0','98','0','','1','0','0');
INSERT INTO aq_areas VALUES('1120','0','0','','8','3','恒山区','','','0','98','0','','1','0','0');
INSERT INTO aq_areas VALUES('1121','0','0','','8','3','滴道区','','','0','98','0','','1','0','0');
INSERT INTO aq_areas VALUES('1122','0','0','','8','3','梨树区','','','0','98','0','','1','0','0');
INSERT INTO aq_areas VALUES('1123','0','0','','8','3','城子河区','','','0','98','0','','1','0','0');
INSERT INTO aq_areas VALUES('1124','0','0','','8','3','麻山区','','','0','98','0','','1','0','0');
INSERT INTO aq_areas VALUES('1125','0','0','','8','3','鸡东县','','','0','98','0','','1','0','0');
INSERT INTO aq_areas VALUES('1126','0','0','','8','3','虎林市','','','0','98','0','','1','0','0');
INSERT INTO aq_areas VALUES('1127','0','0','','8','3','密山市','','','0','98','0','','1','0','0');
INSERT INTO aq_areas VALUES('1128','0','0','','8','3','市辖区','','','0','99','0','','1','0','0');
INSERT INTO aq_areas VALUES('1129','0','0','','8','3','向阳区','','','0','99','0','','1','0','0');
INSERT INTO aq_areas VALUES('1130','0','0','','8','3','工农区','','','0','99','0','','1','0','0');
INSERT INTO aq_areas VALUES('1131','0','0','','8','3','南山区','','','0','99','0','','1','0','0');
INSERT INTO aq_areas VALUES('1132','0','0','','8','3','兴安区','','','0','99','0','','1','0','0');
INSERT INTO aq_areas VALUES('1133','0','0','','8','3','东山区','','','0','99','0','','1','0','0');
INSERT INTO aq_areas VALUES('1134','0','0','','8','3','兴山区','','','0','99','0','','1','0','0');
INSERT INTO aq_areas VALUES('1135','0','0','','8','3','萝北县','','','0','99','0','','1','0','0');
INSERT INTO aq_areas VALUES('1136','0','0','','8','3','绥滨县','','','0','99','0','','1','0','0');
INSERT INTO aq_areas VALUES('1137','0','0','','8','3','市辖区','','','0','100','0','','1','0','0');
INSERT INTO aq_areas VALUES('1138','0','0','','8','3','尖山区','','','0','100','0','','1','0','0');
INSERT INTO aq_areas VALUES('1139','0','0','','8','3','岭东区','','','0','100','0','','1','0','0');
INSERT INTO aq_areas VALUES('1140','0','0','','8','3','四方台区','','','0','100','0','','1','0','0');
INSERT INTO aq_areas VALUES('1141','0','0','','8','3','宝山区','','','0','100','0','','1','0','0');
INSERT INTO aq_areas VALUES('1142','0','0','','8','3','集贤县','','','0','100','0','','1','0','0');
INSERT INTO aq_areas VALUES('1143','0','0','','8','3','友谊县','','','0','100','0','','1','0','0');
INSERT INTO aq_areas VALUES('1144','0','0','','8','3','宝清县','','','0','100','0','','1','0','0');
INSERT INTO aq_areas VALUES('1145','0','0','','8','3','饶河县','','','0','100','0','','1','0','0');
INSERT INTO aq_areas VALUES('1146','0','0','','8','3','市辖区','','','0','101','0','','1','0','0');
INSERT INTO aq_areas VALUES('1147','0','0','','8','3','萨尔图区','','','0','101','0','','1','0','0');
INSERT INTO aq_areas VALUES('1148','0','0','','8','3','龙凤区','','','0','101','0','','1','0','0');
INSERT INTO aq_areas VALUES('1149','0','0','','8','3','让胡路区','','','0','101','0','','1','0','0');
INSERT INTO aq_areas VALUES('1150','0','0','','8','3','红岗区','','','0','101','0','','1','0','0');
INSERT INTO aq_areas VALUES('1151','0','0','','8','3','大同区','','','0','101','0','','1','0','0');
INSERT INTO aq_areas VALUES('1152','0','0','','8','3','肇州县','','','0','101','0','','1','0','0');
INSERT INTO aq_areas VALUES('1153','0','0','','8','3','肇源县','','','0','101','0','','1','0','0');
INSERT INTO aq_areas VALUES('1154','0','0','','8','3','林甸县','','','0','101','0','','1','0','0');
INSERT INTO aq_areas VALUES('1155','0','0','','8','3','杜尔伯特蒙古族自治县','','','0','101','0','','1','0','0');
INSERT INTO aq_areas VALUES('1156','0','0','','8','3','市辖区','','','0','102','0','','1','0','0');
INSERT INTO aq_areas VALUES('1157','0','0','','8','3','伊春区','','','0','102','0','','1','0','0');
INSERT INTO aq_areas VALUES('1158','0','0','','8','3','南岔区','','','0','102','0','','1','0','0');
INSERT INTO aq_areas VALUES('1159','0','0','','8','3','友好区','','','0','102','0','','1','0','0');
INSERT INTO aq_areas VALUES('1160','0','0','','8','3','西林区','','','0','102','0','','1','0','0');
INSERT INTO aq_areas VALUES('1161','0','0','','8','3','翠峦区','','','0','102','0','','1','0','0');
INSERT INTO aq_areas VALUES('1162','0','0','','8','3','新青区','','','0','102','0','','1','0','0');
INSERT INTO aq_areas VALUES('1163','0','0','','8','3','美溪区','','','0','102','0','','1','0','0');
INSERT INTO aq_areas VALUES('1164','0','0','','8','3','金山屯区','','','0','102','0','','1','0','0');
INSERT INTO aq_areas VALUES('1165','0','0','','8','3','五营区','','','0','102','0','','1','0','0');
INSERT INTO aq_areas VALUES('1166','0','0','','8','3','乌马河区','','','0','102','0','','1','0','0');
INSERT INTO aq_areas VALUES('1167','0','0','','8','3','汤旺河区','','','0','102','0','','1','0','0');
INSERT INTO aq_areas VALUES('1168','0','0','','8','3','带岭区','','','0','102','0','','1','0','0');
INSERT INTO aq_areas VALUES('1169','0','0','','8','3','乌伊岭区','','','0','102','0','','1','0','0');
INSERT INTO aq_areas VALUES('1170','0','0','','8','3','红星区','','','0','102','0','','1','0','0');
INSERT INTO aq_areas VALUES('1171','0','0','','8','3','上甘岭区','','','0','102','0','','1','0','0');
INSERT INTO aq_areas VALUES('1172','0','0','','8','3','嘉荫县','','','0','102','0','','1','0','0');
INSERT INTO aq_areas VALUES('1173','0','0','','8','3','铁力市','','','0','102','0','','1','0','0');
INSERT INTO aq_areas VALUES('1174','0','0','','8','3','市辖区','','','0','103','0','','1','0','0');
INSERT INTO aq_areas VALUES('1175','0','0','','8','3','永红区','','','0','103','0','','1','0','0');
INSERT INTO aq_areas VALUES('1176','0','0','','8','3','向阳区','','','0','103','0','','1','0','0');
INSERT INTO aq_areas VALUES('1177','0','0','','8','3','前进区','','','0','103','0','','1','0','0');
INSERT INTO aq_areas VALUES('1178','0','0','','8','3','东风区','','','0','103','0','','1','0','0');
INSERT INTO aq_areas VALUES('1179','0','0','','8','3','郊区','','','0','103','0','','1','0','0');
INSERT INTO aq_areas VALUES('1180','0','0','','8','3','桦南县','','','0','103','0','','1','0','0');
INSERT INTO aq_areas VALUES('1181','0','0','','8','3','桦川县','','','0','103','0','','1','0','0');
INSERT INTO aq_areas VALUES('1182','0','0','','8','3','汤原县','','','0','103','0','','1','0','0');
INSERT INTO aq_areas VALUES('1183','0','0','','8','3','抚远县','','','0','103','0','','1','0','0');
INSERT INTO aq_areas VALUES('1184','0','0','','8','3','同江市','','','0','103','0','','1','0','0');
INSERT INTO aq_areas VALUES('1185','0','0','','8','3','富锦市','','','0','103','0','','1','0','0');
INSERT INTO aq_areas VALUES('1186','0','0','','8','3','市辖区','','','0','104','0','','1','0','0');
INSERT INTO aq_areas VALUES('1187','0','0','','8','3','新兴区','','','0','104','0','','1','0','0');
INSERT INTO aq_areas VALUES('1188','0','0','','8','3','桃山区','','','0','104','0','','1','0','0');
INSERT INTO aq_areas VALUES('1189','0','0','','8','3','茄子河区','','','0','104','0','','1','0','0');
INSERT INTO aq_areas VALUES('1190','0','0','','8','3','勃利县','','','0','104','0','','1','0','0');
INSERT INTO aq_areas VALUES('1202','0','0','','8','3','市辖区','','','0','106','0','','1','0','0');
INSERT INTO aq_areas VALUES('1203','0','0','','8','3','爱辉区','','','0','106','0','','1','0','0');
INSERT INTO aq_areas VALUES('1204','0','0','','8','3','嫩江县','','','0','106','0','','1','0','0');
INSERT INTO aq_areas VALUES('1205','0','0','','8','3','逊克县','','','0','106','0','','1','0','0');
INSERT INTO aq_areas VALUES('1206','0','0','','8','3','孙吴县','','','0','106','0','','1','0','0');
INSERT INTO aq_areas VALUES('1207','0','0','','8','3','北安市','','','0','106','0','','1','0','0');
INSERT INTO aq_areas VALUES('1208','0','0','','8','3','五大连池市','','','0','106','0','','1','0','0');
INSERT INTO aq_areas VALUES('1209','0','0','','8','3','市辖区','','','0','107','0','','1','0','0');
INSERT INTO aq_areas VALUES('1210','0','0','','8','3','北林区','','','0','107','0','','1','0','0');
INSERT INTO aq_areas VALUES('1211','0','0','','8','3','望奎县','','','0','107','0','','1','0','0');
INSERT INTO aq_areas VALUES('1212','0','0','','8','3','兰西县','','','0','107','0','','1','0','0');
INSERT INTO aq_areas VALUES('1213','0','0','','8','3','青冈县','','','0','107','0','','1','0','0');
INSERT INTO aq_areas VALUES('1214','0','0','','8','3','庆安县','','','0','107','0','','1','0','0');
INSERT INTO aq_areas VALUES('1215','0','0','','8','3','明水县','','','0','107','0','','1','0','0');
INSERT INTO aq_areas VALUES('1216','0','0','','8','3','绥棱县','','','0','107','0','','1','0','0');
INSERT INTO aq_areas VALUES('1217','0','0','','8','3','安达市','','','0','107','0','','1','0','0');
INSERT INTO aq_areas VALUES('1218','0','0','','8','3','肇东市','','','0','107','0','','1','0','0');
INSERT INTO aq_areas VALUES('1219','0','0','','8','3','海伦市','','','0','107','0','','1','0','0');
INSERT INTO aq_areas VALUES('1220','0','0','','8','3','呼玛县','','','0','108','0','','1','0','0');
INSERT INTO aq_areas VALUES('1221','0','0','','8','3','塔河县','','','0','108','0','','1','0','0');
INSERT INTO aq_areas VALUES('1222','0','0','','8','3','漠河县','','','0','108','0','','1','0','0');
INSERT INTO aq_areas VALUES('1223','0','0','','8','3','黄浦区','','','0','109','0','','1','0','0');
INSERT INTO aq_areas VALUES('1224','0','0','','8','3','卢湾区','','','0','109','0','','1','0','0');
INSERT INTO aq_areas VALUES('1225','0','0','','8','3','徐汇区','','','0','109','0','','1','0','0');
INSERT INTO aq_areas VALUES('1226','0','0','','8','3','长宁区','','','0','109','0','','1','0','0');
INSERT INTO aq_areas VALUES('1227','0','0','','8','3','静安区','','','0','109','0','','1','0','0');
INSERT INTO aq_areas VALUES('1228','0','0','','8','3','普陀区','','','0','109','0','','1','0','0');
INSERT INTO aq_areas VALUES('1229','0','0','','8','3','闸北区','','','0','109','0','','1','0','0');
INSERT INTO aq_areas VALUES('1230','0','0','','8','3','虹口区','','','0','109','0','','1','0','0');
INSERT INTO aq_areas VALUES('1231','0','0','','8','3','杨浦区','','','0','109','0','','1','0','0');
INSERT INTO aq_areas VALUES('1232','0','0','','8','3','闵行区','','','0','109','0','','1','0','0');
INSERT INTO aq_areas VALUES('1233','0','0','','8','3','宝山区','','','0','109','0','','1','0','0');
INSERT INTO aq_areas VALUES('1234','0','0','','8','3','嘉定区','','','0','109','0','','1','0','0');
INSERT INTO aq_areas VALUES('1235','0','0','','8','3','浦东新区','','','0','109','0','','1','0','0');
INSERT INTO aq_areas VALUES('1236','0','0','','8','3','金山区','','','0','109','0','','1','0','0');
INSERT INTO aq_areas VALUES('1237','0','0','','8','3','松江区','','','0','109','0','','1','0','0');
INSERT INTO aq_areas VALUES('1238','0','0','','8','3','青浦区','','','0','109','0','','1','0','0');
INSERT INTO aq_areas VALUES('1239','0','0','','8','3','南汇区','','','0','109','0','','1','0','0');
INSERT INTO aq_areas VALUES('1240','0','0','','8','3','奉贤区','','','0','109','0','','1','0','0');
INSERT INTO aq_areas VALUES('1241','0','0','','9','3','崇明县','','','0','110','0','','1','0','0');
INSERT INTO aq_areas VALUES('1242','0','0','','10','3','市辖区','','','0','111','0','','1','0','0');
INSERT INTO aq_areas VALUES('1243','0','0','','10','3','玄武区','','','0','111','0','','1','0','0');
INSERT INTO aq_areas VALUES('1244','0','0','','10','3','白下区','','','0','111','0','','1','0','0');
INSERT INTO aq_areas VALUES('1245','0','0','','10','3','秦淮区','','','0','111','0','','1','0','0');
INSERT INTO aq_areas VALUES('1246','0','0','','10','3','建邺区','','','0','111','0','','1','0','0');
INSERT INTO aq_areas VALUES('1247','0','0','','10','3','鼓楼区','','','0','111','0','','1','0','0');
INSERT INTO aq_areas VALUES('1248','0','0','','10','3','下关区','','','0','111','0','','1','0','0');
INSERT INTO aq_areas VALUES('1249','0','0','','10','3','浦口区','','','0','111','0','','1','0','0');
INSERT INTO aq_areas VALUES('1250','0','0','','10','3','栖霞区','','','0','111','0','','1','0','0');
INSERT INTO aq_areas VALUES('1251','0','0','','10','3','雨花台区','','','0','111','0','','1','0','0');
INSERT INTO aq_areas VALUES('1252','0','0','','10','3','江宁区','','','0','111','0','','1','0','0');
INSERT INTO aq_areas VALUES('1253','0','0','','10','3','六合区','','','0','111','0','','1','0','0');
INSERT INTO aq_areas VALUES('1254','0','0','','10','3','溧水县','','','0','111','0','','1','0','0');
INSERT INTO aq_areas VALUES('1255','0','0','','10','3','高淳县','','','0','111','0','','1','0','0');
INSERT INTO aq_areas VALUES('1256','0','0','','10','3','市辖区','','','0','112','0','','1','0','0');
INSERT INTO aq_areas VALUES('1257','0','0','','10','3','崇安区','','','0','112','0','','1','0','0');
INSERT INTO aq_areas VALUES('1258','0','0','','10','3','南长区','','','0','112','0','','1','0','0');
INSERT INTO aq_areas VALUES('1259','0','0','','10','3','北塘区','','','0','112','0','','1','0','0');
INSERT INTO aq_areas VALUES('1260','0','0','','10','3','锡山区','','','0','112','0','','1','0','0');
INSERT INTO aq_areas VALUES('1261','0','0','','10','3','惠山区','','','0','112','0','','1','0','0');
INSERT INTO aq_areas VALUES('1262','0','0','','10','3','滨湖区','','','0','112','0','','1','0','0');
INSERT INTO aq_areas VALUES('1263','0','0','','10','3','江阴市','','','0','112','0','','1','0','0');
INSERT INTO aq_areas VALUES('1264','0','0','','10','3','宜兴市','','','0','112','0','','1','0','0');
INSERT INTO aq_areas VALUES('1265','0','0','','10','3','市辖区','','','0','113','0','','1','0','0');
INSERT INTO aq_areas VALUES('1266','0','0','','10','3','鼓楼区','','','0','113','0','','1','0','0');
INSERT INTO aq_areas VALUES('1267','0','0','','10','3','云龙区','','','0','113','0','','1','0','0');
INSERT INTO aq_areas VALUES('1268','0','0','','10','3','九里区','','','0','113','0','','1','0','0');
INSERT INTO aq_areas VALUES('1269','0','0','','10','3','贾汪区','','','0','113','0','','1','0','0');
INSERT INTO aq_areas VALUES('1270','0','0','','10','3','泉山区','','','0','113','0','','1','0','0');
INSERT INTO aq_areas VALUES('1271','0','0','','10','3','丰县','','','0','113','0','','1','0','0');
INSERT INTO aq_areas VALUES('1272','0','0','','10','3','沛县','','','0','113','0','','1','0','0');
INSERT INTO aq_areas VALUES('1273','0','0','','10','3','铜山县','','','0','113','0','','1','0','0');
INSERT INTO aq_areas VALUES('1274','0','0','','10','3','睢宁县','','','0','113','0','','1','0','0');
INSERT INTO aq_areas VALUES('1275','0','0','','10','3','新沂市','','','0','113','0','','1','0','0');
INSERT INTO aq_areas VALUES('1276','0','0','','10','3','邳州市','','','0','113','0','','1','0','0');
INSERT INTO aq_areas VALUES('1278','0','0','','10','3','市辖区','','','0','114','0','','1','0','0');
INSERT INTO aq_areas VALUES('1279','0','0','','10','3','天宁区','','','0','114','0','','1','0','0');
INSERT INTO aq_areas VALUES('1280','0','0','','10','3','钟楼区','','','0','114','0','','1','0','0');
INSERT INTO aq_areas VALUES('1281','0','0','','10','3','戚墅堰区','','','0','114','0','','1','0','0');
INSERT INTO aq_areas VALUES('1282','0','0','','10','3','新北区','','','0','114','0','','1','0','0');
INSERT INTO aq_areas VALUES('1283','0','0','','10','3','武进区','','','0','114','0','','1','0','0');
INSERT INTO aq_areas VALUES('1284','0','0','','10','3','溧阳市','','','0','114','0','','1','0','0');
INSERT INTO aq_areas VALUES('1285','0','0','','10','3','金坛市','','','0','114','0','','1','0','0');
INSERT INTO aq_areas VALUES('1286','0','0','','10','3','市辖区','','','0','115','0','','1','0','0');
INSERT INTO aq_areas VALUES('1287','0','0','','10','3','沧浪区','','','0','115','0','','1','0','0');
INSERT INTO aq_areas VALUES('1288','0','0','','10','3','平江区','','','0','115','0','','1','0','0');
INSERT INTO aq_areas VALUES('1289','0','0','','10','3','金阊区','','','0','115','0','','1','0','0');
INSERT INTO aq_areas VALUES('1290','0','0','','10','3','虎丘区','','','0','115','0','','1','0','0');
INSERT INTO aq_areas VALUES('1291','0','0','','10','3','吴中区','','','0','115','0','','1','0','0');
INSERT INTO aq_areas VALUES('1292','0','0','','10','3','相城区','','','0','115','0','','1','0','0');
INSERT INTO aq_areas VALUES('1293','0','0','','10','3','常熟市','','','0','115','0','','1','0','0');
INSERT INTO aq_areas VALUES('1294','0','0','','10','3','张家港市','','','0','115','0','','1','0','0');
INSERT INTO aq_areas VALUES('1295','0','0','','10','3','昆山市','','','0','115','0','','1','0','0');
INSERT INTO aq_areas VALUES('1296','0','0','','10','3','吴江市','','','0','115','0','','1','0','0');
INSERT INTO aq_areas VALUES('1297','0','0','','10','3','太仓市','','','0','115','0','','1','0','0');
INSERT INTO aq_areas VALUES('1298','0','0','','10','3','市辖区','','','0','116','0','','1','0','0');
INSERT INTO aq_areas VALUES('1299','0','0','','10','3','崇川区','','','0','116','0','','1','0','0');
INSERT INTO aq_areas VALUES('1300','0','0','','10','3','港闸区','','','0','116','0','','1','0','0');
INSERT INTO aq_areas VALUES('1301','0','0','','10','3','海安县','','','0','116','0','','1','0','0');
INSERT INTO aq_areas VALUES('1302','0','0','','10','3','如东县','','','0','116','0','','1','0','0');
INSERT INTO aq_areas VALUES('1303','0','0','','10','3','启东市','','','0','116','0','','1','0','0');
INSERT INTO aq_areas VALUES('1304','0','0','','10','3','如皋市','','','0','116','0','','1','0','0');
INSERT INTO aq_areas VALUES('1305','0','0','','10','3','通州市','','','0','116','0','','1','0','0');
INSERT INTO aq_areas VALUES('1306','0','0','','10','3','海门市','','','0','116','0','','1','0','0');
INSERT INTO aq_areas VALUES('1307','0','0','','10','3','市辖区','','','0','117','0','','1','0','0');
INSERT INTO aq_areas VALUES('1308','0','0','','10','3','连云区','','','0','117','0','','1','0','0');
INSERT INTO aq_areas VALUES('1309','0','0','','10','3','新浦区','','','0','117','0','','1','0','0');
INSERT INTO aq_areas VALUES('1310','0','0','','10','3','海州区','','','0','117','0','','1','0','0');
INSERT INTO aq_areas VALUES('1311','0','0','','10','3','赣榆县','','','0','117','0','','1','0','0');
INSERT INTO aq_areas VALUES('1312','0','0','','10','3','东海县','','','0','117','0','','1','0','0');
INSERT INTO aq_areas VALUES('1313','0','0','','10','3','灌云县','','','0','117','0','','1','0','0');
INSERT INTO aq_areas VALUES('1314','0','0','','10','3','灌南县','','','0','117','0','','1','0','0');
INSERT INTO aq_areas VALUES('1315','0','0','','10','3','市辖区','','','0','118','0','','1','0','0');
INSERT INTO aq_areas VALUES('1316','0','0','','10','3','清河区','','','0','118','0','','1','0','0');
INSERT INTO aq_areas VALUES('1317','0','0','','10','3','楚州区','','','0','118','0','','1','0','0');
INSERT INTO aq_areas VALUES('1318','0','0','','10','3','淮阴区','','','0','118','0','','1','0','0');
INSERT INTO aq_areas VALUES('1319','0','0','','10','3','清浦区','','','0','118','0','','1','0','0');
INSERT INTO aq_areas VALUES('1320','0','0','','10','3','涟水县','','','0','118','0','','1','0','0');
INSERT INTO aq_areas VALUES('1321','0','0','','10','3','洪泽县','','','0','118','0','','1','0','0');
INSERT INTO aq_areas VALUES('1322','0','0','','10','3','盱眙县','','','0','118','0','','1','0','0');
INSERT INTO aq_areas VALUES('1323','0','0','','10','3','金湖县','','','0','118','0','','1','0','0');
INSERT INTO aq_areas VALUES('1324','0','0','','10','3','市辖区','','','0','119','0','','1','0','0');
INSERT INTO aq_areas VALUES('1325','0','0','','10','3','亭湖区','','','0','119','0','','1','0','0');
INSERT INTO aq_areas VALUES('1326','0','0','','10','3','盐都区','','','0','119','0','','1','0','0');
INSERT INTO aq_areas VALUES('1327','0','0','','10','3','响水县','','','0','119','0','','1','0','0');
INSERT INTO aq_areas VALUES('1328','0','0','','10','3','滨海县','','','0','119','0','','1','0','0');
INSERT INTO aq_areas VALUES('1329','0','0','','10','3','阜宁县','','','0','119','0','','1','0','0');
INSERT INTO aq_areas VALUES('1330','0','0','','10','3','射阳县','','','0','119','0','','1','0','0');
INSERT INTO aq_areas VALUES('1331','0','0','','10','3','建湖县','','','0','119','0','','1','0','0');
INSERT INTO aq_areas VALUES('1332','0','0','','10','3','东台市','','','0','119','0','','1','0','0');
INSERT INTO aq_areas VALUES('1333','0','0','','10','3','大丰市','','','0','119','0','','1','0','0');
INSERT INTO aq_areas VALUES('1334','0','0','','10','3','市辖区','','','0','120','0','','1','0','0');
INSERT INTO aq_areas VALUES('1335','0','0','','10','3','广陵区','','','0','120','0','','1','0','0');
INSERT INTO aq_areas VALUES('1336','0','0','','10','3','邗江区','','','0','120','0','','1','0','0');
INSERT INTO aq_areas VALUES('1337','0','0','','10','3','郊区','','','0','120','0','','1','0','0');
INSERT INTO aq_areas VALUES('1338','0','0','','10','3','宝应县','','','0','120','0','','1','0','0');
INSERT INTO aq_areas VALUES('1339','0','0','','10','3','仪征市','','','0','120','0','','1','0','0');
INSERT INTO aq_areas VALUES('1340','0','0','','10','3','高邮市','','','0','120','0','','1','0','0');
INSERT INTO aq_areas VALUES('1341','0','0','','10','3','江都市','','','0','120','0','','1','0','0');
INSERT INTO aq_areas VALUES('1342','0','0','','10','3','市辖区','','','0','121','0','','1','0','0');
INSERT INTO aq_areas VALUES('1343','0','0','','10','3','京口区','','','0','121','0','','1','0','0');
INSERT INTO aq_areas VALUES('1344','0','0','','10','3','润州区','','','0','121','0','','1','0','0');
INSERT INTO aq_areas VALUES('1345','0','0','','10','3','丹徒区','','','0','121','0','','1','0','0');
INSERT INTO aq_areas VALUES('1346','0','0','','10','3','丹阳市','','','0','121','0','','1','0','0');
INSERT INTO aq_areas VALUES('1347','0','0','','10','3','扬中市','','','0','121','0','','1','0','0');
INSERT INTO aq_areas VALUES('1348','0','0','','10','3','句容市','','','0','121','0','','1','0','0');
INSERT INTO aq_areas VALUES('1349','0','0','','10','3','市辖区','','','0','122','0','','1','0','0');
INSERT INTO aq_areas VALUES('1350','0','0','','10','3','海陵区','','','0','122','0','','1','0','0');
INSERT INTO aq_areas VALUES('1351','0','0','','10','3','高港区','','','0','122','0','','1','0','0');
INSERT INTO aq_areas VALUES('1352','0','0','','10','3','兴化市','','','0','122','0','','1','0','0');
INSERT INTO aq_areas VALUES('1353','0','0','','10','3','靖江市','','','0','122','0','','1','0','0');
INSERT INTO aq_areas VALUES('1354','0','0','','10','3','泰兴市','','','0','122','0','','1','0','0');
INSERT INTO aq_areas VALUES('1355','0','0','','10','3','姜堰市','','','0','122','0','','1','0','0');
INSERT INTO aq_areas VALUES('1356','0','0','','10','3','市辖区','','','0','123','0','','1','0','0');
INSERT INTO aq_areas VALUES('1357','0','0','','10','3','宿城区','','','0','123','0','','1','0','0');
INSERT INTO aq_areas VALUES('1358','0','0','','10','3','宿豫区','','','0','123','0','','1','0','0');
INSERT INTO aq_areas VALUES('1359','0','0','','10','3','沭阳县','','','0','123','0','','1','0','0');
INSERT INTO aq_areas VALUES('1360','0','0','','10','3','泗阳县','','','0','123','0','','1','0','0');
INSERT INTO aq_areas VALUES('1361','0','0','','10','3','泗洪县','','','0','123','0','','1','0','0');
INSERT INTO aq_areas VALUES('1362','0','0','','11','3','市辖区','','','0','124','0','','1','0','0');
INSERT INTO aq_areas VALUES('1363','0','0','','11','3','上城区','','','0','124','0','','1','0','0');
INSERT INTO aq_areas VALUES('1364','0','0','','11','3','下城区','','','0','124','0','','1','0','0');
INSERT INTO aq_areas VALUES('1365','0','0','','11','3','江干区','','','0','124','0','','1','0','0');
INSERT INTO aq_areas VALUES('1366','0','0','','11','3','拱墅区','','','0','124','0','','1','0','0');
INSERT INTO aq_areas VALUES('1367','0','0','','11','3','西湖区','','','0','124','0','','1','0','0');
INSERT INTO aq_areas VALUES('1368','0','0','','11','3','滨江区','','','0','124','0','','1','0','0');
INSERT INTO aq_areas VALUES('1369','0','0','','11','3','萧山区','','','0','124','0','','1','0','0');
INSERT INTO aq_areas VALUES('1370','0','0','','11','3','余杭区','','','0','124','0','','1','0','0');
INSERT INTO aq_areas VALUES('1371','0','0','','11','3','桐庐县','','','0','124','0','','1','0','0');
INSERT INTO aq_areas VALUES('1372','0','0','','11','3','淳安县','','','0','124','0','','1','0','0');
INSERT INTO aq_areas VALUES('1373','0','0','','11','3','建德市','','','0','124','0','','1','0','0');
INSERT INTO aq_areas VALUES('1374','0','0','','11','3','富阳市','','','0','124','0','','1','0','0');
INSERT INTO aq_areas VALUES('1375','0','0','','11','3','临安市','','','0','124','0','','1','0','0');
INSERT INTO aq_areas VALUES('1376','0','0','','11','3','市辖区','','','0','125','0','','1','0','0');
INSERT INTO aq_areas VALUES('1377','0','0','','11','3','海曙区','','','0','125','0','','1','0','0');
INSERT INTO aq_areas VALUES('1378','0','0','','11','3','江东区','','','0','125','0','','1','0','0');
INSERT INTO aq_areas VALUES('1379','0','0','','11','3','江北区','','','0','125','0','','1','0','0');
INSERT INTO aq_areas VALUES('1380','0','0','','11','3','北仑区','','','0','125','0','','1','0','0');
INSERT INTO aq_areas VALUES('1381','0','0','','11','3','镇海区','','','0','125','0','','1','0','0');
INSERT INTO aq_areas VALUES('1382','0','0','','11','3','鄞州区','','','0','125','0','','1','0','0');
INSERT INTO aq_areas VALUES('1383','0','0','','11','3','象山县','','','0','125','0','','1','0','0');
INSERT INTO aq_areas VALUES('1384','0','0','','11','3','宁海县','','','0','125','0','','1','0','0');
INSERT INTO aq_areas VALUES('1385','0','0','','11','3','余姚市','','','0','125','0','','1','0','0');
INSERT INTO aq_areas VALUES('1386','0','0','','11','3','慈溪市','','','0','125','0','','1','0','0');
INSERT INTO aq_areas VALUES('1387','0','0','','11','3','奉化市','','','0','125','0','','1','0','0');
INSERT INTO aq_areas VALUES('1388','0','0','','11','3','市辖区','','','0','126','0','','1','0','0');
INSERT INTO aq_areas VALUES('1389','0','0','','11','3','鹿城区','','','0','126','0','','1','0','0');
INSERT INTO aq_areas VALUES('1390','0','0','','11','3','龙湾区','','','0','126','0','','1','0','0');
INSERT INTO aq_areas VALUES('1391','0','0','','11','3','瓯海区','','','0','126','0','','1','0','0');
INSERT INTO aq_areas VALUES('1392','0','0','','11','3','洞头县','','','0','126','0','','1','0','0');
INSERT INTO aq_areas VALUES('1393','0','0','','11','3','永嘉县','','','0','126','0','','1','0','0');
INSERT INTO aq_areas VALUES('1394','0','0','','11','3','平阳县','','','0','126','0','','1','0','0');
INSERT INTO aq_areas VALUES('1395','0','0','','11','3','苍南县','','','0','126','0','','1','0','0');
INSERT INTO aq_areas VALUES('1396','0','0','','11','3','文成县','','','0','126','0','','1','0','0');
INSERT INTO aq_areas VALUES('1397','0','0','','11','3','泰顺县','','','0','126','0','','1','0','0');
INSERT INTO aq_areas VALUES('1398','0','0','','11','3','瑞安市','','','0','126','0','','1','0','0');
INSERT INTO aq_areas VALUES('1399','0','0','','11','3','乐清市','','','0','126','0','','1','0','0');
INSERT INTO aq_areas VALUES('1400','0','0','','11','3','市辖区','','','0','127','0','','1','0','0');
INSERT INTO aq_areas VALUES('1401','0','0','','11','3','秀城区','','','0','127','0','','1','0','0');
INSERT INTO aq_areas VALUES('1402','0','0','','11','3','秀洲区','','','0','127','0','','1','0','0');
INSERT INTO aq_areas VALUES('1403','0','0','','11','3','嘉善县','','','0','127','0','','1','0','0');
INSERT INTO aq_areas VALUES('1404','0','0','','11','3','海盐县','','','0','127','0','','1','0','0');
INSERT INTO aq_areas VALUES('1405','0','0','','11','3','海宁市','','','0','127','0','','1','0','0');
INSERT INTO aq_areas VALUES('1406','0','0','','11','3','平湖市','','','0','127','0','','1','0','0');
INSERT INTO aq_areas VALUES('1407','0','0','','11','3','桐乡市','','','0','127','0','','1','0','0');
INSERT INTO aq_areas VALUES('1408','0','0','','11','3','市辖区','','','0','128','0','','1','0','0');
INSERT INTO aq_areas VALUES('1409','0','0','','11','3','吴兴区','','','0','128','0','','1','0','0');
INSERT INTO aq_areas VALUES('1410','0','0','','11','3','南浔区','','','0','128','0','','1','0','0');
INSERT INTO aq_areas VALUES('1411','0','0','','11','3','德清县','','','0','128','0','','1','0','0');
INSERT INTO aq_areas VALUES('1412','0','0','','11','3','长兴县','','','0','128','0','','1','0','0');
INSERT INTO aq_areas VALUES('1413','0','0','','11','3','安吉县','','','0','128','0','','1','0','0');
INSERT INTO aq_areas VALUES('1414','0','0','','11','3','市辖区','','','0','129','0','','1','0','0');
INSERT INTO aq_areas VALUES('1415','0','0','','11','3','越城区','','','0','129','0','','1','0','0');
INSERT INTO aq_areas VALUES('1416','0','0','','11','3','绍兴县','','','0','129','0','','1','0','0');
INSERT INTO aq_areas VALUES('1417','0','0','','11','3','新昌县','','','0','129','0','','1','0','0');
INSERT INTO aq_areas VALUES('1418','0','0','','11','3','诸暨市','','','0','129','0','','1','0','0');
INSERT INTO aq_areas VALUES('1419','0','0','','11','3','上虞市','','','0','129','0','','1','0','0');
INSERT INTO aq_areas VALUES('1420','0','0','','11','3','嵊州市','','','0','129','0','','1','0','0');
INSERT INTO aq_areas VALUES('1421','0','0','','11','3','市辖区','','','0','130','0','','1','0','0');
INSERT INTO aq_areas VALUES('1422','0','0','','11','3','婺城区','','','0','130','0','','1','0','0');
INSERT INTO aq_areas VALUES('1423','0','0','','11','3','金东区','','','0','130','0','','1','0','0');
INSERT INTO aq_areas VALUES('1424','0','0','','11','3','武义县','','','0','130','0','','1','0','0');
INSERT INTO aq_areas VALUES('1425','0','0','','11','3','浦江县','','','0','130','0','','1','0','0');
INSERT INTO aq_areas VALUES('1426','0','0','','11','3','磐安县','','','0','130','0','','1','0','0');
INSERT INTO aq_areas VALUES('1427','0','0','','11','3','兰溪市','','','0','130','0','','1','0','0');
INSERT INTO aq_areas VALUES('1428','0','0','','11','3','义乌市','','','0','130','0','','1','0','0');
INSERT INTO aq_areas VALUES('1429','0','0','','11','3','东阳市','','','0','130','0','','1','0','0');
INSERT INTO aq_areas VALUES('1430','0','0','','11','3','永康市','','','0','131','0','','1','0','0');
INSERT INTO aq_areas VALUES('1431','0','0','','11','3','市辖区','','','0','131','0','','1','0','0');
INSERT INTO aq_areas VALUES('1432','0','0','','11','3','柯城区','','','0','131','0','','1','0','0');
INSERT INTO aq_areas VALUES('1433','0','0','','11','3','衢江区','','','0','131','0','','1','0','0');
INSERT INTO aq_areas VALUES('1434','0','0','','11','3','常山县','','','0','131','0','','1','0','0');
INSERT INTO aq_areas VALUES('1435','0','0','','11','3','开化县','','','0','131','0','','1','0','0');
INSERT INTO aq_areas VALUES('1436','0','0','','11','3','龙游县','','','0','131','0','','1','0','0');
INSERT INTO aq_areas VALUES('1437','0','0','','11','3','江山市','','','0','131','0','','1','0','0');
INSERT INTO aq_areas VALUES('1438','0','0','','11','3','市辖区','','','0','132','0','','1','0','0');
INSERT INTO aq_areas VALUES('1439','0','0','','11','3','定海区','','','0','132','0','','1','0','0');
INSERT INTO aq_areas VALUES('1440','0','0','','11','3','普陀区','','','0','132','0','','1','0','0');
INSERT INTO aq_areas VALUES('1441','0','0','','11','3','岱山县','','','0','132','0','','1','0','0');
INSERT INTO aq_areas VALUES('1442','0','0','','11','3','嵊泗县','','','0','132','0','','1','0','0');
INSERT INTO aq_areas VALUES('1443','0','0','','11','3','市辖区','','','0','133','0','','1','0','0');
INSERT INTO aq_areas VALUES('1444','0','0','','11','3','椒江区','','','0','133','0','','1','0','0');
INSERT INTO aq_areas VALUES('1445','0','0','','11','3','黄岩区','','','0','133','0','','1','0','0');
INSERT INTO aq_areas VALUES('1446','0','0','','11','3','路桥区','','','0','133','0','','1','0','0');
INSERT INTO aq_areas VALUES('1447','0','0','','11','3','玉环县','','','0','133','0','','1','0','0');
INSERT INTO aq_areas VALUES('1448','0','0','','11','3','三门县','','','0','133','0','','1','0','0');
INSERT INTO aq_areas VALUES('1449','0','0','','11','3','天台县','','','0','133','0','','1','0','0');
INSERT INTO aq_areas VALUES('1450','0','0','','11','3','仙居县','','','0','133','0','','1','0','0');
INSERT INTO aq_areas VALUES('1451','0','0','','11','3','温岭市','','','0','133','0','','1','0','0');
INSERT INTO aq_areas VALUES('1452','0','0','','11','3','临海市','','','0','133','0','','1','0','0');
INSERT INTO aq_areas VALUES('1453','0','0','','11','3','市辖区','','','0','134','0','','1','0','0');
INSERT INTO aq_areas VALUES('1454','0','0','','11','3','莲都区','','','0','134','0','','1','0','0');
INSERT INTO aq_areas VALUES('1455','0','0','','11','3','青田县','','','0','134','0','','1','0','0');
INSERT INTO aq_areas VALUES('1456','0','0','','11','3','缙云县','','','0','134','0','','1','0','0');
INSERT INTO aq_areas VALUES('1457','0','0','','11','3','遂昌县','','','0','134','0','','1','0','0');
INSERT INTO aq_areas VALUES('1458','0','0','','11','3','松阳县','','','0','134','0','','1','0','0');
INSERT INTO aq_areas VALUES('1459','0','0','','11','3','云和县','','','0','134','0','','1','0','0');
INSERT INTO aq_areas VALUES('1460','0','0','','11','3','庆元县','','','0','134','0','','1','0','0');
INSERT INTO aq_areas VALUES('1461','0','0','','11','3','景宁畲族自治县','','','0','134','0','','1','0','0');
INSERT INTO aq_areas VALUES('1462','0','0','','11','3','龙泉市','','','0','134','0','','1','0','0');
INSERT INTO aq_areas VALUES('1463','0','0','','12','3','市辖区','','','0','135','0','','1','0','0');
INSERT INTO aq_areas VALUES('1464','0','0','','12','3','瑶海区','','','0','135','0','','1','0','0');
INSERT INTO aq_areas VALUES('1465','0','0','','12','3','庐阳区','','','0','135','0','','1','0','0');
INSERT INTO aq_areas VALUES('1466','0','0','','12','3','蜀山区','','','0','135','0','','1','0','0');
INSERT INTO aq_areas VALUES('1467','0','0','','12','3','包河区','','','0','135','0','','1','0','0');
INSERT INTO aq_areas VALUES('1468','0','0','','12','3','长丰县','','','0','135','0','','1','0','0');
INSERT INTO aq_areas VALUES('1469','0','0','','12','3','肥东县','','','0','135','0','','1','0','0');
INSERT INTO aq_areas VALUES('1470','0','0','','12','3','肥西县','','','0','135','0','','1','0','0');
INSERT INTO aq_areas VALUES('1471','0','0','','12','3','市辖区','','','0','136','0','','1','0','0');
INSERT INTO aq_areas VALUES('1472','0','0','','12','3','镜湖区','','','0','136','0','','1','0','0');
INSERT INTO aq_areas VALUES('1473','0','0','','12','3','马塘区','','','0','136','0','','1','0','0');
INSERT INTO aq_areas VALUES('1474','0','0','','12','3','新芜区','','','0','136','0','','1','0','0');
INSERT INTO aq_areas VALUES('1475','0','0','','12','3','鸠江区','','','0','136','0','','1','0','0');
INSERT INTO aq_areas VALUES('1476','0','0','','12','3','芜湖县','','','0','136','0','','1','0','0');
INSERT INTO aq_areas VALUES('1477','0','0','','12','3','繁昌县','','','0','136','0','','1','0','0');
INSERT INTO aq_areas VALUES('1478','0','0','','12','3','南陵县','','','0','136','0','','1','0','0');
INSERT INTO aq_areas VALUES('1479','0','0','','12','3','市辖区','','','0','137','0','','1','0','0');
INSERT INTO aq_areas VALUES('1480','0','0','','12','3','龙子湖区','','','0','137','0','','1','0','0');
INSERT INTO aq_areas VALUES('1481','0','0','','12','3','蚌山区','','','0','137','0','','1','0','0');
INSERT INTO aq_areas VALUES('1482','0','0','','12','3','禹会区','','','0','137','0','','1','0','0');
INSERT INTO aq_areas VALUES('1483','0','0','','12','3','淮上区','','','0','137','0','','1','0','0');
INSERT INTO aq_areas VALUES('1484','0','0','','12','3','怀远县','','','0','137','0','','1','0','0');
INSERT INTO aq_areas VALUES('1485','0','0','','12','3','五河县','','','0','137','0','','1','0','0');
INSERT INTO aq_areas VALUES('1486','0','0','','12','3','固镇县','','','0','137','0','','1','0','0');
INSERT INTO aq_areas VALUES('1487','0','0','','12','3','市辖区','','','0','138','0','','1','0','0');
INSERT INTO aq_areas VALUES('1488','0','0','','12','3','大通区','','','0','138','0','','1','0','0');
INSERT INTO aq_areas VALUES('1489','0','0','','12','3','田家庵区','','','0','138','0','','1','0','0');
INSERT INTO aq_areas VALUES('1490','0','0','','12','3','谢家集区','','','0','138','0','','1','0','0');
INSERT INTO aq_areas VALUES('1491','0','0','','12','3','八公山区','','','0','138','0','','1','0','0');
INSERT INTO aq_areas VALUES('1492','0','0','','12','3','潘集区','','','0','138','0','','1','0','0');
INSERT INTO aq_areas VALUES('1493','0','0','','12','3','凤台县','','','0','138','0','','1','0','0');
INSERT INTO aq_areas VALUES('1494','0','0','','12','3','市辖区','','','0','139','0','','1','0','0');
INSERT INTO aq_areas VALUES('1495','0','0','','12','3','金家庄区','','','0','139','0','','1','0','0');
INSERT INTO aq_areas VALUES('1496','0','0','','12','3','花山区','','','0','139','0','','1','0','0');
INSERT INTO aq_areas VALUES('1497','0','0','','12','3','雨山区','','','0','139','0','','1','0','0');
INSERT INTO aq_areas VALUES('1498','0','0','','12','3','当涂县','','','0','139','0','','1','0','0');
INSERT INTO aq_areas VALUES('1499','0','0','','12','3','市辖区','','','0','140','0','','1','0','0');
INSERT INTO aq_areas VALUES('1500','0','0','','12','3','杜集区','','','0','140','0','','1','0','0');
INSERT INTO aq_areas VALUES('1501','0','0','','12','3','相山区','','','0','140','0','','1','0','0');
INSERT INTO aq_areas VALUES('1502','0','0','','12','3','烈山区','','','0','140','0','','1','0','0');
INSERT INTO aq_areas VALUES('1503','0','0','','12','3','濉溪县','','','0','140','0','','1','0','0');
INSERT INTO aq_areas VALUES('1504','0','0','','12','3','市辖区','','','0','141','0','','1','0','0');
INSERT INTO aq_areas VALUES('1505','0','0','','12','3','铜官山区','','','0','141','0','','1','0','0');
INSERT INTO aq_areas VALUES('1506','0','0','','12','3','狮子山区','','','0','141','0','','1','0','0');
INSERT INTO aq_areas VALUES('1507','0','0','','12','3','郊区','','','0','141','0','','1','0','0');
INSERT INTO aq_areas VALUES('1508','0','0','','12','3','铜陵县','','','0','141','0','','1','0','0');
INSERT INTO aq_areas VALUES('1509','0','0','','12','3','市辖区','','','0','142','0','','1','0','0');
INSERT INTO aq_areas VALUES('1510','0','0','','12','3','迎江区','','','0','142','0','','1','0','0');
INSERT INTO aq_areas VALUES('1511','0','0','','12','3','大观区','','','0','142','0','','1','0','0');
INSERT INTO aq_areas VALUES('1512','0','0','','12','3','郊区','','','0','142','0','','1','0','0');
INSERT INTO aq_areas VALUES('1513','0','0','','12','3','怀宁县','','','0','142','0','','1','0','0');
INSERT INTO aq_areas VALUES('1514','0','0','','12','3','枞阳县','','','0','142','0','','1','0','0');
INSERT INTO aq_areas VALUES('1515','0','0','','12','3','潜山县','','','0','142','0','','1','0','0');
INSERT INTO aq_areas VALUES('1516','0','0','','12','3','太湖县','','','0','142','0','','1','0','0');
INSERT INTO aq_areas VALUES('1517','0','0','','12','3','宿松县','','','0','142','0','','1','0','0');
INSERT INTO aq_areas VALUES('1518','0','0','','12','3','望江县','','','0','142','0','','1','0','0');
INSERT INTO aq_areas VALUES('1519','0','0','','12','3','岳西县','','','0','142','0','','1','0','0');
INSERT INTO aq_areas VALUES('1520','0','0','','12','3','桐城市','','','0','142','0','','1','0','0');
INSERT INTO aq_areas VALUES('1521','0','0','','12','3','市辖区','','','0','143','0','','1','0','0');
INSERT INTO aq_areas VALUES('1522','0','0','','12','3','屯溪区','','','0','143','0','','1','0','0');
INSERT INTO aq_areas VALUES('1523','0','0','','12','3','黄山区','','','0','143','0','','1','0','0');
INSERT INTO aq_areas VALUES('1524','0','0','','12','3','徽州区','','','0','143','0','','1','0','0');
INSERT INTO aq_areas VALUES('1525','0','0','','12','3','歙县','','','0','143','0','','1','0','0');
INSERT INTO aq_areas VALUES('1526','0','0','','12','3','休宁县','','','0','143','0','','1','0','0');
INSERT INTO aq_areas VALUES('1527','0','0','','12','3','黟县','','','0','143','0','','1','0','0');
INSERT INTO aq_areas VALUES('1528','0','0','','12','3','祁门县','','','0','143','0','','1','0','0');
INSERT INTO aq_areas VALUES('1529','0','0','','12','3','市辖区','','','0','144','0','','1','0','0');
INSERT INTO aq_areas VALUES('1530','0','0','','12','3','琅琊区','','','0','144','0','','1','0','0');
INSERT INTO aq_areas VALUES('1531','0','0','','12','3','南谯区','','','0','144','0','','1','0','0');
INSERT INTO aq_areas VALUES('1532','0','0','','12','3','来安县','','','0','144','0','','1','0','0');
INSERT INTO aq_areas VALUES('1533','0','0','','12','3','全椒县','','','0','144','0','','1','0','0');
INSERT INTO aq_areas VALUES('1534','0','0','','12','3','定远县','','','0','144','0','','1','0','0');
INSERT INTO aq_areas VALUES('1535','0','0','','12','3','凤阳县','','','0','144','0','','1','0','0');
INSERT INTO aq_areas VALUES('1536','0','0','','12','3','天长市','','','0','144','0','','1','0','0');
INSERT INTO aq_areas VALUES('1537','0','0','','12','3','明光市','','','0','144','0','','1','0','0');
INSERT INTO aq_areas VALUES('1538','0','0','','12','3','市辖区','','','0','145','0','','1','0','0');
INSERT INTO aq_areas VALUES('1539','0','0','','12','3','颍州区','','','0','145','0','','1','0','0');
INSERT INTO aq_areas VALUES('1540','0','0','','12','3','颍东区','','','0','145','0','','1','0','0');
INSERT INTO aq_areas VALUES('1541','0','0','','12','3','颍泉区','','','0','145','0','','1','0','0');
INSERT INTO aq_areas VALUES('1542','0','0','','12','3','临泉县','','','0','145','0','','1','0','0');
INSERT INTO aq_areas VALUES('1543','0','0','','12','3','太和县','','','0','145','0','','1','0','0');
INSERT INTO aq_areas VALUES('1544','0','0','','12','3','阜南县','','','0','145','0','','1','0','0');
INSERT INTO aq_areas VALUES('1545','0','0','','12','3','颍上县','','','0','145','0','','1','0','0');
INSERT INTO aq_areas VALUES('1546','0','0','','12','3','界首市','','','0','145','0','','1','0','0');
INSERT INTO aq_areas VALUES('1547','0','0','','12','3','市辖区','','','0','146','0','','1','0','0');
INSERT INTO aq_areas VALUES('1548','0','0','','12','3','墉桥区','','','0','146','0','','1','0','0');
INSERT INTO aq_areas VALUES('1549','0','0','','12','3','砀山县','','','0','146','0','','1','0','0');
INSERT INTO aq_areas VALUES('1550','0','0','','12','3','萧县','','','0','146','0','','1','0','0');
INSERT INTO aq_areas VALUES('1551','0','0','','12','3','灵璧县','','','0','146','0','','1','0','0');
INSERT INTO aq_areas VALUES('1552','0','0','','12','3','泗县','','','0','146','0','','1','0','0');
INSERT INTO aq_areas VALUES('1553','0','0','','12','3','市辖区','','','0','147','0','','1','0','0');
INSERT INTO aq_areas VALUES('1554','0','0','','12','3','居巢区','','','0','147','0','','1','0','0');
INSERT INTO aq_areas VALUES('1555','0','0','','12','3','庐江县','','','0','147','0','','1','0','0');
INSERT INTO aq_areas VALUES('1556','0','0','','12','3','无为县','','','0','147','0','','1','0','0');
INSERT INTO aq_areas VALUES('1557','0','0','','12','3','含山县','','','0','147','0','','1','0','0');
INSERT INTO aq_areas VALUES('1558','0','0','','12','3','和县','','','0','147','0','','1','0','0');
INSERT INTO aq_areas VALUES('1559','0','0','','12','3','市辖区','','','0','148','0','','1','0','0');
INSERT INTO aq_areas VALUES('1560','0','0','','12','3','金安区','','','0','148','0','','1','0','0');
INSERT INTO aq_areas VALUES('1561','0','0','','12','3','裕安区','','','0','148','0','','1','0','0');
INSERT INTO aq_areas VALUES('1562','0','0','','12','3','寿县','','','0','148','0','','1','0','0');
INSERT INTO aq_areas VALUES('1563','0','0','','12','3','霍邱县','','','0','148','0','','1','0','0');
INSERT INTO aq_areas VALUES('1564','0','0','','12','3','舒城县','','','0','148','0','','1','0','0');
INSERT INTO aq_areas VALUES('1565','0','0','','12','3','金寨县','','','0','148','0','','1','0','0');
INSERT INTO aq_areas VALUES('1566','0','0','','12','3','霍山县','','','0','148','0','','1','0','0');
INSERT INTO aq_areas VALUES('1567','0','0','','12','3','市辖区','','','0','149','0','','1','0','0');
INSERT INTO aq_areas VALUES('1568','0','0','','12','3','谯城区','','','0','149','0','','1','0','0');
INSERT INTO aq_areas VALUES('1569','0','0','','12','3','涡阳县','','','0','149','0','','1','0','0');
INSERT INTO aq_areas VALUES('1570','0','0','','12','3','蒙城县','','','0','149','0','','1','0','0');
INSERT INTO aq_areas VALUES('1571','0','0','','12','3','利辛县','','','0','149','0','','1','0','0');
INSERT INTO aq_areas VALUES('1572','0','0','','12','3','市辖区','','','0','150','0','','1','0','0');
INSERT INTO aq_areas VALUES('1573','0','0','','12','3','贵池区','','','0','150','0','','1','0','0');
INSERT INTO aq_areas VALUES('1574','0','0','','12','3','东至县','','','0','150','0','','1','0','0');
INSERT INTO aq_areas VALUES('1575','0','0','','12','3','石台县','','','0','150','0','','1','0','0');
INSERT INTO aq_areas VALUES('1576','0','0','','12','3','青阳县','','','0','150','0','','1','0','0');
INSERT INTO aq_areas VALUES('1577','0','0','','12','3','市辖区','','','0','150','0','','1','0','0');
INSERT INTO aq_areas VALUES('1578','0','0','','12','3','贵池区','','','0','150','0','','1','0','0');
INSERT INTO aq_areas VALUES('1579','0','0','','12','3','东至县','','','0','150','0','','1','0','0');
INSERT INTO aq_areas VALUES('1580','0','0','','12','3','石台县','','','0','150','0','','1','0','0');
INSERT INTO aq_areas VALUES('1581','0','0','','12','3','青阳县','','','0','150','0','','1','0','0');
INSERT INTO aq_areas VALUES('1582','0','0','','12','3','市辖区','','','0','151','0','','1','0','0');
INSERT INTO aq_areas VALUES('1583','0','0','','12','3','宣州区','','','0','151','0','','1','0','0');
INSERT INTO aq_areas VALUES('1584','0','0','','12','3','郎溪县','','','0','151','0','','1','0','0');
INSERT INTO aq_areas VALUES('1585','0','0','','12','3','广德县','','','0','151','0','','1','0','0');
INSERT INTO aq_areas VALUES('1586','0','0','','12','3','泾县','','','0','151','0','','1','0','0');
INSERT INTO aq_areas VALUES('1587','0','0','','12','3','绩溪县','','','0','151','0','','1','0','0');
INSERT INTO aq_areas VALUES('1588','0','0','','12','3','旌德县','','','0','151','0','','1','0','0');
INSERT INTO aq_areas VALUES('1589','0','0','','12','3','宁国市','','','0','151','0','','1','0','0');
INSERT INTO aq_areas VALUES('1590','0','0','','13','3','市辖区','','','0','152','0','','1','0','0');
INSERT INTO aq_areas VALUES('1591','0','0','','13','3','鼓楼区','','','0','152','0','','1','0','0');
INSERT INTO aq_areas VALUES('1592','0','0','','13','3','台江区','','','0','152','0','','1','0','0');
INSERT INTO aq_areas VALUES('1593','0','0','','13','3','仓山区','','','0','152','0','','1','0','0');
INSERT INTO aq_areas VALUES('1594','0','0','','13','3','马尾区','','','0','152','0','','1','0','0');
INSERT INTO aq_areas VALUES('1595','0','0','','13','3','晋安区','','','0','152','0','','1','0','0');
INSERT INTO aq_areas VALUES('1596','0','0','','13','3','闽侯县','','','0','152','0','','1','0','0');
INSERT INTO aq_areas VALUES('1597','0','0','','13','3','连江县','','','0','152','0','','1','0','0');
INSERT INTO aq_areas VALUES('1598','0','0','','13','3','罗源县','','','0','152','0','','1','0','0');
INSERT INTO aq_areas VALUES('1599','0','0','','13','3','闽清县','','','0','152','0','','1','0','0');
INSERT INTO aq_areas VALUES('1600','0','0','','13','3','永泰县','','','0','152','0','','1','0','0');
INSERT INTO aq_areas VALUES('1601','0','0','','13','3','平潭县','','','0','152','0','','1','0','0');
INSERT INTO aq_areas VALUES('1602','0','0','','13','3','福清市','','','0','152','0','','1','0','0');
INSERT INTO aq_areas VALUES('1603','0','0','','13','3','长乐市','','','0','152','0','','1','0','0');
INSERT INTO aq_areas VALUES('1604','0','0','','13','3','市辖区','','','0','153','0','','1','0','0');
INSERT INTO aq_areas VALUES('1605','0','0','','13','3','思明区','','','0','153','0','','1','0','0');
INSERT INTO aq_areas VALUES('1606','0','0','','13','3','海沧区','','','0','153','0','','1','0','0');
INSERT INTO aq_areas VALUES('1607','0','0','','13','3','湖里区','','','0','153','0','','1','0','0');
INSERT INTO aq_areas VALUES('1608','0','0','','13','3','集美区','','','0','153','0','','1','0','0');
INSERT INTO aq_areas VALUES('1609','0','0','','13','3','同安区','','','0','153','0','','1','0','0');
INSERT INTO aq_areas VALUES('1610','0','0','','13','3','翔安区','','','0','153','0','','1','0','0');
INSERT INTO aq_areas VALUES('1611','0','0','','13','3','市辖区','','','0','154','0','','1','0','0');
INSERT INTO aq_areas VALUES('1612','0','0','','13','3','城厢区','','','0','154','0','','1','0','0');
INSERT INTO aq_areas VALUES('1613','0','0','','13','3','涵江区','','','0','154','0','','1','0','0');
INSERT INTO aq_areas VALUES('1614','0','0','','13','3','荔城区','','','0','154','0','','1','0','0');
INSERT INTO aq_areas VALUES('1615','0','0','','13','3','秀屿区','','','0','154','0','','1','0','0');
INSERT INTO aq_areas VALUES('1616','0','0','','13','3','仙游县','','','0','154','0','','1','0','0');
INSERT INTO aq_areas VALUES('1617','0','0','','13','3','市辖区','','','0','155','0','','1','0','0');
INSERT INTO aq_areas VALUES('1618','0','0','','13','3','梅列区','','','0','155','0','','1','0','0');
INSERT INTO aq_areas VALUES('1619','0','0','','13','3','三元区','','','0','155','0','','1','0','0');
INSERT INTO aq_areas VALUES('1620','0','0','','13','3','明溪县','','','0','155','0','','1','0','0');
INSERT INTO aq_areas VALUES('1621','0','0','','13','3','清流县','','','0','155','0','','1','0','0');
INSERT INTO aq_areas VALUES('1622','0','0','','13','3','宁化县','','','0','155','0','','1','0','0');
INSERT INTO aq_areas VALUES('1623','0','0','','13','3','大田县','','','0','155','0','','1','0','0');
INSERT INTO aq_areas VALUES('1624','0','0','','13','3','尤溪县','','','0','155','0','','1','0','0');
INSERT INTO aq_areas VALUES('1625','0','0','','13','3','沙县','','','0','155','0','','1','0','0');
INSERT INTO aq_areas VALUES('1626','0','0','','13','3','将乐县','','','0','155','0','','1','0','0');
INSERT INTO aq_areas VALUES('1627','0','0','','13','3','泰宁县','','','0','155','0','','1','0','0');
INSERT INTO aq_areas VALUES('1628','0','0','','13','3','建宁县','','','0','155','0','','1','0','0');
INSERT INTO aq_areas VALUES('1629','0','0','','13','3','永安市','','','0','155','0','','1','0','0');
INSERT INTO aq_areas VALUES('1630','0','0','','13','3','市辖区','','','0','156','0','','1','0','0');
INSERT INTO aq_areas VALUES('1631','0','0','','13','3','鲤城区','','','0','156','0','','1','0','0');
INSERT INTO aq_areas VALUES('1632','0','0','','13','3','丰泽区','','','0','156','0','','1','0','0');
INSERT INTO aq_areas VALUES('1633','0','0','','13','3','洛江区','','','0','156','0','','1','0','0');
INSERT INTO aq_areas VALUES('1634','0','0','','13','3','泉港区','','','0','156','0','','1','0','0');
INSERT INTO aq_areas VALUES('1635','0','0','','13','3','惠安县','','','0','156','0','','1','0','0');
INSERT INTO aq_areas VALUES('1636','0','0','','13','3','安溪县','','','0','156','0','','1','0','0');
INSERT INTO aq_areas VALUES('1637','0','0','','13','3','永春县','','','0','156','0','','1','0','0');
INSERT INTO aq_areas VALUES('1638','0','0','','13','3','德化县','','','0','156','0','','1','0','0');
INSERT INTO aq_areas VALUES('1639','0','0','','13','3','金门县','','','0','156','0','','1','0','0');
INSERT INTO aq_areas VALUES('1640','0','0','','13','3','石狮市','','','0','156','0','','1','0','0');
INSERT INTO aq_areas VALUES('1641','0','0','','13','3','晋江市','','','0','156','0','','1','0','0');
INSERT INTO aq_areas VALUES('1642','0','0','','13','3','南安市','','','0','156','0','','1','0','0');
INSERT INTO aq_areas VALUES('1643','0','0','','13','3','市辖区','','','0','157','0','','1','0','0');
INSERT INTO aq_areas VALUES('1644','0','0','','13','3','芗城区','','','0','157','0','','1','0','0');
INSERT INTO aq_areas VALUES('1645','0','0','','13','3','龙文区','','','0','157','0','','1','0','0');
INSERT INTO aq_areas VALUES('1646','0','0','','13','3','云霄县','','','0','157','0','','1','0','0');
INSERT INTO aq_areas VALUES('1647','0','0','','13','3','漳浦县','','','0','157','0','','1','0','0');
INSERT INTO aq_areas VALUES('1648','0','0','','13','3','诏安县','','','0','157','0','','1','0','0');
INSERT INTO aq_areas VALUES('1649','0','0','','13','3','长泰县','','','0','157','0','','1','0','0');
INSERT INTO aq_areas VALUES('1650','0','0','','13','3','东山县','','','0','157','0','','1','0','0');
INSERT INTO aq_areas VALUES('1651','0','0','','13','3','南靖县','','','0','157','0','','1','0','0');
INSERT INTO aq_areas VALUES('1652','0','0','','13','3','平和县','','','0','157','0','','1','0','0');
INSERT INTO aq_areas VALUES('1653','0','0','','13','3','华安县','','','0','157','0','','1','0','0');
INSERT INTO aq_areas VALUES('1654','0','0','','13','3','龙海市','','','0','157','0','','1','0','0');
INSERT INTO aq_areas VALUES('1655','0','0','','13','3','市辖区','','','0','158','0','','1','0','0');
INSERT INTO aq_areas VALUES('1656','0','0','','13','3','延平区','','','0','158','0','','1','0','0');
INSERT INTO aq_areas VALUES('1657','0','0','','13','3','顺昌县','','','0','158','0','','1','0','0');
INSERT INTO aq_areas VALUES('1658','0','0','','13','3','浦城县','','','0','158','0','','1','0','0');
INSERT INTO aq_areas VALUES('1659','0','0','','13','3','光泽县','','','0','158','0','','1','0','0');
INSERT INTO aq_areas VALUES('1660','0','0','','13','3','松溪县','','','0','158','0','','1','0','0');
INSERT INTO aq_areas VALUES('1661','0','0','','13','3','政和县','','','0','158','0','','1','0','0');
INSERT INTO aq_areas VALUES('1662','0','0','','13','3','邵武市','','','0','158','0','','1','0','0');
INSERT INTO aq_areas VALUES('1663','0','0','','13','3','武夷山市','','','0','158','0','','1','0','0');
INSERT INTO aq_areas VALUES('1664','0','0','','13','3','建瓯市','','','0','158','0','','1','0','0');
INSERT INTO aq_areas VALUES('1665','0','0','','13','3','建阳市','','','0','158','0','','1','0','0');
INSERT INTO aq_areas VALUES('1666','0','0','','13','3','市辖区','','','0','159','0','','1','0','0');
INSERT INTO aq_areas VALUES('1667','0','0','','13','3','新罗区','','','0','159','0','','1','0','0');
INSERT INTO aq_areas VALUES('1668','0','0','','13','3','长汀县','','','0','159','0','','1','0','0');
INSERT INTO aq_areas VALUES('1669','0','0','','13','3','永定县','','','0','159','0','','1','0','0');
INSERT INTO aq_areas VALUES('1670','0','0','','13','3','上杭县','','','0','159','0','','1','0','0');
INSERT INTO aq_areas VALUES('1671','0','0','','13','3','武平县','','','0','159','0','','1','0','0');
INSERT INTO aq_areas VALUES('1672','0','0','','13','3','连城县','','','0','159','0','','1','0','0');
INSERT INTO aq_areas VALUES('1673','0','0','','13','3','漳平市','','','0','159','0','','1','0','0');
INSERT INTO aq_areas VALUES('1674','0','0','','13','3','市辖区','','','0','160','0','','1','0','0');
INSERT INTO aq_areas VALUES('1675','0','0','','13','3','蕉城区','','','0','160','0','','1','0','0');
INSERT INTO aq_areas VALUES('1676','0','0','','13','3','霞浦县','','','0','160','0','','1','0','0');
INSERT INTO aq_areas VALUES('1677','0','0','','13','3','古田县','','','0','160','0','','1','0','0');
INSERT INTO aq_areas VALUES('1678','0','0','','13','3','屏南县','','','0','160','0','','1','0','0');
INSERT INTO aq_areas VALUES('1679','0','0','','13','3','寿宁县','','','0','160','0','','1','0','0');
INSERT INTO aq_areas VALUES('1680','0','0','','13','3','周宁县','','','0','160','0','','1','0','0');
INSERT INTO aq_areas VALUES('1681','0','0','','13','3','柘荣县','','','0','160','0','','1','0','0');
INSERT INTO aq_areas VALUES('1682','0','0','','13','3','福安市','','','0','160','0','','1','0','0');
INSERT INTO aq_areas VALUES('1683','0','0','','13','3','福鼎市','','','0','160','0','','1','0','0');
INSERT INTO aq_areas VALUES('1684','0','0','','14','3','市辖区','','','0','161','0','','1','0','0');
INSERT INTO aq_areas VALUES('1685','0','0','','14','3','东湖区','','','0','161','0','','1','0','0');
INSERT INTO aq_areas VALUES('1686','0','0','','14','3','西湖区','','','0','161','0','','1','0','0');
INSERT INTO aq_areas VALUES('1687','0','0','','14','3','青云谱区','','','0','161','0','','1','0','0');
INSERT INTO aq_areas VALUES('1688','0','0','','14','3','湾里区','','','0','161','0','','1','0','0');
INSERT INTO aq_areas VALUES('1689','0','0','','14','3','青山湖区','','','0','161','0','','1','0','0');
INSERT INTO aq_areas VALUES('1690','0','0','','14','3','南昌县','','','0','161','0','','1','0','0');
INSERT INTO aq_areas VALUES('1691','0','0','','14','3','新建县','','','0','161','0','','1','0','0');
INSERT INTO aq_areas VALUES('1692','0','0','','14','3','安义县','','','0','161','0','','1','0','0');
INSERT INTO aq_areas VALUES('1693','0','0','','14','3','进贤县','','','0','161','0','','1','0','0');
INSERT INTO aq_areas VALUES('1694','0','0','','14','3','市辖区','','','0','162','0','','1','0','0');
INSERT INTO aq_areas VALUES('1695','0','0','','14','3','昌江区','','','0','162','0','','1','0','0');
INSERT INTO aq_areas VALUES('1696','0','0','','14','3','珠山区','','','0','162','0','','1','0','0');
INSERT INTO aq_areas VALUES('1697','0','0','','14','3','浮梁县','','','0','162','0','','1','0','0');
INSERT INTO aq_areas VALUES('1698','0','0','','14','3','乐平市','','','0','162','0','','1','0','0');
INSERT INTO aq_areas VALUES('1699','0','0','','14','3','市辖区','','','0','163','0','','1','0','0');
INSERT INTO aq_areas VALUES('1700','0','0','','14','3','安源区','','','0','163','0','','1','0','0');
INSERT INTO aq_areas VALUES('1701','0','0','','14','3','湘东区','','','0','163','0','','1','0','0');
INSERT INTO aq_areas VALUES('1702','0','0','','14','3','莲花县','','','0','163','0','','1','0','0');
INSERT INTO aq_areas VALUES('1703','0','0','','14','3','上栗县','','','0','163','0','','1','0','0');
INSERT INTO aq_areas VALUES('1704','0','0','','14','3','芦溪县','','','0','163','0','','1','0','0');
INSERT INTO aq_areas VALUES('1718','0','0','','14','3','市辖区','','','0','164','0','','1','0','0');
INSERT INTO aq_areas VALUES('1719','0','0','','14','3','庐山区','','','0','164','0','','1','0','0');
INSERT INTO aq_areas VALUES('1720','0','0','','14','3','浔阳区','','','0','164','0','','1','0','0');
INSERT INTO aq_areas VALUES('1721','0','0','','14','3','九江县','','','0','164','0','','1','0','0');
INSERT INTO aq_areas VALUES('1722','0','0','','14','3','武宁县','','','0','164','0','','1','0','0');
INSERT INTO aq_areas VALUES('1723','0','0','','14','3','修水县','','','0','164','0','','1','0','0');
INSERT INTO aq_areas VALUES('1724','0','0','','14','3','永修县','','','0','164','0','','1','0','0');
INSERT INTO aq_areas VALUES('1725','0','0','','14','3','德安县','','','0','164','0','','1','0','0');
INSERT INTO aq_areas VALUES('1726','0','0','','14','3','星子县','','','0','164','0','','1','0','0');
INSERT INTO aq_areas VALUES('1727','0','0','','14','3','都昌县','','','0','164','0','','1','0','0');
INSERT INTO aq_areas VALUES('1728','0','0','','14','3','湖口县','','','0','164','0','','1','0','0');
INSERT INTO aq_areas VALUES('1729','0','0','','14','3','彭泽县','','','0','164','0','','1','0','0');
INSERT INTO aq_areas VALUES('1730','0','0','','14','3','瑞昌市','','','0','164','0','','1','0','0');
INSERT INTO aq_areas VALUES('1731','0','0','','14','3','市辖区','','','0','165','0','','1','0','0');
INSERT INTO aq_areas VALUES('1732','0','0','','14','3','渝水区','','','0','165','0','','1','0','0');
INSERT INTO aq_areas VALUES('1733','0','0','','14','3','分宜县','','','0','165','0','','1','0','0');
INSERT INTO aq_areas VALUES('1734','0','0','','14','3','市辖区','','','0','166','0','','1','0','0');
INSERT INTO aq_areas VALUES('1735','0','0','','14','3','月湖区','','','0','166','0','','1','0','0');
INSERT INTO aq_areas VALUES('1736','0','0','','14','3','余江县','','','0','166','0','','1','0','0');
INSERT INTO aq_areas VALUES('1737','0','0','','14','3','贵溪市','','','0','166','0','','1','0','0');
INSERT INTO aq_areas VALUES('1738','0','0','','14','3','市辖区','','','0','167','0','','1','0','0');
INSERT INTO aq_areas VALUES('1739','0','0','','14','3','章贡区','','','0','167','0','','1','0','0');
INSERT INTO aq_areas VALUES('1740','0','0','','14','3','赣县','','','0','167','0','','1','0','0');
INSERT INTO aq_areas VALUES('1741','0','0','','14','3','信丰县','','','0','167','0','','1','0','0');
INSERT INTO aq_areas VALUES('1742','0','0','','14','3','大余县','','','0','167','0','','1','0','0');
INSERT INTO aq_areas VALUES('1743','0','0','','14','3','上犹县','','','0','167','0','','1','0','0');
INSERT INTO aq_areas VALUES('1744','0','0','','14','3','崇义县','','','0','167','0','','1','0','0');
INSERT INTO aq_areas VALUES('1745','0','0','','14','3','安远县','','','0','167','0','','1','0','0');
INSERT INTO aq_areas VALUES('1746','0','0','','14','3','龙南县','','','0','167','0','','1','0','0');
INSERT INTO aq_areas VALUES('1747','0','0','','14','3','定南县','','','0','167','0','','1','0','0');
INSERT INTO aq_areas VALUES('1748','0','0','','14','3','全南县','','','0','167','0','','1','0','0');
INSERT INTO aq_areas VALUES('1749','0','0','','14','3','宁都县','','','0','167','0','','1','0','0');
INSERT INTO aq_areas VALUES('1750','0','0','','14','3','于都县','','','0','167','0','','1','0','0');
INSERT INTO aq_areas VALUES('1751','0','0','','14','3','兴国县','','','0','167','0','','1','0','0');
INSERT INTO aq_areas VALUES('1752','0','0','','14','3','会昌县','','','0','167','0','','1','0','0');
INSERT INTO aq_areas VALUES('1753','0','0','','14','3','寻乌县','','','0','167','0','','1','0','0');
INSERT INTO aq_areas VALUES('1754','0','0','','14','3','石城县','','','0','167','0','','1','0','0');
INSERT INTO aq_areas VALUES('1755','0','0','','14','3','瑞金市','','','0','167','0','','1','0','0');
INSERT INTO aq_areas VALUES('1756','0','0','','14','3','南康市','','','0','167','0','','1','0','0');
INSERT INTO aq_areas VALUES('1757','0','0','','14','3','市辖区','','','0','167','0','','1','0','0');
INSERT INTO aq_areas VALUES('1758','0','0','','14','3','章贡区','','','0','167','0','','1','0','0');
INSERT INTO aq_areas VALUES('1759','0','0','','14','3','赣县','','','0','167','0','','1','0','0');
INSERT INTO aq_areas VALUES('1760','0','0','','14','3','信丰县','','','0','167','0','','1','0','0');
INSERT INTO aq_areas VALUES('1761','0','0','','14','3','大余县','','','0','167','0','','1','0','0');
INSERT INTO aq_areas VALUES('1762','0','0','','14','3','上犹县','','','0','167','0','','1','0','0');
INSERT INTO aq_areas VALUES('1763','0','0','','14','3','崇义县','','','0','167','0','','1','0','0');
INSERT INTO aq_areas VALUES('1764','0','0','','14','3','安远县','','','0','167','0','','1','0','0');
INSERT INTO aq_areas VALUES('1765','0','0','','14','3','龙南县','','','0','167','0','','1','0','0');
INSERT INTO aq_areas VALUES('1766','0','0','','14','3','定南县','','','0','167','0','','1','0','0');
INSERT INTO aq_areas VALUES('1767','0','0','','14','3','全南县','','','0','167','0','','1','0','0');
INSERT INTO aq_areas VALUES('1768','0','0','','14','3','宁都县','','','0','167','0','','1','0','0');
INSERT INTO aq_areas VALUES('1769','0','0','','14','3','于都县','','','0','167','0','','1','0','0');
INSERT INTO aq_areas VALUES('1770','0','0','','14','3','兴国县','','','0','167','0','','1','0','0');
INSERT INTO aq_areas VALUES('1771','0','0','','14','3','会昌县','','','0','167','0','','1','0','0');
INSERT INTO aq_areas VALUES('1772','0','0','','14','3','寻乌县','','','0','167','0','','1','0','0');
INSERT INTO aq_areas VALUES('1773','0','0','','14','3','石城县','','','0','167','0','','1','0','0');
INSERT INTO aq_areas VALUES('1774','0','0','','14','3','瑞金市','','','0','167','0','','1','0','0');
INSERT INTO aq_areas VALUES('1775','0','0','','14','3','南康市','','','0','167','0','','1','0','0');
INSERT INTO aq_areas VALUES('1776','0','0','','14','3','市辖区','','','0','168','0','','1','0','0');
INSERT INTO aq_areas VALUES('1777','0','0','','14','3','吉州区','','','0','168','0','','1','0','0');
INSERT INTO aq_areas VALUES('1778','0','0','','14','3','青原区','','','0','168','0','','1','0','0');
INSERT INTO aq_areas VALUES('1779','0','0','','14','3','吉安县','','','0','168','0','','1','0','0');
INSERT INTO aq_areas VALUES('1780','0','0','','14','3','吉水县','','','0','168','0','','1','0','0');
INSERT INTO aq_areas VALUES('1781','0','0','','14','3','峡江县','','','0','168','0','','1','0','0');
INSERT INTO aq_areas VALUES('1782','0','0','','14','3','新干县','','','0','168','0','','1','0','0');
INSERT INTO aq_areas VALUES('1783','0','0','','14','3','永丰县','','','0','168','0','','1','0','0');
INSERT INTO aq_areas VALUES('1784','0','0','','14','3','泰和县','','','0','168','0','','1','0','0');
INSERT INTO aq_areas VALUES('1785','0','0','','14','3','遂川县','','','0','168','0','','1','0','0');
INSERT INTO aq_areas VALUES('1786','0','0','','14','3','万安县','','','0','168','0','','1','0','0');
INSERT INTO aq_areas VALUES('1787','0','0','','14','3','安福县','','','0','168','0','','1','0','0');
INSERT INTO aq_areas VALUES('1788','0','0','','14','3','永新县','','','0','168','0','','1','0','0');
INSERT INTO aq_areas VALUES('1789','0','0','','14','3','井冈山市','','','0','168','0','','1','0','0');
INSERT INTO aq_areas VALUES('1790','0','0','','14','3','市辖区','','','0','169','0','','1','0','0');
INSERT INTO aq_areas VALUES('1791','0','0','','14','3','袁州区','','','0','169','0','','1','0','0');
INSERT INTO aq_areas VALUES('1792','0','0','','14','3','奉新县','','','0','169','0','','1','0','0');
INSERT INTO aq_areas VALUES('1793','0','0','','14','3','万载县','','','0','169','0','','1','0','0');
INSERT INTO aq_areas VALUES('1794','0','0','','14','3','上高县','','','0','169','0','','1','0','0');
INSERT INTO aq_areas VALUES('1795','0','0','','14','3','宜丰县','','','0','169','0','','1','0','0');
INSERT INTO aq_areas VALUES('1796','0','0','','14','3','靖安县','','','0','169','0','','1','0','0');
INSERT INTO aq_areas VALUES('1797','0','0','','14','3','铜鼓县','','','0','169','0','','1','0','0');
INSERT INTO aq_areas VALUES('1798','0','0','','14','3','丰城市','','','0','169','0','','1','0','0');
INSERT INTO aq_areas VALUES('1799','0','0','','14','3','樟树市','','','0','169','0','','1','0','0');
INSERT INTO aq_areas VALUES('1800','0','0','','14','3','高安市','','','0','169','0','','1','0','0');
INSERT INTO aq_areas VALUES('1801','0','0','','14','3','市辖区','','','0','170','0','','1','0','0');
INSERT INTO aq_areas VALUES('1802','0','0','','14','3','临川区','','','0','170','0','','1','0','0');
INSERT INTO aq_areas VALUES('1803','0','0','','14','3','南城县','','','0','170','0','','1','0','0');
INSERT INTO aq_areas VALUES('1804','0','0','','14','3','黎川县','','','0','170','0','','1','0','0');
INSERT INTO aq_areas VALUES('1805','0','0','','14','3','南丰县','','','0','170','0','','1','0','0');
INSERT INTO aq_areas VALUES('1806','0','0','','14','3','崇仁县','','','0','170','0','','1','0','0');
INSERT INTO aq_areas VALUES('1807','0','0','','14','3','乐安县','','','0','170','0','','1','0','0');
INSERT INTO aq_areas VALUES('1808','0','0','','14','3','宜黄县','','','0','170','0','','1','0','0');
INSERT INTO aq_areas VALUES('1809','0','0','','14','3','金溪县','','','0','170','0','','1','0','0');
INSERT INTO aq_areas VALUES('1810','0','0','','14','3','资溪县','','','0','170','0','','1','0','0');
INSERT INTO aq_areas VALUES('1811','0','0','','14','3','东乡县','','','0','170','0','','1','0','0');
INSERT INTO aq_areas VALUES('1812','0','0','','14','3','广昌县','','','0','170','0','','1','0','0');
INSERT INTO aq_areas VALUES('1813','0','0','','14','3','市辖区','','','0','171','0','','1','0','0');
INSERT INTO aq_areas VALUES('1814','0','0','','14','3','信州区','','','0','171','0','','1','0','0');
INSERT INTO aq_areas VALUES('1815','0','0','','14','3','上饶县','','','0','171','0','','1','0','0');
INSERT INTO aq_areas VALUES('1816','0','0','','14','3','广丰县','','','0','171','0','','1','0','0');
INSERT INTO aq_areas VALUES('1817','0','0','','14','3','玉山县','','','0','171','0','','1','0','0');
INSERT INTO aq_areas VALUES('1818','0','0','','14','3','铅山县','','','0','171','0','','1','0','0');
INSERT INTO aq_areas VALUES('1819','0','0','','14','3','横峰县','','','0','171','0','','1','0','0');
INSERT INTO aq_areas VALUES('1820','0','0','','14','3','弋阳县','','','0','171','0','','1','0','0');
INSERT INTO aq_areas VALUES('1821','0','0','','14','3','余干县','','','0','171','0','','1','0','0');
INSERT INTO aq_areas VALUES('1822','0','0','','14','3','鄱阳县','','','0','171','0','','1','0','0');
INSERT INTO aq_areas VALUES('1823','0','0','','14','3','万年县','','','0','171','0','','1','0','0');
INSERT INTO aq_areas VALUES('1824','0','0','','14','3','婺源县','','','0','171','0','','1','0','0');
INSERT INTO aq_areas VALUES('1825','0','0','','14','3','德兴市','','','0','171','0','','1','0','0');
INSERT INTO aq_areas VALUES('1826','0','0','','15','3','市辖区','','','0','172','0','','1','0','0');
INSERT INTO aq_areas VALUES('1827','0','0','','15','3','历下区','','','0','172','0','','1','0','0');
INSERT INTO aq_areas VALUES('1828','0','0','','15','3','市中区','','','0','172','0','','1','0','0');
INSERT INTO aq_areas VALUES('1829','0','0','','15','3','槐荫区','','','0','172','0','','1','0','0');
INSERT INTO aq_areas VALUES('1830','0','0','','15','3','天桥区','','','0','172','0','','1','0','0');
INSERT INTO aq_areas VALUES('1831','0','0','','15','3','历城区','','','0','172','0','','1','0','0');
INSERT INTO aq_areas VALUES('1832','0','0','','15','3','长清区','','','0','172','0','','1','0','0');
INSERT INTO aq_areas VALUES('1833','0','0','','15','3','平阴县','','','0','172','0','','1','0','0');
INSERT INTO aq_areas VALUES('1834','0','0','','15','3','济阳县','','','0','172','0','','1','0','0');
INSERT INTO aq_areas VALUES('1835','0','0','','15','3','商河县','','','0','172','0','','1','0','0');
INSERT INTO aq_areas VALUES('1836','0','0','','15','3','章丘市','','','0','172','0','','1','0','0');
INSERT INTO aq_areas VALUES('1837','0','0','','15','3','市辖区','','','0','173','0','','1','0','0');
INSERT INTO aq_areas VALUES('1838','0','0','','15','3','市南区','','','0','173','0','','1','0','0');
INSERT INTO aq_areas VALUES('1839','0','0','','15','3','市北区','','','0','173','0','','1','0','0');
INSERT INTO aq_areas VALUES('1840','0','0','','15','3','四方区','','','0','173','0','','1','0','0');
INSERT INTO aq_areas VALUES('1841','0','0','','15','3','黄岛区','','','0','173','0','','1','0','0');
INSERT INTO aq_areas VALUES('1842','0','0','','15','3','崂山区','','','0','173','0','','1','0','0');
INSERT INTO aq_areas VALUES('1843','0','0','','15','3','李沧区','','','0','173','0','','1','0','0');
INSERT INTO aq_areas VALUES('1844','0','0','','15','3','城阳区','','','0','173','0','','1','0','0');
INSERT INTO aq_areas VALUES('1845','0','0','','15','3','胶州市','','','0','173','0','','1','0','0');
INSERT INTO aq_areas VALUES('1846','0','0','','15','3','即墨市','','','0','173','0','','1','0','0');
INSERT INTO aq_areas VALUES('1847','0','0','','15','3','平度市','','','0','173','0','','1','0','0');
INSERT INTO aq_areas VALUES('1848','0','0','','15','3','胶南市','','','0','173','0','','1','0','0');
INSERT INTO aq_areas VALUES('1849','0','0','','15','3','莱西市','','','0','173','0','','1','0','0');
INSERT INTO aq_areas VALUES('1850','0','0','','15','3','市辖区','','','0','174','0','','1','0','0');
INSERT INTO aq_areas VALUES('1851','0','0','','15','3','淄川区','','','0','174','0','','1','0','0');
INSERT INTO aq_areas VALUES('1852','0','0','','15','3','张店区','','','0','174','0','','1','0','0');
INSERT INTO aq_areas VALUES('1853','0','0','','15','3','博山区','','','0','174','0','','1','0','0');
INSERT INTO aq_areas VALUES('1854','0','0','','15','3','临淄区','','','0','174','0','','1','0','0');
INSERT INTO aq_areas VALUES('1855','0','0','','15','3','周村区','','','0','174','0','','1','0','0');
INSERT INTO aq_areas VALUES('1856','0','0','','15','3','桓台县','','','0','174','0','','1','0','0');
INSERT INTO aq_areas VALUES('1857','0','0','','15','3','高青县','','','0','174','0','','1','0','0');
INSERT INTO aq_areas VALUES('1858','0','0','','15','3','沂源县','','','0','174','0','','1','0','0');
INSERT INTO aq_areas VALUES('1859','0','0','','15','3','市辖区','','','0','175','0','','1','0','0');
INSERT INTO aq_areas VALUES('1860','0','0','','15','3','市中区','','','0','175','0','','1','0','0');
INSERT INTO aq_areas VALUES('1861','0','0','','15','3','薛城区','','','0','175','0','','1','0','0');
INSERT INTO aq_areas VALUES('1862','0','0','','15','3','峄城区','','','0','175','0','','1','0','0');
INSERT INTO aq_areas VALUES('1863','0','0','','15','3','台儿庄区','','','0','175','0','','1','0','0');
INSERT INTO aq_areas VALUES('1864','0','0','','15','3','山亭区','','','0','175','0','','1','0','0');
INSERT INTO aq_areas VALUES('1865','0','0','','15','3','滕州市','','','0','175','0','','1','0','0');
INSERT INTO aq_areas VALUES('1866','0','0','','15','3','市辖区','','','0','176','0','','1','0','0');
INSERT INTO aq_areas VALUES('1867','0','0','','15','3','东营区','','','0','176','0','','1','0','0');
INSERT INTO aq_areas VALUES('1868','0','0','','15','3','河口区','','','0','176','0','','1','0','0');
INSERT INTO aq_areas VALUES('1869','0','0','','15','3','垦利县','','','0','176','0','','1','0','0');
INSERT INTO aq_areas VALUES('1870','0','0','','15','3','利津县','','','0','176','0','','1','0','0');
INSERT INTO aq_areas VALUES('1871','0','0','','15','3','广饶县','','','0','176','0','','1','0','0');
INSERT INTO aq_areas VALUES('1872','0','0','','15','3','市辖区','','','0','177','0','','1','0','0');
INSERT INTO aq_areas VALUES('1873','0','0','','15','3','芝罘区','','','0','177','0','','1','0','0');
INSERT INTO aq_areas VALUES('1874','0','0','','15','3','福山区','','','0','177','0','','1','0','0');
INSERT INTO aq_areas VALUES('1875','0','0','','15','3','牟平区','','','0','177','0','','1','0','0');
INSERT INTO aq_areas VALUES('1876','0','0','','15','3','莱山区','','','0','177','0','','1','0','0');
INSERT INTO aq_areas VALUES('1877','0','0','','15','3','长岛县','','','0','177','0','','1','0','0');
INSERT INTO aq_areas VALUES('1878','0','0','','15','3','龙口市','','','0','177','0','','1','0','0');
INSERT INTO aq_areas VALUES('1879','0','0','','15','3','莱阳市','','','0','177','0','','1','0','0');
INSERT INTO aq_areas VALUES('1880','0','0','','15','3','莱州市','','','0','177','0','','1','0','0');
INSERT INTO aq_areas VALUES('1881','0','0','','15','3','蓬莱市','','','0','177','0','','1','0','0');
INSERT INTO aq_areas VALUES('1882','0','0','','15','3','招远市','','','0','177','0','','1','0','0');
INSERT INTO aq_areas VALUES('1883','0','0','','15','3','栖霞市','','','0','177','0','','1','0','0');
INSERT INTO aq_areas VALUES('1884','0','0','','15','3','海阳市','','','0','177','0','','1','0','0');
INSERT INTO aq_areas VALUES('1885','0','0','','15','3','市辖区','','','0','178','0','','1','0','0');
INSERT INTO aq_areas VALUES('1886','0','0','','15','3','潍城区','','','0','178','0','','1','0','0');
INSERT INTO aq_areas VALUES('1887','0','0','','15','3','寒亭区','','','0','178','0','','1','0','0');
INSERT INTO aq_areas VALUES('1888','0','0','','15','3','坊子区','','','0','178','0','','1','0','0');
INSERT INTO aq_areas VALUES('1889','0','0','','15','3','奎文区','','','0','178','0','','1','0','0');
INSERT INTO aq_areas VALUES('1890','0','0','','15','3','临朐县','','','0','178','0','','1','0','0');
INSERT INTO aq_areas VALUES('1891','0','0','','15','3','昌乐县','','','0','178','0','','1','0','0');
INSERT INTO aq_areas VALUES('1892','0','0','','15','3','青州市','','','0','178','0','','1','0','0');
INSERT INTO aq_areas VALUES('1893','0','0','','15','3','诸城市','','','0','178','0','','1','0','0');
INSERT INTO aq_areas VALUES('1894','0','0','','15','3','寿光市','','','0','178','0','','1','0','0');
INSERT INTO aq_areas VALUES('1895','0','0','','15','3','安丘市','','','0','178','0','','1','0','0');
INSERT INTO aq_areas VALUES('1896','0','0','','15','3','高密市','','','0','178','0','','1','0','0');
INSERT INTO aq_areas VALUES('1897','0','0','','15','3','昌邑市','','','0','178','0','','1','0','0');
INSERT INTO aq_areas VALUES('1898','0','0','','15','3','市辖区','','','0','179','0','','1','0','0');
INSERT INTO aq_areas VALUES('1899','0','0','','15','3','市中区','','','0','179','0','','1','0','0');
INSERT INTO aq_areas VALUES('1900','0','0','','15','3','任城区','','','0','179','0','','1','0','0');
INSERT INTO aq_areas VALUES('1901','0','0','','15','3','微山县','','','0','179','0','','1','0','0');
INSERT INTO aq_areas VALUES('1902','0','0','','15','3','鱼台县','','','0','179','0','','1','0','0');
INSERT INTO aq_areas VALUES('1903','0','0','','15','3','金乡县','','','0','179','0','','1','0','0');
INSERT INTO aq_areas VALUES('1904','0','0','','15','3','嘉祥县','','','0','179','0','','1','0','0');
INSERT INTO aq_areas VALUES('1905','0','0','','15','3','汶上县','','','0','179','0','','1','0','0');
INSERT INTO aq_areas VALUES('1906','0','0','','15','3','泗水县','','','0','179','0','','1','0','0');
INSERT INTO aq_areas VALUES('1907','0','0','','15','3','梁山县','','','0','179','0','','1','0','0');
INSERT INTO aq_areas VALUES('1908','0','0','','15','3','曲阜市','','','0','179','0','','1','0','0');
INSERT INTO aq_areas VALUES('1909','0','0','','15','3','兖州市','','','0','179','0','','1','0','0');
INSERT INTO aq_areas VALUES('1910','0','0','','15','3','邹城市','','','0','179','0','','1','0','0');
INSERT INTO aq_areas VALUES('1911','0','0','','15','3','市辖区','','','0','180','0','','1','0','0');
INSERT INTO aq_areas VALUES('1912','0','0','','15','3','泰山区','','','0','180','0','','1','0','0');
INSERT INTO aq_areas VALUES('1913','0','0','','15','3','岱岳区','','','0','180','0','','1','0','0');
INSERT INTO aq_areas VALUES('1914','0','0','','15','3','宁阳县','','','0','180','0','','1','0','0');
INSERT INTO aq_areas VALUES('1915','0','0','','15','3','东平县','','','0','180','0','','1','0','0');
INSERT INTO aq_areas VALUES('1916','0','0','','15','3','新泰市','','','0','180','0','','1','0','0');
INSERT INTO aq_areas VALUES('1917','0','0','','15','3','肥城市','','','0','180','0','','1','0','0');
INSERT INTO aq_areas VALUES('1918','0','0','','15','3','市辖区','','','0','181','0','','1','0','0');
INSERT INTO aq_areas VALUES('1919','0','0','','15','3','环翠区','','','0','181','0','','1','0','0');
INSERT INTO aq_areas VALUES('1920','0','0','','15','3','文登市','','','0','181','0','','1','0','0');
INSERT INTO aq_areas VALUES('1921','0','0','','15','3','荣成市','','','0','181','0','','1','0','0');
INSERT INTO aq_areas VALUES('1922','0','0','','15','3','乳山市','','','0','181','0','','1','0','0');
INSERT INTO aq_areas VALUES('1923','0','0','','15','3','市辖区','','','0','182','0','','1','0','0');
INSERT INTO aq_areas VALUES('1924','0','0','','15','3','东港区','','','0','182','0','','1','0','0');
INSERT INTO aq_areas VALUES('1925','0','0','','15','3','岚山区','','','0','182','0','','1','0','0');
INSERT INTO aq_areas VALUES('1926','0','0','','15','3','五莲县','','','0','182','0','','1','0','0');
INSERT INTO aq_areas VALUES('1927','0','0','','15','3','莒县','','','0','182','0','','1','0','0');
INSERT INTO aq_areas VALUES('1928','0','0','','15','3','市辖区','','','0','183','0','','1','0','0');
INSERT INTO aq_areas VALUES('1929','0','0','','15','3','莱城区','','','0','183','0','','1','0','0');
INSERT INTO aq_areas VALUES('1930','0','0','','15','3','钢城区','','','0','183','0','','1','0','0');
INSERT INTO aq_areas VALUES('1931','0','0','','15','3','兰山区','','','0','184','0','','1','0','0');
INSERT INTO aq_areas VALUES('1932','0','0','','15','3','罗庄区','','','0','184','0','','1','0','0');
INSERT INTO aq_areas VALUES('1933','0','0','','15','3','河东区','','','0','184','0','','1','0','0');
INSERT INTO aq_areas VALUES('1934','0','0','','15','3','沂南县','','','0','184','0','','1','0','0');
INSERT INTO aq_areas VALUES('1935','0','0','','15','3','郯城县','','','0','184','0','','1','0','0');
INSERT INTO aq_areas VALUES('1936','0','0','','15','3','沂水县','','','0','184','0','','1','0','0');
INSERT INTO aq_areas VALUES('1937','0','0','','15','3','苍山县','','','0','184','0','','1','0','0');
INSERT INTO aq_areas VALUES('1938','0','0','','15','3','费县','','','0','184','0','','1','0','0');
INSERT INTO aq_areas VALUES('1939','0','0','','15','3','平邑县','','','0','184','0','','1','0','0');
INSERT INTO aq_areas VALUES('1940','0','0','','15','3','莒南县','','','0','184','0','','1','0','0');
INSERT INTO aq_areas VALUES('1941','0','0','','15','3','蒙阴县','','','0','184','0','','1','0','0');
INSERT INTO aq_areas VALUES('1942','0','0','','15','3','临沭县','','','0','184','0','','1','0','0');

DROP TABLE IF EXISTS aq_areatypes;
CREATE TABLE `aq_areatypes` (
  `id` smallint(3) NOT NULL AUTO_INCREMENT,
  `name` varchar(64) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

INSERT INTO aq_areatypes VALUES('1','华北');
INSERT INTO aq_areatypes VALUES('2','东北');
INSERT INTO aq_areatypes VALUES('3','华东');
INSERT INTO aq_areatypes VALUES('4','华中');
INSERT INTO aq_areatypes VALUES('5','西南');
INSERT INTO aq_areatypes VALUES('6','西北');
INSERT INTO aq_areatypes VALUES('7','华南');
INSERT INTO aq_areatypes VALUES('8','特区');

DROP TABLE IF EXISTS aq_attachments;
CREATE TABLE `aq_attachments` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `attachmenttype_id` smallint(3) NOT NULL DEFAULT '0',
  `member_id` int(10) NOT NULL DEFAULT '-1',
  `file_name` char(100) NOT NULL DEFAULT '',
  `attachment` char(255) NOT NULL DEFAULT '',
  `title` char(100) NOT NULL DEFAULT '',
  `description` text,
  `file_type` char(50) NOT NULL DEFAULT '0',
  `file_size` mediumint(8) NOT NULL DEFAULT '0',
  `thumb` varchar(100) NOT NULL DEFAULT '',
  `remote` varchar(100) NOT NULL DEFAULT '',
  `is_image` tinyint(1) NOT NULL DEFAULT '1',
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `created` int(10) NOT NULL DEFAULT '0',
  `modified` int(10) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;


DROP TABLE IF EXISTS aq_attachmenttypes;
CREATE TABLE `aq_attachmenttypes` (
  `id` tinyint(1) NOT NULL AUTO_INCREMENT,
  `name` varchar(25) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;


DROP TABLE IF EXISTS aq_banned;
CREATE TABLE `aq_banned` (
  `id` smallint(6) NOT NULL AUTO_INCREMENT,
  `ip1` char(3) NOT NULL DEFAULT '',
  `ip2` char(3) NOT NULL DEFAULT '',
  `ip3` char(3) NOT NULL DEFAULT '',
  `ip4` char(3) NOT NULL DEFAULT '',
  `expiration` int(10) NOT NULL DEFAULT '0',
  `created` int(10) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `ip1` (`ip1`,`ip2`,`ip3`,`ip4`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;


DROP TABLE IF EXISTS aq_brands;
CREATE TABLE `aq_brands` (
  `id` smallint(6) NOT NULL AUTO_INCREMENT,
  `member_id` int(10) NOT NULL DEFAULT '-1',
  `company_id` int(10) NOT NULL DEFAULT '-1',
  `type_id` smallint(3) NOT NULL DEFAULT '0',
  `if_commend` tinyint(1) NOT NULL DEFAULT '0',
  `name` varchar(100) NOT NULL DEFAULT '',
  `alias_name` varchar(100) NOT NULL DEFAULT '',
  `picture` varchar(255) NOT NULL DEFAULT '',
  `description` text NOT NULL,
  `hits` smallint(6) NOT NULL DEFAULT '0',
  `ranks` smallint(3) NOT NULL DEFAULT '0',
  `letter` varchar(2) NOT NULL DEFAULT '',
  `created` int(10) NOT NULL DEFAULT '0',
  `modified` int(10) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=utf8;

INSERT INTO aq_brands VALUES('1','-1','0','1','1','palm','palm','sample/brand/1.jpg','','1','0','p','1325314541','0');
INSERT INTO aq_brands VALUES('2','-1','0','2','1','LG','LG','sample/brand/2.jpg','','1','0','l','1325314541','0');
INSERT INTO aq_brands VALUES('3','-1','0','4','0','摩托罗拉','motolola','sample/brand/3.jpg','','1','0','m','1325314541','0');
INSERT INTO aq_brands VALUES('4','-1','1','4','1','诺基亚','nokia','sample/brand/4.jpg','','1','0','n','1325314541','0');
INSERT INTO aq_brands VALUES('13','1','1','4','1','飞利浦','philips','sample/brand/5.jpg','','0','0','f','1325314541','0');
INSERT INTO aq_brands VALUES('14','-1','1','4','0','三星','samsung','sample/brand/6.jpg','','0','0','s','1325314541','0');
INSERT INTO aq_brands VALUES('7','-1','1','4','0','松下','panasonic','sample/brand/7.jpg','','0','0','s','1325314541','0');
INSERT INTO aq_brands VALUES('8','-1','1','4','0','索爱','sony','sample/brand/8.jpg','','0','0','s','1325314541','0');
INSERT INTO aq_brands VALUES('9','-1','1','3','0','西门子','simens','sample/brand/9.jpg','','0','0','x','1325314541','0');
INSERT INTO aq_brands VALUES('10','1','1','2','0','阿尔卡特','alcatel','sample/brand/10.jpg','asdf','0','0','a','1325314541','0');
INSERT INTO aq_brands VALUES('11','-1','1','0','0','阿迪达斯','Adidas','sample/brand/11.jpg','','0','0','','0','0');
INSERT INTO aq_brands VALUES('12','-1','1','0','0','三得利','','sample/brand/12.jpg','','0','0','','0','0');
INSERT INTO aq_brands VALUES('5','-1','1','0','0','中国移动','','sample/brand/13.jpg','','0','0','','0','0');
INSERT INTO aq_brands VALUES('6','-1','1','0','0','知蜂','','sample/brand/14.jpg','','0','0','','0','0');

DROP TABLE IF EXISTS aq_brandtypes;
CREATE TABLE `aq_brandtypes` (
  `id` smallint(3) NOT NULL AUTO_INCREMENT,
  `parent_id` smallint(3) NOT NULL DEFAULT '0',
  `level` tinyint(1) NOT NULL DEFAULT '1',
  `name` varchar(100) NOT NULL DEFAULT '',
  `display_order` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;

INSERT INTO aq_brandtypes VALUES('1','0','1','装饰建材','0');
INSERT INTO aq_brandtypes VALUES('2','0','1','服装鞋帽','0');
INSERT INTO aq_brandtypes VALUES('3','0','1','家具日用','0');
INSERT INTO aq_brandtypes VALUES('4','0','1','食品','0');
INSERT INTO aq_brandtypes VALUES('5','0','1','家电数码','0');
INSERT INTO aq_brandtypes VALUES('6','0','1','汽车房产','0');
INSERT INTO aq_brandtypes VALUES('7','0','1','餐饮娱乐','0');
INSERT INTO aq_brandtypes VALUES('8','0','1','机械化工','0');
INSERT INTO aq_brandtypes VALUES('9','5','2','洗衣机','0');
INSERT INTO aq_brandtypes VALUES('10','5','2','饮水机','0');
INSERT INTO aq_brandtypes VALUES('11','5','2','电脑','0');
INSERT INTO aq_brandtypes VALUES('12','5','2','手机','0');

DROP TABLE IF EXISTS aq_companies;
CREATE TABLE `aq_companies` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `member_id` int(10) NOT NULL DEFAULT '0',
  `cache_spacename` varchar(255) NOT NULL DEFAULT '',
  `cache_membergroupid` smallint(3) NOT NULL DEFAULT '0',
  `cache_credits` smallint(6) NOT NULL DEFAULT '0',
  `topleveldomain` varchar(255) NOT NULL DEFAULT '',
  `industry_id` smallint(6) NOT NULL DEFAULT '0',
  `area_id` char(6) NOT NULL DEFAULT '0',
  `type_id` tinyint(2) NOT NULL DEFAULT '0',
  `name` char(255) NOT NULL DEFAULT '',
  `description` text,
  `english_name` char(100) NOT NULL DEFAULT '',
  `adwords` char(25) NOT NULL DEFAULT '',
  `keywords` varchar(50) NOT NULL DEFAULT '',
  `boss_name` varchar(25) NOT NULL DEFAULT '',
  `manage_type` varchar(25) NOT NULL DEFAULT '',
  `year_annual` tinyint(2) NOT NULL DEFAULT '0',
  `property` tinyint(1) NOT NULL DEFAULT '0',
  `configs` text,
  `bank_from` varchar(50) NOT NULL DEFAULT '',
  `bank_account` varchar(50) NOT NULL DEFAULT '',
  `main_prod` varchar(100) NOT NULL DEFAULT '',
  `employee_amount` varchar(25) NOT NULL DEFAULT '',
  `found_date` char(10) NOT NULL DEFAULT '0',
  `reg_fund` tinyint(2) NOT NULL DEFAULT '0',
  `reg_address` varchar(200) NOT NULL DEFAULT '',
  `address` varchar(200) NOT NULL DEFAULT '',
  `zipcode` varchar(15) NOT NULL DEFAULT '',
  `main_brand` varchar(100) NOT NULL DEFAULT '',
  `main_market` varchar(200) NOT NULL DEFAULT '',
  `main_biz_place` varchar(50) NOT NULL DEFAULT '',
  `main_customer` varchar(200) NOT NULL DEFAULT '',
  `link_man` varchar(25) NOT NULL DEFAULT '',
  `link_man_gender` tinyint(1) NOT NULL DEFAULT '0',
  `position` tinyint(1) NOT NULL DEFAULT '0',
  `tel` varchar(25) NOT NULL DEFAULT '',
  `fax` varchar(25) NOT NULL DEFAULT '',
  `mobile` varchar(25) NOT NULL DEFAULT '',
  `email` varchar(100) NOT NULL DEFAULT '',
  `site_url` varchar(100) NOT NULL DEFAULT '',
  `picture` varchar(50) NOT NULL DEFAULT '',
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `first_letter` char(2) NOT NULL DEFAULT '',
  `if_commend` tinyint(1) NOT NULL DEFAULT '0',
  `clicked` int(5) NOT NULL DEFAULT '1',
  `created` int(10) NOT NULL DEFAULT '0',
  `modified` int(10) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `member_id` (`member_id`),
  KEY `name` (`name`),
  KEY `status` (`status`),
  KEY `picture` (`picture`),
  KEY `industry_id1` (`industry_id`,`area_id`),
  KEY `status_2` (`status`),
  KEY `picture_2` (`picture`,`status`),
  KEY `name_2` (`name`),
  KEY `name_3` (`name`),
  KEY `status_3` (`status`),
  KEY `picture_3` (`picture`),
  KEY `industry_id1_2` (`industry_id`,`area_id`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;

INSERT INTO aq_companies VALUES('1','1','admin','9','0','','1','3','1','友邻电子商务','友邻B2B','UALINK E-Commerce','','','张三','1','3','1','a:1:{s:12:\"templet_name\";b:0;}','北京银行','12342143','','4','946684800','5','北京','北京市东城区','100010','友邻','1,2,3','北京市','各企事业单位','张三','1','4','(086)10-41235678','(086)10-41235678','130123456782','service@phpb2b.com','http://www.phpb2b.com/','sample/company/1.jpg','1','A','1','1','1325314541','1325314541');
INSERT INTO aq_companies VALUES('2','1','admin2','9','0','','1','3','1','北京友邻电子商务科技有限公司','北京友邻电子商务科技有限公司','','','','','1','0','1','','','','','','','5','北京','北京市东城区','100010','友邻','2,3,4','北京市','','','1','4','(086)10-41235678','(086)10-41235678','','service@phpb2b.com','http://www.phpb2b.com/','sample/company/1.jpg','1','A','1','1','1325314541','0');
INSERT INTO aq_companies VALUES('3','2','athena1','9','0','','1','3','1','东莞市创忆塑胶原料有限公司','此为演示数据，不保证数据的真实性','','','','','1','0','1','','','','','','','0','','','','','','','','','1','7','','','','','','sample/company/no.jpg','1','A','1','1','1325314541','0');
INSERT INTO aq_companies VALUES('4','2','athena2','9','0','','1','2','1','宁波市江东兴丰铜制有限公司','此为演示数据，不保证数据的真实性','','','','','1','0','1','','','','','','','0','','','','','','','','','1','7','','','','','','sample/company/no.jpg','1','A','1','1','1325314541','0');
INSERT INTO aq_companies VALUES('5','2','','9','0','','1','2','1','深圳市信诺达电子科技有限公司','此为演示数据，不保证数据的真实性','','','','','1','0','1','','','','','','','0','','','','','','','','','1','7','','','','','','sample/company/no.jpg','1','A','1','1','1325314541','0');
INSERT INTO aq_companies VALUES('6','2','','9','0','','2','2','1','杭州约拿摩擦材料有限公司','此为演示数据，不保证数据的真实性','','','','','1','0','1','','','','','','','0','','','','','','','','','1','7','','','','','','sample/company/no.jpg','1','A','1','1','1325314541','0');
INSERT INTO aq_companies VALUES('7','2','','9','0','','2','2','1','深圳华联发贸易有限公司','此为演示数据，不保证数据的真实性','','','','','1','0','1','','','','','','','0','','','','','','','','','1','7','','','','','','sample/company/no.jpg','1','A','1','1','1325314541','0');
INSERT INTO aq_companies VALUES('8','2','','9','0','','2','1','1','北京圣轩建筑装饰有限公司','此为演示数据，不保证数据的真实性','','','','','1','0','1','','','','','','','0','','','','','','','','','1','7','','','','','','sample/company/no.jpg','1','A','1','1','1325314541','0');
INSERT INTO aq_companies VALUES('9','2','','9','0','','2','1','1','上海西博思流体控制有限公司','此为演示数据，不保证数据的真实性','','','','','1','0','1','','','','','','','0','','','','','','','','','1','7','','','','','','sample/company/no.jpg','1','A','1','1','1325314541','0');
INSERT INTO aq_companies VALUES('10','2','athena8','9','0','','3','1','1','四川锦明建材有限公司','此为演示数据，不保证数据的真实性','','','','','1','0','1','','','','','','','0','','','','','','','','','1','7','','','','','','sample/company/no.jpg','1','A','1','1','1325314541','0');
INSERT INTO aq_companies VALUES('11','2','athena9','9','0','','3','1','1','苏州百硕自动化环保设备有限公司','此为演示数据，不保证数据的真实性','','','','','1','0','1','','','','','','','0','','','','','','','','','1','7','','','','','','sample/company/no.jpg','1','A','1','1','1325314541','0');

DROP TABLE IF EXISTS aq_companyfields;
CREATE TABLE `aq_companyfields` (
  `company_id` int(10) NOT NULL DEFAULT '0',
  `map_longitude` varchar(25) NOT NULL DEFAULT '',
  `map_latitude` varchar(25) NOT NULL DEFAULT '',
  PRIMARY KEY (`company_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;


DROP TABLE IF EXISTS aq_companynewses;
CREATE TABLE `aq_companynewses` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `member_id` int(10) NOT NULL DEFAULT '-1',
  `company_id` int(10) NOT NULL DEFAULT '-1',
  `type_id` smallint(3) NOT NULL DEFAULT '0',
  `title` varchar(100) NOT NULL DEFAULT '',
  `content` text,
  `picture` varchar(100) NOT NULL DEFAULT '',
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `clicked` int(5) NOT NULL DEFAULT '1',
  `created` int(11) NOT NULL DEFAULT '0',
  `modified` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;


DROP TABLE IF EXISTS aq_companynewstypes;
CREATE TABLE `aq_companynewstypes` (
  `id` smallint(3) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL DEFAULT '',
  `display_order` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;


DROP TABLE IF EXISTS aq_companytypes;
CREATE TABLE `aq_companytypes` (
  `id` smallint(3) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL DEFAULT '',
  `display_order` tinyint(1) NOT NULL DEFAULT '0',
  `url` varchar(100) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;


DROP TABLE IF EXISTS aq_countries;
CREATE TABLE `aq_countries` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL DEFAULT '',
  `picture` varchar(100) NOT NULL DEFAULT '0',
  `display_order` smallint(3) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

INSERT INTO aq_countries VALUES('1','中国','cn.gif','0');
INSERT INTO aq_countries VALUES('3','香港','hk.gif','0');

DROP TABLE IF EXISTS aq_dicts;
CREATE TABLE `aq_dicts` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `dicttype_id` smallint(6) NOT NULL DEFAULT '0',
  `extend_dicttypeid` varchar(25) NOT NULL DEFAULT '',
  `word` varchar(255) NOT NULL DEFAULT '',
  `word_name` varchar(255) NOT NULL DEFAULT '',
  `digest` varchar(255) NOT NULL DEFAULT '',
  `content` text,
  `picture` varchar(255) NOT NULL DEFAULT '',
  `refer` tinytext,
  `hits` int(10) NOT NULL DEFAULT '1',
  `closed` tinyint(1) NOT NULL DEFAULT '0',
  `if_commend` tinyint(1) NOT NULL DEFAULT '0',
  `created` int(10) NOT NULL DEFAULT '0',
  `modified` int(10) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

INSERT INTO aq_dicts VALUES('1','7','','成本加运费','Cost and Freight','','','','','7','0','0','1325314541','0');
INSERT INTO aq_dicts VALUES('2','1','','多式联运','','','','','','4','0','0','1325314541','0');

DROP TABLE IF EXISTS aq_dicttypes;
CREATE TABLE `aq_dicttypes` (
  `id` smallint(6) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL DEFAULT '',
  `parent_id` smallint(6) NOT NULL DEFAULT '0',
  `display_order` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=utf8;

INSERT INTO aq_dicttypes VALUES('1','物流知识','0','0');
INSERT INTO aq_dicttypes VALUES('2','物流管理','0','0');
INSERT INTO aq_dicttypes VALUES('3','物流公司','0','0');
INSERT INTO aq_dicttypes VALUES('4','法律法规','0','0');
INSERT INTO aq_dicttypes VALUES('5','电子商务','0','0');
INSERT INTO aq_dicttypes VALUES('6','相关知识','0','0');
INSERT INTO aq_dicttypes VALUES('7','常用术语','1','0');
INSERT INTO aq_dicttypes VALUES('8','运输知识','1','0');
INSERT INTO aq_dicttypes VALUES('9','仓储知识','1','0');
INSERT INTO aq_dicttypes VALUES('10','物流设备','1','0');
INSERT INTO aq_dicttypes VALUES('11','物流保险','1','0');
INSERT INTO aq_dicttypes VALUES('12','第三方物流','1','0');
INSERT INTO aq_dicttypes VALUES('13','供应链','1','0');
INSERT INTO aq_dicttypes VALUES('14','其他','1','0');

DROP TABLE IF EXISTS aq_expomembers;
CREATE TABLE `aq_expomembers` (
  `id` smallint(6) NOT NULL AUTO_INCREMENT,
  `expo_id` smallint(6) NOT NULL DEFAULT '0',
  `member_id` int(10) NOT NULL DEFAULT '-1',
  `company_id` int(10) NOT NULL DEFAULT '-1',
  `created` int(10) NOT NULL DEFAULT '0',
  `modified` int(10) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `expo_id` (`expo_id`,`member_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;


DROP TABLE IF EXISTS aq_expos;
CREATE TABLE `aq_expos` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `expotype_id` smallint(3) NOT NULL DEFAULT '0',
  `name` varchar(100) NOT NULL DEFAULT '',
  `description` text,
  `begin_time` int(10) NOT NULL DEFAULT '0',
  `end_time` int(10) NOT NULL DEFAULT '0',
  `industry_ids` varchar(100) NOT NULL DEFAULT '0',
  `industry_id` smallint(6) NOT NULL DEFAULT '0',
  `area_id` smallint(6) NOT NULL DEFAULT '0',
  `address` varchar(100) NOT NULL DEFAULT '',
  `stadium_name` varchar(100) NOT NULL DEFAULT '',
  `refresh_method` varchar(100) NOT NULL DEFAULT '',
  `scope` varchar(100) NOT NULL DEFAULT '',
  `hosts` varchar(255) NOT NULL DEFAULT '',
  `organisers` varchar(255) NOT NULL DEFAULT '',
  `co_organisers` varchar(255) NOT NULL DEFAULT '',
  `sponsors` varchar(255) NOT NULL DEFAULT '',
  `contacts` text,
  `important_notice` text,
  `picture` varchar(100) NOT NULL DEFAULT '',
  `if_commend` tinyint(1) NOT NULL DEFAULT '0',
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `hits` smallint(6) NOT NULL DEFAULT '1',
  `created` int(10) NOT NULL DEFAULT '0',
  `modified` int(10) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `status` (`status`),
  KEY `status_2` (`status`),
  KEY `status_3` (`status`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;

INSERT INTO aq_expos VALUES('1','1','第14届中国美容博览会开幕','','1293936472','1296528472','0','0','0','','','','','','','','','','','','0','1','1','1325314541','0');
INSERT INTO aq_expos VALUES('2','1','第29届广州国际美博会看点精彩呈现','','1293936472','1296528472','0','0','0','','','','','','','','','','','','0','1','1','1325314541','0');
INSERT INTO aq_expos VALUES('3','1','第十届中国国际营养健康产业博览会','','1293936472','1296528472','0','0','0','','','','','','','','','','','','0','1','1','1325314541','0');
INSERT INTO aq_expos VALUES('4','1','中国上海产业用纺织品及非织造布展览会','','1293936472','1296528472','0','0','0','','','','','','','','','','','','0','1','1','1325314541','0');
INSERT INTO aq_expos VALUES('5','2','日本东京国际鞋类及皮革制品展览会','','1293936472','1296528472','0','0','0','','','','','','','','','','','','0','1','1','1325314541','0');
INSERT INTO aq_expos VALUES('6','2','第二十一届中国国际玻璃工业技术展览会','','1293936472','1296528472','0','0','0','','','','','','','','','','','','0','1','1','1325314541','0');
INSERT INTO aq_expos VALUES('7','1','第五届中国内蒙古食品加工与包装机械展览会','第七届中国国际食品加工与包装设备展览会','1293936472','1296528472','0','0','0','','','','','','','','','','','','0','1','1','1325314541','0');
INSERT INTO aq_expos VALUES('8','2','第七届中国国际食品加工与包装设备展览会','第五届中国内蒙古食品加工与包装机械展览会','1293936472','1296528472','0','0','0','','','','','','','','','','','','0','1','1','1325314541','0');
INSERT INTO aq_expos VALUES('9','1','第十届中国北京国际绿色食品及有机食品展览会','第十届中国北京国际绿色食品及有机食品展览会','1293936472','1296528472','0','0','0','','','','','','','','','','','','0','1','1','1325314541','0');
INSERT INTO aq_expos VALUES('10','2','第十五届中国国际建筑装饰材料展览会','第十五届中国国际建筑装饰材料展览会','1293936472','1296528472','0','0','0','','','','','','','','','','','','0','1','1','1325314541','0');
INSERT INTO aq_expos VALUES('12','1','第十四届苏州住宅产业博览会','苏州住宅产业博览会是苏州规模最大、规格最高的地产展','1293936472','1296528472','0','0','0','','','','','','','','','','','sample/other/fair-1.jpg','1','1','1','1325314541','0');

DROP TABLE IF EXISTS aq_expostadiums;
CREATE TABLE `aq_expostadiums` (
  `id` smallint(6) NOT NULL AUTO_INCREMENT,
  `sa` varchar(100) DEFAULT '',
  `country_id` smallint(6) DEFAULT '0',
  `province_id` smallint(6) DEFAULT '0',
  `city_id` smallint(6) DEFAULT '0',
  `sb` varchar(200) DEFAULT '',
  `sc` varchar(150) DEFAULT '',
  `sd` varchar(150) DEFAULT '',
  `se` varchar(150) DEFAULT '',
  `sf` varchar(150) DEFAULT '',
  `sg` text,
  `sh` smallint(6) DEFAULT '0',
  `created` int(10) DEFAULT NULL,
  `modified` int(10) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;


DROP TABLE IF EXISTS aq_expotypes;
CREATE TABLE `aq_expotypes` (
  `id` smallint(3) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL DEFAULT '',
  `created` int(10) NOT NULL DEFAULT '0',
  `modified` int(10) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

INSERT INTO aq_expotypes VALUES('1','国内展会','0','0');
INSERT INTO aq_expotypes VALUES('2','国际展会','0','0');

DROP TABLE IF EXISTS aq_favorites;
CREATE TABLE `aq_favorites` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `member_id` int(10) NOT NULL DEFAULT '-1',
  `target_id` int(10) NOT NULL DEFAULT '-1',
  `type_id` tinyint(1) NOT NULL DEFAULT '0',
  `created` int(10) NOT NULL DEFAULT '0',
  `modified` int(10) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `member_id` (`member_id`,`target_id`,`type_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;


DROP TABLE IF EXISTS aq_feeds;
CREATE TABLE `aq_feeds` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `type_id` tinyint(1) NOT NULL DEFAULT '0',
  `type` varchar(100) NOT NULL DEFAULT '',
  `member_id` int(10) NOT NULL DEFAULT '0',
  `username` varchar(100) NOT NULL DEFAULT '',
  `data` text NOT NULL,
  `created` int(10) NOT NULL DEFAULT '0',
  `modified` int(10) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;


DROP TABLE IF EXISTS aq_formattributes;
CREATE TABLE `aq_formattributes` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `type_id` tinyint(1) NOT NULL DEFAULT '0',
  `form_id` smallint(3) NOT NULL DEFAULT '0',
  `formitem_id` smallint(3) NOT NULL DEFAULT '0',
  `primary_id` int(10) NOT NULL DEFAULT '-1',
  `attribute` text,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;


DROP TABLE IF EXISTS aq_formitems;
CREATE TABLE `aq_formitems` (
  `id` smallint(3) NOT NULL AUTO_INCREMENT,
  `form_id` smallint(3) NOT NULL DEFAULT '0',
  `title` varchar(100) NOT NULL DEFAULT '',
  `description` text,
  `identifier` varchar(50) NOT NULL DEFAULT '',
  `type` enum('checkbox','select','radio','calendar','url','image','textarea','email','number','text') NOT NULL DEFAULT 'text',
  `rules` text,
  `display_order` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

INSERT INTO aq_formitems VALUES('1','0','产品数量','','product_quantity','text','','0');
INSERT INTO aq_formitems VALUES('2','0','包装说明','','packing','text','','0');
INSERT INTO aq_formitems VALUES('3','0','价格说明','','product_price','text','','0');
INSERT INTO aq_formitems VALUES('4','0','产品规格','','product_specification','text','','0');
INSERT INTO aq_formitems VALUES('5','0','产品编号','','serial_number','text','','0');
INSERT INTO aq_formitems VALUES('6','0','产地','','production_place','text','','0');
INSERT INTO aq_formitems VALUES('7','0','品牌','','brand_name','text','','0');

DROP TABLE IF EXISTS aq_forms;
CREATE TABLE `aq_forms` (
  `id` smallint(3) NOT NULL AUTO_INCREMENT,
  `type_id` tinyint(1) NOT NULL DEFAULT '0',
  `name` varchar(100) NOT NULL DEFAULT '',
  `items` text,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

INSERT INTO aq_forms VALUES('1','1','供求自定义字段','1,2,3,4,5,6');
INSERT INTO aq_forms VALUES('2','2','产品自定义字段','1,2,3,4,5,6,7');

DROP TABLE IF EXISTS aq_friendlinks;
CREATE TABLE `aq_friendlinks` (
  `id` smallint(3) NOT NULL AUTO_INCREMENT,
  `friendlinktype_id` tinyint(1) NOT NULL DEFAULT '0',
  `industry_id` smallint(6) NOT NULL DEFAULT '0',
  `area_id` smallint(6) NOT NULL DEFAULT '0',
  `title` varchar(50) NOT NULL DEFAULT '',
  `logo` varchar(100) NOT NULL DEFAULT '',
  `url` varchar(50) NOT NULL DEFAULT '',
  `priority` smallint(3) NOT NULL DEFAULT '0',
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `description` text,
  `created` int(10) NOT NULL DEFAULT '0',
  `modified` int(10) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

INSERT INTO aq_friendlinks VALUES('1','1','0','0','PHPB2B','','http://www.phpb2b.com/','0','1','','1293936472','0');
INSERT INTO aq_friendlinks VALUES('2','2','0','0','PHPB2B 演示','','http://demo.phpb2b.com/','0','1','','1293936472','0');

DROP TABLE IF EXISTS aq_friendlinktypes;
CREATE TABLE `aq_friendlinktypes` (
  `id` tinyint(1) NOT NULL AUTO_INCREMENT,
  `name` varchar(25) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

INSERT INTO aq_friendlinktypes VALUES('1','友情链接');
INSERT INTO aq_friendlinktypes VALUES('2','合作伙伴');

DROP TABLE IF EXISTS aq_goods;
CREATE TABLE `aq_goods` (
  `id` smallint(6) NOT NULL AUTO_INCREMENT,
  `type_id` smallint(3) NOT NULL DEFAULT '0',
  `name` varchar(255) NOT NULL DEFAULT '',
  `description` text,
  `price` float(9,2) NOT NULL DEFAULT '0.00',
  `closed` tinyint(1) NOT NULL DEFAULT '1',
  `picture` varchar(100) NOT NULL DEFAULT '',
  `if_commend` tinyint(1) NOT NULL DEFAULT '0',
  `created` int(10) NOT NULL DEFAULT '0',
  `modified` int(10) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

INSERT INTO aq_goods VALUES('2','1','高级会员升级','','0.02','1','','0','1293936472','1300889949');
INSERT INTO aq_goods VALUES('1','1','普通会员升级','','0.01','1','','0','1293936472','1300889956');

DROP TABLE IF EXISTS aq_goodtypes;
CREATE TABLE `aq_goodtypes` (
  `id` smallint(3) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL DEFAULT '',
  `display_order` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

INSERT INTO aq_goodtypes VALUES('1','商业服务','0');
INSERT INTO aq_goodtypes VALUES('2','充值','0');
INSERT INTO aq_goodtypes VALUES('3','广告位','0');

DROP TABLE IF EXISTS aq_helps;
CREATE TABLE `aq_helps` (
  `id` smallint(6) NOT NULL AUTO_INCREMENT,
  `helptype_id` smallint(3) NOT NULL DEFAULT '0',
  `title` varchar(100) NOT NULL DEFAULT '',
  `content` text,
  `highlight` tinyint(1) NOT NULL DEFAULT '0',
  `created` int(10) NOT NULL DEFAULT '0',
  `modified` int(10) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

INSERT INTO aq_helps VALUES('1','1','登陆指导','','0','0','0');
INSERT INTO aq_helps VALUES('2','2','注册指导','','0','0','0');

DROP TABLE IF EXISTS aq_helptypes;
CREATE TABLE `aq_helptypes` (
  `id` smallint(3) NOT NULL AUTO_INCREMENT,
  `title` varchar(100) NOT NULL DEFAULT '',
  `description` varchar(100) NOT NULL DEFAULT '',
  `parent_id` smallint(3) NOT NULL DEFAULT '0',
  `level` tinyint(1) NOT NULL DEFAULT '0',
  `display_order` tinyint(1) NOT NULL DEFAULT '0',
  `created` int(10) NOT NULL DEFAULT '0',
  `modified` int(10) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

INSERT INTO aq_helptypes VALUES('1','站内帮助','','0','0','0','0','0');
INSERT INTO aq_helptypes VALUES('2','站外帮助','','0','0','0','0','0');

DROP TABLE IF EXISTS aq_industries;
CREATE TABLE `aq_industries` (
  `id` smallint(6) NOT NULL AUTO_INCREMENT,
  `attachment_id` int(9) NOT NULL DEFAULT '0',
  `industrytype_id` smallint(3) NOT NULL DEFAULT '0',
  `child_ids` text,
  `name` varchar(255) NOT NULL DEFAULT '',
  `url` varchar(255) NOT NULL DEFAULT '',
  `alias_name` varchar(255) NOT NULL DEFAULT '',
  `highlight` tinyint(1) NOT NULL DEFAULT '0',
  `parent_id` smallint(6) NOT NULL DEFAULT '0',
  `top_parentid` smallint(6) NOT NULL DEFAULT '0',
  `level` tinyint(1) NOT NULL DEFAULT '1',
  `display_order` tinyint(1) NOT NULL DEFAULT '0',
  `description` text,
  `available` tinyint(1) NOT NULL DEFAULT '1',
  `created` int(10) NOT NULL DEFAULT '0',
  `modified` int(10) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=275 DEFAULT CHARSET=utf8;

INSERT INTO aq_industries VALUES('1','0','0','','服装服饰','','','0','0','0','1','0','','1','0','0');
INSERT INTO aq_industries VALUES('2','0','0','','日用百货','','','0','0','0','1','0','','1','0','0');
INSERT INTO aq_industries VALUES('3','0','0','','机电设备','','','0','0','0','1','0','','1','0','0');
INSERT INTO aq_industries VALUES('4','0','0','','原材料','','','0','0','0','1','0','','1','0','0');
INSERT INTO aq_industries VALUES('5','0','0','','其他服务','','','0','0','0','1','0','','1','0','0');
INSERT INTO aq_industries VALUES('6','0','0','','女装','','','0','1','1','2','0','','1','0','0');
INSERT INTO aq_industries VALUES('7','0','0','','男装','','','0','1','1','2','0','','1','0','0');
INSERT INTO aq_industries VALUES('8','0','0','','童装','','','0','1','1','2','0','','1','0','0');
INSERT INTO aq_industries VALUES('9','0','0','','内衣','','','0','1','1','2','0','','1','0','0');
INSERT INTO aq_industries VALUES('10','0','0','','鞋','','','0','1','1','2','0','','1','0','0');
INSERT INTO aq_industries VALUES('11','0','0','','运动服','','','0','1','1','2','0','','1','0','0');
INSERT INTO aq_industries VALUES('12','0','0','','纺织','','','0','1','1','2','0','','1','0','0');
INSERT INTO aq_industries VALUES('13','0','0','','饰品','','','0','1','1','2','0','','1','0','0');
INSERT INTO aq_industries VALUES('14','0','0','','瑞丽','','','0','6','1','3','0','','1','0','0');
INSERT INTO aq_industries VALUES('15','0','0','','韩货','','','0','6','1','3','0','','1','0','0');
INSERT INTO aq_industries VALUES('16','0','0','','春装','','','0','6','1','3','0','','1','0','0');
INSERT INTO aq_industries VALUES('17','0','0','','外套','','','0','6','1','3','0','','1','0','0');
INSERT INTO aq_industries VALUES('18','0','0','','牛仔裤','','','0','6','1','3','0','','1','0','0');
INSERT INTO aq_industries VALUES('19','0','0','','商务','','','0','7','1','3','0','','1','0','0');
INSERT INTO aq_industries VALUES('20','0','0','','休闲','','','0','7','1','3','0','','1','0','0');
INSERT INTO aq_industries VALUES('21','0','0','','英伦','','','0','7','1','3','0','','1','0','0');
INSERT INTO aq_industries VALUES('22','0','0','','外贸','','','0','7','1','3','0','','1','0','0');
INSERT INTO aq_industries VALUES('23','0','0','','品牌','','','0','7','1','3','0','','1','0','0');
INSERT INTO aq_industries VALUES('24','0','0','','婴儿装','','','0','8','1','3','0','','1','0','0');
INSERT INTO aq_industries VALUES('25','0','0','','品牌','','','0','8','1','3','0','','1','0','0');
INSERT INTO aq_industries VALUES('26','0','0','','1到3岁','','','0','8','1','3','0','','1','0','0');
INSERT INTO aq_industries VALUES('27','0','0','','孕妇装','','','0','8','1','3','0','','1','0','0');
INSERT INTO aq_industries VALUES('28','0','0','','文胸','','','0','9','1','3','0','','1','0','0');
INSERT INTO aq_industries VALUES('29','0','0','','内裤','','','0','9','1','3','0','','1','0','0');
INSERT INTO aq_industries VALUES('30','0','0','','情趣','','','0','9','1','3','0','','1','0','0');
INSERT INTO aq_industries VALUES('31','0','0','','品牌','','','0','9','1','3','0','','1','0','0');
INSERT INTO aq_industries VALUES('32','0','0','','套装','','','0','9','1','3','0','','1','0','0');
INSERT INTO aq_industries VALUES('33','0','0','','女鞋','','','0','10','1','3','0','','1','0','0');
INSERT INTO aq_industries VALUES('34','0','0','','男鞋','','','0','10','1','3','0','','1','0','0');
INSERT INTO aq_industries VALUES('35','0','0','','童鞋','','','0','10','1','3','0','','1','0','0');
INSERT INTO aq_industries VALUES('36','0','0','','外贸鞋','','','0','10','1','3','0','','1','0','0');
INSERT INTO aq_industries VALUES('37','0','0','','品牌鞋','','','0','10','1','3','0','','1','0','0');
INSERT INTO aq_industries VALUES('38','0','0','','腰带','','','0','11','1','3','0','','1','0','0');
INSERT INTO aq_industries VALUES('39','0','0','','女包','','','0','11','1','3','0','','1','0','0');
INSERT INTO aq_industries VALUES('40','0','0','','男包','','','0','11','1','3','0','','1','0','0');
INSERT INTO aq_industries VALUES('41','0','0','','运动包','','','0','11','1','3','0','','1','0','0');
INSERT INTO aq_industries VALUES('42','0','0','','衬料','','','0','12','1','3','0','','1','0','0');
INSERT INTO aq_industries VALUES('43','0','0','','皮革','','','0','12','1','3','0','','1','0','0');
INSERT INTO aq_industries VALUES('44','0','0','','纽扣','','','0','12','1','3','0','','1','0','0');
INSERT INTO aq_industries VALUES('45','0','0','','拉链','','','0','12','1','3','0','','1','0','0');
INSERT INTO aq_industries VALUES('46','0','0','','花边','','','0','12','1','3','0','','1','0','0');
INSERT INTO aq_industries VALUES('47','0','0','','头饰','','','0','13','1','3','0','','1','0','0');
INSERT INTO aq_industries VALUES('48','0','0','','耳饰','','','0','13','1','3','0','','1','0','0');
INSERT INTO aq_industries VALUES('49','0','0','','项饰','','','0','13','1','3','0','','1','0','0');
INSERT INTO aq_industries VALUES('50','0','0','','手饰','','','0','13','1','3','0','','1','0','0');
INSERT INTO aq_industries VALUES('51','0','0','','韩版','','','0','13','1','3','0','','1','0','0');
INSERT INTO aq_industries VALUES('52','0','0','','家居','','','0','2','2','2','0','','1','0','0');
INSERT INTO aq_industries VALUES('53','0','0','','家装','','','0','2','2','2','0','','1','0','0');
INSERT INTO aq_industries VALUES('54','0','0','','礼品','','','0','2','2','2','0','','1','0','0');
INSERT INTO aq_industries VALUES('55','0','0','','玩具','','','0','2','2','2','0','','1','0','0');
INSERT INTO aq_industries VALUES('56','0','0','','办公文教','','','0','2','2','2','0','','1','0','0');
INSERT INTO aq_industries VALUES('57','0','0','','运动休闲','','','0','2','2','2','0','','1','0','0');
INSERT INTO aq_industries VALUES('58','0','0','','食品','','','0','2','2','2','0','','1','0','0');
INSERT INTO aq_industries VALUES('59','0','0','','家电','','','0','2','2','2','0','','1','0','0');
INSERT INTO aq_industries VALUES('60','0','0','','数码','','','0','2','2','2','0','','1','0','0');
INSERT INTO aq_industries VALUES('61','0','0','','通讯','','','0','2','2','2','0','','1','0','0');
INSERT INTO aq_industries VALUES('62','0','0','','护肤','','','0','52','2','3','0','','1','0','0');
INSERT INTO aq_industries VALUES('63','0','0','','彩妆','','','0','52','2','3','0','','1','0','0');
INSERT INTO aq_industries VALUES('64','0','0','','日化','','','0','52','2','3','0','','1','0','0');
INSERT INTO aq_industries VALUES('65','0','0','','母婴','','','0','52','2','3','0','','1','0','0');
INSERT INTO aq_industries VALUES('66','0','0','','百货','','','0','52','2','3','0','','1','0','0');
INSERT INTO aq_industries VALUES('67','0','0','','灯具','','','0','53','2','3','0','','1','0','0');
INSERT INTO aq_industries VALUES('68','0','0','','家具','','','0','53','2','3','0','','1','0','0');
INSERT INTO aq_industries VALUES('69','0','0','','壁纸','','','0','53','2','3','0','','1','0','0');
INSERT INTO aq_industries VALUES('70','0','0','','家饰','','','0','53','2','3','0','','1','0','0');
INSERT INTO aq_industries VALUES('71','0','0','','家纺','','','0','53','2','3','0','','1','0','0');
INSERT INTO aq_industries VALUES('72','0','0','','十字绣','','','0','54','2','3','0','','1','0','0');
INSERT INTO aq_industries VALUES('73','0','0','','新奇特','','','0','54','2','3','0','','1','0','0');
INSERT INTO aq_industries VALUES('74','0','0','','居家','','','0','54','2','3','0','','1','0','0');
INSERT INTO aq_industries VALUES('75','0','0','','节庆','','','0','54','2','3','0','','1','0','0');
INSERT INTO aq_industries VALUES('76','0','0','','公仔','','','0','55','2','3','0','','1','0','0');
INSERT INTO aq_industries VALUES('77','0','0','','积木','','','0','55','2','3','0','','1','0','0');
INSERT INTO aq_industries VALUES('78','0','0','','动漫','','','0','55','2','3','0','','1','0','0');
INSERT INTO aq_industries VALUES('79','0','0','','模型','','','0','55','2','3','0','','1','0','0');
INSERT INTO aq_industries VALUES('80','0','0','','益智','','','0','55','2','3','0','','1','0','0');
INSERT INTO aq_industries VALUES('81','0','0','','文具','','','0','56','2','3','0','','1','0','0');
INSERT INTO aq_industries VALUES('82','0','0','','笔具','','','0','56','2','3','0','','1','0','0');
INSERT INTO aq_industries VALUES('83','0','0','','本子','','','0','56','2','3','0','','1','0','0');
INSERT INTO aq_industries VALUES('84','0','0','','韩国文具','','','0','56','2','3','0','','1','0','0');
INSERT INTO aq_industries VALUES('85','0','0','','户外','','','0','57','2','3','0','','1','0','0');
INSERT INTO aq_industries VALUES('86','0','0','','体育','','','0','57','2','3','0','','1','0','0');
INSERT INTO aq_industries VALUES('87','0','0','','垂钓','','','0','57','2','3','0','','1','0','0');
INSERT INTO aq_industries VALUES('88','0','0','','棋牌','','','0','57','2','3','0','','1','0','0');
INSERT INTO aq_industries VALUES('89','0','0','','零食','','','0','58','2','3','0','','1','0','0');
INSERT INTO aq_industries VALUES('90','0','0','','糖果','','','0','58','2','3','0','','1','0','0');
INSERT INTO aq_industries VALUES('91','0','0','','蜜饯','','','0','58','2','3','0','','1','0','0');
INSERT INTO aq_industries VALUES('92','0','0','','饮料','','','0','58','2','3','0','','1','0','0');
INSERT INTO aq_industries VALUES('93','0','0','','茶叶','','','0','58','2','3','0','','1','0','0');
INSERT INTO aq_industries VALUES('94','0','0','','小家电','','','0','59','2','3','0','','1','0','0');
INSERT INTO aq_industries VALUES('95','0','0','','热水器','','','0','59','2','3','0','','1','0','0');
INSERT INTO aq_industries VALUES('96','0','0','','洗衣机','','','0','59','2','3','0','','1','0','0');
INSERT INTO aq_industries VALUES('97','0','0','','电视','','','0','59','2','3','0','','1','0','0');
INSERT INTO aq_industries VALUES('98','0','0','','MP3','','','0','60','2','3','0','','1','0','0');
INSERT INTO aq_industries VALUES('99','0','0','','U盘','','','0','60','2','3','0','','1','0','0');
INSERT INTO aq_industries VALUES('100','0','0','','笔记本','','','0','60','2','3','0','','1','0','0');
INSERT INTO aq_industries VALUES('101','0','0','','数码相机','','','0','60','2','3','0','','1','0','0');
INSERT INTO aq_industries VALUES('102','0','0','','手机','','','0','61','2','3','0','','1','0','0');
INSERT INTO aq_industries VALUES('103','0','0','','诺基亚','','','0','61','2','3','0','','1','0','0');
INSERT INTO aq_industries VALUES('104','0','0','','三星','','','0','61','2','3','0','','1','0','0');
INSERT INTO aq_industries VALUES('105','0','0','','索爱','','','0','61','2','3','0','','1','0','0');
INSERT INTO aq_industries VALUES('117','0','0','','电子','','','0','3','3','2','0','','1','0','0');
INSERT INTO aq_industries VALUES('116','0','0','','行业设备','','','0','3','3','2','0','','1','0','0');
INSERT INTO aq_industries VALUES('115','0','0','','五金','','','0','3','3','2','0','','1','0','0');
INSERT INTO aq_industries VALUES('114','0','0','','机械','','','0','3','3','2','0','','1','0','0');
INSERT INTO aq_industries VALUES('118','0','0','','机加工','','','0','3','3','2','0','','1','0','0');
INSERT INTO aq_industries VALUES('119','0','0','','电工','','','0','3','3','2','0','','1','0','0');
INSERT INTO aq_industries VALUES('120','0','0','','汽车','','','0','3','3','2','0','','1','0','0');
INSERT INTO aq_industries VALUES('121','0','0','','安防','','','0','3','3','2','0','','1','0','0');
INSERT INTO aq_industries VALUES('122','0','0','','轴承','','','0','114','3','3','0','','1','0','0');
INSERT INTO aq_industries VALUES('123','0','0','','阀门','','','0','114','3','3','0','','1','0','0');
INSERT INTO aq_industries VALUES('124','0','0','','模具','','','0','114','3','3','0','','1','0','0');
INSERT INTO aq_industries VALUES('125','0','0','','刀具夹具','','','0','114','3','3','0','','1','0','0');
INSERT INTO aq_industries VALUES('126','0','0','','泵','','','0','114','3','3','0','','1','0','0');
INSERT INTO aq_industries VALUES('127','0','0','','紧固件','','','0','115','3','3','0','','1','0','0');
INSERT INTO aq_industries VALUES('128','0','0','','五金件','','','0','115','3','3','0','','1','0','0');
INSERT INTO aq_industries VALUES('129','0','0','','水龙头','','','0','115','3','3','0','','1','0','0');
INSERT INTO aq_industries VALUES('130','0','0','','锁具','','','0','115','3','3','0','','1','0','0');
INSERT INTO aq_industries VALUES('131','0','0','','工程机械','','','0','116','3','3','0','','1','0','0');
INSERT INTO aq_industries VALUES('132','0','0','','食品机械','','','0','116','3','3','0','','1','0','0');
INSERT INTO aq_industries VALUES('133','0','0','','纺机','','','0','116','3','3','0','','1','0','0');
INSERT INTO aq_industries VALUES('134','0','0','','仪器仪表','','','0','117','3','3','0','','1','0','0');
INSERT INTO aq_industries VALUES('135','0','0','','LED','','','0','117','3','3','0','','1','0','0');
INSERT INTO aq_industries VALUES('136','0','0','','PCB','','','0','117','3','3','0','','1','0','0');
INSERT INTO aq_industries VALUES('137','0','0','','二极管','','','0','117','3','3','0','','1','0','0');
INSERT INTO aq_industries VALUES('138','0','0','','钣金加工','','','0','118','3','3','0','','1','0','0');
INSERT INTO aq_industries VALUES('139','0','0','','激光加工','','','0','118','3','3','0','','1','0','0');
INSERT INTO aq_industries VALUES('140','0','0','','冲压','','','0','118','3','3','0','','1','0','0');
INSERT INTO aq_industries VALUES('141','0','0','','电池','','','0','119','3','3','0','','1','0','0');
INSERT INTO aq_industries VALUES('142','0','0','','开关','','','0','119','3','3','0','','1','0','0');
INSERT INTO aq_industries VALUES('143','0','0','','电线电缆','','','0','119','3','3','0','','1','0','0');
INSERT INTO aq_industries VALUES('144','0','0','','发电机','','','0','119','3','3','0','','1','0','0');
INSERT INTO aq_industries VALUES('145','0','0','','交通运输','','','0','120','3','3','0','','1','0','0');
INSERT INTO aq_industries VALUES('146','0','0','','内饰','','','0','120','3','3','0','','1','0','0');
INSERT INTO aq_industries VALUES('147','0','0','','外饰','','','0','120','3','3','0','','1','0','0');
INSERT INTO aq_industries VALUES('148','0','0','','电动车','','','0','120','3','3','0','','1','0','0');
INSERT INTO aq_industries VALUES('149','0','0','','监控系统','','','0','121','3','3','0','','1','0','0');
INSERT INTO aq_industries VALUES('150','0','0','','消防器材','','','0','121','3','3','0','','1','0','0');
INSERT INTO aq_industries VALUES('151','0','0','','二手设备','','','0','121','3','3','0','','1','0','0');
INSERT INTO aq_industries VALUES('152','0','0','','化工','','','0','4','4','2','0','','1','0','0');
INSERT INTO aq_industries VALUES('153','0','0','','精细化学品','','','0','4','4','2','0','','1','0','0');
INSERT INTO aq_industries VALUES('154','0','0','','橡塑','','','0','4','4','2','0','','1','0','0');
INSERT INTO aq_industries VALUES('155','0','0','','建筑','','','0','4','4','2','0','','1','0','0');
INSERT INTO aq_industries VALUES('156','0','0','','医药','','','0','4','4','2','0','','1','0','0');
INSERT INTO aq_industries VALUES('157','0','0','','农业','','','0','4','4','2','0','','1','0','0');
INSERT INTO aq_industries VALUES('158','0','0','','冶金','','','0','4','4','2','0','','1','0','0');
INSERT INTO aq_industries VALUES('159','0','0','','能源','','','0','4','4','2','0','','1','0','0');
INSERT INTO aq_industries VALUES('160','0','0','','醇类','','','0','152','4','3','0','','1','0','0');
INSERT INTO aq_industries VALUES('161','0','0','','烃类','','','0','152','4','3','0','','1','0','0');
INSERT INTO aq_industries VALUES('162','0','0','','无机盐','','','0','152','4','3','0','','1','0','0');
INSERT INTO aq_industries VALUES('163','0','0','','合成树脂','','','0','152','4','3','0','','1','0','0');
INSERT INTO aq_industries VALUES('164','0','0','','润滑油','','','0','153','4','3','0','','1','0','0');
INSERT INTO aq_industries VALUES('165','0','0','','涂料油漆','','','0','153','4','3','0','','1','0','0');
INSERT INTO aq_industries VALUES('166','0','0','','化肥','','','0','153','4','3','0','','1','0','0');
INSERT INTO aq_industries VALUES('167','0','0','','通用塑料','','','0','154','4','3','0','','1','0','0');
INSERT INTO aq_industries VALUES('168','0','0','','工程塑料','','','0','154','4','3','0','','1','0','0');
INSERT INTO aq_industries VALUES('169','0','0','','废塑料','','','0','154','4','3','0','','1','0','0');
INSERT INTO aq_industries VALUES('170','0','0','','管件','','','0','155','4','3','0','','1','0','0');
INSERT INTO aq_industries VALUES('171','0','0','','石材','','','0','155','4','3','0','','1','0','0');
INSERT INTO aq_industries VALUES('172','0','0','','水泥','','','0','155','4','3','0','','1','0','0');
INSERT INTO aq_industries VALUES('173','0','0','','耐火材料','','','0','155','4','3','0','','1','0','0');
INSERT INTO aq_industries VALUES('174','0','0','','保健品','','','0','156','4','3','0','','1','0','0');
INSERT INTO aq_industries VALUES('175','0','0','','医药中间体','','','0','156','4','3','0','','1','0','0');
INSERT INTO aq_industries VALUES('176','0','0','','医疗设备','','','0','156','4','3','0','','1','0','0');
INSERT INTO aq_industries VALUES('177','0','0','','特种养殖','','','0','157','4','3','0','','1','0','0');
INSERT INTO aq_industries VALUES('178','0','0','','畜牧','','','0','157','4','3','0','','1','0','0');
INSERT INTO aq_industries VALUES('179','0','0','','水产品','','','0','157','4','3','0','','1','0','0');
INSERT INTO aq_industries VALUES('180','0','0','','玉米','','','0','157','4','3','0','','1','0','0');
INSERT INTO aq_industries VALUES('181','0','0','','钢材','','','0','158','4','3','0','','1','0','0');
INSERT INTO aq_industries VALUES('182','0','0','','不锈钢','','','0','158','4','3','0','','1','0','0');
INSERT INTO aq_industries VALUES('183','0','0','','铝型材','','','0','158','4','3','0','','1','0','0');
INSERT INTO aq_industries VALUES('184','0','0','','废金属','','','0','158','4','3','0','','1','0','0');
INSERT INTO aq_industries VALUES('185','0','0','','环保','','','0','159','4','3','0','','1','0','0');
INSERT INTO aq_industries VALUES('186','0','0','','天然气','','','0','159','4','3','0','','1','0','0');
INSERT INTO aq_industries VALUES('187','0','0','','柴油','','','0','159','4','3','0','','1','0','0');
INSERT INTO aq_industries VALUES('188','0','0','','无烟煤','','','0','159','4','3','0','','1','0','0');
INSERT INTO aq_industries VALUES('189','0','0','','商务服务','','','0','5','5','2','0','','1','0','0');
INSERT INTO aq_industries VALUES('190','0','0','','物流','','','0','5','5','2','0','','1','0','0');
INSERT INTO aq_industries VALUES('191','0','0','','展会网','','','0','5','5','2','0','','1','0','0');
INSERT INTO aq_industries VALUES('192','0','0','','广告','','','0','5','5','2','0','','1','0','0');
INSERT INTO aq_industries VALUES('193','0','0','','印刷','','','0','5','5','2','0','','1','0','0');
INSERT INTO aq_industries VALUES('194','0','0','','包装','','','0','5','5','2','0','','1','0','0');
INSERT INTO aq_industries VALUES('195','0','0','','招聘求职','','','0','189','5','3','0','','1','0','0');
INSERT INTO aq_industries VALUES('196','0','0','','网络兼职','','','0','189','5','3','0','','1','0','0');
INSERT INTO aq_industries VALUES('197','0','0','','销售','','','0','189','5','3','0','','1','0','0');
INSERT INTO aq_industries VALUES('198','0','0','','国内陆运','','','0','190','5','3','0','','1','0','0');
INSERT INTO aq_industries VALUES('199','0','0','','国际海运','','','0','190','5','3','0','','1','0','0');
INSERT INTO aq_industries VALUES('200','0','0','','进出口','','','0','190','5','3','0','','1','0','0');
INSERT INTO aq_industries VALUES('201','0','0','','广交会','','','0','191','5','3','0','','1','0','0');
INSERT INTO aq_industries VALUES('202','0','0','','服装展会','','','0','191','5','3','0','','1','0','0');
INSERT INTO aq_industries VALUES('203','0','0','','礼品展会','','','0','191','5','3','0','','1','0','0');
INSERT INTO aq_industries VALUES('204','0','0','','平面设计','','','0','192','5','3','0','','1','0','0');
INSERT INTO aq_industries VALUES('205','0','0','','广告代理','','','0','192','5','3','0','','1','0','0');
INSERT INTO aq_industries VALUES('206','0','0','','广告制作','','','0','192','5','3','0','','1','0','0');
INSERT INTO aq_industries VALUES('207','0','0','','纸类印刷','','','0','193','5','3','0','','1','0','0');
INSERT INTO aq_industries VALUES('208','0','0','','特种印刷','','','0','193','5','3','0','','1','0','0');
INSERT INTO aq_industries VALUES('209','0','0','','热转印','','','0','193','5','3','0','','1','0','0');
INSERT INTO aq_industries VALUES('210','0','0','','塑料制品','','','0','194','5','3','0','','1','0','0');
INSERT INTO aq_industries VALUES('211','0','0','','玻璃制品','','','0','194','5','3','0','','1','0','0');
INSERT INTO aq_industries VALUES('212','0','0','','纸制品','','','0','194','5','3','0','','1','0','0');
INSERT INTO aq_industries VALUES('213','0','0','','虚拟','','','0','0','0','1','0','','1','0','0');
INSERT INTO aq_industries VALUES('214','0','0','','母婴','','','0','0','0','1','0','','1','0','0');
INSERT INTO aq_industries VALUES('215','0','0','','保险','','','0','0','0','1','0','','1','0','0');
INSERT INTO aq_industries VALUES('216','0','0','','充值中心','','','0','213','213','2','0','','1','0','0');
INSERT INTO aq_industries VALUES('217','0','0','','网游','','','0','213','213','2','0','','1','0','0');
INSERT INTO aq_industries VALUES('218','0','0','','彩票','','','0','213','213','2','0','','1','0','0');
INSERT INTO aq_industries VALUES('219','0','0','','IP卡','','','0','213','213','2','0','','1','0','0');
INSERT INTO aq_industries VALUES('220','0','0','','点卡','','','0','213','213','2','0','','1','0','0');
INSERT INTO aq_industries VALUES('221','0','0','','机票','','','0','213','213','2','0','','1','0','0');
INSERT INTO aq_industries VALUES('222','0','0','','话费','','','0','216','213','3','0','','1','0','0');
INSERT INTO aq_industries VALUES('223','0','0','','移动','','','0','216','213','3','0','','1','0','0');
INSERT INTO aq_industries VALUES('224','0','0','','联通','','','0','216','213','3','0','','1','0','0');
INSERT INTO aq_industries VALUES('225','0','0','','电信','','','0','216','213','3','0','','1','0','0');
INSERT INTO aq_industries VALUES('226','0','0','','征途','','','0','217','213','3','0','','1','0','0');
INSERT INTO aq_industries VALUES('227','0','0','','天龙2','','','0','217','213','3','0','','1','0','0');
INSERT INTO aq_industries VALUES('228','0','0','','梦幻西游','','','0','217','213','3','0','','1','0','0');
INSERT INTO aq_industries VALUES('229','0','0','','DNF','','','0','217','213','3','0','','1','0','0');
INSERT INTO aq_industries VALUES('230','0','0','','大乐透','','','0','218','213','3','0','','1','0','0');
INSERT INTO aq_industries VALUES('231','0','0','','排三','','','0','218','213','3','0','','1','0','0');
INSERT INTO aq_industries VALUES('232','0','0','','双色球','','','0','218','213','3','0','','1','0','0');
INSERT INTO aq_industries VALUES('233','0','0','','足彩','','','0','218','213','3','0','','1','0','0');
INSERT INTO aq_industries VALUES('234','0','0','','网络电话','','','0','219','213','3','0','','1','0','0');
INSERT INTO aq_industries VALUES('235','0','0','','skype','','','0','219','213','3','0','','1','0','0');
INSERT INTO aq_industries VALUES('236','0','0','','手机号码','','','0','219','213','3','0','','1','0','0');
INSERT INTO aq_industries VALUES('237','0','0','','魔兽','','','0','220','213','3','0','','1','0','0');
INSERT INTO aq_industries VALUES('238','0','0','','蜀门','','','0','220','213','3','0','','1','0','0');
INSERT INTO aq_industries VALUES('239','0','0','','完美国际','','','0','220','213','3','0','','1','0','0');
INSERT INTO aq_industries VALUES('240','0','0','','QQ','','','0','220','213','3','0','','1','0','0');
INSERT INTO aq_industries VALUES('241','0','0','','酒店','','','0','221','213','3','0','','1','0','0');
INSERT INTO aq_industries VALUES('242','0','0','','门票','','','0','221','213','3','0','','1','0','0');
INSERT INTO aq_industries VALUES('243','0','0','','特色客栈','','','0','221','213','3','0','','1','0','0');
INSERT INTO aq_industries VALUES('244','0','0','','旅游','','','0','221','213','3','0','','1','0','0');
INSERT INTO aq_industries VALUES('245','0','0','','奶粉','','','0','214','214','2','0','','1','0','0');
INSERT INTO aq_industries VALUES('246','0','0','','用品','','','0','214','214','2','0','','1','0','0');
INSERT INTO aq_industries VALUES('247','0','0','','益智','','','0','214','214','2','0','','1','0','0');
INSERT INTO aq_industries VALUES('248','0','0','','辅食','','','0','245','214','3','0','','1','0','0');
INSERT INTO aq_industries VALUES('249','0','0','','营养','','','0','245','214','3','0','','1','0','0');
INSERT INTO aq_industries VALUES('250','0','0','','妈妈保健','','','0','245','214','3','0','','1','0','0');
INSERT INTO aq_industries VALUES('251','0','0','','更多','','','0','245','214','3','0','','1','0','0');
INSERT INTO aq_industries VALUES('252','0','0','','尿片','','','0','246','214','3','0','','1','0','0');
INSERT INTO aq_industries VALUES('253','0','0','','睡袋','','','0','246','214','3','0','','1','0','0');
INSERT INTO aq_industries VALUES('254','0','0','','洗护','','','0','246','214','3','0','','1','0','0');
INSERT INTO aq_industries VALUES('255','0','0','','喂哺','','','0','246','214','3','0','','1','0','0');
INSERT INTO aq_industries VALUES('256','0','0','','湿巾','','','0','246','214','3','0','','1','0','0');
INSERT INTO aq_industries VALUES('257','0','0','','玩具','','','0','247','214','3','0','','1','0','0');
INSERT INTO aq_industries VALUES('258','0','0','','早教','','','0','247','214','3','0','','1','0','0');
INSERT INTO aq_industries VALUES('259','0','0','','推车','','','0','247','214','3','0','','1','0','0');
INSERT INTO aq_industries VALUES('260','0','0','','床','','','0','247','214','3','0','','1','0','0');
INSERT INTO aq_industries VALUES('261','0','0','','户外','','','0','247','214','3','0','','1','0','0');
INSERT INTO aq_industries VALUES('262','0','0','','意外险','','','0','215','215','2','0','','1','0','0');
INSERT INTO aq_industries VALUES('263','0','0','','保险公司','','','0','215','215','2','0','','1','0','0');
INSERT INTO aq_industries VALUES('264','0','0','','特色','','','0','215','215','2','0','','1','0','0');
INSERT INTO aq_industries VALUES('265','0','0','','交通','','','0','262','215','3','0','','1','0','0');
INSERT INTO aq_industries VALUES('266','0','0','','旅行','','','0','262','215','3','0','','1','0','0');
INSERT INTO aq_industries VALUES('267','0','0','','意外医疗','','','0','262','215','3','0','','1','0','0');
INSERT INTO aq_industries VALUES('268','0','0','','泰康','','','0','263','215','3','0','','1','0','0');
INSERT INTO aq_industries VALUES('269','0','0','','华泰','','','0','263','215','3','0','','1','0','0');
INSERT INTO aq_industries VALUES('270','0','0','','阳光产险','','','0','263','215','3','0','','1','0','0');
INSERT INTO aq_industries VALUES('271','0','0','','阳光人寿','','','0','263','215','3','0','','1','0','0');
INSERT INTO aq_industries VALUES('272','0','0','','出国留学','','','0','264','215','3','0','','1','0','0');
INSERT INTO aq_industries VALUES('273','0','0','','自驾车','','','0','264','215','3','0','','1','0','0');
INSERT INTO aq_industries VALUES('274','0','0','','家财','','','0','264','215','3','0','','1','0','0');

DROP TABLE IF EXISTS aq_industrytypes;
CREATE TABLE `aq_industrytypes` (
  `id` smallint(3) NOT NULL AUTO_INCREMENT,
  `name` varchar(64) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

INSERT INTO aq_industrytypes VALUES('1','工业品');
INSERT INTO aq_industrytypes VALUES('2','消费品');
INSERT INTO aq_industrytypes VALUES('3','原材料');
INSERT INTO aq_industrytypes VALUES('4','商业服务');
INSERT INTO aq_industrytypes VALUES('5','其他');

DROP TABLE IF EXISTS aq_inqueries;
CREATE TABLE `aq_inqueries` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `to_member_id` int(10) DEFAULT NULL,
  `to_company_id` int(10) DEFAULT NULL,
  `title` varchar(50) NOT NULL DEFAULT '',
  `content` text,
  `send_achive` tinyint(1) DEFAULT NULL,
  `know_more` varchar(50) NOT NULL DEFAULT '',
  `exp_quantity` varchar(15) NOT NULL DEFAULT '',
  `exp_price` float(9,2) NOT NULL DEFAULT '0.00',
  `contacts` text,
  `user_ip` varchar(11) DEFAULT '',
  `created` int(10) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;


DROP TABLE IF EXISTS aq_jobs;
CREATE TABLE `aq_jobs` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `member_id` int(10) NOT NULL DEFAULT '-1',
  `company_id` int(10) NOT NULL DEFAULT '-1',
  `cache_spacename` varchar(25) NOT NULL DEFAULT '',
  `industry_id` smallint(6) NOT NULL DEFAULT '0',
  `area_id` smallint(6) NOT NULL DEFAULT '0',
  `name` varchar(150) NOT NULL DEFAULT '',
  `work_station` varchar(50) NOT NULL DEFAULT '',
  `content` text,
  `require_gender_id` tinyint(1) NOT NULL DEFAULT '0',
  `peoples` varchar(5) NOT NULL DEFAULT '',
  `require_education_id` tinyint(1) NOT NULL DEFAULT '0',
  `require_age` varchar(10) NOT NULL DEFAULT '',
  `salary_id` tinyint(1) NOT NULL DEFAULT '0',
  `worktype_id` tinyint(1) NOT NULL DEFAULT '0',
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `clicked` int(5) NOT NULL DEFAULT '1',
  `jobtype_id` smallint(6) NOT NULL DEFAULT '0',
  `expire_time` int(10) NOT NULL DEFAULT '0',
  `created` int(10) NOT NULL DEFAULT '0',
  `modified` int(10) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;


DROP TABLE IF EXISTS aq_jobtypes;
CREATE TABLE `aq_jobtypes` (
  `id` smallint(6) NOT NULL AUTO_INCREMENT,
  `parent_id` smallint(6) NOT NULL DEFAULT '0',
  `level` tinyint(1) NOT NULL DEFAULT '1',
  `name` varchar(255) NOT NULL DEFAULT '',
  `display_order` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;


DROP TABLE IF EXISTS aq_keywords;
CREATE TABLE `aq_keywords` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `title` varchar(25) NOT NULL DEFAULT '',
  `target_id` int(10) NOT NULL DEFAULT '0',
  `target_position` tinyint(1) NOT NULL DEFAULT '0',
  `type_name` enum('trades','companies','newses','products') NOT NULL DEFAULT 'trades',
  `hits` smallint(6) NOT NULL DEFAULT '1',
  `status` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `title` (`title`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;


DROP TABLE IF EXISTS aq_logs;
CREATE TABLE `aq_logs` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `handle_type` enum('error','info','warning') NOT NULL DEFAULT 'info',
  `source_module` varchar(50) NOT NULL DEFAULT '',
  `description` text,
  `ip_address` int(10) NOT NULL DEFAULT '0',
  `created` int(10) NOT NULL DEFAULT '0',
  `modified` int(10) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;


DROP TABLE IF EXISTS aq_markets;
CREATE TABLE `aq_markets` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL DEFAULT '',
  `main_business` varchar(255) NOT NULL DEFAULT '',
  `content` text,
  `markettype_id` smallint(3) NOT NULL DEFAULT '0',
  `area_id` smallint(6) NOT NULL DEFAULT '0',
  `industry_id` smallint(6) NOT NULL DEFAULT '0',
  `picture` varchar(50) NOT NULL DEFAULT '',
  `ip_address` int(10) NOT NULL DEFAULT '0',
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `clicked` smallint(6) NOT NULL DEFAULT '1',
  `if_commend` tinyint(1) NOT NULL DEFAULT '0',
  `created` int(10) NOT NULL DEFAULT '0',
  `modified` int(10) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

INSERT INTO aq_markets VALUES('5','五金产品交易市场','信息、通讯、软件、半导体','','1','1','1','sample/market/01.jpg','0','1','1','1','1325314541','0');
INSERT INTO aq_markets VALUES('6','化纤专业市场','信息、通讯、软件、半导体','','1','1','1','sample/market/02.jpg','0','1','1','1','1325314541','0');
INSERT INTO aq_markets VALUES('3','海宁中国皮革城','信息、通讯、软件、半导体','','1','1','1','sample/market/03.jpg','0','1','1','1','1325314541','0');
INSERT INTO aq_markets VALUES('4','浙江崇福皮草大世界','信息、通讯、软件、半导体','','1','1','1','sample/market/04.jpg','0','1','1','1','1325314541','0');
INSERT INTO aq_markets VALUES('1','某批发市场','信息、通讯、软件、半导体','','0','1','1','sample/market/05.jpg','0','0','1','0','0','0');
INSERT INTO aq_markets VALUES('2','某专业市场','信息、通讯、软件、半导体','','0','1','1','sample/market/06.jpg','0','0','1','0','0','0');

DROP TABLE IF EXISTS aq_markettypes;
CREATE TABLE `aq_markettypes` (
  `id` smallint(3) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL DEFAULT '',
  `display_order` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

INSERT INTO aq_markettypes VALUES('1','国内市场','0');
INSERT INTO aq_markettypes VALUES('2','国外市场','0');
INSERT INTO aq_markettypes VALUES('3','超级市场','0');

DROP TABLE IF EXISTS aq_membercaches;
CREATE TABLE `aq_membercaches` (
  `member_id` int(10) NOT NULL DEFAULT '-1',
  `data1` text NOT NULL,
  `data2` text NOT NULL,
  `expiration` int(10) NOT NULL DEFAULT '0',
  PRIMARY KEY (`member_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;


DROP TABLE IF EXISTS aq_memberfields;
CREATE TABLE `aq_memberfields` (
  `member_id` int(10) NOT NULL DEFAULT '0',
  `today_logins` smallint(6) NOT NULL DEFAULT '0',
  `total_logins` smallint(6) NOT NULL DEFAULT '0',
  `area_id` smallint(6) NOT NULL DEFAULT '0',
  `first_name` varchar(25) NOT NULL DEFAULT '',
  `last_name` varchar(25) NOT NULL DEFAULT '',
  `gender` tinyint(1) NOT NULL DEFAULT '0',
  `tel` varchar(25) NOT NULL DEFAULT '',
  `fax` varchar(25) NOT NULL DEFAULT '',
  `mobile` varchar(25) NOT NULL DEFAULT '',
  `qq` varchar(12) NOT NULL DEFAULT '',
  `msn` varchar(50) NOT NULL DEFAULT '',
  `icq` varchar(12) NOT NULL DEFAULT '',
  `yahoo` varchar(50) NOT NULL DEFAULT '',
  `skype` varchar(50) NOT NULL DEFAULT '',
  `address` varchar(50) NOT NULL DEFAULT '',
  `zipcode` varchar(16) NOT NULL DEFAULT '',
  `site_url` varchar(100) NOT NULL DEFAULT '',
  `question` varchar(50) NOT NULL DEFAULT '',
  `answer` varchar(50) NOT NULL DEFAULT '',
  `reg_ip` varchar(25) NOT NULL DEFAULT '0',
  PRIMARY KEY (`member_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

INSERT INTO aq_memberfields VALUES('1','0','0','6','张','三','1','','','','','','','','','','','','','','127.0.0.1');
INSERT INTO aq_memberfields VALUES('2','0','0','0','李','四','0','','','','','','','','','','','','','','127.0.0.1');

DROP TABLE IF EXISTS aq_membergroups;
CREATE TABLE `aq_membergroups` (
  `id` smallint(3) NOT NULL AUTO_INCREMENT,
  `membertype_id` tinyint(1) NOT NULL DEFAULT '-1',
  `name` varchar(50) NOT NULL DEFAULT '',
  `description` text,
  `type` enum('define','special','system') NOT NULL DEFAULT 'define',
  `system` enum('private','public') NOT NULL DEFAULT 'private',
  `picture` varchar(50) NOT NULL DEFAULT 'default.gif',
  `point_max` smallint(6) NOT NULL DEFAULT '0',
  `point_min` smallint(6) NOT NULL DEFAULT '0',
  `max_offer` smallint(3) NOT NULL DEFAULT '0',
  `max_product` smallint(3) NOT NULL DEFAULT '0',
  `max_job` smallint(3) NOT NULL DEFAULT '0',
  `max_companynews` smallint(3) NOT NULL DEFAULT '0',
  `max_producttype` smallint(3) NOT NULL DEFAULT '3',
  `max_album` smallint(3) NOT NULL DEFAULT '0',
  `max_attach_size` smallint(6) NOT NULL DEFAULT '0',
  `max_size_perday` smallint(6) NOT NULL DEFAULT '0',
  `max_favorite` smallint(3) NOT NULL DEFAULT '0',
  `is_default` tinyint(1) NOT NULL DEFAULT '0',
  `allow_offer` tinyint(1) NOT NULL DEFAULT '0',
  `allow_market` tinyint(1) NOT NULL DEFAULT '0',
  `allow_company` tinyint(1) NOT NULL DEFAULT '0',
  `allow_product` tinyint(1) NOT NULL DEFAULT '0',
  `allow_job` tinyint(1) NOT NULL DEFAULT '0',
  `allow_companynews` tinyint(1) NOT NULL DEFAULT '1',
  `allow_album` tinyint(1) NOT NULL DEFAULT '0',
  `allow_space` tinyint(1) NOT NULL DEFAULT '1',
  `default_live_time` tinyint(1) NOT NULL DEFAULT '1',
  `after_live_time` tinyint(1) NOT NULL DEFAULT '1',
  `exempt` tinyint(1) unsigned zerofill NOT NULL DEFAULT '0',
  `created` int(10) NOT NULL DEFAULT '0',
  `modified` int(10) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

INSERT INTO aq_membergroups VALUES('1','1','非正式会员','','system','private','informal.gif','0','-32767','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','1','0','2','0','0','1274002638');
INSERT INTO aq_membergroups VALUES('2','1','正式会员','','system','private','formal.gif','32767','0','0','0','0','0','0','0','0','0','0','0','0','0','0','1','0','0','0','1','0','2','25','0','1274002638');
INSERT INTO aq_membergroups VALUES('3','1','待审核会员','等待验证','special','private','special_checking.gif','0','0','0','0','0','0','3','0','0','0','0','0','1','1','1','1','1','1','1','1','1','2','0','0','1274002638');
INSERT INTO aq_membergroups VALUES('4','1','禁止访问','禁止访问网站','special','private','special_novisit.gif','0','0','0','0','0','0','3','0','0','0','0','0','1','1','1','1','1','1','1','1','1','2','0','0','1274002638');
INSERT INTO aq_membergroups VALUES('5','1','禁止发布','禁止在商务室发表任何信息','special','private','special_noperm.gif','0','0','0','0','0','0','3','0','0','0','0','0','1','1','1','1','1','1','1','1','1','2','0','0','1274002638');
INSERT INTO aq_membergroups VALUES('6','1','禁止登陆','禁止登陆商务室','special','private','special_nologin.gif','0','0','0','0','0','0','3','0','0','0','0','0','1','1','1','1','1','1','1','1','1','2','0','0','1274002638');
INSERT INTO aq_membergroups VALUES('7','1','个人会员','普通级别会员','define','public','copper.gif','0','0','5','0','0','0','3','0','0','0','0','1','3','1','3','3','3','3','1','1','1','9','24','0','1274002638');
INSERT INTO aq_membergroups VALUES('8','1','高级个人会员','高级个人会员','define','public','silver.gif','0','0','0','0','0','0','3','0','0','0','0','0','1','1','1','1','1','1','1','1','2','6','25','0','1274002638');
INSERT INTO aq_membergroups VALUES('9','1','普通企业会员','企业会员一般此级别','define','public','gold.gif','0','0','2','2','0','0','3','0','0','0','0','0','2','3','3','2','2','2','2','1','1','2','31','0','1274002638');
INSERT INTO aq_membergroups VALUES('10','2','VIP企业会员','高级企业会员','define','public','vip.gif','0','0','0','0','0','0','3','0','0','0','0','0','3','3','3','3','3','3','3','1','1','2','31','0','1274002638');

DROP TABLE IF EXISTS aq_members;
CREATE TABLE `aq_members` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `space_name` varchar(255) NOT NULL DEFAULT '',
  `templet_id` smallint(3) NOT NULL DEFAULT '0',
  `username` varchar(25) NOT NULL DEFAULT '',
  `userpass` varchar(50) NOT NULL DEFAULT '',
  `email` varchar(100) NOT NULL DEFAULT '',
  `points` smallint(6) NOT NULL DEFAULT '0',
  `credits` smallint(6) NOT NULL DEFAULT '0',
  `balance_amount` float(7,2) NOT NULL DEFAULT '0.00',
  `trusttype_ids` varchar(25) NOT NULL DEFAULT '',
  `status` enum('3','2','1','0') NOT NULL DEFAULT '0',
  `photo` varchar(100) NOT NULL DEFAULT '',
  `membertype_id` smallint(3) NOT NULL DEFAULT '0',
  `membergroup_id` smallint(3) NOT NULL DEFAULT '0',
  `last_login` varchar(11) NOT NULL DEFAULT '0',
  `last_ip` varchar(25) NOT NULL DEFAULT '0',
  `service_start_date` varchar(11) NOT NULL DEFAULT '0',
  `service_end_date` varchar(11) NOT NULL DEFAULT '0',
  `office_redirect` smallint(6) NOT NULL DEFAULT '0',
  `created` varchar(10) NOT NULL DEFAULT '0',
  `modified` varchar(10) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

INSERT INTO aq_members VALUES('1','','0','shawnqiang','10d9afe2ec93c264d3a1e61da2234a6c','administrator@yourdomain.com','0','0','0.00','','1','','2','9','0','0','0','0','0','1325314536','1325314536');
INSERT INTO aq_members VALUES('2','athena','1','athena','e10adc3949ba59abbe56e057f20f883e','administrator@host.com','81','80','0.00','1,2','1','','2','9','1293936472','2130706433','1293936472','1294022872','0','1293936472','0');

DROP TABLE IF EXISTS aq_membertypes;
CREATE TABLE `aq_membertypes` (
  `id` smallint(3) NOT NULL AUTO_INCREMENT,
  `default_membergroup_id` smallint(3) NOT NULL DEFAULT '0',
  `name` varchar(50) NOT NULL DEFAULT '',
  `description` text,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

INSERT INTO aq_membertypes VALUES('1','7','个人会员','您可以在本网免费发布供应信息、求购信息。');
INSERT INTO aq_membertypes VALUES('2','9','企业会员','您可以拥有自己的企业网站；您可以建立自己的产品库、企业相册；您可以自由发布招聘信息。');
INSERT INTO aq_membertypes VALUES('3','10','商铺会员','可以建立自己的商铺');

DROP TABLE IF EXISTS aq_messages;
CREATE TABLE `aq_messages` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `type` enum('system','user','inquery') NOT NULL DEFAULT 'user',
  `from_member_id` int(10) NOT NULL DEFAULT '-1',
  `cache_from_username` varchar(25) NOT NULL DEFAULT '',
  `to_member_id` int(10) NOT NULL DEFAULT '-1',
  `cache_to_username` varchar(25) NOT NULL DEFAULT '',
  `title` varchar(255) NOT NULL DEFAULT '',
  `content` text,
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `created` int(10) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;


DROP TABLE IF EXISTS aq_metas;
CREATE TABLE `aq_metas` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `object_id` int(10) NOT NULL DEFAULT '0',
  `object_type` varchar(100) NOT NULL DEFAULT '',
  `content` tinytext NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;


DROP TABLE IF EXISTS aq_navs;
CREATE TABLE `aq_navs` (
  `id` smallint(3) NOT NULL AUTO_INCREMENT,
  `parent_id` smallint(3) NOT NULL DEFAULT '0',
  `name` varchar(50) NOT NULL DEFAULT '',
  `description` varchar(255) NOT NULL DEFAULT '',
  `url` varchar(255) NOT NULL DEFAULT '',
  `target` enum('_blank','_self') NOT NULL DEFAULT '_self',
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `display_order` smallint(3) NOT NULL DEFAULT '0',
  `highlight` tinyint(1) NOT NULL DEFAULT '0',
  `level` tinyint(1) NOT NULL DEFAULT '0',
  `class_name` varchar(25) NOT NULL DEFAULT '',
  `created` int(10) NOT NULL DEFAULT '0',
  `modified` int(10) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;

INSERT INTO aq_navs VALUES('1','0','首页','','index.php','_self','1','1','0','0','','1325314541','0');
INSERT INTO aq_navs VALUES('2','0','求购','','offer/list.php?typeid=1&navid=2','_self','1','2','0','0','','1325314541','1325314541');
INSERT INTO aq_navs VALUES('3','0','供应','','offer/list.php?typeid=2&navid=3','_self','1','3','0','0','','1325314541','1325314541');
INSERT INTO aq_navs VALUES('4','0','招商加盟','','offer/index.php?mod=invest','_self','1','5','0','0','','1325314541','1325314541');
INSERT INTO aq_navs VALUES('5','0','展会','','fair/','_self','1','6','0','0','','1325314541','1325314541');
INSERT INTO aq_navs VALUES('6','0','价格行情','','market/quote.php','_self','1','8','0','0','','1325314541','0');
INSERT INTO aq_navs VALUES('7','0','专业市场','','market/index.php','_self','1','9','0','0','','1325314541','1325314541');
INSERT INTO aq_navs VALUES('8','0','展会','','fair/index.php','_self','0','10','0','0','','1325314541','0');
INSERT INTO aq_navs VALUES('9','0','人才招聘','','hr/','_self','1','11','0','0','','1325314541','1325314541');
INSERT INTO aq_navs VALUES('10','0','品牌','','brand/','_self','1','7','0','0','','1325314541','1325314541');
INSERT INTO aq_navs VALUES('11','0','批发','','offer/index.php?mod=wholesale','_self','1','4','0','0','','1325314541','1325314541');
INSERT INTO aq_navs VALUES('12','0','百科','行业百科','dict/','_self','1','12','0','0','','1325314541','1325314541');

DROP TABLE IF EXISTS aq_newses;
CREATE TABLE `aq_newses` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `type_id` smallint(3) NOT NULL DEFAULT '0',
  `type` tinyint(1) NOT NULL DEFAULT '0',
  `industry_id` smallint(3) NOT NULL DEFAULT '0',
  `area_id` smallint(3) NOT NULL DEFAULT '0',
  `title` varchar(255) NOT NULL DEFAULT '',
  `content` text,
  `source` varchar(25) NOT NULL DEFAULT '',
  `picture` varchar(50) NOT NULL DEFAULT '',
  `if_focus` tinyint(1) NOT NULL DEFAULT '0',
  `if_commend` tinyint(1) NOT NULL DEFAULT '0',
  `highlight` tinyint(1) NOT NULL DEFAULT '0',
  `clicked` int(10) NOT NULL DEFAULT '1',
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `flag` tinyint(1) NOT NULL DEFAULT '0',
  `require_membertype` varchar(15) NOT NULL DEFAULT '0',
  `tag_ids` varchar(255) DEFAULT '',
  `created` int(10) NOT NULL DEFAULT '0',
  `create_time` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `start_time` date NOT NULL DEFAULT '0000-00-00',
  `end_time` date NOT NULL DEFAULT '0000-00-00',
  `modified` int(10) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `type_id` (`type_id`,`status`),
  KEY `type_id_2` (`type_id`,`status`),
  KEY `status` (`status`),
  KEY `picture` (`picture`,`status`),
  KEY `type_id_3` (`type_id`,`status`)
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=utf8;

INSERT INTO aq_newses VALUES('14','2','0','0','0','9.5米高孔子像在天安门广场东侧落成','','','sample/news/1.jpg','0','0','0','123','1','0','0','','1325314541','2011-01-02 02:47:28','0000-00-00','0000-00-00','0');
INSERT INTO aq_newses VALUES('15','2','0','0','0','广州亚运进行开幕式焰火彩排','','','sample/news/2.jpg','0','0','0','123','1','0','0','','1325314541','2011-01-02 02:47:28','0000-00-00','0000-00-00','0');
INSERT INTO aq_newses VALUES('3','2','0','0','0','纽约纪念2011世界地球日','','','sample/news/3.jpg','0','0','0','123','1','0','0','','1325314541','2011-01-02 02:47:28','0000-00-00','0000-00-00','0');
INSERT INTO aq_newses VALUES('4','2','0','0','0','日本迪斯尼地震后重开','','','sample/news/4.jpg','0','0','0','123','1','0','0','','1325314541','2011-01-02 02:47:28','0000-00-00','0000-00-00','0');
INSERT INTO aq_newses VALUES('5','2','0','0','0','西南地区动卧列车首次开行','','','sample/news/5.jpg','0','0','0','123','1','0','0','','1325314541','2011-01-02 02:47:28','0000-00-00','0000-00-00','0');
INSERT INTO aq_newses VALUES('6','2','0','0','0','中国海南成为世界第四个离岛免税区','','','sample/news/6.jpg','0','0','0','123','1','0','0','','1325314541','2011-01-02 02:47:28','0000-00-00','0000-00-00','0');
INSERT INTO aq_newses VALUES('7','2','0','0','0','青岛自闭症患儿与伪虎鲸亲密接触','','','sample/news/7.jpg','0','0','0','123668','1','0','0','','1325314541','2011-01-02 02:47:28','0000-00-00','0000-00-00','0');
INSERT INTO aq_newses VALUES('8','2','0','0','0','重庆女子交巡警队伍正式上岗执勤','','','sample/news/8.jpg','0','0','0','123','1','0','0','','1325314541','2011-01-02 02:47:28','0000-00-00','0000-00-00','0');
INSERT INTO aq_newses VALUES('9','1','0','0','0','西班牙斗牛场愤怒公牛冲入看台引发骚乱','','','sample/news/9.jpg','0','0','0','123','1','0','0','','1325314541','2011-01-02 02:47:28','0000-00-00','0000-00-00','0');
INSERT INTO aq_newses VALUES('10','1','0','0','0','皇马胜巴萨时隔18年夺冠','','','sample/news/10.jpg','0','0','0','123','1','0','0','','1325314541','2011-01-02 02:47:28','0000-00-00','0000-00-00','0');
INSERT INTO aq_newses VALUES('11','1','0','0','0','上海迪士尼乐园效果图出炉','','','sample/news/11.jpg','0','0','0','123','1','0','0','','1325314541','2011-01-02 02:47:28','0000-00-00','0000-00-00','0');
INSERT INTO aq_newses VALUES('12','1','0','0','0','菲律宾首都发生大火万人失去家园','','','sample/news/12.jpg','0','0','0','123','1','0','0','','1325314541','2011-01-02 02:47:28','0000-00-00','0000-00-00','0');
INSERT INTO aq_newses VALUES('2','1','0','0','0','热烈祝贺本网改版成功','','','sample/news/14.jpg','0','1','0','123','1','0','0','','1325314541','2011-01-02 02:47:28','0000-00-00','0000-00-00','0');
INSERT INTO aq_newses VALUES('1','1','0','0','0','迎上线，送积分，欢迎登陆本行业网','','','sample/news/14.jpg','0','1','0','123','1','0','0','','1325314541','2011-01-02 02:47:28','0000-00-00','0000-00-00','0');
INSERT INTO aq_newses VALUES('13','5','0','0','0','奥巴马将于芝加哥为连任举行首场公开筹款活动','','','sample/news/13.jpg','0','0','0','123','1','0','0','','1325314541','2011-01-02 02:47:28','0000-00-00','0000-00-00','0');

DROP TABLE IF EXISTS aq_newstypes;
CREATE TABLE `aq_newstypes` (
  `id` smallint(3) NOT NULL AUTO_INCREMENT,
  `name` varchar(25) NOT NULL DEFAULT '',
  `level_id` tinyint(1) NOT NULL DEFAULT '1',
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `parent_id` smallint(3) NOT NULL DEFAULT '0',
  `created` int(10) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

INSERT INTO aq_newstypes VALUES('1','行业聚焦','1','1','0','1325314541');
INSERT INTO aq_newstypes VALUES('2','头条要闻','1','1','0','1325314541');
INSERT INTO aq_newstypes VALUES('3','本网动态','1','1','0','1325314541');
INSERT INTO aq_newstypes VALUES('4','企业报道','1','1','0','1325314541');
INSERT INTO aq_newstypes VALUES('5','媒体精粹','1','1','0','1325314541');
INSERT INTO aq_newstypes VALUES('6','热点专题','1','1','0','1325314541');
INSERT INTO aq_newstypes VALUES('7','高端访谈','1','1','0','1325314541');
INSERT INTO aq_newstypes VALUES('8','新闻速递','1','1','0','1325314541');

DROP TABLE IF EXISTS aq_ordergoods;
CREATE TABLE `aq_ordergoods` (
  `goods_id` smallint(6) NOT NULL DEFAULT '0',
  `order_id` smallint(6) unsigned zerofill NOT NULL DEFAULT '000000',
  `trade_no` char(16) NOT NULL DEFAULT '',
  `amount` smallint(3) NOT NULL DEFAULT '1',
  PRIMARY KEY (`goods_id`,`order_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;


DROP TABLE IF EXISTS aq_orders;
CREATE TABLE `aq_orders` (
  `id` smallint(6) unsigned zerofill NOT NULL AUTO_INCREMENT,
  `trade_no` char(16) NOT NULL DEFAULT '',
  `member_id` int(10) NOT NULL DEFAULT '-1',
  `anonymous` tinyint(1) NOT NULL DEFAULT '0',
  `cache_username` varchar(25) NOT NULL DEFAULT '',
  `total_price` float(9,2) NOT NULL DEFAULT '0.00',
  `subject` varchar(100) NOT NULL DEFAULT '',
  `content` text,
  `pay_status` tinyint(1) NOT NULL DEFAULT '0',
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `pay_id` smallint(3) NOT NULL DEFAULT '0',
  `pay_name` varchar(25) NOT NULL DEFAULT '',
  `created` int(10) NOT NULL DEFAULT '0',
  `modified` int(10) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;


DROP TABLE IF EXISTS aq_passports;
CREATE TABLE `aq_passports` (
  `id` smallint(3) NOT NULL AUTO_INCREMENT,
  `name` varchar(25) NOT NULL DEFAULT '',
  `title` varchar(25) NOT NULL DEFAULT '',
  `description` text,
  `url` varchar(25) NOT NULL DEFAULT '',
  `config` text,
  `available` tinyint(1) NOT NULL DEFAULT '1',
  `created` int(10) NOT NULL DEFAULT '0',
  `modified` int(10) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;


DROP TABLE IF EXISTS aq_payhistories;
CREATE TABLE `aq_payhistories` (
  `id` int(9) NOT NULL AUTO_INCREMENT,
  `member_id` int(9) NOT NULL DEFAULT '-1',
  `trade_no` char(25) NOT NULL DEFAULT '-1',
  `amount` float(7,2) NOT NULL DEFAULT '0.00',
  `remain` float(7,2) NOT NULL DEFAULT '0.00',
  `ip_address` varchar(15) NOT NULL DEFAULT '1',
  `created` int(10) NOT NULL DEFAULT '0',
  `modified` int(10) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `one_trade_no` (`trade_no`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;


DROP TABLE IF EXISTS aq_payments;
CREATE TABLE `aq_payments` (
  `id` smallint(3) NOT NULL AUTO_INCREMENT,
  `name` varchar(25) NOT NULL DEFAULT '',
  `title` varchar(25) NOT NULL DEFAULT '',
  `description` text,
  `config` text,
  `available` tinyint(1) NOT NULL DEFAULT '1',
  `if_online_support` tinyint(1) NOT NULL DEFAULT '0',
  `created` int(10) NOT NULL DEFAULT '0',
  `modified` int(10) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;


DROP TABLE IF EXISTS aq_personals;
CREATE TABLE `aq_personals` (
  `member_id` int(10) NOT NULL DEFAULT '-1',
  `resume_status` tinyint(1) NOT NULL DEFAULT '0',
  `max_education` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`member_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;


DROP TABLE IF EXISTS aq_plugins;
CREATE TABLE `aq_plugins` (
  `id` smallint(3) NOT NULL AUTO_INCREMENT,
  `name` varchar(25) NOT NULL DEFAULT '',
  `title` varchar(25) NOT NULL DEFAULT '',
  `description` text,
  `copyright` varchar(25) NOT NULL DEFAULT '',
  `version` varchar(15) NOT NULL DEFAULT '',
  `pluginvar` text,
  `available` tinyint(1) NOT NULL DEFAULT '1',
  `created` int(10) NOT NULL DEFAULT '0',
  `modified` int(10) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;


DROP TABLE IF EXISTS aq_pointlogs;
CREATE TABLE `aq_pointlogs` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `member_id` int(10) NOT NULL DEFAULT '-1',
  `action_name` varchar(25) NOT NULL DEFAULT '',
  `points` smallint(3) NOT NULL DEFAULT '0',
  `description` text,
  `ip_address` varchar(15) NOT NULL DEFAULT '',
  `created` int(10) NOT NULL DEFAULT '0',
  `modified` int(10) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;


DROP TABLE IF EXISTS aq_productcategories;
CREATE TABLE `aq_productcategories` (
  `id` smallint(6) NOT NULL AUTO_INCREMENT,
  `parent_id` smallint(6) NOT NULL DEFAULT '0',
  `level` tinyint(1) NOT NULL DEFAULT '1',
  `name` varchar(255) NOT NULL DEFAULT '',
  `display_order` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=76 DEFAULT CHARSET=utf8;

INSERT INTO aq_productcategories VALUES('1','0','1','电子元器 ','0');
INSERT INTO aq_productcategories VALUES('2','0','1','美容护理 ','0');
INSERT INTO aq_productcategories VALUES('3','0','1','医疗保养 ','0');
INSERT INTO aq_productcategories VALUES('4','0','1','仪器仪表 ','0');
INSERT INTO aq_productcategories VALUES('5','0','1','家居用品 ','0');
INSERT INTO aq_productcategories VALUES('6','0','1','礼品玩具 ','0');
INSERT INTO aq_productcategories VALUES('7','0','1','汽摩与配 ','0');
INSERT INTO aq_productcategories VALUES('8','0','1','冶金钢铁 ','0');
INSERT INTO aq_productcategories VALUES('9','0','1','包装 ','0');
INSERT INTO aq_productcategories VALUES('10','0','1','电脑软件 ','0');
INSERT INTO aq_productcategories VALUES('11','0','1','建筑建材 ','0');
INSERT INTO aq_productcategories VALUES('12','0','1','印刷 ','0');
INSERT INTO aq_productcategories VALUES('13','0','1','家电 ','0');
INSERT INTO aq_productcategories VALUES('14','0','1','交通运输 ','0');
INSERT INTO aq_productcategories VALUES('15','0','1','通讯 ','0');
INSERT INTO aq_productcategories VALUES('16','0','1','照明工业 ','0');
INSERT INTO aq_productcategories VALUES('17','0','1','电工电气 ','0');
INSERT INTO aq_productcategories VALUES('18','0','1','石油化工 ','0');
INSERT INTO aq_productcategories VALUES('19','0','1','涂装与表 ','0');
INSERT INTO aq_productcategories VALUES('20','0','1','橡胶塑料 ','0');
INSERT INTO aq_productcategories VALUES('21','0','1','安全防护 ','0');
INSERT INTO aq_productcategories VALUES('22','0','1','办公文教 ','0');
INSERT INTO aq_productcategories VALUES('23','0','1','传媒 ','0');
INSERT INTO aq_productcategories VALUES('24','0','1','环保与水处理 ','0');
INSERT INTO aq_productcategories VALUES('25','0','1','工程机械 ','0');
INSERT INTO aq_productcategories VALUES('26','0','1','五金工具 ','0');
INSERT INTO aq_productcategories VALUES('27','0','1','运动休闲 ','0');
INSERT INTO aq_productcategories VALUES('28','0','1','纸业 ','0');
INSERT INTO aq_productcategories VALUES('29','0','1','纺织皮革 ','0');
INSERT INTO aq_productcategories VALUES('30','0','1','服装 ','0');
INSERT INTO aq_productcategories VALUES('31','0','1','农业 ','0');
INSERT INTO aq_productcategories VALUES('32','0','1','食品饮料 ','0');
INSERT INTO aq_productcategories VALUES('33','0','1','服饰 ','0');
INSERT INTO aq_productcategories VALUES('34','0','1','商务服务 ','0');
INSERT INTO aq_productcategories VALUES('35','0','1','机械工业行业','0');
INSERT INTO aq_productcategories VALUES('36','1','2','保险元器件  ','0');
INSERT INTO aq_productcategories VALUES('37','1','2','半导体材料  ','0');
INSERT INTO aq_productcategories VALUES('38','1','2','其它电子材料  ','0');
INSERT INTO aq_productcategories VALUES('39','1','2','电容器  ','0');
INSERT INTO aq_productcategories VALUES('40','1','2','其它电子元器件  ','0');
INSERT INTO aq_productcategories VALUES('41','1','2','三极管  ','0');
INSERT INTO aq_productcategories VALUES('42','1','2','二极管  ','0');
INSERT INTO aq_productcategories VALUES('43','1','2','频率元件  ','0');
INSERT INTO aq_productcategories VALUES('44','1','2','变频器  ','0');
INSERT INTO aq_productcategories VALUES('45','1','2','电感器  ','0');
INSERT INTO aq_productcategories VALUES('46','1','2','电声配件  ','0');
INSERT INTO aq_productcategories VALUES('47','1','2','电声器件  ','0');
INSERT INTO aq_productcategories VALUES('48','1','2','电真空器件  ','0');
INSERT INTO aq_productcategories VALUES('49','1','2','连接器  ','0');
INSERT INTO aq_productcategories VALUES('50','1','2','继电器  ','0');
INSERT INTO aq_productcategories VALUES('51','1','2','压电晶体材料  ','0');
INSERT INTO aq_productcategories VALUES('52','1','2','电子浆料  ','0');
INSERT INTO aq_productcategories VALUES('53','1','2','电子用塑胶制品  ','0');
INSERT INTO aq_productcategories VALUES('54','1','2','场效应管  ','0');
INSERT INTO aq_productcategories VALUES('55','1','2','电子加工  ','0');
INSERT INTO aq_productcategories VALUES('56','1','2','磁性元器件  ','0');
INSERT INTO aq_productcategories VALUES('57','1','2','印刷线路板  ','0');
INSERT INTO aq_productcategories VALUES('58','1','2','开关元件  ','0');
INSERT INTO aq_productcategories VALUES('59','1','2','光电与显示器件  ','0');
INSERT INTO aq_productcategories VALUES('60','1','2','电位器  ','0');
INSERT INTO aq_productcategories VALUES('61','1','2','显示器件  ','0');
INSERT INTO aq_productcategories VALUES('62','1','2','传感器  ','0');
INSERT INTO aq_productcategories VALUES('63','1','2','电工仪器仪表  ','0');
INSERT INTO aq_productcategories VALUES('64','1','2','电工陶瓷材料  ','0');
INSERT INTO aq_productcategories VALUES('65','1','2','集成电路  ','0');
INSERT INTO aq_productcategories VALUES('66','1','2','电阻器  ','0');
INSERT INTO aq_productcategories VALUES('67','1','2','翻板  ','0');
INSERT INTO aq_productcategories VALUES('68','1','2','屏蔽材料  ','0');
INSERT INTO aq_productcategories VALUES('69','1','2','红外技术及应用  ','0');
INSERT INTO aq_productcategories VALUES('70','1','2','电子项目合作  ','0');
INSERT INTO aq_productcategories VALUES('71','1','2','变压器  ','0');
INSERT INTO aq_productcategories VALUES('72','1','2','激光器件  ','0');
INSERT INTO aq_productcategories VALUES('73','1','2','电子五金件  ','0');
INSERT INTO aq_productcategories VALUES('74','1','2','工业编码器  ','0');
INSERT INTO aq_productcategories VALUES('75','1','2','覆铜板材料 ','0');

DROP TABLE IF EXISTS aq_productprices;
CREATE TABLE `aq_productprices` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `type_id` tinyint(1) NOT NULL DEFAULT '1',
  `product_id` int(10) NOT NULL DEFAULT '-1',
  `brand_id` smallint(6) NOT NULL DEFAULT '-1',
  `member_id` int(10) NOT NULL DEFAULT '-1',
  `company_id` int(10) NOT NULL DEFAULT '-1',
  `area_id` smallint(6) NOT NULL DEFAULT '0',
  `price_trends` tinyint(1) NOT NULL DEFAULT '0',
  `category_id` smallint(6) NOT NULL DEFAULT '0',
  `source` varchar(255) NOT NULL DEFAULT '',
  `title` varchar(255) NOT NULL DEFAULT '',
  `description` text NOT NULL,
  `units` tinyint(1) NOT NULL DEFAULT '1',
  `currency` tinyint(1) NOT NULL DEFAULT '1',
  `price` float(9,2) NOT NULL DEFAULT '0.00',
  `created` int(10) NOT NULL DEFAULT '0',
  `modified` int(10) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;


DROP TABLE IF EXISTS aq_products;
CREATE TABLE `aq_products` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `member_id` int(10) NOT NULL DEFAULT '-1',
  `company_id` int(10) NOT NULL DEFAULT '0',
  `cache_companyname` varchar(100) NOT NULL DEFAULT '',
  `sort_id` tinyint(1) NOT NULL DEFAULT '1',
  `brand_id` smallint(6) NOT NULL DEFAULT '0',
  `category_id` smallint(6) NOT NULL DEFAULT '0',
  `industry_id` smallint(6) NOT NULL DEFAULT '0',
  `country_id` smallint(6) NOT NULL DEFAULT '0',
  `area_id` smallint(6) NOT NULL DEFAULT '0',
  `name` varchar(255) NOT NULL DEFAULT '',
  `price` float(9,2) NOT NULL DEFAULT '0.00',
  `sn` varchar(20) NOT NULL DEFAULT '',
  `spec` varchar(20) NOT NULL DEFAULT '',
  `produce_area` varchar(50) NOT NULL DEFAULT '',
  `packing_content` varchar(100) NOT NULL DEFAULT '',
  `picture` varchar(50) NOT NULL DEFAULT '',
  `content` text,
  `producttype_id` smallint(6) NOT NULL DEFAULT '0',
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `state` tinyint(1) NOT NULL DEFAULT '1',
  `ifnew` tinyint(1) NOT NULL DEFAULT '0',
  `ifcommend` tinyint(1) NOT NULL DEFAULT '0',
  `priority` tinyint(1) NOT NULL DEFAULT '0',
  `tag_ids` varchar(255) DEFAULT '',
  `clicked` smallint(6) NOT NULL DEFAULT '1',
  `formattribute_ids` text,
  `created` int(10) NOT NULL DEFAULT '0',
  `modified` int(10) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `picture` (`picture`,`status`,`state`),
  KEY `picture_2` (`picture`,`status`,`state`),
  KEY `picture_3` (`picture`,`status`,`state`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

INSERT INTO aq_products VALUES('1','1','1','友邻电子商务网','0','0','0','5','0','1','32英寸高清液晶电视','100.00','','','','','sample/product/1.jpg','尚品唛网——时尚耐用品之最新产品展示的平台.科技发展趋势.新品信息资讯','1','1','1','0','1','0','','10','','1325314541','1325314541');
INSERT INTO aq_products VALUES('2','1','1','友邻电子商务网','1','0','0','1','0','1','dv_sx_c10','125.00','','','','','sample/product/2.jpg','分享您所了解的消费类产品信息，商机无限尽在唛网.最新产品资讯网。','1','1','1','0','1','0','','2','','1325314541','1325314541');
INSERT INTO aq_products VALUES('3','1','1','友邻电子商务网','1','0','0','1','0','1','电子词典','256.00','','','','','sample/product/3.jpg','涉及全球产品发展趋势、新品代理、招商加盟信息等杂谈','1','1','1','0','1','0','','11','','1325314541','1325314541');
INSERT INTO aq_products VALUES('4','1','1','友邻电子商务网','1','0','0','1','0','1','e导航','352.00','','','','','sample/product/4.jpg','分享您所了解的生活居家耐用品资讯信息动态。（优秀的产品将会首页展示）','1','1','1','0','0','0','','2','','1325314541','1325314541');
INSERT INTO aq_products VALUES('5','1','1','友邻电子商务网','1','0','0','1','0','1','超值独显笔记本','145.00','','','','','sample/product/5.jpg','Continuance电池问世了，可以通过电池的USB接口，为其它电子设备直接供电，除了侧面的USB接口它与普通充电电池别无','2','1','1','0','0','0','','2','','1325314541','1325314541');
INSERT INTO aq_products VALUES('6','1','1','友邻电子商务网','1','0','0','1','0','1','MP4视频播放机','255.00','','','','','sample/product/6.jpg','索尼周二开始出货在CES上曾展示过的双屏幕数码摄像机Bloggie Duo HD，这款产品拥有前后两个2.0和2.7英寸摄像头，可以帮助自拍用户准确日本的核辐射泄露让大家重新认识了辐射的危害，这个概念设计也浮出水面，是专门针对孕妇群体，你可以佩戴在手上，平实的时候显示的是绿','2','1','1','0','0','0','','4','','1325314541','1325314541');
INSERT INTO aq_products VALUES('7','1','1','友邻电子商务网','1','0','0','1','0','1','高贵不贵1080高清','6632.00','','','','','sample/product/7.jpg','东芝欧洲今天宣布了Satellite P700 3D笔记本电脑，他们全部搭售3D主动快门眼镜，该产品线下一共有四个型号，分别是Satellite P750 3D/P7','3','1','1','0','0','0','','8','','1325314541','1325314541');

DROP TABLE IF EXISTS aq_productsorts;
CREATE TABLE `aq_productsorts` (
  `id` smallint(3) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL DEFAULT '',
  `display_order` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

INSERT INTO aq_productsorts VALUES('1','最新产品','0');
INSERT INTO aq_productsorts VALUES('2','库存产品','0');
INSERT INTO aq_productsorts VALUES('3','普通产品','0');

DROP TABLE IF EXISTS aq_producttypes;
CREATE TABLE `aq_producttypes` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `member_id` int(10) NOT NULL DEFAULT '-1',
  `company_id` int(10) NOT NULL DEFAULT '-1',
  `name` varchar(25) NOT NULL DEFAULT '',
  `level` tinyint(1) NOT NULL DEFAULT '0',
  `created` int(10) NOT NULL DEFAULT '0',
  `modified` int(10) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;


DROP TABLE IF EXISTS aq_quotes;
CREATE TABLE `aq_quotes` (
  `id` smallint(6) NOT NULL AUTO_INCREMENT,
  `product_id` int(10) NOT NULL DEFAULT '-1',
  `market_id` smallint(6) NOT NULL DEFAULT '-1',
  `type_id` smallint(6) NOT NULL DEFAULT '0',
  `title` varchar(255) NOT NULL DEFAULT '',
  `content` text NOT NULL,
  `area_id` smallint(6) NOT NULL DEFAULT '0',
  `area_id1` smallint(6) NOT NULL DEFAULT '0',
  `area_id2` smallint(6) NOT NULL DEFAULT '0',
  `area_id3` smallint(6) NOT NULL DEFAULT '0',
  `max_price` float(9,2) NOT NULL DEFAULT '0.00',
  `min_price` float(9,2) NOT NULL DEFAULT '0.00',
  `units` tinyint(1) NOT NULL DEFAULT '1',
  `currency` tinyint(1) NOT NULL DEFAULT '1',
  `trend_data` text NOT NULL,
  `hits` int(10) NOT NULL DEFAULT '1',
  `created` int(10) NOT NULL DEFAULT '0',
  `modified` int(10) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

INSERT INTO aq_quotes VALUES('1','1','-1','0','今日国际棉花指数(SM)','','0','0','0','0','100.00','90.00','1','1','','4','1325314541','0');
INSERT INTO aq_quotes VALUES('2','1','-1','0','今日国家棉花价格A指数','','0','0','0','0','150.00','100.00','1','1','','1','1325314541','0');
INSERT INTO aq_quotes VALUES('3','1','-1','0','今日国家棉花价格B指数','','0','0','0','0','210.00','120.00','1','1','','1','1325314541','0');
INSERT INTO aq_quotes VALUES('4','1','-1','0','今日中国棉花收购价格指数','','0','0','0','0','230.00','200.00','1','1','','4','1325314541','0');
INSERT INTO aq_quotes VALUES('10','-1','-1','0','今日我国部分地区豆粕价格行情汇总','','0','0','0','0','0.00','0.00','1','1','a:2:{s:1:\"x\";a:2:{i:0;s:1:\"1\";i:1;s:1:\"2\";}s:1:\"y\";a:2:{i:0;s:3:\"150\";i:1;s:3:\"200\";}}','24','0','1301671812');

DROP TABLE IF EXISTS aq_quotetypes;
CREATE TABLE `aq_quotetypes` (
  `id` smallint(6) NOT NULL AUTO_INCREMENT,
  `parent_id` smallint(6) NOT NULL DEFAULT '0',
  `level` tinyint(1) NOT NULL DEFAULT '1',
  `name` varchar(255) NOT NULL DEFAULT '',
  `display_order` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;


DROP TABLE IF EXISTS aq_roleadminers;
CREATE TABLE `aq_roleadminers` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `adminrole_id` int(2) DEFAULT NULL,
  `adminer_id` int(2) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;


DROP TABLE IF EXISTS aq_roleprivileges;
CREATE TABLE `aq_roleprivileges` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `adminrole_id` int(2) DEFAULT NULL,
  `adminprivilege_id` int(2) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;


DROP TABLE IF EXISTS aq_services;
CREATE TABLE `aq_services` (
  `id` smallint(6) NOT NULL AUTO_INCREMENT,
  `member_id` int(10) NOT NULL DEFAULT '-1',
  `title` varchar(25) NOT NULL DEFAULT '',
  `content` text,
  `nick_name` varchar(25) DEFAULT '',
  `email` varchar(25) NOT NULL DEFAULT '',
  `user_ip` varchar(11) NOT NULL DEFAULT '',
  `type_id` tinyint(1) NOT NULL DEFAULT '0',
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `created` int(10) NOT NULL DEFAULT '0',
  `modified` int(10) NOT NULL DEFAULT '0',
  `revert_content` text,
  `revert_date` int(10) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;


DROP TABLE IF EXISTS aq_sessions;
CREATE TABLE `aq_sessions` (
  `sesskey` char(32) NOT NULL DEFAULT '',
  `expiry` int(10) NOT NULL DEFAULT '0',
  `expireref` char(64) NOT NULL DEFAULT '',
  `data` text,
  `created` int(10) NOT NULL DEFAULT '0',
  `modified` int(10) NOT NULL DEFAULT '0',
  KEY `sess2_expiry` (`expiry`),
  KEY `sess2_expireref` (`expireref`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;


DROP TABLE IF EXISTS aq_settings;
CREATE TABLE `aq_settings` (
  `id` smallint(3) NOT NULL AUTO_INCREMENT,
  `type_id` tinyint(1) NOT NULL DEFAULT '0',
  `variable` varchar(150) NOT NULL DEFAULT '',
  `valued` text,
  PRIMARY KEY (`id`),
  UNIQUE KEY `variable` (`variable`)
) ENGINE=MyISAM AUTO_INCREMENT=412 DEFAULT CHARSET=utf8;

INSERT INTO aq_settings VALUES('406','0','site_name','爱侨网');
INSERT INTO aq_settings VALUES('407','0','site_title','全球华商平台 - Powered By PHPB2B');
INSERT INTO aq_settings VALUES('350','0','site_banner_word','最专业的行业电子商务网站');
INSERT INTO aq_settings VALUES('4','0','company_name','网站的版权者');
INSERT INTO aq_settings VALUES('409','0','site_url','http://dev.aiqiao.com/');
INSERT INTO aq_settings VALUES('353','0','icp_number','ICP备案号码');
INSERT INTO aq_settings VALUES('7','0','service_tel','(86)10-41235678');
INSERT INTO aq_settings VALUES('8','0','sale_tel','(86)10-41235678');
INSERT INTO aq_settings VALUES('9','0','service_qq','1319250566');
INSERT INTO aq_settings VALUES('10','0','service_msn','service@host.com');
INSERT INTO aq_settings VALUES('11','0','service_email','service@host.com');
INSERT INTO aq_settings VALUES('324','0','site_description','<p>phpb2b是一款开源免费的b2b建站程序。</p>');
INSERT INTO aq_settings VALUES('13','0','cp_picture','0');
INSERT INTO aq_settings VALUES('14','0','register_picture','0');
INSERT INTO aq_settings VALUES('15','0','login_picture','0');
INSERT INTO aq_settings VALUES('16','0','vispost_auth','1');
INSERT INTO aq_settings VALUES('17','0','watermark','1');
INSERT INTO aq_settings VALUES('410','0','watertext','http://dev.aiqiao.com/');
INSERT INTO aq_settings VALUES('19','0','watercolor','#990000');
INSERT INTO aq_settings VALUES('20','0','add_market_check','1');
INSERT INTO aq_settings VALUES('21','0','regcheck','0');
INSERT INTO aq_settings VALUES('268','0','vis_post','1');
INSERT INTO aq_settings VALUES('270','0','vis_post_check','0');
INSERT INTO aq_settings VALUES('271','0','sell_logincheck','1');
INSERT INTO aq_settings VALUES('272','0','buy_logincheck','0');
INSERT INTO aq_settings VALUES('405','0','install_dateline','1325314536');
INSERT INTO aq_settings VALUES('27','0','last_backup','1325314541');
INSERT INTO aq_settings VALUES('28','0','smtp_server','smtp.yourdomain.com');
INSERT INTO aq_settings VALUES('29','0','smtp_port','25');
INSERT INTO aq_settings VALUES('30','0','smtp_auth','1');
INSERT INTO aq_settings VALUES('31','0','mail_from','administrator@host.com');
INSERT INTO aq_settings VALUES('32','0','mail_fromwho','网站管理员');
INSERT INTO aq_settings VALUES('33','0','auth_username','administrator@host.com');
INSERT INTO aq_settings VALUES('34','0','auth_password','password');
INSERT INTO aq_settings VALUES('35','0','send_mail','2');
INSERT INTO aq_settings VALUES('36','0','sendmail_silent','1');
INSERT INTO aq_settings VALUES('37','0','mail_delimiter','0');
INSERT INTO aq_settings VALUES('360','0','reg_filename','register.php');
INSERT INTO aq_settings VALUES('402','0','new_userauth','0');
INSERT INTO aq_settings VALUES('361','0','post_filename','post.php');
INSERT INTO aq_settings VALUES('41','0','forbid_ip','');
INSERT INTO aq_settings VALUES('403','0','ip_reg_sep','0');
INSERT INTO aq_settings VALUES('408','0','backup_dir','72P9vE');
INSERT INTO aq_settings VALUES('258','0','capt_logging','0');
INSERT INTO aq_settings VALUES('259','0','capt_register','1');
INSERT INTO aq_settings VALUES('260','0','capt_post_free','0');
INSERT INTO aq_settings VALUES('261','0','capt_add_market','0');
INSERT INTO aq_settings VALUES('262','0','capt_login_admin','1');
INSERT INTO aq_settings VALUES('263','0','capt_apply_friendlink','0');
INSERT INTO aq_settings VALUES('264','0','capt_service','0');
INSERT INTO aq_settings VALUES('51','0','backup_type','1');
INSERT INTO aq_settings VALUES('400','0','register_type','open_common_reg');
INSERT INTO aq_settings VALUES('411','0','auth_key','sg7H92qbW5VXkMtP');
INSERT INTO aq_settings VALUES('54','0','keyword_bidding','0');
INSERT INTO aq_settings VALUES('201','0','passport_support','0');
INSERT INTO aq_settings VALUES('351','0','site_logo','images/logo.jpg');
INSERT INTO aq_settings VALUES('362','0','main_cache','1');
INSERT INTO aq_settings VALUES('363','0','member_cache','0');
INSERT INTO aq_settings VALUES('364','0','space_cache','0');
INSERT INTO aq_settings VALUES('365','0','label_cache','0');
INSERT INTO aq_settings VALUES('366','0','main_cache_lifetime','3600');
INSERT INTO aq_settings VALUES('367','0','main_cache_check','0');
INSERT INTO aq_settings VALUES('344','1','update_alert_type','1');
INSERT INTO aq_settings VALUES('345','1','update_alert_lasttime','1301549982');
INSERT INTO aq_settings VALUES('369','0','theme','red');
INSERT INTO aq_settings VALUES('269','0','tag_check','0');
INSERT INTO aq_settings VALUES('273','0','session_savepath','0');
INSERT INTO aq_settings VALUES('274','1','offer_expire_method','1');
INSERT INTO aq_settings VALUES('275','1','offer_moderate_point','0');
INSERT INTO aq_settings VALUES('276','1','offer_refresh_lower_day','3');
INSERT INTO aq_settings VALUES('277','1','offer_update_lower_hour','24');
INSERT INTO aq_settings VALUES('278','1','offer_filter','0');
INSERT INTO aq_settings VALUES('358','0','redirect_url','');
INSERT INTO aq_settings VALUES('399','0','languages','');
INSERT INTO aq_settings VALUES('346','0','time_offset','0');
INSERT INTO aq_settings VALUES('347','0','date_format','Y-m-d');
INSERT INTO aq_settings VALUES('401','0','agreement','<p>Demo</p>');
INSERT INTO aq_settings VALUES('359','0','space_name','商铺');
INSERT INTO aq_settings VALUES('404','0','welcome_msg','0');

DROP TABLE IF EXISTS aq_spacecaches;
CREATE TABLE `aq_spacecaches` (
  `cache_spacename` varchar(255) NOT NULL DEFAULT '',
  `company_id` int(10) NOT NULL DEFAULT '-1',
  `data1` text NOT NULL,
  `data2` text NOT NULL,
  `expiration` int(10) NOT NULL DEFAULT '0',
  PRIMARY KEY (`company_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;


DROP TABLE IF EXISTS aq_spacelinks;
CREATE TABLE `aq_spacelinks` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `member_id` int(10) NOT NULL DEFAULT '0',
  `company_id` int(10) NOT NULL DEFAULT '0',
  `display_order` smallint(3) NOT NULL DEFAULT '0',
  `title` varchar(100) NOT NULL DEFAULT '',
  `url` varchar(255) NOT NULL DEFAULT '',
  `is_outlink` tinyint(1) NOT NULL DEFAULT '0',
  `description` varchar(100) NOT NULL DEFAULT '',
  `logo` varchar(255) NOT NULL DEFAULT '',
  `highlight` tinyint(1) NOT NULL DEFAULT '0',
  `created` int(10) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;


DROP TABLE IF EXISTS aq_spreadadses;
CREATE TABLE `aq_spreadadses` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `member_id` int(10) NOT NULL DEFAULT '0',
  `title` varchar(250) NOT NULL DEFAULT '',
  `desc1` varchar(200) NOT NULL DEFAULT '',
  `desc2` varchar(200) NOT NULL DEFAULT '',
  `show_url` varchar(100) NOT NULL DEFAULT '',
  `target_url` varchar(100) NOT NULL DEFAULT '',
  `created` int(10) NOT NULL DEFAULT '0',
  `modified` int(10) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;


DROP TABLE IF EXISTS aq_spreadadstypes;
CREATE TABLE `aq_spreadadstypes` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `member_id` int(10) NOT NULL DEFAULT '0',
  `name` varchar(250) NOT NULL DEFAULT '',
  `created` int(10) NOT NULL DEFAULT '0',
  `modified` int(10) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;


DROP TABLE IF EXISTS aq_spreads;
CREATE TABLE `aq_spreads` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `member_id` int(10) NOT NULL DEFAULT '-1',
  `keyword_name` varchar(25) NOT NULL DEFAULT '',
  `title` varchar(50) NOT NULL DEFAULT '',
  `content` varchar(200) NOT NULL DEFAULT '',
  `target_url` varchar(100) NOT NULL DEFAULT '',
  `hits` int(10) NOT NULL DEFAULT '1',
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `expiration` int(10) NOT NULL DEFAULT '0',
  `show_times` int(10) NOT NULL DEFAULT '1',
  `cost_every_hit` float(7,2) NOT NULL DEFAULT '0.00',
  `display_order` tinyint(1) NOT NULL DEFAULT '0',
  `created` int(10) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `spread` (`id`,`keyword_name`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

INSERT INTO aq_spreads VALUES('1','1','公司','北京友邻电子商务科技有限公司','企业电子商务第一站，联系电话010-41235678','http://www.phpb2b.com','1','1','1327906541','1','0.00','0','1325314541');
INSERT INTO aq_spreads VALUES('2','1','公司','Beijing Ualink B2B E-Commerce','The most popular b2b e-commerce company contact 010-41235678','http://www.phpb2b.com','1','1','1327906541','1','0.00','0','1325314541');

DROP TABLE IF EXISTS aq_standards;
CREATE TABLE `aq_standards` (
  `id` smallint(6) NOT NULL AUTO_INCREMENT,
  `attachment_id` smallint(6) NOT NULL DEFAULT '0',
  `type_id` smallint(6) NOT NULL DEFAULT '0',
  `title` varchar(255) NOT NULL DEFAULT '',
  `source` varchar(255) NOT NULL DEFAULT '',
  `digest` varchar(255) NOT NULL DEFAULT '',
  `content` text NOT NULL,
  `publish_time` int(10) NOT NULL DEFAULT '0',
  `force_time` int(10) NOT NULL DEFAULT '0',
  `clicked` smallint(6) NOT NULL DEFAULT '1',
  `created` int(10) NOT NULL DEFAULT '0',
  `modified` int(10) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

INSERT INTO aq_standards VALUES('6','0','2','卫生部公布敌敌畏等47种食品非法添加','','','','0','0','1','1325314541','0');
INSERT INTO aq_standards VALUES('7','0','2','关于加强违法使用非食用物质加工食品案','','','','0','0','1','1325314541','0');

DROP TABLE IF EXISTS aq_standardtypes;
CREATE TABLE `aq_standardtypes` (
  `id` smallint(3) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL DEFAULT '',
  `display_order` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

INSERT INTO aq_standardtypes VALUES('1','国家法规','0');
INSERT INTO aq_standardtypes VALUES('2','地方法规','0');

DROP TABLE IF EXISTS aq_tags;
CREATE TABLE `aq_tags` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `member_id` int(10) NOT NULL DEFAULT '0',
  `name` varchar(255) NOT NULL DEFAULT '',
  `numbers` smallint(6) NOT NULL DEFAULT '0',
  `closed` tinyint(1) NOT NULL DEFAULT '0',
  `flag` tinyint(1) NOT NULL DEFAULT '0',
  `created` int(10) NOT NULL DEFAULT '0',
  `modified` int(10) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `title` (`name`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

INSERT INTO aq_tags VALUES('1','0','热门','1','0','0','1325314541','1325314541');
INSERT INTO aq_tags VALUES('2','0','搜索','2','0','1','1325314541','1325314541');
INSERT INTO aq_tags VALUES('3','0','标签','1','0','2','1325314541','1325314541');

DROP TABLE IF EXISTS aq_templets;
CREATE TABLE `aq_templets` (
  `id` smallint(3) NOT NULL AUTO_INCREMENT,
  `name` varchar(25) NOT NULL DEFAULT '',
  `title` varchar(25) NOT NULL DEFAULT '',
  `directory` varchar(100) NOT NULL DEFAULT '',
  `type` enum('system','user') NOT NULL DEFAULT 'system',
  `author` varchar(100) NOT NULL DEFAULT '',
  `style` varchar(255) NOT NULL DEFAULT '',
  `description` text,
  `is_default` tinyint(1) NOT NULL DEFAULT '0',
  `require_membertype` varchar(100) NOT NULL DEFAULT '0',
  `require_membergroups` varchar(100) NOT NULL DEFAULT '0',
  `status` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=utf8;

INSERT INTO aq_templets VALUES('3','brown','棕色企业模板','skins/brown/','user','PB TEAM','','A PHPB2B Corperate Templet. Enjoy!','0','0','0','1');
INSERT INTO aq_templets VALUES('4','red','红色企业模板','skins/red/','user','PB TEAM','','A PHPB2B Corperate Templet. Enjoy!','0','0','0','1');
INSERT INTO aq_templets VALUES('5','default','默认企业模板','skins/default/','user','PB TEAM','','A PHPB2B Corperate Templet. Enjoy!','0','0','0','1');
INSERT INTO aq_templets VALUES('7','green','绿色企业模板','skins/green/','user','PB TEAM','','A PHPB2B Corperate Templet. Enjoy!','0','0','0','1');
INSERT INTO aq_templets VALUES('8','orange','橙色企业模板','skins/orange/','user','PB TEAM','','A PHPB2B Corperate Templet. Enjoy!','0','0','0','1');
INSERT INTO aq_templets VALUES('15','green','绿色模板','templates/green/','system','PB TEAM','#71B522','A PHPB2B Orange Color Style Templet. Enjoy!','0','0','0','1');
INSERT INTO aq_templets VALUES('11','red','红色模板','templates/red/','system','PB TEAM','#CF352E','A PHPB2B Red Color Style Templet. Enjoy!','1','0','0','1');
INSERT INTO aq_templets VALUES('12','default','默认模板','templates/default/','system','PB TEAM','#4DB5F8','A Ualink Default Template. Enjoy!','0','0','0','1');

DROP TABLE IF EXISTS aq_topicnews;
CREATE TABLE `aq_topicnews` (
  `topic_id` smallint(6) NOT NULL DEFAULT '0',
  `news_id` smallint(6) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;


DROP TABLE IF EXISTS aq_topics;
CREATE TABLE `aq_topics` (
  `id` smallint(6) NOT NULL AUTO_INCREMENT,
  `alias_name` varchar(100) NOT NULL DEFAULT '',
  `templet` varchar(100) NOT NULL DEFAULT '',
  `title` varchar(255) NOT NULL DEFAULT '',
  `picture` varchar(255) NOT NULL DEFAULT '',
  `description` text,
  `created` int(10) NOT NULL DEFAULT '0',
  `modified` int(10) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

INSERT INTO aq_topics VALUES('1','test1','test1','金砖国家领导人第三次会晤','sample/topic/1.jpg','','1325314541','0');
INSERT INTO aq_topics VALUES('2','test2','','苹果Ipad2新品发布','sample/topic/2.jpg','','1325314541','0');
INSERT INTO aq_topics VALUES('3','test3','','日本附近海域9.0级地震','sample/topic/3.jpg','','1325314541','0');

DROP TABLE IF EXISTS aq_tradefields;
CREATE TABLE `aq_tradefields` (
  `trade_id` int(10) NOT NULL DEFAULT '0',
  `member_id` int(10) NOT NULL DEFAULT '0',
  `link_man` varchar(100) NOT NULL DEFAULT '',
  `address` varchar(100) NOT NULL DEFAULT '',
  `company_name` varchar(100) NOT NULL DEFAULT '',
  `email` varchar(100) NOT NULL DEFAULT '',
  `prim_tel` tinyint(1) NOT NULL DEFAULT '0',
  `prim_telnumber` varchar(25) NOT NULL DEFAULT '',
  `prim_im` tinyint(1) NOT NULL DEFAULT '0',
  `prim_imaccount` varchar(100) NOT NULL DEFAULT '',
  `brand_name` char(50) NOT NULL DEFAULT '',
  `template` char(50) NOT NULL DEFAULT '',
  PRIMARY KEY (`trade_id`),
  UNIQUE KEY `trade_id` (`trade_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;


DROP TABLE IF EXISTS aq_trades;
CREATE TABLE `aq_trades` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `type_id` tinyint(2) NOT NULL DEFAULT '0',
  `industry_id` smallint(6) NOT NULL DEFAULT '0',
  `country_id` smallint(6) NOT NULL DEFAULT '0',
  `area_id` smallint(6) NOT NULL DEFAULT '0',
  `member_id` int(10) NOT NULL DEFAULT '0',
  `company_id` int(5) NOT NULL DEFAULT '0',
  `cache_username` varchar(25) NOT NULL DEFAULT '',
  `cache_companyname` varchar(100) NOT NULL DEFAULT '',
  `cache_contacts` varchar(255) NOT NULL DEFAULT '',
  `title` varchar(100) NOT NULL DEFAULT '',
  `adwords` varchar(25) NOT NULL DEFAULT '',
  `content` text,
  `price` float(9,2) NOT NULL DEFAULT '0.00',
  `measuring_unit` varchar(15) NOT NULL DEFAULT '0',
  `monetary_unit` varchar(15) NOT NULL DEFAULT '0',
  `packing` varchar(150) NOT NULL DEFAULT '',
  `quantity` varchar(25) NOT NULL DEFAULT '',
  `display_order` tinyint(1) NOT NULL DEFAULT '0',
  `display_expiration` int(10) NOT NULL DEFAULT '0',
  `spec` varchar(200) NOT NULL DEFAULT '',
  `sn` varchar(25) NOT NULL DEFAULT '',
  `picture` varchar(50) NOT NULL DEFAULT '',
  `picture_remote` varchar(50) NOT NULL DEFAULT '',
  `status` tinyint(2) NOT NULL DEFAULT '0',
  `submit_time` int(10) NOT NULL DEFAULT '0',
  `expire_time` int(10) NOT NULL DEFAULT '0',
  `expire_days` int(3) NOT NULL DEFAULT '10',
  `if_commend` tinyint(1) NOT NULL DEFAULT '0',
  `if_urgent` enum('0','1') NOT NULL DEFAULT '0',
  `if_locked` enum('0','1') NOT NULL DEFAULT '0',
  `require_point` smallint(6) NOT NULL DEFAULT '0',
  `require_membertype` smallint(6) NOT NULL DEFAULT '0',
  `require_freedate` int(10) NOT NULL DEFAULT '0',
  `ip_addr` varchar(15) NOT NULL DEFAULT '',
  `clicked` int(10) NOT NULL DEFAULT '1',
  `tag_ids` varchar(255) NOT NULL DEFAULT '',
  `formattribute_ids` text,
  `highlight` tinyint(2) NOT NULL DEFAULT '0',
  `created` int(10) NOT NULL DEFAULT '0',
  `modified` int(10) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `type_id` (`type_id`,`picture`,`status`,`expire_time`),
  KEY `type_id_2` (`type_id`,`picture`,`status`,`expire_time`),
  KEY `type_id_3` (`type_id`,`status`),
  KEY `type_id_4` (`type_id`,`status`,`expire_time`),
  KEY `type_id_5` (`type_id`,`picture`,`status`,`expire_time`)
) ENGINE=MyISAM AUTO_INCREMENT=72 DEFAULT CHARSET=utf8;

INSERT INTO aq_trades VALUES('1','1','1','0','0','1','13','','','','求购双门不锈钢工作台 ','品牌招商','此为演示数据,不保证数据的真实性','1.23','0','0','','','0','0','','','sample/offer/1/1.jpg','','1','1325314541','1327906541','10','1','1','0','0','0','0','','4','','','0','1325314541','1325314541');
INSERT INTO aq_trades VALUES('2','1','1','0','0','1','13','','','','求购玉米大米花生红小豆','服装招商','此为演示数据,不保证数据的真实性','1.23','0','0','','','0','0','','','sample/offer/1/2.jpg','','1','1325314541','1327906541','10','1','1','0','0','0','0','','3','','','0','1325314541','1325314541');
INSERT INTO aq_trades VALUES('3','1','1','0','0','1','13','','','','爱沙尼亚客商采购淡水鲈鱼','餐饮大全','此为演示数据,不保证数据的真实性','1.23','0','0','','','0','0','','','sample/offer/1/3.jpg','','1','1325314541','1327906541','10','1','1','0','0','0','0','','1','','','0','1325314541','1325314541');
INSERT INTO aq_trades VALUES('4','1','1','0','0','1','13','','','','SLEEPCO公司求购','家居建材','此为演示数据,不保证数据的真实性','1.23','0','0','','','0','0','','','sample/offer/1/4.jpg','','1','1325314541','1327906541','10','1','1','0','0','0','0','','3','','','0','1325314541','1325314541');
INSERT INTO aq_trades VALUES('5','1','1','0','0','1','13','','','','求购樟松树苗株','美容教育','此为演示数据,不保证数据的真实性','1.23','0','0','','','0','0','','','sample/offer/1/5.jpg','','1','1325314541','1327906541','10','1','1','0','0','0','0','','1','','','0','1325314541','1325314541');
INSERT INTO aq_trades VALUES('6','1','1','0','0','1','13','','','','求购西瓜','机械环保','此为演示数据,不保证数据的真实性','1.23','0','0','','','0','0','','','sample/offer/1/6.jpg','','1','1325314541','1327906541','10','1','1','0','0','0','0','','3','','','0','1325314541','1325314541');
INSERT INTO aq_trades VALUES('7','1','1','0','0','1','13','','','','亚商求购中国产各种金属家具','新奇特','此为演示数据,不保证数据的真实性','1.23','0','0','','','0','0','','','sample/offer/1/7.jpg','','1','1325314541','1327906541','10','1','1','0','0','0','0','','2','','','0','1325314541','1325314541');
INSERT INTO aq_trades VALUES('8','1','1','0','0','1','1','','','','尼泊尔烟草招标','精品荟萃','此为演示数据,不保证数据的真实性','1.23','0','0','','','0','0','','','sample/offer/1/8.jpg','','1','1325314541','1327906541','10','1','1','0','0','0','0','','1','','','0','1325314541','1325314541');
INSERT INTO aq_trades VALUES('9','1','1','0','0','1','1','','','','亚商求购中国产食品包装设备','文字致富','此为演示数据,不保证数据的真实性','1.23','0','0','','','0','0','','','sample/offer/1/9.jpg','','1','1325314541','1327906541','10','1','1','0','0','0','0','','2','','','0','1325314541','1325314541');
INSERT INTO aq_trades VALUES('10','1','1','0','0','1','1','','','','亚商求购中国布料','商机资讯','此为演示数据,不保证数据的真实性','1.23','0','0','','','0','0','','','sample/offer/1/10.jpg','','1','1325314541','1327906541','10','1','1','0','0','0','0','','5','','','0','1325314541','1325314541');
INSERT INTO aq_trades VALUES('11','1','1','0','0','1','1','','','','亚商求购中国产电脑配件','视频','此为演示数据,不保证数据的真实性','1.23','0','0','','','0','0','','','sample/offer/1/11.jpg','','1','1325314541','1327906541','10','1','0','0','0','0','0','','3','','','0','1325314541','1325314541');
INSERT INTO aq_trades VALUES('12','1','1','0','0','1','1','','','','利比亚客商有意购买中国产薯条制作设备','专业招商','此为演示数据,不保证数据的真实性','1.23','0','0','','','0','0','','','sample/offer/1/12.jpg','','1','1325314541','1327906541','10','1','0','0','0','0','0','','3','','','0','1325314541','1325314541');
INSERT INTO aq_trades VALUES('13','1','1','0','0','1','1','','','','供应日本落叶松苗','加盟致富','此为演示数据,不保证数据的真实性','1.23','0','0','','','0','0','','','sample/offer/1/13.jpg','','1','1325314541','1327906541','10','1','0','0','0','0','0','','4','','','0','1325314541','1325314541');
INSERT INTO aq_trades VALUES('14','1','1','0','0','1','1','','','','供应各种花卉','信息网服装','此为演示数据,不保证数据的真实性','1.23','0','0','','','0','0','','','sample/offer/1/14.jpg','','1','1325314541','1327906541','10','1','0','0','0','0','0','','1','','','0','1325314541','1325314541');
INSERT INTO aq_trades VALUES('15','2','1','0','0','1','1','','','','Aspen信托集团寻求与中国公司合作','干洗折扣鞋','此为演示数据,不保证数据的真实性','1.23','0','0','','','0','0','','','sample/offer/2/1.jpg','','1','1325314541','1327906541','10','1','0','0','0','0','0','','1','','','0','1325314541','1325314541');
INSERT INTO aq_trades VALUES('16','2','1','0','0','1','1','','','','寻找蜂蜜购买商','包韩服童装','此为演示数据,不保证数据的真实性','1.23','0','0','','','0','0','','','sample/offer/2/2.jpg','','1','1325314541','1327906541','10','1','0','0','0','0','0','','1','','','0','1325314541','1325314541');
INSERT INTO aq_trades VALUES('17','2','1','0','0','1','1','','','','克罗地亚游艇公司欲向中国出售游艇','女装休闲服','此为演示数据,不保证数据的真实性','1.23','0','0','','','0','0','','','sample/offer/2/3.jpg','','1','1325314541','1327906541','10','1','0','0','0','0','0','','2','','','0','1325314541','1325314541');
INSERT INTO aq_trades VALUES('18','2','1','0','0','1','13','','','','以色列蔬果及农产品公司寻求国内买家','建材机械','此为演示数据,不保证数据的真实性','1.23','0','0','','','0','0','','','sample/offer/2/4.jpg','','1','1325314541','1327906541','10','1','0','0','0','0','0','','1','','','0','1325314541','1325314541');
INSERT INTO aq_trades VALUES('19','2','1','0','0','1','1','','','','科一可可加工公司寻求中国购买商','洗车养殖','此为演示数据,不保证数据的真实性','1.23','0','0','','','0','0','','','sample/offer/2/5.jpg','','1','1325314541','1327906541','10','1','0','0','0','0','0','','1','','','0','1325314541','1325314541');
INSERT INTO aq_trades VALUES('20','2','1','0','0','1','1','','','','爱尔兰ECOBUILD展览','灯箱围栏','此为演示数据,不保证数据的真实性','1.23','0','0','','','0','0','','','sample/offer/2/6.jpg','','1','1325314541','1327906541','10','1','0','0','0','0','0','','1','','','0','1325314541','1325314541');
INSERT INTO aq_trades VALUES('21','2','1','0','0','1','1','','','','供应台湾优种果苗','布艺','此为演示数据,不保证数据的真实性','1.23','0','0','','','0','0','','','sample/offer/2/7.jpg','','1','1325314541','1327906541','10','1','0','0','0','0','0','','1','','','0','1325314541','1325314541');
INSERT INTO aq_trades VALUES('22','2','1','0','0','1','1','','','','供应7元整款T恤库存服装批发','创业全','此为演示数据,不保证数据的真实性','1.23','0','0','','','0','0','','','sample/offer/2/8.jpg','','1','1325314541','1327906541','10','1','0','0','0','0','0','','3','','','0','1325314541','1325314541');
INSERT INTO aq_trades VALUES('23','2','1','0','0','1','1','','','','Promotional Wooden Comb ','景画节','此为演示数据,不保证数据的真实性','1.23','0','0','','','0','0','','','sample/offer/2/9.jpg','','1','1325314541','1327906541','10','1','0','0','0','0','0','','1','','','0','1325314541','1325314541');
INSERT INTO aq_trades VALUES('24','2','1','0','0','1','1','','','','Sell Aida Arm Chairs ','能环保鞋套','此为演示数据,不保证数据的真实性','1.23','0','0','','','0','0','','','sample/offer/2/10.jpg','','1','1325314541','1327906541','10','1','0','0','0','0','0','','2','','','0','1325314541','1325314541');
INSERT INTO aq_trades VALUES('25','2','2','0','0','1','1','','','','Vacuum Dehydrator For Emulsified','机涂料','此为演示数据,不保证数据的真实性','1.23','0','0','','','0','0','','','sample/offer/2/11.jpg','','1','1325314541','1327906541','10','1','0','0','0','0','0','','2','','','0','1325314541','1325314541');
INSERT INTO aq_trades VALUES('26','2','2','0','0','1','1','','','','Samsung Cartridge Chips ','餐饮小吃','此为演示数据,不保证数据的真实性','1.23','0','0','','','0','0','','','sample/offer/2/12.jpg','','1','1325314541','1327906541','10','1','0','0','0','0','0','','2','','','0','1325314541','1325314541');
INSERT INTO aq_trades VALUES('27','2','2','3','0','1','1','','','','Sell Polarized Lens','美食速食','此为演示数据,不保证数据的真实性','1.23','0','0','','','0','0','','','sample/offer/2/13.jpg','','1','1325314541','1327906541','10','1','0','0','0','0','0','','1','','','0','1325314541','1325314541');
INSERT INTO aq_trades VALUES('28','2','2','3','0','1','1','','','','Buy Cattle Fence From','快餐火锅','此为演示数据,不保证数据的真实性','1.23','0','0','','','0','0','','','sample/offer/2/14.jpg','','1','1325314541','1327906541','10','1','0','0','0','0','0','','7','','','0','1325314541','1325314541');
INSERT INTO aq_trades VALUES('29','6','1','1','3','1','1','','','','知名品牌创业首选','知名品牌创业首选','此为演示数据,不保证数据的真实性','1.23','0','0','','','0','0','','','sample/offer/1/1.jpg','','1','1325314541','1327906541','10','1','0','0','0','0','0','','9','3,4','5,6,7,8,9,10','0','1325314541','1325314541');
INSERT INTO aq_trades VALUES('70','4','3','2','1','1','1','','','','大量供应孔明灯 全国批发','','此为演示数据,不保证数据的真实性','1.23','0','0','','','0','0','','','sample/offer/2/12.jpg','','0','1325314541','1327906541','10','0','0','0','0','0','0','','1','','','0','1325314541','1325314541');
INSERT INTO aq_trades VALUES('71','4','3','2','1','1','1','','','','GPS导航仪全国批发','','此为演示数据,不保证数据的真实性','1.23','0','0','','','0','0','','','sample/offer/2/13.jpg','','0','1325314541','1327906541','10','0','0','0','0','0','0','','1','','','0','1325314541','1325314541');
INSERT INTO aq_trades VALUES('30','6','1','1','3','1','1','','','','铁锅门香辣馆加盟','铁锅门香辣馆加盟','此为演示数据,不保证数据的真实性','1.23','0','0','','','0','0','','','sample/offer/1/2.jpg','','1','1325314541','1327906541','10','1','0','0','0','0','0','','2','','','0','1325314541','1325314541');
INSERT INTO aq_trades VALUES('31','6','1','1','3','1','1','','','','翰源艺品诚邀加','翰源艺品诚邀加','此为演示数据,不保证数据的真实性','1.23','0','0','','','0','0','','','sample/offer/1/3.jpg','','1','1325314541','1327906541','10','1','0','0','0','0','0','','1','','','51','1325314541','1325314541');
INSERT INTO aq_trades VALUES('32','6','1','1','3','1','1','','','','龙门鱼府火锅加盟','龙门鱼府火锅加盟','此为演示数据,不保证数据的真实性','1.23','0','0','','','0','0','','','sample/offer/1/4.jpg','','1','1325314541','1327906541','10','1','0','0','0','0','0','','2','','','0','1325314541','1325314541');
INSERT INTO aq_trades VALUES('33','6','2','1','3','1','1','','','','乐而美快餐加盟中','乐而美快餐加盟中','此为演示数据,不保证数据的真实性','1.23','0','0','','','0','0','','','sample/offer/1/5.jpg','','1','1325314541','1327906541','10','1','0','0','0','0','0','','1','','','46','1325314541','1325314541');
INSERT INTO aq_trades VALUES('34','6','2','1','2','1','1','','','','夜时尚台球加盟中','夜时尚台球加盟中','此为演示数据,不保证数据的真实性','1.23','0','0','','','0','0','','','sample/offer/1/6.jpg','','1','1325314541','1327906541','10','1','0','0','0','0','0','','1','','','0','1325314541','1325314541');
INSERT INTO aq_trades VALUES('35','6','2','1','2','1','1','','','','美滋美快餐加盟中','美滋美快餐加盟中','此为演示数据,不保证数据的真实性','1.23','0','0','','','0','0','','','sample/offer/1/7.jpg','','1','1325314541','1327906541','10','1','0','0','0','0','0','','2','','','0','1325314541','1325314541');
INSERT INTO aq_trades VALUES('36','6','2','1','2','1','1','','','','美伊和田玉加盟中','美伊和田玉加盟中','此为演示数据,不保证数据的真实性','1.23','0','0','','','0','0','','','sample/offer/1/8.jpg','','1','1325314541','1327906541','10','1','0','0','0','0','0','','1','','','0','1325314541','1325314541');
INSERT INTO aq_trades VALUES('37','6','3','1','2','1','1','','','','奶茶博士饮品全国加盟','奶茶博士饮品全国加盟','此为演示数据,不保证数据的真实性','1.23','0','0','','','0','0','','','sample/offer/1/9.jpg','','1','0','0','10','1','0','0','0','0','0','','2','','','0','1325314541','1325314541');
INSERT INTO aq_trades VALUES('38','6','3','1','1','1','1','','','','亨达鞋业火爆加盟','亨达鞋业火爆加盟','此为演示数据,不保证数据的真实性','1.23','0','0','','','0','0','','','sample/offer/1/10.jpg','','1','0','0','10','1','0','0','0','0','0','','1','','','47','1325314541','1325314541');
INSERT INTO aq_trades VALUES('39','6','3','1','1','1','1','','','','咔咔仕小吃加盟中','咔咔仕小吃加盟中','此为演示数据,不保证数据的真实性','1.23','0','0','','','0','0','','','sample/offer/1/11.jpg','','1','0','0','10','1','0','0','0','0','0','','1','','','0','1325314541','1325314541');
INSERT INTO aq_trades VALUES('40','6','3','1','1','1','1','','','','欧可童装招商加盟','欧可童装招商加盟','此为演示数据,不保证数据的真实性','1.23','0','0','','','0','0','','','sample/offer/1/12.jpg','','1','0','0','10','1','0','0','0','0','0','','1','','','47','1325314541','1325314541');
INSERT INTO aq_trades VALUES('41','6','3','1','1','1','1','','','','鹭岩茗茶诚邀加盟','鹭岩茗茶诚邀加盟','此为演示数据,不保证数据的真实性','1.23','0','0','','','0','0','','','sample/offer/1/13.jpg','','1','0','0','10','1','0','0','0','0','0','','5','','','47','1325314541','1325314541');
INSERT INTO aq_trades VALUES('42','4','1','1','3','1','1','','','','童装牛仔裤批发','','此为演示数据,不保证数据的真实性','1.23','0','0','','','0','0','','','sample/offer/2/1.jpg','','1','0','0','10','1','0','0','0','0','0','','2','','','0','1325314541','1325314541');
INSERT INTO aq_trades VALUES('43','4','1','1','3','1','1','','','','韩板饰品 小额批发 ','','此为演示数据,不保证数据的真实性','1.23','0','0','','','0','0','','','sample/offer/2/2.jpg','','1','0','0','10','1','0','0','0','0','0','','1','','','0','1325314541','1325314541');
INSERT INTO aq_trades VALUES('44','4','1','1','3','1','1','','','','鑫福轩虎年好运系列批发 ','','此为演示数据,不保证数据的真实性','1.23','0','0','','','0','0','','','sample/offer/2/3.jpg','','1','0','0','10','1','0','0','0','0','0','','1','','','0','1325314541','1325314541');
INSERT INTO aq_trades VALUES('45','4','1','1','3','1','1','','','','品牌运动服 免费代理批发','','此为演示数据,不保证数据的真实性','1.23','0','0','','','0','0','','','sample/offer/2/4.jpg','','1','0','0','10','1','0','0','0','0','0','','1','','','0','1325314541','1325314541');
INSERT INTO aq_trades VALUES('46','4','2','1','2','1','1','','','','电磁加热主板批发','','此为演示数据,不保证数据的真实性','1.23','0','0','','','0','0','','','sample/offer/2/5.jpg','','1','1325314541','1327906541','10','1','0','0','0','0','0','','3','','','0','1325314541','1325314541');
INSERT INTO aq_trades VALUES('47','4','2','1','2','1','1','','','','超便携电脑 超低价批发','','此为演示数据,不保证数据的真实性','1.23','0','0','','','0','0','','','sample/offer/2/6.jpg','','1','1325314541','1327906541','10','1','0','0','0','0','0','','6','','','47','1325314541','1325314541');
INSERT INTO aq_trades VALUES('48','4','2','1','2','1','1','','','','丽妍堂排汗运动机 厂家批发','','此为演示数据,不保证数据的真实性','1.23','0','0','','','0','0','','','sample/offer/2/7.jpg','','1','1325314541','1327906541','10','1','0','0','0','0','0','','5','','','6','1325314541','1325314541');
INSERT INTO aq_trades VALUES('49','4','2','1','2','1','1','','','','欧美系列速生扬树苗批发','','此为演示数据,不保证数据的真实性','1.23','0','0','','','0','0','','','sample/offer/2/8.jpg','','1','1325314541','1327906541','10','1','0','0','0','0','0','','4','','','0','1325314541','1325314541');
INSERT INTO aq_trades VALUES('50','4','3','2','1','1','1','','','','活动立柱锁 厂家批发','','此为演示数据,不保证数据的真实性','1.23','0','0','','','0','0','','','sample/offer/2/9.jpg','','1','1325314541','1327906541','10','1','0','0','0','0','0','','5','','','51','1325314541','1325314541');
INSERT INTO aq_trades VALUES('68','4','3','2','1','1','1','','','','充气电瓶车 游乐设备批发','','此为演示数据,不保证数据的真实性','1.23','0','0','','','0','0','','','sample/offer/2/10.jpg','','0','1325314541','1327906541','10','0','0','0','0','0','0','','1','','','0','1325314541','1325314541');
INSERT INTO aq_trades VALUES('69','4','3','2','1','1','1','','','','最低价全新轮胎批发','','此为演示数据,不保证数据的真实性','1.23','0','0','','','0','0','','','sample/offer/2/11.jpg','','0','1325314541','1327906541','10','0','0','0','0','0','0','','1','','','0','1325314541','1325314541');

DROP TABLE IF EXISTS aq_tradetypes;
CREATE TABLE `aq_tradetypes` (
  `id` smallint(3) NOT NULL AUTO_INCREMENT,
  `parent_id` smallint(3) NOT NULL DEFAULT '0',
  `name` varchar(25) NOT NULL DEFAULT '',
  `level` tinyint(1) NOT NULL DEFAULT '1',
  `display_order` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=utf8;

INSERT INTO aq_tradetypes VALUES('1','0','求购','1','0');
INSERT INTO aq_tradetypes VALUES('2','0','供应','1','0');
INSERT INTO aq_tradetypes VALUES('3','0','代理合作','1','0');
INSERT INTO aq_tradetypes VALUES('4','3','合作','1','0');
INSERT INTO aq_tradetypes VALUES('5','0','招商加盟','1','0');
INSERT INTO aq_tradetypes VALUES('6','5','加盟','1','0');
INSERT INTO aq_tradetypes VALUES('7','0','库存批发','1','0');
INSERT INTO aq_tradetypes VALUES('8','7','库存','1','0');
INSERT INTO aq_tradetypes VALUES('9','1','国内求购','2','0');
INSERT INTO aq_tradetypes VALUES('10','1','国外求购','2','0');
INSERT INTO aq_tradetypes VALUES('11','7','批发','2','0');
INSERT INTO aq_tradetypes VALUES('12','3','代理','2','0');
INSERT INTO aq_tradetypes VALUES('13','5','招商','2','0');

DROP TABLE IF EXISTS aq_trustlogs;
CREATE TABLE `aq_trustlogs` (
  `member_id` int(10) NOT NULL AUTO_INCREMENT,
  `trusttype_id` smallint(3) NOT NULL DEFAULT '0',
  PRIMARY KEY (`member_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;


DROP TABLE IF EXISTS aq_trusttypes;
CREATE TABLE `aq_trusttypes` (
  `id` smallint(3) NOT NULL AUTO_INCREMENT,
  `name` varchar(64) NOT NULL DEFAULT '',
  `description` text,
  `image` varchar(255) NOT NULL DEFAULT '',
  `display_order` tinyint(1) NOT NULL DEFAULT '0',
  `status` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

INSERT INTO aq_trusttypes VALUES('2','企业资质认证','','company.gif','0','1');
INSERT INTO aq_trusttypes VALUES('1','实名认证','','truename.gif','0','1');

DROP TABLE IF EXISTS aq_typemodels;
CREATE TABLE `aq_typemodels` (
  `id` smallint(3) NOT NULL AUTO_INCREMENT,
  `title` varchar(50) NOT NULL DEFAULT '',
  `type_name` varchar(50) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=24 DEFAULT CHARSET=utf8;

INSERT INTO aq_typemodels VALUES('1','过期时间','offer_expire');
INSERT INTO aq_typemodels VALUES('2','公司类型','manage_type');
INSERT INTO aq_typemodels VALUES('3','主要市场','main_market');
INSERT INTO aq_typemodels VALUES('4','注册资金','reg_fund');
INSERT INTO aq_typemodels VALUES('5','年营业额','year_annual');
INSERT INTO aq_typemodels VALUES('6','经济类型','economic_type');
INSERT INTO aq_typemodels VALUES('7','审核状态','check_status');
INSERT INTO aq_typemodels VALUES('8','员工人数','employee_amount');
INSERT INTO aq_typemodels VALUES('9','状态','common_status');
INSERT INTO aq_typemodels VALUES('10','建议类型','service_type');
INSERT INTO aq_typemodels VALUES('11','教育经历','education');
INSERT INTO aq_typemodels VALUES('12','薪资水平','salary');
INSERT INTO aq_typemodels VALUES('13','工作性质','work_type');
INSERT INTO aq_typemodels VALUES('14','职位名称','position');
INSERT INTO aq_typemodels VALUES('15','性别','gender');
INSERT INTO aq_typemodels VALUES('16','电话类别','phone_type');
INSERT INTO aq_typemodels VALUES('17','即时通讯类别','im_type');
INSERT INTO aq_typemodels VALUES('18','选项','common_option');
INSERT INTO aq_typemodels VALUES('19','尊称','calls');
INSERT INTO aq_typemodels VALUES('20','计量单位','measuring');
INSERT INTO aq_typemodels VALUES('21','货币单位','monetary');
INSERT INTO aq_typemodels VALUES('22','报价类型','price_type');
INSERT INTO aq_typemodels VALUES('23','价格趋势','price_trends');

DROP TABLE IF EXISTS aq_typeoptions;
CREATE TABLE `aq_typeoptions` (
  `id` smallint(3) NOT NULL AUTO_INCREMENT,
  `typemodel_id` smallint(3) NOT NULL DEFAULT '0',
  `option_value` varchar(50) NOT NULL DEFAULT '',
  `option_label` varchar(50) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=131 DEFAULT CHARSET=utf8;

INSERT INTO aq_typeoptions VALUES('1','1','10','10天');
INSERT INTO aq_typeoptions VALUES('2','1','30','一个月');
INSERT INTO aq_typeoptions VALUES('3','1','90','三个月');
INSERT INTO aq_typeoptions VALUES('4','1','180','六个月');
INSERT INTO aq_typeoptions VALUES('5','2','1','生产型');
INSERT INTO aq_typeoptions VALUES('6','2','2','贸易型');
INSERT INTO aq_typeoptions VALUES('7','2','3','服务型');
INSERT INTO aq_typeoptions VALUES('8','2','4','政府或其他机构');
INSERT INTO aq_typeoptions VALUES('9','3','1','大陆');
INSERT INTO aq_typeoptions VALUES('10','3','2','港澳台');
INSERT INTO aq_typeoptions VALUES('11','3','3','北美');
INSERT INTO aq_typeoptions VALUES('12','3','4','南美');
INSERT INTO aq_typeoptions VALUES('13','3','5','欧洲');
INSERT INTO aq_typeoptions VALUES('14','3','6','亚洲');
INSERT INTO aq_typeoptions VALUES('15','3','7','非洲');
INSERT INTO aq_typeoptions VALUES('16','3','8','大洋洲');
INSERT INTO aq_typeoptions VALUES('17','3','9','其他市场');
INSERT INTO aq_typeoptions VALUES('18','4','0','不公开');
INSERT INTO aq_typeoptions VALUES('19','4','1','人民币10万元以下');
INSERT INTO aq_typeoptions VALUES('20','4','2','人民币10-30万');
INSERT INTO aq_typeoptions VALUES('21','4','3','人民币30-50万');
INSERT INTO aq_typeoptions VALUES('22','4','4','人民币50-100万');
INSERT INTO aq_typeoptions VALUES('23','4','5','人民币100-300万');
INSERT INTO aq_typeoptions VALUES('24','4','6','人民币300-500万');
INSERT INTO aq_typeoptions VALUES('25','4','7','人民币500-1000万');
INSERT INTO aq_typeoptions VALUES('26','4','8','人民币1000-5000万');
INSERT INTO aq_typeoptions VALUES('27','4','9','人民币5000万以上');
INSERT INTO aq_typeoptions VALUES('28','4','10','其他');
INSERT INTO aq_typeoptions VALUES('29','5','1','人民币10万以下/年');
INSERT INTO aq_typeoptions VALUES('30','5','2','人民币10-30万/年');
INSERT INTO aq_typeoptions VALUES('31','5','3','人民币30-50万/年');
INSERT INTO aq_typeoptions VALUES('32','5','4','人民币50-100万/年');
INSERT INTO aq_typeoptions VALUES('33','5','5','人民币100-300万/年');
INSERT INTO aq_typeoptions VALUES('34','5','6','人民币300-500万/年');
INSERT INTO aq_typeoptions VALUES('35','5','7','人民币500-1000万/年');
INSERT INTO aq_typeoptions VALUES('36','5','8','人民币1000-5000万/年');
INSERT INTO aq_typeoptions VALUES('37','5','9','人民币5000万以上/年');
INSERT INTO aq_typeoptions VALUES('38','5','10','其他');
INSERT INTO aq_typeoptions VALUES('39','6','1','国有企业');
INSERT INTO aq_typeoptions VALUES('40','6','2','集体企业');
INSERT INTO aq_typeoptions VALUES('41','6','3','股份合作企业');
INSERT INTO aq_typeoptions VALUES('42','6','4','联营企业');
INSERT INTO aq_typeoptions VALUES('43','6','5','有限责任公司');
INSERT INTO aq_typeoptions VALUES('44','6','6','股份有限公司');
INSERT INTO aq_typeoptions VALUES('45','6','7','私营企业');
INSERT INTO aq_typeoptions VALUES('46','6','8','个人独资企业');
INSERT INTO aq_typeoptions VALUES('47','6','9','非盈利组织');
INSERT INTO aq_typeoptions VALUES('48','6','10','其他');
INSERT INTO aq_typeoptions VALUES('49','7','0','无效');
INSERT INTO aq_typeoptions VALUES('50','7','1','有效');
INSERT INTO aq_typeoptions VALUES('51','7','2','等待审核');
INSERT INTO aq_typeoptions VALUES('52','7','3','审核不通过');
INSERT INTO aq_typeoptions VALUES('53','8','1','5人以下');
INSERT INTO aq_typeoptions VALUES('54','8','2','5-10人');
INSERT INTO aq_typeoptions VALUES('55','8','3','11-50人');
INSERT INTO aq_typeoptions VALUES('56','8','4','51-100人');
INSERT INTO aq_typeoptions VALUES('57','8','5','101-500人');
INSERT INTO aq_typeoptions VALUES('58','8','6','501-1000人');
INSERT INTO aq_typeoptions VALUES('59','8','7','1000人以上');
INSERT INTO aq_typeoptions VALUES('60','10','1','咨询');
INSERT INTO aq_typeoptions VALUES('61','10','2','建议');
INSERT INTO aq_typeoptions VALUES('62','10','3','投诉');
INSERT INTO aq_typeoptions VALUES('63','11','0','其他');
INSERT INTO aq_typeoptions VALUES('64','11','-1','不要求');
INSERT INTO aq_typeoptions VALUES('65','11','-2','不限');
INSERT INTO aq_typeoptions VALUES('66','11','1','博士');
INSERT INTO aq_typeoptions VALUES('67','11','2','硕士');
INSERT INTO aq_typeoptions VALUES('68','11','3','本科');
INSERT INTO aq_typeoptions VALUES('69','11','4','大专');
INSERT INTO aq_typeoptions VALUES('70','11','5','中专');
INSERT INTO aq_typeoptions VALUES('71','11','6','技校');
INSERT INTO aq_typeoptions VALUES('72','11','7','高中');
INSERT INTO aq_typeoptions VALUES('73','11','8','初中');
INSERT INTO aq_typeoptions VALUES('74','11','9','小学');
INSERT INTO aq_typeoptions VALUES('75','12','0','不选择');
INSERT INTO aq_typeoptions VALUES('76','12','-1','面议');
INSERT INTO aq_typeoptions VALUES('77','12','1','1500以下');
INSERT INTO aq_typeoptions VALUES('78','12','2','1500-1999元/月');
INSERT INTO aq_typeoptions VALUES('79','12','3','2000-2999元/月');
INSERT INTO aq_typeoptions VALUES('80','12','4','3000-4999元/月');
INSERT INTO aq_typeoptions VALUES('81','12','5','5000以上');
INSERT INTO aq_typeoptions VALUES('82','13','0','不选择');
INSERT INTO aq_typeoptions VALUES('83','13','1','全职');
INSERT INTO aq_typeoptions VALUES('84','13','2','兼职');
INSERT INTO aq_typeoptions VALUES('85','13','3','临时');
INSERT INTO aq_typeoptions VALUES('86','13','4','实习');
INSERT INTO aq_typeoptions VALUES('87','13','5','其他');
INSERT INTO aq_typeoptions VALUES('88','14','0','不选择');
INSERT INTO aq_typeoptions VALUES('89','14','1','董事长、总裁及副职，企业主、企业合伙人，总经理/副总经理');
INSERT INTO aq_typeoptions VALUES('90','14','2','行政部门经理/行政人员');
INSERT INTO aq_typeoptions VALUES('91','14','3','技术部门经理/技术人员');
INSERT INTO aq_typeoptions VALUES('92','14','4','生产部门经理/生产人员');
INSERT INTO aq_typeoptions VALUES('93','14','5','市场部门经理/市场人员');
INSERT INTO aq_typeoptions VALUES('94','14','6','采购部门经理/采购人员');
INSERT INTO aq_typeoptions VALUES('95','14','7','销售部门经理/销售人员');
INSERT INTO aq_typeoptions VALUES('96','14','8','其他');
INSERT INTO aq_typeoptions VALUES('97','15','0','不选择');
INSERT INTO aq_typeoptions VALUES('98','15','1','男');
INSERT INTO aq_typeoptions VALUES('99','15','2','女');
INSERT INTO aq_typeoptions VALUES('100','15','-1','不限');
INSERT INTO aq_typeoptions VALUES('101','16','1','移动电话');
INSERT INTO aq_typeoptions VALUES('102','16','2','住宅电话');
INSERT INTO aq_typeoptions VALUES('103','16','3','商务电话');
INSERT INTO aq_typeoptions VALUES('104','16','4','其他');
INSERT INTO aq_typeoptions VALUES('105','17','1','QQ');
INSERT INTO aq_typeoptions VALUES('106','17','2','ICQ');
INSERT INTO aq_typeoptions VALUES('107','17','3','MSN Messenger');
INSERT INTO aq_typeoptions VALUES('108','17','4','Yahoo Messenger');
INSERT INTO aq_typeoptions VALUES('109','17','5','Skype');
INSERT INTO aq_typeoptions VALUES('110','17','6','其他');
INSERT INTO aq_typeoptions VALUES('111','17','0','不选择');
INSERT INTO aq_typeoptions VALUES('112','16','0','不选择');
INSERT INTO aq_typeoptions VALUES('113','6','0','不选择');
INSERT INTO aq_typeoptions VALUES('114','9','0','无效');
INSERT INTO aq_typeoptions VALUES('115','9','1','有效');
INSERT INTO aq_typeoptions VALUES('116','18','0','否');
INSERT INTO aq_typeoptions VALUES('117','18','1','是');
INSERT INTO aq_typeoptions VALUES('118','19','1','先生');
INSERT INTO aq_typeoptions VALUES('119','19','2','女士');
INSERT INTO aq_typeoptions VALUES('120','20','1','个');
INSERT INTO aq_typeoptions VALUES('121','20','2','件');
INSERT INTO aq_typeoptions VALUES('122','21','1','元');
INSERT INTO aq_typeoptions VALUES('123','21','3','美元');
INSERT INTO aq_typeoptions VALUES('124','22','1','买');
INSERT INTO aq_typeoptions VALUES('125','22','2','卖');
INSERT INTO aq_typeoptions VALUES('126','23','1','升');
INSERT INTO aq_typeoptions VALUES('127','23','2','稳');
INSERT INTO aq_typeoptions VALUES('128','23','3','降');
INSERT INTO aq_typeoptions VALUES('129','23','4','不确定');
INSERT INTO aq_typeoptions VALUES('130','21','2','万元');

DROP TABLE IF EXISTS aq_userpages;
CREATE TABLE `aq_userpages` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `templet_name` varchar(50) NOT NULL DEFAULT '',
  `name` varchar(50) NOT NULL DEFAULT '',
  `title` varchar(50) NOT NULL DEFAULT '',
  `digest` varchar(50) NOT NULL DEFAULT '',
  `content` text,
  `url` varchar(100) NOT NULL DEFAULT '',
  `display_order` tinyint(1) NOT NULL DEFAULT '0',
  `created` int(10) NOT NULL DEFAULT '0',
  `modified` int(10) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

INSERT INTO aq_userpages VALUES('1','','aboutus','关于我们','','关于网站的说明','','0','1325314541','1325314541');
INSERT INTO aq_userpages VALUES('2','','contactus','联系我们','','联系方式','','0','1325314541','1325314541');
INSERT INTO aq_userpages VALUES('4','','sitemap','网站地图','','网站站内地图','','0','1325314541','1325314541');
INSERT INTO aq_userpages VALUES('5','','legal','法律声明','','法律声明','','0','1325314541','0');
INSERT INTO aq_userpages VALUES('6','','friendlink','友情链接','','申请友情链接','friendlink.php','0','1325314541','0');
INSERT INTO aq_userpages VALUES('7','','help','帮助中心','','帮助中心','help/','0','1325314541','1325314541');
INSERT INTO aq_userpages VALUES('8','','service','意见投诉','','意见与建议、投诉','','0','1325314541','1325314541');
INSERT INTO aq_userpages VALUES('9','','special','分站专题','','行业或者地区分站','special/','0','1325314541','1325314541');
INSERT INTO aq_userpages VALUES('10','','wap','WAP','手机版','','wap/index.php','0','1325314541','1325314541');

DROP TABLE IF EXISTS aq_visitlogs;
CREATE TABLE `aq_visitlogs` (
  `id` smallint(6) NOT NULL AUTO_INCREMENT,
  `salt` varchar(32) NOT NULL DEFAULT '',
  `date_line` varchar(15) NOT NULL DEFAULT '',
  `type_name` varchar(15) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`),
  KEY `salt` (`salt`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;


DROP TABLE IF EXISTS aq_words;
CREATE TABLE `aq_words` (
  `id` smallint(6) NOT NULL AUTO_INCREMENT,
  `title` varchar(50) NOT NULL DEFAULT '',
  `replace_to` varchar(50) NOT NULL DEFAULT '',
  `expiration` int(10) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `word` (`title`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;


