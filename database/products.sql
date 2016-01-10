CREATE TABLE IF NOT EXISTS products (
	pk_productid SERIAL PRIMARY KEY,
	productname VARCHAR(256) NOT NULL,
	category VARCHAR(256) NOT NULL,
	price INT NOT NULL,
	description VARCHAR(256)
);

INSERT INTO products (productname, category, price) VALUES ("Snitch", "Balls", 100);
INSERT INTO products (productname, category, price) VALUES ("Quaffle", "Balls", 100);
INSERT INTO products (productname, category, price) VALUES ("How to Quidditch", "Books", 100);
INSERT INTO products (productname, category, price) VALUES ("Flying for dummies", "Books", 100);
INSERT INTO products (productname, category, price, description) VALUES ("Black Gloves", "Clothing", 100, "Made of high-quality dragon leather");
INSERT INTO products (productname, category, price) VALUES ("Black Gloves", "Clothing", 100);
INSERT INTO products (productname, category, price) VALUES ("Golden Jacket", "Clothing", 100);
INSERT INTO products (productname, category, price) VALUES ("Red Jacket", "Clothing", 100);
INSERT INTO products (productname, category, price) VALUES ("Broomtastic 5000", "Brooms", 100);
INSERT INTO products (productname, category, price) VALUES ("Snitch", "Balls", 100);
INSERT INTO products (productname, category, price) VALUES ("Snitch", "Balls", 100);
INSERT INTO products (productname, category, price) VALUES ("Snitch", "Balls", 100);
INSERT INTO products (productname, category, price) VALUES ("Snitch", "Balls", 100);
INSERT INTO products (productname, category, price) VALUES ("Snitch", "Balls", 100);
INSERT INTO products (productname, category, price) VALUES ("Snitch", "Balls", 100);
INSERT INTO products (productname, category, price) VALUES ("Snitch", "Balls", 100);
INSERT INTO products (productname, category, price) VALUES ("Snitch", "Balls", 100);
INSERT INTO products (productname, category, price) VALUES ("Snitch", "Balls", 100);

