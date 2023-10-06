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

    <section class="half-section">
        <div class="container position-relative">
            <div class="row">
                <div class="col-lg-3 d-lg-block d-md-block d-sm-none d-none">
                    <div id="sidebarWrap">
                        <div id="sidebar">
                            <h6 class="alt-font text-dark-purple font-weight-500 w-85 xl-w-100 text-uppercase mb-0">
                        @if(session()->get('language') == 'gujrati')
                          
                          આ વિભાગમાં
                        @else        
                          In this section
                        @endif 
                          </h6>
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
<!-- show dynmaic data -->                    
@if(isset($pageData) && count($pageData)>0  )
             @foreach ($pageData as $index => $data)        
                    @if (isset($data->image)) 
                     <img src="{{ asset('storage/uploads/page/' . $data->image) }}" class="img-fluid rounded mb-3" alt="">
                    @endif
                    <div class="alt-font font-weight-500 my-3 d-flex">
                        <span class="flex-shrink-0 w-30px h-1px bg-tussock opacity-7 align-self-center margin-20px-right"></span>
                        <div class="flex-grow-1"><span class="text-tussock text-uppercase">
                  @if(session()->get('language') == 'gujrati')
                     {{$data->heading_guj ?? ''}}
                   @else                 
                    {{$data->heading ?? ''}}
                   @endif


                        </span>
                        </div>
                    </div>
                    <h5 class="alt-font text-dark-purple font-weight-600 w-85 margin-30px-bottom xl-w-100">
                  @if(session()->get('language') == 'gujrati')
                     {{$data->sub_heading_guj ?? ''}}
                  @else    
                   {{$data->sub_heading ?? ''}}
                  @endif
     
                    </h5>

                    @if (isset($data->description))

                       @if(session()->get('language') == 'gujrati')

                          {!!$data->description_guj!!}
                       @else
                         {!!$data->description!!}
 
                       @endif
                         
                   @endif 
       
     @endforeach 

@else
<!-- show static data -->
 <img src="assets/images/about_historical_foundation.jpg" class="img-fluid rounded mb-3" alt="">
                    <div class="alt-font font-weight-500 my-3 d-flex">
                        <span class="flex-shrink-0 w-30px h-1px bg-tussock opacity-7 align-self-center margin-20px-right"></span>
                        <div class="flex-grow-1"><span class="text-tussock text-uppercase">
                       @if(session()->get('language') == 'gujrati')
                        અમારી સ્થાન
                       @else   
                        Our Location
                       @endif
                        </span>
                        </div>
                    </div>
                    <h5 class="alt-font text-dark-purple font-weight-600 w-85 margin-30px-bottom xl-w-100">
                   @if(session()->get('language') == 'gujrati')
                    અમે ક્યાં સ્થિત છીએ?
                   @else   
                    Where We Are Located
                   @endif
                   

                    </h5>

                   @if(session()->get('language') == 'gujrati') 
                    <p>જ્યારે કોઈ ગુજરાતના ભાવનગર શહેરમાં પ્રવેશ કરે છે, ત્યારે તે ભાવનગરના રાજ્યના છેલ્લા શાસક એચ.એચ. મહારાજ કૃષ્ણકુમાર સિંગજીની મૂર્તિનો સ્વાગત થાય છે, જે ભાવનગર રાજ્યનો છેલ્લો શાસક હતો. તે પહેલો રાજ્યને ભારતના યુનિયન સાથે સમર્પણ કર્યો હતો, પછી મદરાસનું ગવર્નર તરીકે સેવા કર્યો હતો. તેમની વિશાળતા અને તેમના ઉત્કૃષ્ટ પ્રશાસન યુગની સન્માન્ય છે. મૂર્તિની ડાબી બાજુ તેમનો મૂળ વસતો હતો, જે હવે એક વારસી હોટેલ નામે 'નિલંબાગ પેલેસ' છે, જે વિરાસત હોટેલ તરીકે વપરાય છે. </p>

                    <p>દૂસરી બાજુએ એવી છોકરીઓની શાળાનું કૅમ્પસ છે, જે પોતાની સામગ્રી શિક્ષણ સાથે દુનિયાની સામગ્રી બનવાના યુવતીઓને સક્ષમ બનાવવા માટે જમણી છે. મોર પર પુસપી મહિલાઓ વિચર્યું છે, બાળકના છોકરાઓના ચહેરાઓ હસી, અને જ્ઞાનનો પ્રકાશ મૃદુરૂપે શાળા પર પડ્યો છે. આ સંસ્થાના જૂની જમાણી ચરમ ચર્મ અને આધુનિક આત્માનું બીચ આપતા પ્રયાસની સંગતમાં, સંપ્રદાય અને પ્રગતિનું ધન લઇ શકે છે અને પછી સ્થિતિ અને પ્રગતિનો સમૃદ્ધ વારસો વહનારા કઈ છે. </p>

                   @else
                    <p>As one enters the city of Bhavnagar in Gujarat, one is greeted by the statue of HH Maharaja Krishna Kumar Singhji, the last ruler of the kingdom of Bhavnagar. The first to hand over his state to the union of India, he later served as the Governor of Madras. He is revered even today for his magnanimity and the era of his brilliant administration. On the right side of the statue ids his original residence, Nilambag Palace, now a heritage hotel. </p>

                    <p>On the other side is the campus of the iconic girls’ school responsible for enabling generations of young women to face the world armed with a well-rounded education. Peacocks roam freely, cherubic young faces smile, and the light of knowledge shines benignly upon the school. Amidst the old-world charm and the modern spirit of this institution, bloom many students who then carry forth the rich inheritance of tradition and progress. </p>

                    @endif

                    
 @endif           
                </div>
            </div>
        </div>
    </section> 
</div>
