<?php

getId();


$data=App::get('database')->edit($id,'users');

view('edit',['data'=>$data]);
