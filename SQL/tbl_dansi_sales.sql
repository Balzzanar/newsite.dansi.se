DELIMITER //
/*
|-------------------------------------------------------- 
| Sales
| 
| Table to hold the number of sold items.
| 
| Shall be updated with a trigger at insert into
| orderproducts. 
|
| Insert a new row with a trigger at insert into
| products, default num = 0.
|-------------------------------------------------------- 
*/

CREATE TABLE IF NOT EXISTS `dansi_sales`
(
  `id_product`  INT NOT NULL	/* Internal product id */
 ,`num`  	  	  INT				    /* Number of sales made on the product */
)

//
