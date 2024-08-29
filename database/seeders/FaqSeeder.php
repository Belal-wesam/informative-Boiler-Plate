<?php

namespace Database\Seeders;

use App\Models\Faq;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FaqSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faq_1 = [
            "question_en" => "First Question Body?",
            "question_ar" => "محتوى السؤال الاول؟",
            "answer_en" => "First question Answer and it can be as long as you want",
            "answer_ar" => "اجابة السؤال الأول , و قد يكون طولها قدر ما تشاء ",
        ];
        $faq_2 = [
            "question_en" => "Second Question Body?",
            "question_ar" => "محتوى السؤال الثاني؟",
            "answer_en" => "Second question Answer and it can be as long as you want",
            "answer_ar" => "اجابة السؤال الثاني , و قد يكون طولها قدر ما تشاء ",
        ];
        $faq_3 = [
            "question_en" => "Third Question Body?",
            "question_ar" => "محتوى السؤال الثالث؟",
            "answer_en" => "Third question Answer and it can be as long as you want",
            "answer_ar" => "اجابة السؤال الثالث , و قد يكون طولها قدر ما تشاء ",
        ];

        Faq::create($faq_1);
        Faq::create($faq_2);
        Faq::create($faq_3);
    }
}
