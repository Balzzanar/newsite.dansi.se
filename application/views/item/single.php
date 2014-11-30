<?php
/*
* Package: View
* Controller: Item
*
* The single item view
*
*/

?>

<!-- Main Site container begin -->
<div class="container">

    <!-- Person description -->
    <div id="singleitem-blob" class="hero-unit std-box-color col-md-offset-1">
        <h1><?php echo $product->name; ?></h1>

        <div class="row">
            <div class="col-md-5">
                <img src="<?php echo $product->img; ?>">
            </div>

            <div class="col-md-6 col-md-offset-1">
                <p><a href="">Örhänge</a></p>
                <?php echo $product->descript; ?>

                <br /><br />
                <!-- Item Information Table -->
                <div class="span4">
                    <table class="table contact-table">
                        <tr>
                            <td>Pris:</td>
                            <td><?php echo $product->price; ?></td>
                        </tr>
                        <tr>
                            <td>Mer info:</td>
                            <td>adsasd</td>
                        </tr>
                    </table>
                </div>
                <button id="addbtn" item-id="<?php echo $product->idproduct;?>" type="button" class="btn btn-default dropdown-toggle"><span class="glyphicon glyphicon-shopping-cart"></span> Lägg i kundvagnen</button>
            </div>
        </div>
        <br />

    </div>

    <!-- End Main Site container -->
</div>

