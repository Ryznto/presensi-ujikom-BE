<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        // Fungsi ini akan mencari file di: resources/views/admin/dashboard.blade.php
        return view('admin.dashboard');
    }
}