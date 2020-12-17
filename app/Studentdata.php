<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Studentdata extends Model
{
    protected $table = 'studentdata';
    protected $fillable = ['name','email','cno','address','subject','jdate','pcno','pemail','fee','deposite','pending','edate'];
}
