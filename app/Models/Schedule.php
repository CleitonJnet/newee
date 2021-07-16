<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{
    use HasFactory;
    protected $fillable = ['date','timeStart','timeEnd','unit_id','event_id','created_at'];

    public function event(){
        return $this->belongsTo(Event::class);
    }

    public function Unit(){
        return $this->belongsTo(Unit::class);
    }
}
