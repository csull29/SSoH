<!need to chage this code depending on your client server domain to match whatever the host name, password etc. is. 'comment' is the name of our database>
<?php

$conn = mysqli_connect('localhost', 'root', '', 'comment');

if (!$conn) {
	
	die("Connection failed: ".mysqli_connect_error());
}