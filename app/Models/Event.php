<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @method static create(array $array)
 */
class Event extends Model
{
    use HasFactory;
    protected $fillable = ['date','time','price','executableBy','available_id','tool_id','church_id','teacher_id','teacher_aux_id'];

    public function church(){
        return $this->belongsTo(Church::class);
    }

    public function tool(){
        return $this->belongsTo(Tool::class);
    }

    public function teacher(){
        return $this->belongsTo(User::class,'teacher_id','id');
    }

    public function teacherA(){
        return $this->belongsTo(User::class,'teacher_aux_id','id');
    }

    public function participants(){
        return $this->belongsToMany(User::class);
    }
}
