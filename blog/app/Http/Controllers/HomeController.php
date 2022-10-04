<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index(){



        $allCatgo=Category::all();

        return view('index',['categories'=>$allCatgo]);
    }
}
