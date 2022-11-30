<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Community extends Model
{
    use HasFactory;
    public $primaryKey='community_id';
    protected $table="communities";
    protected $fillable = [
        'community_name', 'address_id', 'contact_name', 'community_desc', 'community_logo'
    ];
    public function packages(){
        return $this->hasMany(Packages::class,'communtiy_id','communtiy_id');
    }
}
