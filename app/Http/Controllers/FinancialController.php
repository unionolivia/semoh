<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FinancialController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       
    }

    public function history(){
        $breadcrumbs = [
            ['link'=>"/dashboard",'name'=>"Dashboard"],['link' => "#", 'name'=>"Financials"], ['name' => "History"]
        ];

        return view('/pages/history', [
            'breadcrumbs' => $breadcrumbs
            
        ]);
    }



    public function invoice(){
        $breadcrumbs = [
            ['link'=>"/dashboard",'name'=>"Dashboard"],['link' => "#", 'name'=>"Financials"], ['name' => "Invoice"]
        ];

        return view('/pages/invoice', [
            'breadcrumbs' => $breadcrumbs
            
        ]);
    }


    public function projection(){
        $breadcrumbs = [
            ['link'=>"/dashboard",'name'=>"Dashboard"],['link' => "#", 'name'=>"Financials"], ['name' => "Projection"]
        ];

        return view('/pages/projection', [
            'breadcrumbs' => $breadcrumbs
            
        ]);
    }

    public function comm(){
        $breadcrumbs = [
            ['link'=>"/dashboard",'name'=>"Dashboard"],['link' => "#", 'name'=>"Financials"], ['name' => "Commission"]
        ];

        return view('/pages/commission', [
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
        //
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