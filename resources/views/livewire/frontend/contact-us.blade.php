<div>
     @php
$getRouteName =  Route::currentRouteName();
$pageHeading =  App\Models\PageHeading::where('status','Active')->where('pname',$getRouteName )->first(); 
@endphp
    <!-- start section -->
    <section class="parallax bg-extra-dark-gray p-0" data-parallax-background-ratio="0.5"
        style="background-image:url('assets/images/parallaxbg_header.jpg');">
        <div class="container">
            <div class="row justify-content-center">
                <div
                    class="col-12 col-lg-9 text-center full-screen d-flex flex-column justify-content-center padding-8-rem-tb md-landscape-h-600px">
                    <span
                        class="alt-font letter-spacing-5px text-white text-uppercase font-weight-500 margin-35px-bottom">
                        @if($pageHeading)
                          @if(session()->get('language') == 'gujrati')
                          {{$pageHeading->pname_title_guj}}
                          @else
                          {{$pageHeading->pname_title}}
                          @endif
                        @endif
                    </span>
                    <h1
                        class="alt-font font-weight-700 title-large text-shadow-double-large text-white text-uppercase mb-0 letter-spacing-minus-4px margin-4-half-rem-bottom sm-no-text-shadow sm-letter-spacing-minus-1-half">

@if(session()->get('language') == 'gujrati')
                        <span class="text-border text-border-width-2px">
                        @if($pageHeading)
                        {{$pageHeading->pname_heading_guj}}
                        @endif     
                        </span><br /> 
                        @if($pageHeading)
                        {{$pageHeading->pname_subheading_guj}}
                        @endif</h1>

@else
                        <span class="text-border text-border-width-2px">
                        @if($pageHeading)
                        {{$pageHeading->pname_heading}}
                        @endif     
                        </span><br /> 
                        @if($pageHeading)
                        {{$pageHeading->pname_subheading}}
                        @endif</h1>

@endif

                </div>
            </div>
        </div>
    </section>
    <!-- end section -->

@php
$getRouteName =  Route::currentRouteName();
$pageTitle =  App\Models\PageHeading::where('status','Active')->where('pname',$getRouteName )->first(); 
@endphp
  <!-- start page title -->
      <section class="wow animate__fadeIn bg-seashell padding-30px-tb sm-padding-20px-tb page-title-small">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-xl-8 col-lg-6 text-center text-lg-start">
                    <h1 class="alt-font text-extra-dark-gray font-weight-500 no-margin-bottom d-inline-block">
@if($pageTitle)
 @php
  $menuName =  App\Models\Menu::where('status','Active')->where('id',$pageTitle->menu_id )->first();
 @endphp     

         @if(session()->get('language') == 'gujrati')
              @if($menuName->id!=1)
                  {{ $menuName->name_guj}}
                @else
                  {{Str::title( $pageTitle->pname_guj) }}
                @endif
         @else
                @if($menuName->id!=1)
                  {{ $menuName->name}}
                @else
                  {{Str::title( $pageTitle->pname_eng) }}
                @endif
         @endif          
@endif
                    </h1>
                </div>
 
                <div
                    class="col-xl-4 col-lg-6 text-center text-lg-end breadcrumb justify-content-center justify-content-lg-end text-small alt-font md-margin-15px-top">
                    <ul>
                         @if(session()->get('language') == 'gujrati')
                           <li><a href="{{url('/')}}">ઘર</a></li>
                         @else
                         <li><a href="{{url('/')}}">Home</a></li>
                        @endif
           
                        @if($pageTitle) 
                            @if($pageTitle->menu_id!=1)    
                             <li><a href="javascript:void()">
                             @if(session()->get('language') == 'gujrati')
                              {{$pageTitle->Menu->name_guj}}
                             @else 
                                {{$pageTitle->Menu->name}}
                             @endif   
                             </a></li>
                            @endif
                        @endif

                         <li>
                            @if(session()->get('language') == 'gujrati')
                            {{Str::title( $pageTitle->pname_guj) }}
                            @else
                            {{Str::title( $pageTitle->pname_eng) }}
                            @endif
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
<!-- end page title -->
 
    <section>
        <div class="container">
            <div class="row row-cols-1 row-cols-lg-4 row-cols-sm-2">
                <!-- start feature box item -->
                <div class="col md-margin-50px-bottom sm-margin-30px-bottom">
                    <div class="feature-box text-center">
                        <div class="feature-box-icon">
                            <i class="line-icon-Geo2-Love font-weight-600 icon-extra-medium text-tussock margin-30px-bottom md-margin-15px-bottom sm-margin-10px-bottom"></i>
                        </div>
                        <div class="feature-box-content last-paragraph-no-margin">
                            <span class="alt-font font-weight-500 margin-10px-bottom d-block text-extra-dark-gray text-small text-uppercase">Locate Us</span>
                            <p class="d-inline-block w-70 lg-w-90 md-w-60 sm-w-80 xs-w-100">Nilambaug Circle, Devbagh, Bhavnagar, Gujarat 364002</p>
                        </div>
                    </div>
                </div>
                <!-- end feature box item -->
                <!-- start feature box item -->
                <div class="col md-margin-50px-bottom sm-margin-30px-bottom">
                    <div class="feature-box text-center">
                        <div class="feature-box-icon">
                            <i class="line-icon-Headset font-weight-600 icon-extra-medium text-tussock margin-30px-bottom md-margin-15px-bottom sm-margin-10px-bottom"></i>
                        </div>
                        <div class="feature-box-content last-paragraph-no-margin">
                            <span class="alt-font font-weight-500 margin-10px-bottom d-block text-extra-dark-gray text-small text-uppercase">Let's Talk</span>
                            <p>Phone: +91 9876543210<br>Fax: 1-800-222-002</p>
                        </div>
                    </div>
                </div>
                <!-- end feature box item -->
                <!-- start feature box item -->
                <div class="col xs-margin-30px-bottom">
                    <div class="feature-box text-center">
                        <div class="feature-box-icon">
                            <i class="line-icon-Mail-Read font-weight-600 icon-extra-medium text-tussock margin-30px-bottom md-margin-15px-bottom sm-margin-10px-bottom"></i>
                        </div>
                        <div class="feature-box-content last-paragraph-no-margin">
                            <span class="alt-font font-weight-500 margin-10px-bottom d-block text-extra-dark-gray text-small text-uppercase">E-mail Us</span>
                            <p><a href="mailto:info@yourdomain.com" class="text-sky-blue-hover">info@yourdomain.com</a><br><a href="mailto:hr@yourdomain.com" class="text-light-blue text-sky-blue-hover">hr@yourdomain.com</a></p>
                        </div>
                    </div>
                </div>
                <!-- end feature box item -->
                <!-- start feature box item -->
                <div class="col">
                    <div class="feature-box text-center">
                        <div class="feature-box-icon">
                            <i class="line-icon-Information font-weight-600 icon-extra-medium text-tussock margin-30px-bottom md-margin-15px-bottom sm-margin-10px-bottom"></i>
                        </div>
                        <div class="feature-box-content last-paragraph-no-margin">
                            <span class="alt-font font-weight-500 margin-10px-bottom d-block text-extra-dark-gray text-small text-uppercase">Admission Enquiry</span>
                            <p>Phone: +91 9876543210<br>Fax: 1-800-222-002</p>
                        </div>
                    </div>
                </div>
                <!-- end feature box item -->
            </div>
        </div>
    </section>

    <section class="wow animate__fadeIn bg-seashell">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-lg-10">
                    <div class="row justify-content-center">
                        <div class="col-12 col-xl-6 col-lg-7 text-center margin-4-half-rem-bottom md-margin-3-rem-bottom">
                            <span class="alt-font letter-spacing-minus-1-half text-extra-medium d-block margin-5px-bottom">Fill out the form and we'll be in touch soon!</span>
                            <h4 class="alt-font font-weight-600 text-extra-dark-gray">How we can help you?</h4>
                        </div>
                        <div class="col-12">
                            <!-- start contact form -->
                            <form wire:submit.prevent="send">
                                <div class="row row-cols-1 row-cols-md-2">
                                    <div class="col margin-4-rem-bottom sm-margin-25px-bottom">
                                        <input class="medium-input bg-white margin-25px-bottom" type="text" wire:model="name" placeholder="Your name">
                                         @error('name') <span class="text-danger">{{ $message }}</span> @enderror
                                        <input class="medium-input bg-white margin-25px-bottom" type="email" wire:model="email" placeholder="Your email address">
                                         @error('email') <span class="text-danger">{{ $message }}</span> @enderror
                                        <input class="medium-input bg-white mb-0" type="tel" wire:model="phone" placeholder="Your mobile">
                                         @error('phone') <span class="text-danger">{{ $message }}</span> @enderror
                                    </div>
                                    <div class="col margin-4-rem-bottom sm-margin-10px-bottom">
                                        <textarea class="medium-textarea h-200px bg-white" wire:model="message" placeholder="Your message"></textarea>
                                         @error('message') <span class="text-danger">{{ $message }}</span> @enderror
                                    </div>
                                    <div class="col text-start sm-margin-30px-bottom">
                                        <input type="checkbox" wire:model="terms_condition" id="terms_condition" value="1" class="terms-condition d-inline-block align-top w-auto mb-0 margin-5px-top margin-10px-right">
                                        @error('terms_condition') <span class="text-danger">{{ $message }}</span> @enderror
                                        <label for="terms_condition" class="text-small d-inline-block align-top w-85">I accept the terms & conditions and I understand that my data will be hold securely in accordance with the <a href="javascript:void()" target="_blank" class="text-decoration-underline text-extra-dark-gray">privacy policy</a>.</label>
                                    </div>
                                     
                                    <div class="col text-center text-md-end">
                                        <button class="btn btn-fancy btn-medium btn-tussock" type="submit">Send Message</button>
                                    </div>
                                    <!-- show message -->
                                     @if (session()->has('success'))
                                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                                <i class="mdi mdi-check-all me-2"></i>
                                                {{ session('success') }}
                                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                            </div>
                                            @endif
                                </div>
                                <div class="form-results d-none"></div>
                            </form>
                            <!-- end contact form -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="padding-100px-tb md-padding-75px-tb sm-padding-50px-tb wow animate__fadeIn">
        <div class="container">
            <div class="row justify-content-center align-items-center">
                <div class="col-12 col-xl-3 col-lg-4 col-md-5 col-sm-6 text-center text-sm-end xs-margin-20px-bottom">
                    <span class="alt-font font-weight-500 text-extra-large text-extra-dark-gray d-block letter-spacing-minus-1-half">Connect with social media</span>
                </div>
                <div class="col-12 col-md-2 d-none d-md-block">
                    <span class="w-100 h-1px d-block bg-medium-gray"></span>
                </div>
                <div class="col-12 col-xl-3 col-lg-4 col-md-5 col-sm-6 social-icon-style-02 text-center text-sm-start">
                    <ul class="small-icon">
                        <li><a class="facebook text-extra-dark-gray text-sm-start" href="https://www.facebook.com/" target="_blank"><i class="fab fa-facebook-f fa-lg"></i></a></li>
                        <li><a class="twitter text-extra-dark-gray text-sm-start" href="http://www.twitter.com/" target="_blank"><i class="fab fa-twitter fa-lg"></i></a></li>
                        <li><a class="instagram text-extra-dark-gray text-sm-start" href="http://www.instagram.com/" target="_blank"><i class="fab fa-instagram fa-lg"></i></a></li>
                        <li><a class="youtube text-extra-dark-gray text-sm-start" href="http://www.linkedin.com/" target="_blank"><i class="fab fa-youtube fa-lg"></i></a></li>

                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section class="p-0 wow animate__fadeIn">
        <div class="container-fluid">
            <div class="row">
                <div class="col h-600px p-0 md-h-450px xs-h-300px">
                    

                    <iframe class="w-100 h-100" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14821.379508224436!2d72.1340502!3d21.7669095!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x395f50863a6ded99%3A0xaf75d7d01ffd9bc5!2sNandkuverba%20Kshatriya%20Kanya%20Vidhyalaya!5e0!3m2!1sen!2sin!4v1693996969145!5m2!1sen!2sin" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
    </section>
 </div>
