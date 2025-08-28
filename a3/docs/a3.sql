DROP DATABASE IF EXISTS bmo22a;  
CREATE DATABASE IF NOT EXISTS bmo22a;  
USE bmo22a;  

-- Table: petstore
CREATE TABLE petstore (
    pst_id SMALLINT PRIMARY KEY ,
    pst_name VARCHAR(30),
    pst_street VARCHAR(30),
    pst_city VARCHAR(30),
    pst_state CHAR(2),
    pst_zip INT(9),
    pst_phone BIGINT,
    pst_email VARCHAR(100),
    pst_url VARCHAR(100),
    pst_ytd_sales DECIMAL(10,2),
    pst_notes VARCHAR(255)
);

-- Table: customer
CREATE TABLE customer (
    cus_id SMALLINT PRIMARY KEY AUTO_INCREMENT,
    cus_fname VARCHAR(15),
    cus_lname VARCHAR(30),
    cus_street VARCHAR(30),
    cus_city VARCHAR(30),
    cus_state CHAR(2),
    cus_zip INT,
    cus_phone BIGINT,
    cus_email VARCHAR(100),
    cus_balance DECIMAL(6,2),
    cus_total_sales DECIMAL(6,2),
    cus_notes VARCHAR(255)
);

-- Table: pet
CREATE TABLE pet (
    pet_id SMALLINT PRIMARY KEY,
    pst_id SMALLINT,
    cus_id SMALLINT NULL,
    pet_type VARCHAR(45),
    pet_sex ENUM('m', 'f'),
    pet_cost DECIMAL(6,2),
    pet_price DECIMAL(6,2),
    pet_age TINYINT,
    pet_color VARCHAR(30),
    pet_sale_date DATE,
    pet_vaccine ENUM('y', 'n'),
    pet_neuter ENUM('y', 'n'),
    pet_notes VARCHAR(255),
    FOREIGN KEY (pst_id) REFERENCES petstore(pst_id) ON DELETE CASCADE,
    FOREIGN KEY (cus_id) REFERENCES customer(cus_id) ON DELETE SET NULL
);


select * from pet;
select * from petstore;
select * from customer;


/*
1
SELECT pst_id, CONCAT(pst_street, ', ', pst_city, ', ', pst_state, ' ', pst_zip) AS full_address, pst_phone 
FROM petstore;

2
SELECT ps.pst_name, COUNT(p.pet_id) AS num_pets
FROM petstore ps
LEFT JOIN pet p ON ps.pst_id = p.pst_id
GROUP BY ps.pst_name;

3
SELECT ps.pst_id, c.cus_fname, c.cus_lname, c.cus_balance
FROM petstore ps
JOIN pet p ON ps.pst_id = p.pst_id
JOIN customer c ON p.cus_id = c.cus_id;

4
UPDATE customer
SET cus_lname = 'Valens'
WHERE cus_id = 2;

5
DELETE FROM pet
WHERE pet_id = 4;

6
INSERT INTO customer (cus_id, cus_fname, cus_lname, cus_street, cus_city, cus_state, cus_zip, cus_phone, cus_email, cus_balance, cus_total_sales, cus_notes)
VALUES 
(101, 'John', 'Doe', '123 Elm St', 'Springfield', 'IL', 62704, 2175551234, 'johndoe@email.com', 50.00, 200.00, 'Frequent customer'),
(102, 'Jane', 'Smith', '456 Oak St', 'Chicago', 'IL', 60616, 3125555678, 'janesmith@email.com', 75.00, 300.00, 'Loyal customer');
*/


