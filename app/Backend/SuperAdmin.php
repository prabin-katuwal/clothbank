<?php

namespace App\Backend;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Auth\Authenticatable as AuthenticableTrait;

use Illuminate\Database\Eloquent\Model;

class SuperAdmin extends Model implements Authenticatable
{
      use AuthenticableTrait;
    protected $fillable=["username","email","password"];
}
