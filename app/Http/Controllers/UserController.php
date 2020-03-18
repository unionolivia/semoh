<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
        /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $breadcrumbs = [
            ['link'=>"/",'name'=>"Home"],['name'=>"Adduser"]
        ];

        return view('/pages/adduser', [
            'breadcrumbs' => $breadcrumbs
            
        ]);
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $breadcrumbs = [
            ['link'=>"/",'name'=>"Home"],['name'=>"viewuser"]
        ];

        return view('/pages/viewuser', [
            'breadcrumbs' => $breadcrumbs
            
        ]);
    }


/**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $breadcrumbs = [
            ['link'=>"/",'name'=>"Home"],['name'=>"approveuser"]
        ];

        return view('/pages/approveuser', [
            'breadcrumbs' => $breadcrumbs
            
        ]);
    }

}

