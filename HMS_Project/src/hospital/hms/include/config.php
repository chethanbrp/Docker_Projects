<?php
define('DB_SERVER','mysql');   // MySQL container hostname
define('DB_USER','root');      // MySQL username
define('DB_PASS','root');      // MySQL root password
define('DB_NAME', 'hms');      // Database name

$con = mysqli_connect(DB_SERVER, DB_USER, DB_PASS, DB_NAME);

// Check connection
if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
?>
