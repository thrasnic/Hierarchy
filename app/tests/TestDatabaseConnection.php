<?php
require_once(dirname(__FILE__) . '/../config/app.inc.php');

// connect to the database.
$db = new PDO('mysql:dbname=' . DATABASE_NAME . ';host=' . DATABASE_SERVER, DATABASE_USERNAME, DATABASE_PASSWORD);

if(!$db)
{
     BasicLogger::get_instance()->write(BasicLogger::FATAL, __CLASS__, __LINE__, __FUNCTION__, 'Unable to connect to database.');
}
else
{
    BasicLogger::get_instance()->write(BasicLogger::INFO, __CLASS__, __LINE__, __FUNCTION__, 'Connected to database.');
}

?>