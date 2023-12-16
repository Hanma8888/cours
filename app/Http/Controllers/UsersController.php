<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
class UsersController extends Controller
{
    public function show_login()
    {
        return view("Auth.login");
    }
    public function show_register()
    {
        return view("Auth.register");
    }
    public function show_page(){
        $info_users = User::all();
        return view("users_page", ["login_info" => $info_users]);
    }
    public function create_users(Request $request){
        $request->validate([
            "name" => "required|max:100",
            "email" => "required|max:100",
            "password" => "required|max:255",
            "password_confirmation" => "required|max:255"
        ],[
            "name.required" => "Поле обязательно для заполнения",
            "email.required" => "Поле обязательно для заполнения",
            "password.required" => "Поле обязательно для заполнения",
            "password_confirmation.required" => "Поле обязательно для заполнения",

            "name.max" => "Не более 100 символов",
            "email.max" => "Не более 100 символов",
            "password.max" => "Не более 255 символов",
            "password_confirmation:max" => "Не более 255 символов"
        ]);
        if($request -> fails()){
            return redirect('register')->withInput()->withErrors($request);
        }
    }
    public function auth_users(Request $request){
        $request->validate([
            "name" => "required|max:100",
            "email" => "required|max:100",
            "password" => "required|max:255",
            "password_confirmation" => "required|max:255"
        ],[
            "name.required" => "Поле обязательно для заполнения",
            "email.required" => "Поле обязательно для заполнения",
            "password.required" => "Поле обязательно для заполнения",
            "password_confirmation.required" => "Поле обязательно для заполнения",

            "name.max" => "Не более 100 символов",
            "email.max" => "Не более 100 символов",
            "password.max" => "Не более 255 символов",
            "password_confirmation:max" => "Не более 255 символов"
        ]);
        if($request -> fails()){
            return redirect('register')->withInput()->withErrors($request);
        }
    }
}
