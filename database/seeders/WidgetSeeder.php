<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Widget;
use Carbon\Carbon;
class WidgetSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

    	//activities (4 widgets)
        $widget = new Widget();
        $widget->menu_id = 1;
        $widget->pname = 'home.activities';
        $widget->spname = 'home.curricular_facilities';
        $widget->pagetitle = 'CURRICULAR FACILITIES';
        $widget->pagetitleguj = 'અભ્યાસક્રમ સુવિધાઓ';
        $widget->sort_id = 1;
        $widget->status = 'Active';
        $widget->save();

        $widget = new Widget();
        $widget->menu_id = 1;
        $widget->pname = 'home.activities';
        $widget->spname = 'home.cocurricular_facilities';
        $widget->pagetitle = 'CO-CURRICULAR FACILITIES';
        $widget->pagetitleguj = 'સહ-અભ્યાસક્રમ સુવિધાઓ';
        $widget->sort_id = 2;
        $widget->status = 'Active';
        $widget->save();

        $widget = new Widget();
        $widget->menu_id = 1;
        $widget->pname = 'home.activities';
        $widget->spname = 'home.activities';
        $widget->pagetitle = 'ACTIVITIES';
        $widget->pagetitleguj = 'પ્રવૃત્તિઓ';
        $widget->sort_id = 3;
        $widget->status = 'Active';
        $widget->save();

        $widget = new Widget();
        $widget->menu_id = 1;
        $widget->pname = 'home.activities';
        $widget->spname = 'home.societies';
        $widget->pagetitle = 'SOCIETIES';
        $widget->pagetitleguj = 'સોસાયટીઓ';
        $widget->sort_id = 4;
        $widget->status = 'Active';
        $widget->save();

        //career-counselling (2 widgets)

        $widget = new Widget();
        $widget->menu_id = 1;
        $widget->pname = 'home.career_counselling';
        $widget->spname = 'home.counselling_cell';
        $widget->pagetitle = 'COUNSELLING CELL';
        $widget->pagetitleguj = 'કાઉન્સિલિંગ સેલ';
        $widget->sort_id = 5;
        $widget->status = 'Active';
        $widget->save();

        $widget = new Widget();
        $widget->menu_id = 1;
        $widget->pname = 'home.career_counselling';
        $widget->spname = 'home.career_counselling';
        $widget->pagetitle = 'CAREER COUNSELLING';
        $widget->pagetitleguj = 'કારકિર્દી પરામર્શ';
        $widget->sort_id = 6;
        $widget->status = 'Active';
        $widget->save();

        //cocurricular-facilities (3 widgets)

        $widget = new Widget();
        $widget->menu_id = 1;
        $widget->pname = 'home.cocurricular_facilities';
        $widget->spname = 'home.curricular_facilities';
        $widget->pagetitle = 'CURRICULAR FACILITIES';
        $widget->pagetitleguj = 'અભ્યાસક્રમ સુવિધાઓ';
        $widget->sort_id = 7;
        $widget->status = 'Active';
        $widget->save();

        $widget = new Widget();
        $widget->menu_id = 1;
        $widget->pname = 'home.cocurricular_facilities';
        $widget->spname = 'home.cocurricular_facilities';
        $widget->pagetitle = 'CO-CURRICULAR FACILITIES';
        $widget->pagetitleguj = 'સહ-અભ્યાસક્રમ સુવિધાઓ';
        $widget->sort_id = 8;
        $widget->status = 'Active';
        $widget->save();

        $widget = new Widget();
        $widget->menu_id = 1;
        $widget->pname = 'home.cocurricular_facilities';
        $widget->spname = 'home.activities';
        $widget->pagetitle = 'ACTIVITIES';
        $widget->pagetitleguj = 'પ્રવૃત્તિઓ';
        $widget->sort_id = 9;
        $widget->status = 'Active';
        $widget->save();

        //counselling-cell (2 widgets)

        $widget = new Widget();
        $widget->menu_id = 1;
        $widget->pname = 'home.counselling_cell';
        $widget->spname = 'home.counselling_cell';
        $widget->pagetitle = 'COUNSELLING CELL';
        $widget->pagetitleguj = 'કાઉન્સિલિંગ સેલ';
        $widget->sort_id = 10;
        $widget->status = 'Active';
        $widget->save();

        $widget = new Widget();
        $widget->menu_id = 1;
        $widget->pname = 'home.counselling_cell';
        $widget->spname = 'home.career_counselling';
        $widget->pagetitle = 'CAREER COUNSELLING';
        $widget->pagetitleguj = 'કારકિર્દી પરામર્શ';
        $widget->sort_id = 11;
        $widget->status = 'Active';
        $widget->save();

        //curricular-facilities (3 widgets)

        $widget = new Widget();
        $widget->menu_id = 1;
        $widget->pname = 'home.curricular_facilities';
        $widget->spname = 'home.curricular_facilities';
        $widget->pagetitle = 'CURRICULAR FACILITIES';
        $widget->pagetitleguj = 'અભ્યાસક્રમ સુવિધાઓ';
        $widget->sort_id = 12;
        $widget->status = 'Active';
        $widget->save();

        $widget = new Widget();
        $widget->menu_id = 1;
        $widget->pname = 'home.curricular_facilities';
        $widget->spname = 'home.cocurricular_facilities';
        $widget->pagetitle = 'CO-CURRICULAR FACILITIES';
        $widget->pagetitleguj = 'સહ-અભ્યાસક્રમ સુવિધાઓ';
        $widget->sort_id = 13;
        $widget->status = 'Active';
        $widget->save();

        $widget = new Widget();
        $widget->menu_id = 1;
        $widget->pname = 'home.curricular_facilities';
        $widget->spname = 'home.activities';
        $widget->pagetitle = 'ACTIVITIES';
        $widget->pagetitleguj = 'પ્રવૃત્તિઓ';
        $widget->sort_id = 14;
        $widget->status = 'Active';
        $widget->save();

         //historical-foundation (5 widgets )

        $widget = new Widget();
        $widget->menu_id = 2;
        $widget->pname = 'home.historical_foundation';
        $widget->spname = 'home.historical_foundation';
        $widget->pagetitle = 'Historical Foundation';
        $widget->pagetitleguj = 'ઐતિહાસિક ફાઉન્ડેશન';
        $widget->sort_id = 15;
        $widget->status = 'Active';
        $widget->save();

        $widget = new Widget();
        $widget->menu_id = 2;
        $widget->pname = 'home.historical_foundation';
        $widget->spname = 'home.location';
        $widget->pagetitle = 'OUR LOCATION';
        $widget->pagetitleguj = 'અમારું સ્થાન';
        $widget->sort_id = 15;
        $widget->status = 'Active';
        $widget->save();

        $widget = new Widget();
        $widget->menu_id = 2;
        $widget->pname = 'home.historical_foundation';
        $widget->spname = 'home.founders_philosophy';
        $widget->pagetitle = "FOUNDER'S PHILOSOPHY";
        $widget->pagetitleguj = 'સ્થાપકની ફિલસૂફી';
        $widget->sort_id = 16;
        $widget->status = 'Active';
        $widget->save();

        $widget = new Widget();
        $widget->menu_id = 2;
        $widget->pname = 'home.historical_foundation';
        $widget->spname = 'home.vision_and_mission';
        $widget->pagetitle = "VISION & MISSION";
        $widget->pagetitleguj = 'વિઝન અને મિશન';
        $widget->sort_id = 17;
        $widget->status = 'Active';
        $widget->save();

        $widget = new Widget();
        $widget->menu_id = 2;
        $widget->pname = 'home.historical_foundation';
        $widget->spname = 'home.members_of_trust';
        $widget->pagetitle = "MEMBERS OF TRUST";
        $widget->pagetitleguj = 'ટ્રસ્ટના સભ્યો';
        $widget->sort_id = 18;
        $widget->status = 'Active';
        $widget->save();

        //founders-philosophy (5 widgets )

        $widget = new Widget();
        $widget->menu_id = 2;
        $widget->pname = 'home.founders_philosophy';
        $widget->spname = 'home.historical_foundation';
        $widget->pagetitle = 'Historical Foundation';
        $widget->pagetitleguj = 'ઐતિહાસિક ફાઉન્ડેશન';
        $widget->sort_id = 15;
        $widget->status = 'Active';
        $widget->save();

        $widget = new Widget();
        $widget->menu_id = 2;
        $widget->pname = 'home.founders_philosophy';
        $widget->spname = 'home.location';
        $widget->pagetitle = 'OUR LOCATION';
        $widget->pagetitleguj = 'અમારું સ્થાન';
        $widget->sort_id = 15;
        $widget->status = 'Active';
        $widget->save();

        $widget = new Widget();
        $widget->menu_id = 2;
        $widget->pname = 'home.founders_philosophy';
        $widget->spname = 'home.founders_philosophy';
        $widget->pagetitle = "FOUNDER'S PHILOSOPHY";
        $widget->pagetitleguj = 'સ્થાપકની ફિલસૂફી';
        $widget->sort_id = 16;
        $widget->status = 'Active';
        $widget->save();

        $widget = new Widget();
        $widget->menu_id = 2;
        $widget->pname = 'home.founders_philosophy';
        $widget->spname = 'home.vision_and_mission';
        $widget->pagetitle = "VISION & MISSION";
        $widget->pagetitleguj = 'વિઝન અને મિશન';
        $widget->sort_id = 17;
        $widget->status = 'Active';
        $widget->save();

        $widget = new Widget();
        $widget->menu_id = 2;
        $widget->pname = 'home.founders_philosophy';
        $widget->spname = 'home.members_of_trust';
        $widget->pagetitle = "MEMBERS OF TRUST";
        $widget->pagetitleguj = 'ટ્રસ્ટના સભ્યો';
        $widget->sort_id = 18;
        $widget->status = 'Active';
        $widget->save();

        //location (5 widgets)
        $widget = new Widget();
        $widget->menu_id = 2;
        $widget->pname = 'home.location';
        $widget->spname = 'home.historical_foundation';
        $widget->pagetitle = 'Historical Foundation';
        $widget->pagetitleguj = 'ઐતિહાસિક ફાઉન્ડેશન';
        $widget->sort_id = 15;
        $widget->status = 'Active';
        $widget->save();

        $widget = new Widget();
        $widget->menu_id = 2;
        $widget->pname = 'home.location';
        $widget->spname = 'home.location';
        $widget->pagetitle = 'OUR LOCATION';
        $widget->pagetitleguj = 'અમારું સ્થાન';
        $widget->sort_id = 19;
        $widget->status = 'Active';
        $widget->save();

        $widget = new Widget();
        $widget->menu_id = 2;
        $widget->pname = 'home.location';
        $widget->spname = 'home.founders_philosophy';
        $widget->pagetitle = "FOUNDER'S PHILOSOPHY";
        $widget->pagetitleguj = 'સ્થાપકની ફિલસૂફી';
        $widget->sort_id = 20;
        $widget->status = 'Active';
        $widget->save();

        $widget = new Widget();
        $widget->menu_id = 2;
        $widget->pname = 'home.location';
        $widget->spname = 'home.vision_and_mission';
        $widget->pagetitle = "VISION & MISSION";
        $widget->pagetitleguj = 'વિઝન અને મિશન';
        $widget->sort_id = 21;
        $widget->status = 'Active';
        $widget->save();

        $widget = new Widget();
        $widget->menu_id = 2;
        $widget->pname = 'home.location';
        $widget->spname = 'home.members_of_trust';
        $widget->pagetitle = "MEMBERS OF TRUST";
        $widget->pagetitleguj = 'ટ્રસ્ટના સભ્યો';
        $widget->sort_id = 22;
        $widget->status = 'Active';
        $widget->save();

        //members-of-trust (5 widgets)

        $widget = new Widget();
        $widget->menu_id = 2;
        $widget->pname = 'home.members_of_trust';
        $widget->spname = 'home.historical_foundation';
        $widget->pagetitle = 'Historical Foundation';
        $widget->pagetitleguj = 'ઐતિહાસિક ફાઉન્ડેશન';
        $widget->sort_id = 15;
        $widget->status = 'Active';
        $widget->save();

        $widget = new Widget();
        $widget->menu_id = 2;
        $widget->pname = 'home.members_of_trust';
        $widget->spname = 'home.location';
        $widget->pagetitle = 'OUR LOCATION';
        $widget->pagetitleguj = 'અમારું સ્થાન';
        $widget->sort_id = 23;
        $widget->status = 'Active';
        $widget->save();

        $widget = new Widget();
        $widget->menu_id = 2;
        $widget->pname = 'home.members_of_trust';
        $widget->spname = 'home.founders_philosophy';
        $widget->pagetitle = "FOUNDER'S PHILOSOPHY";
        $widget->pagetitleguj = 'સ્થાપકની ફિલસૂફી';
        $widget->sort_id = 24;
        $widget->status = 'Active';
        $widget->save();

        $widget = new Widget();
        $widget->menu_id = 2;
        $widget->pname = 'home.members_of_trust';
        $widget->spname = 'home.vision_and_mission';
        $widget->pagetitle = "VISION & MISSION";
        $widget->pagetitleguj = 'વિઝન અને મિશન';
        $widget->sort_id = 25;
        $widget->status = 'Active';
        $widget->save();

        $widget = new Widget();
        $widget->menu_id = 2;
        $widget->pname = 'home.members_of_trust';
        $widget->spname = 'home.members_of_trust';
        $widget->pagetitle = "MEMBERS OF TRUST";
        $widget->pagetitleguj = 'ટ્રસ્ટના સભ્યો';
        $widget->sort_id = 26;
        $widget->status = 'Active';
        $widget->save();

        //news-events (2 widgets)

        $widget = new Widget();
        $widget->menu_id = 1;
        $widget->pname = 'home.news_events';
        $widget->spname = 'home.news_events';
        $widget->pagetitle = "NEWS AND EVENTS";
        $widget->pagetitleguj = 'સમાચાર અને ઘટનાઓ';
        $widget->sort_id = 27;
        $widget->status = 'Active';
        $widget->save();


        $widget = new Widget();
        $widget->menu_id = 1;
        $widget->pname = 'home.news_events';
        $widget->spname = 'home.student_headlines';
        $widget->pagetitle = "HEADLINES MADE BY STUDENTS";
        $widget->pagetitleguj = 'વિદ્યાર્થીઓ દ્વારા બનાવવામાં આવેલી હેડલાઇન્સ';
        $widget->sort_id = 28;
        $widget->status = 'Active';
        $widget->save();

        //photo-gallery (2 widegts)

        $widget = new Widget();
        $widget->menu_id = 1;
        $widget->pname = 'home.gallery';
        $widget->spname = 'home.gallery';
        $widget->pagetitle = "PHOTO GALLERY";
        $widget->pagetitleguj = 'ફોટો ગેલેરી';
        $widget->sort_id = 29;
        $widget->status = 'Active';
        $widget->save();

        //societies (4 widgets)

        $widget = new Widget();
        $widget->menu_id = 1;
        $widget->pname = 'home.societies';
        $widget->spname = 'home.curricular_facilities';
        $widget->pagetitle = 'CURRICULAR FACILITIES';
        $widget->pagetitleguj = 'અભ્યાસક્રમ સુવિધાઓ';
        $widget->sort_id = 30;
        $widget->status = 'Active';
        $widget->save();

        $widget = new Widget();
        $widget->menu_id = 1;
        $widget->pname = 'home.societies';
        $widget->spname = 'home.cocurricular_facilities';
        $widget->pagetitle = 'CO-CURRICULAR FACILITIES';
        $widget->pagetitleguj = 'સહ-અભ્યાસક્રમ સુવિધાઓ';
        $widget->sort_id = 31;
        $widget->status = 'Active';
        $widget->save();

        $widget = new Widget();
        $widget->menu_id = 1;
        $widget->pname = 'home.societies';
        $widget->spname = 'home.activities';
        $widget->pagetitle = 'ACTIVITIES';
        $widget->pagetitleguj = 'પ્રવૃત્તિઓ';
        $widget->sort_id = 32;
        $widget->status = 'Active';
        $widget->save();

        $widget = new Widget();
        $widget->menu_id = 1;
        $widget->pname = 'home.societies';
        $widget->spname = 'home.societies';
        $widget->pagetitle = 'SOCIETIES';
        $widget->pagetitleguj = 'સોસાયટીઓ';
        $widget->sort_id = 33;
        $widget->status = 'Active';
        $widget->save();

        //student-headlines (2 widgets)
        $widget = new Widget();
        $widget->menu_id = 1;
        $widget->pname = 'home.student_headlines';
        $widget->spname = 'home.news_events';
        $widget->pagetitle = 'NEWS AND EVENTS';
        $widget->pagetitleguj = 'સમાચાર અને ઘટનાઓ';
        $widget->sort_id = 34;
        $widget->status = 'Active';
        $widget->save();

        $widget = new Widget();
        $widget->menu_id = 1;
        $widget->pname = 'home.student_headlines';
        $widget->spname = 'home.student_headlines';
        $widget->pagetitle = 'HEADLINES MADE BY STUDENTS';
        $widget->pagetitleguj = 'વિદ્યાર્થીઓ દ્વારા બનાવવામાં આવેલી હેડલાઇન્સ';
        $widget->sort_id = 35;
        $widget->status = 'Active';
        $widget->save();

        //testimonials (1 widget)

        $widget = new Widget();
        $widget->menu_id = 1;
        $widget->pname = 'home.testimonials';
        $widget->spname = 'home.testimonials';
        $widget->pagetitle = 'Testimonials';
        $widget->pagetitleguj = 'પ્રશંસાપત્રો';
        $widget->sort_id = 36;
        $widget->status = 'Active';
        $widget->save();

        //vision-and-mission (5 widgets)

        $widget = new Widget();
        $widget->menu_id = 2;
        $widget->pname = 'home.vision_and_mission';
        $widget->spname = 'home.historical_foundation';
        $widget->pagetitle = 'Historical Foundation';
        $widget->pagetitleguj = 'ઐતિહાસિક ફાઉન્ડેશન';
        $widget->sort_id = 15;
        $widget->status = 'Active';
        $widget->save();


        $widget = new Widget();
        $widget->menu_id = 2;
        $widget->pname = 'home.vision_and_mission';
        $widget->spname = 'home.location';
        $widget->pagetitle = 'OUR LOCATION';
        $widget->pagetitleguj = 'અમારું સ્થાન';
        $widget->sort_id = 37;
        $widget->status = 'Active';
        $widget->save();

        $widget = new Widget();
        $widget->menu_id = 2;
        $widget->pname = 'home.vision_and_mission';
        $widget->spname = 'home.founders_philosophy';
        $widget->pagetitle = "FOUNDER'S PHILOSOPHY";
        $widget->pagetitleguj = 'સ્થાપકની ફિલસૂફી';
        $widget->sort_id = 38;
        $widget->status = 'Active';
        $widget->save();

        $widget = new Widget();
        $widget->menu_id = 2;
        $widget->pname = 'home.vision_and_mission';
        $widget->spname = 'home.vision_and_mission';
        $widget->pagetitle = "VISION & MISSION";
        $widget->pagetitleguj = 'વિઝન અને મિશન';
        $widget->sort_id = 39;
        $widget->status = 'Active';
        $widget->save();

        $widget = new Widget();
        $widget->menu_id = 2;
        $widget->pname = 'home.vision_and_mission';
        $widget->spname = 'home.members_of_trust';
        $widget->pagetitle = "MEMBERS OF TRUST";
        $widget->pagetitleguj = 'ટ્રસ્ટના સભ્યો';
        $widget->sort_id = 40;
        $widget->status = 'Active';
        $widget->save();








    }
}
