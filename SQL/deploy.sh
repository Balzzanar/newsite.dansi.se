#!/bin/bash
#------------------------------------------------
# Deploy script for dansi.se sql scripts
#
#------------------------------------------------
db='dansidb'
user='<user>'
pass='<passwd>'


#------------------------------------------------
# Table deploy scripts
#
# echo '<SQL_SCRIPT>'
# mysql -u <USER> -p<PASS> <DATABASE> < <SQL_SCRIPT>
#------------------------------------------------
echo 'TBL: dansi_products'
mysql -u "$user" -p"$pass" "$db" < tbl_dansi_products.sql

echo 'TBL: dansi_sales'
mysql -u "$user" -p"$pass" "$db" < tbl_dansi_sales.sql


#------------------------------------------------
# Stored Procedure deploy scripts
#
# echo '<SQL_SCRIPT>'
# mysql -u <USER> -p<PASS> <DATABASE> < <SQL_SCRIPT>
#------------------------------------------------
echo 'PRO: dansi_products_get'
mysql -u "$user" -p"$pass" "$db" < pro_dansi_products_get.sql

echo 'PRO: dansi_product_get'
mysql -u "$user" -p"$pass" "$db" < pro_dansi_product_get.sql

echo 'PRO: dansi_product_new'
mysql -u "$user" -p"$pass" "$db" < pro_dansi_product_new.sql
