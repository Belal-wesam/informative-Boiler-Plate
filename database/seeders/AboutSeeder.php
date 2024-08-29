<?php

namespace Database\Seeders;

use App\Models\About;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AboutSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $about = [
            "heading_en" => "Lorem ipsum dolor sit amet consectetur adipisicing elit Perferendis repudiandae nostrum quibusdam! elit Perferendis repudiandae",
            "heading_ar" => "شركة سوات الصناعية تعتبر من الشركات الرائدة في مجال التصنيع والتوريد. تتميز بجودة منتجاتها وتقديمها لحلول مبتكرة تلبي احتياجات العملاء.",
            "sub_heading_ar" => "شركة سوات هي إحدى الشركات الرائدة في مجال الصناعة، حيث تقدم حلولاً مبتكرة ومتطورة تلبي احتياجات السوق العالمية. تتميز الشركة بتوفير منتجات عالية الجودة وخدمات متميزة تساعد عملائها على تحقيق النجاح والنمو المستدام. تعتمد سوات على أحدث التقنيات وفرق العمل الماهرة لتحقيق التميز في كافة جوانب أعمالها. تسعى الشركة دائماً لتطوير وتحسين عملياتها لتقديم أفضل قيمة ممكنة لعملائها وشركائها.",
            "sub_heading_en" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut minus commodi, illo, enim nemo illum repellendus accusantium maiores delectus doloribus alias ea quisquam cum nulla a volupta delectus doloribus alias ea quisquam cum nulla a voluptatum nobis eius, deleniti dicta molestiae atque. Exercitationem odit dolor cumque facilis natus recusandae id, dolorum modi ducimus minus.",

            "vision_en" => "Sawat's vision is to become the global leader in providing innovative and sustainable industrial solutions. Sawat strives to enhance innovation and achieve excellence by investing in cutting-edge technology and developing specialized teams. Our goal is to create lasting value for our customers and partners while contributing to a better future for the industry and society.",
            "vision_ar" => "رؤية شركة سوات تتمثل في أن تصبح الشركة الرائدة عالميًا في تقديم حلول صناعية مبتكرة ومستدامة. تسعى سوات إلى تعزيز الابتكار وتحقيق التميز من خلال الاستثمار في التكنولوجيا الحديثة وتطوير فرق عمل متخصصة. هدفنا هو خلق قيمة دائمة لعملائنا وشركائنا والمساهمة في تحقيق مستقبل أفضل للصناعة والمجتمع.",
            "vision_image" => "public/about/placeholder.png",

            "mission_en" => "Sawat's mission is to provide high-quality industrial solutions that meet our clients' needs and enhance their operational efficiency. We strive to achieve this through continuous innovation, commitment to safety and quality standards, and developing long-term partnerships built on trust. We believe in the importance of teamwork and transparency in achieving sustainable growth and success.",
            "mission_ar" => "مهمة شركة سوات هي تقديم حلول صناعية عالية الجودة تلبي احتياجات عملائنا وتعزز كفاءتهم التشغيلية. نسعى إلى تحقيق هذا الهدف من خلال الابتكار المستمر، والالتزام بمعايير السلامة والجودة، وتطوير شراكات طويلة الأمد مبنية على الثقة. نؤمن بأهمية العمل الجماعي والشفافية في تحقيق النجاح والنمو المستدام.",
            "mission_image" => "public/about/placeholder.png",


            "approach_en" => "Sawat's approach is rooted in continuous innovation and a client-centric focus at every stage of our work. We start by gaining a deep understanding of our clients' needs and challenges, then develop tailored solutions using the latest technologies. We work closely with our clients to ensure optimal execution while adhering to the highest quality standards. We are committed to constantly monitoring and evaluating our results to ensure the best possible outcomes.",
            "approach_ar" => "نهج شركة سوات يقوم على الابتكار المستمر والتركيز على العميل في جميع مراحل العمل. نبدأ بفهم عميق لاحتياجات عملائنا وتحدياتهم، ثم نطور حلولاً مخصصة باستخدام أحدث التقنيات. نعمل بشكل وثيق مع عملائنا لضمان التنفيذ الأمثل، مع الالتزام بأعلى معايير الجودة. نحرص على متابعة وتقييم نتائجنا باستمرار لضمان تحقيق أفضل النتائج الممكنة.",
            "approach_image" => "public/about/placeholder.png",
        ];

        About::create($about);
    }
}
