<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    protected $appends = ['name', 'review'];
    public function getNameAttribute()
    {
        if (app()->getLocale() == 'ar') {
            return $this->name_ar;
        }
        return $this->name_en;
    }
    public function getReviewAttribute()
    {
        if (app()->getLocale() == 'ar') {
            return $this->review_ar;
        }
        return $this->review_en;
    }

    public function getPositionAttribute()
    {
        if (app()->getLocale() == 'ar') {
            return $this->position_ar;
        }
        return $this->position_en;
    }
}
