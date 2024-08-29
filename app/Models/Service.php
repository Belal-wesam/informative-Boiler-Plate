<?php

namespace App\Models;

use App\Models\SubService;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Support\Facades\Storage;

class Service extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    protected $appends = ['title', 'description', 'image_url',];

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

    public function projects()
    {
        return $this->hasMany(Project::class, 'service_id');
    }

    public function sub_services()
    {
        return $this->hasMany(SubService::class, 'service_id');
    }

    public function getImageUrlAttribute()
    {
        if ($this->image) {
            return url('/') . Storage::url($this->image);
        }
        return null;
    }
}
