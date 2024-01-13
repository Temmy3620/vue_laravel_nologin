<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ScrapingController extends Controller
{
    public function index()
    {
        $service = app()->make('ScrapingService');
        $text = $service->getContents();
        dd($text);
    }
    
    
}