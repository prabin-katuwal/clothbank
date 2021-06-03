<?php

namespace App\Backend;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Auth\Authenticatable as AuthenticableTrait;
use Illuminate\Database\Eloquent\Model;

class Bank extends Model implements Authenticatable
{
    use AuthenticableTrait;
    protected $fillable=['fullname','location','member','email','phone','image','password'];
}
