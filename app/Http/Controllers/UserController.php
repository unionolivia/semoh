<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

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
    public function approve()
    {
        $breadcrumbs = [
            ['link'=>"/dashboard",'name'=>"Dashboard"],['name'=>"approveuser"]
        ];

        return view('/pages/approveuser', [
            'breadcrumbs' => $breadcrumbs
            
        ]);
    }
    public function viewuser()
    {

        $user = User::all();
        $breadcrumbs = [
            ['link'=>"/dashboard",'name'=>"Dashboard"],['name'=>"viewuser"]
        ];

        return view('/pages/viewuser', [
            'breadcrumbs' => $breadcrumbs
            
        ])->with('user', $user);
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

