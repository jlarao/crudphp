<?php

// echo 'hello';
//name file get
$name_file = basename($_SERVER['PHP_SELF']);
$name = explode('.', $name_file);
$name_file = $name[0];

include 'controller/crud.inc.php';
// include 'controller/add.inc.php';
//  echo 'controller/'.$name_file.'.inc.php';

if($name_file !== 'index' ){
    // echo 'controller/'.$name_file.'.inc.php';
    include 'controller/'.$name_file.'.inc.php';
}

