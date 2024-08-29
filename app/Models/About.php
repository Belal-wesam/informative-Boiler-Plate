<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    use HasFactory;
    protected $guarded = [
        'id'
    ];

    protected $appends = ['heading', 'sub_heading', 'vision', 'approach', 'mission'];

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

    public function getMissionAttribute()
    {
        if (app()->getLocale() == 'ar') {
            return $this->mission_ar;
        }
        return $this->mission_en;
    }
    public function getVisionAttribute()
    {
        if (app()->getLocale() == 'ar') {
            return $this->vision_ar;
        }
        return $this->vision_en;
    }
    public function getApproachAttribute()
    {
        if (app()->getLocale() == 'ar') {
            return $this->approach_ar;
        }
        return $this->approach_en;
    }
}
