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
    return $_GET['id'];
}

function redirect($url){
    header('Location:'.$url);
};

function request($name=""){
    if($_SERVER['REQUEST_METHOD'] === 'POST'){
        return $_POST[$name];
    }

    if($_SERVER['REQUEST_METHOD'] === 'GET'){
        return $_GET[$name];
    }
}