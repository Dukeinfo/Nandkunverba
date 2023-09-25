<?php

namespace Database\Seeders;

use App\Models\ClassMaster;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
class ClassSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ClassMaster::truncate();
        $now = Carbon::now();

      $classes = array(
        array('classname' => '1st','classname_guj' => '1લી' ,'sort_id' => '1','status' => 'Active','ip_address' => NULL,'login' => '1','deleted_at' => NULL,'created_at' => now(),'updated_at' => now()),
        array('classname' => '2nd','classname_guj' => '2જી' ,'sort_id' => '2','status' => 'Active','ip_address' => NULL,'login' => '1','deleted_at' => NULL,'created_at' => now(),'updated_at' => now()),
        array('classname' => '3rd','classname_guj' => '3જી' ,'sort_id' => '3','status' => 'Active','ip_address' => NULL,'login' => '1','deleted_at' => NULL,'created_at' => now(),'updated_at' => now()),
        array('classname' => '4th','classname_guj' => '4થી' ,'sort_id' => '4','status' => 'Active','ip_address' => NULL,'login' => '1','deleted_at' => NULL,'created_at' => now(),'updated_at' => now()),
        array('classname' => '5th','classname_guj' => '5મી' ,'sort_id' => '5','status' => 'Active','ip_address' => NULL,'login' => '1','deleted_at' => NULL,'created_at' => now(),'updated_at' => now()),
        array('classname' => '6th','classname_guj' => '6ઠ્ઠી' ,'sort_id' => '6','status' => 'Active','ip_address' => NULL,'login' => '1','deleted_at' => NULL,'created_at' => now(),'updated_at' => now()),
        array('classname' => '7th' ,'classname_guj' => '7મી','sort_id' => '7','status' => 'Active','ip_address' => NULL,'login' => '1','deleted_at' => NULL,'created_at' => now(),'updated_at' => now()),
        array('classname' => '8th' ,'classname_guj' => '8મી','sort_id' => '8','status' => 'Active','ip_address' => NULL,'login' => '1','deleted_at' => NULL,'created_at' => now(),'updated_at' => now()),
        array('classname' => '9th' ,'classname_guj' => '9મી','sort_id' => '9','status' => 'Active','ip_address' => NULL,'login' => '1','deleted_at' => NULL,'created_at' => now(),'updated_at' => now()),
        array('classname' => '10th' ,'classname_guj' => '10મી','sort_id' => '10','status' => 'Active','ip_address' => NULL,'login' => '1','deleted_at' => NULL,'created_at' => now(),'updated_at' => now()),
         array('classname' => '11th' ,'classname_guj' => '11મી','sort_id' => '11','status' => 'Active','ip_address' => NULL,'login' => '1','deleted_at' => NULL,'created_at' => now(),'updated_at' => now()),
          array('classname' => '12th' ,'classname_guj' => '12મી','sort_id' => '12','status' => 'Active','ip_address' => NULL,'login' => '1','deleted_at' => NULL,'created_at' => now(),'updated_at' => now()),
        );
        foreach ( $classes as $key => $name) {
                    ClassMaster::create($name);
                }

        
    }
}
