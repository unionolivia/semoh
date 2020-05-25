<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Unit;

class UnitController extends Controller
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
            ['link'=>"/dashboard",'name'=>"Dashboard"], ['name' => "GLT Units"]
        ];

        $units = Unit::get();

        return view('/pages/unit', [
            'breadcrumbs' => $breadcrumbs
            
            ])->with('units', $units);
    }


    public function committee()
    {
        $breadcrumbs = [
            ['link'=>"/dashboard",'name'=>"Dashboard"], ['name' => "GLT Committee"]
        ];

        return view('/pages/committee', [
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
        $this->validate($request, [

            'name' => 'required',
            'description' => 'required',            
        ]);

            
        $unit = new Unit();
        $unit->name = $request->input('name');
        $unit->description = $request->input('description');        
        $unit->save();


         return redirect('/unit')->with('success', 'New Unit created successfully');
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
        $unit = Unit::findOrFail($request->myid);               
        $unit->name = $request->input('name');
       $unit->description = $request->input('description');        
       $unit->save();


        return redirect('/unit')->with('success', 'Unit Updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $unit = Unit::findOrFail($id);
        $unit->delete();

        return redirect('/unit')->with('success', 'Unit deleted successfully!');
    }
}
