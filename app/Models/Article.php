<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    protected $appends = ['title', 'body'];

    public function getTitleAttribute()
    {
        if (app()->getLocale() == 'ar') {
            return $this->title_ar;
        }
        return $this->title_en;
    }
    public function getBodyAttribute()
    {
        if (app()->getLocale() == 'ar') {
            return $this->body_ar;
        }
        return $this->body_en;
    }
}
