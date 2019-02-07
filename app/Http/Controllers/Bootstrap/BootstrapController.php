<?php

namespace App\Http\Controllers\Bootstrap;

use App\Admin;

use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

class BootstrapController extends Controller
{
    public function index()
    {
        $this->createUsers();
        return "success";
    }
    public function createUsers()
    {
        User::create([
            'email' => 'emp@ellixar.com',
            'password' => Hash::make('123456'),
            'name' => 'Emp IT',
        ]);
        Admin::create([
            'email' => 'hod@ellixar.com',
            'password' => Hash::make('123456'),
            'name' => 'HOD IT',
        ]);
    }
}
