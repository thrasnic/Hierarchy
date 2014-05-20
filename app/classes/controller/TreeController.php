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
	    BasicLogger::get_instance()->write(BasicLogger::INFO, __CLASS__, __LINE__, __FUNCTION__, "tag=[ $tag ], description=[ $description ], time=[ $time ]");
	    
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
	    
	    // insert
	    $this->db->connection()->beginTransaction();
        $sql    = "INSERT INTO node(description, tag, created_at)
	               VALUES (:description, :tag, :time)";
        $q      = $this->db->connection()->prepare($sql);
        $is_ok  = $q->execute(array(':description'=>$description, ':tag'=>$tag, ':time'=>$time));
        
        if(!$is_ok)
        {
            BasicLogger::get_instance()->write(BasicLogger::FATAL, __CLASS__, __LINE__, __FUNCTION__, 'Insert error.');
            return false;
        }
        
        $last_insert_id = $this->db->connection()->lastInsertId();
        $this->db->connection()->commit();
        
        BasicLogger::get_instance()->write(BasicLogger::INFO, __CLASS__, __LINE__, __FUNCTION__, "Row added.");
        return $last_insert_id;
	}
	
	//-------------------------------//
	// retrieve
	//-------------------------------//
	/**
	 * 
	 * @return multitype:
	 */
	public function retrieve()
	{
	    BasicLogger::get_instance()->write(BasicLogger::INFO, __CLASS__, __LINE__, __FUNCTION__, "()");
	     
	    $sql   = 'SELECT * FROM node';
	    $q     = $this->db->connection()->prepare($sql);
	    $q->execute();
	    $results = $q->fetchAll(PDO::FETCH_ASSOC);
	    
	    return $results;
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
	    BasicLogger::get_instance()->write(BasicLogger::INFO, __CLASS__, __LINE__, __FUNCTION__, "id=[ $id ], name=[ $name ]");
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
	    BasicLogger::get_instance()->write(BasicLogger::INFO, __CLASS__, __LINE__, __FUNCTION__, "id=[ $id ]");
	    
	    // validations
	    if($id == null or !is_numeric($id) or $id <= 0)
	    {
	        return;
	    }
	    
	    // delete
	    $sql   = 'DELETE FROM node WHERE id = :id';
	    $q     = $this->db->connection()->prepare($sql);
	    $q ->bindParam(':id', $id, PDO::PARAM_INT);
	    $q->execute();
	    
	    BasicLogger::get_instance()->write(BasicLogger::INFO, __CLASS__, __LINE__, __FUNCTION__, "Row deleted.");
	}
}

?>