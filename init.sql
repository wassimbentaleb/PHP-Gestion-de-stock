CREATE SCHEMA `gestion-stock` ;

CREATE TABLE `gestion-stock`.`users` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `username` VARCHAR(45) NOT NULL,
  `password` VARCHAR(45) NOT NULL,
  `type` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`id`));

CREATE TABLE `gestion-stock`.`products` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(45) NULL,
  `price` DECIMAL(2) NULL,
  `quantity` VARCHAR(45) NULL,
  `tva` DECIMAL(2) NULL,
  PRIMARY KEY (`id`));

CREATE TABLE `gestion-stock`.`deliveries` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(45) NULL,
  `description` VARCHAR(45) NULL,
  `date` DATETIME NULL,
  `amount` DECIMAL(2) NULL,
  PRIMARY KEY (`id`));

CREATE TABLE `gestion-stock`.`deliveredproducts` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `deliveryId` INT NULL,
  `productId` INT NULL,
  `quantity` INT NULL,
  PRIMARY KEY (`id`),
  INDEX `deliveryId_fk_idx` (`deliveryId` ASC) VISIBLE,
  INDEX `productId_fk_idx` (`productId` ASC) VISIBLE,
  CONSTRAINT `deliveryId_fk`
    FOREIGN KEY (`deliveryId`)
    REFERENCES `gestion-stock`.`deliveries` (`id`)
    ON DELETE CASCADE
    ON UPDATE CASCADE,
  CONSTRAINT `productId_fk`
    FOREIGN KEY (`productId`)
    REFERENCES `gestion-stock`.`products` (`id`)
    ON DELETE CASCADE
    ON UPDATE CASCADE);

INSERT INTO `gestion-stock`.`users` (`username`, `password`, `type`) VALUES ('admin', 'admin', 'admin');
INSERT INTO `gestion-stock`.`users` (`username`, `password`, `type`) VALUES ('user', 'user', 'user');

INSERT INTO `gestion-stock`.`products` (`name`, `price`, `quantity`, `tva`) VALUES ('product1', '23', '100', '18');
INSERT INTO `gestion-stock`.`products` (`name`, `price`, `quantity`, `tva`) VALUES ('product2', '65', '120', '18');
INSERT INTO `gestion-stock`.`products` (`name`, `price`, `quantity`, `tva`) VALUES ('product3', '13', '3000', '12');
