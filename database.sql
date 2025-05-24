CREATE DATABASE IF NOT EXISTS zomato_clone;
USE zomato_clone;

CREATE TABLE IF NOT EXISTS restaurants (
  id INT AUTO_INCREMENT PRIMARY KEY,
  name VARCHAR(100),
  image VARCHAR(255)
);

INSERT INTO restaurants (name, image) VALUES
('Spicy Kitchen', 'restaurant1.jpg'),
('Urban Tadka', 'restaurant2.jpg'),
('Foodie Hub', 'restaurant3.jpg');