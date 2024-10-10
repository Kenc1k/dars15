create database products_db;

use products_db;

create Table products(
    id int PRIMARY key auto_increment,
    name VARCHAR(255) not NULL,
    quantity INT,
    price INT
);