-- 
-- Export data in the table `pb_areatypes`
-- 

INSERT INTO `pb_areatypes` VALUES (1, 'North China');
INSERT INTO `pb_areatypes` VALUES (2, 'Northeast');
INSERT INTO `pb_areatypes` VALUES (3, 'East China');
INSERT INTO `pb_areatypes` VALUES (4, 'Central China');
INSERT INTO `pb_areatypes` VALUES (5, 'Southwest');
INSERT INTO `pb_areatypes` VALUES (6, 'Northwest');
INSERT INTO `pb_areatypes` VALUES (7, 'South China');
INSERT INTO `pb_areatypes` VALUES (8, 'SAR');

-- 
-- Export data in the table `pb_areas`
-- 

INSERT INTO `pb_areas` (`id`, `attachment_id`, `areatype_id`, `child_ids`, `top_parentid`, `level`, `name`, `url`, `alias_name`, `highlight`, `parent_id`, `display_order`, `description`, `available`, `created`, `modified`) VALUES 
(1, 0, 0, NULL, 0, 1, 'Australia', '', '', 0, 0, 0, NULL, 1, 0, 0),
(2, 0, 0, NULL, 0, 1, 'Indonesia', '', '', 0, 0, 0, NULL, 1, 0, 0),
(3, 0, 0, NULL, 0, 1, 'New Zealand', '', '', 0, 0, 0, NULL, 1, 0, 0),
(4, 0, 0, NULL, 0, 1, 'South Korea', '', '', 0, 0, 0, NULL, 1, 0, 0),
(5, 0, 0, NULL, 0, 1, 'China', '', '', 0, 0, 0, NULL, 1, 0, 0),
(6, 0, 0, NULL, 0, 1, 'Iran', '', '', 0, 0, 0, NULL, 1, 0, 0),
(7, 0, 0, NULL, 0, 1, 'Pakistan', '', '', 0, 0, 0, NULL, 1, 0, 0),
(8, 0, 0, NULL, 0, 1, 'Taiwan', '', '', 0, 0, 0, NULL, 1, 0, 0),
(9, 0, 0, NULL, 0, 1, 'Hong Kong', '', '', 0, 0, 0, NULL, 1, 0, 0),
(10, 0, 0, NULL, 0, 1, 'Japan', '', '', 0, 0, 0, NULL, 1, 0, 0),
(11, 0, 0, NULL, 0, 1, 'Philippines', '', '', 0, 0, 0, NULL, 1, 0, 0),
(12, 0, 0, NULL, 0, 1, 'Thailand', '', '', 0, 0, 0, NULL, 1, 0, 0),
(13, 0, 0, NULL, 0, 1, 'India', '', '', 0, 0, 0, NULL, 1, 0, 0),
(14, 0, 0, NULL, 0, 1, 'Malaysia', '', '', 0, 0, 0, NULL, 1, 0, 0),
(15, 0, 0, NULL, 0, 1, 'Singapore', '', '', 0, 0, 0, NULL, 1, 0, 0),
(16, 0, 0, NULL, 0, 1, 'Vietnam', '', '', 0, 0, 0, NULL, 1, 0, 0),
(17, 0, 0, NULL, 0, 1, 'Argentina', '', '', 0, 0, 0, NULL, 1, 0, 0),
(18, 0, 0, NULL, 0, 1, 'Canada', '', '', 0, 0, 0, NULL, 1, 0, 0),
(19, 0, 0, NULL, 0, 1, 'Colombia', '', '', 0, 0, 0, NULL, 1, 0, 0),
(20, 0, 0, NULL, 0, 1, 'Peru', '', '', 0, 0, 0, NULL, 1, 0, 0),
(21, 0, 0, NULL, 0, 1, 'Brazil', '', '', 0, 0, 0, NULL, 1, 0, 0),
(22, 0, 0, NULL, 0, 1, 'Chile', '', '', 0, 0, 0, NULL, 1, 0, 0),
(23, 0, 0, NULL, 0, 1, 'Mexico', '', '', 0, 0, 0, NULL, 1, 0, 0),
(24, 0, 0, NULL, 0, 1, 'United States', '', '', 0, 0, 0, NULL, 1, 0, 0),
(25, 0, 0, NULL, 0, 1, 'Belgium', '', '', 0, 0, 0, NULL, 1, 0, 0),
(26, 0, 0, NULL, 0, 1, 'Germany', '', '', 0, 0, 0, NULL, 1, 0, 0),
(27, 0, 0, NULL, 0, 1, 'Poland', '', '', 0, 0, 0, NULL, 1, 0, 0),
(28, 0, 0, NULL, 0, 1, 'Sweden', '', '', 0, 0, 0, NULL, 1, 0, 0),
(29, 0, 0, NULL, 0, 1, 'Bulgaria', '', '', 0, 0, 0, NULL, 1, 0, 0),
(30, 0, 0, NULL, 0, 1, 'Greece', '', '', 0, 0, 0, NULL, 1, 0, 0),
(31, 0, 0, NULL, 0, 1, 'Portugal', '', '', 0, 0, 0, NULL, 1, 0, 0),
(32, 0, 0, NULL, 0, 1, 'Switzerland', '', '', 0, 0, 0, NULL, 1, 0, 0),
(33, 0, 0, NULL, 0, 1, 'Czech Republic', '', '', 0, 0, 0, NULL, 1, 0, 0),
(34, 0, 0, NULL, 0, 1, 'Iceland', '', '', 0, 0, 0, NULL, 1, 0, 0),
(35, 0, 0, NULL, 0, 1, 'Romania', '', '', 0, 0, 0, NULL, 1, 0, 0),
(36, 0, 0, NULL, 0, 1, 'Turkey', '', '', 0, 0, 0, NULL, 1, 0, 0),
(37, 0, 0, NULL, 0, 1, 'Denmark', '', '', 0, 0, 0, NULL, 1, 0, 0),
(38, 0, 0, NULL, 0, 1, 'Italy', '', '', 0, 0, 0, NULL, 1, 0, 0),
(39, 0, 0, NULL, 0, 1, 'Russia', '', '', 0, 0, 0, NULL, 1, 0, 0),
(40, 0, 0, NULL, 0, 1, 'Ukraine', '', '', 0, 0, 0, NULL, 1, 0, 0),
(41, 0, 0, NULL, 0, 1, 'France', '', '', 0, 0, 0, NULL, 1, 0, 0),
(42, 0, 0, NULL, 0, 1, 'Netherlands', '', '', 0, 0, 0, NULL, 1, 0, 0),
(43, 0, 0, NULL, 0, 1, 'Spain', '', '', 0, 0, 0, NULL, 1, 0, 0),
(44, 0, 0, NULL, 0, 1, 'United Kingdom', '', '', 0, 0, 0, NULL, 1, 0, 0),
(45, 0, 0, NULL, 0, 1, 'Israel', '', '', 0, 0, 0, NULL, 1, 0, 0),
(46, 0, 0, NULL, 0, 1, 'Syria', '', '', 0, 0, 0, NULL, 1, 0, 0),
(47, 0, 0, NULL, 0, 1, 'United Arab ', '', '', 0, 0, 0, NULL, 1, 0, 0),
(48, 0, 0, NULL, 0, 1, 'Emirates', '', '', 0, 0, 0, NULL, 1, 0, 0),
(49, 0, 0, NULL, 0, 1, 'Saudi Arabia', '', '', 0, 0, 0, NULL, 1, 0, 0),
(50, 0, 0, NULL, 0, 1, 'Egypt', '', '', 0, 0, 0, NULL, 1, 0, 0),
(51, 0, 0, NULL, 0, 1, 'South Africa', '', '', 0, 0, 0, NULL, 1, 0, 0);