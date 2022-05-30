<?php

// $route->get("","controller/IndexController.php");
// $route->get("about","controller/AboutController.php");
// $route->post("name","controller/addName.php");
// $route->get("edit-name","controller/editName.php");
// $route->post("update","controller/updateName.php");
// $route->post("delete","controller/deleteName.php");

$route->get("","PageController@index");
$route->get("about","PageController@about");
$route->post("name","PageController@addName");
$route->get("edit-name","PageController@editName");
$route->post("update","PageController@updateName");
$route->post("delete","PageController@deleteName");

