<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Extension;

class ExtensionController extends Controller
{
    
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
            ['link'=>"/dashboard",'name'=>"Dashboard"], ['name' => "Add Extension"]
        ];

        return view('/pages/addext', [
            'breadcrumbs' => $breadcrumbs
            
        ]);
    }

    public function viewext()
    {
        $breadcrumbs = [
            ['link'=>"/dashboard",'name'=>"Dashboard"], ['name' => "Add Extension"]
        ];
        $extensions = Extension::get();        
        
        return view('/pages/viewext', [
            'breadcrumbs' => $breadcrumbs
            
        ])->with('extensions', $extensions);
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

            'extname' => 'required',
            'extlocation' => 'required',
            'extsmr' => 'required',
            'extphonenumber' => 'required',
            'extemail' => 'required | email',
        ]);


        $extension = new Extension();
        $extension->extname = $request->input('extname');
        $extension->extlocation = $request->input('extlocation');
        $extension->extsmr = $request->input('extsmr');
        $extension->extphonenumber = $request->input('extphonenumber');
        $extension->extemail = $request->input('extemail');
        $extension->save();


         return redirect('/addext')->with('success', 'New extension created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $breadcrumbs = [
            ['link'=>"/viewext",'name'=>"Extension List"], ['name' => "Extension Profile"]
        ];

        $extension = Extension::find($id);
        return view('/pages/showext', [
            'breadcrumbs' => $breadcrumbs
            
        ])->with('extension', $extension);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $extension = Extension::find($id);
        return view('/pages/editext')->with('extension', $extension);
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
        $extension = Extension::find($id);
        $extension->extname = $request->input('extname');
        $extension->extlocation = $request->input('extlocation');
        $extension->extsmr = $request->input('extsmr');
        $extension->extphonenumber = $request->input('extphonenumber');
        $extension->extemail = $request->input('extemail');
        $extension->save();


        return redirect('/viewext')->with('success', 'Extension updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $extension = Extension::find($id);
        $extension->delete();

        return redirect('/viewext')->with('success', 'Extension deleted successfully!');

    }
}
