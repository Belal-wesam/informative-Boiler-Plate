<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Project extends Model
{
    use HasFactory;

    protected $guarded = ['id'];
    protected $appends = ['title', 'description', 'image_url',];
    public function service()
    {
        return $this->belongsTo(Service::class, 'service_id');
    }

    public function getTitleAttribute()
    {
        if (app()->getLocale() == 'ar') {
            return $this->title_ar;
        }
        return $this->title_en;
    }
    public function getDescriptionAttribute()
    {
        if (app()->getLocale() == 'ar') {
            return $this->description_ar;
        }
        return $this->description_en;
    }
    public function getImageUrlAttribute()
    {
        if ($this->image) {
            return url('/') . Storage::url($this->image);
        }
        return null;
    }
}
