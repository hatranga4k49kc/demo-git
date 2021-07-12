CREATE DATABASE `shop_demo` DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;
USE shop_demo;

CREATE TABLE IF NOT EXISTS `category` (
  `id` INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(255) NOT NULL UNIQUE,
  `status` TINYINT DEFAULT 1
);

CREATE TABLE IF NOT EXISTS `product` (
  `id` INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(100) NOT NULL UNIQUE,
  `price` float NOT NULL,
  `image` VARCHAR(255),
  `category_id` INT NOT NULL
);
ALTER TABLE `product`
ADD CONSTRAINT `fk_product_category`
  FOREIGN KEY (`category_id`)
  REFERENCES `category` (`id`)