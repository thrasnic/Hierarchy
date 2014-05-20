<?php
/**
 * COPYRIGHT(C) 2014 adrian.teh. All Rights Reserved
 * 
 * Node.php 
 *
 * <p>
 * 		Description:
 *          This class represents a data object of a 'Node'. 
 *          A node (ie. tree, branch) is defined as an object that stores some data 
 *          in relation to a node such as id, tag, permissions etc.
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
class Node
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
    private $id;
    private $tag;
    private $path;
    private $permission;
    private $created_at;
    private $updated_at;
    
	//-----------------------------------------------------//
	//
	// Constructor/Destructor
	//
	//-----------------------------------------------------//
	//-----------------------------//
	// __construct
	//-----------------------------//
	public function __construct($id, $tag, $path, $permissions='', $created_at=0, $updated_at=0)
	{
	    // validations
	    if($id == null or $id == '' or !is_numeric($id))
	    {
	        return false;
	    }
	    
	    if($tag == null or $tag == '')
	    {
	        return false;
	    }
	    
	    // set it
	    $this->id          = $id;
	    $this->tag         = $tag;
	    $this->path        = $path;
	    $this->permission  = $permissions;
	    $this->created_at  = $created_at;
	    $this->updated_at  = $updated_at;
	    
	    return true;
	}

	//public function __destruct(){}
	
	//-----------------------------------------------------//
	//
	// Getters
	//
	//-----------------------------------------------------//
	public function get_id()
	{
	    return $this->id;
	}
	
	public function get_tag()
	{
	    return $this->tag;
	}
	
	/**
	 * This function gets the path of this node.
	 * The string is a sha1 of tags of a path to the parent
	 * @return string $path
	 */
	public function get_path()
	{
	    return $this->path;
	}
	
	/**
	 * This function gets the permission of this node. 
	 * A permission is defined as a delimited string to 
	 * be evaluated as predefined actions.
	 * 
	 * @return string - a string ie. can_edit=true,can_delete=false
	 */
	public function get_permission()
	{
	    return $this->permission;
	}
	
	public function get_created_at()
	{
	    return $this->created_at;
	}
	
	public function get_updated_at()
	{
	    return $this->updated_at;
	}
	
	//-----------------------------------------------------//
	//
	// Setters
	//
	//-----------------------------------------------------//
	
	public function set_id($id)
	{
	    $this->id = id;
	}
	
	public function set_tag($tag)
	{
	    $this->tag = $tag;
	}
	
	/**
	 * This function sets the path of this node. 
	 * The string is a sha1 of tags of a path to the parent
	 * @param string $path
	 */
	public function set_path($path)
	{
	    $this->path = $path;
	}
	
	/**
	 * This function sets the permission of this node.
	 * A permission is defined as a delimited string to
	 * be evaluated as predefined actions.
	 *
	 * @param string $permission - a string ie. can_edit=true,can_delete=false
	 */
	public function set_permission($permission)
	{
	    $this->permission = $permission;
	}
	
	public function set_created_at($created_at)
	{
	    $this->created_at = $created_at;
	}
	
	public function set_updated_at($updated_at)
	{
	    $this->updated_at = $updated_at;
	}
	
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
}

?>