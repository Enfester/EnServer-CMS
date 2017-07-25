<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Server;
use App\Support;

class AdminController extends Controller {

    public function __construct() {
        $this->middleware('admin');
    }

    public function main() {

echo \Request::ip();
        return view("admin.main", [
            "title" => "Панель Администратора",
            "users" => User::all(),
            "supports" => Support::all(),
            "servers" => Server::all(),
            
        ]);
    }

}
