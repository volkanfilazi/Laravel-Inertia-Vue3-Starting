<?php

namespace App\Http\Controllers;

use App\Models\Listing;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class IndexController extends Controller
{
    public function index() 
    {
    //  dd(Auth::check()); check user login or not
      
      return inertia(
        'Index/Index',
      [
        'message' => 'Hello from Laasdaravel!'
      ]
      );
    }
    public function show() 
    {
      return inertia('Index/Show');
    }
}
