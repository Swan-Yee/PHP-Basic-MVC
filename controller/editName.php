<?php
$url = $_SERVER['REQUEST_URI'];
$url_components = parse_url($url);
parse_str($url_components['query'], $params);
$id=$params['id'];

$data=App::get('database')->edit($id,'users');

view('edit',['data'=>$data]);
