<?php

// Include the Composer init script
require '../vendor/autoload.php';

// Initialize Propel with the runtime configuration
Propel::init("../app/conf/clippy-conf.php");

// Add the generated 'classes' directory to the include path
set_include_path("../app/classes" . PATH_SEPARATOR . get_include_path());

?>