<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Teacherdata extends Model
{
     protected $table = 'teacherdata';
    protected $fillable = ['name','email','cno','scno','address','subject','experiance','batch','salary'];
}
