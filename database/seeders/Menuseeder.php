<?php

namespace Database\Seeders;

use App\Models\Menu;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class Menuseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
  

    public function run()
    {
        Menu::truncate();
        $now = Carbon::now();

               /* `pineschool`.`menus` */
        $menus = array(
        array('name' => 'Home','name_guj' => 'ઘર' ,'sort_id' => '1','link' => 'home.homepage','status' => 'Active','ip_address' => NULL,'login' => '1','deleted_at' => NULL,'created_at' => now(),'updated_at' => now()),
        array('name' => 'About Us','name_guj' => 'અમારા વિશે' ,'sort_id' => '2','link' => NULL,'status' => 'Active','ip_address' => NULL,'login' => '1','deleted_at' => NULL,'created_at' => now(),'updated_at' => now()),
        array('name' => 'Academics','name_guj' => 'શિક્ષણશાસ્ત્રીઓ' ,'sort_id' => '3','link' => NULL,'status' => 'Active','ip_address' => NULL,'login' => '1','deleted_at' => NULL,'created_at' => now(),'updated_at' => now()),
        array('name' => 'Guidence & Counselling','name_guj' => 'માર્ગદર્શન અને પરામર્શ' ,'sort_id' => '4','link' => NULL,'status' => 'Active','ip_address' => NULL,'login' => '1','deleted_at' => NULL,'created_at' => now(),'updated_at' => now()),
        array('name' => 'Activities','name_guj' => 'પ્રવૃત્તિઓ' ,'sort_id' => '5','link' => NULL,'status' => 'Active','ip_address' => NULL,'login' => '1','deleted_at' => NULL,'created_at' => now(),'updated_at' => now()),
        array('name' => 'Facilities' ,'name_guj' => 'સુવિધાઓ','sort_id' => '6','link' => NULL,'status' => 'Active','ip_address' => NULL,'login' => '1','deleted_at' => NULL,'created_at' => now(),'updated_at' => now()),
        array('name' => 'Societies','name_guj' => 'સોસાયટીઓ' ,'sort_id' => '7','link' => NULL,'status' => 'Active','ip_address' => NULL,'login' => '1','deleted_at' => NULL,'created_at' => now(),'updated_at' => now()),
        array('name' => 'News & Events','name_guj' => 'સમાચાર અને ઘટનાઓ' ,'sort_id' => '8','link' => NULL,'status' => 'Active','ip_address' => NULL,'login' => '1','deleted_at' => NULL,'created_at' => now(),'updated_at' => now()),
         array('name' => 'Student Speaks ','name_guj' => 'વિદ્યાર્થી બોલે છે' ,'sort_id' => '9','link' => NULL,'status' => 'Active','ip_address' => NULL,'login' => '1','deleted_at' => NULL,'created_at' => now(),'updated_at' => now()),
         array('name' => 'Contact Us ','name_guj' => 'અમારો સંપર્ક કરો' ,'sort_id' => '10','link' => NULL,'status' => 'Active','ip_address' => NULL,'login' => '1','deleted_at' => NULL,'created_at' => now(),'updated_at' => now()),
        );
        foreach ( $menus as $key => $name) {
                    Menu::create($name);
                }
    }
}







