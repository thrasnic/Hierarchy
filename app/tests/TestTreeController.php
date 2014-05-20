<?php
require_once(dirname(__FILE__) . '/../classes/controller/TreeController.php');
require_once(dirname(__FILE__) . '/../classes/factory/NodeFactory.php');
require_once(dirname(__FILE__) . '/../classes/model/Node.php');

// create
// fatal, invalid id and invalid tag then successful
$c = new TreeController();
print $c->create('', '', '') . "\n";
print $c->create('tag ' . date('Y-m-d H:i:s'), '', '') . "\n";
print $c->create('tag ' . date('Y-m-d H:i:s'), 'test insert_' . date('Y-m-d H:i:s'), '') . "\n";
print $c->create('tag ' . date('Y-m-d H:i:s'), 'test insert_' . date('Y-m-d H:i:s'), time()) . "\n";

// retrieve
$c = new TreeController();
$c->retrieve();

?>