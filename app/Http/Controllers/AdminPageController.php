<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Page;
use Validator;

class AdminPageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $pages = Page::get();
        return view('admin.page-list', ['data' => $pages]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.page-create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $pageName = $request->input('page_name');
        $pageContent = $request->input('page_content');
        $slug = str_slug($pageName);

        $this->registerCustomValidation();

        // validate the input
        $validator = Validator::make(
            array('page_name'=> $pageName,
                  'page_content' => $pageContent),
            array('page_name' => 'required|max:25|slug.exist',
                  'page_content' => 'required'),
            array('slug.exist' => 'page already exist!')
        );

        // validation fail
        if ($validator->fails()) {
            return redirect('admin/page/create')
                    ->withErrors($validator)
                    ->withInput();
        }

        $newPage = new Page();
        $newPage->page_name = $pageName;
        $newPage->page_type = 'main_page';
        $newPage->slug = $slug;
        $newPage->status = 'active';
        $newPage->content = $pageContent;
        $newPage->parent_id = null;
        $newPage->save();

        return redirect('admin/page');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $editPage = Page::where('page_id', '=', $id)->first();
        return view('admin.page-edit', ['data' => $editPage]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        print_r($id);
        die();
    }


    protected function registerCustomValidation()
    {
        // check slug exist or not
        Validator::extend('slug.exist', function ($attribute, $value, $parameters) {
            $slug = str_slug($value);
            $page = Page::where('slug', $slug)
                        ->first();

            if (empty($page)) {
                return TRUE;
            }

            return FALSE;
        });
    }
}
