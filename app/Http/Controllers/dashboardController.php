<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class dashboardController extends Controller
{
    public function __invoke()
    {
        return view("dashboard");
    }
}
