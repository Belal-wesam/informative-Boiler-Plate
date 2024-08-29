<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Faq extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    protected $appends = ['question', 'answer'];

    public function getQuestionAttribute()
    {
        if (app()->getLocale() == 'ar') {
            return $this->question_ar;
        }
        return $this->question_en;
    }
    public function getAnswerAttribute()
    {
        if (app()->getLocale() == 'ar') {
            return $this->answer_ar;
        }
        return $this->answer_en;
    }
}
