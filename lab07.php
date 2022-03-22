<head>
	<title>Unit Converter</title>
	<style type="text/css">
		h1 { color:  red ; }
		h2 { font-family: Times New Roman; color: blue ; }
		p { font-family: Ariel; color: green}
		input[type=submit] {
  			background-color: #4CAF50; /* Green */
  			border: none;
  			color: white;
  			padding: 20px;
  			text-align: center;
  			text-decoration: none;
  			display: inline-block;
  			font-size: 12px;
  			margin: 4px 2px;
  			cursor: pointer;
		}
	</style>
</head>
<body>
	<h1>Unit Converter</h1>
<?php

	if ( (isset($_POST['gender'])) && (isset($_POST['FLname'])) && (isset($_POST['address'])) && (isset($_POST['age'])) && (isset($_POST['shirt'])) )
      	{
		$gender = filter_var( $_POST['gender'], FILTER_SANITIZE_STRING);
		$FLname = filter_var( $_POST['FLname'], FILTER_SANITIZE_STRING);
		$address = filter_var( $_POST['address'], FILTER_SANITIZE_STRING);
		$age = filter_var( $_POST['age'], FILTER_SANITIZE_STRING);
		$shirt = filter_var( $_POST['shirt'], FILTER_SANITIZE_STRING);
		$total = 25;
		//echo "<p>The original value is " . $value . " " . $original_unit . "</p>" ;
	
		if ($age >= 65) {
			$total = $total - 5;
		}		
	
		if ($shirt == "XXL" || $shirt == "XXXL") {
			$total = $total + 2;
		}		
	
		echo "<p style='color: darkblue ;'>The cost of registration is $" . $total . "</p><br><br>" ;
		echo "<p style ='color: darkblue ;'>Your registered name is " . $FLname . "</p><br><br>" ;
		echo "<p style ='color: darkblue ;'>Your shirt size is " . $shirt . "</p><br><br>" ;
	}
	else
	{
      		print "<p>Missing or invalid parameters. Please go back to the race.html page to enter valid information.<br />";
      		print "<a href='race.html'>Unit Converter Page</a>";
	}
?>
	</body>
