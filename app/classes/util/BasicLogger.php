<?php
/**
 * COPYRIGHT(C) 2014 Potentiate Pty Ltd. All Rights Reserved
 * 
 * BasicLogger.php 
 *
 * <p>
 * 		Description:
 *          This class represents a basic logger. It does not provide log levels,  
 *          or log writers but a print to standard output.
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
class BasicLogger
{
	//-----------------------------------------------------//
	//
	// Constants
	//
	//-----------------------------------------------------//
    private static $_INSTANCE;
    
    const FATAL     = 'FATAL';
    const ERROR     = 'ERROR';
    const WARNING   = 'WARNING';
    const DEBUG     = 'DEBUG';
    const INFO      = 'INFO';
    
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
		CoreLogger::get_instance()->info(__CLASS__, __LINE__, __FUNCTION__, '()');
	}

	//public function __destruct(){}
	/**
	 * This function gets the singleton instance of the class
	 */
	public static function get_instance()
	{
	    if(!isset(self::$_INSTANCE) || self::$_INSTANCE == null)
	    {
	        self::$_INSTANCE = new BasicLogger();
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
	//------------------------------------------//
	// debug
	//------------------------------------------//
	/**
	 * @param $type         - constant FATAL | ERROR | WARNING | DEBUG | INFO
	 * @param $caller		- name of class or script of invocation
	 * @param $line_number	- line number of invocation
	 * @param $function		- name of function invocation
	 * @param $message		- message to output (ussually params)
	 */
	public function write($type, $caller, $line_number, $function, $message)
	{
	    print '[ ' . $type . ' ] ' . $caller . '( '. $line_number . ' ) ' . $function . ' - ' . $message;
	}
}

?>