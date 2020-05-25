<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Member;
use App\User;
use App\Models\Extension;
use App\Models\Ministry;
use App\Models\Unit;

class MembersController extends Controller
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
        $extensions = Extension::get();
        $ministries = Ministry::get();
        $units = Unit::get();
        
        $breadcrumbs = [
            ['link'=>"/dashboard",'name'=>"Dashboard"],['name'=>"Add Member"]
        ];

        return view('/pages/members', [
            'breadcrumbs' => $breadcrumbs
            
        ])->with('extensions', $extensions)->with('ministries', $ministries)->with('units', $units);
    }

    public function viewmembers()
    {

        $breadcrumbs = [
            ['link'=>"/dashboard",'name'=>"Dashboard"],['name'=>"view members"]
        ];


        $members = Member::get();
        return view('/pages/viewmembers', [
            'breadcrumbs' => $breadcrumbs
            
        ])->with('members', $members);

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
        $validatedData = $request->validate([

            'firstName1' => 'required',
            'lastName1' => 'required',
            'otherName1',
            'emailAddress1' => 'required | email',
            'dateofBirth1',
            'Phonenumber1',
            'pictureFile'=> 'image | nullable | max:1999',
            'location1',
            'maritalStatus',
            'Occupation',
            'Address',
            'Country',
            'City',
            'State',
            'Zipcode',
            'School',
            'courseofStudy',
            'hostelAddress',
            'homeAddress',
            'level',
            'Category',
            'startdate',
            'enddate',
            'Occupation2',
            'Employer',
            'officeAddress',
            'Position',
            'natureofBusiness',
            'position1',
            'fathersName',
            'mothersName',
            'fatherOccupation',
            'parentemailAddress',
            'parentPhonenumber',
            'parentAddress',
            'parentMaritalStatus',
            'Ministry1',
            'eventType1',
            'extension_id' => 'required',
            'assignRole',
           
        ]);
        if ($request->hasFile('pictureFile')){

            $filenameWithExtension = $request->file('pictureFile')->getClientOriginalName();
            $filename = pathinfo($filenameWithExtension, PATHINFO_FILENAME);
            $extension = $request->file('pictureFile')->getClientOriginalExtension();
            $filenameToStore = $filename . '_' .time(). '.' . $extension;
            $request->file('pictureFile')->storeAs('public/members_images', $filenameToStore);
            
        }  else  {
            $filenameToStore = 'noimage.jpg';
        }

           

        $member = new Member();
        $member->firstName1 = $request->input('firstName1');
        $member->lastName1 = $request->input('lastName1');
        $member->otherName1 = $request->input('otherName1');
        $member->emailAddress1 = $request->input('emailAddress1');
        $member->dateofBirth1 = $request->input('dateofBirth1');
        $member->Phonenumber1 = $request->input('Phonenumber1');
        $member->pictureFile = $filenameToStore;
        $member->location1 = $request->input('location1');
        $member->maritalStatus = $request->input('maritalStatus');
        $member->Occupation = $request->input('Occupation');
        $member->Address = $request->input('Address');
        $member->Country = $request->input('Country');
        $member->City = $request->input('City');
        $member->State = $request->input('State');
        $member->Zipcode = $request->input('Zipcode');
        $member->School = $request->input('School');
        $member->courseofStudy = $request->input('courseofStudy');
        $member->hostelAddress = $request->input('hostelAddress');
        $member->homeAddress = $request->input('homeAddress');
        $member->level = $request->input('level');
        $member->Category = $request->input('Category');
        $member->startdate = $request->input('startdate');
        $member->enddate = $request->input('enddate');
        $member->Occupation2 = $request->input('Occupation2');
        $member->Employer = $request->input('Employer');
        $member->officeAddress = $request->input('officeAddress');
        $member->Position = $request->input('Position');
        $member->natureofBusiness = $request->input('natureofBusiness');
        $member->position1 = $request->input('position1');
        $member->fathersName = $request->input('fathersName');
        $member->mothersName = $request->input('mothersName');
        $member->fatherOccupation = $request->input('fatherOccupation');
        $member->parentemailAddress = $request->input('parentemailAddress');
        $member->parentPhonenumber = $request->input('parentPhonenumber');
        $member->parentAddress = $request->input('parentAddress');
        $member->parentMaritalStatus = $request->input('parentMaritalStatus');
        $member->Ministry1 = $request->input('Ministry1');
        $member->eventType1 = $request->input('eventType1');
        $member->extension_id = $request->input('extension_id');
        $member->assignRole = $request->input('assignRole');
        
        $member->save();

        return redirect('/members')->with('success', 'Member Added Successfully!');




    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        $member = Member::find($id);        
        $breadcrumbs = [
            ['link'=>"/dashboard",'name'=>"Dashboard"], ['link'=>"/viewmembers",'name'=>"members list"], ['name'=>"members profile"]
        ];

        return view('/pages/memberprofile',  [
            'breadcrumbs' => $breadcrumbs
            
        ])->with('member', $member);

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
        $member = Member::find($id);   
        $member->firstName1 = $request->input('firstName1');
        $member->lastName1 = $request->input('lastName1');
        $member->otherName1 = $request->input('otherName1');
        $member->emailAddress1 = $request->input('emailAddress1');
        $member->dateofBirth1 = $request->input('dateofBirth1');
        $member->Phonenumber1 = $request->input('Phonenumber1');      
        $member->location1 = $request->input('location1');
        $member->maritalStatus = $request->input('maritalStatus');
        $member->Occupation = $request->input('Occupation');
        $member->Address = $request->input('Address');
        $member->Country = $request->input('Country');
        $member->City = $request->input('City');
        $member->State = $request->input('State');
        $member->Zipcode = $request->input('Zipcode');
        $member->School = $request->input('School');
        $member->courseofStudy = $request->input('courseofStudy');
        $member->hostelAddress = $request->input('hostelAddress');
        $member->homeAddress = $request->input('homeAddress');
        $member->level = $request->input('level');
        $member->Category = $request->input('Category');
        $member->startdate = $request->input('startdate');
        $member->enddate = $request->input('enddate');
        $member->Occupation2 = $request->input('Occupation2');
        $member->Employer = $request->input('Employer');
        $member->officeAddress = $request->input('officeAddress');
        $member->Position = $request->input('Position');
        $member->natureofBusiness = $request->input('natureofBusiness');
        $member->position1 = $request->input('position1');
        $member->fathersName = $request->input('fathersName');
        $member->mothersName = $request->input('mothersName');
        $member->fatherOccupation = $request->input('fatherOccupation');
        $member->parentemailAddress = $request->input('parentemailAddress');
        $member->parentPhonenumber = $request->input('parentPhonenumber');
        $member->parentAddress = $request->input('parentAddress');
        $member->parentMaritalStatus = $request->input('parentMaritalStatus');
        $member->Ministry1 = $request->input('Ministry1');
        $member->eventType1 = $request->input('eventType1');
        $member->extension_id = $request->input('extension_id');
        $member->assignRole = $request->input('assignRole');
        
        $member->save();

        return redirect('/members')->with('success', 'Member Updated Successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $member = Member::find($id);
        $member->delete();

        return redirect('/viewmembers')->with('success', 'Member deleted Successfully!');
    }
}
