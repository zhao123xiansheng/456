-- 客服系统数据库表

-- 客服会话表
DROP TABLE IF EXISTS `shua_chat_session`;
CREATE TABLE `shua_chat_session` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `user_ip` varchar(45) NOT NULL,
  `user_agent` text,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `last_msg_time` datetime DEFAULT NULL,
  `create_time` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `user_ip` (`user_ip`),
  KEY `status` (`status`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- 客服消息表
DROP TABLE IF EXISTS `shua_chat_message`;
CREATE TABLE `shua_chat_message` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `session_id` int(11) unsigned NOT NULL,
  `sender` enum('user','admin') NOT NULL DEFAULT 'user',
  `content` text NOT NULL,
  `type` tinyint(1) NOT NULL DEFAULT '0' COMMENT '0:文本 1:图片',
  `create_time` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `session_id` (`session_id`),
  KEY `sender` (`sender`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4; 