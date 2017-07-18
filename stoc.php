<!DOCTYPE html>
<head>
	<title>Stoc</title>
	<meta charset="utf-8"/>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
	integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	
	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" 
	integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="stylesheets/stoc.css" type="text/css"/>
</head>
<body>
<div class="container">
	<?php
		include('meniu_mentenanta.php');
		include('filtru_mentenanta.php');
	?>
	<div class="row">
		<div class="col-xs-2 col-md-2">
			<div class="btn-group produs-nou" role="group" aria-label="...">
				<button id="product-new-btn" type="button" class="btn btn-default"><h5>Produs Nou</h5></button>
			</div>
			<div class="scrollbar">
				<ul id="products-in-stock">
					<li class="product-entry selected" data-id="1"><span style="display: none">{ "id":0, "name":"test product1", "quantity":2, "description":"none", "category":"snack", "price":2.5 }</span><a href="#"> Coca Cola 0.5L </a></li> 
					<li class="product-entry" data-id="2"><span style="display: none">{ "id":0, "name":"test product2", "quantity":4, "description":"none", "category":"drink", "price":2.5 }</span><a href="#"> Coca Cola 0.5L </a></li> 
					<li class="product-entry" data-id="3"><span style="display: none">{ "id":0, "name":"test product3", "quantity":287, "description":"none", "category":"candy", "price":2.5 }</span><a href="#"> Coca Cola 0.5L </a></li> 
				</ul>
			</div>
		</div>
		<div class="col-xs-10 col-md-10">
			<div class="head-stoc-dr">
				<h1 id="product-name"></h1>
				<h3> Cantitate </h3>
			</div>
			<div class="btn-group btn-group-justified quantity-product" role="group" data-price="0.0" data-quantity="0">
				<a class="btn btn-danger quantity-decrease">
					<span class="glyphicon glyphicon-minus"></span>
				</a>
				<a class="btn btn-link quantity disabled">0</a>
				<a class="btn btn-success quantity-increase">
					<span class="glyphicon glyphicon-plus"></span>
				</a>
			</div>

			<br>
			<form method="POST">
			<div class="form-group">
				<label for="descriere">Descriere</label>
				<textarea type="text" id="product-description"></textarea>
			</div>
			<div class="form-group">	
				<label for="categorie">Categorie</label>
				<select id="product-category">
					<option value="drink">Bauturi</option>
					<option value="candy">Dulciuri</option>
					<option value="none">None</option>
					<option value="snack">Snacks</option>
				</select>
			</div>
			<div class="form-group">
				<label for="pret">Pret</label>
				<input id="product-price" type="text">
				<label class="second" for="lei">Lei</label>
			</div>
			<div class="form-group">	
				<label for="redenumire">Redenumire</label>
				<input id="product-rename" type="text">
			</div>
			<div class="form-group">	
				<label for="motiv">Motiv</label>
				<textarea type="text"></textarea>
			</div>
			<br>
			<div class="form-group center">
				<a class="btn btn-success">Salveaza</a>
			</div>
			</form>
		</div>
	</div>
</div>

<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" 
integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<script src="js/stoc.js"></script>

</body>
</html>