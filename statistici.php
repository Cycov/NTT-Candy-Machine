<!DOCTYPE html>
<head>
	<meta charset="utf-8"/>
	<title>Statistici</title>
		<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
	integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	
	<!--Datepicker CSS-->
	
	<link rel="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/css/bootstrap-datetimepicker.min.css"/>
	
	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" 
	integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
	<link rel="stylesheet" href="stylesheets/stoc.css"/>
	<link rel="stylesheet" href="stylesheets/tables.css"/>
</head>
<body>
	<div class="container" id="main-container">
		<?php
			include('meniu_mentenanta.php');
		?>
		<div class="col-xs-4 col-md-4">
			<div class="form-group">
			<label>De la:</label>
				<div class='input-group date' id='fromDate'>
					<input type='text' class="form-control" />
					<span class="input-group-addon">
						<span class="glyphicon glyphicon-calendar"></span>
						</span>
				</div>
			</div>
		</div>
		<div class="col-xs-4 col-md-4">
			<div class="form-group">
				<label>Pana la:</label>
				<div class='input-group date' id='toDate'>
					<input type='text' class="form-control" />
					<span class="input-group-addon">
						<span class="glyphicon glyphicon-calendar"></span>
					</span>
				</div>
			</div>
		</div>
		<div class="input-group col-xs-4 col-md-4">
			<input type="text" class="form-control" placeholder="Search for...">
			<span class="input-group-btn">
				<button class="btn btn-search" type="button">Go!</button>
			</span>
		</div><!-- /input-group -->
		<div class="row">
			<div class="col-xs-12 col-md-12">
				<table class="table table-border">
					<thead>
						<tr>
							<th>Nume Produs</th>
							<th>Cantitate</th>
							<th>Total [lei]</th>
							<th>Rating</th>
						</tr>
					</thead>
					<tbody>
					<tr>
						<td>Coca Cola 0.5L</td>
						<td>4</td>
						<td>[formula]</td>
						<td>
							<span class="glyphicon glyphicon-star"></span>
							<span class="glyphicon glyphicon-star"></span>
							<span class="glyphicon glyphicon-star"></span>
							<span class="glyphicon glyphicon-star"></span>
							<span class="glyphicon glyphicon-star"></span>
						</td>
					</tr>
					<tr>
						<td>Coca Cola 0.5L</td>
						<td>4</td>
						<td>[formula]</td>
						<td>
							<span class="glyphicon glyphicon-star"></span>
							<span class="glyphicon glyphicon-star"></span>
							<span class="glyphicon glyphicon-star"></span>
							<span class="glyphicon glyphicon-star"></span>
							<span class="glyphicon glyphicon-star"></span>
						</td>
					</tr>
					<tr>
						<td>Coca Cola 0.5L</td>
						<td>4</td>
						<td>[formula]</td>
						<td>
							<span class="glyphicon glyphicon-star"></span>
							<span class="glyphicon glyphicon-star"></span>
							<span class="glyphicon glyphicon-star"></span>
							<span class="glyphicon glyphicon-star"></span>
							<span class="glyphicon glyphicon-star"></span>
						</td>
					</tr>
					</tbody>
				</table>
			</div>
		</div>
	</div>

	<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
	integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	
	<!--Moments JS -->
	<script src="https://momentjs.com/downloads/moment.min.js"></script>
	<!--Datepicker JS-->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/js/bootstrap-datetimepicker.min.js"></script>
	<script type="text/javascript">
            $(function () {
				moment.locale('en',{
					week: {dow: 1}
				});
                $('#fromDate').datetimepicker();
				$('#toDate').datetimepicker();
            });
    </script>
</body>
</html>