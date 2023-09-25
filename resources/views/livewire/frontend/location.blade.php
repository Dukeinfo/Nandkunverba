<div>
      <!-- start section -->
    <section class="parallax bg-extra-dark-gray p-0" data-parallax-background-ratio="0.5"
        style="background-image:url('assets/images/parallaxbg_header.jpg');">
        <div class="container">
            <div class="row justify-content-center">
                <div
                    class="col-12 col-lg-9 text-center full-screen d-flex flex-column justify-content-center padding-8-rem-tb md-landscape-h-600px">
                    <span
                        class="alt-font letter-spacing-5px text-white text-uppercase font-weight-500 margin-35px-bottom">About SNKKV</span>
                    <h1
                        class="alt-font font-weight-700 title-large text-shadow-double-large text-white text-uppercase mb-0 letter-spacing-minus-4px margin-4-half-rem-bottom sm-no-text-shadow sm-letter-spacing-minus-1-half">
                        <span class="text-border text-border-width-2px">Where We</span><br /> are Located</h1>
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
                    <h1 class="alt-font text-extra-dark-gray font-weight-500 no-margin-bottom d-inline-block">About Us
                    </h1>
                </div>
                <div
                    class="col-xl-4 col-lg-6 text-center text-lg-end breadcrumb justify-content-center justify-content-lg-end text-small alt-font md-margin-15px-top">
                    <ul>
                        <li><a href="index.html">Home</a></li>
                        <li><a href="javascript:void()">About Us</a></li>
                        <li>Our Location</li>
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
                            
                            <ul class="list-style-02 alt-font font-weight-500 text-small text-uppercase text-extra-dark-gray my-4">
                                <li class="padding-15px-bottom border-bottom border-color-medium-gray">
                                    <a href="#" class="text-tussock-hover">Historical Foundation</a>
                                </li>
                                <li class="padding-15px-tb border-bottom border-color-medium-gray">
                                    <a href="#" class="text-tussock-hover text-tussock">Our Location</a>
                                </li>
                                <li class="padding-15px-tb border-bottom border-color-medium-gray">
                                    <a href="#" class="text-tussock-hover">Founder's Philosophy</a>
                                </li>
                                <li class="padding-15px-tb border-bottom border-color-medium-gray">
                                    <a href="#" class="text-tussock-hover">Vision & Mission</a>
                                </li>
                                <li class="padding-15px-tb border-bottom border-color-medium-gray">
                                    <a href="#" class="text-tussock-hover">Members of Trust</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-9">
                    @if (isset($pageData->image)) 
                     <img src="{{ asset('storage/uploads/page/' . $pageData->image) }}" class="img-fluid rounded mb-3" alt="">
                    @else
                    <img src="assets/images/about_historical_foundation.jpg" class="img-fluid rounded mb-3" alt="">
                    @endif
                    <div class="alt-font font-weight-500 my-3 d-flex">
                        <span class="flex-shrink-0 w-30px h-1px bg-tussock opacity-7 align-self-center margin-20px-right"></span>
                        <div class="flex-grow-1"><span class="text-tussock text-uppercase">{{$pageData->heading ?? 'Our Location'}}</span>
                        </div>
                    </div>
                    <h5 class="alt-font text-dark-purple font-weight-600 w-85 margin-30px-bottom xl-w-100">{{$pageData->sub_heading ?? 'Where We Are Located'}}</h5>

                   @if (isset($pageData->description))

                         {!!$pageData->description!!}
                   @else
                    <p>As one enters the city of Bhavnagar in Gujarat, one is greeted by the statue of HH Maharaja Krishna Kumar Singhji, the last ruler of the kingdom of Bhavnagar. The first to hand over his state to the union of India, he later served as the Governor of Madras. He is revered even today for his magnanimity and the era of his brilliant administration. On the right side of the statue ids his original residence, Nilambag Palace, now a heritage hotel. </p>

                    <p>On the other side is the campus of the iconic girls’ school responsible for enabling generations of young women to face the world armed with a well-rounded education. Peacocks roam freely, cherubic young faces smile, and the light of knowledge shines benignly upon the school. Amidst the old-world charm and the modern spirit of this institution, bloom many students who then carry forth the rich inheritance of tradition and progress. </p>
                 @endif
                </div>
            </div>
        </div>
    </section> 
</div>
