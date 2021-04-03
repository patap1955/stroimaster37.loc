<?php

namespace App\Http\Controllers;

use App\Models\Price;
use App\Models\Service;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function contacts()
    {
        return view('pages.contacts');
    }

    public function prices()
    {
        $services = Service::all();
        return view('pages.price', compact('services'));
    }

    public function gallery()
    {
        return view('pages.gallery');
    }
}
