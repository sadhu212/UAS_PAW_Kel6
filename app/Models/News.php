<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class News extends Authenticatable
{
    use HasFactory;
    protected $table = 'news';
    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'title',
        'thumbnail',
        'slug_title',
        'created_at'
    ];

    protected $hidden = [
        'thumbnail'
    ];

    /**
     * The attributes that should be hidden for serialization.
     * @var array
     */
}


