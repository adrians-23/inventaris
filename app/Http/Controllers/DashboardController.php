<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Barang;
use App\Models\Tempat;

class DashboardController extends Controller
{
    public function index()
    {
        $barang = Barang::all();
        $tempat = Tempat::all();
        $user = User::all();
        return view('dashboard.index', compact('user', 'barang', 'tempat'));
    }
}
