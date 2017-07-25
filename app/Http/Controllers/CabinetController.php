<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Support;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;
use App\User;

class CabinetController extends Controller {

    public function __construct() {
        $this->middleware('auth');
    }

    public function profile() {

        return view('cabinet.profile')->with(["title" => "Твой профиль в игре"]);
    }

    public function bonus() {
        return view('cabinet.bonus')->with(["title" => "Голосу и получай призы на серверах"]);
    }

    public function settings() {


        return view('cabinet.settings')->with(["title" => "Настройки профиля"]);
    }

    public function saveSettings(Request $request) {

        // User::update(["id","name","icon","descript","online_current","online_max"]);
        //$this->validate($request, $rules);
        $temp = User::find(auth()->user()->id);
        $temp->name = $request->name;
        $temp->surname = $request->surname;
        $temp->age = $request->age;
        $temp->skype = $request->skype;
        $temp->vk = $request->vk;
        $temp->save();

        return redirect('/cabinet');
    }

    public function skin() {

        return view('cabinet.skin')->with(["title" => "Смена скина и плаща"]);
    }

    public function fileUpload(Request $request) {

        $this->validate($request, [
            'skin' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $image = $request->file('skin');

        $input['imagename'] = auth()->user()->login . ".png";
        $destinationPath = public_path('/images/skins');
        $image->move($destinationPath, $input['imagename']);

        $this->postImage->add($input);
    }

    public function saveSkin(Request $request) {

        $this->fileUpload($request);

        return redirect('/cabinet');
    }

    public function supportShow() {

        $data = Support::select("*")->where(["user_id" => auth()->user()->id])->get();

        return view('support')->with(["title" => "Служба поддержки", "data" => $data]);
    }

    public function supportCreate(Request $request) {
        $validate = $this->validate($request, ['name' => 'required|string|max:100|unique:supports,name']);
        if (!$validator->fails()) {
            Support::create([
                'user_id' => auth()->user()->id,
                'name' => $request->name,
                'text' => $request->text
            ]);
        }

        return redirect('/support');
    }

    public function supportId($id) {

        $data = Support::select("*")->where(["user_id" => auth()->user()->id, "id" => $id])->first();
        if (count($data) > 0)
            return view('support_view')->with(["title" => "Просмотр запроса {$data->name}", "data" => $data]);
        else
            return "Это ужой запрос, и тебе недоступен!";
    }

}
