<div>
       <!-- start section -->
    <section class="parallax bg-extra-dark-gray p-0" data-parallax-background-ratio="0.5"
        style="background-image:url('assets/images/parallaxbg_header.jpg');">
        <div class="container">
            <div class="row justify-content-center">
                <div
                    class="col-12 col-lg-9 text-center full-screen d-flex flex-column justify-content-center padding-8-rem-tb md-landscape-h-600px">
                    <span
                        class="alt-font letter-spacing-5px text-white text-uppercase font-weight-500 margin-35px-bottom">Counselling Cell</span>
                    <h1
                        class="alt-font font-weight-700 title-large text-shadow-double-large text-white text-uppercase mb-0 letter-spacing-minus-4px margin-4-half-rem-bottom sm-no-text-shadow sm-letter-spacing-minus-1-half">
                        <span class="text-border text-border-width-2px">Guidance &</span><br /> Counselling</h1>
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
                    <h1 class="alt-font text-extra-dark-gray font-weight-500 no-margin-bottom d-inline-block">Career Counselling
                    </h1>
                </div>
                <div
                    class="col-xl-4 col-lg-6 text-center text-lg-end breadcrumb justify-content-center justify-content-lg-end text-small alt-font md-margin-15px-top">
                    <ul>
                        <li><a href="index.html">Home</a></li>
                        <li>Career Counselling</li>
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
@if(isset($pageData) && count($pageData)>0  )
             @forelse ($pageData as $index => $data)         
                     @if (isset($data->image))
                     <img src="{{ asset('storage/uploads/page/' . $data->image) }}" class="img-fluid rounded mb-3" alt="">
                    @endif
                    <div class="alt-font font-weight-500 my-3 d-flex">
                        <span class="flex-shrink-0 w-30px h-1px bg-tussock opacity-7 align-self-center margin-20px-right"></span>
                        <div class="flex-grow-1"><span class="text-tussock text-uppercase">{{$data->heading ?? ''}}

                       <!-- for gujrati -->     

                        </span>
                        </div>
                    </div>

                    <h5 class="alt-font text-dark-purple font-weight-600 w-85 margin-30px-bottom xl-w-100">
                   {{$data->sub_heading ?? ''}}
 
                    <!-- for gujrati -->
                    </h5>

                   @if (isset($data->description))

                         {!!$data->description!!}

                         <!-- for gujrati -->
                @endif  

             @endforeach

@else
<!-- show static data -->
      <img src="assets/images/about_historical_foundation.jpg" class="img-fluid rounded mb-3" alt="">
                    <div class="alt-font font-weight-500 my-3 d-flex">
                        <span class="flex-shrink-0 w-30px h-1px bg-tussock opacity-7 align-self-center margin-20px-right"></span>
                        <div class="flex-grow-1"><span class="text-tussock text-uppercase">Guidance & Counselling</span>
                        </div>
                    </div>
                    <h5 class="alt-font text-dark-purple font-weight-600 w-85 margin-30px-bottom xl-w-100">Career Counselling</h5>

                    <p>At SNKKV, we believe in preparing a child for life. This includes providing professional career counselling in order to help a child understand their strengths and weaknesses and choose their career paths with ease. A comprehensive career workshop is conducted by 'MAA' Foundation, a charitable organization, which is working at the grass-root level to bring reforms in the education sector. </p>
                    <p>The students of Standard 10 take an aptitude test, which helps them understand which subjects they would inherently be good at. Based on this test, students are guided on their 11th and 12th grade subjects.  </p>
                    <p>For students of Standard 12 and College, guided workshops are organized by the institution. These workshops discuss the various career opportunities, which can be pursed and the way to go about applying for them. </p>
                    <p>Students in their final year of Bachelors as well as Masters sit through mock interviews. These prepare them for securing the jobs of their choices and give them the confidence to speak and conduct themselves in a formal setting.</p>
@endif                   
                </div>
            </div>
        </div>
    </section>
</div>
