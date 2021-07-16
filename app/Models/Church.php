<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @method static create(array $array)
 */
class Church extends Model
{
    use HasFactory;
    protected $fillable = ['name','pastor','leader','zip_code','street','number','complement','neighborhood','city','state','email','phone','mobile_phone'];

    public function events(){
        return $this->hasMany(Event::class);
    }

    public function users(){
        return $this->hasMany(UserOld::class);
    }
}
