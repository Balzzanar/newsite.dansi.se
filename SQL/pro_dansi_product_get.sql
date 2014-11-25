DELIMITER //
/*
|--------------------------------------------------------
| dansi_product_get
|
| Returns the product that match the given product id.
| Dose not return delete flagged products.
|--------------------------------------------------------
*/

DROP PROCEDURE IF EXISTS dansi_product_get;

CREATE PROCEDURE `dansi_product_get` (IN inID INT)

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
      p.id_product = s.id_product
  and p.id_product = inID
  and p.del_flg    != 'X'
;
END//
