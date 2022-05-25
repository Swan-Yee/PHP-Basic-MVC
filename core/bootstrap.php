<?php
// $config=require "config.php";
// require 'core/database/connect.php';
// require 'core/function.php';
// require 'core/router.php';
// require 'core/request.php';

// fetch
// $database=new QueryBuilder(Connection::make($config['database']));

App::bind("config",require "config.php");

App::bind("database",new QueryBuilder(Connection::make(App::get("config")['database'])));
App::get("database");