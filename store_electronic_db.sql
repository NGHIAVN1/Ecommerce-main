USE store_electronic_db;

-- Create admin table
CREATE TABLE `admin` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `userid` VARCHAR(100) NOT NULL,
  `pass` VARCHAR(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `admin` (`id`, `userid`, `pass`) VALUES
(1, 'admin', 'admin');

-- Create users table
CREATE TABLE `users` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `f_name` VARCHAR(100) NOT NULL,
  `l_name` VARCHAR(100) NOT NULL,
  `email` VARCHAR(100) NOT NULL,
  `pass` VARCHAR(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Create product table
CREATE TABLE `product` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(100) NOT NULL,
  `catagory` VARCHAR(100) NOT NULL,
  `description` VARCHAR(100) NOT NULL,
  `quantity` INT NOT NULL,
  `price` INT NOT NULL,
  `imgname` VARCHAR(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Create cart table
CREATE TABLE `cart` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `userid` INT NOT NULL,
  `productid` INT NOT NULL,
  `name` VARCHAR(100) NOT NULL,
  `quantity` INT NOT NULL,
  `price` INT NOT NULL,
  PRIMARY KEY (`id`),
  FOREIGN KEY (`userid`) REFERENCES `users`(`id`) ON DELETE CASCADE,
  FOREIGN KEY (`productid`) REFERENCES `product`(`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Create orders table
CREATE TABLE `orders` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `paymentid` INT NOT NULL,
  `userid` INT NOT NULL,
  `name` VARCHAR(100) NOT NULL,
  `address` VARCHAR(100) NOT NULL,
  `phone` VARCHAR(20) NOT NULL,
  `totalprice` INT NOT NULL,
  `status` VARCHAR(100) DEFAULT NULL,
  `created_at` TIMESTAMP(6) NOT NULL DEFAULT CURRENT_TIMESTAMP(6),
  PRIMARY KEY (`id`),
  FOREIGN KEY (`userid`) REFERENCES `users`(`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Create orders_details table
CREATE TABLE `orders_details` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `order_id` INT NOT NULL,
  `productid` INT NOT NULL,
  `name` VARCHAR(100) NOT NULL,
  `quantity` INT NOT NULL,
  `price` INT NOT NULL,
  PRIMARY KEY (`id`),
  FOREIGN KEY (`order_id`) REFERENCES `orders`(`id`) ON DELETE CASCADE,
  FOREIGN KEY (`productid`) REFERENCES `product`(`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Optional: Set AUTO_INCREMENT starting values
ALTER TABLE `admin` AUTO_INCREMENT = 3;
ALTER TABLE `cart` AUTO_INCREMENT = 45;
ALTER TABLE `orders` AUTO_INCREMENT = 5;
ALTER TABLE `product` AUTO_INCREMENT = 17;
ALTER TABLE `users` AUTO_INCREMENT = 5;

-- Cleanup settings (for dump compatibility)
SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT;
SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS;
SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION;
admin