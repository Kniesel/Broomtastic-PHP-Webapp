/*drop tables to ensure that there are no other tables with the same name but different columns
 don't do this with a real database!*/
DROP TABLE IF EXISTS products; 
DROP TABLE IF EXISTS users; 

-- ------------------------------------------------------------------------

CREATE TABLE products (
	pk_productid SERIAL PRIMARY KEY,
	productname VARCHAR(256) NOT NULL,
	category VARCHAR(256) NOT NULL,
	price INT NOT NULL,
	description VARCHAR(256)
);

INSERT INTO products (productname, category, price) VALUES ("Snitch", "Balls", 100);
INSERT INTO products (productname, category, price) VALUES ("Quaffle", "Balls", 50);
INSERT INTO products (productname, category, price) VALUES ("Bludger", "Balls", 70);
INSERT INTO products (productname, category, price) VALUES ("Bludger (Set of two)", "Balls", 135);
INSERT INTO products (productname, category, price) VALUES ("How to Quidditch", "Books", 42);
INSERT INTO products (productname, category, price) VALUES ("Flying for dummies", "Books", 18);
INSERT INTO products (productname, category, price) VALUES ("Quidditch in a nutshell", "Books", 120);
INSERT INTO products (productname, category, price) VALUES ("Quidditch for dummies", "Books", 18);
INSERT INTO products (productname, category, price) VALUES ("Quidditch through the ages", "Books", 20);
INSERT INTO products (productname, category, price, description) VALUES ("Black Gloves", "Clothing", 420, "Made of high-quality dragon leather");
INSERT INTO products (productname, category, price) VALUES ("Shoes", "Clothing", 130);
INSERT INTO products (productname, category, price) VALUES ("Black Gloves", "Clothing", 170);
INSERT INTO products (productname, category, price) VALUES ("Golden Jacket", "Clothing", 90);
INSERT INTO products (productname, category, price) VALUES ("Red Jacket", "Clothing", 90);
INSERT INTO products (productname, category, price) VALUES ("Broomtastic 5000", "Brooms", 5000);
INSERT INTO products (productname, category, price) VALUES ("Broomtastic Kids", "Brooms", 900);
INSERT INTO products (productname, category, price) VALUES ("Broomtastic Senior", "Brooms", 900);
INSERT INTO products (productname, category, price) VALUES ("Broomtastic Traveller", "Brooms", 1400);

-- ------------------------------------------------------------------------

CREATE TABLE users (
	pk_username VARCHAR(55) PRIMARY KEY
);


INSERT INTO users (pk_username) VALUES ("Fresh D");
INSERT INTO users (pk_username) VALUES ("Doctor");
INSERT INTO users (pk_username) VALUES ("Harry Potter");
INSERT INTO users (pk_username) VALUES ("Neville Longbottom");
INSERT INTO users (pk_username) VALUES ("Gwenog Jones");
INSERT INTO users (pk_username) VALUES ("Amy Jones");
INSERT INTO users (pk_username) VALUES ("Sheld0r");