<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use Intervention\Image\Image;
use JWTAuth;

class TrelloBoard extends Controller
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function index()
    {
        JWTAuth::parseToken()->authentificate();

    }


    public function cropeimg()
    {
        $img = Image::make('public/foo.jpg');
        $img->resize(320, 240);
        $img->insert('public/watermark.png');
        $img->save('public/bar.jpg');

        $img = Image::make('public/foo.jpg')->resize(320, 240)->insert('public/watermark.png');

    }

}
