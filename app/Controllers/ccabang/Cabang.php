<?php

namespace App\Controllers\ccabang;
use App\Controllers\BaseController;
use App\Models\LoginModel;

class Cabang extends BaseController
{
    public function index()
    {
        return view('vicabang/vcabang');
    }

}
