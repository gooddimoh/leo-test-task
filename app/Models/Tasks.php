<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tasks extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'Title',
        'Description',
        'Is Published',
        'Image',
        'Is Published',
        'Status - The task must have a status (backlog, development, done, review)',
        'Labels - The user can create custom labels, then he can attach multiple labels to the task.',
    ];


    function index(){ return "index"; }












}
