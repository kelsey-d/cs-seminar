<?php
// Create connection
$conn =pg_connect("host=localhost dbname=tax user=postgres password=NeptunesBoyos");
// Check connection
if (!$conn) {
   die("Connection failed: " .pg_connect_error());
}

$result = pg_query($conn, "SELECT * FROM taxinfo WHERE states='$_POST[state]'");


$row = pg_fetch_array($result);

pg_close($conn);

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width = device-width,initial-scale = 1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title> Tax Allocation </title>

	<link rel="stylesheet" type="text/css" href="css/styles1.css">	
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>

<body>
	<nav class="navbar navbar-expand-lg navbar-light bg-light">
	  <a class="navbar-brand" href="index.html">Fast Tax Facts</a>
	  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
	    <span class="navbar-toggler-icon"></span>
	  </button>
	  <div class="collapse navbar-collapse"  id="navbarNav">
	    <ul class="navbar-nav ml-auto">
	      <li class="nav-item">
	         <select id=year name=year>
	        		<option value="2021">2021</option>
	        		<option value="2020">2020</option>
	        		<option value="2019" selected>2019</option>
	        		<option value="2018">2018</option>
	        		<option value="2017">2017</option>
	        		<option value="2016">2016</option>
	        		<option value="2015">2015</option>
	        		<option value="2014">2014</option>
	        		<option value="2013">2013</option>
	        		<option value="2012">2012</option>
	        		<option value="2011">2011</option>	
	        	</select>       			        			        		
	      </li>
	      <li class="nav-item">
	        <a class="nav-link" href="comparison1.html">Compare</a>
	      </li>
	      <li class="nav-item">
	        <a class="nav-link" href="about.html">About</a>
	      </li>

	    </ul>
	  </div>
	</nav>

  <div class="container">
  <div class="row row-cols-3 align-items-center">
    <div class="col" id="first-col">
    	<div class="dropdown">
			  <button class="btn btn-secondary dropdown-toggle" role="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
			    SELECT STATE:
			  </button>
			  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
			    <a class="dropdown-item" href="#" name="ID">Alabama</a>
			    <a class="dropdown-item" href="#" name="ID">Alaska</a>
			    <a class="dropdown-item" href="#" name="ID">Arizona</a>
			    <a class="dropdown-item" href="#" name="ID">Arkansas</a>
			    <a class="dropdown-item" href="#" name="ID">California</a>
			    <a class="dropdown-item" href="#" name="ID">Colorado</a>
			    <a class="dropdown-item" href="#" name="ID">Conneticut</a>
			    <a class="dropdown-item" href="#" name="ID">Delware</a>
			    <a class="dropdown-item" href="#" name="ID">Florida</a>
			    <a class="dropdown-item" href="#" name="ID">Georgia</a>
			    <a class="dropdown-item" href="#" name="ID">Hawaii</a>
			    <a class="dropdown-item" href="#" name="ID">Idaho</a>
			    <a class="dropdown-item" href="#" name="ID">Illinois</a>
			    <a class="dropdown-item" href="#" name="ID">Indiana</a>
			    <a class="dropdown-item" href="#" name="ID">Iowa</a>
			    <a class="dropdown-item" href="#" name="ID">Kansas</a>
			    <a class="dropdown-item" href="#" name="ID">Kentucky</a>
			    <a class="dropdown-item" href="#" name="ID">Louisana</a>
			    <a class="dropdown-item" href="#" name="ID">Maine</a>
			    <a class="dropdown-item" href="#" name="ID">Maryland</a>
			    <a class="dropdown-item" href="#" name="ID">Massachusettes</a>
			    <a class="dropdown-item" href="#" name="ID">Michigan</a>
			    <a class="dropdown-item" href="#" name="ID">Minnesota</a>
			    <a class="dropdown-item" href="#" name="ID">Mississippi</a>
			    <a class="dropdown-item" href="#" name="ID">Missouri</a>
			    <a class="dropdown-item" href="#" name="ID">Montana</a>
			    <a class="dropdown-item" href="#" name="ID">Nebraska</a>
			    <a class="dropdown-item" href="#" name="ID">Nevada</a>
			    <a class="dropdown-item" href="#" name="ID">New Hampshire</a>
			    <a class="dropdown-item" href="#" name="ID">New Jersey</a>
			    <a class="dropdown-item" href="#" name="ID">New Mexico</a>
			    <a class="dropdown-item" href="#" name="ID">New York</a>
			    <a class="dropdown-item" href="#" name="ID">North Carolina</a>
			    <a class="dropdown-item" href="#" name="ID">North Dakota</a>
			    <a class="dropdown-item" href="#" name="ID">Ohio</a>
			    <a class="dropdown-item" href="#" name="ID">Oklahoma</a>
			    <a class="dropdown-item" href="#" name="ID">Oregon</a>
			    <a class="dropdown-item" href="#" name="ID">Pennsylvania</a>
			    <a class="dropdown-item" href="#" name="ID">Rhode Island</a>
			    <a class="dropdown-item" href="#" name="ID">South Carolina</a>
			    <a class="dropdown-item" href="#" name="ID">Tennessee</a>
			    <a class="dropdown-item" href="#" name="ID">Texas</a>
			    <a class="dropdown-item" href="#" name="ID">Utah</a>
			    <a class="dropdown-item" href="#" name="ID">Vermont</a>
			    <a class="dropdown-item" href="#" name="ID">Virginia</a>
			    <a class="dropdown-item" href="#" name="ID">Washington</a>
			    <a class="dropdown-item" href="#" name="ID">West Virginia</a>
			    <a class="dropdown-item" href="#" name="ID">Wisconsin</a>
			    <a class="dropdown-item" href="#" name="ID">Wyoming</a>
  			</div>
			</div>
			<div class="divider"></div>
			<div class="stats">	<!-- stats -->
				<ul>
					<li class="stat-category">Budget(m): </li>
					<li class="stat-category">Pension(m): </li>
					<li class="stat-category">Healthcare(m): </li>
					<li class="stat-category">Defense(m): </li>
					<li class="stat-category">Education(m): </li>
					<li class="stat-category">Transport(m): </li>
					<li class="stat-category">Welfare(m): </li>
				</ul>
			</div>
    </div>
    <div class="col" id="second-col">
    	<div class="dropdown">
			  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
			    SELECT STATE:
			  </button>
			  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
			    <a class="dropdown-item" href="#" name="ID">Alabama</a>
			    <a class="dropdown-item" href="#" name="ID">Alaska</a>
			    <a class="dropdown-item" href="#" name="ID">Arizona</a>
			    <a class="dropdown-item" href="#" name="ID">Arkansas</a>
			    <a class="dropdown-item" href="#" name="ID">California</a>
			    <a class="dropdown-item" href="#" name="ID">Colorado</a>
			    <a class="dropdown-item" href="#" name="ID">Conneticut</a>
			    <a class="dropdown-item" href="#" name="ID">Delware</a>
			    <a class="dropdown-item" href="#" name="ID">Florida</a>
			    <a class="dropdown-item" href="#" name="ID">Georgia</a>
			    <a class="dropdown-item" href="#" name="ID">Hawaii</a>
			    <a class="dropdown-item" href="#" name="ID">Idaho</a>
			    <a class="dropdown-item" href="#" name="ID">Illinois</a>
			    <a class="dropdown-item" href="#" name="ID">Indiana</a>
			    <a class="dropdown-item" href="#" name="ID">Iowa</a>
			    <a class="dropdown-item" href="#" name="ID">Kansas</a>
			    <a class="dropdown-item" href="#" name="ID">Kentucky</a>
			    <a class="dropdown-item" href="#" name="ID">Louisana</a>
			    <a class="dropdown-item" href="#" name="ID">Maine</a>
			    <a class="dropdown-item" href="#" name="ID">Maryland</a>
			    <a class="dropdown-item" href="#" name="ID">Massachusettes</a>
			    <a class="dropdown-item" href="#" name="ID">Michigan</a>
			    <a class="dropdown-item" href="#" name="ID">Minnesota</a>
			    <a class="dropdown-item" href="#" name="ID">Mississippi</a>
			    <a class="dropdown-item" href="#" name="ID">Missouri</a>
			    <a class="dropdown-item" href="#" name="ID">Montana</a>
			    <a class="dropdown-item" href="#" name="ID">Nebraska</a>
			    <a class="dropdown-item" href="#" name="ID">Nevada</a>
			    <a class="dropdown-item" href="#" name="ID">New Hampshire</a>
			    <a class="dropdown-item" href="#" name="ID">New Jersey</a>
			    <a class="dropdown-item" href="#" name="ID">New Mexico</a>
			    <a class="dropdown-item" href="#" name="ID">New York</a>
			    <a class="dropdown-item" href="#" name="ID">North Carolina</a>
			    <a class="dropdown-item" href="#" name="ID">North Dakota</a>
			    <a class="dropdown-item" href="#" name="ID">Ohio</a>
			    <a class="dropdown-item" href="#" name="ID">Oklahoma</a>
			    <a class="dropdown-item" href="#" name="ID">Oregon</a>
			    <a class="dropdown-item" href="#" name="ID">Pennsylvania</a>
			    <a class="dropdown-item" href="#" name="ID">Rhode Island</a>
			    <a class="dropdown-item" href="#" name="ID">South Carolina</a>
			    <a class="dropdown-item" href="#" name="ID">Tennessee</a>
			    <a class="dropdown-item" href="#" name="ID">Texas</a>
			    <a class="dropdown-item" href="#" name="ID">Utah</a>
			    <a class="dropdown-item" href="#" name="ID">Vermont</a>
			    <a class="dropdown-item" href="#" name="ID">Virginia</a>
			    <a class="dropdown-item" href="#" name="ID">Washington</a>
			    <a class="dropdown-item" href="#" name="ID">West Virginia</a>
			    <a class="dropdown-item" href="#" name="ID">Wisconsin</a>
			    <a class="dropdown-item" href="#" name="ID">Wyoming</a>
  			</div>
			</div>
			<div class="divider"></div>
			<div class="stats">	<!-- stats -->
				<ul>
					<li class="stat-category">Budget(m): </li>
					<li class="stat-category">Pension(m): </li>
					<li class="stat-category">Healthcare(m): </li>
					<li class="stat-category">Defense(m): </li>
					<li class="stat-category">Education(m): </li>
					<li class="stat-category">Transport(m): </li>
					<li class="stat-category">Welfare(m): </li>
				</ul>
			</div>
    </div>

    <div class="col" id="third-col">
    	<form action="comparison1.php" method="post">
    	<div class="form-group">
			  <select class="form-control" name="state" onchange="this.form.submit();">
			  	<option class="dropdown-item" href="#" name="ID">SELECT STATE:</option>
			    <option class="dropdown-item" href="#" name="ID">Alabama</option>
			    <option class="dropdown-item" href="#" name="ID">Alaska</option>
			    <option class="dropdown-item" href="#" name="ID">Arizona</option>
			    <option class="dropdown-item" href="#" name="ID">Arkansas</option>
			    <option class="dropdown-item" href="#" name="ID">California</option>
			    <option class="dropdown-item" href="#" name="ID">Colorado</option>
			    <option class="dropdown-item" href="#" name="ID">Conneticut</option>
			    <option class="dropdown-item" href="#" name="ID">Delware</option>
			    <option class="dropdown-item" href="#" name="ID">Florida</option>
			    <option class="dropdown-item" href="#" name="ID">Georgia</option>
			    <option class="dropdown-item" href="#" name="ID">Hawaii</option>
			    <option class="dropdown-item" href="#" name="ID">Idaho</option>
			    <option class="dropdown-item" href="#" name="ID">Iowa</option>
			    <option class="dropdown-item" href="#" name="ID">Kansas</option>
			    <option class="dropdown-item" href="#" name="ID">Kentucky</option>
			    <option class="dropdown-item" href="#" name="ID">Louisana</option>
			    <option class="dropdown-item" href="#" name="ID">Maine</option>
			    <option class="dropdown-item" href="#" name="ID">Maryland</option>
			    <option class="dropdown-item" href="#" name="ID">Massachusettes</option>
			    <option class="dropdown-item" href="#" name="ID">Michigan</option>
			    <option class="dropdown-item" href="#" name="ID">Minnesota</option>
			    <option class="dropdown-item" href="#" name="ID">Mississippi</option>
			    <option class="dropdown-item" href="#" name="ID">Missouri</option>
			    <option class="dropdown-item" href="#" name="ID">Montana</option>
			    <option class="dropdown-item" href="#" name="ID">Nebraska</option>
			    <option class="dropdown-item" href="#" name="ID">Nevada</option>
			    <option class="dropdown-item" href="#" name="ID">New Hampshire</option>
			    <option class="dropdown-item" href="#" name="ID">New Jersey</option>
			    <option class="dropdown-item" href="#" name="ID">New Mexico</option>
			    <option class="dropdown-item" href="#" name="ID">New York</option>
			    <option class="dropdown-item" href="#" name="ID">North Carolina</option>
			    <option class="dropdown-item" href="#" name="ID">North Dakota</option>
			    <option class="dropdown-item" href="#" name="ID">Ohio</option>
			    <option class="dropdown-item" href="#" name="ID">Oklahoma</option>
			    <option class="dropdown-item" href="#" name="ID">Oregon</option>
			    <option class="dropdown-item" href="#" name="ID">Pennsylvania</option>
			    <option class="dropdown-item" href="#" name="ID">Rhode Island</option>
			    <option class="dropdown-item" href="#" name="ID">South Carolina</option>
			    <option class="dropdown-item" href="#" name="ID">Tennessee</option>
			    <option class="dropdown-item" href="#" name="ID">Texas</option>
			    <option class="dropdown-item" href="#" name="ID">Utah</option>
			    <option class="dropdown-item" href="#" name="ID">Vermont</option>
			    <option class="dropdown-item" href="#" name="ID">Virginia</option>
			    <option class="dropdown-item" href="#" name="ID">Washington</option>
			    <option class="dropdown-item" href="#" name="ID">West Virginia</option>
			    <option class="dropdown-item" href="#" name="ID">Wisconsin</option>
			    <option class="dropdown-item" href="#" name="ID">Wyoming</option>
  			</select>
			</div>
			<div class="divider"></div>
			<div class="stats">	<!-- stats -->
				<ul>
					<li class="stat-category">Budget(m): <?php echo $row["budget"]; ?></li>
					<li class="stat-category">Pension(m): </li>
					<li class="stat-category">Healthcare(m): </li>
					<li class="stat-category">Defense(m): </li>
					<li class="stat-category">Education(m): </li>
					<li class="stat-category">Transport(m): </li>
					<li class="stat-category">Welfare(m): </li>
				</ul>
			</div>
    </div>
  </div>
</div>
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	<script>
		
</script>
</body>
</html>