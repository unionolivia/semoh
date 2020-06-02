<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMembersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('members', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('firstName1');
            $table->string('lastName1');
            $table->string('otherName1');
            $table->string('emailAddress1');
            $table->date('dateofBirth1');
            $table->string('location1');
            $table->string('maritalStatus');
            $table->string('Occupation');
            $table->string('Address');
            $table->string('Country');
            $table->string('City');
            $table->string('State');
            $table->string('Zipcode');
            $table->string('School');
            $table->string('courseofStudy');
            $table->string('hostelAddress');
            $table->string('homeAddress');
            $table->string('level');
            $table->string('Category');
            $table->date('startdate');
            $table->date('enddate');
            $table->string('Occupation2');
            $table->string('Employer');
            $table->string('officeAddress');
            $table->string('Position');
            $table->string('natureofBusiness');
            $table->string('position1');
            $table->string('fathersName');
            $table->string('mothersName');
            $table->string('fatherOccupation');
            $table->string('parentemailAddress');
            $table->string('parentPhonenumber');
            $table->string('parentAddress');
            $table->string('parentMaritalStatus');
            $table->string('Ministry1');
            $table->string('eventType1');            
            $table->string('extension');            
            $table->string('assignRole');
            $table->timestamps();
        });


        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('members');
    }
}
