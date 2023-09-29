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
            <span class="text-border text-border-width-2px">News</span><br /> & Events</h1>
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
        <h1 class="alt-font text-extra-dark-gray font-weight-500 no-margin-bottom d-inline-block">News and Events
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
            <li>News and Events</li>
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
        <h5 class="alt-font text-dark-purple font-weight-600 w-85 margin-30px-bottom xl-w-100">News and Events</h5>
        

        <div class="row justify-content-center">
            <div class="col-12 col-lg-12 col-md-12">
                <div class="panel-group accordion-event accordion-style-03" id="accordion3" data-active-icon="fa-angle-down" data-inactive-icon="fa-angle-right">
@php
$monthyear = App\Models\BoardMembers::where('status', 'Active')->groupBy(['month', 'year'])->get();              
@endphp                 

          @if(isset($monthyear) && count($monthyear)>0  )
                @foreach($monthyear as $key => $record)   
                    <!-- start accordion item -->
                    <div class="panel bg-white border-radius-5px wow animate__fadeIn">
                        <div class="panel-heading active-accordion">
                            <a class="accordion-toggle collapsed" data-bs-toggle="collapse" data-bs-parent="#accordion3" href="#accordion-style-03-01" aria-expanded="false">
                                <div class="panel-title">
                                    <span class="alt-font font-weight-600 d-inline-block text-extra-dark-gray letter-spacing-minus-1px" style="font-size: 40px;"><span class="text-border text-border-color-black text-border-width-1px opacity-3 text-uppercase">{{$record->month}}</span> {{$record->year}}</span>
                                    <i class="indicator fas fa-angle-down text-extra-dark-gray icon-extra-small"></i>
                                </div>
                            </a>
                        </div>
                        <div id="accordion-style-03-01" class="panel-collapse collapse show" data-bs-parent="#accordion3">
                            <div class="panel-body">
                                <div class="table-responsive">
                                    <table class="table table-flush w-100">
                                        <thead>
                                            <tr>
                                                <th width="20%">Date</th>
                                                <th>Particulars</th>
                                            </tr>
                                        </thead>
                                        <tbody>
@php
$newsevents = App\Models\BoardMembers::where('status', 'Active')->where('month', $record->month)->get();              
@endphp                 

 @if(isset($newsevents) && count($newsevents)>0  )
                @foreach($newsevents as $key => $news)
            <tr>
                <td>{{ \Carbon\Carbon::parse($news->dated)->isoFormat('MMM Do YYYY')}}</td>
                
                <td>{{$news->heading}}</td>
            </tr>
          @endforeach                  
               @endif                                   
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end accordion item -->
         @endforeach                  
               @endif              
                   
                   
                </div>
            </div>
        </div>
        
    </div>
</div>
</div>
</section> 
</div>
