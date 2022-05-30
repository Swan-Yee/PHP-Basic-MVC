<?php
use core\App;

App::bind("config",require "config.php");

App::bind("database",new QueryBuilder(Connection::make(App::get("config")['database'])));
App::get("database");