<?php
require_once(dirname(__FILE__) . '/../../config/app.inc.php');

// classes
require_once(constant('APP_MODEL_DIR') . DIRECTORY_SEPARATOR	. 'Node.php');

/**
 * COPYRIGHT(C) 2014 adrian.teh. All Rights Reserved
 * 
 * NodeFactory.php 
 *
 * <p>
 * 		Description:
 *          This class represents a factory to produce 'Node' objects.
 *          Its a basic factory that does no more than creating 'new' nodes.
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
class NodeFactory
{
	//-----------------------------------------------------//
	//
	// Constants
	//
	//-----------------------------------------------------//
    private static $_INSTANCE;
    
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
	}

    //public function __destruct(){}
	/**
	 * This function gets the singleton instance of the class
	 */
	public static function get_instance()
	{
	    if(!isset(self::$_INSTANCE) || self::$_INSTANCE == null)
	    {
	        self::$_INSTANCE = new NodeFactory();
	    }
	    return self::$_INSTANCE;
	}
	
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
	public function make($id, $tag, $path, $permissions='', $created_at=0, $updated_at=0)
	{
	    return new Node($id, $tag, $path, $permissions, $created_at, $updated_at);
	}
}

?>