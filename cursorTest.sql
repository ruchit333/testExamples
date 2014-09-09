CREATE PROCEDURE CursorProc()
 BEGIN
 DECLARE no_more_products, quantity_in_stock INT DEFAULT 0;
 DECLARE prd_code VARCHAR(255);
 DECLARE cur_product CURSOR FOR SELECT productCode FROM products;
 DECLARE CONTINUE HANDLER FOR NOT FOUND
 SET  no_more_products = 1;

 CREATE TABLE infologs (
 Id int(11) NOT NULL AUTO_INCREMENT,
 Msg varchar(255) NOT NULL,
 PRIMARY KEY (Id)
 );

 OPEN  cur_product;

 FETCH  cur_product INTO prd_code;
 REPEAT
 SELECT  quantityInStock INTO quantity_in_stock FROM  products WHERE  productCode = prd_code;
 IF  quantity_in_stock < 100 THEN
 INSERT  INTO infologs(msg) VALUES  (prd_code);
 END  IF;
 FETCH  cur_product INTO prd_code;
 UNTIL  no_more_products = 1
 END REPEAT;

 CLOSE  cur_product;

 SELECT *  FROM infologs;
 DROP TABLE  infologs;
 END$$
DELIMITER ;
