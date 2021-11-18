-- thee database for the webapp (each with their own table)
create database if not exists freshFoods; -- create biga$$ database
create table if not exists freshFoods.reviews ( -- define structure of
	id int primary key not null auto_increment,
	firstName varchar(30),
    lastName varchar(30),
    email varchar(50),
    `subject` varchar(1000)
);