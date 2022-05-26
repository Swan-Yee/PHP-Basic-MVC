<?php

App::get('database')->query(['name'=>$_POST['name']],'users');

header('Location: /');