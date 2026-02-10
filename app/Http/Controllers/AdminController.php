<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\User;
use Illuminate\Http\Request;
use Illuminate\Routing\Controllers\HasMiddleware;
use Illuminate\Routing\Controllers\Middleware;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class AdminController extends Controller implements HasMiddleware
{
    public static function middleware(): array{    
    return[
        new Middleware("isAdmin"),
    ];
}

    public function index(){

        $users=User::where("is_revisor", false)->get();
        return view("admin.admin-index", compact("users"));

    }

    

}
