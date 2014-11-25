DELIMITER //
/*
|-------------------------------------------------------- 
| GetAllProducts
| 
| Returns all the products from the products table.
| Dose not return delete flagged products.
|-------------------------------------------------------- 
*/

DROP PROCEDURE IF EXISTS GetAllProducts;
DROP PROCEDURE IF EXISTS dansi_products_get;

CREATE PROCEDURE `dansi_products_get` ()

BEGIN
	SELECT 
		p.id_product
		,p.name
		,p.price
		,p.descript
		,p.img
		,p.img_thumb
		,s.num
	FROM
    dansi_products p
		,dansi_sales s
	WHERE
		  p.id_product    = s.id_product
  and p.del_flg       != 'X'
;
END//
