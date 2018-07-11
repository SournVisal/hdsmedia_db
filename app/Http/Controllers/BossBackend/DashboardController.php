<?php

namespace App\Http\Controllers\BossBackend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function Index()
    {
        return view('Boss.dashboard.index');
    }


}
