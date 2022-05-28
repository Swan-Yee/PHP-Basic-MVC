<?php

$data=App::get('database')->edit(getId(),'users');

view('edit',['data'=>$data]);
