<?php
require_once(dirname(__FILE__) . '/../config/app.inc.php');

require_once(constant('APP_MODEL_DIR') . DIRECTORY_SEPARATOR	. 'Database.php');

$c  = new Database();
$c  = $c->connection;

if(!$c)
{
    BasicLogger::get_instance()->write(BasicLogger::FATAL, __CLASS__, __LINE__, __FUNCTION__, 'Unable to connect to database.');
    die();
}
else
{
    BasicLogger::get_instance()->write(BasicLogger::INFO, __CLASS__, __LINE__, __FUNCTION__, 'Connected to database.');
}

var_dump($c);

$time = time();
$sql = "INSERT INTO node(description, tag, created_at)
	             VALUES (:description, :tag, :time)";
$q = $c->prepare($sql);
$q->execute(array(':description'=>'test connection', ':tag'=>'connection', ':time'=>$time));

BasicLogger::get_instance()->write(BasicLogger::INFO, __CLASS__, __LINE__, __FUNCTION__, 'Inserted row.');

?>