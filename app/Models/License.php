<?php

namespace App\Models;

use App\Helpers\ImageHelper;
use Illuminate\Database\Eloquent\Model;

class License extends Model
{
    protected $fillable = [
        'name', 'cnic','father_name','city','license_number','issue_date','valid_from','valid_to',
        'allowed_vehicles','status','pin','image'
    ];
    public function setImageAttribute($value){
        $this->attributes['image'] = ImageHelper::saveImage($value,'/license/');
    }
}
