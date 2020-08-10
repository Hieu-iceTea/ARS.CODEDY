# = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = #
#                                           Create DataBase                                           #
# = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = #

# Create DataBase
DROP DATABASE IF EXISTS `ARS_CODEDY`;
CREATE DATABASE IF NOT EXISTS `ARS_CODEDY` CHARACTER SET utf8 COLLATE utf8_unicode_ci;

USE `ARS_CODEDY`;
SET time_zone = '+7:00';

# = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = #
#                                            Create Tables                                            #
# = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = #

# Create Table
DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
    `user_id` INT AUTO_INCREMENT,

    `user_name` VARCHAR(64) NOT NULL,
    `email` VARCHAR(64) NOT NULL,
    `password` VARCHAR(128) NOT NULL,
    `level`  TINYINT UNSIGNED NOT NULL,
    `email_verified_at` DATETIME,
    `verification_code` VARCHAR(8),
    `remember_token` VARCHAR(128),

    `gender` BOOLEAN NOT NULL,
    `first_name` VARCHAR(64),
    `last_name` VARCHAR(64),
    `phone` VARCHAR(16),
    `address` VARCHAR(128),

    `created_by` NVARCHAR(32) DEFAULT 'Hieu-iceTea',
    `created_at` DATETIME DEFAULT CURRENT_TIME,
    `updated_by` NVARCHAR(32) DEFAULT NULL,
    `updated_at` DATETIME DEFAULT NULL,
    `version` INT DEFAULT 1,
    `deleted` BOOLEAN DEFAULT FALSE,

    PRIMARY KEY (`user_id`)
) ENGINE InnoDB;

# = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = #
#                                             Insert Data                                             #
# = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = #

#Password: 123456
INSERT INTO user (user_name, email, password, level, email_verified_at, verification_code, remember_token, gender, first_name, last_name, phone, address)
VALUES ('user_name', 'email', '$2y$10$YKY51A9REcXLZVRAC87AcuXnC.Nb8WK8rD/WgfAVxPSAelLZHQf06', 0, '2020-08-08', NULL, NULL, 0, 'first_name', 'last_name', 'phone', 'address');



