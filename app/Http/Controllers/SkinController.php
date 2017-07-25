<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use Storage;

class SkinController extends Controller {

    public function showSkin($login) {
        return response(Storage::disk("skins")->get("skins/" . $login . ".png"))->header("Content-Type", "image/png");
    }

    public function showCloak($login) {
        return response(Storage::disk("skins")->get("cloaks/" . $login . ".png"))->header("Content-Type", "image/png");
    }

}
