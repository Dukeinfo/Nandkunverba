<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\PageHeading;
use Carbon\Carbon;
class PageHeadingsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        //abuot us 1
        $pageHeading = new PageHeading();
        $pageHeading->menu_id = 2;
        $pageHeading->pname = 'home.about_us';
        $pageHeading->pname_eng = "About Us" ;
        $pageHeading->pname_guj = 'અમારી વિશેષ';
        $pageHeading->pname_title = 'About SNKKV';
        $pageHeading->pname_title_guj = 'SNKKV વિશે';
        $pageHeading->pname_heading = "Historical";
        $pageHeading->pname_heading_guj = 'ઐતિહાસિક';
        $pageHeading->pname_subheading = 'Foundatation';
        $pageHeading->pname_subheading_guj = 'આધાર';
        $pageHeading->sort_id = 1;
        $pageHeading->status = 'Active';
        $pageHeading->save();

        //historical foundation  2
        $pageHeading = new PageHeading();
        $pageHeading->menu_id = 2;
        $pageHeading->pname = 'home.historical_foundation';
        $pageHeading->pname_eng = "Historical Foundation" ;
        $pageHeading->pname_guj = '"ઐતિહાસિક આધાર';
        $pageHeading->pname_title = 'About SNKKV';
        $pageHeading->pname_title_guj = 'SNKKV વિશે';
        $pageHeading->pname_heading = "Historical";
        $pageHeading->pname_heading_guj = 'ઐતિહાસિક';
        $pageHeading->pname_subheading = 'Foundation';
        $pageHeading->pname_subheading_guj = 'આધાર';
        $pageHeading->sort_id = 2;
        $pageHeading->status = 'Active';
        $pageHeading->save();

         //academic objectives  3
        $pageHeading = new PageHeading();
        $pageHeading->menu_id = 3;
        $pageHeading->pname = 'home.academic_objectives';
        $pageHeading->pname_eng = "Academic Objectives" ;
        $pageHeading->pname_guj = '"શૈક્ષણિક ઉદ્દેશ્યો';
        $pageHeading->pname_title = 'About SNKKV';
        $pageHeading->pname_title_guj = 'SNKKV વિશે';
        $pageHeading->pname_heading = "Academic";
        $pageHeading->pname_heading_guj = 'એકેડમિક';
        $pageHeading->pname_subheading = 'Objectives';
        $pageHeading->pname_subheading_guj = 'ઉદ્દેશ્યો';
        $pageHeading->sort_id = 3;
        $pageHeading->status = 'Active';
        $pageHeading->save();

        //activities 4
        $pageHeading = new PageHeading();
        $pageHeading->menu_id = 1;
        $pageHeading->pname = 'home.activities';
        $pageHeading->pname_eng = 'activities';
        $pageHeading->pname_guj = 'પ્રવૃત્તિઓ';
        $pageHeading->pname_title = 'Activities at SNKKV';
        $pageHeading->pname_title_guj = 'SNKKV ખાતે પ્રવૃત્તિઓ';
        $pageHeading->pname_heading = 'Various';
        $pageHeading->pname_heading_guj = 'વિવિધ';
        $pageHeading->pname_subheading = 'Activities';
        $pageHeading->pname_subheading_guj = 'પ્રવૃત્તિઓ';
        $pageHeading->sort_id = 4;
        $pageHeading->status = 'Active';
        $pageHeading->save();

        //career counselling 5
        $pageHeading = new PageHeading();
        $pageHeading->menu_id = 4;
        $pageHeading->pname = 'home.career_counselling';
        $pageHeading->pname_eng = 'Career Counselling';
        $pageHeading->pname_guj = 'કારકિર્દી પરામર્શ';
        $pageHeading->pname_title = 'Counselling Cell';
        $pageHeading->pname_title_guj = 'કાઉન્સેલિંગ સેલ';
        $pageHeading->pname_heading = 'Guidance &';
        $pageHeading->pname_heading_guj = 'માર્ગદર્શન અને';
        $pageHeading->pname_subheading = 'Counselling';
        $pageHeading->pname_subheading_guj = 'કાઉન્સેલિંગ';
        $pageHeading->sort_id = 5;
        $pageHeading->status = 'Active';
        $pageHeading->save();

        //counselling cell 6
        $pageHeading = new PageHeading();
        $pageHeading->menu_id = 4;
        $pageHeading->pname = 'home.counselling_cell';
        $pageHeading->pname_eng = 'Counselling Cell';
        $pageHeading->pname_guj = 'કાઉન્સેલિંગ સેલ';
        $pageHeading->pname_title = 'Counselling Cell';
        $pageHeading->pname_title_guj = 'કાઉન્સેલિંગ સેલ';
        $pageHeading->pname_heading = 'Guidance &';
        $pageHeading->pname_heading_guj = 'માર્ગદર્શન અને';
        $pageHeading->pname_subheading = 'Counselling';
        $pageHeading->pname_subheading_guj = 'કાઉન્સેલિંગ';
        $pageHeading->sort_id = 6;
        $pageHeading->status = 'Active';
        $pageHeading->save();

        //curricular facilities 7
        $pageHeading = new PageHeading();
        $pageHeading->menu_id = 6;
        $pageHeading->pname = 'home.curricular_facilities';
        $pageHeading->pname_eng = 'Curricular Facilities';
        $pageHeading->pname_guj = 'અભ્યાસક્રમ સુવિધાઓ';
        $pageHeading->pname_title = 'Facilities at SNKKV';
        $pageHeading->pname_title_guj = 'SNKKV ખાતે સુવિધાઓ';
        $pageHeading->pname_heading = 'Curricular';
        $pageHeading->pname_heading_guj = 'અભ્યાસક્રમ';
        $pageHeading->pname_subheading = 'Facilities';
        $pageHeading->pname_subheading_guj = 'સુવિધાઓ';
        $pageHeading->sort_id = 7;
        $pageHeading->status = 'Active';
        $pageHeading->save();

        //co-curricular facilities 8
        $pageHeading = new PageHeading();
        $pageHeading->menu_id = 6;
        $pageHeading->pname = 'home.cocurricular_facilities';
        $pageHeading->pname_eng = 'Co-Curricular Facilities';
        $pageHeading->pname_guj = 'સહ-અભ્યાસક્રમ સુવિધાઓ';
        $pageHeading->pname_title = 'Facilities at SNKKV';
        $pageHeading->pname_title_guj = 'SNKKV ખાતે સુવિધાઓ';
        $pageHeading->pname_heading = 'Co-Curricular';
        $pageHeading->pname_heading_guj = 'સહ અભ્યાસક્રમ';
        $pageHeading->pname_subheading = 'Facilities';
        $pageHeading->pname_subheading_guj = 'સુવિધાઓ';
        $pageHeading->sort_id = 8;
        $pageHeading->status = 'Active';
        $pageHeading->save();

        //vision and mission 9
        $pageHeading = new PageHeading();
        $pageHeading->menu_id = 2;
        $pageHeading->pname = 'home.vision_and_mission';
        $pageHeading->pname_eng = 'Vision and Mission';
        $pageHeading->pname_guj = 'વિઝન અને મિશન';
        $pageHeading->pname_title = 'About SNKKV';
        $pageHeading->pname_title_guj = 'SNKKV વિશે';
        $pageHeading->pname_heading = 'Vision &';
        $pageHeading->pname_heading_guj = 'દ્રષ્ટિ &';
        $pageHeading->pname_subheading = 'Mission';
        $pageHeading->pname_subheading_guj = 'મિશન';
        $pageHeading->sort_id = 9;
        $pageHeading->status = 'Active';
        $pageHeading->save();

        //location 10
        $pageHeading = new PageHeading();
        $pageHeading->menu_id = 2;
        $pageHeading->pname = 'home.location';
        $pageHeading->pname_eng = 'Location';
        $pageHeading->pname_guj = 'સ્થાન';
        $pageHeading->pname_title = 'About SNKKV';
        $pageHeading->pname_title_guj = 'SNKKV વિશે';
        $pageHeading->pname_heading = 'Where We';
        $pageHeading->pname_heading_guj = 'જ્યાં અમે';
        $pageHeading->pname_subheading = 'are Located';
        $pageHeading->pname_subheading_guj = 'સ્થિત છે';
        $pageHeading->sort_id = 10;
        $pageHeading->status = 'Active';
        $pageHeading->save();

        //historical foundation 11
        $pageHeading = new PageHeading();
        $pageHeading->menu_id = 2;
        $pageHeading->pname = 'home.historical_foundation';
        $pageHeading->pname_eng = 'Historical Foundation';
        $pageHeading->pname_guj = 'ઐતિહાસિક ફાઉન્ડેશન';
        $pageHeading->pname_title = 'About SNKKV';
        $pageHeading->pname_title_guj = 'SNKKV વિશે';
        $pageHeading->pname_heading = 'Historical';
        $pageHeading->pname_heading_guj = 'ઐતિહાસિક';
        $pageHeading->pname_subheading = 'Foundation';
        $pageHeading->pname_subheading_guj = 'ફાઉન્ડેશન';
        $pageHeading->sort_id = 11;
        $pageHeading->status = 'Active';
        $pageHeading->save();

        //founders philosophy 12
        $pageHeading = new PageHeading();
        $pageHeading->menu_id = 2;
        $pageHeading->pname = 'home.founders_philosophy';
        $pageHeading->pname_eng = "Founder's Philosophy" ;
        $pageHeading->pname_guj = 'સ્થાપકની ફિલસૂફી';
        $pageHeading->pname_title = 'About SNKKV';
        $pageHeading->pname_title_guj = 'SNKKV વિશે';
        $pageHeading->pname_heading = "Founder's";
        $pageHeading->pname_heading_guj = 'સ્થાપકની';
        $pageHeading->pname_subheading = 'Philosophy';
        $pageHeading->pname_subheading_guj = 'તત્વજ્ઞાન';
        $pageHeading->sort_id = 12;
        $pageHeading->status = 'Active';
        $pageHeading->save();

        //members of trust 13
        $pageHeading = new PageHeading();
        $pageHeading->menu_id = 2;
        $pageHeading->pname = 'home.members_of_trust';
        $pageHeading->pname_eng = "Members" ;
        $pageHeading->pname_guj = 'સભ્યો';
        $pageHeading->pname_title = 'About SNKKV';
        $pageHeading->pname_title_guj = 'SNKKV વિશે';
        $pageHeading->pname_heading = "Trustees";
        $pageHeading->pname_heading_guj = 'ટ્રસ્ટીઓ';
        $pageHeading->pname_subheading = '& Members';
        $pageHeading->pname_subheading_guj = 'અને સભ્યો';
        $pageHeading->sort_id = 13;
        $pageHeading->status = 'Active';
        $pageHeading->save();

        //societies 14
        $pageHeading = new PageHeading();
        $pageHeading->menu_id = 1;
        $pageHeading->pname = 'home.societies';
        $pageHeading->pname_eng = "Societies" ;
        $pageHeading->pname_guj = 'સોસાયટીઓ';
        $pageHeading->pname_title = 'Societies at SNKKV';
        $pageHeading->pname_title_guj = 'એસએનકેકેવી ખાતે સોસાયટીઓ';
        $pageHeading->pname_heading = "Various";
        $pageHeading->pname_heading_guj = 'વિવિધ';
        $pageHeading->pname_subheading = 'Societies';
        $pageHeading->pname_subheading_guj = 'સોસાયટીઓ';
        $pageHeading->sort_id = 14;
        $pageHeading->status = 'Active';
        $pageHeading->save();

        //gallery detai 15
        $pageHeading = new PageHeading();
        $pageHeading->menu_id = 1;
        $pageHeading->pname = 'home.gallery';
        $pageHeading->pname_eng = "Photo Gallery" ;
        $pageHeading->pname_guj = 'ફોટો ગેલેરી';
        $pageHeading->pname_title = 'In the Media';
        $pageHeading->pname_title_guj = 'મીડિયામાં';
        $pageHeading->pname_heading = "Photo";
        $pageHeading->pname_heading_guj = 'ફોટો';
        $pageHeading->pname_subheading = 'Gallery';
        $pageHeading->pname_subheading_guj = 'ગેલેરી';
        $pageHeading->sort_id = 15;
        $pageHeading->status = 'Active';
        $pageHeading->save();

        //news_events 16
        $pageHeading = new PageHeading();
        $pageHeading->menu_id = 1;
        $pageHeading->pname = 'home.news_events';
        $pageHeading->pname_eng = "News and Events" ;
        $pageHeading->pname_guj = 'સમાચાર અને ઘટનાઓ';
        $pageHeading->pname_title = 'SNKKV in The News';
        $pageHeading->pname_title_guj = 'ધ ન્યૂઝમાં SNKKV';
        $pageHeading->pname_heading = "News";
        $pageHeading->pname_heading_guj = 'સમાચાર';
        $pageHeading->pname_subheading = '& Events';
        $pageHeading->pname_subheading_guj = 'અને ઘટનાઓ';
        $pageHeading->sort_id = 16;
        $pageHeading->status = 'Active';
        $pageHeading->save();

        //student headlines 17
        $pageHeading = new PageHeading();
        $pageHeading->menu_id = 1;
        $pageHeading->pname = 'home.student_headlines';
        $pageHeading->pname_eng = "Students in Headline" ;
        $pageHeading->pname_guj = 'હેડલાઇનમાં વિદ્યાર્થીઓ';
        $pageHeading->pname_title = 'SNKKV in The News';
        $pageHeading->pname_title_guj = 'ધ ન્યૂઝમાં SNKKV';
        $pageHeading->pname_heading = "Students";
        $pageHeading->pname_heading_guj = 'વિદ્યાર્થીઓ';
        $pageHeading->pname_subheading = 'in Headline';
        $pageHeading->pname_subheading_guj = 'હેડલાઇનમાં';
        $pageHeading->sort_id = 17;
        $pageHeading->status = 'Active';
        $pageHeading->save();

        //testimonials 18
        $pageHeading = new PageHeading();
        $pageHeading->menu_id = 1;
        $pageHeading->pname = 'home.testimonials';
        $pageHeading->pname_eng = "Testimonials" ;
        $pageHeading->pname_guj = 'પ્રશંસાપત્રો';
        $pageHeading->pname_title = 'Testimonials';
        $pageHeading->pname_title_guj = 'પ્રશંસાપત્રો';
        $pageHeading->pname_heading = "Students";
        $pageHeading->pname_heading_guj = 'વિદ્યાર્થીઓ';
        $pageHeading->pname_subheading = 'Speaks';
        $pageHeading->pname_subheading_guj = 'બોલે છે';
        $pageHeading->sort_id = 18;
        $pageHeading->status = 'Active';
        $pageHeading->save();

        //contact us 19
        $pageHeading = new PageHeading();
        $pageHeading->menu_id = 1;
        $pageHeading->pname = 'home.contact_us';
        $pageHeading->pname_eng = "Contact Us" ;
        $pageHeading->pname_guj = 'અમારો સંપર્ક કરો';
        $pageHeading->pname_title = 'Contact SNKKV';
        $pageHeading->pname_title_guj = 'SNKKV નો સંપર્ક કરો';
        $pageHeading->pname_heading = "Connect";
        $pageHeading->pname_heading_guj = 'જોડાવા';
        $pageHeading->pname_subheading = 'With Us';
        $pageHeading->pname_subheading_guj = 'અમારી સાથે';
        $pageHeading->sort_id = 19;
        $pageHeading->status = 'Active';
        $pageHeading->save();


    }
}
