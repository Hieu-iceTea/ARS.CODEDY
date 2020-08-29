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

    `name`             VARCHAR(64)      NOT NULL,
    `price`            INT(16) UNSIGNED NOT NULL,
    `image`            VARCHAR(128)     NOT NULL,
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

    `location`    VARCHAR(64)  NOT NULL,

    `code`        VARCHAR(8)   NOT NULL,
    `name`        VARCHAR(32)  NOT NULL,
    `image`       VARCHAR(128) NOT NULL,
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

    `code`        VARCHAR(8)  NOT NULL,
    `name`        VARCHAR(32) NOT NULL,
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

    `code`            VARCHAR(8)       NOT NULL,
    `title`           VARCHAR(64)      NOT NULL,
    `discount`        INT(16) UNSIGNED NOT NULL,
    `qty_total`       INT(4) UNSIGNED  NOT NULL,
    `qty_remain`      INT(4) UNSIGNED  NOT NULL,
    `expiration_date` DATETIME,
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
    `description` TEXT,

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
    `amount_paid`        INT(16) UNSIGNED           NOT NULL,
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

INSERT INTO user (user_id, user_name, email, password, level, email_verified_at, gender, first_name, last_name, dob,
                  phone, address, loyalty_number, active)
VALUES (1, 'Hieu-iceTea', 'DinhHieu8896@gmail.com', '$2y$10$YKY51A9REcXLZVRAC87AcuXnC.Nb8WK8rD/WgfAVxPSAelLZHQf06', 3,
        '2020-08-08', 1, 'Đình Hiếu', 'Nguyễn', '1996-08-08', '0868 6633 15', 'Nghệ An', 123456, TRUE);
INSERT INTO user (user_id, user_name, email, password, level, email_verified_at, gender, first_name, last_name, dob,
                  phone, address, loyalty_number, active)
VALUES (2, 'truong-thanh-tu', 'TruongThanhTu03091998@gmail.com',
        '$2y$10$YKY51A9REcXLZVRAC87AcuXnC.Nb8WK8rD/WgfAVxPSAelLZHQf06', 3, '2020-08-08', 1, 'Thanh Tú', 'Trương',
        '1998-09-03', '0359077335', 'Huế', 123456, FALSE);
INSERT INTO user (user_id, user_name, email, password, level, email_verified_at, gender, first_name, last_name, dob,
                  phone, address, loyalty_number, active)
VALUES (3, 'chanhoa', 'ChanHoa28112k@gmail.com', '$2y$10$YKY51A9REcXLZVRAC87AcuXnC.Nb8WK8rD/WgfAVxPSAelLZHQf06', 3,
        '2020-08-08', 2, 'Chan Hòa', 'Đỗ Thị', '2000-01-01', '0981159826', '', 123456, TRUE);
INSERT INTO user (user_id, user_name, email, password, level, email_verified_at, gender, first_name, last_name, dob,
                  phone, address, loyalty_number, active)
VALUES (4, 'vuquanghuy2001', 'VuQuangHuyXL1234@gmail.com',
        '$2y$10$YKY51A9REcXLZVRAC87AcuXnC.Nb8WK8rD/WgfAVxPSAelLZHQf06', 3, '2020-08-08', 1, 'Quang Huy', 'Vũ',
        '2000-01-01', '0981159826', '', 123456, TRUE);
INSERT INTO user (user_id, user_name, email, password, level, email_verified_at, gender, first_name, last_name, dob,
                  phone, address, loyalty_number, active)
VALUES (5, 'tuanpth1909', 'PhamTuanCules20@gmail.com', '$2y$10$YKY51A9REcXLZVRAC87AcuXnC.Nb8WK8rD/WgfAVxPSAelLZHQf06',
        3, '2020-08-08', 1, 'Tuân', 'Phạm', '2000-01-01', '0382548442', '', 123456, TRUE);
INSERT INTO user (user_id, user_name, email, password, level, email_verified_at, gender, first_name, last_name, dob,
                  phone, address, loyalty_number, active)
VALUES (6, 'host', 'ars.codedy@gmail.com', '$2y$10$YKY51A9REcXLZVRAC87AcuXnC.Nb8WK8rD/WgfAVxPSAelLZHQf06', 1,
        '2020-08-08', 1, 'Đình Hiếu', 'Nguyễn', '1996-08-08', '032 87 99 000', 'Hà Nội', NULL, TRUE);
INSERT INTO user (user_id, user_name, email, password, level, email_verified_at, gender, first_name, last_name, dob,
                  phone, address, loyalty_number, active)
VALUES (7, 'admin', 'ars.codedy@gmail.com', '$2y$10$YKY51A9REcXLZVRAC87AcuXnC.Nb8WK8rD/WgfAVxPSAelLZHQf06', 2,
        '2020-08-08', 1, '', '', '2020-08-08', '', '', NULL, TRUE);
INSERT INTO user (user_id, user_name, email, password, level, email_verified_at, gender, first_name, last_name, dob,
                  phone, address, loyalty_number, active)
VALUES (8, 'member', 'ars.codedy@gmail.com', '$2y$10$YKY51A9REcXLZVRAC87AcuXnC.Nb8WK8rD/WgfAVxPSAelLZHQf06', 3,
        '2020-08-08', 1, '', '', '2020-08-08', '', '', NULL, TRUE);

INSERT INTO extra_service (extra_service_id, name, price, image, description)
    VALUE (1, 'Luggage and special services', 110000, 'luggage-and-special-services.jpg ',
           '<ul style=list-style-type: disc;><li>Total weight displayed includes free baggage allowance</li><li>Save up to 80 %</li><li>max. 40 kg per person</li></ul>');
INSERT INTO extra_service (extra_service_id, name, price, image, description)
    VALUE (2, 'Priority Check-in', 120000, 'priority-check-in.jpg ',
           '<ul style=list-style-type: disc;><li>Save your time</li><li>Use Priority Check-in Counter</li><li>Use Priority line at boarding gate</li></ul>');
INSERT INTO extra_service (extra_service_id, name, price, image, description)
    VALUE (3, 'Business Lounge', 130000, 'business-lounge.jpg ',
           '<ul style=list-style-type: disc;><li>Receive the utmost comfort</li><li>Enjoy your privacy</li><li>Experience luxurious services</li></ul>');
INSERT INTO extra_service (extra_service_id, name, price, image, description)
    VALUE (4, 'Special meals on the plane', 140000, 'special-meals-on-the-plane.jpg ',
           '<ul style=list-style-type: disc;><li>Selection of special meals to suit different dietary styles</li><li>Food is always fresh</li><li>Attentive service</li></ul>');
INSERT INTO extra_service (extra_service_id, name, price, image, description)
    VALUE (5, 'Special care for babies', 150000, 'special-care-for-babies.jpg ',
           '<ul style=list-style-type: disc;><li>Baby stroller</li><li>Bassinet service</li><li>Portable in-flight bed for children</li></ul>');

INSERT INTO airport (airport_id, location, code, name, image, description)
VALUES (1, 'Hà Nội', 'HAN', 'Nội Bài', 'ha-noi.jpg', '<p>mô tả</p>');
INSERT INTO airport (airport_id, location, code, name, image, description)
VALUES (2, 'Hồ Chí Minh', 'SGN', 'Tân Sơn Nhất', 'ho-chi-minh.jpg', '<p>mô tả</p>');
INSERT INTO airport (airport_id, location, code, name, image, description)
VALUES (3, 'Nghệ An', 'VII', 'Vinh', 'nghe-an.jpg', '<p>mô tả</p>');
INSERT INTO airport (airport_id, location, code, name, image, description)
VALUES (4, 'Thừa Thiên - Huế', 'HUI', 'Phú Bài', 'hue.jpg', '<p>mô tả</p>');
INSERT INTO airport (airport_id, location, code, name, image, description)
VALUES (5, 'Đà Nẵng', 'DAD', 'Đà Nẵng', 'da-nang.jpg', '<p>mô tả</p>');
INSERT INTO airport (airport_id, location, code, name, image, description)
VALUES (6, 'Bình Định', 'UIH', 'Phù Cát', 'binh-dinh.jpg', '<p>mô tả</p>');
INSERT INTO airport (airport_id, location, code, name, image, description)
VALUES (7, 'Hải Phòng', 'HPH', 'Cát Bi', 'hai-phong.jpg', '<p>mô tả</p>');
INSERT INTO airport (airport_id, location, code, name, image, description)
VALUES (8, 'Khánh Hòa', 'CXR', 'Cam Ranh', 'khanh-hoa.jpg', '<p>mô tả</p>');
INSERT INTO airport (airport_id, location, code, name, image, description)
VALUES (9, 'Kiên Giang', 'PQC', 'Phú Quốc', 'kien-giang.jpg', '<p>mô tả</p>');
INSERT INTO airport (airport_id, location, code, name, image, description)
VALUES (10, 'Quảng Ninh', 'VDO', 'Vân Đồn', 'quang-ninh.jpg', '<p>mô tả</p>');
INSERT INTO airport (airport_id, location, code, name, image, description)
VALUES (11, 'Cần Thơ', 'VCA', 'Cần Thơ', 'can-tho.jpg', '<p>mô tả</p>');

INSERT INTO plane (plane_id, code, name)
    VALUE (1, ' B787', ' Boeing B787');
INSERT INTO plane (plane_id, code, name)
    VALUE (2, ' A350', ' Airbus A350');
INSERT INTO plane (plane_id, code, name)
    VALUE (3, ' A321', ' Airbus A321');
INSERT INTO plane (plane_id, code, name)
    VALUE (4, ' B737', ' Boeing B737');
INSERT INTO plane (plane_id, code, name)
    VALUE (5, ' B235', ' Boeing B235');
INSERT INTO plane (plane_id, code, name)
    VALUE (6, ' B198', ' Boeing B198');
INSERT INTO plane (plane_id, code, name)
    VALUE (7, ' B789', ' Boeing B789');
INSERT INTO plane (plane_id, code, name)
    VALUE (8, ' A456', ' Airbus B456');
INSERT INTO plane (plane_id, code, name)
    VALUE (9, ' A284', ' Airbus A284');
INSERT INTO plane (plane_id, code, name)
    VALUE (10, ' A365', ' Airbus A365');

INSERT INTO price_seat_type (price_seat_type_id, eco_price, eco_qty_remain, eco_qty_total, plus_price, plus_qty_remain,
                             plus_qty_total, business_price, business_qty_remain, business_qty_total)
    VALUE (1, 599000, 8, 290, 1299000, 125, 150, 1689000, 60, 80);
INSERT INTO price_seat_type (price_seat_type_id, eco_price, eco_qty_remain, eco_qty_total, plus_price, plus_qty_remain,
                             plus_qty_total, business_price, business_qty_remain, business_qty_total)
    VALUE (2, 699000, 318, 318, 1569000, 196, 196, 1899000, 96, 96);
INSERT INTO price_seat_type (price_seat_type_id, eco_price, eco_qty_remain, eco_qty_total, plus_price, plus_qty_remain,
                             plus_qty_total, business_price, business_qty_remain, business_qty_total)
    VALUE (3, 989000, 260, 265, 1689000, 0, 155, 2269000, 56, 85);
INSERT INTO price_seat_type (price_seat_type_id, eco_price, eco_qty_remain, eco_qty_total, plus_price, plus_qty_remain,
                             plus_qty_total, business_price, business_qty_remain, business_qty_total)
    VALUE (4, 569000, 350, 365, 1399000, 156, 165, 1569000, 6, 120);
INSERT INTO price_seat_type (price_seat_type_id, eco_price, eco_qty_remain, eco_qty_total, plus_price, plus_qty_remain,
                             plus_qty_total, business_price, business_qty_remain, business_qty_total)
    VALUE (5, 689000, 182, 230, 1889000, 2, 200, 1869000, 26, 100);
INSERT INTO price_seat_type (price_seat_type_id, eco_price, eco_qty_remain, eco_qty_total, plus_price, plus_qty_remain,
                             plus_qty_total, business_price, business_qty_remain, business_qty_total)
    VALUE (6, 1099000, 0, 360, 1499000, 118, 120, 2199000, 80, 80);
INSERT INTO price_seat_type (price_seat_type_id, eco_price, eco_qty_remain, eco_qty_total, plus_price, plus_qty_remain,
                             plus_qty_total, business_price, business_qty_remain, business_qty_total)
    VALUE (7, 1199000, 8, 290, 1549000, 125, 150, 2299000, 60, 80);
INSERT INTO price_seat_type (price_seat_type_id, eco_price, eco_qty_remain, eco_qty_total, plus_price, plus_qty_remain,
                             plus_qty_total, business_price, business_qty_remain, business_qty_total)
    VALUE (8, 1299000, 318, 318, 1599000, 196, 196, 2399000, 96, 96);
INSERT INTO price_seat_type (price_seat_type_id, eco_price, eco_qty_remain, eco_qty_total, plus_price, plus_qty_remain,
                             plus_qty_total, business_price, business_qty_remain, business_qty_total)
    VALUE (9, 1399000, 260, 265, 1649000, 0, 155, 2499000, 56, 85);
INSERT INTO price_seat_type (price_seat_type_id, eco_price, eco_qty_remain, eco_qty_total, plus_price, plus_qty_remain,
                             plus_qty_total, business_price, business_qty_remain, business_qty_total)
    VALUE (10, 1499000, 350, 365, 1699000, 156, 165, 2599000, 6, 120);
INSERT INTO price_seat_type (price_seat_type_id, eco_price, eco_qty_remain, eco_qty_total, plus_price, plus_qty_remain,
                             plus_qty_total, business_price, business_qty_remain, business_qty_total)
    VALUE (11, 1599000, 182, 230, 1699000, 2, 200, 2599000, 26, 100);
INSERT INTO price_seat_type (price_seat_type_id, eco_price, eco_qty_remain, eco_qty_total, plus_price, plus_qty_remain,
                             plus_qty_total, business_price, business_qty_remain, business_qty_total)
    VALUE (12, 599000, 0, 360, 1199000, 118, 120, 1699000, 80, 80);
INSERT INTO price_seat_type (price_seat_type_id, eco_price, eco_qty_remain, eco_qty_total, plus_price, plus_qty_remain,
                             plus_qty_total, business_price, business_qty_remain, business_qty_total)
    VALUE (13, 699000, 8, 290, 1399000, 125, 150, 1799000, 60, 80);
INSERT INTO price_seat_type (price_seat_type_id, eco_price, eco_qty_remain, eco_qty_total, plus_price, plus_qty_remain,
                             plus_qty_total, business_price, business_qty_remain, business_qty_total)
    VALUE (14, 799000, 318, 318, 1299000, 196, 196, 1899000, 96, 96);
INSERT INTO price_seat_type (price_seat_type_id, eco_price, eco_qty_remain, eco_qty_total, plus_price, plus_qty_remain,
                             plus_qty_total, business_price, business_qty_remain, business_qty_total)
    VALUE (15, 899000, 260, 265, 1399000, 0, 155, 1999000, 56, 85);
INSERT INTO price_seat_type (price_seat_type_id, eco_price, eco_qty_remain, eco_qty_total, plus_price, plus_qty_remain,
                             plus_qty_total, business_price, business_qty_remain, business_qty_total)
    VALUE (16, 999000, 350, 365, 1449000, 156, 165, 2099000, 6, 120);
INSERT INTO price_seat_type (price_seat_type_id, eco_price, eco_qty_remain, eco_qty_total, plus_price, plus_qty_remain,
                             plus_qty_total, business_price, business_qty_remain, business_qty_total)
    VALUE (17, 1099000, 182, 230, 1499000, 2, 200, 2199000, 26, 100);
INSERT INTO price_seat_type (price_seat_type_id, eco_price, eco_qty_remain, eco_qty_total, plus_price, plus_qty_remain,
                             plus_qty_total, business_price, business_qty_remain, business_qty_total)
    VALUE (18, 1199000, 0, 360, 1549000, 118, 120, 2299000, 80, 80);
INSERT INTO price_seat_type (price_seat_type_id, eco_price, eco_qty_remain, eco_qty_total, plus_price, plus_qty_remain,
                             plus_qty_total, business_price, business_qty_remain, business_qty_total)
    VALUE (19, 1299000, 8, 290, 1599000, 125, 150, 2399000, 60, 80);
INSERT INTO price_seat_type (price_seat_type_id, eco_price, eco_qty_remain, eco_qty_total, plus_price, plus_qty_remain,
                             plus_qty_total, business_price, business_qty_remain, business_qty_total)
    VALUE (20, 1399000, 318, 318, 1649000, 196, 196, 2499000, 96, 96);
INSERT INTO price_seat_type (price_seat_type_id, eco_price, eco_qty_remain, eco_qty_total, plus_price, plus_qty_remain,
                             plus_qty_total, business_price, business_qty_remain, business_qty_total)
    VALUE (21, 1499000, 260, 265, 1699000, 0, 155, 2599000, 56, 85);
INSERT INTO price_seat_type (price_seat_type_id, eco_price, eco_qty_remain, eco_qty_total, plus_price, plus_qty_remain,
                             plus_qty_total, business_price, business_qty_remain, business_qty_total)
    VALUE (22, 1599000, 350, 365, 1699000, 156, 165, 2599000, 6, 120);
INSERT INTO price_seat_type (price_seat_type_id, eco_price, eco_qty_remain, eco_qty_total, plus_price, plus_qty_remain,
                             plus_qty_total, business_price, business_qty_remain, business_qty_total)
    VALUE (23, 599000, 182, 230, 1199000, 2, 200, 1699000, 26, 100);
INSERT INTO price_seat_type (price_seat_type_id, eco_price, eco_qty_remain, eco_qty_total, plus_price, plus_qty_remain,
                             plus_qty_total, business_price, business_qty_remain, business_qty_total)
    VALUE (24, 699000, 0, 360, 1399000, 118, 120, 1799000, 80, 80);
INSERT INTO price_seat_type (price_seat_type_id, eco_price, eco_qty_remain, eco_qty_total, plus_price, plus_qty_remain,
                             plus_qty_total, business_price, business_qty_remain, business_qty_total)
    VALUE (25, 799000, 8, 290, 1299000, 125, 150, 1899000, 60, 80);
INSERT INTO price_seat_type (price_seat_type_id, eco_price, eco_qty_remain, eco_qty_total, plus_price, plus_qty_remain,
                             plus_qty_total, business_price, business_qty_remain, business_qty_total)
    VALUE (26, 899000, 318, 318, 1399000, 196, 196, 1999000, 96, 96);
INSERT INTO price_seat_type (price_seat_type_id, eco_price, eco_qty_remain, eco_qty_total, plus_price, plus_qty_remain,
                             plus_qty_total, business_price, business_qty_remain, business_qty_total)
    VALUE (27, 999000, 260, 265, 1449000, 0, 155, 2099000, 56, 85);
INSERT INTO price_seat_type (price_seat_type_id, eco_price, eco_qty_remain, eco_qty_total, plus_price, plus_qty_remain,
                             plus_qty_total, business_price, business_qty_remain, business_qty_total)
    VALUE (28, 1099000, 350, 365, 1499000, 156, 165, 2199000, 6, 120);
INSERT INTO price_seat_type (price_seat_type_id, eco_price, eco_qty_remain, eco_qty_total, plus_price, plus_qty_remain,
                             plus_qty_total, business_price, business_qty_remain, business_qty_total)
    VALUE (29, 1199000, 182, 230, 1549000, 2, 200, 2299000, 26, 100);
INSERT INTO price_seat_type (price_seat_type_id, eco_price, eco_qty_remain, eco_qty_total, plus_price, plus_qty_remain,
                             plus_qty_total, business_price, business_qty_remain, business_qty_total)
    VALUE (30, 1299000, 0, 360, 1599000, 118, 120, 2399000, 80, 80);
INSERT INTO price_seat_type (price_seat_type_id, eco_price, eco_qty_remain, eco_qty_total, plus_price, plus_qty_remain,
                             plus_qty_total, business_price, business_qty_remain, business_qty_total)
    VALUE (31, 1399000, 8, 290, 1649000, 125, 150, 2499000, 60, 80);
INSERT INTO price_seat_type (price_seat_type_id, eco_price, eco_qty_remain, eco_qty_total, plus_price, plus_qty_remain,
                             plus_qty_total, business_price, business_qty_remain, business_qty_total)
    VALUE (32, 1499000, 318, 318, 1699000, 196, 196, 2599000, 96, 96);
INSERT INTO price_seat_type (price_seat_type_id, eco_price, eco_qty_remain, eco_qty_total, plus_price, plus_qty_remain,
                             plus_qty_total, business_price, business_qty_remain, business_qty_total)
    VALUE (33, 1599000, 260, 265, 1699000, 0, 155, 2599000, 56, 85);
INSERT INTO price_seat_type (price_seat_type_id, eco_price, eco_qty_remain, eco_qty_total, plus_price, plus_qty_remain,
                             plus_qty_total, business_price, business_qty_remain, business_qty_total)
    VALUE (34, 599000, 350, 365, 1199000, 156, 165, 1699000, 6, 120);
INSERT INTO price_seat_type (price_seat_type_id, eco_price, eco_qty_remain, eco_qty_total, plus_price, plus_qty_remain,
                             plus_qty_total, business_price, business_qty_remain, business_qty_total)
    VALUE (35, 699000, 182, 230, 1399000, 2, 200, 1799000, 26, 100);
INSERT INTO price_seat_type (price_seat_type_id, eco_price, eco_qty_remain, eco_qty_total, plus_price, plus_qty_remain,
                             plus_qty_total, business_price, business_qty_remain, business_qty_total)
    VALUE (36, 799000, 0, 360, 1299000, 118, 120, 1899000, 80, 80);
INSERT INTO price_seat_type (price_seat_type_id, eco_price, eco_qty_remain, eco_qty_total, plus_price, plus_qty_remain,
                             plus_qty_total, business_price, business_qty_remain, business_qty_total)
    VALUE (37, 899000, 8, 290, 1399000, 125, 150, 1999000, 60, 80);
INSERT INTO price_seat_type (price_seat_type_id, eco_price, eco_qty_remain, eco_qty_total, plus_price, plus_qty_remain,
                             plus_qty_total, business_price, business_qty_remain, business_qty_total)
    VALUE (38, 999000, 318, 318, 1449000, 196, 196, 2099000, 96, 96);
INSERT INTO price_seat_type (price_seat_type_id, eco_price, eco_qty_remain, eco_qty_total, plus_price, plus_qty_remain,
                             plus_qty_total, business_price, business_qty_remain, business_qty_total)
    VALUE (39, 1099000, 260, 265, 1499000, 0, 155, 2199000, 56, 85);
INSERT INTO price_seat_type (price_seat_type_id, eco_price, eco_qty_remain, eco_qty_total, plus_price, plus_qty_remain,
                             plus_qty_total, business_price, business_qty_remain, business_qty_total)
    VALUE (40, 1199000, 350, 365, 1549000, 156, 165, 2299000, 6, 120);
INSERT INTO price_seat_type (price_seat_type_id, eco_price, eco_qty_remain, eco_qty_total, plus_price, plus_qty_remain,
                             plus_qty_total, business_price, business_qty_remain, business_qty_total)
    VALUE (41, 1299000, 182, 230, 1599000, 2, 200, 2399000, 26, 100);
INSERT INTO price_seat_type (price_seat_type_id, eco_price, eco_qty_remain, eco_qty_total, plus_price, plus_qty_remain,
                             plus_qty_total, business_price, business_qty_remain, business_qty_total)
    VALUE (42, 1399000, 0, 360, 1649000, 118, 120, 2499000, 80, 80);
INSERT INTO price_seat_type (price_seat_type_id, eco_price, eco_qty_remain, eco_qty_total, plus_price, plus_qty_remain,
                             plus_qty_total, business_price, business_qty_remain, business_qty_total)
    VALUE (43, 1499000, 8, 290, 1699000, 125, 150, 2599000, 60, 80);
INSERT INTO price_seat_type (price_seat_type_id, eco_price, eco_qty_remain, eco_qty_total, plus_price, plus_qty_remain,
                             plus_qty_total, business_price, business_qty_remain, business_qty_total)
    VALUE (44, 1599000, 318, 318, 1749000, 196, 196, 2699000, 96, 96);
INSERT INTO price_seat_type (price_seat_type_id, eco_price, eco_qty_remain, eco_qty_total, plus_price, plus_qty_remain,
                             plus_qty_total, business_price, business_qty_remain, business_qty_total)
    VALUE (45, 1699000, 260, 265, 1799000, 0, 155, 2799000, 56, 85);
INSERT INTO price_seat_type (price_seat_type_id, eco_price, eco_qty_remain, eco_qty_total, plus_price, plus_qty_remain,
                             plus_qty_total, business_price, business_qty_remain, business_qty_total)
    VALUE (46, 1799000, 350, 365, 1849000, 156, 165, 2899000, 6, 120);
INSERT INTO price_seat_type (price_seat_type_id, eco_price, eco_qty_remain, eco_qty_total, plus_price, plus_qty_remain,
                             plus_qty_total, business_price, business_qty_remain, business_qty_total)
    VALUE (47, 1899000, 182, 230, 1899000, 2, 200, 2999000, 26, 100);
INSERT INTO price_seat_type (price_seat_type_id, eco_price, eco_qty_remain, eco_qty_total, plus_price, plus_qty_remain,
                             plus_qty_total, business_price, business_qty_remain, business_qty_total)
    VALUE (48, 1999000, 0, 360, 1949000, 118, 120, 3099000, 80, 80);

INSERT INTO promotion (promotion_id, code, title, discount, qty_total, qty_remain, expiration_date, description)
VALUES (1, 'ABC123', 'Giảm giá tháng 8', 100000, 50, 28, '2020-08-08', '<p>mô tả</p>');
INSERT INTO promotion (promotion_id, code, title, discount, qty_total, qty_remain, expiration_date, description)
VALUES (2, 'BAY888', 'Bay lắc tưng bừng', 256000, 100, 86, '2020-08-30', '<p>mô tả</p>');
INSERT INTO promotion (promotion_id, code, title, discount, qty_total, qty_remain, expiration_date, description)
VALUES (3, 'LAX999', 'Giảm giá quốc khách 2/9', 209000, 30, 29, '2020-10-01', '<p>mô tả</p>');
INSERT INTO promotion (promotion_id, code, title, discount, qty_total, qty_remain, expiration_date, description)
VALUES (4, 'HAHA96', 'Vừa bay vừa cười', 370000, 80, 60, '2020-11-20', '<p>mô tả</p>');
INSERT INTO promotion (promotion_id, code, title, discount, qty_total, qty_remain, expiration_date, description)
VALUES (5, 'VIP5000', 'Giảm giá đặc biệt cho khách hàng VIP', 500000, 20, 18, '2020-12-30', '<p>mô tả</p>');

INSERT INTO pay_type (pay_type_id, name, image, description)
VALUES (1, 'Pay Later', 'pay-later.png', '<p>mô tả</p>');
INSERT INTO pay_type (pay_type_id, name, image, description)
VALUES (2, 'VN Pay', 'vnpay.png', '<p>mô tả</p>');
INSERT INTO pay_type (pay_type_id, name, image, description)
VALUES (3, 'MOMO', 'momo.png', '<p>mô tả</p>');
INSERT INTO pay_type (pay_type_id, name, image, description)
VALUES (4, 'VISA', 'visa.png', '<p>mô tả</p>');
INSERT INTO pay_type (pay_type_id, name, image, description)
VALUES (5, 'Master Card', 'mastercard.png', '<p>mô tả</p>');
INSERT INTO pay_type (pay_type_id, name, image, description)
VALUES (6, 'JCB', 'jcb.png', '<p>mô tả</p>');

INSERT INTO passenger (passenger_id, ticket_id, gender, passenger_type, first_name, last_name, dob, with_passenger)
VALUES (1, 8, 1, 1, 'Đình Hiếu', 'Nguyễn', '1996-08-08', '');
INSERT INTO passenger (passenger_id, ticket_id, gender, passenger_type, first_name, last_name, dob, with_passenger)
VALUES (2, 8, 2, 2, 'Khánh Vy', 'Phạm', '2010-06-25', '');
INSERT INTO passenger (passenger_id, ticket_id, gender, passenger_type, first_name, last_name, dob, with_passenger)
VALUES (3, 8, 1, 3, 'Thanh Tùng', 'Trần', '2020-01-02', 'Nguyễn Đình Hiếu');
INSERT INTO passenger (passenger_id, ticket_id, gender, passenger_type, first_name, last_name, dob, with_passenger)
VALUES (4, 7, 1, 1, 'Đình Hiếu', 'Nguyễn', '1996-08-08', '');
INSERT INTO passenger (passenger_id, ticket_id, gender, passenger_type, first_name, last_name, dob, with_passenger)
VALUES (5, 9, 2, 1, 'Thanh Tú', 'Trương', '1998-09-03', '');
INSERT INTO passenger (passenger_id, ticket_id, gender, passenger_type, first_name, last_name, dob, with_passenger)
VALUES (6, 10, 2, 1, 'Kiều Linh', 'Trần', '2000-01-01', '');
INSERT INTO passenger (passenger_id, ticket_id, gender, passenger_type, first_name, last_name, dob, with_passenger)
VALUES (7, 11, 2, 1, 'Thanh Mai', 'Phạm', '2001-06-02', '');
INSERT INTO passenger (passenger_id, ticket_id, gender, passenger_type, first_name, last_name, dob, with_passenger)
VALUES (8, 1, 1, 3, 'Đình Hiếu', 'Nguyễn', '1996-08-08', '');
INSERT INTO passenger (passenger_id, ticket_id, gender, passenger_type, first_name, last_name, dob, with_passenger)
VALUES (9, 2, 2, 2, 'Phương Thùy', 'Trần', '1996-08-08', '');
INSERT INTO passenger (passenger_id, ticket_id, gender, passenger_type, first_name, last_name, dob, with_passenger)
VALUES (10, 3, 1, 1, 'Đình Hiếu', 'Nguyễn', '1996-08-08', '');
INSERT INTO passenger (passenger_id, ticket_id, gender, passenger_type, first_name, last_name, dob, with_passenger)
VALUES (11, 4, 2, 2, 'Đình Hiếu', 'Nguyễn', '1996-08-08', '');
INSERT INTO passenger (passenger_id, ticket_id, gender, passenger_type, first_name, last_name, dob, with_passenger)
VALUES (12, 5, 1, 3, 'Đình Hiếu', 'Nguyễn', '1996-08-08', '');
INSERT INTO passenger (passenger_id, ticket_id, gender, passenger_type, first_name, last_name, dob, with_passenger)
VALUES (13, 6, 2, 2, 'Đình Hiếu', 'Nguyễn', '1996-08-08', '');

INSERT INTO flight_schedule (flight_schedule_id, airport_from_id, airport_to_id, plane_id, price_seat_type_id, code,
                             departure_at, arrival_at, status, description)
    VALUE (1, 1, 2, 1, 1, 'VN-599', '2020-10-10 06:15:00', '2020-10-10 08:25:00', 1, '<p>mô tả</p>');
INSERT INTO flight_schedule (flight_schedule_id, airport_from_id, airport_to_id, plane_id, price_seat_type_id, code,
                             departure_at, arrival_at, status, description)
    VALUE (2, 1, 2, 2, 2, 'VN-600', '2020-10-10 09:10:00', '2020-10-10 11:45:00', 2, '<p>mô tả</p>');
INSERT INTO flight_schedule (flight_schedule_id, airport_from_id, airport_to_id, plane_id, price_seat_type_id, code,
                             departure_at, arrival_at, status, description)
    VALUE (3, 1, 2, 3, 3, 'VN-601', '2020-10-10 12:35:00', '2020-10-10 14:10:00', 3, '<p>mô tả</p>');
INSERT INTO flight_schedule (flight_schedule_id, airport_from_id, airport_to_id, plane_id, price_seat_type_id, code,
                             departure_at, arrival_at, status, description)
    VALUE (4, 1, 2, 4, 4, 'VN-602', '2020-10-10 20:55:00', '2020-10-10 22:15:00', 4, '<p>mô tả</p>');
INSERT INTO flight_schedule (flight_schedule_id, airport_from_id, airport_to_id, plane_id, price_seat_type_id, code,
                             departure_at, arrival_at, status, description)
    VALUE (5, 1, 2, 5, 5, 'VN-603', '2020-10-10 23:05:00', '2020-10-11 01:50:00', 5, '<p>mô tả</p>');
INSERT INTO flight_schedule (flight_schedule_id, airport_from_id, airport_to_id, plane_id, price_seat_type_id, code,
                             departure_at, arrival_at, status, description)
    VALUE (6, 2, 1, 6, 6, 'VN-604', '2020-10-10 08:10:00', '2020-10-10 10:30:00', 6, '<p>mô tả</p>');
INSERT INTO flight_schedule (flight_schedule_id, airport_from_id, airport_to_id, plane_id, price_seat_type_id, code,
                             departure_at, arrival_at, status, description)
    VALUE (7, 2, 1, 7, 7, 'VN-605', '2020-10-10 14:55:00', '2020-10-10 16:30:00', 2, '<p>mô tả</p>');
INSERT INTO flight_schedule (flight_schedule_id, airport_from_id, airport_to_id, plane_id, price_seat_type_id, code,
                             departure_at, arrival_at, status, description)
    VALUE (8, 2, 1, 8, 8, 'VN-606', '2020-10-10 21:30:00', '2020-10-10 23:15:00', 2, '<p>mô tả</p>');
INSERT INTO flight_schedule (flight_schedule_id, airport_from_id, airport_to_id, plane_id, price_seat_type_id, code,
                             departure_at, arrival_at, status, description)
    VALUE (9, 1, 5, 9, 9, 'VN-607', '2020-10-15 10:15:00', '2020-10-15 11:25:00', 2, '<p>mô tả</p>');
INSERT INTO flight_schedule (flight_schedule_id, airport_from_id, airport_to_id, plane_id, price_seat_type_id, code,
                             departure_at, arrival_at, status, description)
    VALUE (10, 1, 5, 10, 10, 'VN-608', '2020-10-15 19:10:00', '2020-10-15 20:15:00', 2, '<p>mô tả</p>');
INSERT INTO flight_schedule (flight_schedule_id, airport_from_id, airport_to_id, plane_id, price_seat_type_id, code,
                             departure_at, arrival_at, status, description)
    VALUE (11, 1, 5, 5, 11, 'VN-609', '2020-10-15 21:30:00', '2020-10-15 23:05:00', 2, '<p>mô tả</p>');
INSERT INTO flight_schedule (flight_schedule_id, airport_from_id, airport_to_id, plane_id, price_seat_type_id, code,
                             departure_at, arrival_at, status, description)
    VALUE (12, 1, 3, 10, 12, 'VN-610', '2020-10-15 06:15:00', '2020-10-15 08:25:00', 2, '<p>mô tả</p>');
INSERT INTO flight_schedule (flight_schedule_id, airport_from_id, airport_to_id, plane_id, price_seat_type_id, code,
                             departure_at, arrival_at, status, description)
    VALUE (13, 1, 3, 9, 13, 'VN-611', '2020-10-15 09:10:00', '2020-10-15 11:45:00', 2, '<p>mô tả</p>');
INSERT INTO flight_schedule (flight_schedule_id, airport_from_id, airport_to_id, plane_id, price_seat_type_id, code,
                             departure_at, arrival_at, status, description)
    VALUE (14, 1, 3, 8, 14, 'VN-612', '2020-10-15 12:35:00', '2020-10-15 14:10:00', 2, '<p>mô tả</p>');
INSERT INTO flight_schedule (flight_schedule_id, airport_from_id, airport_to_id, plane_id, price_seat_type_id, code,
                             departure_at, arrival_at, status, description)
    VALUE (15, 1, 3, 7, 15, 'VN-613', '2020-10-15 20:55:00', '2020-10-15 22:15:00', 2, '<p>mô tả</p>');
INSERT INTO flight_schedule (flight_schedule_id, airport_from_id, airport_to_id, plane_id, price_seat_type_id, code,
                             departure_at, arrival_at, status, description)
    VALUE (16, 1, 3, 6, 16, 'VN-614', '2020-10-15 23:05:00', '2020-10-16 01:50:00', 2, '<p>mô tả</p>');
INSERT INTO flight_schedule (flight_schedule_id, airport_from_id, airport_to_id, plane_id, price_seat_type_id, code,
                             departure_at, arrival_at, status, description)
    VALUE (17, 3, 1, 5, 17, 'VN-615', '2020-10-15 08:10:00', '2020-10-15 10:30:00', 2, '<p>mô tả</p>');
INSERT INTO flight_schedule (flight_schedule_id, airport_from_id, airport_to_id, plane_id, price_seat_type_id, code,
                             departure_at, arrival_at, status, description)
    VALUE (18, 3, 1, 4, 18, 'VN-616', '2020-10-15 14:55:00', '2020-10-15 16:30:00', 2, '<p>mô tả</p>');
INSERT INTO flight_schedule (flight_schedule_id, airport_from_id, airport_to_id, plane_id, price_seat_type_id, code,
                             departure_at, arrival_at, status, description)
    VALUE (19, 3, 1, 3, 19, 'VN-617', '2020-10-15 21:30:00', '2020-10-15 23:15:00', 2, '<p>mô tả</p>');
INSERT INTO flight_schedule (flight_schedule_id, airport_from_id, airport_to_id, plane_id, price_seat_type_id, code,
                             departure_at, arrival_at, status, description)
    VALUE (20, 1, 4, 2, 20, 'VN-618', '2020-10-20 10:15:00', '2020-10-20 11:25:00', 2, '<p>mô tả</p>');
INSERT INTO flight_schedule (flight_schedule_id, airport_from_id, airport_to_id, plane_id, price_seat_type_id, code,
                             departure_at, arrival_at, status, description)
    VALUE (21, 1, 4, 1, 21, 'VN-619', '2020-10-20 19:10:00', '2020-10-20 20:15:00', 2, '<p>mô tả</p>');
INSERT INTO flight_schedule (flight_schedule_id, airport_from_id, airport_to_id, plane_id, price_seat_type_id, code,
                             departure_at, arrival_at, status, description)
    VALUE (22, 1, 4, 6, 22, 'VN-620', '2020-10-20 21:30:00', '2020-10-20 23:05:00', 2, '<p>mô tả</p>');
INSERT INTO flight_schedule (flight_schedule_id, airport_from_id, airport_to_id, plane_id, price_seat_type_id, code,
                             departure_at, arrival_at, status, description)
    VALUE (23, 11, 10, 8, 23, 'VN-621', '2020-10-25 09:10:00', '2020-10-25 11:45:00', 2, '<p>mô tả</p>');
INSERT INTO flight_schedule (flight_schedule_id, airport_from_id, airport_to_id, plane_id, price_seat_type_id, code,
                             departure_at, arrival_at, status, description)
    VALUE (24, 11, 10, 7, 24, 'VN-622', '2020-10-25 20:55:00', '2020-10-25 22:15:00', 2, '<p>mô tả</p>');
INSERT INTO flight_schedule (flight_schedule_id, airport_from_id, airport_to_id, plane_id, price_seat_type_id, code,
                             departure_at, arrival_at, status, description)
    VALUE (25, 6, 8, 6, 25, 'VN-623', '2020-10-30 14:55:00', '2020-10-30 16:30:00', 6, '<p>mô tả</p>');
INSERT INTO flight_schedule (flight_schedule_id, airport_from_id, airport_to_id, plane_id, price_seat_type_id, code,
                             departure_at, arrival_at, status, description)
    VALUE (26, 6, 8, 5, 26, 'VN-624', '2020-10-30 21:30:00', '2020-10-30 23:15:00', 5, '<p>mô tả</p>');
INSERT INTO flight_schedule (flight_schedule_id, airport_from_id, airport_to_id, plane_id, price_seat_type_id, code,
                             departure_at, arrival_at, status, description)
    VALUE (27, 9, 7, 9, 27, 'VN-625', '2020-11-05 10:15:00', '2020-11-05 11:25:00', 4, '<p>mô tả</p>');
INSERT INTO flight_schedule (flight_schedule_id, airport_from_id, airport_to_id, plane_id, price_seat_type_id, code,
                             departure_at, arrival_at, status, description)
    VALUE (28, 9, 7, 10, 28, 'VN-626', '2020-11-05 19:10:00', '2020-11-05 20:15:00', 3, '<p>mô tả</p>');
INSERT INTO flight_schedule (flight_schedule_id, airport_from_id, airport_to_id, plane_id, price_seat_type_id, code,
                             departure_at, arrival_at, status, description)
    VALUE (29, 2, 1, 2, 29, 'VN-627', '2020-11-10 06:15:00', '2020-11-10 08:25:00', 2, '<p>mô tả</p>');
INSERT INTO flight_schedule (flight_schedule_id, airport_from_id, airport_to_id, plane_id, price_seat_type_id, code,
                             departure_at, arrival_at, status, description)
    VALUE (30, 2, 1, 3, 30, 'VN-628', '2020-11-10 09:10:00', '2020-11-10 11:45:00', 1, '<p>mô tả</p>');
INSERT INTO flight_schedule (flight_schedule_id, airport_from_id, airport_to_id, plane_id, price_seat_type_id, code,
                             departure_at, arrival_at, status, description)
    VALUE (31, 1, 3, 1, 31, 'VN-628', '2020-10-10 09:10:00', '2020-10-10 11:45:00', 3, '<p>mô tả</p>');
INSERT INTO flight_schedule (flight_schedule_id, airport_from_id, airport_to_id, plane_id, price_seat_type_id, code,
                             departure_at, arrival_at, status, description)
    VALUE (32, 1, 3, 2, 32, 'VN-629', '2020-10-10 20:55:00', '2020-10-10 22:15:00', 2, '<p>mô tả</p>');
INSERT INTO flight_schedule (flight_schedule_id, airport_from_id, airport_to_id, plane_id, price_seat_type_id, code,
                             departure_at, arrival_at, status, description)
    VALUE (33, 1, 4, 3, 33, 'VN-630', '2020-10-10 09:10:00', '2020-10-10 11:45:00', 4, '<p>mô tả</p>');
INSERT INTO flight_schedule (flight_schedule_id, airport_from_id, airport_to_id, plane_id, price_seat_type_id, code,
                             departure_at, arrival_at, status, description)
    VALUE (34, 1, 4, 4, 34, 'VN-631', '2020-10-10 20:55:00', '2020-10-10 22:15:00', 2, '<p>mô tả</p>');
INSERT INTO flight_schedule (flight_schedule_id, airport_from_id, airport_to_id, plane_id, price_seat_type_id, code,
                             departure_at, arrival_at, status, description)
    VALUE (35, 1, 5, 5, 35, 'VN-632', '2020-10-10 09:10:00', '2020-10-10 11:45:00', 5, '<p>mô tả</p>');
INSERT INTO flight_schedule (flight_schedule_id, airport_from_id, airport_to_id, plane_id, price_seat_type_id, code,
                             departure_at, arrival_at, status, description)
    VALUE (36, 1, 5, 5, 36, 'VN-633', '2020-10-10 20:55:00', '2020-10-10 22:15:00', 2, '<p>mô tả</p>');
INSERT INTO flight_schedule (flight_schedule_id, airport_from_id, airport_to_id, plane_id, price_seat_type_id, code,
                             departure_at, arrival_at, status, description)
    VALUE (37, 1, 6, 5, 37, 'VN-634', '2020-10-10 09:10:00', '2020-10-10 11:45:00', 2, '<p>mô tả</p>');
INSERT INTO flight_schedule (flight_schedule_id, airport_from_id, airport_to_id, plane_id, price_seat_type_id, code,
                             departure_at, arrival_at, status, description)
    VALUE (38, 1, 6, 6, 38, 'VN-635', '2020-10-10 20:55:00', '2020-10-10 22:15:00', 2, '<p>mô tả</p>');
INSERT INTO flight_schedule (flight_schedule_id, airport_from_id, airport_to_id, plane_id, price_seat_type_id, code,
                             departure_at, arrival_at, status, description)
    VALUE (39, 1, 7, 7, 39, 'VN-636', '2020-10-10 09:10:00', '2020-10-10 11:45:00', 2, '<p>mô tả</p>');
INSERT INTO flight_schedule (flight_schedule_id, airport_from_id, airport_to_id, plane_id, price_seat_type_id, code,
                             departure_at, arrival_at, status, description)
    VALUE (40, 1, 7, 8, 40, 'VN-637', '2020-10-10 20:55:00', '2020-10-10 22:15:00', 2, '<p>mô tả</p>');
INSERT INTO flight_schedule (flight_schedule_id, airport_from_id, airport_to_id, plane_id, price_seat_type_id, code,
                             departure_at, arrival_at, status, description)
    VALUE (41, 1, 8, 9, 41, 'VN-638', '2020-10-10 09:10:00', '2020-10-10 11:45:00', 2, '<p>mô tả</p>');
INSERT INTO flight_schedule (flight_schedule_id, airport_from_id, airport_to_id, plane_id, price_seat_type_id, code,
                             departure_at, arrival_at, status, description)
    VALUE (42, 1, 8, 10, 42, 'VN-639', '2020-10-10 20:55:00', '2020-10-10 22:15:00', 2, '<p>mô tả</p>');
INSERT INTO flight_schedule (flight_schedule_id, airport_from_id, airport_to_id, plane_id, price_seat_type_id, code,
                             departure_at, arrival_at, status, description)
    VALUE (43, 1, 9, 6, 43, 'VN-640', '2020-10-10 09:10:00', '2020-10-10 11:45:00', 6, '<p>mô tả</p>');
INSERT INTO flight_schedule (flight_schedule_id, airport_from_id, airport_to_id, plane_id, price_seat_type_id, code,
                             departure_at, arrival_at, status, description)
    VALUE (44, 1, 9, 8, 44, 'VN-641', '2020-10-10 20:55:00', '2020-10-10 22:15:00', 5, '<p>mô tả</p>');
INSERT INTO flight_schedule (flight_schedule_id, airport_from_id, airport_to_id, plane_id, price_seat_type_id, code,
                             departure_at, arrival_at, status, description)
    VALUE (45, 1, 10, 5, 45, 'VN-642', '2020-10-10 09:10:00', '2020-10-10 11:45:00', 4, '<p>mô tả</p>');
INSERT INTO flight_schedule (flight_schedule_id, airport_from_id, airport_to_id, plane_id, price_seat_type_id, code,
                             departure_at, arrival_at, status, description)
    VALUE (46, 1, 10, 6, 46, 'VN-643', '2020-10-10 20:55:00', '2020-10-10 22:15:00', 3, '<p>mô tả</p>');
INSERT INTO flight_schedule (flight_schedule_id, airport_from_id, airport_to_id, plane_id, price_seat_type_id, code,
                             departure_at, arrival_at, status, description)
    VALUE (47, 1, 11, 8, 47, 'VN-644', '2020-10-10 09:10:00', '2020-10-10 11:45:00', 2, '<p>mô tả</p>');
INSERT INTO flight_schedule (flight_schedule_id, airport_from_id, airport_to_id, plane_id, price_seat_type_id, code,
                             departure_at, arrival_at, status, description)
    VALUE (48, 1, 11, 9, 48, 'VN-645', '2020-10-10 20:55:00', '2020-10-10 22:15:00', 1, '<p>mô tả</p>');

INSERT INTO ticket (ticket_id, user_id, flight_schedule_id, promotion_id, pay_type_id, extra_service_ids, seat_type,
                    status, code, contact_gender, contact_first_name, contact_last_name, contact_email, contact_phone,
                    contact_address, total_price, amount_paid, total_passenger, description)
VALUES (1, 1, 18, NULL, 2, '', 1, 1, 'HIEUAB', 1, 'Đình Hiếu', 'Nguyễn', 'DinhHieu8896@gmail.com', '0868663316',
        'Hà Nội', 6888999, 6888999, 1, '<p>mô tả</p>');
INSERT INTO ticket (ticket_id, user_id, flight_schedule_id, promotion_id, pay_type_id, extra_service_ids, seat_type,
                    status, code, contact_gender, contact_first_name, contact_last_name, contact_email, contact_phone,
                    contact_address, total_price, amount_paid, total_passenger, description)
VALUES (2, 1, 20, NULL, 3, '', 2, 3, 'HIEUBC', 1, 'Đình Hiếu', 'Nguyễn', 'DinhHieu8896@gmail.com', '0868663317',
        'Nghệ An', 6888999, 6888999, 1, '<p>mô tả</p>');
INSERT INTO ticket (ticket_id, user_id, flight_schedule_id, promotion_id, pay_type_id, extra_service_ids, seat_type,
                    status, code, contact_gender, contact_first_name, contact_last_name, contact_email, contact_phone,
                    contact_address, total_price, amount_paid, total_passenger, description)
VALUES (3, 1, 23, NULL, 4, '', 3, 4, 'HIEUCD', 1, 'Đình Hiếu', 'Nguyễn', 'DinhHieu8896@gmail.com', '0868663318',
        'Hà Nội', 6888999, 6888999, 1, '<p>mô tả</p>');
INSERT INTO ticket (ticket_id, user_id, flight_schedule_id, promotion_id, pay_type_id, extra_service_ids, seat_type,
                    status, code, contact_gender, contact_first_name, contact_last_name, contact_email, contact_phone,
                    contact_address, total_price, amount_paid, total_passenger, description)
VALUES (4, 1, 26, NULL, 5, '', 1, 3, 'HIEUDE', 1, 'Đình Hiếu', 'Nguyễn', 'DinhHieu8896@gmail.com', '0868663319',
        'tp Vinh, Nghệ An', 6888999, 6888999, 1, '<p>mô tả</p>');
INSERT INTO ticket (ticket_id, user_id, flight_schedule_id, promotion_id, pay_type_id, extra_service_ids, seat_type,
                    status, code, contact_gender, contact_first_name, contact_last_name, contact_email, contact_phone,
                    contact_address, total_price, amount_paid, total_passenger, description)
VALUES (5, 1, 28, NULL, 6, '', 2, 2, 'HIEUEF', 1, 'Đình Hiếu', 'Nguyễn', 'DinhHieu8896@gmail.com', '0868663320',
        'Hà Nội', 6888999, 6888999, 1, '<p>mô tả</p>');
INSERT INTO ticket (ticket_id, user_id, flight_schedule_id, promotion_id, pay_type_id, extra_service_ids, seat_type,
                    status, code, contact_gender, contact_first_name, contact_last_name, contact_email, contact_phone,
                    contact_address, total_price, amount_paid, total_passenger, description)
VALUES (6, 1, 29, NULL, 5, '', 3, 1, 'HIEUGH', 1, 'Đình Hiếu', 'Nguyễn', 'DinhHieu8896@gmail.com', '0868663321',
        'Nghệ An', 6888999, 6888999, 1, '<p>mô tả</p>');
INSERT INTO ticket (ticket_id, user_id, flight_schedule_id, promotion_id, pay_type_id, extra_service_ids, seat_type,
                    status, code, contact_gender, contact_first_name, contact_last_name, contact_email, contact_phone,
                    contact_address, total_price, amount_paid, total_passenger, description)
VALUES (7, 1, 10, NULL, 4, '', 3, 2, 'HIEU88', 1, 'Đình Hiếu', 'Nguyễn', 'DinhHieu8896@gmail.com', '0868663315',
        'tp Vinh, Nghệ An', 3099000, 3099000, 1, '<p>mô tả</p>');
INSERT INTO ticket (ticket_id, user_id, flight_schedule_id, promotion_id, pay_type_id, extra_service_ids, seat_type,
                    status, code, contact_gender, contact_first_name, contact_last_name, contact_email, contact_phone,
                    contact_address, total_price, amount_paid, total_passenger, description)
VALUES (8, 1, 1, 1, 5, '1,3', 2, 4, 'HIEUOK', 1, 'Đình Hiếu', 'Nguyễn', 'DinhHieu8896@gmail.com', '0868663315',
        'tp Vinh, Nghệ An', 4637000, 4637000, 3, '<p>mô tả</p>');
INSERT INTO ticket (ticket_id, user_id, flight_schedule_id, promotion_id, pay_type_id, extra_service_ids, seat_type,
                    status, code, contact_gender, contact_first_name, contact_last_name, contact_email, contact_phone,
                    contact_address, total_price, amount_paid, total_passenger, description)
VALUES (9, 2, 6, NULL, 3, '', 1, 1, 'TUDEMO', 1, 'Thanh Tú', 'Trương', 'DinhHieu8896@gmail.com', '0868663315', 'Hà Nội',
        2699000, 2699000, 1, '<p>mô tả</p>');
INSERT INTO ticket (ticket_id, user_id, flight_schedule_id, promotion_id, pay_type_id, extra_service_ids, seat_type,
                    status, code, contact_gender, contact_first_name, contact_last_name, contact_email, contact_phone,
                    contact_address, total_price, amount_paid, total_passenger, description)
VALUES (10, NULL, 1, NULL, 2, '', 2, 3, 'DEMO01', 0, 'Kiều Linh', 'Trần', 'DinhHieu8896@gmail.com', '0868663315',
        'Hà Nội', 1799000, 1799000, 1, '<p>mô tả</p>');
INSERT INTO ticket (ticket_id, user_id, flight_schedule_id, promotion_id, pay_type_id, extra_service_ids, seat_type,
                    status, code, contact_gender, contact_first_name, contact_last_name, contact_email, contact_phone,
                    contact_address, total_price, amount_paid, total_passenger, description)
VALUES (11, NULL, 9, NULL, 1, '', 3, 2, 'DEMO02', 0, 'Thanh Mai', 'Phạm', 'DinhHieu8896@gmail.com', '0868663315',
        'Hà Nội', 2999000, 2999000, 1, '<p>mô tả</p>');
