<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
    }

    /**
     * Show the page.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($slug = null)
    {
        if($slug === null) {
            return view('index');
        } else {
            print_r($slug);
            // look up to main_page table

            //display the page content
        }
    }


}
