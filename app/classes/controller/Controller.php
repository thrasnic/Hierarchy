<?php
require_once(dirname(__FILE__) . '/../../config/app.inc.php');

// classes
require_once(constant('APP_MODEL_DIR') . DIRECTORY_SEPARATOR	. 'Node.php');
require_once(constant('APP_MODEL_DIR') . DIRECTORY_SEPARATOR	. 'Model.php');

/**
 * COPYRIGHT(C) 2014 adrian.teh. All Rights Reserved
 * 
 * Controller.php 
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
class Controller
{
	//-----------------------------------------------------//
	//
	// Constants
	//
	//-----------------------------------------------------//
	
	//-----------------------------------------------------//
	//
	// Variables
	//
	//-----------------------------------------------------//
	
	//-----------------------------------------------------//
	//
	// Constructor/Destructor
	//
	//-----------------------------------------------------//
	//-----------------------------//
	// __construct
	//-----------------------------//
	public function __construct()
	{
	    BasicLogger::get_instance()->write(BasicLogger::INFO, __CLASS__, __LINE__, __FUNCTION__, 'Controller started.');
	}

	//public function __destruct(){}
	
	//-----------------------------------------------------//
	//
	// Getters/Setters
	//
	//-----------------------------------------------------//

	//-----------------------------------------------------//
	//
	// Private functions
	//
	//-----------------------------------------------------//
	
	//-----------------------------------------------------//
	//
	// Public functions
	//
	//-----------------------------------------------------//
	//-------------------------------//
	// create
	//-------------------------------//
	public function create(Node $node)
	{
	    
	}
	
	//-------------------------------//
	// retrieve
	//-------------------------------//
	public function retrieve()
	{
	
	}
	
	//-------------------------------//
	// update
	//-------------------------------//
	public function update()
	{
	     
	}
	
	//-------------------------------//
	// delete
	//-------------------------------//
	public function delete()
	{
	     
	}
}

?>