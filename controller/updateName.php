<?php

App::get('database')->update($_POST,'users');

// header('Location: /');

redirect('/');
