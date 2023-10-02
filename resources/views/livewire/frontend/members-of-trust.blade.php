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
                        <span class="text-border text-border-width-2px">Trustees</span><br /> & Members</h1>
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
                        @php
           $getRouteName =  Route::currentRouteName();
           $widget =  App\Models\Widget::where('status','Active')->where('pname',$getRouteName )->first();
           @endphp 
                                @if($widget) 
                            @if($widget->menu_id!=1)    
                           <li><a href="javascript:void()"> {{$widget->Menu->name}}</a></li>
                            @endif
                        @endif
                        <li>Members of Trust</li>
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
                    

                    <div class="row mb-4">

@php
$members = App\Models\MemberOfTrust::where('category', '1')->where('status', 'Active')->get();              
@endphp               
 @if(isset($members) && count($members)>0  )
        @foreach($members as $key => $member)         
                        <!-- start item -->
                        <div class="col-md-12 mb-4">
                            <div class="card rounded-0">
                                <div class="card-header py-3">
                                    <h6 class="alt-font text-dark-purple font-weight-600 mb-1">{{$member->name}}</h6>
                                    <div class="alt-font font-weight-500 d-flex">
                                        <span class="flex-shrink-0 w-30px h-1px bg-tussock opacity-7 align-self-center margin-20px-right"></span>
                                        <div class="flex-grow-1"><span class="text-tussock text-uppercase">{{$member->designation}}</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <div class="photo">
                                                <img src="{{ getMemberofTrust($member->image) }}" class="img-fluid" alt="">
                                            </div>
                                        </div>
                                        <div class="col-lg-8">                                            
                                          {!!$member->description!!}
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                       <!-- close item -->
        @endforeach
         @else
         <center><div class="alert alert-warning">
        <strong>Sorry!</strong> No Record Found.
        </div>   
 @endif                       
                   
                    </div>


@php
$committeemembers = App\Models\MemberOfTrust::where('category', '2')->where('status', 'Active')->get();              
@endphp 
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th class="h5 text-center">Other Committee Members</th>
                                        </tr>
                                    </thead>
                                    <tbody>
 @if(isset($committeemembers) && count($committeemembers)>0  )
        @foreach($committeemembers as $key => $member)                                         
                                        <tr>
                                            <td>{{$member->name}}</td>
                                        </tr>
        @endforeach
        @else
        <tr>
         <td>No Record Found</td>
        </tr>
 @endif                                       
                                   
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
