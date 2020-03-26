<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $breadcrumbs = [
            ['link'=>"/dashboard",'name'=>"Dashboard" ],['name'=>"Projects"]
        ];

        return view('/pages/project', [
            'breadcrumbs' => $breadcrumbs
            
        ]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function view()
    {
        $breadcrumbs = [
            ['link'=>"/dashboard",'name'=>"Dashboard"],['name'=>"view Projects"]
        ];

        return view('/pages/viewproject', [
            'breadcrumbs' => $breadcrumbs
            
        ]);
    }

     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function updateproject()
    {
        $breadcrumbs = [
            ['link'=>"/dashboard",'name'=>"Dashboard"],['name'=>"Update Projects"]
        ];

        return view('/pages/updateproject', [
            'breadcrumbs' => $breadcrumbs
            
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $breadcrumbs = [
            ['link'=>"/dashboard",'name'=>"Dashboard"],['name'=>"viewincart"]
        ];

        return view('/pages/viewincart', [
            'breadcrumbs' => $breadcrumbs
            
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function project()
    {
        $breadcrumbs = [
            ['link'=>"/dashboard",'name'=>"Dashboard"],['name'=>"add project"]
        ];

        return view('/pages/addproject', [
            'breadcrumbs' => $breadcrumbs
            
        ]);
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
    }
}
