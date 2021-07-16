<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Unit extends Model
{
    use HasFactory;
    protected $fillable = ['order','title','tips','time','tool_id','created_at'];

    public function tool(){
        return $this->belongsTo(Tool::class);
    }

    public function schedule(){
        return $this->hasMany(Schedule::class);
    }
}
