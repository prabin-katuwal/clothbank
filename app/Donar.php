<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Donar extends Model
{
    protected $fillable=["fullname","email","location","quantity","bank","user_id"];
}
