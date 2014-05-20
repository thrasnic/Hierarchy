<?php
require_once(dirname(__FILE__) . '/../classes/factory/NodeFactory.php');

// create
// fatal, invalid id and invalid tag then successful
$c = new NodeFactory();
$c->make(null, '', '');
$c->make(1, '', '');
$c->make(1, 'test', '');

// create
// fatal, invalid id and invalid tag then successful
NodeFactory::get_instance()->make(null, '', '');
NodeFactory::get_instance()->make(1, '', '');
NodeFactory::get_instance()->make(1, 'test', '');
?>