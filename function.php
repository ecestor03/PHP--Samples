<?php
/* 
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - Title : 
Author :  Edgar Sotero Estor
Description :  The step by step function of creating the database without going to the mysql, this can be use in creating new application, installation of new application, included are schema in creating table inside the database
Created : 01/26/2015
Modified : 06/26/2017
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - 
*/


/*
 * Summary:     Gather all the  credential given by the user
 * Parameters:   servername, username, password and database
 * Return:       all creadential
 */

if($_POST){
	$servername = $_POST['text_servername'];
	$username = $_POST['text_username'];
	$password = $_POST['text_password'];
	$dbname = $_POST['text_tablename'];
	

	createdb($servername, $username, $password, $dbname );
}



/*
 * Summary:     Creatting a new database based on
 *               the parameter given by the user
 * Parameters:   servername, username, password and database
 * Return:       Return the result back to the indexpage
 */

function createdb($servername, $username, $password, $dbname ){

			// Create a connection to the database
			$conn = new mysqli($servername, $username, $password);
			// Check if the connection will not return any error
			if ($conn->connect_error) {
				die("Connection failed: " . $conn->connect_error);
			} 

			// Start creating the database
			$sql = "CREATE DATABASE ". $dbname; // call the new database name 
			if ($conn->query($sql) === TRUE) {
			
						// initiate the cration of the table inside the new database
						$conn = new mysqli($servername, $username, $password, $dbname);
						// Check connection
						if ($conn->connect_error) {
							die("Connection failed: " . $conn->connect_error);
						} 
						
						// sql to create table, assuming the new table will be named 'ExampleTable'
						$sql = "CREATE TABLE ExampleTable ( 
						id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
						firstname VARCHAR(30) NOT NULL,
						lastname VARCHAR(30) NOT NULL,
						email VARCHAR(50),
						reg_date TIMESTAMP
						)";

						if ($conn->query($sql) === TRUE) {
							$result = "Table ExampleTable created successfully";
						} else {
							echo "Error creating table: " . $conn->error;
						}
					
			} else {
					echo "Error creating database: " . $conn->error;
			}
			
			//close all connection
			$conn->close();
			
			//redirect back to the homepage with result
			$newURL = 'index.php';
			header('Location: '.$newURL.'?result='.$result );
}
?>
