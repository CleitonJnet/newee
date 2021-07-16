<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @method static create(string[] $array)
 */
class Role extends Model
{
    use HasFactory;
    protected $fillable = ['name','initial','tool_id'];

    public function users()
    {
        return $this->belongsToMany(UserOld::class,'role_user');
    }
    public function tool(){
        return $this->belongsTo(Tool::class);
    }
}
