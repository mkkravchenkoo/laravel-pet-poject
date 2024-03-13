<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{

    public function show(Service $service)
    {
        return view('service', ['service' => $service]);
    }

    public function index()
    {
        return view('services', ['services' => Service::simplePaginate(4)]);
    }
}
