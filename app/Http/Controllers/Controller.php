<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\View\View;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function homepage()
    {
        return view('welcome');
    }
    public function america(){
        return view('Americas');
    }
    public function africa(){
        return view('Africa');
    }
    public function asia(){
        return view('Asia');
    }
    public function europa(){
        return view('Europa');
    }
    public function oceania(){
        return view('Oceania');
    }
    public function imagens(){
        return view('Imagens');
    }
}
