<?php

namespace App\Http\Controllers;

use App\Models\Config;
use App\Models\Service;
use App\Models\Team;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function index()
    {
        $configFields = ['pre-booking-text'];
        $config = Config::whereIn('name', $configFields)->get()->getAssoc();

        return view('home', ['config' => $config]);
    }
}
