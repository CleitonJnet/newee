<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ministery extends Model
{
    use HasFactory;
    protected $fillable = ['title'];

    public function tools(){
        return $this->hasMany(Tool::class);
    }
}
