<?php
$config=require "config.php";
require 'core/database/connect.php';
require 'core/function.php';
require 'core/router.php';
require 'core/request.php';

// fetch
$database=new QueryBuilder(Connection::make($config['database']));