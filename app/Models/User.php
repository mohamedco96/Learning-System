<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'level',
        'score1',
        'score2',
        'score3',
        'score4',
        'alm8yas2Score',
        'percentage1',
        'percentage2',
        'percentage3',
        'percentage4',
        'alm8yas2percentage',
        'time1',
        'time2',
        'duration1',
        'duration2',
        'counter',
        'support',
        'module1',
        'module2',
        'module3',
        'module4',
        'module5',
        'module6',
    ];

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
}
