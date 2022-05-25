<?php

$users=App::get('database')->fetchAll('users');

view('index',['users'=>$users]);