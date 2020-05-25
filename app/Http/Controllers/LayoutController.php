<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LayoutController extends Controller
{
    public function content(){

        $breadcrumbs = [
            ['link'=>"/dashboard",'name'=>"Dashboard"], ['name'=>"Content Layout"]
        ];

        return view('/pages/content-layout', [
            'breadcrumbs' => $breadcrumbs
            
        ]);
        
    }

    public function full(){
        $pageConfigs = [
            'bodyClass' => "bg-full-screen-image",
        ];
        
        return view('/pages/start', [
            'pageConfigs' => $pageConfigs
        ]);
    }
}

