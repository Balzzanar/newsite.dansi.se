<?php 
/*
* Package: View
* Controller: Welcome
*
* The start page for dansi.se
*
*/
?>
 <!-- Main Site container begin -->
    <div class="container">

        <!-- Flyer -->
        <div class="span9 offset1">
            <div id="myCarousel" class="carousel slide">
                <ol class="carousel-indicators">
                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#myCarousel" data-slide-to="1"></li>
                    <li data-target="#myCarousel" data-slide-to="2"></li>
                </ol>

                <!-- Carousel items -->
                <div class="carousel-inner">
                    <div class="active item">
                        <img src="holder.js/870x500">
                        <div class="carousel-caption">
                            <h4>First Thumbnail label</h4>
                            <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam.
                                Donec id elit non mi porta gravida at eget metus. Nullam
                                id dolor id nibh ultricies vehicula ut id elit.</p>
                        </div>
                    </div>

                    <div class="item">
                        <img src="holder.js/870x500">
                        <div class="carousel-caption">
                            <h4>Second Thumbnail label</h4>
                            <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam.
                                Donec id elit non mi porta gravida at eget metus. Nullam
                                id dolor id nibh ultricies vehicula ut id elit.</p>
                        </div>
                    </div>

                    <div class="item">
                        <img src="holder.js/870x500">
                        <div class="carousel-caption">
                            <h4>Thierd Thumbnail label</h4>
                            <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam.
                                Donec id elit non mi porta gravida at eget metus. Nullam
                                id dolor id nibh ultricies vehicula ut id elit.</p>
                        </div>
                    </div>
                </div>
                <!-- Carousel nav -->
                <a class="carousel-control left" href="#myCarousel" data-slide="prev">&lsaquo;</a>
                <a class="carousel-control right" href="#myCarousel" data-slide="next">&rsaquo;</a>
            </div>
        </div>

        <!-- Container for front images -->
        <div class="span12">
            <?php foreach ($products as $product):?>
                <div class="well well-large span3 best-sale-prod">
                    <?php echo $product->name; ?>
                    <a href="<?php echo base_url()."item/".$product->idproduct ?>" class="thumbnail">
                        <img src="holder.js/300x200">
                    </a>
                    <?php echo $product->descript; ?>
                </div>
            <?php endforeach; ?>
        </div>

<!-- End Main Site container -->
</div>




