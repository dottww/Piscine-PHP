SELECT upper(`u`.`last_name`) AS `NAME`, `u`.`first_name`, `s`.`price`
FROM `user_card` `u`
INNER JOIN `member` `m` ON `u`.`id_user` = `m`.`id_user_card`
INNER JOIN `subscription` `s` ON `m`.`id_sub` = `s`.`id_sub` WHERE `s`.`price` > '42'
ORDER BY `u`.`last_name` ASC, `u`.`first_name` ASC;