<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Condominium;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CondominiumController extends Controller
{
    public function index()
    {
        $condominiums = Condominium::all();
        return view('condominiums.index', compact('condominiums'));
    }

    public function details()
    {
        $users = User::all();
        $condominiums = Condominium::all();
        return view('condominiums.details', compact('users', 'condominiums'));
    }
}

