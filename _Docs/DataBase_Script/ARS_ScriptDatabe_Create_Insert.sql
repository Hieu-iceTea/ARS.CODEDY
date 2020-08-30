# Created_by: Hieu iceTea x Truong Thanh Tu
# Created_at: 17:30 2020-08-10
# Updated_at: 22:00 2020-08-26

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

    `user_name`         VARCHAR(64) UNIQUE         NOT NULL,
    `email`             VARCHAR(64)                NOT NULL,
    `password`          VARCHAR(128)               NOT NULL,
    `level`             TINYINT UNSIGNED DEFAULT 3 NOT NULL,

    `email_verified_at` DATETIME,
    `verification_code` VARCHAR(8)       DEFAULT NULL,
    `remember_token`    VARCHAR(128)     DEFAULT NULL,

    `image`             VARCHAR(128),
    `gender`            BOOLEAN                    NOT NULL,
    `first_name`        VARCHAR(64),
    `last_name`         VARCHAR(64),
    `dob`               DATE,
    `phone`             VARCHAR(16),
    `address`           VARCHAR(128),

    `loyalty_number`    INT(8),
    `active`            BOOLEAN          DEFAULT FALSE,

    `created_by`        NVARCHAR(32)     DEFAULT 'ARS.CODEDY',
    `created_at`        DATETIME         DEFAULT CURRENT_TIME,
    `updated_by`        NVARCHAR(32)     DEFAULT NULL,
    `updated_at`        DATETIME         DEFAULT NULL,
    `version`           INT              DEFAULT 1,
    `deleted`           BOOLEAN          DEFAULT FALSE,

    PRIMARY KEY (`user_id`)
) ENGINE InnoDB;

#Create Table extra_service
DROP TABLE IF EXISTS `extra_service`;
CREATE TABLE IF NOT EXISTS `extra_service`
(
    `extra_service_id` INT AUTO_INCREMENT,

    `name`             VARCHAR(64)                NOT NULL,
    `price`            INT(16) UNSIGNED           NOT NULL,
    `image`            VARCHAR(128)               NOT NULL,
    `active`           BOOLEAN      DEFAULT FALSE NOT NULL,
    `description`      TEXT,

    `created_by`       NVARCHAR(32) DEFAULT 'ARS.CODEDY',
    `created_at`       DATETIME     DEFAULT CURRENT_TIME,
    `updated_by`       NVARCHAR(32) DEFAULT NULL,
    `updated_at`       DATETIME     DEFAULT NULL,
    `version`          INT          DEFAULT 1,
    `deleted`          BOOLEAN      DEFAULT FALSE,

    PRIMARY KEY (`extra_service_id`)
) ENGINE InnoDB;

#Create Table airport
DROP TABLE IF EXISTS `airport`;
CREATE TABLE IF NOT EXISTS `airport`
(
    `airport_id`  INT AUTO_INCREMENT,

    `location`    VARCHAR(64)                NOT NULL,

    `code`        VARCHAR(8)                 NOT NULL,
    `name`        VARCHAR(32)                NOT NULL,
    `image`       VARCHAR(128)               NOT NULL,
    `active`      BOOLEAN      DEFAULT FALSE NOT NULL,
    `description` TEXT,

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
    `plane_id`    INT AUTO_INCREMENT,

    `code`        VARCHAR(8)                 NOT NULL,
    `name`        VARCHAR(32)                NOT NULL,
    `active`      BOOLEAN      DEFAULT FALSE NOT NULL,
    `description` TEXT,

    `created_by`  NVARCHAR(32) DEFAULT 'ARS.CODEDY',
    `created_at`  DATETIME     DEFAULT CURRENT_TIME,
    `updated_by`  NVARCHAR(32) DEFAULT NULL,
    `updated_at`  DATETIME     DEFAULT NULL,
    `version`     INT          DEFAULT 1,
    `deleted`     BOOLEAN      DEFAULT FALSE,

    PRIMARY KEY (`plane_id`)
) ENGINE InnoDB;

#Create Table price_seat_type
DROP TABLE IF EXISTS `price_seat_type`;
CREATE TABLE IF NOT EXISTS `price_seat_type`
(
    `price_seat_type_id`  INT AUTO_INCREMENT,

    `eco_price`           INT(16) UNSIGNED,
    `eco_qty_remain`      INT(16) UNSIGNED,
    `eco_qty_total`       INT(16) UNSIGNED,
    `plus_price`          INT(16) UNSIGNED,
    `plus_qty_remain`     INT(16) UNSIGNED,
    `plus_qty_total`      INT(16) UNSIGNED,
    `business_price`      INT(16) UNSIGNED,
    `business_qty_remain` INT(16) UNSIGNED,
    `business_qty_total`  INT(16) UNSIGNED,

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

    `code`            VARCHAR(8)                 NOT NULL,
    `title`           VARCHAR(64)                NOT NULL,
    `discount`        INT(16) UNSIGNED           NOT NULL,
    `qty_total`       INT(4) UNSIGNED            NOT NULL,
    `qty_remain`      INT(4) UNSIGNED            NOT NULL,
    `start_date`      DATETIME                   NOT NULL,
    `expiration_date` DATETIME                   NOT NULL,
    `active`          BOOLEAN      DEFAULT FALSE NOT NULL,
    `description`     TEXT,

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

    `name`        VARCHAR(16)  NOT NULL,
    `image`       VARCHAR(128) NOT NULL,
    `active`      BOOLEAN      NOT NULL DEFAULT FALSE,
    `description` TEXT,

    `created_by`  NVARCHAR(32)          DEFAULT 'ARS.CODEDY',
    `created_at`  DATETIME              DEFAULT CURRENT_TIME,
    `updated_by`  NVARCHAR(32)          DEFAULT NULL,
    `updated_at`  DATETIME              DEFAULT NULL,
    `version`     INT                   DEFAULT 1,
    `deleted`     BOOLEAN               DEFAULT FALSE,

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
    `with_passenger` VARCHAR(32),

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

    `airport_from_id`    INT UNSIGNED           NOT NULL,
    `airport_to_id`      INT UNSIGNED           NOT NULL,
    `plane_id`           INT UNSIGNED           NOT NULL,
    `price_seat_type_id` INT UNSIGNED           NOT NULL,

    `code`               VARCHAR(8)             NOT NULL,
    `departure_at`       DATETIME               NOT NULL,
    `arrival_at`         DATETIME               NOT NULL,
    `status`             TINYINT      DEFAULT 1 NOT NULL,
    `description`        TEXT,

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
    `ticket_id`          INT AUTO_INCREMENT,

    `user_id`            INT UNSIGNED,
    `flight_schedule_id` INT UNSIGNED               NOT NULL,
    `promotion_id`       INT UNSIGNED,
    `pay_type_id`        INT UNSIGNED               NOT NULL,
    `extra_service_ids`  VARCHAR(32),

    `seat_type`          TINYINT UNSIGNED           NOT NULL,
    `status`             TINYINT UNSIGNED DEFAULT 1 NOT NULL,

    `code`               VARCHAR(8)                 NOT NULL,

    `contact_gender`     BOOLEAN                    NOT NULL,
    `contact_first_name` VARCHAR(16)                NOT NULL,
    `contact_last_name`  VARCHAR(16)                NOT NULL,
    `contact_email`      VARCHAR(64)                NOT NULL,
    `contact_phone`      VARCHAR(16)                NOT NULL,
    `contact_address`    VARCHAR(128)               NOT NULL,

    `total_price`        INT(16) UNSIGNED           NOT NULL,
    `amount_paid`        INT(16) UNSIGNED DEFAULT 0 NOT NULL,
    `total_passenger`    INT(16) UNSIGNED           NOT NULL,
    `description`        TEXT,

    `created_by`         NVARCHAR(32)     DEFAULT 'ARS.CODEDY',
    `created_at`         DATETIME         DEFAULT CURRENT_TIME,
    `updated_by`         NVARCHAR(32)     DEFAULT NULL,
    `updated_at`         DATETIME         DEFAULT NULL,
    `version`            INT              DEFAULT 1,
    `deleted`            BOOLEAN          DEFAULT FALSE,

    PRIMARY KEY (`ticket_id`)
) ENGINE InnoDB;


# = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = #
#                                             Insert Data                                             #
# = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = #

#Default password: 123456
