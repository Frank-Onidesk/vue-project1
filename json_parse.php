<?php
/*header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET, POST');
header("Access-Control-Allow-Headers: X-Requested-With");*/

define("Database", "my-api-project");
define("Host", "localhost");
define("User", "root");
define("Passw", "");

include "database.php";
$db = new db();
$conn = $db->getConnection();



// you can do here whatever you want ... just have attention to use json_encode to parse data
$email =  filter_var($_REQUEST['email'], FILTER_VALIDATE_EMAIL);
if(!$email){
    $response = ['email'=> 'Email is not valid !' ];
    echo json_encode($response);
}



$db->_close();



