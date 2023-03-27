<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminAuth extends Controller
{
    public function logout()
    {
        session()->flush();
        Auth::logout(); // logging out user
        return redirect('/'); // redirection to login screen
    }
}
