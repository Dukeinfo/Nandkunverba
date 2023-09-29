<div>
 
    <!-- start section -->
    <section class="parallax bg-extra-dark-gray p-0" data-parallax-background-ratio="0.5"
        style="background-image:url('assets/images/parallaxbg_header.jpg');">
        <div class="container">
            <div class="row justify-content-center">
                <div
                    class="col-12 col-lg-9 text-center full-screen d-flex flex-column justify-content-center padding-8-rem-tb md-landscape-h-600px">
                    <span
                        class="alt-font letter-spacing-5px text-white text-uppercase font-weight-500 margin-35px-bottom">Activities at SNKKV</span>
                    <h1
                        class="alt-font font-weight-700 title-large text-shadow-double-large text-white text-uppercase mb-0 letter-spacing-minus-4px margin-4-half-rem-bottom sm-no-text-shadow sm-letter-spacing-minus-1-half">
                        <span class="text-border text-border-width-2px">Various</span><br /> Activities</h1>
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
                    <h1 class="alt-font text-extra-dark-gray font-weight-500 no-margin-bottom d-inline-block">
                Activities
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
                         <li>Various Activities</li>
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
                        <div class="flex-grow-1"><span class="text-tussock text-uppercase">Activities at SNKKV</span>
                        </div>
                    </div>
                    <h5 class="alt-font text-dark-purple font-weight-600 w-85 margin-30px-bottom xl-w-100">Various Activities</h5>

                    <p>Students are exposed to various activities, which are educational and life enhancing experiences. Some of these include life skills, competitive sports and cultural programmes. The school also celebrates all major festivals on campus. </p>

                    <div class="wow animate__fadeIn">
                        <div class="row align-items-center justify-content-center">
                            <div class="col-12 col-lg-12 wow animate__fadeIn" >
                                <h6 class="alt-font font-weight-600 text-dark-purple">Mini Olympic
                                </h6>                            
                                <p>Mini Olympic is our version of the international Olympics. The students and teachers compete according to their allotted houses, Amrita (Blue House), Kalpana (Red House), Sarojini (Yellow House) and Kiran (Green House). The institute follows the pattern of Olympics where there is an opening ceremony followed by inter-house competitions in various sports ranging from track and field to basketball, handball and volleyball. The Olympics conclude with a prize distribution ceremony. There is a spirit of excitement, joy, and healthy competition amongst students during this time. Over the years the Mini Olympic has had distinguished chief guests.</p>
                            </div>
                        </div>

                        <div class="row align-items-center justify-content-center">
                            <div class="col-12 col-lg-12 wow animate__fadeIn" >
                                <h6 class="alt-font font-weight-600 text-dark-purple">Baal-Utsav
                                </h6>                            
                                <p>A learning based project, which is an essential part of the New Educational Policy 2020 is encouraged among the students, where students through their talent in art, craft and creativity engage in making of different live projects which enhances in students’ knowledge and makes the educational process fun. The students here enjoy making these projects as they are ultimately given their creative freedom to explore all arena. This activity has been conducted in school since 2003.</p>
                            </div>
                        </div>

                        <div class="row align-items-center justify-content-center">
                            <div class="col-12 col-lg-12 wow animate__fadeIn" >
                                <h6 class="alt-font font-weight-600 text-dark-purple">Cultural Programme
                                </h6>                            
                                <p>A cultural programme is held on campus which focuses on showcasing different cultural elements of not only India but also of the whole world. The students showcase their talent in dancing, singing, playing of different instruments which are both traditional and modern. The students develop their all-round personality with the help of this activity. </p>
                            </div>
                        </div>

                        <div class="row align-items-center justify-content-center">
                            <div class="col-12 col-lg-12 wow animate__fadeIn" >
                                <h6 class="alt-font font-weight-600 text-dark-purple">Independence Day
                                </h6>                            
                                <p>The institute partakes in 15th August Independence Day celebrations by hoisting the Indian flag, enacting performances leaders who were instrumental in India gaining independence, singing and dancing to patriotic songs. </p>
                            </div>
                        </div>

                        <div class="row align-items-center justify-content-center">
                            <div class="col-12 col-lg-12 wow animate__fadeIn" >
                                <h6 class="alt-font font-weight-600 text-dark-purple">Republic Day
                                </h6>                            
                                <p>India accepted the Constitution of India on 26th January, 1950 and since then this day is celebrated as republic day. The institute celebrates this Day every year. </p>
                            </div>
                        </div>

                        <div class="row align-items-center justify-content-center">
                            <div class="col-12 col-lg-12 wow animate__fadeIn" >
                                <h6 class="alt-font font-weight-600 text-dark-purple">Khel Mahakumbh
                                </h6>                            
                                <p>TKhel Mahakumbh is organized by Gujarat Information of Sports and Training, Sports University, annually to provide students with a platform to compete in various sports such as volleyball, swimming and athletics. The students participate and secure prizes in the event every year. </p>
                            </div>
                        </div>

                        <div class="row align-items-center justify-content-center">
                            <div class="col-12 col-lg-12 wow animate__fadeIn" >
                                <h6 class="alt-font font-weight-600 text-dark-purple">Kala Kumbh
                                </h6>                            
                                <p>Kala Kumbh is organized by the Government of Gujarat to provide a stage for students to demonstrate their artistic abilities. The students compete in genres such as folk dance and folk song, mono acting and theatre. </p>
                            </div>
                        </div>

                        <div class="row align-items-center justify-content-center">
                            <div class="col-12 col-lg-12 wow animate__fadeIn" >
                                <h6 class="alt-font font-weight-600 text-dark-purple">Youth Festival
                                </h6>                            
                                <p>Youth festival is held for the students at university level to encourage their participation in various talent-based activities such as folk dances, folk songs, marriage songs, traditional songs, dramatics, art and craft etc. Colleges affiliated with Maharaja Krishna Kumar Sinh University (MKBU) compete in this festival and we are proud that are students have secured prizes in a range of competitions such as garba, dramatics, art and craft, group songs.  </p>
                            </div>
                        </div>

                        <div class="row align-items-center justify-content-center">
                            <div class="col-12 col-lg-12 wow animate__fadeIn" >
                                <h6 class="alt-font font-weight-600 text-dark-purple">Games
                                </h6>                            
                                <p>The institute encourages intensive sports training of the students in athletics, volleyball, handball, basketball. The students represent the institute at district, state and national level. These competitions also allow students to secure a range of scholarships.  </p>
                            </div>
                        </div>

                        <div class="row align-items-center justify-content-center">
                            <div class="col-12 col-lg-12 wow animate__fadeIn" >
                                <h6 class="alt-font font-weight-600 text-dark-purple">Kathak
                                </h6>                            
                                <p>Daily kathak classes are conducted on campus by a trained classical dancer. Students have the opportunity to enrol for competitions and examinations. </p>
                            </div>
                        </div>
                        <div class="row align-items-center justify-content-center">
                            <div class="col-12 col-lg-12 wow animate__fadeIn" >
                                <h6 class="alt-font font-weight-600 text-dark-purple">Karate
                                </h6>                            
                                <p>Self-defense is paramount and our girls are trained to protect themselves. Karate is an outlet to their energy and empowers them beyond the protective walls of the campus.</p>
                            </div>
                        </div>
                        <div class="row align-items-center justify-content-center">
                            <div class="col-12 col-lg-12 wow animate__fadeIn" >
                                <h6 class="alt-font font-weight-600 text-dark-purple">Swimming
                                </h6>                            
                                <p>Students especially those residing in the hostel learn how to swim at the Nilambag Palace swimming pool by trained instructors. Students who show an interest in the sport are even provided the platform and training to compete at for various levels.  </p>
                            </div>
                        </div>
                        <div class="row align-items-center justify-content-center">
                            <div class="col-12 col-lg-12 wow animate__fadeIn" >
                                <h6 class="alt-font font-weight-600 text-dark-purple">Rifle Shooting
                                </h6>                            
                                <p>Students especially those residing in the hostel are given the opportunity to learn rifle shooting in an indoor shooting range. Cognitive and concentration skills are enhanced while learning to shoot. </p>
                            </div>
                        </div>
                        <div class="row align-items-center justify-content-center">
                            <div class="col-12 col-lg-12 wow animate__fadeIn" >
                                <h6 class="alt-font font-weight-600 text-dark-purple">Motor Driving
                                </h6>                            
                                <p>College students have the opportunity to learn how to drive. An important life skill, driving is taught in the campus by a professional Motor Driving instructor. Students also appear for the practical examinations and receive their license upon successful completion.</p>
                            </div>
                        </div>
                        <div class="row align-items-center justify-content-center">
                            <div class="col-12 col-lg-12 wow animate__fadeIn" >
                                <h6 class="alt-font font-weight-600 text-dark-purple">Seminars
                                </h6>                            
                                <p>The students of the institute are often engaged in various seminars which include guidance seminars, menstrual hygiene seminars, women health seminars, seminars on career opportunities etc. The students of college attend a combination of seminars held at the college as well as at Bhavnagar University. </p>
                                <p>The seminars are organised by various departments and include topics like cybercrime, laws for the safety of women, women empowerment etc. </p>
                            </div>
                        </div>
                        <div class="row align-items-center justify-content-center">
                            <div class="col-12 col-lg-12 wow animate__fadeIn" >
                                <h6 class="alt-font font-weight-600 text-dark-purple">Paper Presentation
                                </h6>                            
                                <p>The students of college often engage in paper presentation competition held at university, the advantage of the participation is that they learn the idea and methods of research and paper presentation. The students are actively guided by the faculty for their presentations. </p>
                            </div>
                        </div>
                    </div>                    
                </div>
            </div>
        </div>
    </section>
</div>
