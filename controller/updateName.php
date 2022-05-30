<?php

App::get('database')->update(request(),'users');

redirect('/');
