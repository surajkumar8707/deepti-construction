<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ManageFrontEndContent extends Model
{
    use HasFactory;

    protected $fillable = [
        'main_heading',
        'sub_heading',
        'page_type',
    ];

    public function frontendImages()
    {
        return $this->hasMany(FrontendImage::class);
    }

    // Define the one-to-many relationship with Faq
    public function faqs()
    {
        return $this->hasMany(Faq::class);
    }
}
