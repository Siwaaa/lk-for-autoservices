UPDATE `autos` , `brands`
SET `autos`.`brand` = `brands`.`id`
WHERE `brands`.`name_RUS` = `autos`.`brand_RUS`

-- далее добавляем внешний ключ для таблицы авто
ALTER TABLE `autos` ADD FOREIGN KEY (`brand`) REFERENCES `brands`(`id`) ON DELETE RESTRICT ON UPDATE RESTRICT;
