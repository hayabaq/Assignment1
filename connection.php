<?php $dbhandle = mysqli_connect('localhost', 'root', '', 'php_security')  or die('MySQL not connected');

if (!$dbhandle) {
	die ( 'Could not select php_security' );
}

?>
