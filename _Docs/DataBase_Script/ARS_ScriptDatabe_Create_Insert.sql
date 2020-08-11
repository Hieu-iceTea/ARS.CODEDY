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
    `verification_code` VARCHAR(8)   DEFAULT NULL,
    `remember_token`    VARCHAR(128) DEFAULT NULL,

    `gender`            BOOLEAN          NOT NULL,
    `first_name`        VARCHAR(64),
    `last_name`         VARCHAR(64),
    `dob`               DATE,
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
    `extra_service_id` INT AUTO_INCREMENT,

    `name`             VARCHAR(64)      NOT NULL,
    `price`            INT(16) UNSIGNED NOT NULL,
    `image`            VARCHAR(128)     NOT NULL,
    `description`      TEXT             NOT NULL,

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

    `location`    VARCHAR(64) NOT NULL,

    `code`        VARCHAR(8)  NOT NULL,
    `name`        VARCHAR(32) NOT NULL,
    `description` VARCHAR(128),

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

    `eco_price`           INT(16) UNSIGNED,
    `eco_qty_remain`      INT(16) UNSIGNED,
    `plus_price`          INT(16) UNSIGNED,
    `plus_qty_remain`     INT(16) UNSIGNED,
    `business_price`      INT(16) UNSIGNED,
    `business_qty_remain` INT(16) UNSIGNED,

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
    `description` VARCHAR(128),

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
    `ticket_id`          INT AUTO_INCREMENT,

    `user_id`            INT UNSIGNED,
    `flight_schedule_id` INT UNSIGNED               NOT NULL,
    `promotion_id`       INT UNSIGNED,
    `pay_type_id`        INT UNSIGNED               NOT NULL,
    `extra_service_ids`  VARCHAR(32),

    `seat_type`          TINYINT UNSIGNED           NOT NULL,
    `status`             TINYINT UNSIGNED DEFAULT 0 NOT NULL,

    `code`               VARCHAR(8)                 NOT NULL,

    `contact_gender`     BOOLEAN                    NOT NULL,
    `contact_first_name` VARCHAR(16)                NOT NULL,
    `contact_last_name`  VARCHAR(16)                NOT NULL,
    `contact_email`      VARCHAR(64)                NOT NULL,
    `contact_phone`      VARCHAR(16)                NOT NULL,
    `contact_address`    VARCHAR(128)               NOT NULL,

    `total_price`        INT(16) UNSIGNED           NOT NULL,
    `total_passenger`    INT(16) UNSIGNED           NOT NULL,
    `description`        VARCHAR(16)                NOT NULL,

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
#Password: 123456

INSERT INTO user (user_id, user_name, email, password, level, email_verified_at, gender, first_name, last_name, dob, phone, address)
VALUES (1, 'Hieu-iceTea', 'DinhHieu8896@gmail.com', '$2y$10$YKY51A9REcXLZVRAC87AcuXnC.Nb8WK8rD/WgfAVxPSAelLZHQf06', 2, '2020-08-08', 0, 'Đình Hiếu', 'Nguyễn', '1996-08-08', '0868663315', 'Nghệ An');
INSERT INTO user (user_id, user_name, email, password, level, email_verified_at, gender, first_name, last_name, dob, phone, address)
VALUES (2, 'truong-thanh-tu', 'truongthanhtu03091998@gmail.com', '$2y$10$YKY51A9REcXLZVRAC87AcuXnC.Nb8WK8rD/WgfAVxPSAelLZHQf07', 2, '2020-08-08', 0, 'Thanh Tú', 'Trương', '1998-09-03', '0359077335', 'Huế');
INSERT INTO user (user_id, user_name, email, password, level, email_verified_at, gender, first_name, last_name, dob, phone, address)
VALUES (3, 'chanhoa', 'chanhoa28112k@gmail.com', '$2y$10$YKY51A9REcXLZVRAC87AcuXnC.Nb8WK8rD/WgfAVxPSAelLZHQf08', 2, '2020-08-08', 1, 'Chan Hòa', 'Đỗ Thị', '2000-01-01', '', '');
INSERT INTO user (user_id, user_name, email, password, level, email_verified_at, gender, first_name, last_name, dob, phone, address)
VALUES (4, 'vuquanghuy2001', 'vuquanghuyxl1234@gmail.com', '$2y$10$YKY51A9REcXLZVRAC87AcuXnC.Nb8WK8rD/WgfAVxPSAelLZHQf09', 2, '2020-08-08', 0, 'Quang Huy', 'Vũ', '2000-01-01', '', '');
INSERT INTO user (user_id, user_name, email, password, level, email_verified_at, gender, first_name, last_name, dob, phone, address)
VALUES (5, 'tuanpth1909', 'phamtuancules20@gmail.com', '$2y$10$YKY51A9REcXLZVRAC87AcuXnC.Nb8WK8rD/WgfAVxPSAelLZHQf10', 2, '2020-08-08', 0, 'Tuân', 'Phạm', '2000-01-01', '', '');
INSERT INTO user (user_id, user_name, email, password, level, email_verified_at, gender, first_name, last_name, dob, phone, address)
VALUES (6, 'host', 'ars.codedy@gmail.com', '$2y$10$YKY51A9REcXLZVRAC87AcuXnC.Nb8WK8rD/WgfAVxPSAelLZHQf11', 0, '2020-08-08', 0, '', '', '2000-01-01', '', '');
INSERT INTO user (user_id, user_name, email, password, level, email_verified_at, gender, first_name, last_name, dob, phone, address)
VALUES (7, 'admin', 'admin_ars.codedy@gmail.com', '$2y$10$YKY51A9REcXLZVRAC87AcuXnC.Nb8WK8rD/WgfAVxPSAelLZHQf12', 1, '2020-08-08', 0, '', '', '2000-01-01', '', '');
INSERT INTO user (user_id, user_name, email, password, level, email_verified_at, gender, first_name, last_name, dob, phone, address)
VALUES (8, 'member', 'member_ars.codedy@gmail.com', '$2y$10$YKY51A9REcXLZVRAC87AcuXnC.Nb8WK8rD/WgfAVxPSAelLZHQf13', 2, '2020-08-08', 0, '', '', '2000-01-01', '', '');

INSERT INTO extra_service (extra_service_id, name, price, image, description)
VALUE (1,  'Choose your preferred seat',  120000,  'choose_your_preferred_seat.jpg ', 'Description');
INSERT INTO extra_service (extra_service_id, name, price, image, description)
VALUE (2,  'Luggage and special services',  2000,  'luggage_and_special_services.jpg ', 'Description');
INSERT INTO extra_service (extra_service_id, name, price, image, description)
VALUE (3,  'Priority Check-in',  111000,  'priority_check_in.jpg ', 'Description');
INSERT INTO extra_service (extra_service_id, name, price, image, description)
VALUE (4,  'Buy more baggage',  20000,  'buy_more_baggage.jpg ', 'Description');
INSERT INTO extra_service (extra_service_id, name, price, image, description)
VALUE (5,  'Shipping services',  300000,  'shipping_services ', 'Description');

INSERT INTO airport (airport_id, location, code, name, description)
VALUES (1, 'Hà Nội', 'HAN', 'Nội Bài', '');
INSERT INTO airport (airport_id, location, code, name, description)
VALUES (2, 'Hồ Chí Minh', 'SGN', 'Tân Sơn Nhất', '');
INSERT INTO airport (airport_id, location, code, name, description)
VALUES (3, 'Nghệ An', 'VII', 'Vinh', '');
INSERT INTO airport (airport_id, location, code, name, description)
VALUES (4, 'Thừa Thiên - Huế', 'HUI', 'Phú Bài', '');
INSERT INTO airport (airport_id, location, code, name, description)
VALUES (5, 'Đà Nẵng', 'DAD', 'Đà Nẵng', '');
INSERT INTO airport (airport_id, location, code, name, description)
VALUES (6, 'Bình Định', 'UIH', 'Phù Cát', '');
INSERT INTO airport (airport_id, location, code, name, description)
VALUES (7, 'Hải Phòng', 'HPH', 'Cát Bi', '');
INSERT INTO airport (airport_id, location, code, name, description)
VALUES (8, 'Khánh Hòa', 'CXR', 'Cam Ranh', '');
INSERT INTO airport (airport_id, location, code, name, description)
VALUES (9, 'Kiên Giang', 'PQC', 'Phú Quốc', '');
INSERT INTO airport (airport_id, location, code, name, description)
VALUES (10, 'Quảng Ninh', 'VDO', 'Vân Đồn', '');
INSERT INTO airport (airport_id, location, code, name, description)
VALUES (11, 'Cần Thơ', 'VCA', 'Cần Thơ', '');

INSERT INTO plane (plane_id, code, name)
VALUE (1, ' B787', ' BOEING 787');
INSERT INTO plane (plane_id, code, name)
VALUE (2, ' A350', ' AIRBUS A350');
INSERT INTO plane (plane_id, code, name)
VALUE (3, ' A321', ' AIRBUS A321');
INSERT INTO plane (plane_id, code, name)
VALUE (4, ' B737', ' BOEING 737');
INSERT INTO plane (plane_id, code, name)
VALUE (5, ' B235', ' BOEING 235');
INSERT INTO plane (plane_id, code, name)
VALUE (6, ' B198', ' BOEING 198');
INSERT INTO plane (plane_id, code, name)
VALUE (7, ' B789', ' BOEING 789');
INSERT INTO plane (plane_id, code, name)
VALUE (8, ' A456', ' AIRBUS456');
INSERT INTO plane (plane_id, code, name)
VALUE (9, ' A284', ' AIRBUS284');
INSERT INTO plane (plane_id, code, name)
VALUE (10, ' A365', ' AIRBUS365');

INSERT INTO price_seat_type (price_seat_type_id,eco_price, eco_qty_remain, plus_price, plus_qty_remain, business_price, business_qty_remain)
VALUE (1, 599000, 30, 1199000, 50, 1699000, 20);
INSERT INTO price_seat_type (price_seat_type_id,eco_price, eco_qty_remain, plus_price, plus_qty_remain, business_price, business_qty_remain)
VALUE (2, 699000, 30, 1399000, 50, 1799000, 20);
INSERT INTO price_seat_type (price_seat_type_id,eco_price, eco_qty_remain, plus_price, plus_qty_remain, business_price, business_qty_remain)
VALUE (3, 799000, 30, 1299000, 50, 1899000, 20);
INSERT INTO price_seat_type (price_seat_type_id,eco_price, eco_qty_remain, plus_price, plus_qty_remain, business_price, business_qty_remain)
VALUE (4, 899000, 30, 1399000, 50, 1999000, 20);
INSERT INTO price_seat_type (price_seat_type_id,eco_price, eco_qty_remain, plus_price, plus_qty_remain, business_price, business_qty_remain)
VALUE (5, 999000, 30, 1449000, 50, 2099000, 20);
INSERT INTO price_seat_type (price_seat_type_id,eco_price, eco_qty_remain, plus_price, plus_qty_remain, business_price, business_qty_remain)
VALUE (6, 1099000, 30, 1499000, 50, 2199000, 20);
INSERT INTO price_seat_type (price_seat_type_id,eco_price, eco_qty_remain, plus_price, plus_qty_remain, business_price, business_qty_remain)
VALUE (7, 1199000, 30, 1549000, 50, 2299000, 20);
INSERT INTO price_seat_type (price_seat_type_id,eco_price, eco_qty_remain, plus_price, plus_qty_remain, business_price, business_qty_remain)
VALUE (8, 1299000, 30, 1599000, 50, 2399000, 20);
INSERT INTO price_seat_type (price_seat_type_id,eco_price, eco_qty_remain, plus_price, plus_qty_remain, business_price, business_qty_remain)
VALUE (9, 1399000, 30, 1649000, 50, 2499000, 20);

INSERT INTO promotion (promotion_id, code, title, discount, qty_total, qty_remain, expiration_date, description)
VALUES (1, 'ABC123', 'Giảm giá tháng 8', 100000, 50, 28, '2020-08-08', 'Mô tả');
INSERT INTO promotion (promotion_id, code, title, discount, qty_total, qty_remain, expiration_date, description)
VALUES (2, 'BAY888', 'Bay lắc tưng bừng', 256000, 100, 86, '2020-08-30', 'Mô tả');
INSERT INTO promotion (promotion_id, code, title, discount, qty_total, qty_remain, expiration_date, description)
VALUES (3, 'LAX999', 'Giảm giá quốc khách 2/9', 209000, 30, 29, '2020-10-01', 'Mô tả');
INSERT INTO promotion (promotion_id, code, title, discount, qty_total, qty_remain, expiration_date, description)
VALUES (4, 'HAHA96', 'Vừa bay vừa cười', 370000, 80, 60, '2020-11-20', 'Mô tả');
INSERT INTO promotion (promotion_id, code, title, discount, qty_total, qty_remain, expiration_date, description)
VALUES (5, 'VIP', 'Giảm giá đặc biệt cho khách hàng VIP', 500000, 20, 18, '2020-12-30', 'Mô tả');

INSERT INTO pay_type (pay_type_id, name, description)
VALUES (1, 'VN Pay', 'Description');
INSERT INTO pay_type (pay_type_id, name, description)
VALUES (2, 'Credit Cart', 'Description');
INSERT INTO pay_type (pay_type_id, name, description)
VALUES (3, 'Pay Later', 'Description');
INSERT INTO pay_type (pay_type_id, name, description)
VALUES (4, 'Master Card', 'Description');
INSERT INTO pay_type (pay_type_id, name, description)
VALUES (5, 'JCB', 'Description');
INSERT INTO pay_type (pay_type_id, name, description)
VALUES (6, 'VISA', 'Description');

INSERT INTO passenger (passenger_id, ticket_id, gender, passenger_type, first_name, last_name, dob, with_passenger)
VALUES (1, 1, 0, 1, 'Đình Hiếu', 'Nguyễn', '1996-08-08', '');
INSERT INTO passenger (passenger_id, ticket_id, gender, passenger_type, first_name, last_name, dob, with_passenger)
VALUES (2, 1, 1, 2, 'Khánh Ví', 'Nguyễn', '2010-06-25', '');
INSERT INTO passenger (passenger_id, ticket_id, gender, passenger_type, first_name, last_name, dob, with_passenger)
VALUES (3, 1, 1, 3, 'ĐìnhTùng', 'Nguyễn', '2020-01-02', 'Nguyễn Đình Hiếu');
INSERT INTO passenger (passenger_id, ticket_id, gender, passenger_type, first_name, last_name, dob, with_passenger)
VALUES (4, 2, 0, 1, 'Đình Hiếu', 'Nguyễn', '1996-08-08', '');
INSERT INTO passenger (passenger_id, ticket_id, gender, passenger_type, first_name, last_name, dob, with_passenger)
VALUES (5, 3, 1, 1, 'Thanh Tú', 'Trương', '1998-09-03', '');
INSERT INTO passenger (passenger_id, ticket_id, gender, passenger_type, first_name, last_name, dob, with_passenger)
VALUES (6, 4, 1, 1, 'Kiều Linh', 'Trần', '2000-01-01', '');
INSERT INTO passenger (passenger_id, ticket_id, gender, passenger_type, first_name, last_name, dob, with_passenger)
VALUES (7, 5, 1, 1, 'Thanh Mai', 'Phạm', '2001-06-02', '');

INSERT INTO flight_schedule ( flight_schedule_id, airport_from_id, airport_to_id, plane_id,  price_seat_type_id, code, departure_at, arrival_at, description)
VALUE (1, 1, 2, 1, 1, 'VN-599', '2020-10-10 06:15:00', '2020-10-10 9:35:00', 'Description');
INSERT INTO flight_schedule ( flight_schedule_id, airport_from_id, airport_to_id, plane_id,  price_seat_type_id, code, departure_at, arrival_at, description)
VALUE (2, 1, 2, 2, 2, 'VN-600', '2020-10-10 08:10:00', '2020-10-10 10:35:00', 'Description');
INSERT INTO flight_schedule ( flight_schedule_id, airport_from_id, airport_to_id, plane_id,  price_seat_type_id, code, departure_at, arrival_at, description)
VALUE (3, 1, 2, 3, 3, 'VN-601', '2020-10-10 16:10:00', '2020-10-10 10:35:00', 'Description');
INSERT INTO flight_schedule ( flight_schedule_id, airport_from_id, airport_to_id, plane_id,  price_seat_type_id, code, departure_at, arrival_at, description)
VALUE (4, 1, 2, 4, 4, 'VN-602', '2020-10-10 21:10:00', '2020-10-10 10:35:00', 'Description');
INSERT INTO flight_schedule ( flight_schedule_id, airport_from_id, airport_to_id, plane_id,  price_seat_type_id, code, departure_at, arrival_at, description)
VALUE (5, 1, 2, 5, 5, 'VN-603', '2020-10-10 06:15:01', '2020-10-10 10:35:00', 'Description');
INSERT INTO flight_schedule ( flight_schedule_id, airport_from_id, airport_to_id, plane_id,  price_seat_type_id, code, departure_at, arrival_at, description)
VALUE (6, 2, 1, 6, 6, 'VN-604', '2020-10-10 08:10:01', '2020-10-10 10:35:00', 'Description');
INSERT INTO flight_schedule ( flight_schedule_id, airport_from_id, airport_to_id, plane_id,  price_seat_type_id, code, departure_at, arrival_at, description)
VALUE (7, 2, 1, 7, 7, 'VN-605', '2020-10-10 16:10:01', '2020-10-10 10:35:00', 'Description');
INSERT INTO flight_schedule ( flight_schedule_id, airport_from_id, airport_to_id, plane_id,  price_seat_type_id, code, departure_at, arrival_at, description)
VALUE (8, 2, 1, 8, 8, 'VN-606', '2020-10-10 21:10:01', '2020-10-10 10:35:00', 'Description');
INSERT INTO flight_schedule ( flight_schedule_id, airport_from_id, airport_to_id, plane_id,  price_seat_type_id, code, departure_at, arrival_at, description)
VALUE (9, 5, 2, 9, 9, 'VN-607', '2020-10-15 16:15:01', '2020-10-15 17:15:01', 'Description');
INSERT INTO flight_schedule ( flight_schedule_id, airport_from_id, airport_to_id, plane_id,  price_seat_type_id, code, departure_at, arrival_at, description)
VALUE (10, 5, 2, 10, 10, 'VN-608', '2020-10-15 18:15:01', '2020-10-15 19:15:02', 'Description');
INSERT INTO flight_schedule ( flight_schedule_id, airport_from_id, airport_to_id, plane_id,  price_seat_type_id, code, departure_at, arrival_at, description)
VALUE (11, 5, 2, 7, 2, 'VN-609', '2020-10-15 21:15:03', '2020-10-15 22:15:03', 'Description');

INSERT INTO ticket (ticket_id, user_id, flight_schedule_id, promotion_id, pay_type_id, extra_service_ids, seat_type, status, code, contact_gender, contact_first_name, contact_last_name, contact_email, contact_phone, contact_address, total_price, total_passenger, description)
VALUES (1, 1, 1, 1, 1, '1,3', 2, 4, 'HIEU01', 1, 'Đình Hiếu', 'Nguyễn', 'DinhHieu8896@gmail.com', '0868663315', 'Hà Nội', 6900000, 3, 'Mô tả về vé này');
INSERT INTO ticket (ticket_id, user_id, flight_schedule_id, promotion_id, pay_type_id, extra_service_ids, seat_type, status, code, contact_gender, contact_first_name, contact_last_name, contact_email, contact_phone, contact_address, total_price, total_passenger, description)
VALUES (2, 1, 10, NULL, 1, '', 3, 2, 'HIEU02', 1, 'Đình Hiếu', 'Nguyễn', 'DinhHieu8896@gmail.com', '0868663315', 'Hà Nội', 2500000, 1, 'Mô tả về vé này');
INSERT INTO ticket (ticket_id, user_id, flight_schedule_id, promotion_id, pay_type_id, extra_service_ids, seat_type, status, code, contact_gender, contact_first_name, contact_last_name, contact_email, contact_phone, contact_address, total_price, total_passenger, description)
VALUES (3, NULL, 6, NULL, 1, '', 1, 1, 'DEMO01', 1, 'Thanh Tú', 'Trương', 'DinhHieu8896@gmail.com', '0868663315', 'Hà Nội', 1200000, 1, 'Mô tả về vé này');
INSERT INTO ticket (ticket_id, user_id, flight_schedule_id, promotion_id, pay_type_id, extra_service_ids, seat_type, status, code, contact_gender, contact_first_name, contact_last_name, contact_email, contact_phone, contact_address, total_price, total_passenger, description)
VALUES (4, NULL, 1, NULL, 1, '', 2, 2, 'DEMO02', 0, 'Kiều Linh', 'Trần', 'DinhHieu8896@gmail.com', '0868663315', 'Hà Nội', 2200000, 1, 'Mô tả về vé này');
INSERT INTO ticket (ticket_id, user_id, flight_schedule_id, promotion_id, pay_type_id, extra_service_ids, seat_type, status, code, contact_gender, contact_first_name, contact_last_name, contact_email, contact_phone, contact_address, total_price, total_passenger, description)
VALUES (5, NULL, 10, NULL, 1, '', 3, 3, 'DEMO03', 0, 'Thanh Mai', 'Phạm', 'DinhHieu8896@gmail.com', '0868663315', 'Hà Nội', 2500000, 1, 'Mô tả về vé này');
