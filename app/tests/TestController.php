<?php
require_once(dirname(__FILE__) . '/../classes/controller/Controller.php');

// util
//require_once(constant('CORE_UTIL_DIR') 	. '/CoreLogger.php');

/**
 * COPYRIGHT(C) 2014 adrian.teh. All Rights Reserved
 * 
 * file_name 
 *
 * <p>
 * 		Description:
 * 
 * 		Requirements: 
 * 
 * 		Functions:
 * 			__construct:
 * 
 * 		Usage Example: 
 * 					   	
 * </p>
 *
 * @author	: adrian.teh
 * @version	:  
 * @since	: 20/05/2014
 */

// create
// fatal, invalid id and invalid tag then successful
$c = new Controller();
$c->create(new Node(null, '', ''));
$c->create(new Node(1, '', ''));
$c->create(new Node(1, 'test', ''));

?>