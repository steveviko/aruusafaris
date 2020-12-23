<?php 
// DB credentials.
define('DB_HOST','us-cdbr-east-02.cleardb.com');
define('DB_USER','bcbb69c6374e89');
define('DB_PASS','d17696e4');
define('DB_NAME','heroku_b08175d2f44f053');
// Establish database connection.
//mysql://bcbb69c6374e89:d17696e4@us-cdbr-east-02.cleardb.com/heroku_b08175d2f44f053?reconnect=true
try
{
$dbh = new PDO("mysql:host=".DB_HOST.";dbname=".DB_NAME,DB_USER, DB_PASS,array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'"));
}
catch (PDOException $e)
{
exit("Error: " . $e->getMessage());
}
?>