CREATE DATABASE socialmedi

CREATE TABLE social(
    id INT PRIMARY KEY AUTO_INCREMENT,
    socialmedia VARCHAR(60) NOT NULL,
    email VARCHAR(60),
    password VARCHAR(50)
);