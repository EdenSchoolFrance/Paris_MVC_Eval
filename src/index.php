<?php
// Load database configuration
include 'config/config.php';
//----------------------------------------------------------------------------------
// Check DEBUG_MODE (config)
if (DEBUG_MODE) {
    // Activate PHP debugging
    ini_set('display_errors', 'On');
    error_reporting(E_ALL);
}
// Load librairies
include 'lib/Message.php';
include 'lib/File.php';
include 'lib/Database.php';
include 'lib/Session.php';
// Start the session
Session::start();
// Load librairies
include 'lib/Model.php';
include 'lib/View.php';
include 'lib/Controller.php';
// Load Debug class
include 'lib/Debug.php';
include 'lib/Helper.php';
include 'lib/Application.php';
// Create & instantiate a new Application object
$app = new Application();
