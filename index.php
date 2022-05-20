<?php
require "core/bootstrap.php";

require Router::load("route.php")->direct(Request::uri());
