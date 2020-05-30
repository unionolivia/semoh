<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
     
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    
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
    public function approve()
    {
        $breadcrumbs = [
            ['link'=>"/dashboard",'name'=>"Dashboard"],['name'=>"approveuser"]
        ];

        return view('/pages/approveuser', [
            'breadcrumbs' => $breadcrumbs
            
        ]);
    }
    public function register()
    {

        $breadcrumbs = [
            ['link'=>"/dashboard",'name'=>"Dashboard"],['name'=>"register"]
        ];

        return view('/pages/register', [
            'breadcrumbs' => $breadcrumbs
            
        ]);
    }
    public function profile()
    {

        $breadcrumbs = [
            ['link'=>"/dashboard",'name'=>"Dashboard"],['name'=>"profile"]
        ];

        return view('/pages/profile', [
            'breadcrumbs' => $breadcrumbs
            
        ]);
    }
    public function viewuser()
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
    public function create()
    {
       //
    }
    
    public function adduser()
    {
       $breadcrumbs = [
            ['link'=>"/dashboard",'name'=>"Dashboard"],['name'=>"adduser"]
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
    public function show($id)
    {
        //
    }

}

