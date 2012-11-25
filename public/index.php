<?php
require '../vendor/autoload.php';

$app = new Slim(array(
    'log.level' => 4,
    'log.enabled' => true
//    'log.writer' => new \Slim\Extras\Log\DateTimeFileWriter(array(
//        'path' => '../logs',
//        'name_format' => 'y-m-d'
//    ))

));

function doIndex() {
    
    $smarty=new Smarty();
    $smarty->template_dir="../templates";
    $smarty->cache_dir="../cache";
    $smarty->config_dir="../configs";
//    $smarty->testInstall();
    $smarty->assign('title','Clippy Web Clippings Database');
//    // Create an array, which we will assign later
//    //$contacts=array(
//    //  array("Name"=>"John Parkinson","email"=>"john.parkinson.test@domain.tld","age"=>26),
//    //  array("Name"=>"Super Mario","email"=>"super.mario@domain.tld","age"=>54),
//    //  array("Name"=>"Pete Peterson","email"=>"pete.peterson@domain.tld","age"=>18),
//    //  array("Name"=>"Smarty Creator","email"=>"smarty.creator@domain.tld","age"=>37)
//    //);
//    // Assign the array
//    //$smarty->assign("contacts",$contacts);
//    // Compile and Display output of the template file templates/index.tpl
//    // Up to here you should put your own code
    $smarty->display("index.tpl");
    
        
}

//$app->response()->status(200);
$app->get('/', 'doIndex');


$app->run();


?>
