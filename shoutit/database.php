<?php
//Connect to MySQL
$con = mysqli_connect('localhost', 'daf903', 'Erinn23!', 'MySQL80.shoutit');

//Test the connection_aborted
if(!$con){
	echo 'Failed to connect to MySQL: '.$mysqli_connect_error();
	echo "Error: Unable to connect to MySQL." . PHP_EOL;
    echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
    echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
    exit;
}

echo "Success: A proper connection to MySQL was made! The my_db database is great." . PHP_EOL;
echo "Host information: " . mysqli_get_host_info($con) . PHP_EOL;

?>



