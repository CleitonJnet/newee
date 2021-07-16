<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @method static create(array $array)
 */
class ScheduleDefault extends Model
{
    use HasFactory;
    protected $fillable = ['day','timeStart','timeEnd','unit_id','tool_id','available_id','created_at'];

    public function available(){
        return $this->belongsTo(Available::class);
    }
    public function scheduleDefault(){
        return $this->hasMany(ScheduleDefault::class);
    }
    public function Unit(){
        return $this->belongsTo(Unit::class);
    }
}
