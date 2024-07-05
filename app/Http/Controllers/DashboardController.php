<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Condominium;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function index()
    {
        $users = User::all();
        $condominiums = Condominium::all();
        return view('dashboard.index', compact('users', 'condominiums'));
    }
}
