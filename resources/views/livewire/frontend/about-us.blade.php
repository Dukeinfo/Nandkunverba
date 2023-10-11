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

                      @if($pageTitle)
                         <li>
                            @if(session()->get('language') == 'gujrati')
                            {{Str::title( $pageTitle->pname_guj) }}
                            @else
                            {{Str::title( $pageTitle->pname_eng) }}
                            @endif
                        </li>
                      @endif 
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
                        અમારી વિરાસત
                       @else   
                        OUR LEGACY
                       @endif
                        </span>
                        </div>
                    </div>
                    <h5 class="alt-font text-dark-purple font-weight-600 w-85 margin-30px-bottom xl-w-100">
                   @if(session()->get('language') == 'gujrati')
                    ઐતિહાસિક આધાર
                   @else   
                    Historical Foundation
                   @endif
                   

                    </h5>

                   @if(session()->get('language') == 'gujrati') 
                    <p> શ્રી નંદકુંવરબા ક્ષત્રીય કન્યા વિદ્યાલય" એ 1917માં ભાવનગરની મરણ હુઈ HH મહારાણી શ્રી નંદકુંવરબા શ્રી ભવસિંહજી સાહેબ અને તેમના પતિ શ્રી ભવસિંહજી સાહેબ એ એક મોદર્ન, અગ્રગતિપૂર્ણ રાજ્ય બનાવ્યો હતો. એવા "પુરડા સિસ્ટમ" ના અને આજ્ઞાપત્રિ સમયનું એવા એક યુગ માં, આ પુરડા સિસ્ટમ"ને ખત્મ કરવાનો સોચિયો અને ભાવનગર ની મહિલાઓને શિક્ષા મળવી આવ્યું અને એવું એક પરિવર્તન અને સુધારણાઓનો યુગ લાવ્યો.

શરૂઆતમાં, આમાંને "શ્રી નંદકુંવરબા ઝનાના બોર્ડિંગ" તરીકે ઓળખવામાં આવ્યો હતો. પછી HH મહારાજ શ્રી કૃષ્ણકુમાર સિંગજી એ 1951માં આ વિદ્યાલયને મુકાબલા કરવાનો નિર્ણય લઈ, અને તેનું નામ "શ્રી નંદકુંવરબા ક્ષત્રીય કન્યા વિદ્યાલય" રાખ્યું. આ વિદ્યાલયનો ઉદ્ઘાટન HH મહારાજ શ્રી દિગ્વિજય સિંગજી, સૌરાષ્ટ્ર રાજ્યની મુખ્ય કર્ણાવતાર, 1951ના 25 માર્ચની તારીખે કરી.</p>

                    <p> આ જમીન અને સંસાધનો ને HH મહારાજ કૃષ્ણ કુમાર સિંહજી દ્વારા દાન કર્યા હતા અને આ વિદ્યાલયને તેની વિકાસની દિશા સ્થાપવામાં આવી હતી. દશ વર્ષ પછી, તે પદની અધિક્ષેપ થયો અને HH મહારાજ સાહેબ તોતે ટ્રસ્ટનો કમિટી પ્રમુખનો મોકોબો લીધો અને ભાવનગરની તમામ બેટીઓને દરવાજો ખોલવા નિર્ણય કર્યો, જે એક ધાર્મિકતાનું શ્રેષ્ઠ ઉદાહરણ બન્યું.</p>

                    <p>પછી, HH મહારાણી સાહેબા બ્રિજરાજ નંદિની દેવી આ વિદ્યાલયનું વૃદ્ધિ અને સુધારણાની દિશામાં વધુ આગળ ઘસ્યું હતું, અને તેમનું વિરાસ તેમની છે. તેની વિરાસને હાલની ટ્રસ્ટની મુખ્ય અધ્યક્ષ HH મહારાણી સાહેબા સમ્યુક્તા કુમારી દ્વારા આગળ લઈ જાય છે. </p>

                    <p>આ ટ્રસ્ટ ગુજરાતી અને ઇંગ્લિશ મીડિયમ દ્વારા પ્રાથમિક, મિડલ સ્કૂલ અને માધ્યમિક શાળાઓનું શિક્ષણ આપે છે. 2016 માં યહોના એક આર્ટ્સ અને કોમર્સ કોલેજનું લેખાશાસ્ત્ર અને વાણિજ્ય માંથી શિક્ષણ આપવામાં આવ્યું હતું, જેથી આમાંની છોકરીઓને અનેક વધુ અધ્યયનની સૌથીક સ્થાન મળ્યો છે. </p>

                   @else
                    <p>Shri Nandkunverba Kshatriya Kanya Vidyalaya was founded in the year 1917 by the late HH Maharani Saheba Shri Nandkunverba Saheb of Bhavnagar. Her husband the late HH Maharaja Bhavsinghji Saheb and she were a pathbreaking couple who developed Bhavnagar into a modern, progressive kingdom. In an era of "purdah system" for all Rajput women, this foresighted Maharani abolished it for the women of Bhavnagar and decided to educate the girls of the community. Thus, ushering in an era of change and reform. Initially, our institute was known as "Shri Nandkunverba Zanana Boarding". The sudden and tragic demise of Maharani Saheba in 1918 and Maharaja Saheb in 1919 left the institute bereft, following which it was run by the State Council Administration until the year 1927. It was in 1951 that HH Maharaja Shri Krishna Kumar Singhji restarted the school, changing the name to Shri Nandkunverba Kshatriya Kanya Vidyalaya. The school was inaugurated by HH Maharaja Saheb Shri Digvijay Singhji of Jamnagar, the Head of Saurashtra State on 25th March 1951. </p>

                    <p>The land and the resources were donated by HH Maharaja Krishna Kumar Singhji and the school was set on its path of development under the Presidentship of his wife Maharani Vijayaba Saheb. Ten years down the line, she relinquished the post and Maharaja Saheb took the reins of the Trust himself and decided to open the doors to all the daughters of Bhavnagar, making it a prime example of secularism.</p>

                    <p>Thereafter, HH Maharani Saheba Brijraj Nandini Devi further pushed the school towards growth and improvement, and her legacy is being carried forward by her daughter-in-law Maharani Saheba Samyukta Kumari, the current President of the Trust.</p>

                    <p>The Trust offers a primary, a middle school and a secondary school education in both Gujarati as well as in English Medium. The year 2016 has seen the landmark opening of an Arts and Commerce College on the campus, thus offering our girls the opportunity to study further.</p>

                    @endif

                    
 @endif           
                </div>
            </div>
        </div>
    </section> 
</div>
