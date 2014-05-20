<?php
require_once(dirname(__FILE__) . '/../classes/controller/Controller.php');

// create
// fatal, invalid id and invalid tag then successful
$c = new Controller();
$c->create(new Node(null, '', ''));
$c->create(new Node(1, '', ''));
$c->create(new Node(1, 'test', ''));

?>