<?php

namespace App\Http\Controllers;

use App\Models\Material;
use Illuminate\Http\Request;

class PubliController extends Controller
{
    public function welcome()
    {
        return view('welcome');
    }
}
