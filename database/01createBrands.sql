-- создаем новую таблицу с марками авто
CREATE TABLE `brands` (
    id INT PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(25) NOT NULL,
    name_RUS VARCHAR(25)
);
-- добавляем данные `brand`,`brand_RUS` в созданную таблицу
INSERT INTO `brands`
(`name`, `name_RUS`) SELECT `brand`,`brand_RUS` FROM `autos`;

