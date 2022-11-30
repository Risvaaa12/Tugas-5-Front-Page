<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Packages extends Model
{
    use HasFactory;
    // public $primaryKey='package_id';
    // protected $table="packages";
    // protected $fillable = [
    //     'package_name', 'package_desc', 'feature_img', 'location_id', 'community_id', 'permalink'
    // ];
    // public function Community(){
    //     return $this->belongsTo(Community::class,'communtiy_id','communtiy_id' );
    // }
}
