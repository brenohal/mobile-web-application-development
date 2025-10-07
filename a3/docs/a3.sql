USE bmo22a;

-- Clean slate
DROP TABLE IF EXISTS pet;
DROP TABLE IF EXISTS customer;
DROP TABLE IF EXISTS petstore;

-- Table: petstore (pst_id AUTO_INCREMENT)
CREATE TABLE IF NOT EXISTS petstore (
    pst_id SMALLINT PRIMARY KEY AUTO_INCREMENT NOT NULL,
    pst_name VARCHAR(30) NOT NULL,
    pst_street VARCHAR(30) NOT NULL,
    pst_city VARCHAR(30) NOT NULL,
    pst_state CHAR(2) NOT NULL,
    pst_zip INT(9) NOT NULL,
    pst_phone BIGINT NOT NULL,
    pst_email VARCHAR(100)NOT NULL,
    pst_url VARCHAR(100) NOT NULL,
    pst_ytd_sales DECIMAL(10,2) NOT NULL,
    pst_notes VARCHAR(255)
) ENGINE=InnoDB;

-- Table: customer (cus_id AUTO_INCREMENT)
CREATE TABLE customer (
    cus_id SMALLINT PRIMARY KEY AUTO_INCREMENT NOT NULL,
    cus_fname VARCHAR(15)NOT NULL,
    cus_lname VARCHAR(30)NOT NULL,
    cus_street VARCHAR(30) NOT NULL,
    cus_city VARCHAR(30) NOT NULL,
    cus_state CHAR(2) NOT NULL,
    cus_zip INT NOT NULL,
    cus_phone BIGINT NOT NULL,
    cus_email VARCHAR(100)NOT NULL,
    cus_balance DECIMAL(6,2) NOT NULL,
    cus_total_sales DECIMAL(6,2) NOT NULL,
    cus_notes VARCHAR(255)
) ENGINE=InnoDB;

-- Table: pet (pet_id AUTO_INCREMENT)
CREATE TABLE pet (
    pet_id SMALLINT PRIMARY KEY AUTO_INCREMENT NOT NULL,
    pst_id SMALLINT NOT NULL,
    cus_id SMALLINT NULL,
    pet_type VARCHAR(45) NOT NULL,
    pet_sex ENUM('m', 'f') NOT NULL,
    pet_cost DECIMAL(6,2) NOT NULL,
    pet_price DECIMAL(6,2) NOT NULL,
    pet_age TINYINT NOT NULL,
    pet_color VARCHAR(30) NOT NULL,
    pet_sale_date DATE,
    pet_vaccine ENUM('y', 'n') NOT NULL, 
    pet_neuter ENUM('y', 'n') NOT NULL,
    pet_notes VARCHAR(255),
    FOREIGN KEY (pst_id) REFERENCES petstore(pst_id) ON DELETE CASCADE,
    FOREIGN KEY (cus_id) REFERENCES customer(cus_id) ON DELETE SET NULL
) ENGINE=InnoDB;


INSERT INTO petstore (pst_name, pst_street, pst_city, pst_state, pst_zip, pst_phone, pst_email, pst_url, pst_ytd_sales, pst_notes) VALUES
('Paws & Claws','101 Maple Ave','Springfield','IL',62704,2175550101,'info@pawsclaws.com','http://pawsclaws.com',152345.75,'Flagship location'),
('Happy Tails','22 Oak St','Chicago','IL',60616,3125550222,'hello@happytails.com','http://happytails.com',201450.20,'Carries exotics'),
('Furry Friends','7 Pine Rd','Naperville','IL',60540,6305550007,'contact@furryf.com','http://furryf.com',98450.00,'Small animals focus'),
('Pet Planet','450 Elm Blvd','Peoria','IL',61602,3095550450,'team@petplanet.io','http://petplanet.io',123890.90,'Grooming on site'),
('Critter Corner','9 Cedar Ct','Evanston','IL',60201,8475550009,'shop@crittercorner.net','http://crittercorner.net',76420.55,'Aquatics specialist'),
('Tailwaggers','600 Birch Ln','Rockford','IL',61101,8155550600,'hi@tailwaggers.co','http://tailwaggers.co',110230.10,'Training classes'),
('Whisker Works','33 River Dr','Aurora','IL',60506,6305550033,'care@whiskerworks.com','http://whiskerworks.com',90560.75,'Cat-focused'),
('Pet Depot','810 Market St','Joliet','IL',60431,7795550810,'support@petdepot.org','http://petdepot.org',134500.00,'Large warehouse'),
('Best Buds','14 Park Ave','Skokie','IL',60076,8475550014,'contact@bestbuds.pet','http://bestbuds.pet',67510.40,'Boutique'),
('Puptown','75 Lake Shore Dr','Waukegan','IL',60085,2245550075,'hello@puptown.com','http://puptown.com',118775.30,'Boarding available');

INSERT INTO customer (cus_fname, cus_lname, cus_street, cus_city, cus_state, cus_zip, cus_phone, cus_email, cus_balance, cus_total_sales, cus_notes) VALUES
('John','Doe','123 Elm St','Springfield','IL',62704,2175551234,'john.doe@email.com',50.00,200.00,'Frequent customer'),
('Jane','Smith','456 Oak St','Chicago','IL',60616,3125555678,'jane.smith@email.com',75.00,300.00,'Loyal customer'),
('Carlos','Mendez','89 Pine Ave','Peoria','IL',61602,3095558989,'c.mendez@email.com',0.00,150.00,'Prefers small dogs'),
('Aisha','Khan','12 Cedar Ct','Evanston','IL',60201,8475551212,'aisha.khan@email.com',25.50,450.00,'Cat owner'),
('Luke','Nguyen','77 Birch Ln','Rockford','IL',61101,8155557777,'luke.nguyen@email.com',0.00,0.00,'New customer'),
('Mia','Rossi','38 River Dr','Aurora','IL',60506,6305553838,'mia.rossi@email.com',10.00,220.00,'Reptile hobbyist'),
('Noah','Patel','910 Market St','Joliet','IL',60431,7795550910,'noah.patel@email.com',5.00,120.00,'Student discount'),
('Sara','Lee','5 Park Ave','Skokie','IL',60076,8475555005,'sara.lee@email.com',0.00,90.00,'Fish keeper'),
('Emily','Clark','2 Lake Dr','Waukegan','IL',60085,2245552002,'emily.clark@email.com',15.75,310.00,'Prefers appointments'),
('Omar','Ali','64 Maple Ave','Naperville','IL',60540,6305556464,'omar.ali@email.com',0.00,510.00,'Premium member');


INSERT INTO pet (pst_id, cus_id, pet_type, pet_sex, pet_cost, pet_price, pet_age, pet_color, pet_sale_date, pet_vaccine, pet_neuter, pet_notes) VALUES
(1,  1,  'Dog - Labrador',       'm', 450.00, 799.99, 2, 'Yellow',  '2025-07-15', 'y','n','Energetic'),
(2,  2,  'Cat - Siamese',        'f', 120.00, 299.99, 1, 'Cream',   '2025-08-02', 'y','n','Vocal'),
(3,  NULL,'Hamster - Syrian',    'm',  10.00,  24.99, 1, 'Golden',  NULL,         'n','n','Available'),
(4,  3,  'Dog - Beagle',         'f', 300.00, 549.99, 3, 'Tri-color','2025-06-28','y','y','Family friendly'),
(5,  4,  'Cat - Maine Coon',     'm', 200.00, 449.99, 2, 'Brown',   '2025-05-20', 'y','n','Large breed'),
(6,  NULL,'Gecko - Leopard',     'm',  35.00,  79.99, 1, 'Spotted', NULL,         'n','n','Beginner reptile'),
(7,  6,  'Rabbit - Holland Lop', 'f',  25.00,  59.99, 1, 'White',   '2025-08-18', 'y','n','Gentle'),
(8,  7,  'Fish - Betta',         'm',   2.00,   9.99, 1, 'Blue',    '2025-09-01', 'n','n','Low maintenance'),
(9,  NULL,'Bird - Parakeet',     'f',  15.00,  34.99, 1, 'Green',   NULL,         'y','n','Talkative'),
(10, 8,  'Dog - Shiba Inu',      'm', 500.00, 949.99, 2, 'Red',     '2025-09-10', 'y','y','Independent');


SELECT * FROM petstore;
SELECT * FROM customer;
SELECT * FROM pet;
