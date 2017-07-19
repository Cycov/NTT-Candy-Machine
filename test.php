<html>
    <head>
        <title>Test</title>
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

        <style>
            .btn-group-justified > .btn.name
            {
                width: 6%;
            }
            .disabled 
            {
                color: black;
                pointer-events: none;
                cursor: default;
            }
        </style>
    </head>
    <body>
        <div class="btn-group btn-group-justified bascket-product" role="group" data-price="3.4" data-quantity="1">
            <a class="btn btn-danger quantity-decrease">
                <span class="glyphicon glyphicon-minus"></span>
            </a>
            <a class="btn btn-link quantity disabled">1</a>
            <a class="btn btn-link name disabled">pew</a>
            <a class="btn btn-success quantity-increase">
                <span class="glyphicon glyphicon-plus"></span>
            </a>
        </div>

        <div class="btn-group btn-group-justified bascket-product" role="group" data-price="3.4" data-quantity="1">
            <a class="btn btn-danger quantity-decrease">
                <span class="glyphicon glyphicon-minus"></span>
            </a>
            <a class="btn btn-link quantity disabled">1</a>
            <a class="btn btn-link name disabled">pew</a>
            <a class="btn btn-success quantity-increase">
                <span class="glyphicon glyphicon-plus"></span>
            </a>
        </div>
		<!--PRODUCTS-->
		<div class="col-xs-6 col-md-3 product-thumbnail" data-category="drink" data-price="2.5" data-name="Coca Cola 0.33L">
							<div class="thumbnail">
								<a href="#">
									<img src="img/coca-cola.png" alt="Coca Cola 0.33L">
								</a>
								<span id="price">2.5 Lei</span>
								<h4>Coca Cola 0.33L</h4>
								<div class="stars">
									<span class="glyphicon glyphicon-star"></span>
									<span class="glyphicon glyphicon-star"></span>
									<span class="glyphicon glyphicon-star"></span>
									<span class="glyphicon glyphicon-star"></span>
									<span class="glyphicon glyphicon-star"></span>
								</div>
							</div>
		</div>
						
			
		<?php
			$i=0;
			for($i=0;$i<=20;$i++)
				echo '<div class="col-xs-6 col-md-3 product-thumbnail" data-category="drink" data-price="2.5" data-name="Coca Cola 0.33L">
							<div class="thumbnail">
								<a href="#">
									<img src="img/coca-cola.png" alt="Coca Cola 0.33L">
								</a>
								<span id="price">2.5 Lei</span>
								<h4>Coca Cola 0.33L</h4>
								<div class="stars">
									<span class="glyphicon glyphicon-star"></span>
									<span class="glyphicon glyphicon-star"></span>
									<span class="glyphicon glyphicon-star"></span>
									<span class="glyphicon glyphicon-star"></span>
									<span class="glyphicon glyphicon-star"></span>
								</div>
							</div>
					</div>';
		?>
			
        <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
	    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" 
		integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    </body>
</html>