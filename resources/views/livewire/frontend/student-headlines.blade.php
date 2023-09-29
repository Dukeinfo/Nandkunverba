<div>
     <!-- start section -->
    <section class="parallax bg-extra-dark-gray p-0" data-parallax-background-ratio="0.5"
        style="background-image:url('assets/images/parallaxbg_header.jpg');">
        <div class="container">
            <div class="row justify-content-center">
                <div
                    class="col-12 col-lg-9 text-center full-screen d-flex flex-column justify-content-center padding-8-rem-tb md-landscape-h-600px">
                    <span
                        class="alt-font letter-spacing-5px text-white text-uppercase font-weight-500 margin-35px-bottom">SNKKV in The News</span>
                    <h1
                        class="alt-font font-weight-700 title-large text-shadow-double-large text-white text-uppercase mb-0 letter-spacing-minus-4px margin-4-half-rem-bottom sm-no-text-shadow sm-letter-spacing-minus-1-half">
                        <span class="text-border text-border-width-2px">Students</span><br /> in Headline</h1>
                </div>
            </div>
        </div>
    </section>
    <!-- end section -->

    <!-- start page title -->
    <section class="wow animate__fadeIn bg-seashell padding-30px-tb sm-padding-20px-tb page-title-small">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-xl-8 col-lg-6 text-center text-lg-start">
                    <h1 class="alt-font text-extra-dark-gray font-weight-500 no-margin-bottom d-inline-block">Students in Headline
                    </h1>
                </div>
                <div
                    class="col-xl-4 col-lg-6 text-center text-lg-end breadcrumb justify-content-center justify-content-lg-end text-small alt-font md-margin-15px-top">
                    <ul>
                        <li><a href="index.html">Home</a></li>
                        @php
           $getRouteName =  Route::currentRouteName();
           $widget =  App\Models\Widget::where('status','Active')->where('pname',$getRouteName )->first();
           @endphp 
                                @if($widget) 
                            @if($widget->menu_id!=1)    
                           <li><a href="javascript:void()"> {{$widget->Menu->name}}</a></li>
                            @endif
                        @endif
                        <li>Students in Headline</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- end page title -->

    <section class="half-section">
        <div class="container position-relative">
            <div class="row">
                <div class="col-lg-3 d-lg-block d-md-block d-sm-none d-none">
                    <div id="sidebarWrap">
                        <div id="sidebar">
                            <h6 class="alt-font text-dark-purple font-weight-500 w-85 xl-w-100 text-uppercase mb-0">In this section</h6>
                            <div class="alt-font font-weight-500 d-flex">
                                <span class="flex-shrink-0 w-30px h-1px bg-dark-purple opacity-7 align-self-center margin-20px-right"></span>
                                <div class="flex-grow-1"><span class="text-dark text-uppercase">&nbsp;</span>
                                </div>
                            </div>
                            
                            @livewire('frontend.common.quick-links')
                        </div>
                    </div>
                </div>
                <div class="col-lg-9">
                    <div class="alt-font font-weight-500 my-3 d-flex">
                        <span class="flex-shrink-0 w-30px h-1px bg-tussock opacity-7 align-self-center margin-20px-right"></span>
                        <div class="flex-grow-1"><span class="text-tussock text-uppercase">School in the News</span>
                        </div>
                    </div>
                    <h5 class="alt-font text-dark-purple font-weight-600 w-85 margin-30px-bottom xl-w-100">Headlines Made by Students</h5>
                    
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th width="10%">Sl No.</th>
                                            <th>Particulars</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1.</td>
                                            <td>Bhumika Chauhan of our college on account of scoring highest marks in English was awarded shree Swaminarayan Gurukul Bhavnagar Gold plate.</td>
                                        </tr>
                                        <tr>
                                            <td>2.</td>
                                            <td>Goyani Krinal stood first in university for the subject of psychology in semester second of masters</td>
                                        </tr>
                                        <tr>
                                            <td>3.</td>
                                            <td>Gohil Vibhutiba stood third in university for the subject of psychology in semester second of masters</td>
                                        </tr>
                                        <tr>
                                            <td>4.</td>
                                            <td>Sarvaiya Sheetalba stood seventh in university for the subject of psychology in semester second of masters</td>
                                        </tr>
                                        <tr>
                                            <td>5.</td>
                                            <td>Makwana Tanaz has secured first rank in school and in entire Gujarat for scoring highest in 10th boards exams from Gujrati medium section</td>
                                        </tr>
                                        <tr>
                                            <td>6.</td>
                                            <td>Solanki Ayushiba secured first rank in school for scoring highest in 10th boards exams from English medium section</td>
                                        </tr>
                                        <tr>
                                            <td>7.</td>
                                            <td>Chudasama Dityaba secured highest rank in for scoring highest in 12th boards exams from Gujarati medium section</td>
                                        </tr>
                                        <tr>
                                            <td>8.</td>
                                            <td>Patel Dhruvya secured highest rank in for scoring highest in 12th boards exams from English medium section</td>
                                        </tr>
                                        <tr>
                                            <td>9.</td>
                                            <td>CDT Hiralba Chudasama who is a part of 03 GUJ AIR SQN NCC Bhavnagar completed four sorties by flying for 62 minutes</td>
                                        </tr>
                                        <tr>
                                            <td>10.</td>
                                            <td>Niyatiba Gohil is selected for Basketball National Level in school games federation India SGIF, entitling her to attend camp in Delhi</td>
                                        </tr>
                                        <tr>
                                            <td>11.</td>
                                            <td>Rajeshwariba Gohil and Rumi were honoured with Khel Veerangana award under MKBU'S Youth Talent awards</td>
                                        </tr>
                                        <tr>
                                            <td>12.</td>
                                            <td>Ruhi Kureshi of Gujarati medium section is selected for National Talent camp organized by Sports Authority of India</td>
                                        </tr>
                                        <tr>
                                            <td>13.</td>
                                            <td>Niyatiba Gohil of English medium section is awarded with prize money of 12,000 rupees by Iscon club for basketball league championship</td>
                                        </tr>
                                        <tr>
                                            <td>14.</td>
                                            <td>Solanki Tanvi Kishorbhai of 5th standard from Gujarati Medium section stood second in Roller skating championship held in Jamnagar</td>
                                        </tr>
                                        <tr>
                                            <td>15.</td>
                                            <td>Solanki Drija Kishorbhai participated in open Bhavnagar Skating Championship and won a silver medal</td>
                                        </tr>
                                        <tr>
                                            <td>16.</td>
                                            <td>Rucha Bhatt of our college won 1st prize in mix doubles and 2nd in women singles in AYBA tournament</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </section> 
</div>
