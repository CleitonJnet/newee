<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

/**
 * @method static create(array $array)
 */
class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name', 'email', 'password','phone','mobile_phone','zip_code','street','number','complement','neighborhood','city','state','avatar','church_id'];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function church(){
        return $this->belongsTo(Church::class);
    }

    public function teacher(){
        return $this->hasMany(Event::class,'teacher_id','id');
    }

    public function teacherA(){
        return $this->hasMany(Event::class,'teacher_aux_id','id');
    }

    public function events(){
        return $this->belongsToMany(Event::class);
    }

    public function roles(){
        return $this->belongsToMany(Role::class,'role_user');
    }
}
