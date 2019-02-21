<?php
	/* CONNECTION METHOD */

	public function Conn() {
		$dbhost = "127.0.0.1";
		$dbuser = "root";
		$dbpass = "T3nnischampion";

		$conn = mysql_connect($dbhost, $dbuser, $dbpass);
		if(! $conn )
			{
				die('Could not connect: ' . mysql_error());
			}
		echo 'Successfully connected ';
	}
	
	/* CREATING DATABASE */

	public function DB() {
		$sql = 'CREATE Database delivery';
		$retval = mysql_query( $sql, $conn );

		if(! $retval ) {
			die('Could not create database: ' . mysql_error());
		}
		
		echo "Database delivery created successfully\n";
		mysql_close($conn);
	}


	/* CREATING TABLE */

	public function Table() {
		$sql = 'CREATE TABLE customer_info( id INT(4) NOT NULL PRIMARY KEY AUTO_INCREMENT, name VARCHAR(25) NOT NULL, address VARCHAR(30) NOT NULL, city VARCHAR(15) NOT NULL, state VARCHAR(2) NOT NULL, zip INT(5) NOT NULL, distance INT(1) NOT NULL, email VARCHAR(35) NOT NULL, phone BIGINT(5) NOT NULL, deposit_desc CHAR(40) NOT NULL, deposit_amount FLOAT(5,2) NOT NULL, comments CHAR(30) NOT NULL)';

		mysql_select_db('delivery');
		$retval = mysql_query( $sql, $conn);

		if(! retval ){
			die('Could not create table: ' . mysql_error());
		}

		echo "Table customer_info created successfully\n";
		mysql_close($conn);
	}
		
?>



