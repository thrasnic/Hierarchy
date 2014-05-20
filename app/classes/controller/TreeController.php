<?php
require_once(dirname(__FILE__) . '/../../config/app.inc.php');

// classes
require_once(constant('APP_MODEL_DIR') . DIRECTORY_SEPARATOR	. 'Database.php');
require_once(constant('APP_MODEL_DIR') . DIRECTORY_SEPARATOR	. 'Node.php');
require_once(constant('APP_MODEL_DIR') . DIRECTORY_SEPARATOR	. 'Model.php');

/**
 * COPYRIGHT(C) 2014 Potentiate Pty Ltd. All Rights Reserved
 * 
 * TreeController 
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
class TreeController
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
	protected $db;
	
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
	    $this->db = new Database();
		BasicLogger::get_instance()->write(BasicLogger::INFO, __CLASS__, __LINE__, __FUNCTION__, 'Controller constructed.');
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
	/**
	 * 
	 * @param unknown $tag
	 * @param unknown $desciption
	 * 
	 * @return id of the inserted query otherwise false
	 */
	public function create($tag, $description='', $time=0)
	{
	    // validations
	    if($tag == null or $tag == '')
	    {
	        BasicLogger::get_instance()->write(BasicLogger::FATAL, __CLASS__, __LINE__, __FUNCTION__, 'Invalid tag.');
            return false;
	    }
	    
	    if($time == null or $time == 0)
	    {
	        $time = time();
	    }
	    
	    $this->db->connection()->beginTransaction();
	    
	    // insert
        $sql    = "INSERT INTO node(description, tag, created_at)
	               VALUES (:description, :tag, :time)";
        $q      = $this->db->connection()->prepare($sql);
        $is_ok  = $q->execute(array(':description'=>$description, ':tag'=>$tag, ':time'=>$time));
        
        if(!$is_ok)
        {
            BasicLogger::get_instance()->write(BasicLogger::FATAL, __CLASS__, __LINE__, __FUNCTION__, 'Insert error.');
            return false;
        }

        BasicLogger::get_instance()->write(BasicLogger::INFO, __CLASS__, __LINE__, __FUNCTION__, 'Row inserted.');

        $last_insert_id = $this->db->connection()->lastInsertId();
        $this->db->connection()->commit();
        
        return $last_insert_id;
	}
	
	//-------------------------------//
	// retrieve
	//-------------------------------//
	public function retrieve()
	{
	    $sql   = 'SELECT * FROM node';
	    $q     = $this->db->connection()->prepare($sql);
	    $q->execute();
	    $results = $q->fetchAll(PDO::FETCH_ASSOC);
	    
	    print_r($results);
	}
	
	//-------------------------------//
	// update
	//-------------------------------//
	/**
	 * 
	 * @param unknown $id
	 * @param unknown $name
	 */
	public function update($id, $name)
	{
	
	}
	
	//-------------------------------//
	// delete
	//-------------------------------//
	/**
	 *
	 * @param unknown $id
	 */
	public function delete($id)
	{
	
	}
}

?>