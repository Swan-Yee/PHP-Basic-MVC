<?php
require "vendor/autoload.php";
require "core/bootstrap.php";
require "core/function.php";

Router::load("route.php")->direct(Request::uri(),$_SERVER['REQUEST_METHOD']);
