<?php

namespace App\Controllers\gurudata;
use App\Controllers\BaseController;
use App\Models\LoginModel;

class Guru extends BaseController
{
    public function index()
    {
        return view('gurudata/vguru');
    }

}
