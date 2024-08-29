<?php

namespace Database\Seeders;

use App\Models\Service;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $service_1 = [
            "title_en" => "Digital Marketing",
            "title_ar" => "التسويق الالكتروني",
            "description_en" => "Continually innovate holistic digital marketing strategies with client-centered campaigns. Assertively leverage catalysts for online growth before market trends shift. Phosfluorescently maintain brand visibility after targeted advertising initiatives. Conveniently lead revolutionary content strategies through future-proof digital tools. Enthusiastically transform customer engagement.

Intrinsically coordinate multichannel campaigns to maximize reach. Objectively envision high impact through collaborative digital platforms. Interactively generate B2C engagement for brand loyalty. Restore and strengthen customer relationships through data-driven results.",
            "description_ar" => "واصل الابتكار في استراتيجيات التسويق الرقمي الشاملة مع الحملات التي تركز على العميل. استفد بحزم من محفزات النمو عبر الإنترنت قبل تحول اتجاهات السوق. حافظ بشكل مشرق على رؤية العلامة التجارية بعد مبادرات الإعلانات المستهدفة. قُد استراتيجيات المحتوى الثورية بسهولة باستخدام الأدوات الرقمية المستدامة. حوّل تفاعل العملاء بحماس.

نسّق intrinsically الحملات متعددة القنوات لتعظيم الوصول. تخيل التأثير العالي بشكل موضوعي من خلال المنصات الرقمية التعاونية. أنشئ تفاعلاً B2C بشكل تفاعلي لتعزيز الولاء للعلامة التجارية. استعد وعزز علاقات العملاء من خلال النتائج المدفوعة بالبيانات.",
            "image" => "public/services/placeholder.png",
            "slug" => "digital-marketing",
        ];

        $service_2 = [
            "title_en" => "Branding",
            "title_ar" => "الهوية البصرية",
            "description_en" => "Continually enhance holistic branding strategies with customer-focused initiatives. Assertively utilize catalysts for brand evolution before market saturation. Phosfluorescently maintain brand consistency after strategic rebranding efforts. Conveniently dominate innovative brand narratives through future-proof creative assets. Enthusiastically transform brand perception.

Intrinsically coordinate cross-channel branding efforts to amplify brand recognition. Objectively envision high-impact branding through collaborative design. Interactively generate B2C loyalty for enduring brand relationships. Strengthen brand identity through resource-optimized campaigns and data-driven insights.",
            "description_ar" => "واصل تعزيز استراتيجيات العلامة التجارية الشاملة من خلال المبادرات التي تركز على العملاء. استخدم المحفزات بشكل حازم لتطور العلامة التجارية قبل تشبع السوق. حافظ على اتساق العلامة التجارية بشكل مشرق بعد جهود إعادة العلامة الاستراتيجية. سيطر بسهولة على السرد الابتكاري للعلامة التجارية باستخدام الأصول الإبداعية المستقبلية. حوّل تصور العلامة التجارية بحماس.

نسق الجهود عبر القنوات لتعزيز التعرف على العلامة التجارية. تخيل تأثير العلامة التجارية العالي من خلال التصميم التعاوني. أنشئ ولاء B2C بشكل تفاعلي لعلاقات دائمة مع العلامة التجارية. عزز هوية العلامة التجارية من خلال الحملات المحسّنة والنتائج المستندة إلى البيانات.
",
            "image" => "public/services/placeholder.png",
            "slug" => "branding",
        ];


        $service_3 = [
            "title_en" => "SEO Services",
            "title_ar" => "خدمات محركات البحث",
            "description_en" => "Continually optimize holistic SEO strategies with user-centered approaches. Assertively leverage catalysts for organic growth before algorithm changes. Phosfluorescently maintain keyword rankings after content updates. Conveniently dominate search engine results through future-proof SEO techniques. Enthusiastically transform search visibility.

Intrinsically coordinate on-page and off-page SEO efforts to amplify site authority. Objectively envision high-impact SEO through data-driven insights. Interactively generate organic traffic for improved search rankings. Strengthen online presence through resource-optimized campaigns and continuous monitoring.",
            "description_ar" => "واصل تحسين استراتيجيات تحسين محركات البحث (SEO) الشاملة من خلال نهج يركز على المستخدم. استفد بحزم من المحفزات للنمو العضوي قبل تغييرات الخوارزميات. حافظ على ترتيب الكلمات الرئيسية بشكل مشرق بعد تحديثات المحتوى. سيطر بسهولة على نتائج محركات البحث من خلال تقنيات تحسين محركات البحث المستقبلية. حوّل ظهور البحث بحماس.

نسق الجهود داخل الصفحة وخارجها لتعزيز سلطة الموقع. تخيل تأثير تحسين محركات البحث العالي من خلال الرؤى المستندة إلى البيانات. أنشئ حركة مرور عضوية بشكل تفاعلي لتحسين ترتيب البحث. عزز الحضور عبر الإنترنت من خلال الحملات المحسّنة والمراقبة المستمرة.",
            "image" => "public/services/placeholder.png",
            "slug" => "seo-services",
        ];

        $service_4 = [
            "title_en" => "Offline Marketing",
            "title_ar" => "خدمات التسويق",
            "description_en" => "Continually innovate holistic offline marketing strategies with customer-centric approaches. Assertively leverage traditional media for maximum reach before market saturation. Phosfluorescently maintain brand presence through impactful offline campaigns. Conveniently dominate local markets through future-proof marketing techniques. Enthusiastically transform community engagement.

Intrinsically coordinate print, radio, and television efforts to amplify brand recognition. Objectively envision high-impact marketing through creative offline tactics. Interactively generate customer loyalty for sustained brand relationships. Strengthen market presence through resource-optimized campaigns and continuous local outreach.",
            "description_ar" => "واصل ابتكار استراتيجيات التسويق التقليدي الشاملة من خلال نهج يركز على العميل. استفد بحزم من وسائل الإعلام التقليدية لتحقيق أقصى انتشار قبل تشبع السوق. حافظ على وجود العلامة التجارية بشكل مشرق من خلال الحملات التقليدية المؤثرة. سيطر بسهولة على الأسواق المحلية باستخدام تقنيات التسويق المستقبلية. حوّل تفاعل المجتمع بحماس.

نسق الجهود عبر الطباعة والإذاعة والتلفزيون لتعزيز التعرف على العلامة التجارية. تخيل تأثير التسويق العالي من خلال التكتيكات التقليدية الإبداعية. أنشئ ولاء العملاء بشكل تفاعلي لعلاقات مستدامة مع العلامة التجارية. عزز الحضور في السوق من خلال الحملات المحسّنة والاتصال المستمر بالمجتمع المحلي.",
            "image" => "public/services/placeholder.png",
            "slug" => "offline-marketing",
        ];

        $service_5 = [
            "title_en" => "Website Development",
            "title_ar" => "تطوير المواقع الالكترونية",
            "description_en" => "Continually enhance holistic website development strategies with user-centered design. Assertively leverage cutting-edge technologies for superior performance before industry shifts. Phosfluorescently maintain site functionality through continuous updates. Conveniently dominate user experience through future-proof development practices. Enthusiastically transform web presence.

Intrinsically coordinate front-end and back-end development efforts to amplify site efficiency. Objectively envision high-impact web solutions through collaborative innovation. Interactively generate user engagement for seamless site navigation. Strengthen online presence through resource-optimized development and ongoing optimization.",
            "description_ar" => "واصل تعزيز استراتيجيات تطوير المواقع الشاملة من خلال تصميم يركز على المستخدم. استفد بحزم من التقنيات المتقدمة لتحقيق أداء ممتاز قبل تحولات الصناعة. حافظ على وظائف الموقع بشكل مشرق من خلال التحديثات المستمرة. سيطر بسهولة على تجربة المستخدم من خلال ممارسات تطوير مستقبلية. حوّل وجود الويب بحماس.

نسق الجهود بين تطوير الواجهة الأمامية والخلفية لتعزيز كفاءة الموقع. تخيل حلول الويب ذات التأثير العالي من خلال الابتكار التعاوني. أنشئ تفاعل المستخدم بشكل تفاعلي لتحسين تنقل الموقع. عزز الحضور عبر الإنترنت من خلال تطوير محسّن والقيام بالتحسينات المستمرة.",
            "image" => "public/services/placeholder.png",
            "slug" => "website-development",
        ];
        $service_6 = [
            "title_en" => "Mobile App Development",
            "title_ar" => "تطوير تطبيقات الهاتف",
            "description_en" => "Continually advance holistic mobile app development strategies with user-focused design. Assertively integrate cutting-edge technologies for optimal performance before market evolution. Phosfluorescently maintain app functionality through regular updates. Conveniently lead user experience through future-proof development practices. Enthusiastically transform mobile engagement.

Intrinsically coordinate front-end and back-end app development to maximize efficiency. Objectively envision high-impact mobile solutions through collaborative innovation. Interactively generate user engagement for smooth app navigation. Strengthen app presence through resource-optimized development and ongoing enhancements.",
            "description_ar" => "واصل تحسين استراتيجيات تطوير التطبيقات المحمولة الشاملة من خلال تصميم يركز على المستخدم. استفد بحزم من التقنيات المتقدمة لتحقيق الأداء الأمثل قبل تطور السوق. حافظ على وظائف التطبيق بشكل مشرق من خلال التحديثات المنتظمة. قُد تجربة المستخدم بسهولة من خلال ممارسات تطوير مستقبلية. حوّل التفاعل عبر الهاتف المحمول بحماس.

نسق الجهود بين تطوير واجهة المستخدم والخلفية لتعظيم الكفاءة. تخيل حلول المحمول ذات التأثير العالي من خلال الابتكار التعاوني. أنشئ تفاعل المستخدم بشكل تفاعلي لتحسين تنقل التطبيق. عزز وجود التطبيق من خلال تطوير محسّن والتحسينات المستمرة.",
            "image" => "public/services/placeholder.png",
            "slug" => "modile-app-development",
        ];


        Service::create($service_1);
        Service::create($service_2);
        Service::create($service_3);
        Service::create($service_4);
        Service::create($service_5);
        Service::create($service_6);
    }
}
