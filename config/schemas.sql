--for navigation--
CREATE TABLE navigation (
	id int(8) NOT NULL AUTO_INCREMENT,
	name VARCHAR(20) NOT NULL,
	position VARCHAR(20) NOT NULL,
	page_url VARCHAR(70) NOT NULL
) ENGINE = InnoDB;;

--For forums --
CREATE TABLE users (
	user_id MEDIUMINT(8) UNSIGNED NOT NULL AUTO_INCREMENT,
	lang_id TINYINT UNSIGNED NOT NULL,
	username VARCHAR(30) NOT NULL,
	first_name VARCHAR(40) NOT NULL,
	last_name VARCHAR(40) NOT NULL,
	time_zone VARCHAR(30) NOT NULL,
	email VARCHAR(60) NOT NULL,
	pword VARCHAR(15) NOT NULL,
	PRIMARY KEY(user_id),
	UNIQUE (username),
	UNIQUE (email),
	INDEX login (username, pword)
) ENGINE = InnoDB;

CREATE TABLE threads (
	thread_id INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
	lang_id TINYINT(3) UNSIGNED NOT NULL,
	user_id MEDIUMINT(8) UNSIGNED NOT NULL,
	subject VARCHAR(80) NOT NULL,
	PRIMARY KEY(thread_id),
	INDEX (lang_id),
	INDEX (user_id)
) ENGINE = InnoDB;

CREATE TABLE posts (
	post_id INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
	thread_id INT(10) UNSIGNED NOT NULL,
	user_id MEDIUMINT(8) UNSIGNED NOT NULL,
	message TEXT NOT NULL,
	post_date DATETIME NOT NULL,
	PRIMARY KEY(post_id),
	INDEX (thread_id),
	INDEX (user_id)
) ENGINE = MyISAM;

CREATE TABLE languages (
	lang_id TINYINT(3) UNSIGNED NOT NULL AUTO_INCREMENT,
	lang VARCHAR(60) NOT NULL,
	lang_eng VARCHAR(20) NOT NULL,
	PRIMARY KEY (lang_id),
	UNIQUE (lang)
)ENGINE = MyISAM;

CREATE TABLE words (
word_id TINYINT UNSIGNED NOT NULL AUTO_INCREMENT,
lang_id TINYINT UNSIGNED NOT NULL,
title VARCHAR(80) NOT NULL,
intro TINYTEXT NOT NULL,
home VARCHAR(30) NOT NULL,
forum_home VARCHAR(40) NOT NULL,
`language` VARCHAR(40) NOT NULL,
register VARCHAR(30) NOT NULL,
login VARCHAR(30) NOT NULL,
logout VARCHAR(30) NOT NULL,
new_thread VARCHAR(40) NOT NULL,
subject VARCHAR(30) NOT NULL,
body VARCHAR(30) NOT NULL,
submit VARCHAR(30) NOT NULL,
posted_on VARCHAR(30) NOT NULL,
posted_by VARCHAR(30) NOT NULL,
replies VARCHAR(30) NOT NULL,
latest_reply VARCHAR(40) NOT NULL,
post_a_reply VARCHAR(40) NOT NULL,
PRIMARY KEY (word_id),
UNIQUE (lang_id)
);

/*populate languages tables */
INSERT INTO languages (lang,lang_eng) VALUES
('English', 'English'),
('Português', 'Portuguese'),
('Français', 'French'),
('Norsk', 'Norwegian'),
('Romanian', 'Romanian'),
('Deutsch', 'German'),
('Srpski', 'Serbian'),
('Nederlands', 'Dutch');

/*populate users tables */
INSERT INTO users (lang_id, time_zone, username, pword, email) VALUES
(1, 'Canada/Toronto', 'angelexi', ('charles34!'),'holdera2@hotmail.com'
);

INSERT INTO words VALUES
(NULL, 1, 'PHP and MySQL for Dynamic Web Sites: The Forum!',
'<p>Welcome to our site....
 please use the links above...
 blah, blah, blah.</p>\r\n
 <p>Welcome to our site.</p>', 'Home',
'Forum Home', 'Language',
'Register', 'Login', 'Logout',
'New Thread', 'Subject', 'Body',
'Submit', 'Posted on', 'Posted
 by', 'Replies', 'Latest Reply',
'Post a Reply');

