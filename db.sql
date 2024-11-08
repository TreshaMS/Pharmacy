CREATE DATABASE IF NOT EXISTS inventory;

USE inventory;

CREATE TABLE IF NOT EXISTS medicineInfo (
    id INT AUTO_INCREMENT PRIMARY KEY,
    medicine_name VARCHAR(255) NOT NULL,
    brand VARCHAR(255) NOT NULL,
    mg_tablet VARCHAR(50) NOT NULL,
    tablets_remaining INT NOT NULL,
    box_remaining INT NOT NULL,
    expiration_date DATE,
    last_purchase_date DATE
);
