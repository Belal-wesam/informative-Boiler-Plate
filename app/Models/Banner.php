<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Banner extends Model
{
    use HasFactory;
    protected $fillable = [
        'image',
        'status',
        'heading_en',
        'heading_ar',
        'sub_heading_en',
        'sub_heading_ar'
    ];
    protected $appends = ['image_url', 'heading', 'sub_heading'];


    public function getImageUrlAttribute()
    {
        return url('/') . Storage::url($this->image);
    }

    public function getHeadingAttribute()
    {
        if (app()->getLocale() == 'ar') {
            return $this->heading_ar;
        }
        return $this->heading_en;
    }

    public function getSubHeadingAttribute()
    {
        if (app()->getLocale() == 'ar') {
            return $this->sub_heading_ar;
        }
        return $this->sub_heading_en;
    }
}
