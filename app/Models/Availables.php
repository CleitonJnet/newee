<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @method static create(array $array)
 */
class Availables extends Model
{
    use HasFactory;
    protected $fillable = ['title','tool_id'];

    public function tool(){
        return $this->belongsTo(Tool::class);
    }

    public function event(){
        return $this->hasMany(Event::class);
    }

    public function scheduleDefault(){
        return $this->hasMany(ScheduleDefault::class);
    }
}
