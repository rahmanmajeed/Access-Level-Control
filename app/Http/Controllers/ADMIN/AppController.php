<?php

namespace App\Http\Controllers\ADMIN;

use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AppController extends Controller
{
    function __construct()
    {
        $this->middleware('AuthorizeUserAccess:Admin');
    }

    public function index()
    {
        return view('admin');
    }

    public function userList()
    {
        $users=User::all();
        return response()->json($users,201);
    }

}
