<!DOCTYPE HTML>
<html>
<head>
	<title> Delivery Data </title>
	<link href = "Delivery Customer.css" rel="stylesheet" type="text/css" />

	<script type = "text/javascript" src = "http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
	<script type = "text/javascript" src = "Database.js" ></script>

</head>

<body>

	<section class = "header">
		<h1> ALKAPURO SILVERLAKE DATABASE </h1>
	</section>
	
	<form action = "InputPHP.php" method = "POST">
		<table>
			<tr>
				<th> <h2>Contact Info. </h2> </th>
				<th> <h2> Delivery Info. </h2> </th>
			</tr>
			<tr>

				<td>
					<p> Name: <input type = "text" name = "name" /> </p>
					<p> Address: <input type = "text" name = "address" /> </p>
					<p> City: <input type = "text" name = "city" /> </p>
					<p> State: <input type = "text" name = "state" /> </p>
					<p> Zip: <input type = "text" name = "zip" /> </p>
					<p> E-mail: <input type = "text" name = "email" /> </p>
					<p> Phone #: <input type = "text" name = "phone" /> </p>
				</td>
				<td class = "deposit">		
					
					<p> Deposit Description:
						<input id = "qty" type = "text" name = "qty" /> x
						<select id = "Dd" type = "text" name = "dd">
							<option> </option>
							<option value = "5 Gallon BPA Free"> 5 Gallon BPA Free </option>
							<option value = "5 Gallon BPA Free w/ Spout"> 5 Gallon BPA Free w/ Spout </option>
							<option value = "3 Gallon BPA Free Chubby"> 3 Gallon BPA Free Chubby </option>
							<option value = "3 Gallon BPA Free Chubby w/ Spout"> 3 Gallon BPA Free Chubby w/ Spout </option>
							<option value = "5 Gallon Glass"> 5 Gallon Glass </option>
							<option value = "3 Gallon Glass"> 3 Gallon Glass </option>
						</select>
					</p>
					
					<p> Deposit Amount: <input id = "Da" type = "text" name = "Da" value = "" /> </p>
					<p> Distance: <input id = "distance" type = "text" name = "distance"> </p>
					<p> Comments: </br> <textarea id = "comments" type = "text" name = "comments" /> </textarea> </p>

					
				</td>
			</tr>
		</table>
		<section class = "footer">
			<input id = "button" type = "submit" name = "Submit" />
			<p> <a href = "DatabaseHome.php"> Home </a> </p>
		</section>
	</form>
</body>
</html>

