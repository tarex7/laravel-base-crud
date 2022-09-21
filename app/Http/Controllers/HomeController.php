<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Comic;

class HomeController extends Controller
{
    function index() {
        $links = config('menu');
        $bannerItems = config('bannerItems');
        $DCcomicsLinks = config('DCcomicsLinks');
        $DClinks = config('DClinks');
        $sites = config('sites');

        $comics = Comic::all();
    
        return view('home', 
        [
            'links' => $links,
            'comics' => $comics,
            'bannerItems' => $bannerItems,
            'DCcomicsLinks' => $DCcomicsLinks ,
            'DClinks' => $DClinks,
            'sites' => $sites
        ]);
    
    }

    function show() {
        $links = config('menu');
        $bannerItems = config('bannerItems');
        $DCcomicsLinks = config('DCcomicsLinks');
        $DClinks = config('DClinks');
        $sites = config('sites');

        $comics = Comic::all();
    
        return view('comics.index', 
        [
            'links' => $links,
            'comics' => $comics,
            'bannerItems' => $bannerItems,
            'DCcomicsLinks' => $DCcomicsLinks ,
            'DClinks' => $DClinks,
            'sites' => $sites
        ]);
    
    }
}
