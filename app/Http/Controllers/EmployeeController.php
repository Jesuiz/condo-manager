<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Condominium;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class EmployeeController extends Controller
{
    public function index()
    {
        $users = User::all();
        $condominiums = Condominium::all();
        return view('employees.index', compact('users', 'condominiums'));
    }
}