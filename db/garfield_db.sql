CREATE DATABASE garfield_db;

use garfield_db;

CREATE table tb_user (
    cd_user INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
	email VARCHAR(100) NOT NULL UNIQUE,
	username VARCHAR(80) NOT NULL,
	bios VARCHAR(100),
	is_admin INT(1) NOT NULL,
	senha VARCHAR(100) NOT NULL,
	img_perfil BLOB
);

CREATE table tb_post (
	cd_post INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
	titulo VARCHAR(50) NOT NULL,
	img_post1 LONGBLOB,
	img_post2 LONGBLOB,
	dsc_post TEXT,
	user INT NOT NULL,
	FOREIGN KEY(user) REFERENCES tb_user(cd_user)
);