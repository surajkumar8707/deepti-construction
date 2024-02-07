<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FrontendImage extends Model
{
    use HasFactory;

    protected $fillable = [
        'manage_front_end_content_id',
        'photo',
        'title',
        'description',
    ];
}
