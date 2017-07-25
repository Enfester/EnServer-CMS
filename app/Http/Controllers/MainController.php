<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Server;
use App\User;

/**
 * Контроллер главной страницы
 */
class MainController extends Controller {

    public function main() {

        $servers = Server::select(["id", "name", "icon", "descript", "online_current", "online_max"])->get();

        return view("main")->with(["title" => "Главаня", "servers" => $servers]);
    }

    public function server(Server $id) {

        $server = Server::find($id);

        return view("server")->with(["title" => $server->name, "server" => $server]);
    }

    public function user(User $id) {
        return view("user")->with(["title" => "Игроковй профиль игрока " . $id->login, 'profile' => $id]);
    }

    public function userLoginToID($login) {
        $id = User::select('id')->where(['login' => $login])->first()->id;
        //  dd($id);
        return redirect()->route('user', $id);
    }

}
