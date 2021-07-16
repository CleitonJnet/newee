<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tool extends Model
{
    use HasFactory;
    protected $fillable = ['title','initials','ministery_id','from','color','logo','background','bkgd_slide','bkgd_poster','bkgd_certificate'];

    public function ministery(){
        return $this->belongsTo(Ministery::class);
    }
    public function events(){
        return $this->hasMany(Event::class);
    }
    public function roles(){
        return $this->hasMany(Role::class);
    }
    public function unit(){
        return $this->hasMany(Unit::class);
    }
    public function available(){
        return $this->hasMany(Available::class);
    }
}
