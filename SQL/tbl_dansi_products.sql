DELIMITER //
/*
|-------------------------------------------------------- 
| Products
| 
| Table to hold all the products for the site.
|-------------------------------------------------------- 
*/

CREATE TABLE IF NOT EXISTS `dansi_products`
(
  `id_product`  INT NOT NULL AUTO_INCREMENT	    /* Internal product id */
 ,`name`    	VARCHAR(250)				              /* Name of the product */
 ,`price`    	INT 					  	                /* Price of the product */
 ,`descript`   	TEXT 						                /* Product description */
 ,`img`     	VARCHAR(250) 				              /* Name of image, (full path) */
 ,`img_thumb`	VARCHAR(250) 				              /* Name of thumbnail image, (full path) */
 ,`category`	int 				                      /* What category the product is */
 ,`del_flg`	CHAR(1) DEFAULT ''				          /* Delete flag, 'X' == flagged for delete */
 ,`not_show_flg`	CHAR(1) DEFAULT ''				    /* Flag if the product shall show up on the page, 'X' == flagged for not show */
 ,PRIMARY KEY (`id_product`)
)

//
