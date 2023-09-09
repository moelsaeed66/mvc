<?php

//define paths
define("DS",DIRECTORY_SEPARATOR);
define("ROOT",dirname(__DIR__));
define("APP",ROOT.DS."app".DS);
define("CONFIG",APP."config".DS);
define("CONTROLLERS",APP."controllers".DS);
define("VIEWS",APP."views".DS);
define("MODELS",APP."models".DS);
define("LIBS",APP."libs".DS);
define("CORE",APP."core".DS);


//define database

define("PASS","");
define("DBNAME","company2");
define("USER","root");
define("HOST","localhost");

//define domain

define("BURL","http://php_mvc.test/");


require(CONFIG."helpers.php");


//autoload all classes
$modules = [ROOT,APP,CORE,VIEWS,CONTROLLERS,MODELS,CONFIG,LIBS];
set_include_path(get_include_path(). PATH_SEPARATOR.implode(PATH_SEPARATOR,$modules));
spl_autoload_register('spl_autoload');


$app=new app();