<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LayoutController extends Controller
{
    public function content(){

        $breadcrumbs = [
            ['link'=>"/dashboard",'name'=>"Home"], ['name'=>"Dashboard"]
        ];

        return view('/pages/admin/dashboard-admin', [
            'breadcrumbs' => $breadcrumbs
            
        ]);
        
    }

    public function full(){
        $pageConfigs = [
            'bodyClass' => "bg-full-screen-image",
        ];
        
        return view('/pages/full-layout', [
            'pageConfigs' => $pageConfigs
        ]);
    }
}

