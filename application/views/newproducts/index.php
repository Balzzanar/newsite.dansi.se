<?php 
/*
* Package: View
* Controller: Newproducts
*
* The start page for dansi.se
*
*/
?>

<?php #echo form_open_mulitpart('newproducts/upload');?>
<form class="navbar-form navbar-left" role="search" action="newproducts/newproduct" method="post" enctype="multipart/form-data">

<div class="col-md-6"> <!-- Form Start -->	
	<p>Produktnamn och bild</p>

	<div class="input-group input-group-addonlg">
	  
		<span class="input-group-addon"></span>
		<input type="text" class="form-control" placeholder="Produkt Namn" name="p_name">

	
	  	<span class="input-group-addon"></span>
	  	<input type="file" class="form-control" placeholder="img" name="userfile">
	
	</div>

	<br />
	<br />


	<div class="input-group input-group-addonlg col-sm-4">
	
		<span class="input-group-addon"></span>
		<input type="text" class="form-control" placeholder="Pris" name="p_price">

	</div>


	<br />
	<br />

	<div class="input-group input-group-addonlg">
	
		<span class="input-group-addon"></span>
		<input type="text" class="form-control" placeholder="Beskrivning" name="p_description">

	</div>

	<br />

	<button type="submit" class="btn btn-default">Submit</button>
	
	<br />
	<br />
<form />
</div> <!-- Form END -->

<div class="col-md-8">

	<table class="col-md-6 table table-striped">
	  <tr>
	  	<th>Namn</th>
	  	<th>Price</th>
	  	<th>Beskrivning</th>
	  	<th>Bild</th>
	  </tr>
	  <?php foreach ($products as $prod):?>
	  <tr>
	  	<td><?php echo $prod['name']; ?></td>
	  	<td><?php echo $prod['price']; ?></td>
	  	<td><?php echo $prod['descript']; ?></td>
	  	<td><?php echo $prod['img']; ?></td>
	  </tr>
	<?php endforeach; ?>
	</table>

</div>


<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
<script src="public/bootstrap/js/bootstrap.min.js"></script>
<script src="public/bootstrap/js/holder.js"></script>
</body>
</html>

