<?php

$route->get("","controller/IndexController.php");
$route->get("about","controller/AboutController.php");
$route->post("name","controller/addName.php");
$route->get("edit-name","controller/editName.php");