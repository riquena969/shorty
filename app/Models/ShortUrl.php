<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ShortUrl extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'user_id',
        'title',
        'original_url',
        'short_code',
        'active',
        'expires_at',
        'max_visits',
        'visit_count',
    ];

    protected $dates = [
        'expires_at',
    ];
}
