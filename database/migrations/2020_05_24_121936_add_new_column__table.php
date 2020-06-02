<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddNewColumnTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('members', function (Blueprint $table) {
            
            $table->unsignedInteger('extension_id');
            $table->unsignedInteger('unit_id');
            $table->unsignedInteger('ministry_id');
            $table->unsignedInteger('cell_id');

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

            $table->unsignedInteger('extension_id');
            $table->unsignedInteger('unit_id');
            $table->unsignedInteger('ministry_id');
            $table->unsignedInteger('cell_id');
            
        });
    }
}
