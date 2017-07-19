<?php
	include('db/db_config.php');
?>
<!DOCTYPE html>
<head>
	<title>Candy Machine</title>
	<meta charset="utf-8"/>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
	integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	
	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" 
	integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="stylesheets/index.css" type="text/css">
</head>
<body>
	<div class="container-fluid">
		
		<div class="row">
			<div class="col-md-9 col-xs-9">
				
				<!--MAIN NAVBAR-->
				<nav class="navbar navbar-inverse">
					<div class="container">
					
						<div class="navbar-header">
							<!-- language drop down list -->
 	
						<a id="logo-button" href="#" class="btn btn-circle btn-link navbar-btn navbar-right"><h4>Candy Machine</h4></a>	
						 
						<button type="button" class="btn btn-circle btn-link navbar-btn navbar-right" data-toggle="modal" data-target="#infoModal">
							<span class="glyphicon glyphicon-question-sign"></span>
						</button>
						<a id="language-button" href="#" class="btn btn-circle btn-link navbar-btn ">
								<span class="glyphicon glyphicon-globe"></span>
						</a> 
						</div>
						
					</div>
				</nav>

				<!--FILTER-->
				<nav class="navbar navbar-default">
					<ul class="nav navbar-nav">
						<div id="filter-bar" class="btn-group btn-group-lg" role="group" aria-label="...">
							<button type="button"  data-category="drink" class="btn btn-filter btn-default">Bauturi</button>
							<button type="button"  data-category="candy" class="btn btn-filter btn-default">Dulciuri</button>
							<button type="button"  data-category="misc" class="btn btn-filter btn-default">Dulciuri2</button>
							<button type="button"  data-category="snack" class="btn btn-filter btn-default">Snacks</button>
								<div class="input-group col-lg-3">
								    <input id="filter-search" type="text" class="form-control" placeholder="Search for...">
									<span class="input-group-btn">
										<button class="btn btn-search" type="button">Go!</button>
									</span>
								</div><!-- /input-group -->	
						</div>								
 					</ul>
				</nav>
				
				<!--PRODUCTS-->
				<div id="products">
					<div class="row">
						<?php
							//DRINKS
								$sql="SELECT products.*,category_name,display_name FROM products JOIN categories ON categories.id_category = products.id_category";
								$q=mysqli_query($con,$sql);
								while($row = mysqli_fetch_array($q)){
									echo '<div class="col-xs-6 col-md-3 product-thumbnail" data-category="' . $row['category_name'] . '" data-price="' . $row['Price'] . '" data-name="' . $row['Product_name'] . '">
										<div class="thumbnail">
											<a href="#">
												<img src="' . $row['picture'] . '" alt="' . $row['Product_name'] . '">
											</a>
											<span id="price">'.$row['Price'].' Lei</span>
											<h4>'.$row['Product_name'].'</h4>
											<div class="stars">';
												$i=0;
												for($i=0;$i<=$row['Rating'];$i++)
													echo '<span class="glyphicon glyphicon-star"></span>';
											echo '</div>
										</div>
									</div>';
								}
						?>
					</div>
				</div>
			</div>
			<!--RIGHT SIDE-->
			<div class="col-md-3 col-xs-3">
				<div class="box container">
					<h5>CREDIT CURENT: <span id="total-credit">78432</span></h5>
					<h5>TOTAL:<span id="total-price">0.0</span></h5>
					
					<!-- Small modal trigger button -->
					<button id="basket-trigger-btn" type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalComanda">COMANDA</button>
				</div>
				
				
				<div id="produse-in-cos" class="container">

				</div>
			<!--LORE-->
				<div class="box container">
					<div class="reclama" style="max-width:500px">
 						 <img class="mySlides" src="img/mountain_dew_reclama.jpg" style="width:100%; height:145px">
 						 <img class="mySlides" src="img/sprite_reclama.jpg" style="width:100%; height:145px">
 						 <img class="mySlides" src="img/cola_reclama.png" style="width:100%; height:145px">
					</div>

				<script>
					var myIndex = 0;
					carousel();

					function carousel() {
  					  var i;
  					  var x = document.getElementsByClassName("mySlides");
   					  for (i = 0; i < x.length; i++)
					  {
       						x[i].style.display = "none";  
    					  }
    						myIndex++;
  					  if (myIndex > x.length) 
						{myIndex = 1}    
  					  x[myIndex-1].style.display = "block";  
    					  setTimeout(carousel, 2000); // Change image every 2 seconds
					}
				</script>

				</div>
			</div>
		</div>
	</div>

	<!-- MODAL DIANA -->
	<div class="modal fade" id="modalComanda" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<span class="modal-title" id="myModalLabel">TOTAL:</span>
					<span class='price'>0.0</span>
				</div>
				<div class="modal-body">
					<div class="row">
						<div class="col-md-5 col-xs-5">
							<ol>
							</ol>
						</div>
						<div class="col-md-7 centered col-xs-7">
						</div>
					</div>
				</div>
			<div class="modal-footer">
				<span class="align-left" style="font-size: 1.2em">Credit Curent: </span>
				<span class="credit align-left" style="font-size: 1.2em">78432</span>
				<button type="button" class="btn btn-primary">CONFIRMA</button>
			</div>
			</div>
		</div>
	</div>

	<!-- Modal ADI / info-->
		
	<!-- Modal -->
	<div class="modal fade" id="infoModal" role="dialog">
		<div class="modal-dialog">
			<!-- Modal content-->
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<h4 class="modal-title">Regulament</h4>
				</div>
				<div class="modal-body">
					Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam ultrices enim nisl, a rhoncus dolor placerat eu. Fusce eleifend lorem tortor. Suspendisse a pharetra orci. Integer at mi eget eros condimentum tincidunt. Sed vel congue mi. Mauris ac ligula purus. Etiam ac purus massa. Proin et sollicitudin tortor, sed ultricies orci.

Etiam egestas massa tempor, efficitur ex eu, sollicitudin arcu. In hac habitasse platea dictumst. Proin consequat faucibus cursus. Interdum et malesuada fames ac ante ipsum primis in faucibus. Integer mattis ex diam, sit amet auctor lacus faucibus in. In vulputate sed nibh non placerat. Duis non velit tristique, luctus ligula eget, sollicitudin enim. Aliquam eleifend imperdiet erat, quis tempor sem malesuada at. Vestibulum rhoncus interdum turpis, eu ultrices dolor accumsan eu. Quisque blandit faucibus arcu eget auctor. Donec efficitur ut augue sed aliquam. Suspendisse ornare, dui ut pharetra suscipit, nisi nulla scelerisque metus, in placerat velit turpis suscipit purus. Vivamus vel ex id arcu euismod sodales. Ut molestie pretium tellus, quis elementum diam. Vestibulum dapibus vel magna in pharetra.
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Am înteles.</button>
				</div>
			</div>
			
		</div>
	</div>
		<!-- Modal ADI -->
	
	<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
	integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

	<script src="js/index.js"></script>

	<div id="templates" style="display: none">
		<div class="product">
			<div class="btn-group btn-group-justified bascket-product" role="group" data-price="0.0" data-quantity="1">
				<a class="btn btn-danger quantity-decrease">
					<span class="glyphicon glyphicon-minus"></span>
				</a>
				<a class="btn btn-link quantity disabled">1</a>
				<a class="btn btn-link name disabled">Product name</a>
				<a class="btn btn-success quantity-increase">
					<span class="glyphicon glyphicon-plus"></span>
				</a>
			</div>
		</div>
	</div>
</body>
</html>