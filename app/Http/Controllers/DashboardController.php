<?php

namespace App\Http\Controllers;

// use App\Helpers\Breadcrumb;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        // Breadcrumb::set(['name' => 'Dashboard', 'href' => route('dashboard')]);
        return view('apps.dashboard.index');
    }
}
