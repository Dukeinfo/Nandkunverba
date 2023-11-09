<header class="home-vertical-portfolio">
        <!-- start navigation -->
@php
$contactInfo = App\Models\ContactInfo::orderBy('id','desc')->where('status','Active')->first();     
$SocialApps = App\Models\SocialApp::orderBy('sort_id','asc')->where(['status' => 'Active' , 'category' =>'Header'])->get();     
           
@endphp
        <nav class="navbar navbar-expand-lg navbar-dark bg-transparent header-dark fixed-top navbar-static-overlay">
            <div class="container-fluid h-130px md-h-70px">
                <div class="col-6 col-lg-2 me-auto me-auto ps-lg-0">
                    <a class="navbar-brand" href="javascript:void()">
                 @if (isset($contactInfo->logo))
                        <img src="{{ asset('storage/' . $contactInfo->logo) }}" class="default-logo" alt="">
                        <img src="{{ asset('storage/' . $contactInfo->logo) }}" class="mobile-logo" alt="">
                        @else
                        <img src="assets/images/snkkv-logo.png" class="default-logo" alt="">
                        <img src="assets/images/snkkv-logo.png" class="mobile-logo" alt="">
                    @endif


                        
                    </a>
                </div>
                <div class="col-auto text-end pe-lg-0">
                    <div class="header-push-button">
                        <a href="javascript:void(0);" class="push-button ">
                            <span></span>
                            <span></span>
                            <span></span>
                            <span></span>
                        </a>
                    </div>
                </div>
            </div>
        </nav>
        <!-- end navigation -->
        <!-- start hamburger popup -->
        <div class="hamburger-menu hamburger-menu-half bg-black lg-w-60 md-w-60 sm-w-100">
            <a href="javascript:void(0);" class="close-menu text-white"><i class="fas fa-times"></i></a>
            <div
                class="d-flex flex-column align-items-center justify-content-center h-100 padding-3-rem-all md-padding-2-rem-lr xs-no-padding-lr">
                <a href="javascript:void()" class="d-none d-lg-inline-block">
                     @if (isset($contactInfo->logo))
                      <img src="{{ asset('storage/' . $contactInfo->logo) }}" width="150" alt="">
                     @else
                    <img src="assets/images/snkkv-logo.png" alt="" width="150" /></a>
                     @endif
                <div class="menu-list-wrapper w-75 lg-w-80 md-w-75 sm-w-60 xs-w-100 position-relative padding-15px-lr margin-3-rem-tb"
                    data-scroll-options='{ "theme": "light" }'>
<!-- start menu -->
<ul class="menu-list alt-font w-70 xl-w-100 margin-auto-lr">
@php
 $menus = App\Models\Menu::orderBy('sort_id','asc')->where('status','Active')->get();     
@endphp    
          @if(isset($menus) )
            @foreach($menus as $menu)

@php
 $submenus = App\Models\Submenu::with(['Menu'])->where('cms', 'No')
            ->where('menu_id', $menu->id)
            ->orderBy('sort_id', 'asc')
            ->where('status', 'Active')
            ->get();   


$getpage = App\Models\CreatePage::where('menu_id', $menu->id)
            ->with(['SubMenu'])
            ->orderBy('sort_id', 'asc')
            ->where('status', 'Active')
            ->groupBy('submenu_id')
            ->get();

@endphp



<li class="menu-list-item">
   @if(isset($menu->link) ) 
   <a href="{{ !empty($menu->link) ? route($menu->link) : '#' }}">
        @if(session()->get('language') == 'gujrati')
             {{$menu->name_guj ?? ''}}
        @else
             {{$menu->name ?? ''}}

        @endif 
    </a> 
   @else
    <a href="javascript:void(0);">
        @if(session()->get('language') == 'gujrati')
             {{$menu->name_guj ?? ''}}
        @else
             {{$menu->name ?? ''}}

        @endif 
  </a>      
@endif              
          <!-- show + sign for toggle -->           
          @if(isset($submenus) )
              @foreach($submenus as $submenu)
                      <span class="menu-toggle"></span>
              @endforeach
          @endif
            <!-- ul start for sub menus -->     
            <ul class="sub-menu-item">
              <!--  sub menus if custom=Yes  -->
               @foreach($getpage as $page)
                   @if($page->SubMenu->cms == 'Yes' && $page->SubMenu->status == 'Active' )
              <li class="menu-list-item"><a href="{{ route('detail_page', ['page_id' => $page->id ?? '', 'slug' => $page->SubMenu->slug ?? '']) }}">
                      @if(session()->get('language') == 'gujrati')
                           {{$page->SubMenu->name_guj ?? ''}}
                      @else
                           {{$page->SubMenu->name ?? ''}}
                      @endif  
              </a>
             </li>
                     @else
                        <!-- show here for else -->
                  @endif
             @endforeach

             <!-- sub menus if custom=No -->
              @foreach($submenus as $submenu)
                  <li class="menu-list-item"><a href="{{ isset($submenu->pname) ? route($submenu->pname) : '#' }}">
                              @if(session()->get('language') == 'gujrati')
                                   {{$submenu->name_guj ?? ''}}
                              @else
                                   {{$submenu->name ?? ''}}
                              @endif 
                  </a>
                 </li>
              <!-- sub menus end -->   
               @endforeach
              </ul><!-- ul end for sub menus -->
   </li>
               @endforeach
            @endif
</ul>
 <!-- end menu -->
                </div>
                <div class="text-center elements-social social-icon-style-12 d-none d-md-inline-block">
                    <ul class="small-icon light">
                       @if(isset($SocialApps) && count($SocialApps) >0 )
            @foreach($SocialApps as $SocialApp)
                        <li><a class="facebook" href="{{$SocialApp->link ?? ''}}" target="_blank"><i
                                    class="{{$SocialApp->icon ?? ''}}"></i></a></li>
                        @endforeach
         @else 
                        <li><a class="facebook" href="https://www.facebook.com/" target="_blank"><i
                                    class="fab fa-facebook-f"></i></a></li>
                        <li><a class="dribbble" href="http://www.dribbble.com/" target="_blank"><i
                                    class="fab fa-dribbble"></i></a></li>
                                    
                        <li><a class="twitter" href="http://www.twitter.com/" target="_blank"><i
                                    class="fab fa-twitter"></i></a></li>
                        <li><a class="instagram" href="http://www.instagram.com/" target="_blank"><i
                                    class="fab fa-instagram"></i></a></li>
                        <li><a class="linkedin" href="http://www.linkedin.com/" target="_blank"><i
                                    class="fab fa-linkedin-in"></i></a></li>
                        @endif            
                    </ul>
                </div>
            </div>
        </div>
        <!-- end hamburger popup -->
    </header>