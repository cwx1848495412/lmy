/*
 Navicat Premium Data Transfer

 Source Server         : php-mysql
 Source Server Type    : MySQL
 Source Server Version : 50726
 Source Host           : localhost:3306
 Source Schema         : lmy

 Target Server Type    : MySQL
 Target Server Version : 50726
 File Encoding         : 65001

 Date: 30/06/2020 10:48:27
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for article
-- ----------------------------
DROP TABLE IF EXISTS `article`;
CREATE TABLE `article`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL DEFAULT '',
  `content` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 5 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_hungarian_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of article
-- ----------------------------
INSERT INTO `article` VALUES (1, '诫子书', '夫君子之行，静以修身，俭以养德。非淡泊无以明志，非宁静无以致远。夫学须静也，才须学也，非学无以广才，非志无以成学。淫慢则不能励精，险躁则不能治性。年与时驰，意与日去，遂成枯落，多不接世，悲守穷庐，将复何及！');
INSERT INTO `article` VALUES (2, '定风波', '三月七日，沙湖道中遇雨。雨具先去，同行皆狼狈，余独不觉，已而遂晴，故作此。莫听穿林打叶声，何妨吟啸且徐行。竹杖芒鞋轻胜马，谁怕？一蓑烟雨任平生。料峭春风吹酒醒，微冷，山头斜照却相迎。回首向来萧瑟处，归去，也无风雨也无晴。');
INSERT INTO `article` VALUES (3, '送东阳马生序', '余幼时即嗜学。家贫，无从致书以观，每假借于藏书之家，手自笔录，计日以还。天大寒，砚冰坚，手指不可屈伸，弗之怠。录毕，走送之，不敢稍逾约。以是人多以书假余，余因得遍观群书。既加冠，益慕圣贤之道 ，又患无硕师、名人与游，尝趋百里外，从乡之先达执经叩问。先达德隆望尊，门人弟子填其室，未尝稍降辞色。余立侍左右，援疑质理，俯身倾耳以请；或遇其叱咄，色愈恭，礼愈至，不敢出一言以复；俟其欣悦，则又请焉。故余虽愚，卒获有所闻。\r\n当余之从师也，负箧曳屣，行深山巨谷中，穷冬烈风，大雪深数尺，足肤皲裂而不知。至舍，四支僵劲不能动，媵人持汤沃灌，以衾拥覆，久而乃和。寓逆旅，主人日再食，无鲜肥滋味之享。同舍生皆被绮绣，戴朱缨宝饰之帽，腰白玉之环，左佩刀，右备容臭，烨然若神人；余则缊袍敝衣处其间，略无慕艳意。以中有足乐者，不知口体之奉不若人也。盖余之勤且艰若此。\r\n今虽耄老，未有所成，犹幸预君子之列，而承天子之宠光，缀公卿之后，日侍坐备顾问，四海亦谬称其氏名，况才之过于余者乎？\r\n今诸生学于太学，县官日有廪稍之供，父母岁有裘葛之遗，无冻馁之患矣；坐大厦之下而诵《诗》《书》，无奔走之劳矣；有司业、博士为之师，未有问而不告，求而不得者也；凡所宜有之书，皆集于此，不必若余之手录，假诸人而后见也。其业有不精，德有不成者，非天质之卑，则心不若余之专耳，岂他人之过哉！\r\n东阳马生君则，在太学已二年，流辈甚称其贤。余朝京师，生以乡人子谒余，撰长书以为贽，辞甚畅达，与之论辨，言和而色夷。自谓少时用心于学甚劳，是可谓善学者矣！其将归见其亲也，余故道为学之难以告之。谓余勉乡人以学者，余之志也；诋我夸际遇之盛而骄乡人者，岂知予者哉！');
INSERT INTO `article` VALUES (4, '江城子·密州出猎', '老夫聊发少年狂，左牵黄，右擎苍，锦帽貂裘，千骑卷平冈。为报倾城随太守，亲射虎，看孙郎。\r\n\r\n酒酣胸胆尚开张，鬓微霜，又何妨！持节云中，何日遣冯唐？会挽雕弓如满月，西北望，射天狼。');

-- ----------------------------
-- Table structure for reply
-- ----------------------------
DROP TABLE IF EXISTS `reply`;
CREATE TABLE `reply`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `uid` int(10) UNSIGNED NOT NULL DEFAULT 0 COMMENT '用户id',
  `article_id` int(10) UNSIGNED NOT NULL DEFAULT 0,
  `content` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL DEFAULT '',
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 9 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_hungarian_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of reply
-- ----------------------------
INSERT INTO `reply` VALUES (1, 1, 1, '嗯嗯嗯，诸葛亮说的不错');
INSERT INTO `reply` VALUES (2, 1, 2, '不错不错，苏轼说的也不错');
INSERT INTO `reply` VALUES (3, 1, 1, '好一个绝世文章');
INSERT INTO `reply` VALUES (4, 1, 1, '我自横刀向天笑！');
INSERT INTO `reply` VALUES (5, 1, 1, '我的评论哈哈哈');
INSERT INTO `reply` VALUES (6, 1, 1, '发一条评论试试');
INSERT INTO `reply` VALUES (7, 1, 3, '宋濂写的？');
INSERT INTO `reply` VALUES (8, 1, 4, '这谁写的？');

-- ----------------------------
-- Table structure for user
-- ----------------------------
DROP TABLE IF EXISTS `user`;
CREATE TABLE `user`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `username` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT '',
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_hungarian_ci NULL DEFAULT '',
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 7 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_hungarian_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of user
-- ----------------------------
INSERT INTO `user` VALUES (1, 'admin', 'admin');
INSERT INTO `user` VALUES (2, 'lmy', '123456');
INSERT INTO `user` VALUES (3, 'guest', '1717173');
INSERT INTO `user` VALUES (4, 'rabbit', '556482');
INSERT INTO `user` VALUES (5, 'wobenwudi', '123');
INSERT INTO `user` VALUES (6, 'test', '123');

SET FOREIGN_KEY_CHECKS = 1;
