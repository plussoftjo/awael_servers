<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class order extends Model
{
    protected $fillable = ['name','home_number','mobile_number','email','address','zip_code','type','back_image','front_image','third_image','note','profile_id','profile_name'];
}
