<?php

namespace App\Http\Controllers\Employee;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class EmployeeController extends Controller
{
    function __construct()
    {
        $this->middleware('AuthorizeUserAccess:Admin|Manager|User');
    }

    public function index()
    {
        return "Request approved you're now Employee Area";
    }
}
