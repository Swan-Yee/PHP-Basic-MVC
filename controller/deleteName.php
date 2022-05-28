<?php

getId();

$data=App::get('database')->delete($id,'users');

header('Location: /');
