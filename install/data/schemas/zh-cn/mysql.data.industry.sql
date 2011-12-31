-- 
-- Table Datas `pb_industrytypes`
-- 

INSERT INTO `pb_industrytypes` VALUES (1, '工业品');
INSERT INTO `pb_industrytypes` VALUES (2, '消费品');
INSERT INTO `pb_industrytypes` VALUES (3, '原材料');
INSERT INTO `pb_industrytypes` VALUES (4, '商业服务');
INSERT INTO `pb_industrytypes` VALUES (5, '其他');

-- 
-- Table Datas `pb_industries`
-- 

INSERT INTO `pb_industries` (`id`, `attachment_id`, `industrytype_id`, `child_ids`, `name`, `url`, `alias_name`, `highlight`, `parent_id`, `top_parentid`, `level`, `display_order`, `description`, `available`, `created`, `modified`) VALUES 
(1, 0, 0, NULL, '服装服饰', '', '', 0, 0, 0, 1, 0, NULL, 1, 0, 0),
(2, 0, 0, NULL, '日用百货', '', '', 0, 0, 0, 1, 0, NULL, 1, 0, 0),
(3, 0, 0, NULL, '机电设备', '', '', 0, 0, 0, 1, 0, NULL, 1, 0, 0),
(4, 0, 0, NULL, '原材料', '', '', 0, 0, 0, 1, 0, NULL, 1, 0, 0),
(5, 0, 0, NULL, '其他服务', '', '', 0, 0, 0, 1, 0, NULL, 1, 0, 0),
(6, 0, 0, NULL, '女装', '', '', 0, 1, 1, 2, 0, NULL, 1, 0, 0),
(7, 0, 0, NULL, '男装', '', '', 0, 1, 1, 2, 0, NULL, 1, 0, 0),
(8, 0, 0, NULL, '童装', '', '', 0, 1, 1, 2, 0, NULL, 1, 0, 0),
(9, 0, 0, NULL, '内衣', '', '', 0, 1, 1, 2, 0, NULL, 1, 0, 0),
(10, 0, 0, NULL, '鞋', '', '', 0, 1, 1, 2, 0, NULL, 1, 0, 0),
(11, 0, 0, NULL, '运动服', '', '', 0, 1, 1, 2, 0, NULL, 1, 0, 0),
(12, 0, 0, NULL, '纺织', '', '', 0, 1, 1, 2, 0, NULL, 1, 0, 0),
(13, 0, 0, NULL, '饰品', '', '', 0, 1, 1, 2, 0, NULL, 1, 0, 0),
(14, 0, 0, NULL, '瑞丽', '', '', 0, 6, 1, 3, 0, NULL, 1, 0, 0),
(15, 0, 0, NULL, '韩货', '', '', 0, 6, 1, 3, 0, NULL, 1, 0, 0),
(16, 0, 0, NULL, '春装', '', '', 0, 6, 1, 3, 0, NULL, 1, 0, 0),
(17, 0, 0, NULL, '外套', '', '', 0, 6, 1, 3, 0, NULL, 1, 0, 0),
(18, 0, 0, NULL, '牛仔裤', '', '', 0, 6, 1, 3, 0, NULL, 1, 0, 0),
(19, 0, 0, NULL, '商务', '', '', 0, 7, 1, 3, 0, NULL, 1, 0, 0),
(20, 0, 0, NULL, '休闲', '', '', 0, 7, 1, 3, 0, NULL, 1, 0, 0),
(21, 0, 0, NULL, '英伦', '', '', 0, 7, 1, 3, 0, NULL, 1, 0, 0),
(22, 0, 0, NULL, '外贸', '', '', 0, 7, 1, 3, 0, NULL, 1, 0, 0),
(23, 0, 0, NULL, '品牌', '', '', 0, 7, 1, 3, 0, NULL, 1, 0, 0),
(24, 0, 0, NULL, '婴儿装', '', '', 0, 8, 1, 3, 0, NULL, 1, 0, 0),
(25, 0, 0, NULL, '品牌', '', '', 0, 8, 1, 3, 0, NULL, 1, 0, 0),
(26, 0, 0, NULL, '1到3岁', '', '', 0, 8, 1, 3, 0, NULL, 1, 0, 0),
(27, 0, 0, NULL, '孕妇装', '', '', 0, 8, 1, 3, 0, NULL, 1, 0, 0),
(28, 0, 0, NULL, '文胸', '', '', 0, 9, 1, 3, 0, NULL, 1, 0, 0),
(29, 0, 0, NULL, '内裤', '', '', 0, 9, 1, 3, 0, NULL, 1, 0, 0),
(30, 0, 0, NULL, '情趣', '', '', 0, 9, 1, 3, 0, NULL, 1, 0, 0),
(31, 0, 0, NULL, '品牌', '', '', 0, 9, 1, 3, 0, NULL, 1, 0, 0),
(32, 0, 0, NULL, '套装', '', '', 0, 9, 1, 3, 0, NULL, 1, 0, 0),
(33, 0, 0, NULL, '女鞋', '', '', 0, 10, 1, 3, 0, NULL, 1, 0, 0),
(34, 0, 0, NULL, '男鞋', '', '', 0, 10, 1, 3, 0, NULL, 1, 0, 0),
(35, 0, 0, NULL, '童鞋', '', '', 0, 10, 1, 3, 0, NULL, 1, 0, 0),
(36, 0, 0, NULL, '外贸鞋', '', '', 0, 10, 1, 3, 0, NULL, 1, 0, 0),
(37, 0, 0, NULL, '品牌鞋', '', '', 0, 10, 1, 3, 0, NULL, 1, 0, 0),
(38, 0, 0, NULL, '腰带', '', '', 0, 11, 1, 3, 0, NULL, 1, 0, 0),
(39, 0, 0, NULL, '女包', '', '', 0, 11, 1, 3, 0, NULL, 1, 0, 0),
(40, 0, 0, NULL, '男包', '', '', 0, 11, 1, 3, 0, NULL, 1, 0, 0),
(41, 0, 0, NULL, '运动包', '', '', 0, 11, 1, 3, 0, NULL, 1, 0, 0),
(42, 0, 0, NULL, '衬料', '', '', 0, 12, 1, 3, 0, NULL, 1, 0, 0),
(43, 0, 0, NULL, '皮革', '', '', 0, 12, 1, 3, 0, NULL, 1, 0, 0),
(44, 0, 0, NULL, '纽扣', '', '', 0, 12, 1, 3, 0, NULL, 1, 0, 0),
(45, 0, 0, NULL, '拉链', '', '', 0, 12, 1, 3, 0, NULL, 1, 0, 0),
(46, 0, 0, NULL, '花边', '', '', 0, 12, 1, 3, 0, NULL, 1, 0, 0),
(47, 0, 0, NULL, '头饰', '', '', 0, 13, 1, 3, 0, NULL, 1, 0, 0),
(48, 0, 0, NULL, '耳饰', '', '', 0, 13, 1, 3, 0, NULL, 1, 0, 0),
(49, 0, 0, NULL, '项饰', '', '', 0, 13, 1, 3, 0, NULL, 1, 0, 0),
(50, 0, 0, NULL, '手饰', '', '', 0, 13, 1, 3, 0, NULL, 1, 0, 0),
(51, 0, 0, NULL, '韩版', '', '', 0, 13, 1, 3, 0, NULL, 1, 0, 0),
(52, 0, 0, NULL, '家居', '', '', 0, 2, 2, 2, 0, NULL, 1, 0, 0),
(53, 0, 0, NULL, '家装', '', '', 0, 2, 2, 2, 0, NULL, 1, 0, 0),
(54, 0, 0, NULL, '礼品', '', '', 0, 2, 2, 2, 0, NULL, 1, 0, 0),
(55, 0, 0, NULL, '玩具', '', '', 0, 2, 2, 2, 0, NULL, 1, 0, 0),
(56, 0, 0, NULL, '办公文教', '', '', 0, 2, 2, 2, 0, NULL, 1, 0, 0),
(57, 0, 0, NULL, '运动休闲', '', '', 0, 2, 2, 2, 0, NULL, 1, 0, 0),
(58, 0, 0, NULL, '食品', '', '', 0, 2, 2, 2, 0, NULL, 1, 0, 0),
(59, 0, 0, NULL, '家电', '', '', 0, 2, 2, 2, 0, NULL, 1, 0, 0),
(60, 0, 0, NULL, '数码', '', '', 0, 2, 2, 2, 0, NULL, 1, 0, 0),
(61, 0, 0, NULL, '通讯', '', '', 0, 2, 2, 2, 0, NULL, 1, 0, 0),
(62, 0, 0, NULL, '护肤', '', '', 0, 52, 2, 3, 0, NULL, 1, 0, 0),
(63, 0, 0, NULL, '彩妆', '', '', 0, 52, 2, 3, 0, NULL, 1, 0, 0),
(64, 0, 0, NULL, '日化', '', '', 0, 52, 2, 3, 0, NULL, 1, 0, 0),
(65, 0, 0, NULL, '母婴', '', '', 0, 52, 2, 3, 0, NULL, 1, 0, 0),
(66, 0, 0, NULL, '百货', '', '', 0, 52, 2, 3, 0, NULL, 1, 0, 0),
(67, 0, 0, NULL, '灯具', '', '', 0, 53, 2, 3, 0, NULL, 1, 0, 0),
(68, 0, 0, NULL, '家具', '', '', 0, 53, 2, 3, 0, NULL, 1, 0, 0),
(69, 0, 0, NULL, '壁纸', '', '', 0, 53, 2, 3, 0, NULL, 1, 0, 0),
(70, 0, 0, NULL, '家饰', '', '', 0, 53, 2, 3, 0, NULL, 1, 0, 0),
(71, 0, 0, NULL, '家纺', '', '', 0, 53, 2, 3, 0, NULL, 1, 0, 0),
(72, 0, 0, NULL, '十字绣', '', '', 0, 54, 2, 3, 0, NULL, 1, 0, 0),
(73, 0, 0, NULL, '新奇特', '', '', 0, 54, 2, 3, 0, NULL, 1, 0, 0),
(74, 0, 0, NULL, '居家', '', '', 0, 54, 2, 3, 0, NULL, 1, 0, 0),
(75, 0, 0, NULL, '节庆', '', '', 0, 54, 2, 3, 0, NULL, 1, 0, 0),
(76, 0, 0, NULL, '公仔', '', '', 0, 55, 2, 3, 0, NULL, 1, 0, 0),
(77, 0, 0, NULL, '积木', '', '', 0, 55, 2, 3, 0, NULL, 1, 0, 0),
(78, 0, 0, NULL, '动漫', '', '', 0, 55, 2, 3, 0, NULL, 1, 0, 0),
(79, 0, 0, NULL, '模型', '', '', 0, 55, 2, 3, 0, NULL, 1, 0, 0),
(80, 0, 0, NULL, '益智', '', '', 0, 55, 2, 3, 0, NULL, 1, 0, 0),
(81, 0, 0, NULL, '文具', '', '', 0, 56, 2, 3, 0, NULL, 1, 0, 0),
(82, 0, 0, NULL, '笔具', '', '', 0, 56, 2, 3, 0, NULL, 1, 0, 0),
(83, 0, 0, NULL, '本子', '', '', 0, 56, 2, 3, 0, NULL, 1, 0, 0),
(84, 0, 0, NULL, '韩国文具', '', '', 0, 56, 2, 3, 0, NULL, 1, 0, 0),
(85, 0, 0, NULL, '户外', '', '', 0, 57, 2, 3, 0, NULL, 1, 0, 0),
(86, 0, 0, NULL, '体育', '', '', 0, 57, 2, 3, 0, NULL, 1, 0, 0),
(87, 0, 0, NULL, '垂钓', '', '', 0, 57, 2, 3, 0, NULL, 1, 0, 0),
(88, 0, 0, NULL, '棋牌', '', '', 0, 57, 2, 3, 0, NULL, 1, 0, 0),
(89, 0, 0, NULL, '零食', '', '', 0, 58, 2, 3, 0, NULL, 1, 0, 0),
(90, 0, 0, NULL, '糖果', '', '', 0, 58, 2, 3, 0, NULL, 1, 0, 0),
(91, 0, 0, NULL, '蜜饯', '', '', 0, 58, 2, 3, 0, NULL, 1, 0, 0),
(92, 0, 0, NULL, '饮料', '', '', 0, 58, 2, 3, 0, NULL, 1, 0, 0),
(93, 0, 0, NULL, '茶叶', '', '', 0, 58, 2, 3, 0, NULL, 1, 0, 0),
(94, 0, 0, NULL, '小家电', '', '', 0, 59, 2, 3, 0, NULL, 1, 0, 0),
(95, 0, 0, NULL, '热水器', '', '', 0, 59, 2, 3, 0, NULL, 1, 0, 0),
(96, 0, 0, NULL, '洗衣机', '', '', 0, 59, 2, 3, 0, NULL, 1, 0, 0),
(97, 0, 0, NULL, '电视', '', '', 0, 59, 2, 3, 0, NULL, 1, 0, 0),
(98, 0, 0, NULL, 'MP3', '', '', 0, 60, 2, 3, 0, NULL, 1, 0, 0),
(99, 0, 0, NULL, 'U盘', '', '', 0, 60, 2, 3, 0, NULL, 1, 0, 0),
(100, 0, 0, NULL, '笔记本', '', '', 0, 60, 2, 3, 0, NULL, 1, 0, 0),
(101, 0, 0, NULL, '数码相机', '', '', 0, 60, 2, 3, 0, NULL, 1, 0, 0),
(102, 0, 0, NULL, '手机', '', '', 0, 61, 2, 3, 0, NULL, 1, 0, 0),
(103, 0, 0, NULL, '诺基亚', '', '', 0, 61, 2, 3, 0, NULL, 1, 0, 0),
(104, 0, 0, NULL, '三星', '', '', 0, 61, 2, 3, 0, NULL, 1, 0, 0),
(105, 0, 0, NULL, '索爱', '', '', 0, 61, 2, 3, 0, NULL, 1, 0, 0),
(117, 0, 0, NULL, '电子', '', '', 0, 3, 3, 2, 0, NULL, 1, 0, 0),
(116, 0, 0, NULL, '行业设备', '', '', 0, 3, 3, 2, 0, NULL, 1, 0, 0),
(115, 0, 0, NULL, '五金', '', '', 0, 3, 3, 2, 0, NULL, 1, 0, 0),
(114, 0, 0, NULL, '机械', '', '', 0, 3, 3, 2, 0, NULL, 1, 0, 0),
(118, 0, 0, NULL, '机加工', '', '', 0, 3, 3, 2, 0, NULL, 1, 0, 0),
(119, 0, 0, NULL, '电工', '', '', 0, 3, 3, 2, 0, NULL, 1, 0, 0),
(120, 0, 0, NULL, '汽车', '', '', 0, 3, 3, 2, 0, NULL, 1, 0, 0),
(121, 0, 0, NULL, '安防', '', '', 0, 3, 3, 2, 0, NULL, 1, 0, 0),
(122, 0, 0, NULL, '轴承', '', '', 0, 114, 3, 3, 0, NULL, 1, 0, 0),
(123, 0, 0, NULL, '阀门', '', '', 0, 114, 3, 3, 0, NULL, 1, 0, 0),
(124, 0, 0, NULL, '模具', '', '', 0, 114, 3, 3, 0, NULL, 1, 0, 0),
(125, 0, 0, NULL, '刀具夹具', '', '', 0, 114, 3, 3, 0, NULL, 1, 0, 0),
(126, 0, 0, NULL, '泵', '', '', 0, 114, 3, 3, 0, NULL, 1, 0, 0),
(127, 0, 0, NULL, '紧固件', '', '', 0, 115, 3, 3, 0, NULL, 1, 0, 0),
(128, 0, 0, NULL, '五金件', '', '', 0, 115, 3, 3, 0, NULL, 1, 0, 0),
(129, 0, 0, NULL, '水龙头', '', '', 0, 115, 3, 3, 0, NULL, 1, 0, 0),
(130, 0, 0, NULL, '锁具', '', '', 0, 115, 3, 3, 0, NULL, 1, 0, 0),
(131, 0, 0, NULL, '工程机械', '', '', 0, 116, 3, 3, 0, NULL, 1, 0, 0),
(132, 0, 0, NULL, '食品机械', '', '', 0, 116, 3, 3, 0, NULL, 1, 0, 0),
(133, 0, 0, NULL, '纺机', '', '', 0, 116, 3, 3, 0, NULL, 1, 0, 0),
(134, 0, 0, NULL, '仪器仪表', '', '', 0, 117, 3, 3, 0, NULL, 1, 0, 0),
(135, 0, 0, NULL, 'LED', '', '', 0, 117, 3, 3, 0, NULL, 1, 0, 0),
(136, 0, 0, NULL, 'PCB', '', '', 0, 117, 3, 3, 0, NULL, 1, 0, 0),
(137, 0, 0, NULL, '二极管', '', '', 0, 117, 3, 3, 0, NULL, 1, 0, 0),
(138, 0, 0, NULL, '钣金加工', '', '', 0, 118, 3, 3, 0, NULL, 1, 0, 0),
(139, 0, 0, NULL, '激光加工', '', '', 0, 118, 3, 3, 0, NULL, 1, 0, 0),
(140, 0, 0, NULL, '冲压', '', '', 0, 118, 3, 3, 0, NULL, 1, 0, 0),
(141, 0, 0, NULL, '电池', '', '', 0, 119, 3, 3, 0, NULL, 1, 0, 0),
(142, 0, 0, NULL, '开关', '', '', 0, 119, 3, 3, 0, NULL, 1, 0, 0),
(143, 0, 0, NULL, '电线电缆', '', '', 0, 119, 3, 3, 0, NULL, 1, 0, 0),
(144, 0, 0, NULL, '发电机', '', '', 0, 119, 3, 3, 0, NULL, 1, 0, 0),
(145, 0, 0, NULL, '交通运输', '', '', 0, 120, 3, 3, 0, NULL, 1, 0, 0),
(146, 0, 0, NULL, '内饰', '', '', 0, 120, 3, 3, 0, NULL, 1, 0, 0),
(147, 0, 0, NULL, '外饰', '', '', 0, 120, 3, 3, 0, NULL, 1, 0, 0),
(148, 0, 0, NULL, '电动车', '', '', 0, 120, 3, 3, 0, NULL, 1, 0, 0),
(149, 0, 0, NULL, '监控系统', '', '', 0, 121, 3, 3, 0, NULL, 1, 0, 0),
(150, 0, 0, NULL, '消防器材', '', '', 0, 121, 3, 3, 0, NULL, 1, 0, 0),
(151, 0, 0, NULL, '二手设备', '', '', 0, 121, 3, 3, 0, NULL, 1, 0, 0),
(152, 0, 0, NULL, '化工', '', '', 0, 4, 4, 2, 0, NULL, 1, 0, 0),
(153, 0, 0, NULL, '精细化学品', '', '', 0, 4, 4, 2, 0, NULL, 1, 0, 0),
(154, 0, 0, NULL, '橡塑', '', '', 0, 4, 4, 2, 0, NULL, 1, 0, 0),
(155, 0, 0, NULL, '建筑', '', '', 0, 4, 4, 2, 0, NULL, 1, 0, 0),
(156, 0, 0, NULL, '医药', '', '', 0, 4, 4, 2, 0, NULL, 1, 0, 0),
(157, 0, 0, NULL, '农业', '', '', 0, 4, 4, 2, 0, NULL, 1, 0, 0),
(158, 0, 0, NULL, '冶金', '', '', 0, 4, 4, 2, 0, NULL, 1, 0, 0),
(159, 0, 0, NULL, '能源', '', '', 0, 4, 4, 2, 0, NULL, 1, 0, 0),
(160, 0, 0, NULL, '醇类', '', '', 0, 152, 4, 3, 0, NULL, 1, 0, 0),
(161, 0, 0, NULL, '烃类', '', '', 0, 152, 4, 3, 0, NULL, 1, 0, 0),
(162, 0, 0, NULL, '无机盐', '', '', 0, 152, 4, 3, 0, NULL, 1, 0, 0),
(163, 0, 0, NULL, '合成树脂', '', '', 0, 152, 4, 3, 0, NULL, 1, 0, 0),
(164, 0, 0, NULL, '润滑油', '', '', 0, 153, 4, 3, 0, NULL, 1, 0, 0),
(165, 0, 0, NULL, '涂料油漆', '', '', 0, 153, 4, 3, 0, NULL, 1, 0, 0),
(166, 0, 0, NULL, '化肥', '', '', 0, 153, 4, 3, 0, NULL, 1, 0, 0),
(167, 0, 0, NULL, '通用塑料', '', '', 0, 154, 4, 3, 0, NULL, 1, 0, 0),
(168, 0, 0, NULL, '工程塑料', '', '', 0, 154, 4, 3, 0, NULL, 1, 0, 0),
(169, 0, 0, NULL, '废塑料', '', '', 0, 154, 4, 3, 0, NULL, 1, 0, 0),
(170, 0, 0, NULL, '管件', '', '', 0, 155, 4, 3, 0, NULL, 1, 0, 0),
(171, 0, 0, NULL, '石材', '', '', 0, 155, 4, 3, 0, NULL, 1, 0, 0),
(172, 0, 0, NULL, '水泥', '', '', 0, 155, 4, 3, 0, NULL, 1, 0, 0),
(173, 0, 0, NULL, '耐火材料', '', '', 0, 155, 4, 3, 0, NULL, 1, 0, 0),
(174, 0, 0, NULL, '保健品', '', '', 0, 156, 4, 3, 0, NULL, 1, 0, 0),
(175, 0, 0, NULL, '医药中间体', '', '', 0, 156, 4, 3, 0, NULL, 1, 0, 0),
(176, 0, 0, NULL, '医疗设备', '', '', 0, 156, 4, 3, 0, NULL, 1, 0, 0),
(177, 0, 0, NULL, '特种养殖', '', '', 0, 157, 4, 3, 0, NULL, 1, 0, 0),
(178, 0, 0, NULL, '畜牧', '', '', 0, 157, 4, 3, 0, NULL, 1, 0, 0),
(179, 0, 0, NULL, '水产品', '', '', 0, 157, 4, 3, 0, NULL, 1, 0, 0),
(180, 0, 0, NULL, '玉米', '', '', 0, 157, 4, 3, 0, NULL, 1, 0, 0),
(181, 0, 0, NULL, '钢材', '', '', 0, 158, 4, 3, 0, NULL, 1, 0, 0),
(182, 0, 0, NULL, '不锈钢', '', '', 0, 158, 4, 3, 0, NULL, 1, 0, 0),
(183, 0, 0, NULL, '铝型材', '', '', 0, 158, 4, 3, 0, NULL, 1, 0, 0),
(184, 0, 0, NULL, '废金属', '', '', 0, 158, 4, 3, 0, NULL, 1, 0, 0),
(185, 0, 0, NULL, '环保', '', '', 0, 159, 4, 3, 0, NULL, 1, 0, 0),
(186, 0, 0, NULL, '天然气', '', '', 0, 159, 4, 3, 0, NULL, 1, 0, 0),
(187, 0, 0, NULL, '柴油', '', '', 0, 159, 4, 3, 0, NULL, 1, 0, 0),
(188, 0, 0, NULL, '无烟煤', '', '', 0, 159, 4, 3, 0, NULL, 1, 0, 0),
(189, 0, 0, NULL, '商务服务', '', '', 0, 5, 5, 2, 0, NULL, 1, 0, 0),
(190, 0, 0, NULL, '物流', '', '', 0, 5, 5, 2, 0, NULL, 1, 0, 0),
(191, 0, 0, NULL, '展会网', '', '', 0, 5, 5, 2, 0, NULL, 1, 0, 0),
(192, 0, 0, NULL, '广告', '', '', 0, 5, 5, 2, 0, NULL, 1, 0, 0),
(193, 0, 0, NULL, '印刷', '', '', 0, 5, 5, 2, 0, NULL, 1, 0, 0),
(194, 0, 0, NULL, '包装', '', '', 0, 5, 5, 2, 0, NULL, 1, 0, 0),
(195, 0, 0, NULL, '招聘求职', '', '', 0, 189, 5, 3, 0, NULL, 1, 0, 0),
(196, 0, 0, NULL, '网络兼职', '', '', 0, 189, 5, 3, 0, NULL, 1, 0, 0),
(197, 0, 0, NULL, '销售', '', '', 0, 189, 5, 3, 0, NULL, 1, 0, 0),
(198, 0, 0, NULL, '国内陆运', '', '', 0, 190, 5, 3, 0, NULL, 1, 0, 0),
(199, 0, 0, NULL, '国际海运', '', '', 0, 190, 5, 3, 0, NULL, 1, 0, 0),
(200, 0, 0, NULL, '进出口', '', '', 0, 190, 5, 3, 0, NULL, 1, 0, 0),
(201, 0, 0, NULL, '广交会', '', '', 0, 191, 5, 3, 0, NULL, 1, 0, 0),
(202, 0, 0, NULL, '服装展会', '', '', 0, 191, 5, 3, 0, NULL, 1, 0, 0),
(203, 0, 0, NULL, '礼品展会', '', '', 0, 191, 5, 3, 0, NULL, 1, 0, 0),
(204, 0, 0, NULL, '平面设计', '', '', 0, 192, 5, 3, 0, NULL, 1, 0, 0),
(205, 0, 0, NULL, '广告代理', '', '', 0, 192, 5, 3, 0, NULL, 1, 0, 0),
(206, 0, 0, NULL, '广告制作', '', '', 0, 192, 5, 3, 0, NULL, 1, 0, 0),
(207, 0, 0, NULL, '纸类印刷', '', '', 0, 193, 5, 3, 0, NULL, 1, 0, 0),
(208, 0, 0, NULL, '特种印刷', '', '', 0, 193, 5, 3, 0, NULL, 1, 0, 0),
(209, 0, 0, NULL, '热转印', '', '', 0, 193, 5, 3, 0, NULL, 1, 0, 0),
(210, 0, 0, NULL, '塑料制品', '', '', 0, 194, 5, 3, 0, NULL, 1, 0, 0),
(211, 0, 0, NULL, '玻璃制品', '', '', 0, 194, 5, 3, 0, NULL, 1, 0, 0),
(212, 0, 0, NULL, '纸制品', '', '', 0, 194, 5, 3, 0, NULL, 1, 0, 0),
(213, 0, 0, NULL, '虚拟', '', '', 0, 0, 0, 1, 0, NULL, 1, 0, 0),
(214, 0, 0, NULL, '母婴', '', '', 0, 0, 0, 1, 0, NULL, 1, 0, 0),
(215, 0, 0, NULL, '保险', '', '', 0, 0, 0, 1, 0, NULL, 1, 0, 0),
(216, 0, 0, NULL, '充值中心', '', '', 0, 213, 213, 2, 0, NULL, 1, 0, 0),
(217, 0, 0, NULL, '网游', '', '', 0, 213, 213, 2, 0, NULL, 1, 0, 0),
(218, 0, 0, NULL, '彩票', '', '', 0, 213, 213, 2, 0, NULL, 1, 0, 0),
(219, 0, 0, NULL, 'IP卡', '', '', 0, 213, 213, 2, 0, NULL, 1, 0, 0),
(220, 0, 0, NULL, '点卡', '', '', 0, 213, 213, 2, 0, NULL, 1, 0, 0),
(221, 0, 0, NULL, '机票', '', '', 0, 213, 213, 2, 0, NULL, 1, 0, 0),
(222, 0, 0, NULL, '话费', '', '', 0, 216, 213, 3, 0, NULL, 1, 0, 0),
(223, 0, 0, NULL, '移动', '', '', 0, 216, 213, 3, 0, NULL, 1, 0, 0),
(224, 0, 0, NULL, '联通', '', '', 0, 216, 213, 3, 0, NULL, 1, 0, 0),
(225, 0, 0, NULL, '电信', '', '', 0, 216, 213, 3, 0, NULL, 1, 0, 0),
(226, 0, 0, NULL, '征途', '', '', 0, 217, 213, 3, 0, NULL, 1, 0, 0),
(227, 0, 0, NULL, '天龙2', '', '', 0, 217, 213, 3, 0, NULL, 1, 0, 0),
(228, 0, 0, NULL, '梦幻西游', '', '', 0, 217, 213, 3, 0, NULL, 1, 0, 0),
(229, 0, 0, NULL, 'DNF', '', '', 0, 217, 213, 3, 0, NULL, 1, 0, 0),
(230, 0, 0, NULL, '大乐透', '', '', 0, 218, 213, 3, 0, NULL, 1, 0, 0),
(231, 0, 0, NULL, '排三', '', '', 0, 218, 213, 3, 0, NULL, 1, 0, 0),
(232, 0, 0, NULL, '双色球', '', '', 0, 218, 213, 3, 0, NULL, 1, 0, 0),
(233, 0, 0, NULL, '足彩', '', '', 0, 218, 213, 3, 0, NULL, 1, 0, 0),
(234, 0, 0, NULL, '网络电话', '', '', 0, 219, 213, 3, 0, NULL, 1, 0, 0),
(235, 0, 0, NULL, 'skype', '', '', 0, 219, 213, 3, 0, NULL, 1, 0, 0),
(236, 0, 0, NULL, '手机号码', '', '', 0, 219, 213, 3, 0, NULL, 1, 0, 0),
(237, 0, 0, NULL, '魔兽', '', '', 0, 220, 213, 3, 0, NULL, 1, 0, 0),
(238, 0, 0, NULL, '蜀门', '', '', 0, 220, 213, 3, 0, NULL, 1, 0, 0),
(239, 0, 0, NULL, '完美国际', '', '', 0, 220, 213, 3, 0, NULL, 1, 0, 0),
(240, 0, 0, NULL, 'QQ', '', '', 0, 220, 213, 3, 0, NULL, 1, 0, 0),
(241, 0, 0, NULL, '酒店', '', '', 0, 221, 213, 3, 0, NULL, 1, 0, 0),
(242, 0, 0, NULL, '门票', '', '', 0, 221, 213, 3, 0, NULL, 1, 0, 0),
(243, 0, 0, NULL, '特色客栈', '', '', 0, 221, 213, 3, 0, NULL, 1, 0, 0),
(244, 0, 0, NULL, '旅游', '', '', 0, 221, 213, 3, 0, NULL, 1, 0, 0),
(245, 0, 0, NULL, '奶粉', '', '', 0, 214, 214, 2, 0, NULL, 1, 0, 0),
(246, 0, 0, NULL, '用品', '', '', 0, 214, 214, 2, 0, NULL, 1, 0, 0),
(247, 0, 0, NULL, '益智', '', '', 0, 214, 214, 2, 0, NULL, 1, 0, 0),
(248, 0, 0, NULL, '辅食', '', '', 0, 245, 214, 3, 0, NULL, 1, 0, 0),
(249, 0, 0, NULL, '营养', '', '', 0, 245, 214, 3, 0, NULL, 1, 0, 0),
(250, 0, 0, NULL, '妈妈保健', '', '', 0, 245, 214, 3, 0, NULL, 1, 0, 0),
(251, 0, 0, NULL, '更多', '', '', 0, 245, 214, 3, 0, NULL, 1, 0, 0),
(252, 0, 0, NULL, '尿片', '', '', 0, 246, 214, 3, 0, NULL, 1, 0, 0),
(253, 0, 0, NULL, '睡袋', '', '', 0, 246, 214, 3, 0, NULL, 1, 0, 0),
(254, 0, 0, NULL, '洗护', '', '', 0, 246, 214, 3, 0, NULL, 1, 0, 0),
(255, 0, 0, NULL, '喂哺', '', '', 0, 246, 214, 3, 0, NULL, 1, 0, 0),
(256, 0, 0, NULL, '湿巾', '', '', 0, 246, 214, 3, 0, NULL, 1, 0, 0),
(257, 0, 0, NULL, '玩具', '', '', 0, 247, 214, 3, 0, NULL, 1, 0, 0),
(258, 0, 0, NULL, '早教', '', '', 0, 247, 214, 3, 0, NULL, 1, 0, 0),
(259, 0, 0, NULL, '推车', '', '', 0, 247, 214, 3, 0, NULL, 1, 0, 0),
(260, 0, 0, NULL, '床', '', '', 0, 247, 214, 3, 0, NULL, 1, 0, 0),
(261, 0, 0, NULL, '户外', '', '', 0, 247, 214, 3, 0, NULL, 1, 0, 0),
(262, 0, 0, NULL, '意外险', '', '', 0, 215, 215, 2, 0, NULL, 1, 0, 0),
(263, 0, 0, NULL, '保险公司', '', '', 0, 215, 215, 2, 0, NULL, 1, 0, 0),
(264, 0, 0, NULL, '特色', '', '', 0, 215, 215, 2, 0, NULL, 1, 0, 0),
(265, 0, 0, NULL, '交通', '', '', 0, 262, 215, 3, 0, NULL, 1, 0, 0),
(266, 0, 0, NULL, '旅行', '', '', 0, 262, 215, 3, 0, NULL, 1, 0, 0),
(267, 0, 0, NULL, '意外医疗', '', '', 0, 262, 215, 3, 0, NULL, 1, 0, 0),
(268, 0, 0, NULL, '泰康', '', '', 0, 263, 215, 3, 0, NULL, 1, 0, 0),
(269, 0, 0, NULL, '华泰', '', '', 0, 263, 215, 3, 0, NULL, 1, 0, 0),
(270, 0, 0, NULL, '阳光产险', '', '', 0, 263, 215, 3, 0, NULL, 1, 0, 0),
(271, 0, 0, NULL, '阳光人寿', '', '', 0, 263, 215, 3, 0, NULL, 1, 0, 0),
(272, 0, 0, NULL, '出国留学', '', '', 0, 264, 215, 3, 0, NULL, 1, 0, 0),
(273, 0, 0, NULL, '自驾车', '', '', 0, 264, 215, 3, 0, NULL, 1, 0, 0),
(274, 0, 0, NULL, '家财', '', '', 0, 264, 215, 3, 0, NULL, 1, 0, 0);