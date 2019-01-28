<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    //
    function address()
    {
        return $this->hasOne(Address::class);
    }
}
