<?php
require "core/bootstrap.php";

require Router::load("route.php")->direct(Request::uri(),$_SERVER['REQUEST_METHOD']);
