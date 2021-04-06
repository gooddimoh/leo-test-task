<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;


    private $_function1 = "";
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'Title',
        'Slug',
        'Image',
        'Is Published',
        'Total tasks',
        'Timestamp',
        'Title',
        'Description',
        'Is Published',
        'Image',
        'Status - The task must have a status (backlog, development, done, review).',
        'Labels - The user can create custom labels, then he can attach multiple labels to the task',
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


    public function __construct(array $attributes = [])
    {
        parent::__construct($attributes);
    }

    public function attachImg($_function1){
        return $_function1;
    }

}
