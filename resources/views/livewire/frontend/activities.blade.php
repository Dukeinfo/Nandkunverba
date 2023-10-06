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
                    <div class="alt-font font-weight-500 my-3 d-flex">
                        <span class="flex-shrink-0 w-30px h-1px bg-tussock opacity-7 align-self-center margin-20px-right"></span>
                        <div class="flex-grow-1"><span class="text-tussock text-uppercase">
                      @if(session()->get('language') == 'gujrati')
                        એસએનકેકે પ્રમુખ ક્રિયાઓ
                      @else      
                        Activities at SNKKV
                      @endif  
                    </span>
                        </div>
                    </div>
                    <h5 class="alt-font text-dark-purple font-weight-600 w-85 margin-30px-bottom xl-w-100">
                    @if(session()->get('language') == 'gujrati')
                      વિવિધ ક્રિયાકલાઓ
                    @else    
                        Various Activities
                    @endif
                    </h5>

                   @if(session()->get('language') == 'gujrati')
                   <p>વિદ્યાર્થીઓને શિક્ષાત્મક અને જીવનને વધારાની અનુભવો મળે છે, જે જીવનના કુશળતાઓ, સ્પર્ધાત્મક ખેલો અને સંસ્કૃતિક કાર્યક્રમો માં શામિલ છે. સ્કૂલ પણ કેમ્પસ પર બધા મુખ્ય ઉત્સવોનો આયોજન કરે છે.</p>
                   @else
                    <p>Students are exposed to various activities, which are educational and life enhancing experiences. Some of these include life skills, competitive sports and cultural programmes. The school also celebrates all major festivals on campus. </p>
                  @endif  

                    <div class="wow animate__fadeIn">
                       <!-- by default page content -->
                        <div class="row align-items-center justify-content-center">
                            <div class="col-12 col-lg-12 wow animate__fadeIn" >
                                <h6 class="alt-font font-weight-600 text-dark-purple">
                      @if(session()->get('language') == 'gujrati')
                       મિની ઓલિમ્પિક
                      @else
                        Mini Olympic
                      @endif          
                                </h6>     
                               @if(session()->get('language') == 'gujrati')
                               <p>મિની ઓલિમ્પિક આમારી આંતરરાષ્ટ્રીય ઓલિમ્પિકનું આપણું આવતું છે. વિદ્યાર્થીઓ અને શિક્ષકો તમારી સોંપેલી હવેલીઓ, અમૃતા (વાદળી હવેલી), કલ્પના (લાલ હવેલી), સરોજિની (પીળી હવેલી), અને કિરણ (લીલું હવેલી) અનુસરે પ્રતિસ્પર્ધા કરે છે. સંસ્થામાં ઓલિમ્પિકનું મોડ જેવું પેટર્ન અનુસરવો જોઈએ, તેમ ખુલ્લી સેરેમની પ્રારંભિક પ્રક્રિયા જોઈએ, અને ટ્રેક અને ફીલ્ડથી બાસ્કેટબોલ, હેન્ડબોલ, અને વોલીબોલ જેવી વિવિધ ખેલમાં દરમ્યાન આપેલી સંસ્થાઓમાં મુકાબલો રહે છે. ઓલિમ્પિક પ્રાઇઝ ડિસ્ટ્રીબ્યૂશન સેરેમની સમાપન થાય છે. આ સમયમાં વિદ્યાર્થીઓમાં આનંદ, આનંદ અને આરોગ્યની સ્પર્ધામાં ઉત્સાહ, આનંદ અને સર્વસ્વની સ્પર્ધાનો આવે છે. મિની ઓલિમ્પિકમાં વર્ષો સુધી પ્રમુખ મુખ્ય અતિથિઓ રહ્યા છે.</p>
                               @else                         
                                <p>Mini Olympic is our version of the international Olympics. The students and teachers compete according to their allotted houses, Amrita (Blue House), Kalpana (Red House), Sarojini (Yellow House) and Kiran (Green House). The institute follows the pattern of Olympics where there is an opening ceremony followed by inter-house competitions in various sports ranging from track and field to basketball, handball and volleyball. The Olympics conclude with a prize distribution ceremony. There is a spirit of excitement, joy, and healthy competition amongst students during this time. Over the years the Mini Olympic has had distinguished chief guests.</p>
                              @endif  
                            </div>
                        </div>

                        <div class="row align-items-center justify-content-center">
                            <div class="col-12 col-lg-12 wow animate__fadeIn" >
                                <h6 class="alt-font font-weight-600 text-dark-purple">
                              @if(session()->get('language') == 'gujrati')
                                    બાળ ઉત્સવ
                              @else      
                                    Baal-Utsav
                              @endif      
                                </h6>    
                               @if(session()->get('language') == 'gujrati')
                                <p>ન્યૂ એજ્યુકેશનલ પોલિસી 2020નો એક આવશ્યક ભાગ તરીકે માન્યતું છે, જેમણે વિદ્યાર્થીઓમાં શ્રેષ્ઠતા મળવી અને કલા, શિલ્પ અને રચનાત્મકતાનો તમારો રંગ ખસોડ્યો છે, જ્યારે વિવિધ લાઇવ પ્રોજેક્ટ્સનું નિર્માણ કર્યું છે જે વિદ્યાર્થીઓની જ્ઞાનને વધારવાની મદદ કરે છે અને શિક્ષણ પ્રક્રિયું આનંદમય બનાવે છે. વિદ્યાર્થીઓ અહીં આ પ્રોજેક્ટ્સ બનાવવામાં આનંદ માણે છે, કારણ કે તેમને શ્રેષ્ઠતાની સ્વાધીનતા આપવામાં આવે છે અને તેમની રચનાત્મકતાનો પૂર્ણરૂપે પરિચય મળે છે. આ ક્રિયા 2003થી શાળામાં આયોજન થઈ રહી છે.</p>
                               @else                          
                                <p>A learning based project, which is an essential part of the New Educational Policy 2020 is encouraged among the students, where students through their talent in art, craft and creativity engage in making of different live projects which enhances in students’ knowledge and makes the educational process fun. The students here enjoy making these projects as they are ultimately given their creative freedom to explore all arena. This activity has been conducted in school since 2003.</p>
                               @endif  
                            </div>
                        </div>

                        <div class="row align-items-center justify-content-center">
                            <div class="col-12 col-lg-12 wow animate__fadeIn" >
                                <h6 class="alt-font font-weight-600 text-dark-purple">
                                  @if(session()->get('language') == 'gujrati')
                                   સાંસ્કૃતિક કાર્યક્રમ
                                  @else

                                    Cultural Programme
                                  @endif  
                                </h6>  

                                 @if(session()->get('language') == 'gujrati')
                                  <p>ક્યામ્પસ પર એક સાંસ્કૃતિક કાર્યક્રમ આયોજન થતો હોય, જેમણે માત્ર ભારતના વિવિધ સાંસ્કૃતિક તત્વોનો પ્રદર્શન કરવામાં આવે છે, પરંતુ દુનિયાના આપ સાંસ્કૃતિક તત્વોનો પણ. વિદ્યાર્થીઓ મૂળભૂત અને આધુનિક વિવિધ સંગીત, નૃત્ય, વિવિધ સાઝ, તરીકેની વાદ્યયંત્રોની મહાન પ્રદર્શન કરે છે. આ ક્રિયાથી વિદ્યાર્થીઓ આપણેલું તમામ-વડીલું વ્યક્તિત્વ વિકસાવ્યું છે. </p>

                                 @else

                                <p>A cultural programme is held on campus which focuses on showcasing different cultural elements of not only India but also of the whole world. The students showcase their talent in dancing, singing, playing of different instruments which are both traditional and modern. The students develop their all-round personality with the help of this activity. </p>
                               @endif 
                            </div>
                        </div>

                        <div class="row align-items-center justify-content-center">
                            <div class="col-12 col-lg-12 wow animate__fadeIn" >
                                <h6 class="alt-font font-weight-600 text-dark-purple">
                                 @if(session()->get('language') == 'gujrati')
                                  સ્વાતંત્ર્ય દિવસ
                                 @else
                                 Independence Day
                                 @endif
                                </h6>   
                                 @if(session()->get('language') == 'gujrati')
                                <p>સંસ્થા 15મી ઓગસ્ટ સ્વાતંત્ર્ય દિવસની ઉજવણીઓમાં ભારતીય ધ્વજ ધરવા, ભારત સ્વતંત્રતા મેળવવાના મહત્વના નેતાઓનું અભિનય, રાષ્ટ્રભક્તિ ગીતો અને નૃત્યની રીતે ભાગ લેછે. </p> 
                                 @else                         
                                <p>The institute partakes in 15th August Independence Day celebrations by hoisting the Indian flag, enacting performances leaders who were instrumental in India gaining independence, singing and dancing to patriotic songs. </p>
                                @endif
                            </div>
                        </div>

                        <div class="row align-items-center justify-content-center">
                            <div class="col-12 col-lg-12 wow animate__fadeIn" >
                                <h6 class="alt-font font-weight-600 text-dark-purple">
                              @if(session()->get('language') == 'gujrati')
                               ગણરાજ્ય દિન
                              @else      
                                Republic Day
                              @endif  
                                </h6> 
                              @if(session()->get('language') == 'gujrati')
                                <p>ભારતે 26 જાન્યુઆરી 1950 ને ભારતની સંવિધાન માન્ય કર્યો અને તેમ થયો છે ત્યારેથી આ દિન ગણરાજ્ય દિન તરીકે ઉજવણી થાય છે. સંસ્થા પ્રતિ વર્ષ આ દિનનો ઉજવણી કરે છે. </p>
                              @else                              
                                <p>India accepted the Constitution of India on 26th January, 1950 and since then this day is celebrated as republic day. The institute celebrates this Day every year. </p>
                             @endif   
                            </div>
                        </div>

                        <div class="row align-items-center justify-content-center">
                            <div class="col-12 col-lg-12 wow animate__fadeIn" >
                                <h6 class="alt-font font-weight-600 text-dark-purple">
                                @if(session()->get('language') == 'gujrati')
                                  ખેલ મહાકુંભ
                                @else    
                                  Khel Mahakumbh
                                @endif  
                                </h6>   
                                @if(session()->get('language') == 'gujrati')
                                <p>ખેલ મહાકુંભ વાર્ષિકરૂપે ગુજરાત ઇન્ફોર્મેશન ઓફ સ્પોર્ટ્સ અને ટ્રેનિંગ, સ્પોર્ટ્સ યુનિવર્સિટી દ્વારા આયોજિત કરવામાં આવે છે, જેમણે વોલીબોલ, સ્વિમિંગ અને એથલેટિક્સ જેવા વિવિધ ખેલોમાં વિદ્યાર્થીઓને મુકાબલો કરવાની એક મંચ આપવામાં આવે છે. વિદ્યાર્થીઓ પ્રતિ વર્ષ આ ઘટનામાં ભાગ લે છે અને પ્રતિ વર્ષ પ્રતિયોગિતાઓમાં પ્રાઇઝ મેળવ્યો છે. </p>
                                @else                         
                                <p>TKhel Mahakumbh is organized by Gujarat Information of Sports and Training, Sports University, annually to provide students with a platform to compete in various sports such as volleyball, swimming and athletics. The students participate and secure prizes in the event every year. </p>
                                @endif
                            </div>
                        </div>

                        <div class="row align-items-center justify-content-center">
                            <div class="col-12 col-lg-12 wow animate__fadeIn" >
                                <h6 class="alt-font font-weight-600 text-dark-purple">
                                  @if(session()->get('language') == 'gujrati')
                                   કળા કુંભ
                                  @else   
                                    Kala Kumbh
                                  @endif  
                                </h6>  
                                @if(session()->get('language') == 'gujrati')
                                 <p>કળા કુંભ ગુજરાત સરકાર દ્વારા આયોજિત કરવામાં આવે છે જેનાથી વિદ્યાર્થીઓને આપણી કલાત્મક સામર્થ્યો દર્શાવવાની સન્ને મળે છે. વિદ્યાર્થીઓ આપની વિવિધ કલાઓમાં મુકાબલો કરે છે, જેમણે લોકનૃત્ય અને લોકગીત, મોનો એક્ટિંગ અને થિએટર જેવા પ્રકારની કલાઓમાં મુકાબલો કરે છે. </p>
                                @else                          
                                <p>Kala Kumbh is organized by the Government of Gujarat to provide a stage for students to demonstrate their artistic abilities. The students compete in genres such as folk dance and folk song, mono acting and theatre. </p>
                                @endif 
                            </div>
                        </div>

                        <div class="row align-items-center justify-content-center">
                            <div class="col-12 col-lg-12 wow animate__fadeIn" >
                                <h6 class="alt-font font-weight-600 text-dark-purple">
                                 @if(session()->get('language') == 'gujrati')
                                    યુવા મહોત્સવ
                                 @else   
                                    Youth Festival
                                 @endif   
                                </h6> 
                                @if(session()->get('language') == 'gujrati')
                                 <p>યુવા મહોત્સવ યુનિવર્સિટી સ્તર પર વિદ્યાર્થીઓને તેમની ભાગીદારીને ઉત્સાહીત કરવાનો માટે આયોજિત થાય છે, જેમણે લોકનૃત્ય, લોકગીત, વિવાહ ગીત, પરંપરાગત ગીત, નાટક, કલા અને ક્રાફ્ટ, અને અન્ય પ્રકારની રચનાઓમાં તેમની ભાગીદારી બઢાવવામાં આવે છે. મહારાજા કૃષ્ણકુમાર સિંહ યુનિવર્સિટી (MKBU) સાથે જોડાયેલ કોલેજો આ મહોત્સવમાં ભાગ લે છે અને અમારા વિદ્યાર્થીઓ ગરબા, નાટક, કલા અને ક્રાફ્ટ, ગ્રૂપ ગીત જેવી વિવિધ પ્રતિયોગિતાઓમાં પ્રાઇઝ મેળવ્યા છે.  </p>
                                @else                           
                                <p>Youth festival is held for the students at university level to encourage their participation in various talent-based activities such as folk dances, folk songs, marriage songs, traditional songs, dramatics, art and craft etc. Colleges affiliated with Maharaja Krishna Kumar Sinh University (MKBU) compete in this festival and we are proud that are students have secured prizes in a range of competitions such as garba, dramatics, art and craft, group songs.  </p>
                               @endif 
                            </div>
                        </div>

                        <div class="row align-items-center justify-content-center">
                            <div class="col-12 col-lg-12 wow animate__fadeIn" >
                                <h6 class="alt-font font-weight-600 text-dark-purple">
                                 @if(session()->get('language') == 'gujrati')
                                    ખેલો
                                 @else    
                                    Games
                                 @endif   
                                </h6>   
                                @if(session()->get('language') == 'gujrati')
                                <p>સંસ્થા વિદ્યાર્થીઓની ધાડ વિદ્યાન, વોલીબોલ, હેન્ડબોલ, અને બાસ્કેટબોલમાં શાક્તિશાળી ખેલાડીઓની પ્રશિક્ષણને પ્રોત્સાહિત કરે છે. વિદ્યાર્થીઓ મુકાબલોના પ્રમુખ પ્રદેશ, રાજ્ય અને જાહેર સ્તરે સંસ્થાનું પ્રતિષ્ઠાન રજુ કરે છે. આ પ્રતિસ્પર્ધાઓ વિદ્યાર્થીઓને વિવિધ પ્રકારની શિક્ષાની મંજૂરી પણ મેળવવાની મંજૂરી આપે છે.  </p>
                                @else                         
                                <p>The institute encourages intensive sports training of the students in athletics, volleyball, handball, basketball. The students represent the institute at district, state and national level. These competitions also allow students to secure a range of scholarships.  </p>
                               @endif 
                            </div>
                        </div>

                        <div class="row align-items-center justify-content-center">
                            <div class="col-12 col-lg-12 wow animate__fadeIn" >
                                <h6 class="alt-font font-weight-600 text-dark-purple">
                                @if(session()->get('language') == 'gujrati')
                                    કથક
                                @else    
                                    Kathak
                                @endif    
                                </h6>  

                                 @if(session()->get('language') == 'gujrati')
                                  <p>પ્રતિદિન કેમ્પસ પર એક પ્રશિક્ષિત શાસ્ત્રીય નૃત્યકાર દ્વારા કથક વ્યાયામ કાર્યક્રમો આયોજિત થાય છે. વિદ્યાર્થીઓને પ્રતિસ્પર્ધાઓ અને પરીક્ષણો માટે નોંધણીઓ મેળવવાનો સુયોગ મળે છે. </p>
                                 @else                          
                                <p>Daily kathak classes are conducted on campus by a trained classical dancer. Students have the opportunity to enrol for competitions and examinations. </p>
                                @endif
                            </div>
                        </div>
                        <div class="row align-items-center justify-content-center">
                            <div class="col-12 col-lg-12 wow animate__fadeIn" >
                                <h6 class="alt-font font-weight-600 text-dark-purple">
                           @if(session()->get('language') == 'gujrati')
                            કરાટે
                           @else
                             Karate
                           @endif         
                                </h6>
                              @if(session()->get('language') == 'gujrati')
                                <p>આત્મ-રક્ષણ મહત્વપૂર્ણ છે અને અમારી છોકરીઓને તેમની રક્ષા કરવાનો પ્રશિક્ષણ આપે છે. કરાટે તેમની ઊર્જાનો એક માધ્યમ છે અને તેમને કેમ્પસના સંરક્ષણાત્મક દીવારો પર પરિપ્રેક્ષ્યમાં પ્રશાસન કરે છે.</p>
                              @else                               
                                <p>Self-defense is paramount and our girls are trained to protect themselves. Karate is an outlet to their energy and empowers them beyond the protective walls of the campus.</p>
                             @endif   
                            </div>
                        </div>
                        <div class="row align-items-center justify-content-center">
                            <div class="col-12 col-lg-12 wow animate__fadeIn" >
                                <h6 class="alt-font font-weight-600 text-dark-purple">
                              @if(session()->get('language') == 'gujrati')
                                સવરન
                              @else
                                    Swimming
                              @endif      
                                </h6> 

                             @if(session()->get('language') == 'gujrati')
                               <p>વિશેષ કરીને તે વિદ્યાર્થીઓ જે હોસ્ટલમાં રહે છે, તેમને પ્રશિક્ષિત અધ્યાપકો દ્વારા નીલાંબાગ પેલેસના સ્વિમિંગ પૂલમાં સ્વિમ કરવાની શીખવવામાં આવે છે. તે વિદ્યાર્થીઓ જે આ ખેલમાં રુચિ વક્તી કરે છે, તેમને વિવિધ સ્તરો માટે મુકાબલો કરવાની સ્થળ અને પ્રશિક્ષણ પણ આપવામાં આવે છે.  </p>
                             @else                              
                                <p>Students especially those residing in the hostel learn how to swim at the Nilambag Palace swimming pool by trained instructors. Students who show an interest in the sport are even provided the platform and training to compete at for various levels.  </p>
                             @endif    
                            </div>
                        </div>
                        <div class="row align-items-center justify-content-center">
                            <div class="col-12 col-lg-12 wow animate__fadeIn" >
                                <h6 class="alt-font font-weight-600 text-dark-purple">
                                  @if(session()->get('language') == 'gujrati')
                                  રાઇફલ શૂટિંગ
                                  @else   
                                    Rifle Shooting
                                  @endif  
                                </h6>     
                              @if(session()->get('language') == 'gujrati')
                                <p>ખાસ કરીને તે વિદ્યાર્થીઓને જે હોસ્ટલમાં રહે છે, તેમને એક ઇન્ડોર શૂટિંગ રેંજમાં રાઇફલ શૂટિંગ શીખવાની સુયોગ આપવામાં આવે છે. શૂટ કરવાની માટે શીખવવામાં આવતી વખતે માનસિક અને કોન્સન્ટ્રેશન કૌશલ્યો મહેનત કરી શકે છે. </p>
                              @else                         
                                <p>Students especially those residing in the hostel are given the opportunity to learn rifle shooting in an indoor shooting range. Cognitive and concentration skills are enhanced while learning to shoot. </p>
                              @endif  
                            </div>
                        </div>
                        <div class="row align-items-center justify-content-center">
                            <div class="col-12 col-lg-12 wow animate__fadeIn" >
                                <h6 class="alt-font font-weight-600 text-dark-purple">
                                 @if(session()->get('language') == 'gujrati')
                                    મોટર ડ્રાઈવિંગ
                                 @else   
                                    Motor Driving
                                 @endif   
                                </h6>   

                                @if(session()->get('language') == 'gujrati')
                                <p>કોલેજના વિદ્યાર્થીઓને મોટર ચાલવવાની સુયોગ આપવામાં આવે છે. આ મહત્વપૂર્ણ જીવન કૌશલ, પ્રોફેશનલ મોટર ડ્રાઇવિંગ પ્રશિક્ષક દ્વારા કેમ્પસમાં શીખવવામાં આવે છે. વિદ્યાર્થીઓ પણ અમલીની પરીક્ષાઓ આપે છે અને સફળ પૂર્ણ કર્યા પછી તેમનું લાયસન્સ મેળવવામાં આવે છે.</p>
                                @else                         
                                <p>College students have the opportunity to learn how to drive. An important life skill, driving is taught in the campus by a professional Motor Driving instructor. Students also appear for the practical examinations and receive their license upon successful completion.</p>
                               @endif 
                            </div>
                        </div>
                        <div class="row align-items-center justify-content-center">
                            <div class="col-12 col-lg-12 wow animate__fadeIn" >
                                <h6 class="alt-font font-weight-600 text-dark-purple">
                                @if(session()->get('language') == 'gujrati')
                                   સેમિનાર
                                @else      
                                    Seminars
                                @endif    
                                </h6> 

                                @if(session()->get('language') == 'gujrati')
                                <p>સંસ્થાના વિદ્યાર્થીઓ ઘણા સંવિદાનિક સેમિનારોમાં રૂચિ રખે છે, જેમણાં માર્ગદર્શન સેમિનાર, માસિક સ્વચ્છતા સેમિનાર, મહિલા આરોગ્ય સેમિનાર, કરિયર સ્થિતિઓ વિશે સેમિનારો અને અન્ય સમાચારો છે. કોલેજના વિદ્યાર્થીઓ કોલેજ અને ભાવનગર યુનિવર્સિટી પરથી યોગ્યતા પ્રાપ્ત કરવામાં આવે છે. </p>
                                <p>આ સેમિનારોને વિવિધ વિભાગો દ્વારા આયોજિત કરવામાં આવે છે અને તેમનાં વિષયોમાં સાયબર ક્રાઇમ, મહિલાઓની સુરક્ષા માટેના કાયદા, મહિલા સશક્તિ વગેરે સમાવિષ્યાંમાં શામેલ છે. </p>
                                @else                           
                                <p>The students of the institute are often engaged in various seminars which include guidance seminars, menstrual hygiene seminars, women health seminars, seminars on career opportunities etc. The students of college attend a combination of seminars held at the college as well as at Bhavnagar University. </p>
                                <p>The seminars are organised by various departments and include topics like cybercrime, laws for the safety of women, women empowerment etc. </p>
                               @endif 
                            </div>
                        </div>
                        <div class="row align-items-center justify-content-center">
                            <div class="col-12 col-lg-12 wow animate__fadeIn" >
                                <h6 class="alt-font font-weight-600 text-dark-purple">
                                 @if(session()->get('language') == 'gujrati')
                                   પેપર પ્રસ્તુતિ
                                 @else   
                                    Paper Presentation
                                 @endif   
                                </h6>  

                                 @if(session()->get('language') == 'gujrati')
                                <p>કોલેજના વિદ્યાર્થીઓ ઘણી વાર યુનિવર્સિટીમાં યોજાયેલ પેપર પ્રસ્તુતિ પ્રતિયોગિતામાં ભાગ લે છે, આ ભાગ્ય છે કે તેમ પ્રાથમિક સંશોધન અને પેપર પ્રસ્તુતિનો આદર કરે છે. વિદ્યાર્થીઓને તેમની પ્રસ્તુતિ માટે સંસ્થાના શિક્ષકો દ્વારા સક્રિય માર્ગદર્શન મળે છે. </p>
                                 @else                          
                                <p>The students of college often engage in paper presentation competition held at university, the advantage of the participation is that they learn the idea and methods of research and paper presentation. The students are actively guided by the faculty for their presentations. </p>
                                @endif
                            </div>
                        </div>
                        <!--end by default page content -->  
                    </div>                    
                </div>
            </div>
        </div>
    </section>
</div>
