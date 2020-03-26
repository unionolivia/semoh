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
            ['link'=>"/dashboard",'name'=>"Dashboard"],['name'=>"Adduser"]
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
            ['link'=>"/dashboard",'name'=>"Dashboard"],['name'=>"viewuser"]
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
            ['link'=>"/dashboard",'name'=>"Dashboard"],['name'=>"approveuser"]
        ];

        return view('/pages/approveuser', [
            'breadcrumbs' => $breadcrumbs
            
        ]);
    }

}

