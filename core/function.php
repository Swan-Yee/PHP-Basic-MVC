<?php
function dd($data){
    echo "<pre>";
    var_dump($data);
    die();
}

function view($name,$data=[]){
    extract(
        $data
    );
    return require "views/$name.view.php";
}

function getId(){
    $url = $_SERVER['REQUEST_URI'];
    $url_components = parse_url($url);
    parse_str($url_components['query'], $params);
    $id=$params['id'];

    return $id;
}