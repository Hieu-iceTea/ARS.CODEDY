# Create_by: Truong Thanh Tu
# Create_at: 17:30 2020-08-10

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

# Create Table user
DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user`
(
    `user_id`           INT AUTO_INCREMENT,

    `user_name`         VARCHAR(64)      NOT NULL,
    `email`             VARCHAR(64)      NOT NULL,
    `password`          VARCHAR(128)     NOT NULL,
    `level`             TINYINT UNSIGNED NOT NULL,
    `email_verified_at` DATETIME,
    `verification_code` VARCHAR(8),
    `remember_token`    VARCHAR(128),

    `gender`            BOOLEAN          NOT NULL,
    `first_name`        VARCHAR(64),
    `last_name`         VARCHAR(64),
    `phone`             VARCHAR(16),
    `address`           VARCHAR(128),

    `created_by`        NVARCHAR(32) DEFAULT 'ARS.CODEDY',
    `created_at`        DATETIME     DEFAULT CURRENT_TIME,
    `updated_by`        NVARCHAR(32) DEFAULT NULL,
    `updated_at`        DATETIME     DEFAULT NULL,
    `version`           INT          DEFAULT 1,
    `deleted`           BOOLEAN      DEFAULT FALSE,

    PRIMARY KEY (`user_id`)
) ENGINE InnoDB;

#Create Table extra_service
DROP TABLE IF EXISTS `extra_service`;
CREATE TABLE IF NOT EXISTS `extra_service`
(
    `additional_service_id` INT AUTO_INCREMENT,

    `name`                  VARCHAR(64)      NOT NULL,
    `price`                 INT(16) UNSIGNED NOT NULL,
    `image`                 VARCHAR(128)     NOT NULL,
    `description`           TEXT             NOT NULL,

    `created_by`            NVARCHAR(32) DEFAULT 'ARS.CODEDY',
    `created_at`            DATETIME     DEFAULT CURRENT_TIME,
    `updated_by`            NVARCHAR(32) DEFAULT NULL,
    `updated_at`            DATETIME     DEFAULT NULL,
    `version`               INT          DEFAULT 1,
    `deleted`               BOOLEAN      DEFAULT FALSE,

    PRIMARY KEY (`additional_service_id`)
) ENGINE InnoDB;

#Create Table airport
DROP TABLE IF EXISTS `airport`;
CREATE TABLE IF NOT EXISTS `airport`
(
    `airport_id`  INT AUTO_INCREMENT,

    `location`    VARCHAR(64)  NOT NULL,

    `name`        VARCHAR(32)  NOT NULL,
    `description` VARCHAR(128) NOT NULL,


    `created_by`  NVARCHAR(32) DEFAULT 'ARS.CODEDY',
    `created_at`  DATETIME     DEFAULT CURRENT_TIME,
    `updated_by`  NVARCHAR(32) DEFAULT NULL,
    `updated_at`  DATETIME     DEFAULT NULL,
    `version`     INT          DEFAULT 1,
    `deleted`     BOOLEAN      DEFAULT FALSE,

    PRIMARY KEY (`airport_id`)
) ENGINE InnoDB;

#Create Table plane
DROP TABLE IF EXISTS `plane`;
CREATE TABLE IF NOT EXISTS `plane`
(
    `plane_id`   INT AUTO_INCREMENT,

    `code`       VARCHAR(8)  NOT NULL,
    `name`       VARCHAR(32) NOT NULL,


    `created_by` NVARCHAR(32) DEFAULT 'ARS.CODEDY',
    `created_at` DATETIME     DEFAULT CURRENT_TIME,
    `updated_by` NVARCHAR(32) DEFAULT NULL,
    `updated_at` DATETIME     DEFAULT NULL,
    `version`    INT          DEFAULT 1,
    `deleted`    BOOLEAN      DEFAULT FALSE,

    PRIMARY KEY (`plane_id`)
) ENGINE InnoDB;

#Create Table price_seat_type
DROP TABLE IF EXISTS `price_seat_type`;
CREATE TABLE IF NOT EXISTS `price_seat_type`
(
    `price_seat_type_id`  INT AUTO_INCREMENT,

    `eco_price`           INT(16) UNSIGNED NOT NULL,
    `eco_qty_remain`      VARCHAR(16)      NOT NULL,
    `plus_price`          INT(16) UNSIGNED NOT NULL,
    `plus_qty_remain`     VARCHAR(16)      NOT NULL,
    `business_price`      INT(16) UNSIGNED NOT NULL,
    `business_qty_remain` VARCHAR(16)      NOT NULL,

    `created_by`          NVARCHAR(32) DEFAULT 'ARS.CODEDY',
    `created_at`          DATETIME     DEFAULT CURRENT_TIME,
    `updated_by`          NVARCHAR(32) DEFAULT NULL,
    `updated_at`          DATETIME     DEFAULT NULL,
    `version`             INT          DEFAULT 1,
    `deleted`             BOOLEAN      DEFAULT FALSE,

    PRIMARY KEY (`price_seat_type_id`)
) ENGINE InnoDB;

#Create Table promotion
DROP TABLE IF EXISTS `promotion`;
CREATE TABLE IF NOT EXISTS `promotion`
(
    `promotion_id`    INT AUTO_INCREMENT,

    `code`            VARCHAR(8)       NOT NULL,
    `title`           VARCHAR(32)      NOT NULL,
    `discount`        INT(16) UNSIGNED NOT NULL,
    `qty_total`       INT(4) UNSIGNED  NOT NULL,
    `qty_remain`      INT(4) UNSIGNED  NOT NULL,
    `expiration_date` DATETIME,
    `description`     TEXT             NOT NULL,

    `created_by`      NVARCHAR(32) DEFAULT 'ARS.CODEDY',
    `created_at`      DATETIME     DEFAULT CURRENT_TIME,
    `updated_by`      NVARCHAR(32) DEFAULT NULL,
    `updated_at`      DATETIME     DEFAULT NULL,
    `version`         INT          DEFAULT 1,
    `deleted`         BOOLEAN      DEFAULT FALSE,

    PRIMARY KEY (`promotion_id`)
) ENGINE InnoDB;

#Create Table pay_type
DROP TABLE IF EXISTS `pay_type`;
CREATE TABLE IF NOT EXISTS `pay_type`
(
    `pay_type_id` INT AUTO_INCREMENT,

    `name`        VARCHAR(16) NOT NULL,

    `created_by`  NVARCHAR(32) DEFAULT 'ARS.CODEDY',
    `created_at`  DATETIME     DEFAULT CURRENT_TIME,
    `updated_by`  NVARCHAR(32) DEFAULT NULL,
    `updated_at`  DATETIME     DEFAULT NULL,
    `version`     INT          DEFAULT 1,
    `deleted`     BOOLEAN      DEFAULT FALSE,

    PRIMARY KEY (`pay_type_id`)
) ENGINE InnoDB;

#Create Table  passenger
DROP TABLE IF EXISTS `passenger`;
CREATE TABLE IF NOT EXISTS `passenger`
(
    `passenger_id`   INT AUTO_INCREMENT,

    `ticket_id`      INT UNSIGNED        NOT NULL,

    `gender`         BOOLEAN             NOT NULL,
    `passenger_type` TINYINT(2) UNSIGNED NOT NULL,
    `first_name`     VARCHAR(16)         NOT NULL,
    `last_name`      VARCHAR(16)         NOT NULL,
    `dob`            DATE                NOT NULL,
    `with_passenger` DATETIME,

    `created_by`     NVARCHAR(32) DEFAULT 'ARS.CODEDY',
    `created_at`     DATETIME     DEFAULT CURRENT_TIME,
    `updated_by`     NVARCHAR(32) DEFAULT NULL,
    `updated_at`     DATETIME     DEFAULT NULL,
    `version`        INT          DEFAULT 1,
    `deleted`        BOOLEAN      DEFAULT FALSE,

    PRIMARY KEY (`passenger_id`)
) ENGINE InnoDB;

#Create Table  flight_schedule
DROP TABLE IF EXISTS `flight_schedule`;
CREATE TABLE IF NOT EXISTS `flight_schedule`
(
    `flight_schedule_id` INT AUTO_INCREMENT,

    `airport_from_id`    INT UNSIGNED NOT NULL,
    `airport_to_id`      INT UNSIGNED NOT NULL,
    `plane_id`           INT UNSIGNED NOT NULL,
    `price_seat_type_id` INT UNSIGNED NOT NULL,

    `code`               VARCHAR(8)   NOT NULL,
    `departure_at`       DATETIME     NOT NULL,
    `arrival_at`         DATETIME     NOT NULL,
    `description`        VARCHAR(256),


    `created_by`         NVARCHAR(32) DEFAULT 'ARS.CODEDY',
    `created_at`         DATETIME     DEFAULT CURRENT_TIME,
    `updated_by`         NVARCHAR(32) DEFAULT NULL,
    `updated_at`         DATETIME     DEFAULT NULL,
    `version`            INT          DEFAULT 1,
    `deleted`            BOOLEAN      DEFAULT FALSE,

    PRIMARY KEY (`flight_schedule_id`)
) ENGINE InnoDB;

#Create Table  ticket
DROP TABLE IF EXISTS `ticket`;
CREATE TABLE IF NOT EXISTS `ticket`
(
    `ticket_id`              INT AUTO_INCREMENT,

    `user_id`                INT UNSIGNED,
    `flight_schedule_id`     INT UNSIGNED               NOT NULL,
    `promotion_id`           INT UNSIGNED,
    `pay_type_id`            INT UNSIGNED               NOT NULL,
    `additional_service_ids` VARCHAR(128),

    `seat_type`              TINYINT UNSIGNED           NOT NULL,
    `status`                 TINYINT UNSIGNED DEFAULT 0 NOT NULL,

    `code`                   VARCHAR(8)                 NOT NULL,

    `contact_gender`         BOOLEAN                    NOT NULL,
    `contact_first_name`     VARCHAR(64)                NOT NULL,
    `contact_last_name`      VARCHAR(64)                NOT NULL,
    `contact_email`          VARCHAR(16)                NOT NULL,
    `contact_phone`          VARCHAR(16)                NOT NULL,
    `contact_address`        VARCHAR(128)               NOT NULL,

    `total_price`            INT(16) UNSIGNED           NOT NULL,
    `total_passenger`        INT(16) UNSIGNED           NOT NULL,
    `description`            VARCHAR(16)                NOT NULL,

    `created_by`             NVARCHAR(32)     DEFAULT 'ARS.CODEDY',
    `created_at`             DATETIME         DEFAULT CURRENT_TIME,
    `updated_by`             NVARCHAR(32)     DEFAULT NULL,
    `updated_at`             DATETIME         DEFAULT NULL,
    `version`                INT              DEFAULT 1,
    `deleted`                BOOLEAN          DEFAULT FALSE,

    PRIMARY KEY (`ticket_id`)
) ENGINE InnoDB;

# = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = #
#                                             Insert Data                                             #
# = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = #

#Password: 123456
INSERT INTO user (user_name, email, password, level, email_verified_at, verification_code, remember_token, gender,
                  first_name, last_name, phone, address)
VALUES ('user_name', 'email', '$2y$10$YKY51A9REcXLZVRAC87AcuXnC.Nb8WK8rD/WgfAVxPSAelLZHQf06', 0, '2020-08-08', NULL,
        NULL, 0, 'first_name', 'last_name', 'phone', 'address');


