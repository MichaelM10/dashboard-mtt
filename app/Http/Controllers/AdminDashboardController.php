<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;
use App\Models\Item;

class AdminDashboardController extends Controller
{
    public function index(){
        error_log('Rendered');
        return Inertia::render('Admin/AdminDashboard');
    }

    public function inventory(){
        error_log('Rendered Admin Inventory');
        $items = Item::get();

        error_log($items);

        return Inertia::render('Admin/AdminInventory', [
            'items' => $items,
        ]);
    }
}