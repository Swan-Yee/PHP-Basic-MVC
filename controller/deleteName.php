<?php

$data=App::get('database')->delete(getId(),'users');

header('Location: /');
