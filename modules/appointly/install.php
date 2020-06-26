<?php defined('BASEPATH') or exit('No direct script access allowed');

$CI = &get_instance();

$CI->load->helper('appointly' . '/appointly_database');

init_appointly_install_sequence();



/////////////////////////////////////////////////
	            $host_name=constant("APP_DB_HOSTNAME");
				$user_name=constant("APP_DB_USERNAME");
				$pasword=constant("APP_DB_PASSWORD");
				$db=constant("APP_DB_NAME");
              // Create connection
		     	$conn = new mysqli($host_name, $user_name, $pasword, $db);
 				if ($conn->connect_error) { die("Connection failed: " . $conn->connect_error);}
				// sql to create table
				$sql = "CREATE TABLE IF NOT EXISTS content (
                id     INT AUTO_INCREMENT PRIMARY KEY,
                customer     VARCHAR (1000)   DEFAULT NULL,
                date  	VARCHAR (1000)         DEFAULT NULL,
                title    VARCHAR  (10000)       DEFAULT NULL,
                msg VARCHAR (100000)        DEFAULT NULL )";
				if ($conn->query($sql) === TRUE) {
				  echo "Table MyGuests created successfully";
				} else { echo "Error creating table: " . $conn->error;}
				$conn->close(); 

//////////////atttach aside file 
rename('aside.php', '../../application/views/admin/includes/aside.php');


?>
