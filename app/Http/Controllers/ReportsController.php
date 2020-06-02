<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Member;
use App\User;
use App\Models\Extension;
use App\Models\Ministry;
use App\Models\Report;

class ReportsController extends Controller
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
    public function ministryreport()
    {
        return view('pages.ministryreport');
    }


     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function servicereport()
    {
        return view('pages.servicereport');
    }

      /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function financialreport()
    {
        return view('pages.financialreport');
    }
    
  /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function carereport()
    {
        return view('pages.carereport');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function smrreport()
    {
        return view('pages.smrreport');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $ministries = Ministry::get();
        $extensions = Extension::get();
        return view('pages.createcarereport', compact('ministries', 'extensions'));
    }


    public function createahom()
    {
        $ministries = Ministry::get();
        return view('pages.createahomcarereport')->with('ministries', $ministries);
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

    public function homstore(Request $request)
    {
        dd($request);

        $this->validate($request, [

            'month' => 'required',
            'ministry_id' => 'required',
            'vision',
            'monthvision' => 'required',
            'goals' => 'required',
            'goalsachieved' => 'required',
            'memberscomment' => 'required',
            'nextvision' => 'required',
            'nextgoal' => 'required',
            'user_id' => 'required',
            'extension_id' => 'required'

            ]);

        $report = new Report();
        $report->user_id = Auth::id();
        $report->extension_id = $request->input('extension_id');
        $report->month = $request->input('month');
        $report->ministry_id = $request->input('ministry_id');
        $report->vision = $request->input('vision');
        $report->monthvision = $request->input('monthvision');
        $report->goals = $request->input('goals');
        $report->goalsachieved = $request->input('goalsachieved');
        $report->memberscomment = $request->input('memberscomment');
        $report->nextvision = $request->input('nextvision');
        $report->nextgoal = $request->input('nextgoal');
        $report->save();


         return redirect('/carereport')->with('success', 'Report Submitted Successfully');

            
    
       

    }


    public function ahomstore(Request $request)
    {
        dd($request);
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
