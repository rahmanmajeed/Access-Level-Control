<?php

namespace App\Http\Controllers\ADMIN;

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
        return "Request approved you're now Admin Area";
    }

}
