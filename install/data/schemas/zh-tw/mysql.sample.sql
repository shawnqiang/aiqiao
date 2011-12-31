--
-- Table Datas `pb_brands`
--

INSERT INTO `pb_brands` (`id`, `member_id`, `company_id`, `type_id`, `if_commend`, `name`, `alias_name`, `picture`, `description`, `hits`, `ranks`, `letter`, `created`, `modified`) VALUES(1, -1, 0, 1, 1, 'palm', 'palm', 'sample/brand/1.jpg', '', 1, 0, 'p', unix_timestamp(now()), 0);
INSERT INTO `pb_brands` (`id`, `member_id`, `company_id`, `type_id`, `if_commend`, `name`, `alias_name`, `picture`, `description`, `hits`, `ranks`, `letter`, `created`, `modified`) VALUES(2, -1, 0, 2, 1, 'LG', 'LG', 'sample/brand/2.jpg', '', 1, 0, 'l', unix_timestamp(now()), 0);
INSERT INTO `pb_brands` (`id`, `member_id`, `company_id`, `type_id`, `if_commend`, `name`, `alias_name`, `picture`, `description`, `hits`, `ranks`, `letter`, `created`, `modified`) VALUES(3, -1, 0, 4, 0, '摩托羅拉', 'motolola', 'sample/brand/3.jpg', '', 1, 0, 'm', unix_timestamp(now()), 0);
INSERT INTO `pb_brands` (`id`, `member_id`, `company_id`, `type_id`, `if_commend`, `name`, `alias_name`, `picture`, `description`, `hits`, `ranks`, `letter`, `created`, `modified`) VALUES(4, -1, 1, 4, 1, '諾基亞', 'nokia', 'sample/brand/4.jpg', '', 1, 0, 'n', unix_timestamp(now()), 0);
INSERT INTO `pb_brands` (`id`, `member_id`, `company_id`, `type_id`, `if_commend`, `name`, `alias_name`, `picture`, `description`, `hits`, `ranks`, `letter`, `created`, `modified`) VALUES(13, 1, 1, 4, 1, '飛利浦', 'philips', 'sample/brand/5.jpg', '', 0, 0, 'f', unix_timestamp(now()), 0);
INSERT INTO `pb_brands` (`id`, `member_id`, `company_id`, `type_id`, `if_commend`, `name`, `alias_name`, `picture`, `description`, `hits`, `ranks`, `letter`, `created`, `modified`) VALUES(14, -1, 1, 4, 0, '三星', 'samsung', 'sample/brand/6.jpg', '', 0, 0, 's', unix_timestamp(now()), 0);
INSERT INTO `pb_brands` (`id`, `member_id`, `company_id`, `type_id`, `if_commend`, `name`, `alias_name`, `picture`, `description`, `hits`, `ranks`, `letter`, `created`, `modified`) VALUES(7, -1, 1, 4, 0, '松下', 'panasonic', 'sample/brand/7.jpg', '', 0, 0, 's', unix_timestamp(now()), 0);
INSERT INTO `pb_brands` (`id`, `member_id`, `company_id`, `type_id`, `if_commend`, `name`, `alias_name`, `picture`, `description`, `hits`, `ranks`, `letter`, `created`, `modified`) VALUES(8, -1, 1, 4, 0, '索愛', 'sony', 'sample/brand/8.jpg', '', 0, 0, 's', unix_timestamp(now()), 0);
INSERT INTO `pb_brands` (`id`, `member_id`, `company_id`, `type_id`, `if_commend`, `name`, `alias_name`, `picture`, `description`, `hits`, `ranks`, `letter`, `created`, `modified`) VALUES(9, -1, 1, 3, 0, '西門子', 'simens', 'sample/brand/9.jpg', '', 0, 0, 'x', unix_timestamp(now()), 0);
INSERT INTO `pb_brands` (`id`, `member_id`, `company_id`, `type_id`, `if_commend`, `name`, `alias_name`, `picture`, `description`, `hits`, `ranks`, `letter`, `created`, `modified`) VALUES(10, 1, 1, 2, 0, '阿爾卡特', 'alcatel', 'sample/brand/10.jpg', 'asdf', 0, 0, 'a', unix_timestamp(now()), 0);
INSERT INTO `pb_brands` (`id`, `member_id`, `company_id`, `type_id`, `if_commend`, `name`, `alias_name`, `picture`, `description`, `hits`, `ranks`, `letter`, `created`, `modified`) VALUES(11, -1, 1, 0, 0, '阿迪達斯', 'Adidas', 'sample/brand/11.jpg', '', 0, 0, '', 0, 0);
INSERT INTO `pb_brands` (`id`, `member_id`, `company_id`, `type_id`, `if_commend`, `name`, `alias_name`, `picture`, `description`, `hits`, `ranks`, `letter`, `created`, `modified`) VALUES(12, -1, 1, 0, 0, '三得利', '', 'sample/brand/12.jpg', '', 0, 0, '', 0, 0);
INSERT INTO `pb_brands` (`id`, `member_id`, `company_id`, `type_id`, `if_commend`, `name`, `alias_name`, `picture`, `description`, `hits`, `ranks`, `letter`, `created`, `modified`) VALUES(5, -1, 1, 0, 0, '中國移動', '', 'sample/brand/13.jpg', '', 0, 0, '', 0, 0);
INSERT INTO `pb_brands` (`id`, `member_id`, `company_id`, `type_id`, `if_commend`, `name`, `alias_name`, `picture`, `description`, `hits`, `ranks`, `letter`, `created`, `modified`) VALUES(6, -1, 1, 0, 0, '知蜂', '', 'sample/brand/14.jpg', '', 0, 0, '', 0, 0);

--
-- Table Datas `pb_brandtypes`
--

INSERT INTO `pb_brandtypes` (`id`, `parent_id`, `level`, `name`, `display_order`) VALUES(1, 0, 1, '裝飾建材', 0);
INSERT INTO `pb_brandtypes` (`id`, `parent_id`, `level`, `name`, `display_order`) VALUES(2, 0, 1, '服裝鞋帽', 0);
INSERT INTO `pb_brandtypes` (`id`, `parent_id`, `level`, `name`, `display_order`) VALUES(3, 0, 1, '家具日用', 0);
INSERT INTO `pb_brandtypes` (`id`, `parent_id`, `level`, `name`, `display_order`) VALUES(4, 0, 1, '食品', 0);
INSERT INTO `pb_brandtypes` (`id`, `parent_id`, `level`, `name`, `display_order`) VALUES(5, 0, 1, '家電數碼', 0);
INSERT INTO `pb_brandtypes` (`id`, `parent_id`, `level`, `name`, `display_order`) VALUES(6, 0, 1, '汽車房産', 0);
INSERT INTO `pb_brandtypes` (`id`, `parent_id`, `level`, `name`, `display_order`) VALUES(7, 0, 1, '餐飲娛樂', 0);
INSERT INTO `pb_brandtypes` (`id`, `parent_id`, `level`, `name`, `display_order`) VALUES(8, 0, 1, '機械化工', 0);
INSERT INTO `pb_brandtypes` (`id`, `parent_id`, `level`, `name`, `display_order`) VALUES(9, 5, 2, '洗衣機', 0);
INSERT INTO `pb_brandtypes` (`id`, `parent_id`, `level`, `name`, `display_order`) VALUES(10, 5, 2, '飲水機', 0);
INSERT INTO `pb_brandtypes` (`id`, `parent_id`, `level`, `name`, `display_order`) VALUES(11, 5, 2, '電腦', 0);
INSERT INTO `pb_brandtypes` (`id`, `parent_id`, `level`, `name`, `display_order`) VALUES(12, 5, 2, '手機', 0);

--
-- Table Datas `pb_dicts`
--

INSERT INTO `pb_dicts` (`id`, `dicttype_id`, `extend_dicttypeid`, `word`, `word_name`, `digest`, `content`, `picture`, `refer`, `hits`, `closed`, `if_commend`, `created`, `modified`) VALUES(1, 7, '', '成本加運費', 'Cost and Freight', '', '', '', '', 7, 0, 0, unix_timestamp(now()), 0);
INSERT INTO `pb_dicts` (`id`, `dicttype_id`, `extend_dicttypeid`, `word`, `word_name`, `digest`, `content`, `picture`, `refer`, `hits`, `closed`, `if_commend`, `created`, `modified`) VALUES(2, 1, '', '多式聯運', '', '', '', '', '', 4, 0, 0, unix_timestamp(now()), 0);

--
-- Table Datas `pb_dicttypes`
--

INSERT INTO `pb_dicttypes` (`id`, `name`, `parent_id`, `display_order`) VALUES(1, '物流知識', 0, 0);
INSERT INTO `pb_dicttypes` (`id`, `name`, `parent_id`, `display_order`) VALUES(2, '物流管理', 0, 0);
INSERT INTO `pb_dicttypes` (`id`, `name`, `parent_id`, `display_order`) VALUES(3, '物流公司', 0, 0);
INSERT INTO `pb_dicttypes` (`id`, `name`, `parent_id`, `display_order`) VALUES(4, '法律法規', 0, 0);
INSERT INTO `pb_dicttypes` (`id`, `name`, `parent_id`, `display_order`) VALUES(5, '電子商務', 0, 0);
INSERT INTO `pb_dicttypes` (`id`, `name`, `parent_id`, `display_order`) VALUES(6, '相關知識', 0, 0);
INSERT INTO `pb_dicttypes` (`id`, `name`, `parent_id`, `display_order`) VALUES(7, '常用術語', 1, 0);
INSERT INTO `pb_dicttypes` (`id`, `name`, `parent_id`, `display_order`) VALUES(8, '運輸知識', 1, 0);
INSERT INTO `pb_dicttypes` (`id`, `name`, `parent_id`, `display_order`) VALUES(9, '倉儲知識', 1, 0);
INSERT INTO `pb_dicttypes` (`id`, `name`, `parent_id`, `display_order`) VALUES(10, '物流設備', 1, 0);
INSERT INTO `pb_dicttypes` (`id`, `name`, `parent_id`, `display_order`) VALUES(11, '物流保險', 1, 0);
INSERT INTO `pb_dicttypes` (`id`, `name`, `parent_id`, `display_order`) VALUES(12, '第三方物流', 1, 0);
INSERT INTO `pb_dicttypes` (`id`, `name`, `parent_id`, `display_order`) VALUES(13, '供應鏈', 1, 0);
INSERT INTO `pb_dicttypes` (`id`, `name`, `parent_id`, `display_order`) VALUES(14, '其他', 1, 0);

--
-- Table Datas `pb_expos`
--

INSERT INTO `pb_expos` (`id`, `expotype_id`, `name`, `description`, `begin_time`, `end_time`, `industry_ids`, `industry_id`, `area_id`, `address`, `stadium_name`, `refresh_method`, `scope`, `hosts`, `organisers`, `co_organisers`, `sponsors`, `contacts`, `important_notice`, `picture`, `if_commend`, `status`, `hits`, `created`, `modified`) VALUES(1, 1, '第14屆中國美容博覽會開幕', '', 1293936472, 1296528472, '0', 0, 0, '', '', '', '', '', '', '', '', '', '', '', 0, 1, 1, unix_timestamp(now()), 0);
INSERT INTO `pb_expos` (`id`, `expotype_id`, `name`, `description`, `begin_time`, `end_time`, `industry_ids`, `industry_id`, `area_id`, `address`, `stadium_name`, `refresh_method`, `scope`, `hosts`, `organisers`, `co_organisers`, `sponsors`, `contacts`, `important_notice`, `picture`, `if_commend`, `status`, `hits`, `created`, `modified`) VALUES(2, 1, '第29屆廣州國際美博會看點精彩呈現', '', 1293936472, 1296528472, '0', 0, 0, '', '', '', '', '', '', '', '', '', '', '', 0, 1, 1, unix_timestamp(now()), 0);
INSERT INTO `pb_expos` (`id`, `expotype_id`, `name`, `description`, `begin_time`, `end_time`, `industry_ids`, `industry_id`, `area_id`, `address`, `stadium_name`, `refresh_method`, `scope`, `hosts`, `organisers`, `co_organisers`, `sponsors`, `contacts`, `important_notice`, `picture`, `if_commend`, `status`, `hits`, `created`, `modified`) VALUES(3, 1, '第十屆中國國際營養健康産業博覽會', '', 1293936472, 1296528472, '0', 0, 0, '', '', '', '', '', '', '', '', '', '', '', 0, 1, 1, unix_timestamp(now()), 0);
INSERT INTO `pb_expos` (`id`, `expotype_id`, `name`, `description`, `begin_time`, `end_time`, `industry_ids`, `industry_id`, `area_id`, `address`, `stadium_name`, `refresh_method`, `scope`, `hosts`, `organisers`, `co_organisers`, `sponsors`, `contacts`, `important_notice`, `picture`, `if_commend`, `status`, `hits`, `created`, `modified`) VALUES(4, 1, '中國上海産業用紡織品及非織造布展覽會', '', 1293936472, 1296528472, '0', 0, 0, '', '', '', '', '', '', '', '', '', '', '', 0, 1, 1, unix_timestamp(now()), 0);
INSERT INTO `pb_expos` (`id`, `expotype_id`, `name`, `description`, `begin_time`, `end_time`, `industry_ids`, `industry_id`, `area_id`, `address`, `stadium_name`, `refresh_method`, `scope`, `hosts`, `organisers`, `co_organisers`, `sponsors`, `contacts`, `important_notice`, `picture`, `if_commend`, `status`, `hits`, `created`, `modified`) VALUES(5, 2, '日本東京國際鞋類及皮革制品展覽會', '', 1293936472, 1296528472, '0', 0, 0, '', '', '', '', '', '', '', '', '', '', '', 0, 1, 1, unix_timestamp(now()), 0);
INSERT INTO `pb_expos` (`id`, `expotype_id`, `name`, `description`, `begin_time`, `end_time`, `industry_ids`, `industry_id`, `area_id`, `address`, `stadium_name`, `refresh_method`, `scope`, `hosts`, `organisers`, `co_organisers`, `sponsors`, `contacts`, `important_notice`, `picture`, `if_commend`, `status`, `hits`, `created`, `modified`) VALUES(6, 2, '第二十一屆中國國際玻璃工業技術展覽會', '', 1293936472, 1296528472, '0', 0, 0, '', '', '', '', '', '', '', '', '', '', '', 0, 1, 1, unix_timestamp(now()), 0);
INSERT INTO `pb_expos` (`id`, `expotype_id`, `name`, `description`, `begin_time`, `end_time`, `industry_ids`, `industry_id`, `area_id`, `address`, `stadium_name`, `refresh_method`, `scope`, `hosts`, `organisers`, `co_organisers`, `sponsors`, `contacts`, `important_notice`, `picture`, `if_commend`, `status`, `hits`, `created`, `modified`) VALUES(7, 1, '第五屆中國內蒙古食品加工與包裝機械展覽會', '第七屆中國國際食品加工與包裝設備展覽會', 1293936472, 1296528472, '0', 0, 0, '', '', '', '', '', '', '', '', '', '', '', 0, 1, 1, unix_timestamp(now()), 0);
INSERT INTO `pb_expos` (`id`, `expotype_id`, `name`, `description`, `begin_time`, `end_time`, `industry_ids`, `industry_id`, `area_id`, `address`, `stadium_name`, `refresh_method`, `scope`, `hosts`, `organisers`, `co_organisers`, `sponsors`, `contacts`, `important_notice`, `picture`, `if_commend`, `status`, `hits`, `created`, `modified`) VALUES(8, 2, '第七屆中國國際食品加工與包裝設備展覽會', '第五屆中國內蒙古食品加工與包裝機械展覽會', 1293936472, 1296528472, '0', 0, 0, '', '', '', '', '', '', '', '', NULL, NULL, '', 0, 1, 1, unix_timestamp(now()), 0);
INSERT INTO `pb_expos` (`id`, `expotype_id`, `name`, `description`, `begin_time`, `end_time`, `industry_ids`, `industry_id`, `area_id`, `address`, `stadium_name`, `refresh_method`, `scope`, `hosts`, `organisers`, `co_organisers`, `sponsors`, `contacts`, `important_notice`, `picture`, `if_commend`, `status`, `hits`, `created`, `modified`) VALUES(9, 1, '第十屆中國北京國際綠色食品及有機食品展覽會', '第十屆中國北京國際綠色食品及有機食品展覽會', 1293936472, 1296528472, '0', 0, 0, '', '', '', '', '', '', '', '', NULL, NULL, '', 0, 1, 1, unix_timestamp(now()), 0);
INSERT INTO `pb_expos` (`id`, `expotype_id`, `name`, `description`, `begin_time`, `end_time`, `industry_ids`, `industry_id`, `area_id`, `address`, `stadium_name`, `refresh_method`, `scope`, `hosts`, `organisers`, `co_organisers`, `sponsors`, `contacts`, `important_notice`, `picture`, `if_commend`, `status`, `hits`, `created`, `modified`) VALUES(10, 2, '第十五屆中國國際建築裝飾材料展覽會', '第十五屆中國國際建築裝飾材料展覽會', 1293936472, 1296528472, '0', 0, 0, '', '', '', '', '', '', '', '', NULL, NULL, '', 0, 1, 1, unix_timestamp(now()), 0);
INSERT INTO `pb_expos` (`id`, `expotype_id`, `name`, `description`, `begin_time`, `end_time`, `industry_ids`, `industry_id`, `area_id`, `address`, `stadium_name`, `refresh_method`, `scope`, `hosts`, `organisers`, `co_organisers`, `sponsors`, `contacts`, `important_notice`, `picture`, `if_commend`, `status`, `hits`, `created`, `modified`) VALUES(12, 1, '第十四屆蘇州住宅産業博覽會', '蘇州住宅産業博覽會是蘇州規模最大、規格最高的地産展', 1293936472, 1296528472, '0', 0, 0, '', '', '', '', '', '', '', '', NULL, NULL, 'sample/other/fair-1.jpg', 1, 1, 1, unix_timestamp(now()), 0);

--
-- Table Datas `pb_expotypes`
--

INSERT INTO `pb_expotypes` (`id`, `name`, `created`, `modified`) VALUES(1, '國內展會', 0, 0);
INSERT INTO `pb_expotypes` (`id`, `name`, `created`, `modified`) VALUES(2, '國際展會', 0, 0);

--
-- Table Datas `pb_helps`
--

INSERT INTO `pb_helps` (`id`, `helptype_id`, `title`, `content`, `highlight`, `created`, `modified`) VALUES(1, 1, '登陸指導', '', 0, 0, 0);
INSERT INTO `pb_helps` (`id`, `helptype_id`, `title`, `content`, `highlight`, `created`, `modified`) VALUES(2, 2, '注冊指導', '', 0, 0, 0);

--
-- Table Datas `pb_helptypes`
--

INSERT INTO `pb_helptypes` (`id`, `title`, `description`, `parent_id`, `level`, `display_order`, `created`, `modified`) VALUES(1, '站內幫助', '', 0, 0, 0, 0, 0);
INSERT INTO `pb_helptypes` (`id`, `title`, `description`, `parent_id`, `level`, `display_order`, `created`, `modified`) VALUES(2, '站外幫助', '', 0, 0, 0, 0, 0);

--
-- Table Datas `pb_newses`
--

INSERT INTO `pb_newses` (`id`, `type_id`, `type`, `industry_id`, `area_id`, `title`, `content`, `source`, `picture`, `if_focus`, `if_commend`, `highlight`, `clicked`, `status`, `flag`, `require_membertype`, `tag_ids`, `created`, `create_time`, `modified`) VALUES(14, 2, 0, 0, 0, '9.5米高孔子像在天安門廣場東側落成', '', '', 'sample/news/1.jpg', 0, 0, 0, 123, 1, 0, '0', '', unix_timestamp(now()), '2011-01-02 02:47:28', 0);
INSERT INTO `pb_newses` (`id`, `type_id`, `type`, `industry_id`, `area_id`, `title`, `content`, `source`, `picture`, `if_focus`, `if_commend`, `highlight`, `clicked`, `status`, `flag`, `require_membertype`, `tag_ids`, `created`, `create_time`, `modified`) VALUES(15, 2, 0, 0, 0, '廣州亞運進行開幕式焰火彩排', '', '', 'sample/news/2.jpg', 0, 0, 0, 123, 1, 0, '0', '', unix_timestamp(now()), '2011-01-02 02:47:28', 0);
INSERT INTO `pb_newses` (`id`, `type_id`, `type`, `industry_id`, `area_id`, `title`, `content`, `source`, `picture`, `if_focus`, `if_commend`, `highlight`, `clicked`, `status`, `flag`, `require_membertype`, `tag_ids`, `created`, `create_time`, `modified`) VALUES(3, 2, 0, 0, 0, '紐約紀念2011世界地球日', '', '', 'sample/news/3.jpg', 0, 0, 0, 123, 1, 0, '0', '', unix_timestamp(now()), '2011-01-02 02:47:28', 0);
INSERT INTO `pb_newses` (`id`, `type_id`, `type`, `industry_id`, `area_id`, `title`, `content`, `source`, `picture`, `if_focus`, `if_commend`, `highlight`, `clicked`, `status`, `flag`, `require_membertype`, `tag_ids`, `created`, `create_time`, `modified`) VALUES(4, 2, 0, 0, 0, '日本迪斯尼地震後重開', '', '', 'sample/news/4.jpg', 0, 0, 0, 123, 1, 0, '0', '', unix_timestamp(now()), '2011-01-02 02:47:28', 0);
INSERT INTO `pb_newses` (`id`, `type_id`, `type`, `industry_id`, `area_id`, `title`, `content`, `source`, `picture`, `if_focus`, `if_commend`, `highlight`, `clicked`, `status`, `flag`, `require_membertype`, `tag_ids`, `created`, `create_time`, `modified`) VALUES(5, 2, 0, 0, 0, '西南地區動臥列車首次開行', '', '', 'sample/news/5.jpg', 0, 0, 0, 123, 1, 0, '0', '', unix_timestamp(now()), '2011-01-02 02:47:28', 0);
INSERT INTO `pb_newses` (`id`, `type_id`, `type`, `industry_id`, `area_id`, `title`, `content`, `source`, `picture`, `if_focus`, `if_commend`, `highlight`, `clicked`, `status`, `flag`, `require_membertype`, `tag_ids`, `created`, `create_time`, `modified`) VALUES(6, 2, 0, 0, 0, '中國海南成爲世界第四個離島免稅區', '', '', 'sample/news/6.jpg', 0, 0, 0, 123, 1, 0, '0', '', unix_timestamp(now()), '2011-01-02 02:47:28', 0);
INSERT INTO `pb_newses` (`id`, `type_id`, `type`, `industry_id`, `area_id`, `title`, `content`, `source`, `picture`, `if_focus`, `if_commend`, `highlight`, `clicked`, `status`, `flag`, `require_membertype`, `tag_ids`, `created`, `create_time`, `modified`) VALUES(7, 2, 0, 0, 0, '青島自閉症患兒與僞虎鯨親密接觸', '', '', 'sample/news/7.jpg', 0, 0, 0, 123668, 1, 0, '0', '', unix_timestamp(now()), '2011-01-02 02:47:28', 0);
INSERT INTO `pb_newses` (`id`, `type_id`, `type`, `industry_id`, `area_id`, `title`, `content`, `source`, `picture`, `if_focus`, `if_commend`, `highlight`, `clicked`, `status`, `flag`, `require_membertype`, `tag_ids`, `created`, `create_time`, `modified`) VALUES(8, 2, 0, 0, 0, '重慶女子交巡警隊伍正式上崗執勤', '', '', 'sample/news/8.jpg', 0, 0, 0, 123, 1, 0, '0', '', unix_timestamp(now()), '2011-01-02 02:47:28', 0);
INSERT INTO `pb_newses` (`id`, `type_id`, `type`, `industry_id`, `area_id`, `title`, `content`, `source`, `picture`, `if_focus`, `if_commend`, `highlight`, `clicked`, `status`, `flag`, `require_membertype`, `tag_ids`, `created`, `create_time`, `modified`) VALUES(9, 1, 0, 0, 0, '西班牙鬥牛場憤怒公牛沖入看台引發騷亂', '', '', 'sample/news/9.jpg', 0, 0, 0, 123, 1, 0, '0', '', unix_timestamp(now()), '2011-01-02 02:47:28', 0);
INSERT INTO `pb_newses` (`id`, `type_id`, `type`, `industry_id`, `area_id`, `title`, `content`, `source`, `picture`, `if_focus`, `if_commend`, `highlight`, `clicked`, `status`, `flag`, `require_membertype`, `tag_ids`, `created`, `create_time`, `modified`) VALUES(10, 1, 0, 0, 0, '皇馬勝巴薩時隔18年奪冠', '', '', 'sample/news/10.jpg', 0, 0, 0, 123, 1, 0, '0', '', unix_timestamp(now()), '2011-01-02 02:47:28', 0);
INSERT INTO `pb_newses` (`id`, `type_id`, `type`, `industry_id`, `area_id`, `title`, `content`, `source`, `picture`, `if_focus`, `if_commend`, `highlight`, `clicked`, `status`, `flag`, `require_membertype`, `tag_ids`, `created`, `create_time`, `modified`) VALUES(11, 1, 0, 0, 0, '上海迪士尼樂園效果圖出爐', '', '', 'sample/news/11.jpg', 0, 0, 0, 123, 1, 0, '0', '', unix_timestamp(now()), '2011-01-02 02:47:28', 0);
INSERT INTO `pb_newses` (`id`, `type_id`, `type`, `industry_id`, `area_id`, `title`, `content`, `source`, `picture`, `if_focus`, `if_commend`, `highlight`, `clicked`, `status`, `flag`, `require_membertype`, `tag_ids`, `created`, `create_time`, `modified`) VALUES(12, 1, 0, 0, 0, '菲律賓首都發生大火萬人失去家園', '', '', 'sample/news/12.jpg', 0, 0, 0, 123, 1, 0, '0', '', unix_timestamp(now()), '2011-01-02 02:47:28', 0);
INSERT INTO `pb_newses` (`id`, `type_id`, `type`, `industry_id`, `area_id`, `title`, `content`, `source`, `picture`, `if_focus`, `if_commend`, `highlight`, `clicked`, `status`, `flag`, `require_membertype`, `tag_ids`, `created`, `create_time`, `modified`) VALUES(2, 1, 0, 0, 0, '熱烈祝賀本網改版成功', NULL, '', 'sample/news/14.jpg', 0, 1, 0, 123, 1, 0, '0', '', unix_timestamp(now()), '2011-01-02 02:47:28', 0);
INSERT INTO `pb_newses` (`id`, `type_id`, `type`, `industry_id`, `area_id`, `title`, `content`, `source`, `picture`, `if_focus`, `if_commend`, `highlight`, `clicked`, `status`, `flag`, `require_membertype`, `tag_ids`, `created`, `create_time`, `modified`) VALUES(1, 1, 0, 0, 0, '迎上線，送積分，歡迎登陸本行業網', '', '', 'sample/news/14.jpg', 0, 1, 0, 123, 1, 0, '0', '', unix_timestamp(now()), '2011-01-02 02:47:28', 0);
INSERT INTO `pb_newses` (`id`, `type_id`, `type`, `industry_id`, `area_id`, `title`, `content`, `source`, `picture`, `if_focus`, `if_commend`, `highlight`, `clicked`, `status`, `flag`, `require_membertype`, `tag_ids`, `created`, `create_time`, `modified`) VALUES(13, 5, 0, 0, 0, '奧巴馬將于芝加哥爲連任舉行首場公開籌款活動', '', '', 'sample/news/13.jpg', 0, 0, 0, 123, 1, 0, '0', '', unix_timestamp(now()), '2011-01-02 02:47:28', 0);

--
-- Table Datas `pb_newstypes`
--

INSERT INTO `pb_newstypes` (`id`, `name`, `level_id`, `status`, `parent_id`, `created`) VALUES(1, '行業聚焦', 1, 1, 0, unix_timestamp(now()));
INSERT INTO `pb_newstypes` (`id`, `name`, `level_id`, `status`, `parent_id`, `created`) VALUES(2, '頭條要聞', 1, 1, 0, unix_timestamp(now()));
INSERT INTO `pb_newstypes` (`id`, `name`, `level_id`, `status`, `parent_id`, `created`) VALUES(3, '本網動態', 1, 1, 0, unix_timestamp(now()));
INSERT INTO `pb_newstypes` (`id`, `name`, `level_id`, `status`, `parent_id`, `created`) VALUES(4, '企業報道', 1, 1, 0, unix_timestamp(now()));
INSERT INTO `pb_newstypes` (`id`, `name`, `level_id`, `status`, `parent_id`, `created`) VALUES(5, '媒體精粹', 1, 1, 0, unix_timestamp(now()));
INSERT INTO `pb_newstypes` (`id`, `name`, `level_id`, `status`, `parent_id`, `created`) VALUES(6, '熱點專題', 1, 1, 0, unix_timestamp(now()));
INSERT INTO `pb_newstypes` (`id`, `name`, `level_id`, `status`, `parent_id`, `created`) VALUES(7, '高端訪談', 1, 1, 0, unix_timestamp(now()));
INSERT INTO `pb_newstypes` (`id`, `name`, `level_id`, `status`, `parent_id`, `created`) VALUES(8, '新聞速遞', 1, 1, 0, unix_timestamp(now()));

--
-- Table Datas `pb_productcategories`
--

INSERT INTO `pb_productcategories` (`id`, `parent_id`, `level`, `name`, `display_order`) VALUES(1, 0, 1, '電子元器 ', 0);
INSERT INTO `pb_productcategories` (`id`, `parent_id`, `level`, `name`, `display_order`) VALUES(2, 0, 1, '美容護理 ', 0);
INSERT INTO `pb_productcategories` (`id`, `parent_id`, `level`, `name`, `display_order`) VALUES(3, 0, 1, '醫療保養 ', 0);
INSERT INTO `pb_productcategories` (`id`, `parent_id`, `level`, `name`, `display_order`) VALUES(4, 0, 1, '儀器儀表 ', 0);
INSERT INTO `pb_productcategories` (`id`, `parent_id`, `level`, `name`, `display_order`) VALUES(5, 0, 1, '家居用品 ', 0);
INSERT INTO `pb_productcategories` (`id`, `parent_id`, `level`, `name`, `display_order`) VALUES(6, 0, 1, '禮品玩具 ', 0);
INSERT INTO `pb_productcategories` (`id`, `parent_id`, `level`, `name`, `display_order`) VALUES(7, 0, 1, '汽摩與配 ', 0);
INSERT INTO `pb_productcategories` (`id`, `parent_id`, `level`, `name`, `display_order`) VALUES(8, 0, 1, '冶金鋼鐵 ', 0);
INSERT INTO `pb_productcategories` (`id`, `parent_id`, `level`, `name`, `display_order`) VALUES(9, 0, 1, '包裝 ', 0);
INSERT INTO `pb_productcategories` (`id`, `parent_id`, `level`, `name`, `display_order`) VALUES(10, 0, 1, '電腦軟件 ', 0);
INSERT INTO `pb_productcategories` (`id`, `parent_id`, `level`, `name`, `display_order`) VALUES(11, 0, 1, '建築建材 ', 0);
INSERT INTO `pb_productcategories` (`id`, `parent_id`, `level`, `name`, `display_order`) VALUES(12, 0, 1, '印刷 ', 0);
INSERT INTO `pb_productcategories` (`id`, `parent_id`, `level`, `name`, `display_order`) VALUES(13, 0, 1, '家電 ', 0);
INSERT INTO `pb_productcategories` (`id`, `parent_id`, `level`, `name`, `display_order`) VALUES(14, 0, 1, '交通運輸 ', 0);
INSERT INTO `pb_productcategories` (`id`, `parent_id`, `level`, `name`, `display_order`) VALUES(15, 0, 1, '通訊 ', 0);
INSERT INTO `pb_productcategories` (`id`, `parent_id`, `level`, `name`, `display_order`) VALUES(16, 0, 1, '照明工業 ', 0);
INSERT INTO `pb_productcategories` (`id`, `parent_id`, `level`, `name`, `display_order`) VALUES(17, 0, 1, '電工電氣 ', 0);
INSERT INTO `pb_productcategories` (`id`, `parent_id`, `level`, `name`, `display_order`) VALUES(18, 0, 1, '石油化工 ', 0);
INSERT INTO `pb_productcategories` (`id`, `parent_id`, `level`, `name`, `display_order`) VALUES(19, 0, 1, '塗裝與表 ', 0);
INSERT INTO `pb_productcategories` (`id`, `parent_id`, `level`, `name`, `display_order`) VALUES(20, 0, 1, '橡膠塑料 ', 0);
INSERT INTO `pb_productcategories` (`id`, `parent_id`, `level`, `name`, `display_order`) VALUES(21, 0, 1, '安全防護 ', 0);
INSERT INTO `pb_productcategories` (`id`, `parent_id`, `level`, `name`, `display_order`) VALUES(22, 0, 1, '辦公文教 ', 0);
INSERT INTO `pb_productcategories` (`id`, `parent_id`, `level`, `name`, `display_order`) VALUES(23, 0, 1, '傳媒 ', 0);
INSERT INTO `pb_productcategories` (`id`, `parent_id`, `level`, `name`, `display_order`) VALUES(24, 0, 1, '環保與水處理 ', 0);
INSERT INTO `pb_productcategories` (`id`, `parent_id`, `level`, `name`, `display_order`) VALUES(25, 0, 1, '工程機械 ', 0);
INSERT INTO `pb_productcategories` (`id`, `parent_id`, `level`, `name`, `display_order`) VALUES(26, 0, 1, '五金工具 ', 0);
INSERT INTO `pb_productcategories` (`id`, `parent_id`, `level`, `name`, `display_order`) VALUES(27, 0, 1, '運動休閑 ', 0);
INSERT INTO `pb_productcategories` (`id`, `parent_id`, `level`, `name`, `display_order`) VALUES(28, 0, 1, '紙業 ', 0);
INSERT INTO `pb_productcategories` (`id`, `parent_id`, `level`, `name`, `display_order`) VALUES(29, 0, 1, '紡織皮革 ', 0);
INSERT INTO `pb_productcategories` (`id`, `parent_id`, `level`, `name`, `display_order`) VALUES(30, 0, 1, '服裝 ', 0);
INSERT INTO `pb_productcategories` (`id`, `parent_id`, `level`, `name`, `display_order`) VALUES(31, 0, 1, '農業 ', 0);
INSERT INTO `pb_productcategories` (`id`, `parent_id`, `level`, `name`, `display_order`) VALUES(32, 0, 1, '食品飲料 ', 0);
INSERT INTO `pb_productcategories` (`id`, `parent_id`, `level`, `name`, `display_order`) VALUES(33, 0, 1, '服飾 ', 0);
INSERT INTO `pb_productcategories` (`id`, `parent_id`, `level`, `name`, `display_order`) VALUES(34, 0, 1, '商務服務 ', 0);
INSERT INTO `pb_productcategories` (`id`, `parent_id`, `level`, `name`, `display_order`) VALUES(35, 0, 1, '機械工業行業', 0);
INSERT INTO `pb_productcategories` (`id`, `parent_id`, `level`, `name`, `display_order`) VALUES(36, 1, 2, '保險元器件  ', 0);
INSERT INTO `pb_productcategories` (`id`, `parent_id`, `level`, `name`, `display_order`) VALUES(37, 1, 2, '半導體材料  ', 0);
INSERT INTO `pb_productcategories` (`id`, `parent_id`, `level`, `name`, `display_order`) VALUES(38, 1, 2, '其它電子材料  ', 0);
INSERT INTO `pb_productcategories` (`id`, `parent_id`, `level`, `name`, `display_order`) VALUES(39, 1, 2, '電容器  ', 0);
INSERT INTO `pb_productcategories` (`id`, `parent_id`, `level`, `name`, `display_order`) VALUES(40, 1, 2, '其它電子元器件  ', 0);
INSERT INTO `pb_productcategories` (`id`, `parent_id`, `level`, `name`, `display_order`) VALUES(41, 1, 2, '三極管  ', 0);
INSERT INTO `pb_productcategories` (`id`, `parent_id`, `level`, `name`, `display_order`) VALUES(42, 1, 2, '二極管  ', 0);
INSERT INTO `pb_productcategories` (`id`, `parent_id`, `level`, `name`, `display_order`) VALUES(43, 1, 2, '頻率元件  ', 0);
INSERT INTO `pb_productcategories` (`id`, `parent_id`, `level`, `name`, `display_order`) VALUES(44, 1, 2, '變頻器  ', 0);
INSERT INTO `pb_productcategories` (`id`, `parent_id`, `level`, `name`, `display_order`) VALUES(45, 1, 2, '電感器  ', 0);
INSERT INTO `pb_productcategories` (`id`, `parent_id`, `level`, `name`, `display_order`) VALUES(46, 1, 2, '電聲配件  ', 0);
INSERT INTO `pb_productcategories` (`id`, `parent_id`, `level`, `name`, `display_order`) VALUES(47, 1, 2, '電聲器件  ', 0);
INSERT INTO `pb_productcategories` (`id`, `parent_id`, `level`, `name`, `display_order`) VALUES(48, 1, 2, '電真空器件  ', 0);
INSERT INTO `pb_productcategories` (`id`, `parent_id`, `level`, `name`, `display_order`) VALUES(49, 1, 2, '連接器  ', 0);
INSERT INTO `pb_productcategories` (`id`, `parent_id`, `level`, `name`, `display_order`) VALUES(50, 1, 2, '繼電器  ', 0);
INSERT INTO `pb_productcategories` (`id`, `parent_id`, `level`, `name`, `display_order`) VALUES(51, 1, 2, '壓電晶體材料  ', 0);
INSERT INTO `pb_productcategories` (`id`, `parent_id`, `level`, `name`, `display_order`) VALUES(52, 1, 2, '電子漿料  ', 0);
INSERT INTO `pb_productcategories` (`id`, `parent_id`, `level`, `name`, `display_order`) VALUES(53, 1, 2, '電子用塑膠制品  ', 0);
INSERT INTO `pb_productcategories` (`id`, `parent_id`, `level`, `name`, `display_order`) VALUES(54, 1, 2, '場效應管  ', 0);
INSERT INTO `pb_productcategories` (`id`, `parent_id`, `level`, `name`, `display_order`) VALUES(55, 1, 2, '電子加工  ', 0);
INSERT INTO `pb_productcategories` (`id`, `parent_id`, `level`, `name`, `display_order`) VALUES(56, 1, 2, '磁性元器件  ', 0);
INSERT INTO `pb_productcategories` (`id`, `parent_id`, `level`, `name`, `display_order`) VALUES(57, 1, 2, '印刷線路板  ', 0);
INSERT INTO `pb_productcategories` (`id`, `parent_id`, `level`, `name`, `display_order`) VALUES(58, 1, 2, '開關元件  ', 0);
INSERT INTO `pb_productcategories` (`id`, `parent_id`, `level`, `name`, `display_order`) VALUES(59, 1, 2, '光電與顯示器件  ', 0);
INSERT INTO `pb_productcategories` (`id`, `parent_id`, `level`, `name`, `display_order`) VALUES(60, 1, 2, '電位器  ', 0);
INSERT INTO `pb_productcategories` (`id`, `parent_id`, `level`, `name`, `display_order`) VALUES(61, 1, 2, '顯示器件  ', 0);
INSERT INTO `pb_productcategories` (`id`, `parent_id`, `level`, `name`, `display_order`) VALUES(62, 1, 2, '傳感器  ', 0);
INSERT INTO `pb_productcategories` (`id`, `parent_id`, `level`, `name`, `display_order`) VALUES(63, 1, 2, '電工儀器儀表  ', 0);
INSERT INTO `pb_productcategories` (`id`, `parent_id`, `level`, `name`, `display_order`) VALUES(64, 1, 2, '電工陶瓷材料  ', 0);
INSERT INTO `pb_productcategories` (`id`, `parent_id`, `level`, `name`, `display_order`) VALUES(65, 1, 2, '集成電路  ', 0);
INSERT INTO `pb_productcategories` (`id`, `parent_id`, `level`, `name`, `display_order`) VALUES(66, 1, 2, '電阻器  ', 0);
INSERT INTO `pb_productcategories` (`id`, `parent_id`, `level`, `name`, `display_order`) VALUES(67, 1, 2, '翻板  ', 0);
INSERT INTO `pb_productcategories` (`id`, `parent_id`, `level`, `name`, `display_order`) VALUES(68, 1, 2, '屏蔽材料  ', 0);
INSERT INTO `pb_productcategories` (`id`, `parent_id`, `level`, `name`, `display_order`) VALUES(69, 1, 2, '紅外技術及應用  ', 0);
INSERT INTO `pb_productcategories` (`id`, `parent_id`, `level`, `name`, `display_order`) VALUES(70, 1, 2, '電子項目合作  ', 0);
INSERT INTO `pb_productcategories` (`id`, `parent_id`, `level`, `name`, `display_order`) VALUES(71, 1, 2, '變壓器  ', 0);
INSERT INTO `pb_productcategories` (`id`, `parent_id`, `level`, `name`, `display_order`) VALUES(72, 1, 2, '激光器件  ', 0);
INSERT INTO `pb_productcategories` (`id`, `parent_id`, `level`, `name`, `display_order`) VALUES(73, 1, 2, '電子五金件  ', 0);
INSERT INTO `pb_productcategories` (`id`, `parent_id`, `level`, `name`, `display_order`) VALUES(74, 1, 2, '工業編碼器  ', 0);
INSERT INTO `pb_productcategories` (`id`, `parent_id`, `level`, `name`, `display_order`) VALUES(75, 1, 2, '覆銅板材料 ', 0);

--
-- Table Datas `pb_quotes`
--

INSERT INTO `pb_quotes` (`id`, `product_id`, `market_id`, `type_id`, `title`, `content`, `area_id`, `area_id1`, `area_id2`, `area_id3`, `max_price`, `min_price`, `units`, `currency`, `trend_data`, `hits`, `created`, `modified`) VALUES(1, 1, -1, 0, '今日國際棉花指數(SM)', '', 0, 0, 0, 0, 100.00, 90.00, 1, 1, '', 4, unix_timestamp(now()), 0);
INSERT INTO `pb_quotes` (`id`, `product_id`, `market_id`, `type_id`, `title`, `content`, `area_id`, `area_id1`, `area_id2`, `area_id3`, `max_price`, `min_price`, `units`, `currency`, `trend_data`, `hits`, `created`, `modified`) VALUES(2, 1, -1, 0, '今日國家棉花價格A指數', '', 0, 0, 0, 0, 150.00, 100.00, 1, 1, '', 1, unix_timestamp(now()), 0);
INSERT INTO `pb_quotes` (`id`, `product_id`, `market_id`, `type_id`, `title`, `content`, `area_id`, `area_id1`, `area_id2`, `area_id3`, `max_price`, `min_price`, `units`, `currency`, `trend_data`, `hits`, `created`, `modified`) VALUES(3, 1, -1, 0, '今日國家棉花價格B指數', '', 0, 0, 0, 0, 210.00, 120.00, 1, 1, '', 1, unix_timestamp(now()), 0);
INSERT INTO `pb_quotes` (`id`, `product_id`, `market_id`, `type_id`, `title`, `content`, `area_id`, `area_id1`, `area_id2`, `area_id3`, `max_price`, `min_price`, `units`, `currency`, `trend_data`, `hits`, `created`, `modified`) VALUES(4, 1, -1, 0, '今日中國棉花收購價格指數', '', 0, 0, 0, 0, 230.00, 200.00, 1, 1, '', 4, unix_timestamp(now()), 0);
INSERT INTO `pb_quotes` (`id`, `product_id`, `market_id`, `type_id`, `title`, `content`, `area_id`, `area_id1`, `area_id2`, `area_id3`, `max_price`, `min_price`, `units`, `currency`, `trend_data`, `hits`, `created`, `modified`) VALUES(10, -1, -1, 0, '今日我國部分地區豆粕價格行情彙總', '', 0, 0, 0, 0, 0.00, 0.00, 1, 1, 'a:2:{s:1:"x";a:2:{i:0;s:1:"1";i:1;s:1:"2";}s:1:"y";a:2:{i:0;s:3:"150";i:1;s:3:"200";}}', 24, 0, 1301671812);

--
-- Table Datas `pb_standards`
--

INSERT INTO `pb_standards` (`id`, `attachment_id`, `type_id`, `title`, `source`, `digest`, `content`, `publish_time`, `force_time`, `clicked`, `created`, `modified`) VALUES(6, 0, 2, '衛生部公布敵敵畏等47種食品非法添加', '', '', '', 0, 0, 1, unix_timestamp(now()), 0);
INSERT INTO `pb_standards` (`id`, `attachment_id`, `type_id`, `title`, `source`, `digest`, `content`, `publish_time`, `force_time`, `clicked`, `created`, `modified`) VALUES(7, 0, 2, '關于加強違法使用非食用物質加工食品案', '', '', '', 0, 0, 1, unix_timestamp(now()), 0);

--
-- Table Datas `pb_standardtypes`
--

INSERT INTO `pb_standardtypes` (`id`, `name`, `display_order`) VALUES(1, '國家法規', 0);
INSERT INTO `pb_standardtypes` (`id`, `name`, `display_order`) VALUES(2, '地方法規', 0);

INSERT INTO `pb_spreads` (`member_id`, `keyword_name`, `title`, `content`, `target_url`, `hits`, `status`, `expiration`, `display_order`, `created`) VALUES (1, '公司', '北京友鄰電子商務科技有限公司', '企業電子商務第一站，聯系電話010-41235678', 'http://www.phpb2b.com', 1, 1, unix_timestamp(now())+2592000, 0, unix_timestamp(now()));
INSERT INTO `pb_spreads` (`member_id`, `keyword_name`, `title`, `content`, `target_url`, `hits`, `status`, `expiration`, `display_order`, `created`) VALUES (1, '公司', 'Beijing Ualink B2B E-Commerce', 'The most popular b2b e-commerce company contact 010-41235678', 'http://www.phpb2b.com', 1, 1, unix_timestamp(now())+2592000, 0, unix_timestamp(now()));