<?php
$host = 'localhost';
					$user = 'root';
					$pass = '';
			
					$database = 'manju';
					$con= mysqli_connect($host,$user,$pass,$database);
					if(!$con){
					die ("connection failed.". mysqli_connect_error());
}
					?>