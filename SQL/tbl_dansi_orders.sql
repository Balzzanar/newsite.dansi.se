DELIMITER //
/*
|-------------------------------------------------------- 
| Orders
| 
| Table to hold all the products for the site.
|-------------------------------------------------------- 
*/

CREATE TABLE IF NOT EXISTS `dansi_orders`
(
  `id_order`	INT NOT NULL AUTO_INCREMENT	/* Internal order id */
 ,`name`    	VARCHAR(100)				/* Name enterd by customer */
 ,`address`    	VARCHAR(250) 				/* Address enterd by customer */
 ,`zip`   		VARCHAR(10) 				/* Zipcode enterd by customer */
 ,`contry`     	VARCHAR(50) 				/* Contry enterd by customer */
 ,`ip`	     	VARCHAR(50) 				/* Ip address of the clint */
 ,`totprice`	INT 						/* Total order value */
 ,`orderdate`	INT 						/* Date of order creation */
 ,PRIMARY KEY (`id_order`)
)

//
