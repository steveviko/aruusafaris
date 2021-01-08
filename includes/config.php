<?php 
// DB credentials.
// define('DB_HOST','localhost');
// define('DB_USER','root');
// define('DB_PASS','');
// define('DB_NAME','tours');
// Establish database connection.
//mysql://bcbb69c6374e89:d17696e4@us-cdbr-east-02.cleardb.com/heroku_b08175d2f44f053?reconnect=true
define('DB_HOST','remotemysql.com');
define('DB_USER','UdESu1z1Dc');
define('DB_PASS','mc23iOzMDs');
define('DB_NAME','UdESu1z1Dc');
try
{
$dbh = new PDO("mysql:host=".DB_HOST.";dbname=".DB_NAME,DB_USER, DB_PASS,array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'"));
}
catch (PDOException $e)
{
exit("Error: " . $e->getMessage());
}

?>