<?php 
/*
* Package: View
* Controller: Welcome
*
* The start page for dansi.se
*
*/
?>

<!-- Carousel
================================================== -->
<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <?php $index = 0; ?>
    <ol class="carousel-indicators">
    <?php foreach($products as $product): ?>
        <li data-target="#myCarousel" data-slide-to="<?php echo $index; ?>" <?php echo ($index == 0 ? 'class="active"' : ''); ?>></li>
        <?php $index++; ?>
    <?php endforeach; ?>
    </ol>

    <!-- The flayers -->
    <?php $index = 0; ?>
    <div class="carousel-inner">
    <?php foreach($products as $product): ?>

        <div <?php echo ($index == 0 ? 'class="item active"' : 'class="item"');?>>
            <img data-src="holder.js/900x500/auto/#777:#7a7a7a/text:First slide" alt="First slide">
            <div class="container">
                <div class="carousel-caption">
                    <h1><?php echo $product->name; ?></h1>
                    <p><?php echo $product->descript . "<br />" . $product->price . "kr"; ?></p>
                    <p><a class="btn btn-lg btn-primary" href="<?php echo base_url().'item/'.$product->idproduct; ?>" role="button">Visa</a></p>
                </div>
            </div>
        </div>

        <?php $index++; ?>
    <?php endforeach; ?>



    </div>

    <a class="left carousel-control" href="#myCarousel" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
</div><!-- /.carousel -->



<!-- Marketing messaging and featurettes
================================================== -->
<!-- Wrap the rest of the page in another container to center all the content. -->

<div class="container marketing">

    <!-- Three columns of text below the flayer -->
    <div class="row">

        <?php foreach($products as $product): ?>
            <div class="col-lg-4">
                <img class="img-circle" data-src="holder.js/140x140" alt="Generic placeholder image">
                <h2><?php echo $product->name; ?></h2>
                <p><?php echo $product->descript . " To the price of: " . $product->price; ?></p>
                <p><a class="btn btn-default" href="<?php echo base_url().'item/'.$product->idproduct; ?>" role="button">Visa &raquo;</a></p>
            </div><!-- /.col-lg-4 -->
        <?php endforeach; ?>

    </div><!-- /.row -->





    <!-- START THE FEATURETTES -->
    <!--
    <hr class="featurette-divider">

    <div class="row featurette">
        <div class="col-md-7">
            <h2 class="featurette-heading">First featurette heading. <span class="text-muted">It'll blow your mind.</span></h2>
            <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
        </div>
        <div class="col-md-5">
            <img class="featurette-image img-responsive" data-src="holder.js/500x500/auto" alt="Generic placeholder image">
        </div>
    </div>

    <hr class="featurette-divider">

    <div class="row featurette">
        <div class="col-md-5">
            <img class="featurette-image img-responsive" data-src="holder.js/500x500/auto" alt="Generic placeholder image">
        </div>
        <div class="col-md-7">
            <h2 class="featurette-heading">Oh yeah, it's that good. <span class="text-muted">See for yourself.</span></h2>
            <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
        </div>
    </div>

    <hr class="featurette-divider">

    <div class="row featurette">
        <div class="col-md-7">
            <h2 class="featurette-heading">And lastly, this one. <span class="text-muted">Checkmate.</span></h2>
            <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
        </div>
        <div class="col-md-5">
            <img class="featurette-image img-responsive" data-src="holder.js/500x500/auto" alt="Generic placeholder image">
        </div>
    </div>

    <hr class="featurette-divider">
    -->
    <!-- /END THE FEATURETTES -->





