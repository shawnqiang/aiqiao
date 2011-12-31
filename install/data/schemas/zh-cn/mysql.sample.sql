--
-- Table Datas `pb_brands`
--

INSERT INTO `pb_brands` (`id`, `member_id`, `company_id`, `type_id`, `if_commend`, `name`, `alias_name`, `picture`, `description`, `hits`, `ranks`, `letter`, `created`, `modified`) VALUES(1, -1, 0, 1, 1, 'palm', 'palm', 'sample/brand/1.jpg', '', 1, 0, 'p', unix_timestamp(now()), 0);
INSERT INTO `pb_brands` (`id`, `member_id`, `company_id`, `type_id`, `if_commend`, `name`, `alias_name`, `picture`, `description`, `hits`, `ranks`, `letter`, `created`, `modified`) VALUES(2, -1, 0, 2, 1, 'LG', 'LG', 'sample/brand/2.jpg', '', 1, 0, 'l', unix_timestamp(now()), 0);
INSERT INTO `pb_brands` (`id`, `member_id`, `company_id`, `type_id`, `if_commend`, `name`, `alias_name`, `picture`, `description`, `hits`, `ranks`, `letter`, `created`, `modified`) VALUES(3, -1, 0, 4, 0, '摩托罗拉', 'motolola', 'sample/brand/3.jpg', '', 1, 0, 'm', unix_timestamp(now()), 0);
INSERT INTO `pb_brands` (`id`, `member_id`, `company_id`, `type_id`, `if_commend`, `name`, `alias_name`, `picture`, `description`, `hits`, `ranks`, `letter`, `created`, `modified`) VALUES(4, -1, 1, 4, 1, '诺基亚', 'nokia', 'sample/brand/4.jpg', '', 1, 0, 'n', unix_timestamp(now()), 0);
INSERT INTO `pb_brands` (`id`, `member_id`, `company_id`, `type_id`, `if_commend`, `name`, `alias_name`, `picture`, `description`, `hits`, `ranks`, `letter`, `created`, `modified`) VALUES(13, 1, 1, 4, 1, '飞利浦', 'philips', 'sample/brand/5.jpg', '', 0, 0, 'f', unix_timestamp(now()), 0);
INSERT INTO `pb_brands` (`id`, `member_id`, `company_id`, `type_id`, `if_commend`, `name`, `alias_name`, `picture`, `description`, `hits`, `ranks`, `letter`, `created`, `modified`) VALUES(14, -1, 1, 4, 0, '三星', 'samsung', 'sample/brand/6.jpg', '', 0, 0, 's', unix_timestamp(now()), 0);
INSERT INTO `pb_brands` (`id`, `member_id`, `company_id`, `type_id`, `if_commend`, `name`, `alias_name`, `picture`, `description`, `hits`, `ranks`, `letter`, `created`, `modified`) VALUES(7, -1, 1, 4, 0, '松下', 'panasonic', 'sample/brand/7.jpg', '', 0, 0, 's', unix_timestamp(now()), 0);
INSERT INTO `pb_brands` (`id`, `member_id`, `company_id`, `type_id`, `if_commend`, `name`, `alias_name`, `picture`, `description`, `hits`, `ranks`, `letter`, `created`, `modified`) VALUES(8, -1, 1, 4, 0, '索爱', 'sony', 'sample/brand/8.jpg', '', 0, 0, 's', unix_timestamp(now()), 0);
INSERT INTO `pb_brands` (`id`, `member_id`, `company_id`, `type_id`, `if_commend`, `name`, `alias_name`, `picture`, `description`, `hits`, `ranks`, `letter`, `created`, `modified`) VALUES(9, -1, 1, 3, 0, '西门子', 'simens', 'sample/brand/9.jpg', '', 0, 0, 'x', unix_timestamp(now()), 0);
INSERT INTO `pb_brands` (`id`, `member_id`, `company_id`, `type_id`, `if_commend`, `name`, `alias_name`, `picture`, `description`, `hits`, `ranks`, `letter`, `created`, `modified`) VALUES(10, 1, 1, 2, 0, '阿尔卡特', 'alcatel', 'sample/brand/10.jpg', 'asdf', 0, 0, 'a', unix_timestamp(now()), 0);
INSERT INTO `pb_brands` (`id`, `member_id`, `company_id`, `type_id`, `if_commend`, `name`, `alias_name`, `picture`, `description`, `hits`, `ranks`, `letter`, `created`, `modified`) VALUES(11, -1, 1, 0, 0, '阿迪达斯', 'Adidas', 'sample/brand/11.jpg', '', 0, 0, '', 0, 0);
INSERT INTO `pb_brands` (`id`, `member_id`, `company_id`, `type_id`, `if_commend`, `name`, `alias_name`, `picture`, `description`, `hits`, `ranks`, `letter`, `created`, `modified`) VALUES(12, -1, 1, 0, 0, '三得利', '', 'sample/brand/12.jpg', '', 0, 0, '', 0, 0);
INSERT INTO `pb_brands` (`id`, `member_id`, `company_id`, `type_id`, `if_commend`, `name`, `alias_name`, `picture`, `description`, `hits`, `ranks`, `letter`, `created`, `modified`) VALUES(5, -1, 1, 0, 0, '中国移动', '', 'sample/brand/13.jpg', '', 0, 0, '', 0, 0);
INSERT INTO `pb_brands` (`id`, `member_id`, `company_id`, `type_id`, `if_commend`, `name`, `alias_name`, `picture`, `description`, `hits`, `ranks`, `letter`, `created`, `modified`) VALUES(6, -1, 1, 0, 0, '知蜂', '', 'sample/brand/14.jpg', '', 0, 0, '', 0, 0);

--
-- Table Datas `pb_brandtypes`
--

INSERT INTO `pb_brandtypes` (`id`, `parent_id`, `level`, `name`, `display_order`) VALUES(1, 0, 1, '装饰建材', 0);
INSERT INTO `pb_brandtypes` (`id`, `parent_id`, `level`, `name`, `display_order`) VALUES(2, 0, 1, '服装鞋帽', 0);
INSERT INTO `pb_brandtypes` (`id`, `parent_id`, `level`, `name`, `display_order`) VALUES(3, 0, 1, '家具日用', 0);
INSERT INTO `pb_brandtypes` (`id`, `parent_id`, `level`, `name`, `display_order`) VALUES(4, 0, 1, '食品', 0);
INSERT INTO `pb_brandtypes` (`id`, `parent_id`, `level`, `name`, `display_order`) VALUES(5, 0, 1, '家电数码', 0);
INSERT INTO `pb_brandtypes` (`id`, `parent_id`, `level`, `name`, `display_order`) VALUES(6, 0, 1, '汽车房产', 0);
INSERT INTO `pb_brandtypes` (`id`, `parent_id`, `level`, `name`, `display_order`) VALUES(7, 0, 1, '餐饮娱乐', 0);
INSERT INTO `pb_brandtypes` (`id`, `parent_id`, `level`, `name`, `display_order`) VALUES(8, 0, 1, '机械化工', 0);
INSERT INTO `pb_brandtypes` (`id`, `parent_id`, `level`, `name`, `display_order`) VALUES(9, 5, 2, '洗衣机', 0);
INSERT INTO `pb_brandtypes` (`id`, `parent_id`, `level`, `name`, `display_order`) VALUES(10, 5, 2, '饮水机', 0);
INSERT INTO `pb_brandtypes` (`id`, `parent_id`, `level`, `name`, `display_order`) VALUES(11, 5, 2, '电脑', 0);
INSERT INTO `pb_brandtypes` (`id`, `parent_id`, `level`, `name`, `display_order`) VALUES(12, 5, 2, '手机', 0);

--
-- Table Datas `pb_dicts`
--

INSERT INTO `pb_dicts` (`id`, `dicttype_id`, `extend_dicttypeid`, `word`, `word_name`, `digest`, `content`, `picture`, `refer`, `hits`, `closed`, `if_commend`, `created`, `modified`) VALUES(1, 7, '', '成本加运费', 'Cost and Freight', '', '', '', '', 7, 0, 0, unix_timestamp(now()), 0);
INSERT INTO `pb_dicts` (`id`, `dicttype_id`, `extend_dicttypeid`, `word`, `word_name`, `digest`, `content`, `picture`, `refer`, `hits`, `closed`, `if_commend`, `created`, `modified`) VALUES(2, 1, '', '多式联运', '', '', '', '', '', 4, 0, 0, unix_timestamp(now()), 0);

--
-- Table Datas `pb_dicttypes`
--

INSERT INTO `pb_dicttypes` (`id`, `name`, `parent_id`, `display_order`) VALUES(1, '物流知识', 0, 0);
INSERT INTO `pb_dicttypes` (`id`, `name`, `parent_id`, `display_order`) VALUES(2, '物流管理', 0, 0);
INSERT INTO `pb_dicttypes` (`id`, `name`, `parent_id`, `display_order`) VALUES(3, '物流公司', 0, 0);
INSERT INTO `pb_dicttypes` (`id`, `name`, `parent_id`, `display_order`) VALUES(4, '法律法规', 0, 0);
INSERT INTO `pb_dicttypes` (`id`, `name`, `parent_id`, `display_order`) VALUES(5, '电子商务', 0, 0);
INSERT INTO `pb_dicttypes` (`id`, `name`, `parent_id`, `display_order`) VALUES(6, '相关知识', 0, 0);
INSERT INTO `pb_dicttypes` (`id`, `name`, `parent_id`, `display_order`) VALUES(7, '常用术语', 1, 0);
INSERT INTO `pb_dicttypes` (`id`, `name`, `parent_id`, `display_order`) VALUES(8, '运输知识', 1, 0);
INSERT INTO `pb_dicttypes` (`id`, `name`, `parent_id`, `display_order`) VALUES(9, '仓储知识', 1, 0);
INSERT INTO `pb_dicttypes` (`id`, `name`, `parent_id`, `display_order`) VALUES(10, '物流设备', 1, 0);
INSERT INTO `pb_dicttypes` (`id`, `name`, `parent_id`, `display_order`) VALUES(11, '物流保险', 1, 0);
INSERT INTO `pb_dicttypes` (`id`, `name`, `parent_id`, `display_order`) VALUES(12, '第三方物流', 1, 0);
INSERT INTO `pb_dicttypes` (`id`, `name`, `parent_id`, `display_order`) VALUES(13, '供应链', 1, 0);
INSERT INTO `pb_dicttypes` (`id`, `name`, `parent_id`, `display_order`) VALUES(14, '其他', 1, 0);

--
-- Table Datas `pb_expos`
--

INSERT INTO `pb_expos` (`id`, `expotype_id`, `name`, `description`, `begin_time`, `end_time`, `industry_ids`, `industry_id`, `area_id`, `address`, `stadium_name`, `refresh_method`, `scope`, `hosts`, `organisers`, `co_organisers`, `sponsors`, `contacts`, `important_notice`, `picture`, `if_commend`, `status`, `hits`, `created`, `modified`) VALUES(1, 1, '第14届中国美容博览会开幕', '', 1293936472, 1296528472, '0', 0, 0, '', '', '', '', '', '', '', '', '', '', '', 0, 1, 1, unix_timestamp(now()), 0);
INSERT INTO `pb_expos` (`id`, `expotype_id`, `name`, `description`, `begin_time`, `end_time`, `industry_ids`, `industry_id`, `area_id`, `address`, `stadium_name`, `refresh_method`, `scope`, `hosts`, `organisers`, `co_organisers`, `sponsors`, `contacts`, `important_notice`, `picture`, `if_commend`, `status`, `hits`, `created`, `modified`) VALUES(2, 1, '第29届广州国际美博会看点精彩呈现', '', 1293936472, 1296528472, '0', 0, 0, '', '', '', '', '', '', '', '', '', '', '', 0, 1, 1, unix_timestamp(now()), 0);
INSERT INTO `pb_expos` (`id`, `expotype_id`, `name`, `description`, `begin_time`, `end_time`, `industry_ids`, `industry_id`, `area_id`, `address`, `stadium_name`, `refresh_method`, `scope`, `hosts`, `organisers`, `co_organisers`, `sponsors`, `contacts`, `important_notice`, `picture`, `if_commend`, `status`, `hits`, `created`, `modified`) VALUES(3, 1, '第十届中国国际营养健康产业博览会', '', 1293936472, 1296528472, '0', 0, 0, '', '', '', '', '', '', '', '', '', '', '', 0, 1, 1, unix_timestamp(now()), 0);
INSERT INTO `pb_expos` (`id`, `expotype_id`, `name`, `description`, `begin_time`, `end_time`, `industry_ids`, `industry_id`, `area_id`, `address`, `stadium_name`, `refresh_method`, `scope`, `hosts`, `organisers`, `co_organisers`, `sponsors`, `contacts`, `important_notice`, `picture`, `if_commend`, `status`, `hits`, `created`, `modified`) VALUES(4, 1, '中国上海产业用纺织品及非织造布展览会', '', 1293936472, 1296528472, '0', 0, 0, '', '', '', '', '', '', '', '', '', '', '', 0, 1, 1, unix_timestamp(now()), 0);
INSERT INTO `pb_expos` (`id`, `expotype_id`, `name`, `description`, `begin_time`, `end_time`, `industry_ids`, `industry_id`, `area_id`, `address`, `stadium_name`, `refresh_method`, `scope`, `hosts`, `organisers`, `co_organisers`, `sponsors`, `contacts`, `important_notice`, `picture`, `if_commend`, `status`, `hits`, `created`, `modified`) VALUES(5, 2, '日本东京国际鞋类及皮革制品展览会', '', 1293936472, 1296528472, '0', 0, 0, '', '', '', '', '', '', '', '', '', '', '', 0, 1, 1, unix_timestamp(now()), 0);
INSERT INTO `pb_expos` (`id`, `expotype_id`, `name`, `description`, `begin_time`, `end_time`, `industry_ids`, `industry_id`, `area_id`, `address`, `stadium_name`, `refresh_method`, `scope`, `hosts`, `organisers`, `co_organisers`, `sponsors`, `contacts`, `important_notice`, `picture`, `if_commend`, `status`, `hits`, `created`, `modified`) VALUES(6, 2, '第二十一届中国国际玻璃工业技术展览会', '', 1293936472, 1296528472, '0', 0, 0, '', '', '', '', '', '', '', '', '', '', '', 0, 1, 1, unix_timestamp(now()), 0);
INSERT INTO `pb_expos` (`id`, `expotype_id`, `name`, `description`, `begin_time`, `end_time`, `industry_ids`, `industry_id`, `area_id`, `address`, `stadium_name`, `refresh_method`, `scope`, `hosts`, `organisers`, `co_organisers`, `sponsors`, `contacts`, `important_notice`, `picture`, `if_commend`, `status`, `hits`, `created`, `modified`) VALUES(7, 1, '第五届中国内蒙古食品加工与包装机械展览会', '第七届中国国际食品加工与包装设备展览会', 1293936472, 1296528472, '0', 0, 0, '', '', '', '', '', '', '', '', '', '', '', 0, 1, 1, unix_timestamp(now()), 0);
INSERT INTO `pb_expos` (`id`, `expotype_id`, `name`, `description`, `begin_time`, `end_time`, `industry_ids`, `industry_id`, `area_id`, `address`, `stadium_name`, `refresh_method`, `scope`, `hosts`, `organisers`, `co_organisers`, `sponsors`, `contacts`, `important_notice`, `picture`, `if_commend`, `status`, `hits`, `created`, `modified`) VALUES(8, 2, '第七届中国国际食品加工与包装设备展览会', '第五届中国内蒙古食品加工与包装机械展览会', 1293936472, 1296528472, '0', 0, 0, '', '', '', '', '', '', '', '', NULL, NULL, '', 0, 1, 1, unix_timestamp(now()), 0);
INSERT INTO `pb_expos` (`id`, `expotype_id`, `name`, `description`, `begin_time`, `end_time`, `industry_ids`, `industry_id`, `area_id`, `address`, `stadium_name`, `refresh_method`, `scope`, `hosts`, `organisers`, `co_organisers`, `sponsors`, `contacts`, `important_notice`, `picture`, `if_commend`, `status`, `hits`, `created`, `modified`) VALUES(9, 1, '第十届中国北京国际绿色食品及有机食品展览会', '第十届中国北京国际绿色食品及有机食品展览会', 1293936472, 1296528472, '0', 0, 0, '', '', '', '', '', '', '', '', NULL, NULL, '', 0, 1, 1, unix_timestamp(now()), 0);
INSERT INTO `pb_expos` (`id`, `expotype_id`, `name`, `description`, `begin_time`, `end_time`, `industry_ids`, `industry_id`, `area_id`, `address`, `stadium_name`, `refresh_method`, `scope`, `hosts`, `organisers`, `co_organisers`, `sponsors`, `contacts`, `important_notice`, `picture`, `if_commend`, `status`, `hits`, `created`, `modified`) VALUES(10, 2, '第十五届中国国际建筑装饰材料展览会', '第十五届中国国际建筑装饰材料展览会', 1293936472, 1296528472, '0', 0, 0, '', '', '', '', '', '', '', '', NULL, NULL, '', 0, 1, 1, unix_timestamp(now()), 0);
INSERT INTO `pb_expos` (`id`, `expotype_id`, `name`, `description`, `begin_time`, `end_time`, `industry_ids`, `industry_id`, `area_id`, `address`, `stadium_name`, `refresh_method`, `scope`, `hosts`, `organisers`, `co_organisers`, `sponsors`, `contacts`, `important_notice`, `picture`, `if_commend`, `status`, `hits`, `created`, `modified`) VALUES(12, 1, '第十四届苏州住宅产业博览会', '苏州住宅产业博览会是苏州规模最大、规格最高的地产展', 1293936472, 1296528472, '0', 0, 0, '', '', '', '', '', '', '', '', NULL, NULL, 'sample/other/fair-1.jpg', 1, 1, 1, unix_timestamp(now()), 0);

--
-- Table Datas `pb_expotypes`
--

INSERT INTO `pb_expotypes` (`id`, `name`, `created`, `modified`) VALUES(1, '国内展会', 0, 0);
INSERT INTO `pb_expotypes` (`id`, `name`, `created`, `modified`) VALUES(2, '国际展会', 0, 0);

--
-- Table Datas `pb_helps`
--

INSERT INTO `pb_helps` (`id`, `helptype_id`, `title`, `content`, `highlight`, `created`, `modified`) VALUES(1, 1, '登陆指导', '', 0, 0, 0);
INSERT INTO `pb_helps` (`id`, `helptype_id`, `title`, `content`, `highlight`, `created`, `modified`) VALUES(2, 2, '注册指导', '', 0, 0, 0);

--
-- Table Datas `pb_helptypes`
--

INSERT INTO `pb_helptypes` (`id`, `title`, `description`, `parent_id`, `level`, `display_order`, `created`, `modified`) VALUES(1, '站内帮助', '', 0, 0, 0, 0, 0);
INSERT INTO `pb_helptypes` (`id`, `title`, `description`, `parent_id`, `level`, `display_order`, `created`, `modified`) VALUES(2, '站外帮助', '', 0, 0, 0, 0, 0);

--
-- Table Datas `pb_newses`
--

INSERT INTO `pb_newses` (`id`, `type_id`, `type`, `industry_id`, `area_id`, `title`, `content`, `source`, `picture`, `if_focus`, `if_commend`, `highlight`, `clicked`, `status`, `flag`, `require_membertype`, `tag_ids`, `created`, `create_time`, `modified`) VALUES(14, 2, 0, 0, 0, '9.5米高孔子像在天安门广场东侧落成', '', '', 'sample/news/1.jpg', 0, 0, 0, 123, 1, 0, '0', '', unix_timestamp(now()), '2011-01-02 02:47:28', 0);
INSERT INTO `pb_newses` (`id`, `type_id`, `type`, `industry_id`, `area_id`, `title`, `content`, `source`, `picture`, `if_focus`, `if_commend`, `highlight`, `clicked`, `status`, `flag`, `require_membertype`, `tag_ids`, `created`, `create_time`, `modified`) VALUES(15, 2, 0, 0, 0, '广州亚运进行开幕式焰火彩排', '', '', 'sample/news/2.jpg', 0, 0, 0, 123, 1, 0, '0', '', unix_timestamp(now()), '2011-01-02 02:47:28', 0);
INSERT INTO `pb_newses` (`id`, `type_id`, `type`, `industry_id`, `area_id`, `title`, `content`, `source`, `picture`, `if_focus`, `if_commend`, `highlight`, `clicked`, `status`, `flag`, `require_membertype`, `tag_ids`, `created`, `create_time`, `modified`) VALUES(3, 2, 0, 0, 0, '纽约纪念2011世界地球日', '', '', 'sample/news/3.jpg', 0, 0, 0, 123, 1, 0, '0', '', unix_timestamp(now()), '2011-01-02 02:47:28', 0);
INSERT INTO `pb_newses` (`id`, `type_id`, `type`, `industry_id`, `area_id`, `title`, `content`, `source`, `picture`, `if_focus`, `if_commend`, `highlight`, `clicked`, `status`, `flag`, `require_membertype`, `tag_ids`, `created`, `create_time`, `modified`) VALUES(4, 2, 0, 0, 0, '日本迪斯尼地震后重开', '', '', 'sample/news/4.jpg', 0, 0, 0, 123, 1, 0, '0', '', unix_timestamp(now()), '2011-01-02 02:47:28', 0);
INSERT INTO `pb_newses` (`id`, `type_id`, `type`, `industry_id`, `area_id`, `title`, `content`, `source`, `picture`, `if_focus`, `if_commend`, `highlight`, `clicked`, `status`, `flag`, `require_membertype`, `tag_ids`, `created`, `create_time`, `modified`) VALUES(5, 2, 0, 0, 0, '西南地区动卧列车首次开行', '', '', 'sample/news/5.jpg', 0, 0, 0, 123, 1, 0, '0', '', unix_timestamp(now()), '2011-01-02 02:47:28', 0);
INSERT INTO `pb_newses` (`id`, `type_id`, `type`, `industry_id`, `area_id`, `title`, `content`, `source`, `picture`, `if_focus`, `if_commend`, `highlight`, `clicked`, `status`, `flag`, `require_membertype`, `tag_ids`, `created`, `create_time`, `modified`) VALUES(6, 2, 0, 0, 0, '中国海南成为世界第四个离岛免税区', '', '', 'sample/news/6.jpg', 0, 0, 0, 123, 1, 0, '0', '', unix_timestamp(now()), '2011-01-02 02:47:28', 0);
INSERT INTO `pb_newses` (`id`, `type_id`, `type`, `industry_id`, `area_id`, `title`, `content`, `source`, `picture`, `if_focus`, `if_commend`, `highlight`, `clicked`, `status`, `flag`, `require_membertype`, `tag_ids`, `created`, `create_time`, `modified`) VALUES(7, 2, 0, 0, 0, '青岛自闭症患儿与伪虎鲸亲密接触', '', '', 'sample/news/7.jpg', 0, 0, 0, 123668, 1, 0, '0', '', unix_timestamp(now()), '2011-01-02 02:47:28', 0);
INSERT INTO `pb_newses` (`id`, `type_id`, `type`, `industry_id`, `area_id`, `title`, `content`, `source`, `picture`, `if_focus`, `if_commend`, `highlight`, `clicked`, `status`, `flag`, `require_membertype`, `tag_ids`, `created`, `create_time`, `modified`) VALUES(8, 2, 0, 0, 0, '重庆女子交巡警队伍正式上岗执勤', '', '', 'sample/news/8.jpg', 0, 0, 0, 123, 1, 0, '0', '', unix_timestamp(now()), '2011-01-02 02:47:28', 0);
INSERT INTO `pb_newses` (`id`, `type_id`, `type`, `industry_id`, `area_id`, `title`, `content`, `source`, `picture`, `if_focus`, `if_commend`, `highlight`, `clicked`, `status`, `flag`, `require_membertype`, `tag_ids`, `created`, `create_time`, `modified`) VALUES(9, 1, 0, 0, 0, '西班牙斗牛场愤怒公牛冲入看台引发骚乱', '', '', 'sample/news/9.jpg', 0, 0, 0, 123, 1, 0, '0', '', unix_timestamp(now()), '2011-01-02 02:47:28', 0);
INSERT INTO `pb_newses` (`id`, `type_id`, `type`, `industry_id`, `area_id`, `title`, `content`, `source`, `picture`, `if_focus`, `if_commend`, `highlight`, `clicked`, `status`, `flag`, `require_membertype`, `tag_ids`, `created`, `create_time`, `modified`) VALUES(10, 1, 0, 0, 0, '皇马胜巴萨时隔18年夺冠', '', '', 'sample/news/10.jpg', 0, 0, 0, 123, 1, 0, '0', '', unix_timestamp(now()), '2011-01-02 02:47:28', 0);
INSERT INTO `pb_newses` (`id`, `type_id`, `type`, `industry_id`, `area_id`, `title`, `content`, `source`, `picture`, `if_focus`, `if_commend`, `highlight`, `clicked`, `status`, `flag`, `require_membertype`, `tag_ids`, `created`, `create_time`, `modified`) VALUES(11, 1, 0, 0, 0, '上海迪士尼乐园效果图出炉', '', '', 'sample/news/11.jpg', 0, 0, 0, 123, 1, 0, '0', '', unix_timestamp(now()), '2011-01-02 02:47:28', 0);
INSERT INTO `pb_newses` (`id`, `type_id`, `type`, `industry_id`, `area_id`, `title`, `content`, `source`, `picture`, `if_focus`, `if_commend`, `highlight`, `clicked`, `status`, `flag`, `require_membertype`, `tag_ids`, `created`, `create_time`, `modified`) VALUES(12, 1, 0, 0, 0, '菲律宾首都发生大火万人失去家园', '', '', 'sample/news/12.jpg', 0, 0, 0, 123, 1, 0, '0', '', unix_timestamp(now()), '2011-01-02 02:47:28', 0);
INSERT INTO `pb_newses` (`id`, `type_id`, `type`, `industry_id`, `area_id`, `title`, `content`, `source`, `picture`, `if_focus`, `if_commend`, `highlight`, `clicked`, `status`, `flag`, `require_membertype`, `tag_ids`, `created`, `create_time`, `modified`) VALUES(2, 1, 0, 0, 0, '热烈祝贺本网改版成功', NULL, '', 'sample/news/14.jpg', 0, 1, 0, 123, 1, 0, '0', '', unix_timestamp(now()), '2011-01-02 02:47:28', 0);
INSERT INTO `pb_newses` (`id`, `type_id`, `type`, `industry_id`, `area_id`, `title`, `content`, `source`, `picture`, `if_focus`, `if_commend`, `highlight`, `clicked`, `status`, `flag`, `require_membertype`, `tag_ids`, `created`, `create_time`, `modified`) VALUES(1, 1, 0, 0, 0, '迎上线，送积分，欢迎登陆本行业网', '', '', 'sample/news/14.jpg', 0, 1, 0, 123, 1, 0, '0', '', unix_timestamp(now()), '2011-01-02 02:47:28', 0);
INSERT INTO `pb_newses` (`id`, `type_id`, `type`, `industry_id`, `area_id`, `title`, `content`, `source`, `picture`, `if_focus`, `if_commend`, `highlight`, `clicked`, `status`, `flag`, `require_membertype`, `tag_ids`, `created`, `create_time`, `modified`) VALUES(13, 5, 0, 0, 0, '奥巴马将于芝加哥为连任举行首场公开筹款活动', '', '', 'sample/news/13.jpg', 0, 0, 0, 123, 1, 0, '0', '', unix_timestamp(now()), '2011-01-02 02:47:28', 0);

--
-- Table Datas `pb_newstypes`
--

INSERT INTO `pb_newstypes` (`id`, `name`, `level_id`, `status`, `parent_id`, `created`) VALUES(1, '行业聚焦', 1, 1, 0, unix_timestamp(now()));
INSERT INTO `pb_newstypes` (`id`, `name`, `level_id`, `status`, `parent_id`, `created`) VALUES(2, '头条要闻', 1, 1, 0, unix_timestamp(now()));
INSERT INTO `pb_newstypes` (`id`, `name`, `level_id`, `status`, `parent_id`, `created`) VALUES(3, '本网动态', 1, 1, 0, unix_timestamp(now()));
INSERT INTO `pb_newstypes` (`id`, `name`, `level_id`, `status`, `parent_id`, `created`) VALUES(4, '企业报道', 1, 1, 0, unix_timestamp(now()));
INSERT INTO `pb_newstypes` (`id`, `name`, `level_id`, `status`, `parent_id`, `created`) VALUES(5, '媒体精粹', 1, 1, 0, unix_timestamp(now()));
INSERT INTO `pb_newstypes` (`id`, `name`, `level_id`, `status`, `parent_id`, `created`) VALUES(6, '热点专题', 1, 1, 0, unix_timestamp(now()));
INSERT INTO `pb_newstypes` (`id`, `name`, `level_id`, `status`, `parent_id`, `created`) VALUES(7, '高端访谈', 1, 1, 0, unix_timestamp(now()));
INSERT INTO `pb_newstypes` (`id`, `name`, `level_id`, `status`, `parent_id`, `created`) VALUES(8, '新闻速递', 1, 1, 0, unix_timestamp(now()));

--
-- Table Datas `pb_productcategories`
--

INSERT INTO `pb_productcategories` (`id`, `parent_id`, `level`, `name`, `display_order`) VALUES(1, 0, 1, '电子元器 ', 0);
INSERT INTO `pb_productcategories` (`id`, `parent_id`, `level`, `name`, `display_order`) VALUES(2, 0, 1, '美容护理 ', 0);
INSERT INTO `pb_productcategories` (`id`, `parent_id`, `level`, `name`, `display_order`) VALUES(3, 0, 1, '医疗保养 ', 0);
INSERT INTO `pb_productcategories` (`id`, `parent_id`, `level`, `name`, `display_order`) VALUES(4, 0, 1, '仪器仪表 ', 0);
INSERT INTO `pb_productcategories` (`id`, `parent_id`, `level`, `name`, `display_order`) VALUES(5, 0, 1, '家居用品 ', 0);
INSERT INTO `pb_productcategories` (`id`, `parent_id`, `level`, `name`, `display_order`) VALUES(6, 0, 1, '礼品玩具 ', 0);
INSERT INTO `pb_productcategories` (`id`, `parent_id`, `level`, `name`, `display_order`) VALUES(7, 0, 1, '汽摩与配 ', 0);
INSERT INTO `pb_productcategories` (`id`, `parent_id`, `level`, `name`, `display_order`) VALUES(8, 0, 1, '冶金钢铁 ', 0);
INSERT INTO `pb_productcategories` (`id`, `parent_id`, `level`, `name`, `display_order`) VALUES(9, 0, 1, '包装 ', 0);
INSERT INTO `pb_productcategories` (`id`, `parent_id`, `level`, `name`, `display_order`) VALUES(10, 0, 1, '电脑软件 ', 0);
INSERT INTO `pb_productcategories` (`id`, `parent_id`, `level`, `name`, `display_order`) VALUES(11, 0, 1, '建筑建材 ', 0);
INSERT INTO `pb_productcategories` (`id`, `parent_id`, `level`, `name`, `display_order`) VALUES(12, 0, 1, '印刷 ', 0);
INSERT INTO `pb_productcategories` (`id`, `parent_id`, `level`, `name`, `display_order`) VALUES(13, 0, 1, '家电 ', 0);
INSERT INTO `pb_productcategories` (`id`, `parent_id`, `level`, `name`, `display_order`) VALUES(14, 0, 1, '交通运输 ', 0);
INSERT INTO `pb_productcategories` (`id`, `parent_id`, `level`, `name`, `display_order`) VALUES(15, 0, 1, '通讯 ', 0);
INSERT INTO `pb_productcategories` (`id`, `parent_id`, `level`, `name`, `display_order`) VALUES(16, 0, 1, '照明工业 ', 0);
INSERT INTO `pb_productcategories` (`id`, `parent_id`, `level`, `name`, `display_order`) VALUES(17, 0, 1, '电工电气 ', 0);
INSERT INTO `pb_productcategories` (`id`, `parent_id`, `level`, `name`, `display_order`) VALUES(18, 0, 1, '石油化工 ', 0);
INSERT INTO `pb_productcategories` (`id`, `parent_id`, `level`, `name`, `display_order`) VALUES(19, 0, 1, '涂装与表 ', 0);
INSERT INTO `pb_productcategories` (`id`, `parent_id`, `level`, `name`, `display_order`) VALUES(20, 0, 1, '橡胶塑料 ', 0);
INSERT INTO `pb_productcategories` (`id`, `parent_id`, `level`, `name`, `display_order`) VALUES(21, 0, 1, '安全防护 ', 0);
INSERT INTO `pb_productcategories` (`id`, `parent_id`, `level`, `name`, `display_order`) VALUES(22, 0, 1, '办公文教 ', 0);
INSERT INTO `pb_productcategories` (`id`, `parent_id`, `level`, `name`, `display_order`) VALUES(23, 0, 1, '传媒 ', 0);
INSERT INTO `pb_productcategories` (`id`, `parent_id`, `level`, `name`, `display_order`) VALUES(24, 0, 1, '环保与水处理 ', 0);
INSERT INTO `pb_productcategories` (`id`, `parent_id`, `level`, `name`, `display_order`) VALUES(25, 0, 1, '工程机械 ', 0);
INSERT INTO `pb_productcategories` (`id`, `parent_id`, `level`, `name`, `display_order`) VALUES(26, 0, 1, '五金工具 ', 0);
INSERT INTO `pb_productcategories` (`id`, `parent_id`, `level`, `name`, `display_order`) VALUES(27, 0, 1, '运动休闲 ', 0);
INSERT INTO `pb_productcategories` (`id`, `parent_id`, `level`, `name`, `display_order`) VALUES(28, 0, 1, '纸业 ', 0);
INSERT INTO `pb_productcategories` (`id`, `parent_id`, `level`, `name`, `display_order`) VALUES(29, 0, 1, '纺织皮革 ', 0);
INSERT INTO `pb_productcategories` (`id`, `parent_id`, `level`, `name`, `display_order`) VALUES(30, 0, 1, '服装 ', 0);
INSERT INTO `pb_productcategories` (`id`, `parent_id`, `level`, `name`, `display_order`) VALUES(31, 0, 1, '农业 ', 0);
INSERT INTO `pb_productcategories` (`id`, `parent_id`, `level`, `name`, `display_order`) VALUES(32, 0, 1, '食品饮料 ', 0);
INSERT INTO `pb_productcategories` (`id`, `parent_id`, `level`, `name`, `display_order`) VALUES(33, 0, 1, '服饰 ', 0);
INSERT INTO `pb_productcategories` (`id`, `parent_id`, `level`, `name`, `display_order`) VALUES(34, 0, 1, '商务服务 ', 0);
INSERT INTO `pb_productcategories` (`id`, `parent_id`, `level`, `name`, `display_order`) VALUES(35, 0, 1, '机械工业行业', 0);
INSERT INTO `pb_productcategories` (`id`, `parent_id`, `level`, `name`, `display_order`) VALUES(36, 1, 2, '保险元器件  ', 0);
INSERT INTO `pb_productcategories` (`id`, `parent_id`, `level`, `name`, `display_order`) VALUES(37, 1, 2, '半导体材料  ', 0);
INSERT INTO `pb_productcategories` (`id`, `parent_id`, `level`, `name`, `display_order`) VALUES(38, 1, 2, '其它电子材料  ', 0);
INSERT INTO `pb_productcategories` (`id`, `parent_id`, `level`, `name`, `display_order`) VALUES(39, 1, 2, '电容器  ', 0);
INSERT INTO `pb_productcategories` (`id`, `parent_id`, `level`, `name`, `display_order`) VALUES(40, 1, 2, '其它电子元器件  ', 0);
INSERT INTO `pb_productcategories` (`id`, `parent_id`, `level`, `name`, `display_order`) VALUES(41, 1, 2, '三极管  ', 0);
INSERT INTO `pb_productcategories` (`id`, `parent_id`, `level`, `name`, `display_order`) VALUES(42, 1, 2, '二极管  ', 0);
INSERT INTO `pb_productcategories` (`id`, `parent_id`, `level`, `name`, `display_order`) VALUES(43, 1, 2, '频率元件  ', 0);
INSERT INTO `pb_productcategories` (`id`, `parent_id`, `level`, `name`, `display_order`) VALUES(44, 1, 2, '变频器  ', 0);
INSERT INTO `pb_productcategories` (`id`, `parent_id`, `level`, `name`, `display_order`) VALUES(45, 1, 2, '电感器  ', 0);
INSERT INTO `pb_productcategories` (`id`, `parent_id`, `level`, `name`, `display_order`) VALUES(46, 1, 2, '电声配件  ', 0);
INSERT INTO `pb_productcategories` (`id`, `parent_id`, `level`, `name`, `display_order`) VALUES(47, 1, 2, '电声器件  ', 0);
INSERT INTO `pb_productcategories` (`id`, `parent_id`, `level`, `name`, `display_order`) VALUES(48, 1, 2, '电真空器件  ', 0);
INSERT INTO `pb_productcategories` (`id`, `parent_id`, `level`, `name`, `display_order`) VALUES(49, 1, 2, '连接器  ', 0);
INSERT INTO `pb_productcategories` (`id`, `parent_id`, `level`, `name`, `display_order`) VALUES(50, 1, 2, '继电器  ', 0);
INSERT INTO `pb_productcategories` (`id`, `parent_id`, `level`, `name`, `display_order`) VALUES(51, 1, 2, '压电晶体材料  ', 0);
INSERT INTO `pb_productcategories` (`id`, `parent_id`, `level`, `name`, `display_order`) VALUES(52, 1, 2, '电子浆料  ', 0);
INSERT INTO `pb_productcategories` (`id`, `parent_id`, `level`, `name`, `display_order`) VALUES(53, 1, 2, '电子用塑胶制品  ', 0);
INSERT INTO `pb_productcategories` (`id`, `parent_id`, `level`, `name`, `display_order`) VALUES(54, 1, 2, '场效应管  ', 0);
INSERT INTO `pb_productcategories` (`id`, `parent_id`, `level`, `name`, `display_order`) VALUES(55, 1, 2, '电子加工  ', 0);
INSERT INTO `pb_productcategories` (`id`, `parent_id`, `level`, `name`, `display_order`) VALUES(56, 1, 2, '磁性元器件  ', 0);
INSERT INTO `pb_productcategories` (`id`, `parent_id`, `level`, `name`, `display_order`) VALUES(57, 1, 2, '印刷线路板  ', 0);
INSERT INTO `pb_productcategories` (`id`, `parent_id`, `level`, `name`, `display_order`) VALUES(58, 1, 2, '开关元件  ', 0);
INSERT INTO `pb_productcategories` (`id`, `parent_id`, `level`, `name`, `display_order`) VALUES(59, 1, 2, '光电与显示器件  ', 0);
INSERT INTO `pb_productcategories` (`id`, `parent_id`, `level`, `name`, `display_order`) VALUES(60, 1, 2, '电位器  ', 0);
INSERT INTO `pb_productcategories` (`id`, `parent_id`, `level`, `name`, `display_order`) VALUES(61, 1, 2, '显示器件  ', 0);
INSERT INTO `pb_productcategories` (`id`, `parent_id`, `level`, `name`, `display_order`) VALUES(62, 1, 2, '传感器  ', 0);
INSERT INTO `pb_productcategories` (`id`, `parent_id`, `level`, `name`, `display_order`) VALUES(63, 1, 2, '电工仪器仪表  ', 0);
INSERT INTO `pb_productcategories` (`id`, `parent_id`, `level`, `name`, `display_order`) VALUES(64, 1, 2, '电工陶瓷材料  ', 0);
INSERT INTO `pb_productcategories` (`id`, `parent_id`, `level`, `name`, `display_order`) VALUES(65, 1, 2, '集成电路  ', 0);
INSERT INTO `pb_productcategories` (`id`, `parent_id`, `level`, `name`, `display_order`) VALUES(66, 1, 2, '电阻器  ', 0);
INSERT INTO `pb_productcategories` (`id`, `parent_id`, `level`, `name`, `display_order`) VALUES(67, 1, 2, '翻板  ', 0);
INSERT INTO `pb_productcategories` (`id`, `parent_id`, `level`, `name`, `display_order`) VALUES(68, 1, 2, '屏蔽材料  ', 0);
INSERT INTO `pb_productcategories` (`id`, `parent_id`, `level`, `name`, `display_order`) VALUES(69, 1, 2, '红外技术及应用  ', 0);
INSERT INTO `pb_productcategories` (`id`, `parent_id`, `level`, `name`, `display_order`) VALUES(70, 1, 2, '电子项目合作  ', 0);
INSERT INTO `pb_productcategories` (`id`, `parent_id`, `level`, `name`, `display_order`) VALUES(71, 1, 2, '变压器  ', 0);
INSERT INTO `pb_productcategories` (`id`, `parent_id`, `level`, `name`, `display_order`) VALUES(72, 1, 2, '激光器件  ', 0);
INSERT INTO `pb_productcategories` (`id`, `parent_id`, `level`, `name`, `display_order`) VALUES(73, 1, 2, '电子五金件  ', 0);
INSERT INTO `pb_productcategories` (`id`, `parent_id`, `level`, `name`, `display_order`) VALUES(74, 1, 2, '工业编码器  ', 0);
INSERT INTO `pb_productcategories` (`id`, `parent_id`, `level`, `name`, `display_order`) VALUES(75, 1, 2, '覆铜板材料 ', 0);

--
-- Table Datas `pb_quotes`
--

INSERT INTO `pb_quotes` (`id`, `product_id`, `market_id`, `type_id`, `title`, `content`, `area_id`, `area_id1`, `area_id2`, `area_id3`, `max_price`, `min_price`, `units`, `currency`, `trend_data`, `hits`, `created`, `modified`) VALUES(1, 1, -1, 0, '今日国际棉花指数(SM)', '', 0, 0, 0, 0, 100.00, 90.00, 1, 1, '', 4, unix_timestamp(now()), 0);
INSERT INTO `pb_quotes` (`id`, `product_id`, `market_id`, `type_id`, `title`, `content`, `area_id`, `area_id1`, `area_id2`, `area_id3`, `max_price`, `min_price`, `units`, `currency`, `trend_data`, `hits`, `created`, `modified`) VALUES(2, 1, -1, 0, '今日国家棉花价格A指数', '', 0, 0, 0, 0, 150.00, 100.00, 1, 1, '', 1, unix_timestamp(now()), 0);
INSERT INTO `pb_quotes` (`id`, `product_id`, `market_id`, `type_id`, `title`, `content`, `area_id`, `area_id1`, `area_id2`, `area_id3`, `max_price`, `min_price`, `units`, `currency`, `trend_data`, `hits`, `created`, `modified`) VALUES(3, 1, -1, 0, '今日国家棉花价格B指数', '', 0, 0, 0, 0, 210.00, 120.00, 1, 1, '', 1, unix_timestamp(now()), 0);
INSERT INTO `pb_quotes` (`id`, `product_id`, `market_id`, `type_id`, `title`, `content`, `area_id`, `area_id1`, `area_id2`, `area_id3`, `max_price`, `min_price`, `units`, `currency`, `trend_data`, `hits`, `created`, `modified`) VALUES(4, 1, -1, 0, '今日中国棉花收购价格指数', '', 0, 0, 0, 0, 230.00, 200.00, 1, 1, '', 4, unix_timestamp(now()), 0);
INSERT INTO `pb_quotes` (`id`, `product_id`, `market_id`, `type_id`, `title`, `content`, `area_id`, `area_id1`, `area_id2`, `area_id3`, `max_price`, `min_price`, `units`, `currency`, `trend_data`, `hits`, `created`, `modified`) VALUES(10, -1, -1, 0, '今日我国部分地区豆粕价格行情汇总', '', 0, 0, 0, 0, 0.00, 0.00, 1, 1, 'a:2:{s:1:"x";a:2:{i:0;s:1:"1";i:1;s:1:"2";}s:1:"y";a:2:{i:0;s:3:"150";i:1;s:3:"200";}}', 24, 0, 1301671812);

--
-- Table Datas `pb_standards`
--

INSERT INTO `pb_standards` (`id`, `attachment_id`, `type_id`, `title`, `source`, `digest`, `content`, `publish_time`, `force_time`, `clicked`, `created`, `modified`) VALUES(6, 0, 2, '卫生部公布敌敌畏等47种食品非法添加', '', '', '', 0, 0, 1, unix_timestamp(now()), 0);
INSERT INTO `pb_standards` (`id`, `attachment_id`, `type_id`, `title`, `source`, `digest`, `content`, `publish_time`, `force_time`, `clicked`, `created`, `modified`) VALUES(7, 0, 2, '关于加强违法使用非食用物质加工食品案', '', '', '', 0, 0, 1, unix_timestamp(now()), 0);

--
-- Table Datas `pb_standardtypes`
--

INSERT INTO `pb_standardtypes` (`id`, `name`, `display_order`) VALUES(1, '国家法规', 0);
INSERT INTO `pb_standardtypes` (`id`, `name`, `display_order`) VALUES(2, '地方法规', 0);

INSERT INTO `pb_spreads` (`member_id`, `keyword_name`, `title`, `content`, `target_url`, `hits`, `status`, `expiration`, `display_order`, `created`) VALUES (1, '公司', '北京友邻电子商务科技有限公司', '企业电子商务第一站，联系电话010-41235678', 'http://www.phpb2b.com', 1, 1, unix_timestamp(now())+2592000, 0, unix_timestamp(now()));
INSERT INTO `pb_spreads` (`member_id`, `keyword_name`, `title`, `content`, `target_url`, `hits`, `status`, `expiration`, `display_order`, `created`) VALUES (1, '公司', 'Beijing Ualink B2B E-Commerce', 'The most popular b2b e-commerce company contact 010-41235678', 'http://www.phpb2b.com', 1, 1, unix_timestamp(now())+2592000, 0, unix_timestamp(now()));