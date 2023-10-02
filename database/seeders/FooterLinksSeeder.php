<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\FooterLink;

class FooterLinksSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $footerLink = new FooterLink();
        $footerLink->pname = Null;
        $footerLink->pagetitle = 'About School';
        $footerLink->pagetitleguj = 'શાળા વિશે';
        $footerLink->sort_id = 1;
        $footerLink->status = 'Active';
        $footerLink->save();

        $footerLink = new FooterLink();
        $footerLink->pname = Null;
        $footerLink->pagetitle = 'Academics';
        $footerLink->pagetitleguj = 'શિક્ષણશાસ્ત્રીઓ';
        $footerLink->sort_id = 2;
        $footerLink->status = 'Active';
        $footerLink->save();

        $footerLink = new FooterLink();
        $footerLink->pname = Null;
        $footerLink->pagetitle = 'Admissions';
        $footerLink->pagetitleguj = 'પ્રવેશ';
        $footerLink->sort_id = 3;
        $footerLink->status = 'Active';
        $footerLink->save();

        $footerLink = new FooterLink();
        $footerLink->pname = Null;
        $footerLink->pagetitle = 'Activities';
        $footerLink->pagetitleguj = 'પ્રવૃત્તિઓ';
        $footerLink->sort_id = 4;
        $footerLink->status = 'Active';
        $footerLink->save();

        $footerLink = new FooterLink();
        $footerLink->pname = Null;
        $footerLink->pagetitle = 'Societies';
        $footerLink->pagetitleguj = 'સોસાયટીઓ';
        $footerLink->sort_id = 5;
        $footerLink->status = 'Active';
        $footerLink->save();

        $footerLink = new FooterLink();
        $footerLink->pname = Null;
        $footerLink->pagetitle = 'News & Events';
        $footerLink->pagetitleguj = 'સમાચાર અને ઘટનાઓ';
        $footerLink->sort_id = 6;
        $footerLink->status = 'Active';
        $footerLink->save();

        $footerLink = new FooterLink();
        $footerLink->pname = Null;
        $footerLink->pagetitle = 'Contact Us';
        $footerLink->pagetitleguj = 'અમારો સંપર્ક કરો';
        $footerLink->sort_id = 7;
        $footerLink->status = 'Active';
        $footerLink->save();
    }
}
