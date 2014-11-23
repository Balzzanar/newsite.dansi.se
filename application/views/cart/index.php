<?php
/*
* Package: View
* Controller: Cart
*
* The view for the cart!
*
*/

?>

<!-- Main Site container begin -->
<div class="container">

    <!-- Person description -->
    <div id="singleitem-blob" class="hero-unit std-box-color col-md-offset-1">
        <h1>Kundvagn</h1>

        <br />
        <div class="row">
                <div class="col-md-11">
                    <table class="table contact-table">
                        <tr>
                            <th>Titel</th>
                            <th>Typ</th>
                            <th>Pris</th>
                            <th>Tabort</th>
                        </tr>
                        <?php foreach($cart->items as $item): ?>
                            <tr>
                                <td><?php echo $item->name; ?></td>
                                <td>Örhänge</td>
                                <td><?php echo $item->price * $item->num; echo ' ('.$item->num.'st)'; ?></td>
                                <td><a href="<?php echo base_url().'cart/remove/'.$item->idproduct;?>"><span class="glyphicon glyphicon-trash"></span></a></td>
                            </tr>
                        <?php endforeach; ?>
                    </table>
            </div>
        </div>
        <div class="col-md-3 col-md-offset-8"><h4>Totalt: <?php echo $cart->total; ?></h4></div>
        <br />

    </div>

    <!-- End Main Site container -->
</div>

