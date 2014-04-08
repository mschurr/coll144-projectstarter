DROP TABLE IF EXISTS `be_users`;
CREATE TABLE `be_users` (
  `userid` int(64) NOT NULL,
  `f_name` varchar(255) NOT NULL default '',
  `l_name` varchar(255) NOT NULL default '',
  `college_id` int(64) NOT NULL,
  `contact_email` varchar(255) NOT NULL default '',
  `facebook_url` varchar(255) NOT NULL default '',
  `contact_phone` varchar(255) NOT NULL default '',
  `contact_prefer` int(64) NOT NULL,
  PRIMARY KEY  (`userid`)
) ENGINE=MyISAM AUTO_INCREMENT=1 DEFAULT CHARSET=latin1;

DROP TABLE IF EXISTS `be_books`;
CREATE TABLE `be_books` (
  `book_id` int(64) NOT NULL auto_increment,
  `userid` int(64) NOT NULL,
  `course_tags` text NOT NULL DEFAULT '',
  `teacher_tags` text NOT NULL DEFAULT '',
  `delivery_type` int(64) NOT NULL DEFAULT '0',
  `book_type` int(64) NOT NULL DEFAULT '0',
  `condition_flag` int(64) NOT NULL DEFAULT '0',
  `title` varchar(255) NOT NULL default '',
  `edition` int(64) NOT NULL DEFAULT '0',
  `description` text NOT NULL DEFAULT '',
  `publisher` varchar(255) NOT NULL default '',
  `publish_time` int(64) NOT NULL default '0',
  `author_tags` text NOT NULL DEFAULT '',
  `isbn10` varchar(255) NOT NULL default '',
  `isbn13` varchar(255) NOT NULL default '',
  `ask_price` decimal(50,2) NOT NULL default '0.00',
  `sold_flag` int(64) NOT NULL DEFAULT '0',
  PRIMARY KEY  (`book_id`)
) ENGINE=MyISAM AUTO_INCREMENT=1 DEFAULT CHARSET=latin1;
CREATE INDEX `core_be_userid` ON `be_books`(`userid`);