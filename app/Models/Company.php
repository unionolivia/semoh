<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    protected $guarded =[];


    public function members(){

        return $this->hasMany(Member::class);
    }
}
