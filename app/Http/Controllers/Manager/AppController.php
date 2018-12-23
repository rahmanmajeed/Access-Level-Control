<?php

namespace App\Http\Controllers\Manager;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AppController extends Controller
{
    function __construct()
    {
        # add multiple middleware and multiple roles.
        $this->middleware(['auth','AuthorizeUserAccess:Admin|Manager,Test3@Test1;Test2']);
    }

    public function index()
    {
        return "Request approved you're now Manager Area";
    }
}
