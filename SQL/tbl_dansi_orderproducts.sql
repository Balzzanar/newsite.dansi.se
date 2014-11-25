DELIMITER //
/*
|-------------------------------------------------------- 
| Ordered Products
| 
| Table to connect an order to a product, in order
| to keep track of which products are inclunded in 
| what order.
|-------------------------------------------------------- 
*/

CREATE TABLE IF NOT EXISTS `dansi_orderproducts`
(
	`id_order`		INT NOT NULL		/* Internal order id */
	,`id_product`  	INT NOT NULL 		/* Internal product id */
)

//
