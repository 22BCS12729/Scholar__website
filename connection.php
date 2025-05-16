
<?php
include'Review2.php';
// Username is root
$user = 'root';
$password = '';

// Database name is gfg
$database = 'goscholar';

// Server is localhost with
// port number 3308
$servername='localhost:3306';
$mysqli = new mysqli($servername, $user,
				$password, $database);

// Checking for connections
if ($mysqli->connect_error) {
	die('Connect Error (' .
	$mysqli->connect_errno . ') '.
	$mysqli->connect_error);
}

// SQL query to select data from database
$b = new Test;
$c = $b -> sendVariable();
echo $c;
if($c == "high school"){
	$sql = "SELECT * FROM resources where class = 'high school'";
	$result = $mysqli->query($sql);
	$mysqli->close();

}
elseif($c == "graduate"){
	$sql = "SELECT * FROM resources where class = 'graduate'";
	$result = $mysqli->query($sql);
	$mysqli->close();

}
else{
	$sql = "SELECT * FROM resources where class = 'post'";
	$result = $mysqli->query($sql);
	$mysqli->close();

}
?>


<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<title>Resources</title>
	<!-- CSS FOR STYLING THE PAGE -->
	<style>
		table {
			margin: 0 auto;
			font-size: large;
			border: 1px solid black;
		}

		h1 {
			text-align: center;
			color: #006600;
			font-size: xx-large;
			font-family: 'Gill Sans', 'Gill Sans MT',
			' Calibri', 'Trebuchet MS', 'sans-serif';
		}

		td {
			background-color: #E4F5D4;
			border: 1px solid black;
		}

		th,
		td {
			font-weight: bold;
			border: 1px solid black;
			padding: 10px;
			text-align: center;
			color: black;
		}

		td {
			font-weight: lighter;
		}
	</style>
</head>

<body>
	<section>
		<h1>Resources</h1>
		<!-- TABLE CONSTRUCTION-->
		<table>
			<tr>
				<th>Course</th>
				<th>Link</th>
				<th>Class</th>
				
			</tr>
			<!-- PHP CODE TO FETCH DATA FROM ROWS-->
			<?php // LOOP TILL END OF DATA
				while($rows=$result->fetch_assoc())
				{
			?>
			<tr>
				<!--FETCHING DATA FROM EACH
					ROW OF EVERY COLUMN-->
				<td><?php echo $rows['Course'];?></td>
				<td><a><?php echo $rows['Link'];?></a></td>
				<td><?php echo $rows['Class'];?></td>
				
			</tr>
			<?php
				}
			?>
		</table>
	</section>
</body>

</html>
