--
-- Table Datas `pb_brands`
--

INSERT INTO `pb_brands` (`id`, `member_id`, `company_id`, `type_id`, `if_commend`, `name`, `alias_name`, `picture`, `description`, `hits`, `ranks`, `letter`, `created`, `modified`) VALUES(1, -1, 0, 1, 1, 'palm', 'palm', 'sample/brand/1.jpg', '', 1, 0, 'p', unix_timestamp(now()), 0);
INSERT INTO `pb_brands` (`id`, `member_id`, `company_id`, `type_id`, `if_commend`, `name`, `alias_name`, `picture`, `description`, `hits`, `ranks`, `letter`, `created`, `modified`) VALUES(2, -1, 0, 2, 1, 'LG', 'LG', 'sample/brand/2.jpg', '', 1, 0, 'l', unix_timestamp(now()), 0);
INSERT INTO `pb_brands` (`id`, `member_id`, `company_id`, `type_id`, `if_commend`, `name`, `alias_name`, `picture`, `description`, `hits`, `ranks`, `letter`, `created`, `modified`) VALUES(3, -1, 0, 4, 0, 'Moto', 'motolola', 'sample/brand/3.jpg', '', 1, 0, 'm', unix_timestamp(now()), 0);
INSERT INTO `pb_brands` (`id`, `member_id`, `company_id`, `type_id`, `if_commend`, `name`, `alias_name`, `picture`, `description`, `hits`, `ranks`, `letter`, `created`, `modified`) VALUES(4, -1, 1, 4, 1, 'Nokia', 'nokia', 'sample/brand/4.jpg', '', 1, 0, 'n', unix_timestamp(now()), 0);
INSERT INTO `pb_brands` (`id`, `member_id`, `company_id`, `type_id`, `if_commend`, `name`, `alias_name`, `picture`, `description`, `hits`, `ranks`, `letter`, `created`, `modified`) VALUES(13, 1, 1, 4, 1, 'Philips', 'philips', 'sample/brand/5.jpg', '', 0, 0, 'f', unix_timestamp(now()), 0);
INSERT INTO `pb_brands` (`id`, `member_id`, `company_id`, `type_id`, `if_commend`, `name`, `alias_name`, `picture`, `description`, `hits`, `ranks`, `letter`, `created`, `modified`) VALUES(14, -1, 1, 4, 0, 'Samsung', 'samsung', 'sample/brand/6.jpg', '', 0, 0, 's', unix_timestamp(now()), 0);
INSERT INTO `pb_brands` (`id`, `member_id`, `company_id`, `type_id`, `if_commend`, `name`, `alias_name`, `picture`, `description`, `hits`, `ranks`, `letter`, `created`, `modified`) VALUES(7, -1, 1, 4, 0, 'Panasonic', 'panasonic', 'sample/brand/7.jpg', '', 0, 0, 's', unix_timestamp(now()), 0);
INSERT INTO `pb_brands` (`id`, `member_id`, `company_id`, `type_id`, `if_commend`, `name`, `alias_name`, `picture`, `description`, `hits`, `ranks`, `letter`, `created`, `modified`) VALUES(8, -1, 1, 4, 0, 'Sonic', 'sony', 'sample/brand/8.jpg', '', 0, 0, 's', unix_timestamp(now()), 0);
INSERT INTO `pb_brands` (`id`, `member_id`, `company_id`, `type_id`, `if_commend`, `name`, `alias_name`, `picture`, `description`, `hits`, `ranks`, `letter`, `created`, `modified`) VALUES(9, -1, 1, 3, 0, 'Semens', 'simens', 'sample/brand/9.jpg', '', 0, 0, 'x', unix_timestamp(now()), 0);
INSERT INTO `pb_brands` (`id`, `member_id`, `company_id`, `type_id`, `if_commend`, `name`, `alias_name`, `picture`, `description`, `hits`, `ranks`, `letter`, `created`, `modified`) VALUES(10, 1, 1, 2, 0, 'Nike', 'alcatel', 'sample/brand/10.jpg', 'asdf', 0, 0, 'a', unix_timestamp(now()), 0);
INSERT INTO `pb_brands` (`id`, `member_id`, `company_id`, `type_id`, `if_commend`, `name`, `alias_name`, `picture`, `description`, `hits`, `ranks`, `letter`, `created`, `modified`) VALUES(11, -1, 1, 0, 0, 'Adidas', 'Adidas', 'sample/brand/11.jpg', '', 0, 0, '', 0, 0);
INSERT INTO `pb_brands` (`id`, `member_id`, `company_id`, `type_id`, `if_commend`, `name`, `alias_name`, `picture`, `description`, `hits`, `ranks`, `letter`, `created`, `modified`) VALUES(12, -1, 1, 0, 0, 'Suntory', '', 'sample/brand/12.jpg', '', 0, 0, '', 0, 0);
INSERT INTO `pb_brands` (`id`, `member_id`, `company_id`, `type_id`, `if_commend`, `name`, `alias_name`, `picture`, `description`, `hits`, `ranks`, `letter`, `created`, `modified`) VALUES(5, -1, 1, 0, 0, 'China Mobile', '', 'sample/brand/13.jpg', '', 0, 0, '', 0, 0);
INSERT INTO `pb_brands` (`id`, `member_id`, `company_id`, `type_id`, `if_commend`, `name`, `alias_name`, `picture`, `description`, `hits`, `ranks`, `letter`, `created`, `modified`) VALUES(6, -1, 1, 0, 0, 'CNNIC', '', 'sample/brand/14.jpg', '', 0, 0, '', 0, 0);

--
-- Table Datas `pb_brandtypes`
--

INSERT INTO `pb_brandtypes` (`id`, `parent_id`, `level`, `name`, `display_order`) VALUES(1, 0, 1, 'Regional', 0);
INSERT INTO `pb_brandtypes` (`id`, `parent_id`, `level`, `name`, `display_order`) VALUES(2, 0, 1, 'Domestic', 0);
INSERT INTO `pb_brandtypes` (`id`, `parent_id`, `level`, `name`, `display_order`) VALUES(3, 0, 1, 'International', 0);
INSERT INTO `pb_brandtypes` (`id`, `parent_id`, `level`, `name`, `display_order`) VALUES(4, 0, 1, 'Manufacturer', 0);
INSERT INTO `pb_brandtypes` (`id`, `parent_id`, `level`, `name`, `display_order`) VALUES(5, 0, 1, 'Operators', 0);
INSERT INTO `pb_brandtypes` (`id`, `parent_id`, `level`, `name`, `display_order`) VALUES(6, 0, 1, 'Own', 0);
INSERT INTO `pb_brandtypes` (`id`, `parent_id`, `level`, `name`, `display_order`) VALUES(7, 0, 1, 'Foreign', 0);
INSERT INTO `pb_brandtypes` (`id`, `parent_id`, `level`, `name`, `display_order`) VALUES(8, 0, 1, 'Grafting', 0);
INSERT INTO `pb_brandtypes` (`id`, `parent_id`, `level`, `name`, `display_order`) VALUES(9, 5, 2, 'Home appliances', 0);
INSERT INTO `pb_brandtypes` (`id`, `parent_id`, `level`, `name`, `display_order`) VALUES(10, 5, 2, 'Food beverage', 0);
INSERT INTO `pb_brandtypes` (`id`, `parent_id`, `level`, `name`, `display_order`) VALUES(11, 5, 2, 'Household chemicals', 0);
INSERT INTO `pb_brandtypes` (`id`, `parent_id`, `level`, `name`, `display_order`) VALUES(12, 5, 2, 'Services', 0);

--
-- Table Datas `pb_dicts`
--

INSERT INTO `pb_dicts` (`id`, `dicttype_id`, `extend_dicttypeid`, `word`, `word_name`, `digest`, `content`, `picture`, `refer`, `hits`, `closed`, `if_commend`, `created`, `modified`) VALUES(1, 7, '', 'Red Apple phenomenon', 'Cost and Freight', '', '', '', '', 7, 0, 0, unix_timestamp(now()), 0);
INSERT INTO `pb_dicts` (`id`, `dicttype_id`, `extend_dicttypeid`, `word`, `word_name`, `digest`, `content`, `picture`, `refer`, `hits`, `closed`, `if_commend`, `created`, `modified`) VALUES(2, 1, '', 'Toucan tongue is a cluster', '', '', '', '', '', 4, 0, 0, unix_timestamp(now()), 0);

--
-- Table Datas `pb_dicttypes`
--

INSERT INTO `pb_dicttypes` (`id`, `name`, `parent_id`, `display_order`) VALUES(1, 'Nature', 0, 0);
INSERT INTO `pb_dicttypes` (`id`, `name`, `parent_id`, `display_order`) VALUES(2, 'Culture', 0, 0);
INSERT INTO `pb_dicttypes` (`id`, `name`, `parent_id`, `display_order`) VALUES(3, 'People', 0, 0);
INSERT INTO `pb_dicttypes` (`id`, `name`, `parent_id`, `display_order`) VALUES(4, 'History', 0, 0);
INSERT INTO `pb_dicttypes` (`id`, `name`, `parent_id`, `display_order`) VALUES(5, 'Life', 0, 0);
INSERT INTO `pb_dicttypes` (`id`, `name`, `parent_id`, `display_order`) VALUES(6, 'Social', 0, 0);
INSERT INTO `pb_dicttypes` (`id`, `name`, `parent_id`, `display_order`) VALUES(7, 'Arts', 1, 0);
INSERT INTO `pb_dicttypes` (`id`, `name`, `parent_id`, `display_order`) VALUES(8, 'Economy', 1, 0);
INSERT INTO `pb_dicttypes` (`id`, `name`, `parent_id`, `display_order`) VALUES(9, 'Science', 1, 0);
INSERT INTO `pb_dicttypes` (`id`, `name`, `parent_id`, `display_order`) VALUES(10, 'Sports', 1, 0);
INSERT INTO `pb_dicttypes` (`id`, `name`, `parent_id`, `display_order`) VALUES(11, 'Technology', 1, 0);
INSERT INTO `pb_dicttypes` (`id`, `name`, `parent_id`, `display_order`) VALUES(12, 'Geography', 1, 0);
INSERT INTO `pb_dicttypes` (`id`, `name`, `parent_id`, `display_order`) VALUES(13, 'Hot', 1, 0);
INSERT INTO `pb_dicttypes` (`id`, `name`, `parent_id`, `display_order`) VALUES(14, 'Other', 1, 0);

--
-- Table Datas `pb_expos`
--

INSERT INTO `pb_expos` (`id`, `expotype_id`, `name`, `description`, `begin_time`, `end_time`, `industry_ids`, `industry_id`, `area_id`, `address`, `stadium_name`, `refresh_method`, `scope`, `hosts`, `organisers`, `co_organisers`, `sponsors`, `contacts`, `important_notice`, `picture`, `if_commend`, `status`, `hits`, `created`, `modified`) VALUES(1, 1, '2011 Hong Kong International ICT Expo (ICT)', '', 1293936472, 1296528472, '0', 0, 0, '', '', '', '', '', '', '', '', '', '', '', 0, 1, 1, unix_timestamp(now()), 0);
INSERT INTO `pb_expos` (`id`, `expotype_id`, `name`, `description`, `begin_time`, `end_time`, `industry_ids`, `industry_id`, `area_id`, `address`, `stadium_name`, `refresh_method`, `scope`, `hosts`, `organisers`, `co_organisers`, `sponsors`, `contacts`, `important_notice`, `picture`, `if_commend`, `status`, `hits`, `created`, `modified`) VALUES(2, 1, '2011 Hong Kong Electronics Fair Spring', '', 1293936472, 1296528472, '0', 0, 0, '', '', '', '', '', '', '', '', '', '', '', 0, 1, 1, unix_timestamp(now()), 0);
INSERT INTO `pb_expos` (`id`, `expotype_id`, `name`, `description`, `begin_time`, `end_time`, `industry_ids`, `industry_id`, `area_id`, `address`, `stadium_name`, `refresh_method`, `scope`, `hosts`, `organisers`, `co_organisers`, `sponsors`, `contacts`, `important_notice`, `picture`, `if_commend`, `status`, `hits`, `created`, `modified`) VALUES(3, 1, '2011 Dubai Wood, furniture accessories and Woodworking Machinery Exhibition', '', 1293936472, 1296528472, '0', 0, 0, '', '', '', '', '', '', '', '', '', '', '', 0, 1, 1, unix_timestamp(now()), 0);
INSERT INTO `pb_expos` (`id`, `expotype_id`, `name`, `description`, `begin_time`, `end_time`, `industry_ids`, `industry_id`, `area_id`, `address`, `stadium_name`, `refresh_method`, `scope`, `hosts`, `organisers`, `co_organisers`, `sponsors`, `contacts`, `important_notice`, `picture`, `if_commend`, `status`, `hits`, `created`, `modified`) VALUES(4, 1, '2011 Vietnam International Leather, Leather Chemical and Equipment Exhibition', '', 1293936472, 1296528472, '0', 0, 0, '', '', '', '', '', '', '', '', '', '', '', 0, 1, 1, unix_timestamp(now()), 0);
INSERT INTO `pb_expos` (`id`, `expotype_id`, `name`, `description`, `begin_time`, `end_time`, `industry_ids`, `industry_id`, `area_id`, `address`, `stadium_name`, `refresh_method`, `scope`, `hosts`, `organisers`, `co_organisers`, `sponsors`, `contacts`, `important_notice`, `picture`, `if_commend`, `status`, `hits`, `created`, `modified`) VALUES(5, 2, 'Dubai 2011 exhibition and entertainment facilities, theme park development', '', 1293936472, 1296528472, '0', 0, 0, '', '', '', '', '', '', '', '', '', '', '', 0, 1, 1, unix_timestamp(now()), 0);
INSERT INTO `pb_expos` (`id`, `expotype_id`, `name`, `description`, `begin_time`, `end_time`, `industry_ids`, `industry_id`, `area_id`, `address`, `stadium_name`, `refresh_method`, `scope`, `hosts`, `organisers`, `co_organisers`, `sponsors`, `contacts`, `important_notice`, `picture`, `if_commend`, `status`, `hits`, `created`, `modified`) VALUES(6, 2, '2011 South African Medical Fair AFRICA HEALTH', '', 1293936472, 1296528472, '0', 0, 0, '', '', '', '', '', '', '', '', '', '', '', 0, 1, 1, unix_timestamp(now()), 0);
INSERT INTO `pb_expos` (`id`, `expotype_id`, `name`, `description`, `begin_time`, `end_time`, `industry_ids`, `industry_id`, `area_id`, `address`, `stadium_name`, `refresh_method`, `scope`, `hosts`, `organisers`, `co_organisers`, `sponsors`, `contacts`, `important_notice`, `picture`, `if_commend`, `status`, `hits`, `created`, `modified`) VALUES(7, 1, 'Russia 2011 Exhibition of professional cosmetics and beauty equipment', 'Russia 2011 Exhibition of professional cosmetics and beauty equipment', 1293936472, 1296528472, '0', 0, 0, '', '', '', '', '', '', '', '', '', '', '', 0, 1, 1, unix_timestamp(now()), 0);
INSERT INTO `pb_expos` (`id`, `expotype_id`, `name`, `description`, `begin_time`, `end_time`, `industry_ids`, `industry_id`, `area_id`, `address`, `stadium_name`, `refresh_method`, `scope`, `hosts`, `organisers`, `co_organisers`, `sponsors`, `contacts`, `important_notice`, `picture`, `if_commend`, `status`, `hits`, `created`, `modified`) VALUES(8, 2, '2011 Seoul International Book Fair SIBF', '2011 Seoul International Book Fair SIBF', 1293936472, 1296528472, '0', 0, 0, '', '', '', '', '', '', '', '', NULL, NULL, '', 0, 1, 1, unix_timestamp(now()), 0);
INSERT INTO `pb_expos` (`id`, `expotype_id`, `name`, `description`, `begin_time`, `end_time`, `industry_ids`, `industry_id`, `area_id`, `address`, `stadium_name`, `refresh_method`, `scope`, `hosts`, `organisers`, `co_organisers`, `sponsors`, `contacts`, `important_notice`, `picture`, `if_commend`, `status`, `hits`, `created`, `modified`) VALUES(9, 1, 'Egyptian International Packaging Exhibition 2011', 'Egyptian International Packaging Exhibition 2011', 1293936472, 1296528472, '0', 0, 0, '', '', '', '', '', '', '', '', NULL, NULL, '', 0, 1, 1, unix_timestamp(now()), 0);
INSERT INTO `pb_expos` (`id`, `expotype_id`, `name`, `description`, `begin_time`, `end_time`, `industry_ids`, `industry_id`, `area_id`, `address`, `stadium_name`, `refresh_method`, `scope`, `hosts`, `organisers`, `co_organisers`, `sponsors`, `contacts`, `important_notice`, `picture`, `if_commend`, `status`, `hits`, `created`, `modified`) VALUES(10, 2, '2011 China (Beijing) International Tea and Tea Expo', '2011 China (Beijing) International Tea and Tea Expo', 1293936472, 1296528472, '0', 0, 0, '', '', '', '', '', '', '', '', NULL, NULL, '', 0, 1, 1, unix_timestamp(now()), 0);
INSERT INTO `pb_expos` (`id`, `expotype_id`, `name`, `description`, `begin_time`, `end_time`, `industry_ids`, `industry_id`, `area_id`, `address`, `stadium_name`, `refresh_method`, `scope`, `hosts`, `organisers`, `co_organisers`, `sponsors`, `contacts`, `important_notice`, `picture`, `if_commend`, `status`, `hits`, `created`, `modified`) VALUES(12, 1, 'Hanoi, Vietnam 2011 International Security Technology & Equipment Exhibition', 'Hanoi, Vietnam 2011 International Security Technology & Equipment Exhibition', 1293936472, 1296528472, '0', 0, 0, '', '', '', '', '', '', '', '', NULL, NULL, 'sample/other/fair-1.jpg', 1, 1, 1, unix_timestamp(now()), 0);

--
-- Table Datas `pb_expotypes`
--

INSERT INTO `pb_expotypes` (`id`, `name`, `created`, `modified`) VALUES(1, 'Domestic', unix_timestamp(now()), 0);
INSERT INTO `pb_expotypes` (`id`, `name`, `created`, `modified`) VALUES(2, 'International', unix_timestamp(now()), 0);

--
-- Table Datas `pb_helps`
--

INSERT INTO `pb_helps` (`id`, `helptype_id`, `title`, `content`, `highlight`, `created`, `modified`) VALUES(1, 1, 'Login step', '', 0, 0, 0);
INSERT INTO `pb_helps` (`id`, `helptype_id`, `title`, `content`, `highlight`, `created`, `modified`) VALUES(2, 2, 'Register step', '', 0, 0, 0);

--
-- Table Datas `pb_helptypes`
--

INSERT INTO `pb_helptypes` (`id`, `title`, `description`, `parent_id`, `level`, `display_order`, `created`, `modified`) VALUES(1, 'Site Help', '', 0, 0, 0, 0, 0);
INSERT INTO `pb_helptypes` (`id`, `title`, `description`, `parent_id`, `level`, `display_order`, `created`, `modified`) VALUES(2, 'Outside the station to help', '', 0, 0, 0, 0, 0);

--
-- Table Datas `pb_newses`
--

INSERT INTO `pb_newses` (`id`, `type_id`, `type`, `industry_id`, `area_id`, `title`, `content`, `source`, `picture`, `if_focus`, `if_commend`, `highlight`, `clicked`, `status`, `flag`, `require_membertype`, `tag_ids`, `created`, `create_time`, `modified`) VALUES(14, 2, 0, 0, 0, 'Tear gas could be used to tame drunk drivers', '', '', 'sample/news/1.jpg', 0, 0, 0, 123, 1, 0, '0', '', unix_timestamp(now()), '2011-01-02 02:47:28', 0);
INSERT INTO `pb_newses` (`id`, `type_id`, `type`, `industry_id`, `area_id`, `title`, `content`, `source`, `picture`, `if_focus`, `if_commend`, `highlight`, `clicked`, `status`, `flag`, `require_membertype`, `tag_ids`, `created`, `create_time`, `modified`) VALUES(15, 2, 0, 0, 0, 'China eyes fair treatment for its firms in US', '', '', 'sample/news/2.jpg', 0, 0, 0, 123, 1, 0, '0', '', unix_timestamp(now()), '2011-01-02 02:47:28', 0);
INSERT INTO `pb_newses` (`id`, `type_id`, `type`, `industry_id`, `area_id`, `title`, `content`, `source`, `picture`, `if_focus`, `if_commend`, `highlight`, `clicked`, `status`, `flag`, `require_membertype`, `tag_ids`, `created`, `create_time`, `modified`) VALUES(3, 2, 0, 0, 0, 'France expels 14 Libyan diplomats', '', '', 'sample/news/3.jpg', 0, 0, 0, 123, 1, 0, '0', '', unix_timestamp(now()), '2011-01-02 02:47:28', 0);
INSERT INTO `pb_newses` (`id`, `type_id`, `type`, `industry_id`, `area_id`, `title`, `content`, `source`, `picture`, `if_focus`, `if_commend`, `highlight`, `clicked`, `status`, `flag`, `require_membertype`, `tag_ids`, `created`, `create_time`, `modified`) VALUES(4, 2, 0, 0, 0, 'China punishes Unilever for price hike remarks', '', '', 'sample/news/4.jpg', 0, 0, 0, 123, 1, 0, '0', '', unix_timestamp(now()), '2011-01-02 02:47:28', 0);
INSERT INTO `pb_newses` (`id`, `type_id`, `type`, `industry_id`, `area_id`, `title`, `content`, `source`, `picture`, `if_focus`, `if_commend`, `highlight`, `clicked`, `status`, `flag`, `require_membertype`, `tag_ids`, `created`, `create_time`, `modified`) VALUES(5, 2, 0, 0, 0, 'Pakistan warns US not to stage more raids', '', '', 'sample/news/5.jpg', 0, 0, 0, 123, 1, 0, '0', '', unix_timestamp(now()), '2011-01-02 02:47:28', 0);
INSERT INTO `pb_newses` (`id`, `type_id`, `type`, `industry_id`, `area_id`, `title`, `content`, `source`, `picture`, `if_focus`, `if_commend`, `highlight`, `clicked`, `status`, `flag`, `require_membertype`, `tag_ids`, `created`, `create_time`, `modified`) VALUES(6, 2, 0, 0, 0, 'Rise of China top news of the century', '', '', 'sample/news/6.jpg', 0, 0, 0, 123, 1, 0, '0', '', unix_timestamp(now()), '2011-01-02 02:47:28', 0);
INSERT INTO `pb_newses` (`id`, `type_id`, `type`, `industry_id`, `area_id`, `title`, `content`, `source`, `picture`, `if_focus`, `if_commend`, `highlight`, `clicked`, `status`, `flag`, `require_membertype`, `tag_ids`, `created`, `create_time`, `modified`) VALUES(7, 2, 0, 0, 0, '2 Chinese sites may make World Heritage List', '', '', 'sample/news/7.jpg', 0, 0, 0, 123668, 1, 0, '0', '', unix_timestamp(now()), '2011-01-02 02:47:28', 0);
INSERT INTO `pb_newses` (`id`, `type_id`, `type`, `industry_id`, `area_id`, `title`, `content`, `source`, `picture`, `if_focus`, `if_commend`, `highlight`, `clicked`, `status`, `flag`, `require_membertype`, `tag_ids`, `created`, `create_time`, `modified`) VALUES(8, 2, 0, 0, 0, 'US halts F-22 flights over system concerns', '', '', 'sample/news/8.jpg', 0, 0, 0, 123, 1, 0, '0', '', unix_timestamp(now()), '2011-01-02 02:47:28', 0);
INSERT INTO `pb_newses` (`id`, `type_id`, `type`, `industry_id`, `area_id`, `title`, `content`, `source`, `picture`, `if_focus`, `if_commend`, `highlight`, `clicked`, `status`, `flag`, `require_membertype`, `tag_ids`, `created`, `create_time`, `modified`) VALUES(9, 1, 0, 0, 0, 'Paralyzed gymnast files harassment report', '', '', 'sample/news/9.jpg', 0, 0, 0, 123, 1, 0, '0', '', unix_timestamp(now()), '2011-01-02 02:47:28', 0);
INSERT INTO `pb_newses` (`id`, `type_id`, `type`, `industry_id`, `area_id`, `title`, `content`, `source`, `picture`, `if_focus`, `if_commend`, `highlight`, `clicked`, `status`, `flag`, `require_membertype`, `tag_ids`, `created`, `create_time`, `modified`) VALUES(10, 1, 0, 0, 0, 'terfall festival flows in Guizhou', '', '', 'sample/news/10.jpg', 0, 0, 0, 123, 1, 0, '0', '', unix_timestamp(now()), '2011-01-02 02:47:28', 0);
INSERT INTO `pb_newses` (`id`, `type_id`, `type`, `industry_id`, `area_id`, `title`, `content`, `source`, `picture`, `if_focus`, `if_commend`, `highlight`, `clicked`, `status`, `flag`, `require_membertype`, `tag_ids`, `created`, `create_time`, `modified`) VALUES(11, 1, 0, 0, 0, 'Red Cross pours 18.7b yuan into Sichuan', '', '', 'sample/news/11.jpg', 0, 0, 0, 123, 1, 0, '0', '', unix_timestamp(now()), '2011-01-02 02:47:28', 0);
INSERT INTO `pb_newses` (`id`, `type_id`, `type`, `industry_id`, `area_id`, `title`, `content`, `source`, `picture`, `if_focus`, `if_commend`, `highlight`, `clicked`, `status`, `flag`, `require_membertype`, `tag_ids`, `created`, `create_time`, `modified`) VALUES(12, 1, 0, 0, 0, 'Paralyzed gymnast files harassment report', '', '', 'sample/news/12.jpg', 0, 0, 0, 123, 1, 0, '0', '', unix_timestamp(now()), '2011-01-02 02:47:28', 0);
INSERT INTO `pb_newses` (`id`, `type_id`, `type`, `industry_id`, `area_id`, `title`, `content`, `source`, `picture`, `if_focus`, `if_commend`, `highlight`, `clicked`, `status`, `flag`, `require_membertype`, `tag_ids`, `created`, `create_time`, `modified`) VALUES(2, 1, 0, 0, 0, 'Officials in Chongqing become part-time farmers', NULL, '', 'sample/news/14.jpg', 0, 1, 0, 123, 1, 0, '0', '', unix_timestamp(now()), '2011-01-02 02:47:28', 0);
INSERT INTO `pb_newses` (`id`, `type_id`, `type`, `industry_id`, `area_id`, `title`, `content`, `source`, `picture`, `if_focus`, `if_commend`, `highlight`, `clicked`, `status`, `flag`, `require_membertype`, `tag_ids`, `created`, `create_time`, `modified`) VALUES(1, 1, 0, 0, 0, 'Expert: AIDS-like disease is not just phobia', '', '', 'sample/news/14.jpg', 0, 1, 0, 123, 1, 0, '0', '', unix_timestamp(now()), '2011-01-02 02:47:28', 0);
INSERT INTO `pb_newses` (`id`, `type_id`, `type`, `industry_id`, `area_id`, `title`, `content`, `source`, `picture`, `if_focus`, `if_commend`, `highlight`, `clicked`, `status`, `flag`, `require_membertype`, `tag_ids`, `created`, `create_time`, `modified`) VALUES(13, 5, 0, 0, 0, 'The Week: A weekly round-up of fun, funky news', '', '', 'sample/news/13.jpg', 0, 0, 0, 123, 1, 0, '0', '', unix_timestamp(now()), '2011-01-02 02:47:28', 0);
--
-- Table Datas `pb_productcategories`
--

INSERT INTO `pb_productcategories` (`id`, `parent_id`, `level`, `name`, `display_order`) VALUES(1, 0, 1, 'ELECTRONIC ELEMENTS', 0);
INSERT INTO `pb_productcategories` (`id`, `parent_id`, `level`, `name`, `display_order`) VALUES(2, 0, 1, 'Beauty Care', 0);
INSERT INTO `pb_productcategories` (`id`, `parent_id`, `level`, `name`, `display_order`) VALUES(3, 0, 1, 'Medical Care', 0);
INSERT INTO `pb_productcategories` (`id`, `parent_id`, `level`, `name`, `display_order`) VALUES(4, 0, 1, 'Instrumentation ', 0);
INSERT INTO `pb_productcategories` (`id`, `parent_id`, `level`, `name`, `display_order`) VALUES(5, 0, 1, 'Household items ', 0);
INSERT INTO `pb_productcategories` (`id`, `parent_id`, `level`, `name`, `display_order`) VALUES(6, 0, 1, 'Gifts Toys', 0);
INSERT INTO `pb_productcategories` (`id`, `parent_id`, `level`, `name`, `display_order`) VALUES(7, 0, 1, 'Auto Parts', 0);
INSERT INTO `pb_productcategories` (`id`, `parent_id`, `level`, `name`, `display_order`) VALUES(8, 0, 1, 'Iron and steel metallurgy', 0);
INSERT INTO `pb_productcategories` (`id`, `parent_id`, `level`, `name`, `display_order`) VALUES(9, 0, 1, 'Packaging', 0);
INSERT INTO `pb_productcategories` (`id`, `parent_id`, `level`, `name`, `display_order`) VALUES(10, 0, 1, 'Computer software', 0);
INSERT INTO `pb_productcategories` (`id`, `parent_id`, `level`, `name`, `display_order`) VALUES(11, 1, 2, 'Insurance components', 0);
INSERT INTO `pb_productcategories` (`id`, `parent_id`, `level`, `name`, `display_order`) VALUES(12, 1, 2, 'Semiconductor materials', 0);
INSERT INTO `pb_productcategories` (`id`, `parent_id`, `level`, `name`, `display_order`) VALUES(13, 1, 2, 'Other electronic materials', 0);
INSERT INTO `pb_productcategories` (`id`, `parent_id`, `level`, `name`, `display_order`) VALUES(14, 1, 2, 'Capacitors', 0);
INSERT INTO `pb_productcategories` (`id`, `parent_id`, `level`, `name`, `display_order`) VALUES(15, 1, 2, 'Electronic Components', 0);

--
-- Table Datas `pb_newstypes`
--

INSERT INTO `pb_newstypes` (`id`, `name`, `level_id`, `status`, `parent_id`, `created`) VALUES(1, 'Multimedia', 1, 1, 0, unix_timestamp(now()));
INSERT INTO `pb_newstypes` (`id`, `name`, `level_id`, `status`, `parent_id`, `created`) VALUES(2, 'Chinese Media', 1, 1, 0, unix_timestamp(now()));
INSERT INTO `pb_newstypes` (`id`, `name`, `level_id`, `status`, `parent_id`, `created`) VALUES(3, 'Business', 1, 1, 0, unix_timestamp(now()));
INSERT INTO `pb_newstypes` (`id`, `name`, `level_id`, `status`, `parent_id`, `created`) VALUES(4, 'Regional', 1, 1, 0, unix_timestamp(now()));
INSERT INTO `pb_newstypes` (`id`, `name`, `level_id`, `status`, `parent_id`, `created`) VALUES(5, 'Opnion', 1, 1, 0, unix_timestamp(now()));
INSERT INTO `pb_newstypes` (`id`, `name`, `level_id`, `status`, `parent_id`, `created`) VALUES(6, 'Entertainment', 1, 1, 0, unix_timestamp(now()));
INSERT INTO `pb_newstypes` (`id`, `name`, `level_id`, `status`, `parent_id`, `created`) VALUES(7, 'Metro Beijing', 1, 1, 0, unix_timestamp(now()));
INSERT INTO `pb_newstypes` (`id`, `name`, `level_id`, `status`, `parent_id`, `created`) VALUES(8, 'Life', 1, 1, 0, unix_timestamp(now()));

--
-- Table Datas `pb_quotes`
--

INSERT INTO `pb_quotes` (`id`, `product_id`, `market_id`, `type_id`, `title`, `content`, `area_id`, `area_id1`, `area_id2`, `area_id3`, `max_price`, `min_price`, `units`, `currency`, `trend_data`, `hits`, `created`, `modified`) VALUES(1, 1, -1, 0, 'Today, the International Cotton Indices(SM)', '', 0, 0, 0, 0, 100.00, 90.00, 1, 1, '', 4, unix_timestamp(now()), 0);
INSERT INTO `pb_quotes` (`id`, `product_id`, `market_id`, `type_id`, `title`, `content`, `area_id`, `area_id1`, `area_id2`, `area_id3`, `max_price`, `min_price`, `units`, `currency`, `trend_data`, `hits`, `created`, `modified`) VALUES(2, 1, -1, 0, 'A national cotton prices index A today', '', 0, 0, 0, 0, 150.00, 100.00, 1, 1, '', 1, unix_timestamp(now()), 0);
INSERT INTO `pb_quotes` (`id`, `product_id`, `market_id`, `type_id`, `title`, `content`, `area_id`, `area_id1`, `area_id2`, `area_id3`, `max_price`, `min_price`, `units`, `currency`, `trend_data`, `hits`, `created`, `modified`) VALUES(3, 1, -1, 0, 'A national cotton prices index B today', '', 0, 0, 0, 0, 210.00, 120.00, 1, 1, '', 1, unix_timestamp(now()), 0);
INSERT INTO `pb_quotes` (`id`, `product_id`, `market_id`, `type_id`, `title`, `content`, `area_id`, `area_id1`, `area_id2`, `area_id3`, `max_price`, `min_price`, `units`, `currency`, `trend_data`, `hits`, `created`, `modified`) VALUES(4, 1, -1, 0, 'Chinese cotton purchase price index today', '', 0, 0, 0, 0, 230.00, 200.00, 1, 1, '', 4, unix_timestamp(now()), 0);
INSERT INTO `pb_quotes` (`id`, `product_id`, `market_id`, `type_id`, `title`, `content`, `area_id`, `area_id1`, `area_id2`, `area_id3`, `max_price`, `min_price`, `units`, `currency`, `trend_data`, `hits`, `created`, `modified`) VALUES(10, -1, -1, 0, 'Today, parts of the Market Price of soybean meal price', '', 0, 0, 0, 0, 0.00, 0.00, 1, 1, 'a:2:{s:1:"x";a:2:{i:0;s:1:"1";i:1;s:1:"2";}s:1:"y";a:2:{i:0;s:3:"150";i:1;s:3:"200";}}', 24, unix_timestamp(now()), unix_timestamp(now()));

--
-- Table Datas `pb_standards`
--

INSERT INTO `pb_standards` (`id`, `attachment_id`, `type_id`, `title`, `source`, `digest`, `content`, `publish_time`, `force_time`, `clicked`, `created`, `modified`) VALUES(6, 0, 2, 'Has China's nuke warheads reach 3000 yet? Its needed ASAP.', '', '', '', 0, 0, 1, unix_timestamp(now()), 0);
INSERT INTO `pb_standards` (`id`, `attachment_id`, `type_id`, `title`, `source`, `digest`, `content`, `publish_time`, `force_time`, `clicked`, `created`, `modified`) VALUES(7, 0, 2, 'Help revolutionaries get rid of Gadafi.', '', '', '', 0, 0, 1, unix_timestamp(now()), 0);

--
-- Table Datas `pb_standardtypes`
--

INSERT INTO `pb_standardtypes` (`id`, `name`, `display_order`) VALUES(1, 'Administrative regulations', 0);
INSERT INTO `pb_standardtypes` (`id`, `name`, `display_order`) VALUES(2, 'Safety Standards', 0);

INSERT INTO `pb_spreads` (`member_id`, `keyword_name`, `title`, `content`, `target_url`, `hits`, `status`, `expiration`, `display_order`, `created`) VALUES
(1, 'Inc', 'Beijing Ualink E-Commerce Inc.', 'Although solid Sino-US economic and trade relations do not automatically mean good political ties, they serve as a buffer to serious clashes between the two countries', 'http://www.phpb2b.com', 1, 1, unix_timestamp(now())+2592000, 0, unix_timestamp(now()));