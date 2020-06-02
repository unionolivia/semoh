<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Member extends Model
{
    public function extensions(){

        return $this->belongsTo( 'App\Models\Extension', 'extension_id');

    }

    public function company(){

        return $this->belongsTo(Company::class);

    }
}

