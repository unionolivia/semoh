<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateMemberTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('members', function (Blueprint $table) {
            
                            
                $table->string('otherName1')->unsigned()->nullable()->change();
                $table->string('dateofBirth1')->unsigned()->nullable()->change();
                $table->string('location1')->unsigned()->nullable()->change();
                $table->string('maritalStatus')->unsigned()->nullable()->change();
                $table->string('Occupation')->unsigned()->nullable()->change();
                $table->string('Address')->unsigned()->nullable()->change();
                $table->string('Country')->unsigned()->nullable()->change();
                $table->string('City')->unsigned()->nullable()->change();
                $table->string('State')->unsigned()->nullable()->change();
                $table->string('Zipcode')->unsigned()->nullable()->change();
                $table->string('School')->unsigned()->nullable()->change();
                $table->string('courseofStudy')->unsigned()->nullable()->change();
                $table->string('hostelAddress')->unsigned()->nullable()->change();
                $table->string('homeAddress')->unsigned()->nullable()->change();
                $table->string('level')->unsigned()->nullable()->change();
                $table->string('Category')->unsigned()->nullable()->change();
                $table->string('startdate')->unsigned()->nullable()->change();
                $table->string('enddate')->unsigned()->nullable()->change();
                $table->string('Occupation2')->unsigned()->nullable()->change();
                $table->string('Employer')->unsigned()->nullable()->change();
                $table->string('officeAddress')->unsigned()->nullable()->change();
                $table->string('Position')->unsigned()->nullable()->change();
                $table->string('natureofBusiness')->unsigned()->nullable()->change();
                $table->string('position1')->unsigned()->nullable()->change();
                $table->string('fathersName')->unsigned()->nullable()->change();
                $table->string('mothersName')->unsigned()->nullable()->change();
                $table->string('fatherOccupation')->unsigned()->nullable()->change();
                $table->string('parentemailAddress')->unsigned()->nullable()->change();
                $table->string('parentPhonenumber')->unsigned()->nullable()->change();
                $table->string('parentAddress')->unsigned()->nullable()->change();
                $table->string('parentMaritalStatus')->unsigned()->nullable()->change();
                $table->string('Ministry1')->unsigned()->nullable()->change();
                $table->string('eventType1')->unsigned()->nullable()->change();            
                $table->string('extension')->unsigned()->nullable()->change();
                $table->string('assignRole')->unsigned()->nullable()->change();
               
          
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('members', function (Blueprint $table) {
                
                $table->string('otherName1')->unsigned()->nullable()->change();
                $table->string('dateofBirth1')->unsigned()->nullable()->change();
                $table->string('location1')->unsigned()->nullable()->change();
                $table->string('maritalStatus')->unsigned()->nullable()->change();
                $table->string('Occupation')->unsigned()->nullable()->change();
                $table->string('Address')->unsigned()->nullable()->change();
                $table->string('Country')->unsigned()->nullable()->change();
                $table->string('City')->unsigned()->nullable()->change();
                $table->string('State')->unsigned()->nullable()->change();
                $table->string('Zipcode')->unsigned()->nullable()->change();
                $table->string('School')->unsigned()->nullable()->change();
                $table->string('courseofStudy')->unsigned()->nullable()->change();
                $table->string('hostelAddress')->unsigned()->nullable()->change();
                $table->string('homeAddress')->unsigned()->nullable()->change();
                $table->string('level')->unsigned()->nullable()->change();
                $table->string('Category')->unsigned()->nullable()->change();
                $table->string('startdate')->unsigned()->nullable()->change();
                $table->string('enddate')->unsigned()->nullable()->change();
                $table->string('Occupation2')->unsigned()->nullable()->change();
                $table->string('Employer')->unsigned()->nullable()->change();
                $table->string('officeAddress')->unsigned()->nullable()->change();
                $table->string('Position')->unsigned()->nullable()->change();
                $table->string('natureofBusiness')->unsigned()->nullable()->change();
                $table->string('position1')->unsigned()->nullable()->change();
                $table->string('fathersName')->unsigned()->nullable()->change();
                $table->string('mothersName')->unsigned()->nullable()->change();
                $table->string('fatherOccupation')->unsigned()->nullable()->change();
                $table->string('parentemailAddress')->unsigned()->nullable()->change();
                $table->string('parentPhonenumber')->unsigned()->nullable()->change();
                $table->string('parentAddress')->unsigned()->nullable()->change();
                $table->string('parentMaritalStatus')->unsigned()->nullable()->change();
                $table->string('Ministry1')->unsigned()->nullable()->change();
                $table->string('eventType1')->unsigned()->nullable()->change();            
                $table->string('extension')->unsigned()->nullable()->change();
                $table->string('assignRole')->unsigned()->nullable()->change();
        });
    }
}
