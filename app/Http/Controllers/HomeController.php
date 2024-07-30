<?php

namespace App\Http\Controllers;

use App\Type;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $skilltypes = Type::with('skills')->where('status', 'Published')->get();
        return view('home',compact('skilltypes'));
    }
}
