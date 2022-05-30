<?php
use controller\PageController;

$route->get("",[PageController::class,'index']);
$route->get("about",[PageController::class,'about']);
$route->post("name",[PageController::class,'addName']);
$route->get("edit-name",[PageController::class,'editName']);
$route->post("update",[PageController::class,'updateName']);
$route->post("delete",[PageController::class,'deleteName']);

