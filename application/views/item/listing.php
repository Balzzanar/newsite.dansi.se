<?php 
/*
* Package: View
* Controller: Gallery
*
* The gallery view for dansi.se
*
*/

/*
The main object for a product!

<div class="well well-large span3 std-box-color">
	LOLE!
	<a href="item.html" class="thumbnail">
		<img src="holder.js/300x200">
	</a>
	Hejsan, är har vi en beskrivande text!
</div>

*/
?>


<!-- Main Site container begin -->
<div class="container">

	<?php if ($show_top_sellers): ?>
	    <!-- Head images for top sold -->
	    <div class="span12 best-sale">
    	<h2>Best sellers</h2>

		<?php foreach ($best_products as $best_product):?>
	        <div class="well well-large span3 best-sale-prod">
	            <?php echo $best_product->name; ?>
	            <a href="<?php echo base_url()."item/".$best_product->idproduct ?>" class="thumbnail">
	                <img src="holder.js/300x200">
	            </a>
	            <?php echo $best_product->descript; ?>
	        </div>

	    <?php endforeach; ?>

	    </div>

	<?php endif; ?>


    <!-- Main gallery page for all products -->
    <div class="span12"> <!-- Product listing begin -->

    	<!-- Listing category heading -->
    	<div class="well well-large span10 std-box-color">
    			
    			<?php 
    				if ($active_category == 1){
    					echo '<h4 id="category_heading">Örhänge</h4>';

    				} else if ($active_category == 2){
    					echo '<h4 id="category_heading">Halsband</h4>';

    				} else if ($active_category == 3){
    					echo '<h4 id="category_heading">Armband</h4>';

    				} else {
                        echo '<h4 id="category_heading">Allt i galleriet</h4>';
                    }
    			?>	

        </div>

    	<?php foreach ($products as $product):?>
	        <div class="well well-large span3 std-box-color">
	            <?php echo $product->name; ?>
	            <a href="<?php echo base_url()."item/".$product->idproduct ?>" class="thumbnail">
	                <img src="holder.js/300x200">
	            </a>
	            <?php echo $product->descript; ?>
	        </div>

	    <?php endforeach; ?>

    </div> <!-- End product listing -->

    <!-- Pagination -->
    <div class="pagination span12">
        <ul>
            <li class="active"><a href="#">1</a></li>
            <li><a href="#">2</a></li>
            <li><a href="#">3</a></li>
            <li><a href="#">4</a></li>
            <li><a href="#">5</a></li>
        </ul>
    </div>

<!-- End Main Site container -->
</div>

