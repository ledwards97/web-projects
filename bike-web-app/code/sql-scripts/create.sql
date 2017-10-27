CREATE TABLE tbl_bikes(
ID INT NOT NULL AUTO_INCREMENT,
make VARCHAR(12),
model VARCHAR(12),
bike_type VARCHAR(8),
gender CHAR(1),
frame_size_inches INT(2),
wheel_size_inches INT(2),
colour VARCHAR(12),
stock INT(4),
price DECIMAL(8,2),
PRIMARY KEY (ID)
);

