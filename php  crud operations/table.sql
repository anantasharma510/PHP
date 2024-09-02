CREATE DATABASE tesstdb;
USE testdb;  -- Ensure you are using the correct database

CREATE TABLE items (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(50) NOT NULL
);
