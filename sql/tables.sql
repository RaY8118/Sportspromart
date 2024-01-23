CREATE TABLE items (
    id INT PRIMARY KEY AUTO_INCREMENT,
    category VARCHAR(255) NOT NULL,
    item_name VARCHAR(255) NOT NULL,
    gender VARCHAR(10) NOT NULL,
    size VARCHAR(5),
    price DECIMAL(10, 2) NOT NULL,
    quantity INT NOT NULL,
    image_path VARCHAR(255) NOT NULL,
    CONSTRAINT chk_gender CHECK (gender IN ('Male', 'Female', 'Both')),
    CONSTRAINT chk_size CHECK (size IN ('S', 'M', 'L', 'XL', 'XXL')),
    CONSTRAINT chk_category CHECK (category IN ('Clothes', 'Shoes', 'Accessories'))
);


INSERT INTO items (category, item_name, gender, size, price, quantity, image_path)
VALUES
    ('Clothes', 'Men\'s T-shirt 1', 'Male', 'M', 19.99, 50, 'img/mens_tshirt1.jpg'),
    ('Clothes', 'Men\'s T-shirt 1', 'Male', 'L', 21.99, 40, 'img/mens_tshirt.jpg'),
    ('Clothes', 'Men\'s T-shirt 2', 'Male', 'XL', 23.99, 35, 'img/mens_tshirt2.jpg'),
    ('Clothes', 'Men\'s T-shirt 2', 'Male', 'S', 18.99, 45, 'img/mens_tshirt2.jpg'),

    ('Clothes', 'Men\'s T-shirt 3', 'Male', 'M', 19.99, 50, 'img/mens_tshirt3.jpg'),
    ('Clothes', 'Men\'s T-shirt 3', 'Male', 'L', 21.99, 40, 'img/mens_tshirt3.jpg'),
    ('Clothes', 'Men\'s T-shirt 4', 'Male', 'XL', 23.99, 35, 'img/mens_tshirt4.jpg'),
    ('Clothes', 'Men\'s T-shirt 4', 'Male', 'S', 18.99, 45, 'img/mens_tshirt4.jpg'),

    ('Clothes', 'Women\'s T-shirt 1', 'Female', 'S', 18.99, 40, 'img/womens_tshirt1.jpg'),
    ('Clothes', 'Women\'s T-shirt 2', 'Female', 'M', 19.99, 35, 'img/womens_tshirt2.jpg'),
    ('Clothes', 'Women\'s T-shirt 3', 'Female', 'L', 21.99, 30, 'img/womens_tshirt3.jpg'),
    ('Clothes', 'Women\'s T-shirt 4', 'Female', 'XL', 23.99, 25, 'img/womens_tshirt4.jpg'),

    ('Clothes', 'Women\'s T-shirt 1', 'Female', 'S', 18.99, 40, 'img/womens_tshirt1.jpg'),
    ('Clothes', 'Women\'s T-shirt 1', 'Female', 'M', 19.99, 35, 'img/womens_tshirt1.jpg'),
    ('Clothes', 'Women\'s T-shirt 2', 'Female', 'L', 21.99, 30, 'img/womens_tshirt2.jpg'),
    ('Clothes', 'Women\'s T-shirt 2', 'Female', 'XL', 23.99, 25, 'img/womens_tshirt2.jpg'),

    ('Clothes', 'Men\'s Tracksuit 3', 'Male', 'M', 49.99, 30, 'img/mens_tshirt3.jpg'),
    ('Clothes', 'Men\'s Tracksuit 3', 'Male', 'L', 51.99, 25, 'img/mens_tshirt3.jpg'),
    ('Clothes', 'Men\'s Tracksuit 4', 'Male', 'XL', 53.99, 20, 'img/mens_tshirt4.jpg'),
    ('Clothes', 'Men\'s Tracksuit 4', 'Male', 'S', 47.99, 28, 'img/mens_tshirt4.jpg'),

    ('Clothes', 'Women\'s Tracksuit 1', 'Female', 'S', 47.99, 25, 'img/womens_tshirt1.jpg'),
    ('Clothes', 'Women\'s Tracksuit 1', 'Female', 'M', 49.99, 20, 'img/womens_tshirt1.jpg'),
    ('Clothes', 'Women\'s Tracksuit 2', 'Female', 'L', 51.99, 18, 'img/womens_tshirt2.jpg'),
    ('Clothes', 'Women\'s Tracksuit 2', 'Female', 'XL', 53.99, 15, 'img/womens_tshirt2.jpg'),

    ('Clothes', 'Women\'s Tracksuit 3', 'Female', 'S', 47.99, 25, 'img/womens_tshirt3.jpg'),
    ('Clothes', 'Women\'s Tracksuit 3', 'Female', 'M', 49.99, 20, 'img/womens_tshirt3.jpg'),
    ('Clothes', 'Women\'s Tracksuit 4', 'Female', 'L', 51.99, 18, 'img/womens_tshirt4.jpg'),
    ('Clothes', 'Women\'s Tracksuit 4', 'Female', 'XL', 53.99, 15, 'img/womens_tshirt4.jpg'),

    ('Shoes', 'Men\'s Running Shoes 1', 'Male', 'S', 79.99, 20, 'img/mens_tshirt1.jpg'),
    ('Shoes', 'Men\'s Running Shoes 1', 'Male', 'M', 81.99, 18, 'img/mens_tshirt1.jpg'),
    ('Shoes', 'Men\'s Running Shoes 2', 'Male', 'L', 74.99, 22, 'img/mens_tshirt2.jpg'),
    ('Shoes', 'Men\'s Running Shoes 2', 'Male', 'XL', 76.99, 25, 'img/mens_tshirt2.jpg'),

    ('Shoes', 'Men\'s Running Shoes 3', 'Male', 'S', 79.99, 20, 'img/mens_tshirt3.jpg'),
    ('Shoes', 'Men\'s Running Shoes 3', 'Male', 'M', 81.99, 18, 'img/mens_tshirt3.jpg'),
    ('Shoes', 'Men\'s Running Shoes 4', 'Male', 'L', 74.99, 22, 'img/mens_tshirt4.jpg'),
    ('Shoes', 'Men\'s Running Shoes 4', 'Male', 'XL', 76.99, 25, 'img/mens_tshirt4.jpg'),

    ('Shoes', 'Women\'s Running Shoes 1', 'Female', 'S', 74.99, 18, 'img/womens_tshirt1.jpg'),
    ('Shoes', 'Women\'s Running Shoes 1', 'Female', 'M', 76.99, 15, 'img/womens_tshirt1.jpg'),
    ('Shoes', 'Women\'s Running Shoes 2', 'Female', 'L', 71.99, 20, 'img/womens_tshirt2.jpg'),
    ('Shoes', 'Women\'s Running Shoes 2', 'Female', 'XL', 73.99, 22, 'img/womens_tshirt2.jpg'),

    ('Shoes', 'Women\'s Running Shoes 3', 'Female', 'S', 74.99, 18, 'img/womens_tshirt3.jpg'),
    ('Shoes', 'Women\'s Running Shoes 3', 'Female', 'M', 76.99, 15, 'img/womens_tshirt3.jpg'),
    ('Shoes', 'Women\'s Running Shoes 4', 'Female', 'L', 71.99, 20, 'img/womens_tshirt4.jpg'),
    ('Shoes', 'Women\'s Running Shoes 4', 'Female', 'XL', 73.99, 22, 'img/womens_tshirt4.jpg'),

    ('Accessories', 'Sports Water Bottle 1', 'Both', NULL, 9.99, 100, 'Reusable water bottle for sports activities'),
    ('Accessories', 'Gym Towel 1', 'Both', NULL, 14.99, 80, 'Quick-dry towel for the gym'),
    ('Accessories', 'Wrist Sweatbands 1', 'Both', NULL, 7.99, 120, 'Cotton wristbands for added comfort during workouts'),

    ('Accessories', 'Sports Water Bottle 2', 'Both', NULL, 9.99, 90, 'Reusable water bottle for sports activities'),
    ('Accessories', 'Gym Towel 2', 'Both', NULL, 14.99, 70, 'Quick-dry towel for the gym'),
    ('Accessories', 'Wrist Sweatbands 2', 'Both', NULL, 7.99, 110, 'Cotton wristbands for added comfort during workouts'),

    ('Accessories', 'Sports Water Bottle 3', 'Both', NULL, 9.99, 80, 'Reusable water bottle for sports activities'),
    ('Accessories', 'Gym Towel 3', 'Both', NULL, 14.99, 60, 'Quick-dry towel for the gym'),
    ('Accessories', 'Wrist Sweatbands 3', 'Both', NULL, 7.99, 100, 'Cotton wristbands for added comfort during workouts');


CREATE TABLE `users` (
  `id` INT PRIMARY KEY AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `contact` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `role` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;




CREATE TABLE `users_items` (
  `id` int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL DEFAULT 1,  -- Add a quantity column
  `price` decimal(10, 2) NOT NULL,  -- Add a price column
  `status` enum('Added to cart','Confirmed') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
