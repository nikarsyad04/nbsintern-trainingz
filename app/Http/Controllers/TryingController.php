<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//point to controller
class TryingController extends Controller
{
    public function index()
    {
        $nama = 'Samsudin';
        return 'Hello, ' . $nama . ' dan rakan-rakan';   
    }
}
