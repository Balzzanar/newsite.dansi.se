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
<form class="navbar-form navbar-left" role="search" action="newproducts/newproduct" method="post">

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
<form />
</div> <!-- Form END -->


