<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;
use App\Models\TravelPackage;
use App\Models\Gallery;


class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $travel_packages = TravelPackage::with('galleries')->get()->unique('location');

        $blogs = Blog::get()->take(3);
        $gallery= Gallery::all();

        return view('homepage', compact('travel_packages','blogs','gallery'));
    }
}
