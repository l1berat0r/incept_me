CREATE USER 'secret_user'@'%' IDENTIFIED BY 'FLAG2{s8yDu+RvEh4a8Q65DKf9fx3l}';

CREATE SCHEMA `app_1337` DEFAULT CHARACTER SET utf8 COLLATE utf8_polish_ci ;
GRANT ALL PRIVILEGES ON `app_1337`.* TO 'secret_user'@'%';


CREATE TABLE `app_1337`.`secret_data` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `content` TEXT NULL,
  `secret_content` TEXT NULL,
  `order` INT NULL,
  PRIMARY KEY (`id`),
  UNIQUE INDEX `id_UNIQUE` (`id` ASC));


INSERT INTO `app_1337`.`secret_data` (`content`, `secret_content`, `order`) VALUES
('XdlZoTkd1dm', Null, 10),
('fbWVzc2FnZS', Null, 2),
('ZyAzIi4gInN', Null, 5),
('I6ICJZb3UgZ', Null, 3),
('m91bmQgZmxh', Null, 4),
('SDlFMW16aFh', Null, 9),
('lY3JldCBmbG', 'FLAG4{UotUvZc4I0j3ueqxz8mu0bwm}', 6),
('FnIjogIkZMQ', Null, 7),
('Ucze01YUWJj', Null, 8),
('eyJzZWNyZXR', Null, 1),
('t1Yn0ifQo=', Null, 11)
;
