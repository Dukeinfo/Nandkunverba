<?php

namespace Database\Seeders;

use App\Models\SectionMaster;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
class SectionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        SectionMaster::truncate();

        $now = Carbon::now();

        $section = array(
        array('name' => 'A','name_guj' => 'એ' ,'sort_id' => '1','status' => 'Active','ip_address' => NULL,'login' => '1','deleted_at' => NULL,'created_at' => now(),'updated_at' => now()),
        array('name' => 'B','name_guj' => 'બી' ,'sort_id' => '2','status' => 'Active','ip_address' => NULL,'login' => '1','deleted_at' => NULL,'created_at' => now(),'updated_at' => now()),
        array('name' => 'C','name_guj' => 'સી' ,'sort_id' => '3','status' => 'Active','ip_address' => NULL,'login' => '1','deleted_at' => NULL,'created_at' => now(),'updated_at' => now()),
        array('name' => 'D','name_guj' => 'ડી' ,'sort_id' => '4','status' => 'Active','ip_address' => NULL,'login' => '1','deleted_at' => NULL,'created_at' => now(),'updated_at' => now()),
        );
        foreach ( $section as $key => $name) {
                    SectionMaster::create($name);
                }

        
    }
}
