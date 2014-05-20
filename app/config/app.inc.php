<?php
/**
 * COPYRIGHT(C) 2014 Potentiate Pty Ltd. All Rights Reserved
 *
 * app.inc.php
 *
 * <p>
 * 		Description:
 *          
 * </p>
 *
 * @author	: adrian.teh
 * @version	:
 * @since	: 20/05/2014
 */
//-----------------------------------------------------//
//
// Directories (without trailing '/')
//
//-----------------------------------------------------//
define('APP_ROOT_DIR', 			dirname(__FILE__) 			 . DIRECTORY_SEPARATOR	. '..');
define('APP_CLASSES_DIR', 		constant('APP_ROOT_DIR') 	 . DIRECTORY_SEPARATOR	. 'classes');
define('APP_CONFIG_DIR', 		constant('APP_ROOT_DIR') 	 . DIRECTORY_SEPARATOR	. 'config');
define('APP_FUNCTIONS_DIR', 	constant('APP_ROOT_DIR') 	 . DIRECTORY_SEPARATOR	. 'functions');
define('APP_PUBLIC_DIR', 		constant('APP_ROOT_DIR') 	 . DIRECTORY_SEPARATOR	. 'public');

define('APP_CONTROLLER_DIR', 	constant('APP_CLASSES_DIR')  . DIRECTORY_SEPARATOR	. 'controller');
define('APP_FACTORY_DIR', 		constant('APP_CLASSES_DIR')  . DIRECTORY_SEPARATOR	. 'factory');
define('APP_MODEL_DIR', 		constant('APP_CLASSES_DIR')  . DIRECTORY_SEPARATOR	. 'model');
define('APP_UTIL_DIR', 			constant('APP_CLASSES_DIR')  . DIRECTORY_SEPARATOR	. 'util');

//-----------------------------------------------------//
//
// BasicLogger
//
//-----------------------------------------------------//
require_once(constant('APP_UTIL_DIR') . DIRECTORY_SEPARATOR	. 'BasicLogger.php');
?>