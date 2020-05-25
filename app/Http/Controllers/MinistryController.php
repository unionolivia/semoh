<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ministry;

class MinistryController extends Controller
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
            ['link'=>"/dashboard",'name'=>"Dashboard"], ['name' => "GLT Ministries"]
        ];
        $ministries = Ministry::get();
        return view('/pages/ministry', [
            'breadcrumbs' => $breadcrumbs
            
        ])->with('ministries', $ministries);
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
        $this->validate($request, [

            'name' => 'required',
            'description' => 'required',            
        ]);

            
        $ministry = new Ministry();
        $ministry->name = $request->input('name');
        $ministry->description = $request->input('description');        
        $ministry->save();


         return redirect('/ministry')->with('success', 'New Ministry created successfully');
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
    public function update(Request $request)
    {
                   
         $ministry = Ministry::findOrFail($request->myid);               
         $ministry->name = $request->input('name');
        $ministry->description = $request->input('description');        
        $ministry->save();


         return redirect('/ministry')->with('success', 'Ministry Updated successfully');
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $ministry = Ministry::findOrFail($id);
        $ministry->delete();

        return redirect('/ministry')->with('success', 'Ministry deleted successfully!');
    }
}
