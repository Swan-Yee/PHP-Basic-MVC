<?php

class PageController{
    public function index()
    {
        $users=App::get('database')->fetchAll('users');
        view('index',['users'=>$users]);
    }

    public function about()
    {
        view('about');
    }

    public function addName()
    {
        App::get('database')->query(['name'=>$_POST['name']],'users');
        header('Location: /');
    }

    public function editName(){
        $data=App::get('database')->edit(getId(),'users');
        view('edit',['data'=>$data]);
    }

    public function updateName(){
        App::get('database')->update($_POST,'users');
        header('Location: /');
    }

    public function deleteName()
    {
        App::get('database')->delete(getId(),'users');
        header('Location: /');
    }
}