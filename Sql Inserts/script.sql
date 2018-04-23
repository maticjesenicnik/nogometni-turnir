/*
Created		23. 04. 2018
Modified		23. 04. 2018
Project		
Model		
Company		
Author		
Version		
Database		mySQL 5 
*/


Create table users (
	id Int NOT NULL AUTO_INCREMENT,
	team_id Int NOT NULL,
	country_id Int NOT NULL,
	name Varchar(30) NOT NULL,
	surname Varchar(40) NOT NULL,
	email Varchar(100) NOT NULL,
	pass Varchar(40) NOT NULL,
	gender Varchar(20) NOT NULL,
	birthDate Date NOT NULL,
	avatar Varchar(256),
	admin Int,
 Primary Key (id)) ENGINE = InnoDB;

Create table teams (
	id Int NOT NULL AUTO_INCREMENT,
	country_id Int NOT NULL,
	name Varchar(40) NOT NULL,
 Primary Key (id)) ENGINE = InnoDB;

Create table countries (
	id Int NOT NULL AUTO_INCREMENT,
	country_code Varchar(2) NOT NULL,
	country_name Varchar(100) NOT NULL,
 Primary Key (id)) ENGINE = InnoDB;

Create table tournaments (
	id Int NOT NULL AUTO_INCREMENT,
	country_id Int NOT NULL,
	name Varchar(255) NOT NULL,
 Primary Key (id)) ENGINE = InnoDB;

Create table matches (
	id Int NOT NULL AUTO_INCREMENT,
	tournament_id Int NOT NULL,
	homeTeam_id Int NOT NULL,
	awayTeam_id Int NOT NULL,
	score_home Int,
	score_away Int,
	matchDate Timestamp NOT NULL,
	location Varchar(100) NOT NULL,
 Primary Key (id)) ENGINE = InnoDB;


Alter table users add Foreign Key (team_id) references teams (id) on delete  restrict on update  restrict;
Alter table matches add Foreign Key (homeTeam_id) references teams (id) on delete  restrict on update  restrict;
Alter table matches add Foreign Key (awayTeam_id) references teams (id) on delete  restrict on update  restrict;
Alter table users add Foreign Key (country_id) references countries (id) on delete  restrict on update  restrict;
Alter table teams add Foreign Key (country_id) references countries (id) on delete  restrict on update  restrict;
Alter table tournaments add Foreign Key (country_id) references countries (id) on delete  restrict on update  restrict;
Alter table matches add Foreign Key (tournament_id) references tournaments (id) on delete  restrict on update  restrict;


