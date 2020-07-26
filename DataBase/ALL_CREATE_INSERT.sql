# - - - - - - - - - - - - - - - - - - - - Create DataBase - - - - - - - - - - - - - - - - - - - -  #

# Create DataBase -> ARS
DROP DATABASE IF EXISTS ARS;
CREATE DATABASE IF NOT EXISTS ARS;

USE ARS;

# - - - - - - - - - - - - - - - - - - - - Create Tables - - - - - - - - - - - - - - - - - - - -  #

# Create Table -> CreditCard
DROP TABLE IF EXISTS CreditCards;
CREATE TABLE IF NOT EXISTS CreditCards (
    ID INT AUTO_INCREMENT,

    Name VARCHAR(64),
    Number  INT(64),
    CVV  INT(16),
    ExpirationMonth  INT(2),
    ExpirationYear  INT(2),

    Created_By NVARCHAR(32) DEFAULT 'Hieu-iceTea',
    Created_At DATETIME DEFAULT CURRENT_TIME,
    Updated_By NVARCHAR(32) DEFAULT NULL,
    Updated_At DATETIME DEFAULT NULL,
    Version INT DEFAULT 1,
    Enabled BOOLEAN DEFAULT TRUE,

    PRIMARY KEY (ID)
) ENGINE InnoDB;


# - - - - - - - - - - - - - - - - - - - - Insert Data - - - - - - - - - - - - - - - - - - - -  #
# Phần này Hiếu sẽ viết scrip insert sau, hoặc hướng dẫn AE tự viết! [Dùng excel đổ data cho nhanh]
