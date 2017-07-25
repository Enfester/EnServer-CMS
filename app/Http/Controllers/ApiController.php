<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;
use Storage;
use Log;

class ApiController extends Controller {

    public function __construct() {
        Log::useDailyFiles(storage_path() . '/logs/api.log');
    }

    public function main() {
        echo '<form method="POST" action="' . route("auth") . '">

               <input type="hidden" name="_method" value="POST">
                <div class="form-group">
                    <label>Имя</label>                    
                    <input type="text" class="form-control" name="login" >
                </div>
                <div class="form-group">
                    <label>Проль</label>   
                    <input type="text" class="form-control" name="password" >
                </div>
                <div class="form-group">
                   <label>Токен</label>   
                    <input type="integer" class="form-control" name="token" >
                </div>
                 <input type="submit" class="form-control" >
                </form>';
    }

    public function main2() {
        echo '<form method="POST" action="' . route("join") . '">

               <input type="hidden" name="_method" value="POST">
                <div class="form-group">
                    <label>accessToken</label>                    
                    <input type="text" class="form-control" name="accessToken" >
                </div>
                <div class="form-group">
                    <label>selectedProfile</label>   
                    <input type="text" class="form-control" name="selectedProfile" >
                </div>
                <div class="form-group">
                   <label>serverId</label>   
                    <input type="integer" class="form-control" name="serverId" >
                </div>
                 <input type="submit" class="form-control" >
                </form>';
    }

    /*
     * POST Запрос на этот URL производится лаунчером в момент авторизации пользователя в лаунчере
     * Принимает 3 аргумента
     * login - никнейм пользователя
     * password - пароль пользователя
     * token - ключ генерируемый лаунечером
     */

    public function auth(Request $request) {

        $user = User::select(["id", "uuid", "password"])->where(["login" => $request->login])->first();

        if (Auth::attempt(['login' => $request->login, 'password' => $request->password])) {
            $accessToken = md5(rand());
            if (!$user->uuid) {
                $uuid = $this->generate_uuid();
                $user->uuid = $uuid;
            } else {
                $uuid = $user->uuid;
            }

            $user->accessToken = $accessToken;
            $user->save();

            $json = [
                "status" => "ok",
                "login" => $request->login,
                "uuid" => $uuid,
                "accessToken" => $accessToken,
                "clientToken" => $request->token
            ];

            Log::info("Авторизация: " . json_encode($json));
            return $this->showJson($json, true);
        }
        return $this->showJson(["messege" => "Неверный логин или пароль!"], false);
    }

    /*
     * POST Запрос на этот URL производится клиентом в момент подключения к серверу с online-mode=true.
     * Принимает 3 аргумента
     * accessToken - токенсенерированный на сайте и записанный в лаунчер в качестве аргумента при запуске игры
     * selectedProfile - uuid авторизированного пользователя
     * serverId - хуйзнает
     */

    public function join(Request $request) {
        Log::info("join connect: " . json_encode(["accessToken" => $request->accessToken, "uuid" => $request->selectedProfile]));
        $user = User::select(["id", "serverId"])->where(["accessToken" => $request->accessToken, "uuid" => $request->selectedProfile])->first();
        if ($user) { // Если выборка произошла
            $user->serverId = $request->serverId;
            $user->save();
            Log::info("join save: " . $user->serverId);
            exit(); // все нормально выходим с пустой страницей
        } else
            return json_encode([
                'error' => "IllegalArgumentException",
                'errorMessage' => "credentials can not be null."
            ]);
    }

    /*
     * GET Запрос на этот URL выполняет сервер с online-mode=true после того, как клиент, пытающийся к нему подключится, успешно выполнит join запрос.
     * Принимает 2 аргумента
     * username
     * serverId
     */

    public function hasJoined(Request $request) {
        Log::info("hasJoined connect: " . json_encode(["login" => $request->username, "serverId" => $request->serverId]));
        $user = User::select(["uuid"])->where(["login" => $request->username, "serverId" => $request->serverId])->first();
        if ($user) { // Если выборка произошла        
            if (response(route("showCloak", $request->username))->status(404)) {
                $textures = [
                    'SKIN' => [
                        'url' => route("showSkin", $request->username)
                    ],
                    'CAPE' => [
                        'url' => route("showCloak", $request->username)
                    ]
                ];
            } else {
                $textures = [
                    'SKIN' => [
                        'url' => route("showSkin", $request->username)
                    ]
                ];
            }

            $forbase64 = [
                'timestamp' => time() * 1000,
                'profileId' => $user->uuid,
                'profileName' => $request->username,
                'textures' => $textures
            ];

            $json = [
                'name' => $request->username,
                'id' => $user->uuid,
                'properties' => [
                    0 => [
                        'name' => 'textures',
                        'signature' => 'Cg==',
                        'value' => base64_encode(stripcslashes(json_encode($forbase64)))
                    ]
                ]
            ];
            return json_encode($json);
        } else
            return json_encode([
                'error' => "IllegalArgumentException",
                'errorMessage' => "credentials can not be null."
            ]);
    }

    /*
     * POST Запрос на этот URL выполняет лаунчер в момент обновления клиента игры
     * Принимает 1 аргумен
     * $serverName - имя сервера(клиента) для выборки определенного клиента для обновелния
     */

    public function client($serverName) {
        $start = microtime(true);
        $files = Storage::disk("clients")->allFiles($serverName);

        foreach ($files as $file) {

//            if( end(explode(".", $file)) == 'txt')
//  $update = true;
//            else 
//                $update = false;

            $arrFiles[] = [
                "url" => Storage::disk("clients")->url($file),
                "path" => $file,
                "md5" => md5(Storage::disk("clients")->get($file)),
                "update" => true
            ];
        }
        $json = [
            "assets" => [
                "md5" => md5(Storage::disk("clients")->get("assets.zip")),
                "url" => Storage::disk("clients")->url("assets.zip")
            ],
            "count" => count($files),
            "files" => $arrFiles,
                // "time" => (microtime(true) - $start)
        ];

        return $this->showJson($json, true);
    }

    /*
     * Возвращает версию лаунчер в виде md5
     */

    public function launcher() {
        return md5(Storage::disk("clients")->get("EnfesterLauncherFX.jar"));
    }

    /**
     * Корректное отображение JSON 
     * Просто для уменшении кода
     * @param type $data
     * @param type $isError
     * @return type
     */
    function showJson($data, $isError) {
        if (!$isError)
            $data["status"] = "error";
        else
            $data["status"] = "ok";

        return response(json_encode($data, JSON_PRETTY_PRINT))->header('Content-Type', 'application/json;charset=utf-8');
    }

    public function profile(Request $request) {


        @$user = json_decode($HTTP_RAW_POST_DATA);
        try {
            $user = User::select(["login", "uuid"])->where(["uuid" => $request->uuid])->first();

            echo '[{"id":"' . str_replace('-', '', $user->uuid) . '","name":"' . $user->login . '"}]';
        } catch (PDOException $pe) {
            dd($pe);  //вывод ошибок MySQL в m.log
        }
    }

    /**
     * Генерация UUID пользователя
     * @return type
     */
    function generate_uuid() {
        return sprintf('%04x%04x-%04x-%04x-%04x-%04x%04x%04x',
                // 32 bits for "time_low"
                mt_rand(0, 0xffff), mt_rand(0, 0xffff),
                // 16 bits for "time_mid"
                mt_rand(0, 0xffff),
                // 16 bits for "time_hi_and_version",
// four most significant bits holds version number 4
                mt_rand(0, 0x0fff) | 0x4000,
                // 16 bits, 8 bits for "clk_seq_hi_res",
// 8 bits for "clk_seq_low",
// two most significant bits holds zero and one for variant DCE1.1
                mt_rand(0, 0x3fff) | 0x8000,
                // 48 bits for "node"
                mt_rand(0, 0xffff), mt_rand(0, 0xffff), mt_rand(0, 0xffff)
        );
    }

}
