<?php

namespace App\Controllers;

use App\Core\App;
use Exception;

class ExampleController
{

    public function index()
    {
        $users = App::get('database')->selectAll("users");
        return view('admin/user_list', compact('users'));
    }
    public function create(){
        $parameters = [
            'nome' => $_POST['userName'],
            'email' => $_POST['userEmail'],
            'senha' => $_POST['userPassword'],
        ];
        App::get('database')->insert('users', $parameters);
        header('Location: /users');
    }
    public function edit(){
        $parameters = [
            'nome' => $_POST['updateUserName'],
            'email' => $_POST['updateUserEmail'],
            'senha' => $_POST['updateUserPassword'],
        ];
        $id = $_POST['id'];

        App::get('database')->update('users', $id, $parameters);
        header('Location: /users');
    }

    public function delete(){
        $id = $_POST['iddelete'];
        App::get('database')->delete('users', $id);
        header('Location: /users');
    }
}

?>