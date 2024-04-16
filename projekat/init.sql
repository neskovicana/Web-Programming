CREATE DATABASE lana_DB;
USE lana_DB;

CREATE TABLE User (
	id int NOT NULL AUTO_INCREMENT,
	username varchar(100),
	password varchar(100),
	email varchar(100),
	gender varchar(1),
	primary key (id)
);