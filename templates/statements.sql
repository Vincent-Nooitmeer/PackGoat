DROP DATABASE IF EXISTS pack_goat;
CREATE DATABASE pack_goat;
USE pack_goat;
CREATE TABLE IF NOT EXISTS Customers (
    id int(13) AUTO_INCREMENT PRIMARY KEY NOT NULL,
    username varchar(255) NOT NULL,
    password varchar(255) NOT NULL,
    email varchar(255) NOT NULL,
    firstName varchar(112),
    lastName varchar(112)
    );
    
INSERT INTO Customers (username, password, email)
VALUES ('admin', 'admin', 'packgoatinfo@gmail.com') 