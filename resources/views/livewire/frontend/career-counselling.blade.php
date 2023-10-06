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
@if(isset($pageData) && count($pageData)>0  )
             @forelse ($pageData as $index => $data)         
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
                         ગાઇડન્સ અને કાઉન્સલિંગ
                     @else
                        Guidance & Counselling
                     @endif
                      </span>
                        </div>
                    </div>
                    <h5 class="alt-font text-dark-purple font-weight-600 w-85 margin-30px-bottom xl-w-100">
                   @if(session()->get('language') == 'gujrati')
                    કૅરિયર કાઉન્સલિંગ
                   @else
                    Career Counselling
                   @endif 
                  </h5>

                  @if(session()->get('language') == 'gujrati')

                   <p>SNKKV પર, અમે એક બાળકને જીવન માટે તૈયાર કરવામાં માન્યતા આપીશું છું. આમણે એવું કરિયર કાઉન્સલિંગ પ્રદાન કરવાની માંગ કરી છે કે એક બાળક તેમની તાકતો અને દુર્બળતાઓ સમજી શકે અને તેમનો કરિયર માર્ગ આસાનીથી પસંદ કરી શકે. 'MAA' ફાઉન્ડેશન, એક ચેરીટેબલ સંસ્થા, જે શિક્ષણ સેક્ટરમાં સુધારા લાવવા માટે મૂળ સ્તરે કામ કરે છે, દ્વારા એક વિસ્તારપૂર્ણ કરિયર વર્કશોપ આયોજવામાં આવ્યો છે.

10મું ધોરણના વિદ્યાર્થીઓ એપ્ટિટ્યૂડ ટેસ્ટ આપ્યો છે, જે તેમને તેમની તાકતો અને દુર્બળતાઓ સમજવામાં મદદ કરે છે. આ ટેસ્ટને આધાર બનાવીને, વિદ્યાર્થીઓને તેમની 11મી અને 12મી ગ્રેડ વિષયો પર માર્ગદર્શન આપવામાં આવે છે.

12મી અને કોલેજના વિદ્યાર્થીઓ માટે, સંસ્થાની દ્વારા માર્ગદર્શિત કાર્યશાળાઓ આયોજવામાં આવે છે. આ કાર્યશાળાઓ વિવિધ કરિયર સુધાર </p>
                    <p>માનક 10ના વિદ્યાર્થીઓ એક એપ્ટિટ્યૂડ ટેસ્ટ આપે છે, જે તેમને સમજવામાં મદદ કરે છે કે તેમની તાકતો અને દુર્બળતાઓ ક્યારેય માં છે. આ ટેસ્ટને આધાર બનાવીને, વિદ્યાર્થીઓને તેમની 11મી અને 12મી ગ્રેડ વિષયો પર માર્ગદર્શન આપવામાં આવે છે.  </p>
                    <p>12મી અને કોલેજના વિદ્યાર્થીઓ માટે, સંસ્થાની દ્વારા માર્ગદર્શિત કાર્યશાળાઓ આયોજવામાં આવે છે. આ કાર્યશાળાઓમાં વિવિધ કરિયર સુધારોની વિભિન્ન સંવિદાનો, જેમ કે અરજી કરવી માટેની માર્ગ અને અનેક અપ્લાય કરવાનો તરીકો વિશે ચર્ચા કરવામાં આવે છે. </p>
                    <p>વિદ્યાર્થીઓ, તેમણે તેમની પસંદગીની નોકરીઓને મોક ઇન્ટરવ્યૂ આપવામાં આવ્યા છે, જે તેમને આપણી પસંદગીની નોકરીઓ મેળવવાની મદદ કરે છે અને તેમને એક આકર્ષક સ્થિતિમાં વાત કરવી અને તેમનું વર્ચ્યુઅલપુર્ણ રહેવું આપે છે. આ મોક ઇન્ટરવ્યૂ તેમને આપણી પસંદગીની નોકરીઓને મેળવવામાં મદદ કરે છે અને તેમને એક આકર્ષક સ્થિતિમાં વાત કરવી અને તેમનું વર્ચ્યુઅલપુર્ણ રહેવું આપે છે.</p>

                  @else

                    <p>At SNKKV, we believe in preparing a child for life. This includes providing professional career counselling in order to help a child understand their strengths and weaknesses and choose their career paths with ease. A comprehensive career workshop is conducted by 'MAA' Foundation, a charitable organization, which is working at the grass-root level to bring reforms in the education sector. </p>
                    <p>The students of Standard 10 take an aptitude test, which helps them understand which subjects they would inherently be good at. Based on this test, students are guided on their 11th and 12th grade subjects.  </p>
                    <p>For students of Standard 12 and College, guided workshops are organized by the institution. These workshops discuss the various career opportunities, which can be pursed and the way to go about applying for them. </p>
                    <p>Students in their final year of Bachelors as well as Masters sit through mock interviews. These prepare them for securing the jobs of their choices and give them the confidence to speak and conduct themselves in a formal setting.</p>
                  @endif  
@endif                   
                </div>
            </div>
        </div>
    </section>
</div>
