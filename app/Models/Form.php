<?php

namespace App\Models;

use App\Helpers\FileHelper;
use App\Helpers\ImageHelper;
use Illuminate\Database\Eloquent\Model;

class Form extends Model
{
    protected $fillable = [
        'name', 'image','type','file_name'
    ];
    // public function setImageAttribute($value){
    //     $this->attributes['image'] = ImageHelper::saveFImage($value,'/form/');
    // }
    public function setHandleAttribute($value){
        $this->attributes['image'] = FileHelper::saveFile($value,'/form/');
    }
    public static function apply(){
        return (new static)::where('type','How To Apply')->get();
    }
    public static function download(){
        return (new static)::where('type','Download')->get();
    }
}
