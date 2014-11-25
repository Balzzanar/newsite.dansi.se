DELIMITER //
/*
|--------------------------------------------------------
| dansi_product_upd
|
| Updates a product given all information about it.
| All attributes are updated.
|--------------------------------------------------------
*/

DROP PROCEDURE IF EXISTS dansi_product_upd;

CREATE PROCEDURE `dansi_product_upd` (
   IN inID INT
  ,IN inName VARCHAR(250)
  ,IN inPrice INT
  ,IN inDescript TEXT
  ,IN inImg VARCHAR(250)
  ,IN inImg_thumb VARCHAR(250)
  ,IN inCategory INT
  ,IN inNot_show_flg CHAR(1)
)

BEGIN
	UPDATE
		dansi_products p
  SET
    p.name            = inName
    ,p.price          = inPrice
    ,p.descript       = inDescript
    ,p.img            = inImg
    ,p.img_thumb      = inImg_thumb
    ,p.category       = inCategory
    ,p.not_show_flg   = inNot_show_flg
  WHERE
    p.id_product = inID
;
END//
