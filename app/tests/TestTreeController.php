<?php
require_once(dirname(__FILE__) . '/../classes/controller/TreeController.php');
require_once(dirname(__FILE__) . '/../classes/factory/NodeFactory.php');
require_once(dirname(__FILE__) . '/../classes/model/Node.php');

$ids = array();

// create
// fatal, invalid id and invalid tag then successful
$c = new TreeController();
$ids[] = $c->create('', '', '');
$ids[] = $c->create('tag ' . date('Y-m-d H:i:s'), '', '');
$ids[] = $c->create('tag ' . date('Y-m-d H:i:s'), 'test insert_' . date('Y-m-d H:i:s'), '');
$ids[] = $c->create('tag ' . date('Y-m-d H:i:s'), 'test insert_' . date('Y-m-d H:i:s'), time());

// delete
foreach($ids as $id)
{
    if($id != null and is_numeric($id))
    {
        $c->delete($id);
    }
}

// retrieve


?>