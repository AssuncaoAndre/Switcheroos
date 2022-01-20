DROP TABLE IF EXISTS Product;
DROP TABLE IF EXISTS User;

CREATE TABLE Product (
    productCode INTEGER NOT NULL PRIMARY KEY,
    productBrand TEXT NOT NULL,
    productName TEXT NOT NULL,
    productPrice FLOAT NOT NULL,
    productSize TEXT NOT NULL,
    productColor TEXT NOT NULL,
    productDurability INTEGER NOT NULL,
    productDescription TEXT,
    productImage TEXT,
    quantity INTEGER NOT NULL,
    rewardPoints INTEGER,


    CONSTRAINT chk_reward CHECK(rewardPoints >= 0),
    CONSTRAINT chk_productPrice CHECK(productPrice >= 0),
    CONSTRAINT chk_quantity CHECK(quantity >= 0)
);

CREATE TABLE User (
    username TEXT NOT NULL PRIMARY KEY,
    email TEXT NOT NULL UNIQUE,
    userpassword TEXT NOT NULL
);