DROP TABLE IF EXISTS Product;
DROP TABLE IF EXISTS User;

CREATE TABLE Product (
    code INTEGER NOT NULL PRIMARY KEY,
    brand TEXT NOT NULL,
    name TEXT NOT NULL,
    price FLOAT NOT NULL,
    size TEXT NOT NULL,
    category TEXT NOT NULL,
    durability INTEGER NOT NULL,
    description TEXT,
    image TEXT,
    color TEXT,
    quantity INTEGER NOT NULL,
    carbon_footprint INTEGER,


    CONSTRAINT chk_price CHECK(price >= 0),
    CONSTRAINT chk_quantity CHECK(quantity >= 0)
);

CREATE TABLE User (
    username TEXT NOT NULL PRIMARY KEY,
    email TEXT NOT NULL UNIQUE,
    userpassword TEXT NOT NULL
);