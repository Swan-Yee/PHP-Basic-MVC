<?php

$users=$database->fetchAll('users');

require "views/index.view.php";