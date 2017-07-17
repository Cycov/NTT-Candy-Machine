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
			<div class="btn-group" role="group" aria-label="...">
				<button type="button" class="btn btn-default"><h5>Produs Nou</h5></button>
			</div>
		<div class="scrollbar">
			<ul>
				<a href="stoc.html"> <li>Coca Cola 0.5L</li> </a>
				<a href="stoc.html"> <li>Coca Cola 0.5L</li> </a>
				<a href="stoc.html"> <li>Coca Cola 0.5L</li> </a>
				<a href="stoc.html"> <li>Coca Cola 0.5L</li> </a>
				<a href="stoc.html"> <li>Coca Cola 0.5L</li> </a>
				<a href="stoc.html"> <li>Coca Cola 0.5L</li> </a>
				<a href="stoc.html"> <li>Coca Cola 0.5L</li> </a>
				<a href="stoc.html"> <li>Coca Cola 0.5L</li> </a>
				<a href="stoc.html"> <li>Coca Cola 0.5L</li> </a>
				<a href="stoc.html"> <li>Coca Cola 0.5L</li> </a>
				<a href="stoc.html"> <li>Coca Cola 0.5L</li> </a>
				<a href="stoc.html"> <li>Coca Cola 0.5L</li> </a>
				<a href="stoc.html"> <li>Coca Cola 0.5L</li> </a>
				<a href="stoc.html"> <li>Coca Cola 0.5L</li> </a>	
				<a href="stoc.html"> <li>Coca Cola 0.5L</li> </a>	
				<a href="stoc.html"> <li>Coca Cola 0.5L</li> </a>	
				<a href="stoc.html"> <li>Coca Cola 0.5L</li> </a>	
				<a href="stoc.html"> <li>Coca Cola 0.5L</li> </a>			
				<a href="stoc.html"> <li>Coca Cola 0.5L</li> </a>	
				<a href="stoc.html"> <li>Coca Cola 0.5L</li> </a>	
				<a href="stoc.html"> <li>Coca Cola 0.5L</li> </a>	
				<a href="stoc.html"> <li>Coca Cola 0.5L</li> </a>	
				<a href="stoc.html"> <li>Coca Cola 0.5L</li> </a>
				<a href="stoc.html"> <li>Coca Cola 0.5L</li> </a>
				<a href="stoc.html"> <li>Coca Cola 0.5L</li> </a>
				<a href="stoc.html"> <li>Coca Cola 0.5L</li> </a>
				<a href="stoc.html"> <li>Coca Cola 0.5L</li> </a>
				<a href="stoc.html"> <li>Coca Cola 0.5L</li> </a>
				<a href="stoc.html"> <li>Coca Cola 0.5L</li> </a>	
				<a href="stoc.html"> <li>Coca Cola 0.5L</li> </a>	
				<a href="stoc.html"> <li>Coca Cola 0.5L</li> </a>	
				<a href="stoc.html"> <li>Coca Cola 0.5L</li> </a>	
				<a href="stoc.html"> <li>Coca Cola 0.5L</li> </a>			
				<a href="stoc.html"> <li>Coca Cola 0.5L</li> </a>	
				<a href="stoc.html"> <li>Coca Cola 0.5L</li> </a>	
				<a href="stoc.html"> <li>Coca Cola 0.5L</li> </a>	
				<a href="stoc.html"> <li>Coca Cola 0.5L</li> </a>	
				<a href="stoc.html"> <li>Coca Cola 0.5L</li> </a>				
			</ul>
		</div>
		</div>
		<div class="col-xs-10 col-md-10">
			<div class="head-stoc-dr">
				<h1><label> Coca Cola 0.5L </label></h1>
				<h3> Cantitate </h3>
			</div>
			<div class="btn-group btn-group-justified basket-product" role="group" data-price="3.4" data-quantity="1">
				<a class="btn btn-danger quantity-decrease">
					<span class="glyphicon glyphicon-minus"></span>
				</a>
				<a class="btn btn-link quantity disabled">7</a>
				<a class="btn btn-success quantity-increase">
					<span class="glyphicon glyphicon-plus"></span>
				</a>
			</div>

			<br>
			<form method="POST">
			<div class="form-group">
				<label for="descriere">Descriere</label>
				<textarea type="text" id="descriere"></textarea>
			</div>
			<div class="form-group">	
				<label for="categorie">Categorie</label>
				<select>
					<option value="bauturi">Bauturi</option>
					<option value="dulciuri">Dulciuri</option>
					<option value="dulciuri2">Dulciuri2</option>
					<option value="snacks">Snacks</option>
				</select>
			</div>
			<div class="form-group">
				<label for="pret">Pret</label>
				<input type="text" id="pret">
				<label class="second" for="lei">Lei</label>
			</div>
			<div class="form-group">	
				<label for="redenumire">Redenumire</label>
				<input type="text" id="redenumire">
			</div>
			<div class="form-group">	
				<label for="motiv">Motiv</label>
				<textarea type="text" id="motiv"></textarea>
			</div>
			<br>
			<div class="form-group">
				<input type="submit" value="Salveaza" id="submit-btn">
			</div>
			</form>
		</div>
	</div>
</div>

<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" 
integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

</body>
</html>