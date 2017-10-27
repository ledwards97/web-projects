CREATE TABLE tbl_item
(
item_id int NOT NULL AUTO_INCREMENT,
item_desc varchar(140),
sex char(1),
item_size varchar(3),
item_price decimal(6,2),
stock_lvl int(4),
PRIMARY KEY (item_id)
);