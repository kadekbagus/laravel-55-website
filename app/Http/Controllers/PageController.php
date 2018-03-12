<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Page;

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
        $pages = Page::select('page_name','slug')
                     ->where('status', '=', 'active')
                     ->get();

        if($slug === null) {
            return view('index', ['pageSlugs' => $pages->toArray()]);
        } else {
            $pageContent = Page::where('slug', '=', $slug)
                                ->where('status', '=', 'active')
                                ->first();

            if (is_object($pageContent)) {
                return view('page', ['pageSlugs' => $pages->toArray(),
                                      'pageTitle' => $pageContent->page_name,
                                      'pageContent' => $pageContent->content
                                     ]);
            } else {
                return 'page not found';
            }
        }
    }


}
