<!DOCTYPE HTML>
<html>
	<head>
		<title> Delivery Invoice </title>
		<link href = "Delivery Invoice.css" rel="stylesheet" type="text/css" />

		<script type = "text/javascript" src = "http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
		<script type = "text/javascript" src = "Delivery.js" ></script>
	</head>

	<body>
		<header>
			<h1> Delivery </h1>
			<h3> Alkapuro Silver Lake </h3>
			<h3> 1111 W. Sunset Blvd. </br> Los Angeles, CA 90007 </h3>
			<p> P: 323) 444-6967 </p>
			<ul> H: Mon.-Sat.
				<li> 10AM-7PM </li>
			</ul>
		</header>
		
		<section class = "customer">
			<h3> Customer </h3>
			<form action = "search.php?go" method = "post">
				Name: <input type = "text" id = "name" name = "name" />
				<input type = "submit" name = "submit" value = "Search" />
			</form>
			<?php
				if(isset($_POST ['submit'])) {
				if(isset($_GET['go'])) {
				if(preg_match("^/[A-Za-z]+/", $_POST['name'])) {
					$name = $_POST['name'];
					
					$dbhost = "127.0.0.1";
					$dbuser = "root";
					$dbpass = "T3nnischampion";
				
					//connect to the database
					$conn = mysql_connect($dbhost, $dbuser, $dbpass);
					if(! $conn )
					{
						die('Could not connect: ' . mysql_error());
					}
					//-select the database to use
					$D_B = mysql_select_db('delivery');
					//-query the database table
					$sql = "SELECT id, name FROM customer_info WHERE name LIKE '%". $name ."%'";
					//-run the query against the mysql query function
					$result = mysql_query($sql);
					//-create while loop and loop through result set
					while($row = mysql_fetch_arracy($result)) {
						$Name = $row['name'];
						$ID = $row['id'];
					//-display the result of the array
					echo "<ul>\n";
					echo "<li>" . "<a href = \"search.php?id = $ID\">" .$name . "</a></li>\n";
					echo "</ul>";
					}
					}
				else {
					echo "<p> Please enter a search query </p>";
				}
				}
				}
			?>
			

			<p> Delivery Date: <span id = "date"></span>  </p>
		</section>

		<section>
			<table>
				<tr>
					<th> Qty. </th>
					<th> Products </th>
					<th> Cost </th>
					<th> Total </th>
				<tr>
					<td id = "quantity"> <input type = "integer" id = "qty"> </td>
				
					<td id = "products">
						<select id = "products/services">
							<option> </option>
							<option value = "3 Gallon G Alkaline"> 3 Gallon G Alkaline </option>
							<option value = "5 Gallon G Alkaline"> 5 Gallon G Alkaline </option>
							<option value = "3 Gallon P Alkaline"> 3 Gallon P Alkaline </option>
							<option value = "5 Gallon P Alkaline"> 5 Gallon P Alkaline </option>
							<option value = "3 Gallon P Regular"> 3 Gallon Purified </option>
							<option value = "5 Gallon P Regular"> 5 Gallon Purified </option>
						</select>
					</td>
					<td id = "cost"> ---- </td>
					<td id = "total">  </td>
				</tr>
				<tr>
					<td> </td>
					<td> </td>
					<td> </td>
					<td> </td>
				</tr>
				<tr>
					<td> Service Charge: </td>
					<td> </td>
					<td> </td>
					<td> </td>
				</tr>
				<tr>
					<td> Tax: </td>
					<td> </td>
					<td> </td>
					<td> </td>
				</tr>
			</table>
		</section>
	</body>
</html>