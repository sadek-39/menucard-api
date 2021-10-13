<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

/**
 * 
 */
class Food extends Model
{
	
	protected $fillable = [
        'food_name','quantity','food_details','food_status','food_price','food_image','user_id'
    ];
    protected $hidden = [
        //'password',
    ];
}