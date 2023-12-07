<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class AdminDashboardController extends Controller
{
    public function index(){
        error_log('Rendered');
        return Inertia::render('Admin/AdminDashboard');
    }
}
