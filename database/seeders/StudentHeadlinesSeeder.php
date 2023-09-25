<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\LatestNews;
use Carbon\Carbon;

class StudentHeadlinesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        LatestNews::truncate();
        $now = Carbon::now();

        $headlines = array(
        array('description' =>'Bhumika Chauhan of our college on account of scoring highest marks in English was awarded shree Swaminarayan Gurukul Bhavnagar Gold plate.','sort_id' => '1','link' => NULL,'status' => 'Active','ip_address' => NULL,'login' => '1','deleted_at' => NULL,'created_at' => now(),'updated_at' => now()),
        array('description' =>'Goyani Krinal stood first in university for the subject of psychology in semester second of masters','sort_id' => '2','link' => NULL,'status' => 'Active','ip_address' => NULL,'login' => '1','deleted_at' => NULL,'created_at' => now(),'updated_at' => now()),
        array('description' =>'Gohil Vibhutiba stood third in university for the subject of psychology in semester second of masters','sort_id' => '3','link' => NULL,'status' => 'Active','ip_address' => NULL,'login' => '1','deleted_at' => NULL,'created_at' => now(),'updated_at' => now()),  
       array('description' =>'Sarvaiya Sheetalba stood seventh in university for the subject of psychology in semester second of masters','sort_id' => '4','link' => NULL,'status' => 'Active','ip_address' => NULL,'login' => '1','deleted_at' => NULL,'created_at' => now(),'updated_at' => now()),   

        array('description' =>'Makwana Tanaz has secured first rank in school and in entire Gujarat for scoring highest in 10th boards exams from Gujrati medium section','sort_id' => '5','link' => NULL,'status' => 'Active','ip_address' => NULL,'login' => '1','deleted_at' => NULL,'created_at' => now(),'updated_at' => now()),  

         array('description' =>'Solanki Ayushiba secured first rank in school for scoring highest in 10th boards exams from English medium section','sort_id' => '6','link' => NULL,'status' => 'Active','ip_address' => NULL,'login' => '1','deleted_at' => NULL,'created_at' => now(),'updated_at' => now()),  

         array('description' =>'Patel Dhruvya secured highest rank in for scoring highest in 12th boards exams from English medium section','sort_id' => '7','link' => NULL,'status' => 'Active','ip_address' => NULL,'login' => '1','deleted_at' => NULL,'created_at' => now(),'updated_at' => now()), 

         array('description' =>'CDT Hiralba Chudasama who is a part of 03 GUJ AIR SQN NCC Bhavnagar completed four sorties by flying for 62 minutes','sort_id' => '8','link' => NULL,'status' => 'Active','ip_address' => NULL,'login' => '1','deleted_at' => NULL,'created_at' => now(),'updated_at' => now()),
        
         array('description' =>'Niyatiba Gohil is selected for Basketball National Level in school games federation India SGIF, entitling her to attend camp in Delhi','sort_id' => '9','link' => NULL,'status' => 'Active','ip_address' => NULL,'login' => '1','deleted_at' => NULL,'created_at' => now(),'updated_at' => now()), 

          array('description' =>"Rajeshwariba Gohil and Rumi were honoured with Khel Veerangana award under MKBU'S Youth Talent awards",'sort_id' => '10','link' => NULL,'status' => 'Active','ip_address' => NULL,'login' => '1','deleted_at' => NULL,'created_at' => now(),'updated_at' => now()),        

        array('description' =>"Ruhi Kureshi of Gujarati medium section is selected for National Talent camp organized by Sports Authority of India",'sort_id' => '11','link' => NULL,'status' => 'Active','ip_address' => NULL,'login' => '1','deleted_at' => NULL,'created_at' => now(),'updated_at' => now()),        
 
       array('description' =>"Niyatiba Gohil of English medium section is awarded with prize money of 12,000 rupees by Iscon club for basketball league championship",'sort_id' => '12','link' => NULL,'status' => 'Active','ip_address' => NULL,'login' => '1','deleted_at' => NULL,'created_at' => now(),'updated_at' => now()), 

       array('description' =>"Solanki Tanvi Kishorbhai of 5th standard from Gujarati Medium section stood second in Roller skating championship held in Jamnagar",'sort_id' => '13','link' => NULL,'status' => 'Active','ip_address' => NULL,'login' => '1','deleted_at' => NULL,'created_at' => now(),'updated_at' => now()), 
 
       array('description' =>"Solanki Drija Kishorbhai participated in open Bhavnagar Skating Championship and won a silver medal",'sort_id' => '14','link' => NULL,'status' => 'Active','ip_address' => NULL,'login' => '1','deleted_at' => NULL,'created_at' => now(),'updated_at' => now()),

       array('description' =>"Rucha Bhatt of our college won 1st prize in mix doubles and 2nd in women singles in AYBA tournament",'sort_id' => '15','link' => NULL,'status' => 'Active','ip_address' => NULL,'login' => '1','deleted_at' => NULL,'created_at' => now(),'updated_at' => now()), 


          );
        foreach ( $headlines as $key => $name) {
                    LatestNews::create($name);
                }

    }
}
