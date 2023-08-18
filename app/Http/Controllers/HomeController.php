<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Models\Post;
use App\Models\Country;

class HomeController extends Controller
{
    public function index()
    {
    	//$data = Country::all();
    	//$data = Country::query()->limit(10)->get();
    	return view('home');
    }
}
