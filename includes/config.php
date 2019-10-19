<?php 
// DB credentials.
define('DB_HOST',"remotemysql.com");
define('DB_USER',"E4GxaHo1c0");
define('DB_NAME',"E4GxaHo1c0");
define('DB_PASS',"OEm8phNdRE");
// Establish database connection.
try
{
$dbh = new PDO("mysql:host=".DB_HOST.";dbname=".DB_NAME,DB_USER, DB_PASS,array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'"));
}
catch (PDOException $e)
{
exit("Error: " . $e->getMessage());
}
?>