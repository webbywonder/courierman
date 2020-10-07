<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;


class Admin extends Authenticatable
{
   protected $table = "admins";
    // table fields
    protected $fillable = [
        'name','email'
    ];
    // hidden fields
    protected $hidden = [
        'password'
    ];
}
