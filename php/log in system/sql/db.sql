CREATE DATABASE users;

USE users;

CREATE TABLE clients (
  id SERIAL PRIMARY KEY,
  user_name TEXT NOT NULL UNIQUE,
  email TEXT NOT NULL,
  password TEXT NOT NULL,
);

CREATE TABLE products (
  id SERIAL PRIMARY KEY,
  product_name TEXT NOT NULL,
  price NUMERIC NOT NULL,
  user_name TEXT NOT NULL REFERENCES clients(user_name)
);
