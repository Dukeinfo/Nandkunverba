<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Testimonials;
use Carbon\Carbon;

class TestimonialsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Testimonials::truncate();
        $now = Carbon::now();

        $testimonials = array(
        array('name' => 'Rajeshwariba Jadeja','position' => 'Music Teacher, Christ School, Rajkot' ,'description' =>'One of the most memorable times I have spent was at my School Shri Nandkuvarba Kshatriya Kanya Vidhyalaya. It holds a very special place in my heart. Especially the hostel life. Although the theoretical knowledge has played a key role in my career, The Importance of sports at School cannot be undermined in developing my personality. While All the staff members are dearly remembered, one special person who has taught me lifelong lessons was our Respected principle Vachinididi.','rating' => '5','sort_id' => '1','link' => NULL,'status' => 'Active','ip_address' => NULL,'login' => '1','deleted_at' => NULL,'created_at' => now(),'updated_at' => now()),

         array('name' => 'Riddhiba Harshjitsinh Vala','position' => 'MBBS, Critical Care Fellow, Sterling Hospital Ahmedabad' ,'description' =>'As a student my school life in shri Nandkuvarba kshatriya kanya vidhyalaya was the best life. It was the golden period of learning and it had truly impacted my life very positively. Whenever I thought about it ,one face constantly comes in my mind, our principal shri vachinididi, my inspiration and exemplar.

		SNKKV has blessed me with many good friends, teachers and many more, their memories remain with me for the rest of my life. For me these days are like an invaluable treasure.

		My school life is a wonderful chapter in my memories because I learned dedication, hard work, motivation and self-actualization. The school years were also the period in which I started working hard towards my goals. One of my best high school memories was the day when I won a prize as a best student of the school. It was a moment of pride for me, as well as for my parents and for my school. The principal of our school Shree Vachinididi gave me a shield of self-confidence and boldness which I still have and treasure to this day.

		I still have a lot of pictures we took in school which remind me of all the good memories I made. I remember celebration of different days we celebrated and the extracurricular activities I took part in. I remember how happy my parents, Vachinididi, my teachers and my friends were when I became the top achiever in my entire school.

		Whatever I am today is because of best lesson of life I learned from my school and my principal Vachinidi','rating' => '5','sort_id' => '2','link' => NULL,'status' => 'Active','ip_address' => NULL,'login' => '1','deleted_at' => NULL,'created_at' => now(),'updated_at' => now()),

         array('name' => 'Rajeshwariba Jadeja','position' => 'Assistant Director, Food & Civil Supply Department' ,'description' =>"During my time at Nandkunvarba Kshatriya Kanya Vidyalaya School (Bhavnagar), I was fortunate to have had an exceptional experience that enriched my life in countless ways. The supportive environment, our principal Shree Vachinidevi Gohil and dedicated teachers helped me to realize my potential and develop a diverse range of talents/ As I pursued my love for music, it became clear that this was my true passion. Now, as a music teacher at Christ School in Rajkot, I have the privilege of passing on my knowledge and enthusiasm to a new generation of students. Witnessing their growth and witnessing the transformative power of music in their lives is incredibly fulfilling.

			My journey from Nandkuvarba to Christ School has been one of self-discovery and growth, and I owe it all to the nurturing and encouraging atmosphere I experienced during my formative years. I am grateful for the opportunities I had, and I am determined to create a positive impact on my students, just as my principal and teachers did for me.

			Teaching music is not just about imparting technical skills; it's about instilling a lifelong love for the art form and encouraging creativity and self-expression. I strive to be a mentor, guiding my students to discover their unique musical strengths and supporting them as they pursue their dreams.

			As I reflect on my journey, I can't help but feel immense gratitude for both my school experiences and my chosen path as a music teacher. They have shaped me into the person I am today, and I am excited about the endless possibilities that lie ahead. With a heart full of passion and dedication.",'rating' => '5','sort_id' => '1','link' => NULL,'status' => 'Active','ip_address' => NULL,'login' => '1','deleted_at' => NULL,'created_at' => now(),'updated_at' => now()),  

         );
        foreach ( $testimonials as $key => $name) {
                    Testimonials::create($name);
                }

    }
}
