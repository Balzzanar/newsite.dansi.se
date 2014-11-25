DELIMITER //
/*
|--------------------------------------------------------
| dansi_product_del
|
| Flaggs a product for delete given it's id.
|--------------------------------------------------------
*/

DROP PROCEDURE IF EXISTS dansi_product_del;

CREATE PROCEDURE `dansi_product_del` (IN inID INT)

BEGIN
	UPDATE
		dansi_products p
  SET
    p.del_flg         = 'X'
    ,p.not_show_flg   = 'X'
  WHERE
    p.id_product = inID
;
END//
