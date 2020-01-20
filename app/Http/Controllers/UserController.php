<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function show ($id)
    {
        $user = User::where('id', $id)->first();
        
        // if($user) {
        //     echo '<h1>Dados do usuário </h1>';
        //     echo "<p>Nome: {$user->name} E-mail: {$user->email}";
        // }
        // $adress = $user->adress()->first();

        // if($adress) {
        //     echo '<h1>Endereço</h1>';
        //     echo "<p>Endereço: {$adress->street} {$adress->number} {$adress->city}";
        // }

        $posts = $user->posts()->get();

        if($posts) {
            echo '<h1>Artigos</h1>';
            foreach($posts as $post) {
            echo "<p>#{$post->id} {$post->title} {$post->content}";
            }
        }
    }

    public function listUser ()
    {
        // $user = new User();
        // $user->name = 'David Henrique';
        // $user->email = 'david.henrie700@gmail.com';
        // $user->password = Hash::make('123');
        // $user->save();
        // echo "<h1>Listagem de Usuários</h1>";

        // $user = User::where('id', 1)->first();
        // return view('listUser', ['user' => $user]);
    }
}
