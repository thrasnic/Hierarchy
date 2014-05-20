<?php
/**
 * COPYRIGHT(C) 2014 adrian.teh. All Rights Reserved
 * 
 * Database.php 
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
class Database
{
	//-----------------------------------------------------//
	//
	// Constants
	//
	//-----------------------------------------------------//
    public $connection;
    
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
	    try 
	    {
	        $db_host       = 'localhost';
	        $db_name       = 'demo';
	        $db_user       = 'root';
	        $db_password   = 'root';
	    
	        $c = new PDO('mysql:dbname=' . $db_name . ';host=' . $db_host, $db_user, $db_password);
	        
	        $c->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
	        $c->exec("SET CHARACTER SET utf8");  //  return all sql requests as UTF-8
	        
	        $this->connection = $c;
	    }
	    catch (PDOException $err) 
	    {
	        // log
	    }
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
    public function connection()
    {
        return $this->connection;
    }
}

?>