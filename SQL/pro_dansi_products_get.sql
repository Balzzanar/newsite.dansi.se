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

CREATE PROCEDURE `dansi_products_get` (IN in_cat INT)

BEGIN
  IF in_cat > 0 THEN
    SELECT
      p.id_product as 'idproduct'
      ,p.name
      ,p.price
      ,p.descript
      ,p.img
      ,p.img_thumb
      ,p.category
      ,s.num
    FROM
      dansi_products p
      ,dansi_sales s
    WHERE
      p.id_product        = s.id_product
      and p.del_flg       != 'X'
      and p.category      = in_cat;

  ELSE

    SELECT
      p.id_product as 'idproduct'
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
    and p.del_flg       != 'X';

  END IF;


END//
