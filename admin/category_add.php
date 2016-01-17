<?php
 function outputJSON($msg, $status = 'error'){
    header('Content-Type: application/json');
    die(json_encode(array(
        'data' => $msg,
        'status' => $status
    )));
}
$name = filter_input(post, $variable_name);
 
$description = json_decode($_POST['description']);
$precio = json_decode($_POST['precio']);
$Order = json_decode($_POST['order']);
 
$sql = 'INSERT INTO '

//    outputJSON('File uploaded successfully to "' . $name.'"' , 'success');
//outputJSON('Unsupported filetype uploaded.'. $_FILES['myfile']['type'], 'error' );
 
 
 
        

