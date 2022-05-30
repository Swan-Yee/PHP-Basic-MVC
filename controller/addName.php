<?php

App::get('database')->query(['name'=>request('name')],'users');

redirect('/');