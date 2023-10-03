<footer class="footer-dark bg-extra-dark-gray">
    @php
     $contactInfo = App\Models\ContactInfo::orderBy('sort_id','asc')->where('status','Active')->first();

     $SocialApps = App\Models\SocialApp::orderBy('sort_id','asc')->where(['status' => 'Active' , 'category' =>'Footer'])->get();  

     $footerLinks = App\Models\FooterLink::orderBy('sort_id','asc')->where('status','Active')->get();                    
    @endphp
        <div class="footer-top padding-40px-tb border-bottom border-color-white-transparent">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-12 col-md-3 text-center text-md-start sm-margin-20px-bottom">
                       @if (isset($contactInfo->footer_logo))   
                        <a href="{{url('/')}}" class="footer-logo"><img src=" {{ asset('storage/' . $contactInfo->footer_logo) }}     " alt=""></a>
                       @else
                        <a href="{{url('/')}}" class="footer-logo"><img src="assets/images/snkkv-logo.png" alt=""></a>
                       @endif  
                    </div>
                    <div class="col-12 col-md-6 text-center sm-margin-20px-bottom">
                      @if(session()->get('language') == 'gujrati')
                       <span
                            class="alt-font font-weight-500 d-inline-block align-middle margin-5px-right text-uppercase">
                        મૂલ્ય આધારિત શિક્ષણ સાથે યુવા મનને સમૃદ્ધ બનાવો. 
                         </span>
                      @else
                       <span
                            class="alt-font font-weight-500 d-inline-block align-middle margin-5px-right text-uppercase">
                        Enrich Young Minds With Value-Based Education. 
                         </span>
                     @endif   
                   

@if(session()->get('language') == 'gujrati')
 <a href="javascript:void()"
                        class="alt-font font-weight-500 text-small d-inline-block text-white text-uppercase text-decoration-line-bottom-gradient">હવે સંપર્ક કરો<span class="bg-white"></span></a>
@else
                    <a href="javascript:void()"
                        class="alt-font font-weight-500 text-small d-inline-block text-white text-uppercase text-decoration-line-bottom-gradient">Contact Now<span class="bg-white"></span></a>
@endif                            
                    </div>
                    <div class="col-12 col-md-3 text-center text-md-end">
                        <div class="social-icon-style-03">
                            <ul class="extra-small-icon light">
        @if(isset($SocialApps) && count($SocialApps) >0 )
            @foreach($SocialApps as $SocialApp)   
                <li><a class="facebook" href="{{$SocialApp->link ?? ''}}" target="_blank"><i
                                            class="{{$SocialApp->icon ?? ''}}"></i></a></li>
            @endforeach
        @else 
                                <li><a class="facebook" href="https://www.facebook.com/" target="_blank"><i
                                            class="fab fa-facebook-f text-white"></i></a></li>
                                <li><a class="youtube" href="https://www.youtube.com/" target="_blank"><i
                                            class="fab fa-youtube text-white"></i></a></li>
                                <li><a class="twitter" href="https://www.twitter.com/" target="_blank"><i
                                            class="fab fa-twitter text-white"></i></a></li>
                                <li><a class="instagram" href="https://www.instagram.com/" target="_blank"><i
                                            class="fab fa-instagram text-white"></i></a></li>
            @endif                     
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom padding-five-tb lg-padding-eight-tb md-padding-50px-tb">
            <div class="container">
                <div class="row row-cols-1 row-cols-sm-3 justify-content-center">
                    <!-- start footer column -->
                    <div class="col col-xl-4 col-lg md-margin-50px-bottom xs-margin-25px-bottom">
                        @if(session()->get('language') == 'gujrati')
                        <span
                            class="alt-font font-weight-500 d-block text-white margin-20px-bottom xs-margin-10px-bottom">
                            શાળા</span>
                        @else
                        <span
                            class="alt-font font-weight-500 d-block text-white margin-20px-bottom xs-margin-10px-bottom">
                            The School</span>
                         @endif   
 
                      @if(session()->get('language') == 'gujrati')
                        <p>{{$contactInfo->disclaimer ?? 'અમે માનીએ છીએ કે છોકરીને શિક્ષિત કરવી એ પરિવારને શિક્ષિત કરવા સમાન છે. અમારી સંસ્થા શિક્ષણ સાથે રિવાજો અને સંસ્કૃતિની જાળવણી સાથે જોડાયેલી છે. અમે અમારા વિદ્યાર્થીઓને દરેક સાથે આદર અને નમ્રતાથી વર્તવાનું શીખવીએ છીએ. સર્વાંગી વિકાસ અને ચારિત્ર્ય નિર્માણ માટે શાળામાં કડક શિસ્ત નીતિ છે.'}}</p>
                      @else
                        <p>{{$contactInfo->disclaimer ?? 'We believe that educating a girl is equal to educating a family. Our institution is associated with education along with preservation of customs and culture. We teach our students to treat everyone with respect and humility. To achieve all round development and character building the school has a strict discipline policy.'}}</p>
                      @endif  

                      @if(session()->get('language') == 'gujrati')
                      <a href="" class="btn btn-tussock text-white btn-small">વધુ વાંચો</a>
                      @else 
                       <a href="" class="btn btn-tussock text-white btn-small">Read More</a>
                      @endif

                    </div>
                    <!-- end footer column -->

                    <!-- start footer column -->
                    <div class="col col-xl-2 col-lg md-margin-50px-bottom xs-margin-25px-bottom">
                        @if(session()->get('language') == 'gujrati')
                        <span
                            class="alt-font font-weight-500 d-block text-white margin-20px-bottom xs-margin-10px-bottom">ઝડપી સંપર્ક</span>
                        @else
                        <span
                            class="alt-font font-weight-500 d-block text-white margin-20px-bottom xs-margin-10px-bottom">Quick
                            Links</span>
                        @endif

                        <ul>
                         @if(isset($footerLinks) && count($footerLinks) >0 )
                              @foreach($footerLinks as  $links)   
                @php
                $link = str_replace('home.', '', $links->pname);
                $footertlink=str_replace('_', '-', $link);
                @endphp 

                          <li><a href="{{url($footertlink)}}">
                           @if(session()->get('language') == 'gujrati')
                            {{$links->pagetitleguj}}
                           @else
                            {{$links->pagetitle}}
                           @endif 
                          </a></li>
                         @endforeach
                         @endif   
                        </ul>
                    </div>


                    <!-- end footer column -->
                    <!-- start footer column -->
                    <div class="col-12 col-lg-3 col-sm-6 xs-margin-25px-bottom">

                        <span
                            class="alt-font font-weight-500 d-block text-white margin-20px-bottom xs-margin-10px-bottom">
                       @if(session()->get('language') == 'gujrati')
                       સંપર્કમાં રહેવા
                       @else     
                        Get in touch
                       @endif
                    </span>

                       @if(session()->get('language') == 'gujrati')
                        <p class="w-85 margin-15px-bottom">{{$contactInfo->address ?? 'નિલમબાગ સર્કલ, દેવબાગ, ભાવનગર, ગુજરાત 364002'}}</p>
                       @else
                        <p class="w-85 margin-15px-bottom">{{$contactInfo->address ?? 'Nilambaug Circle, Devbagh, Bhavnagar, Gujarat 364002'}}</p>
                       @endif
                     
                        <div><i
                                class="feather icon-feather-phone-call icon-very-small margin-10px-right text-white"></i>{{$contactInfo->phone ?? '+1
                            234 567 8910'}}</div>
                        <div><i class="feather icon-feather-mail icon-very-small margin-10px-right text-white"></i><a
                                href="#">{{$contactInfo->email ?? 'info@yourdomain.com'}}</a></div>
                    </div>
                    <!-- end footer column -->
                    <!-- start footer column -->
                    <div class="col col-xl-3 col-lg-4 col-sm-8 text-sm-center text-lg-start last-paragraph-no-margin">

                        <span class="alt-font font-weight-500 d-block text-white margin-20px-bottom">
                         @if(session()->get('language') == 'gujrati')
                          ન્યૂઝલેટર પર સબ્સ્ક્રાઇબ કરો
                         @else
                            Subscribe to newsletter
                         @endif   
                        </span>
 
                     @if(session()->get('language') == 'gujrati')
                         <p class="mb-5">મૂલ્યવાન ન્યૂઝલેટર્સ મેળવવા માટે તમારું ઇમેઇલ સરનામું દાખલ કરો.</p>
                     @else
                        <p class="mb-5">Enter your email address for receiving valuable newsletters.</p>
                     @endif
                        <form action="" method="post">
                            <div class="newsletter-style-03 position-relative">
                                <input class="small-input border-color-medium-gray rounded m-0 required" name="email"
                                    placeholder="Enter your email address" type="email">
                                <input type="hidden" name="redirect" value="">
                                <button class="btn no-border text-medium submit" type="submit"><i
                                        class="feather icon-feather-mail icon-extra-small text-tussock m-0"></i></button>
                                <div class="form-results rounded position-absolute d-none"></div>
                            </div>
                        </form>
                    </div>
                    <!-- end footer column -->
                </div>
            </div>
        </div>
        <div class="footer-bottom padding-35px-tb border-top border-color-white-transparent">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-6 sm-margin-10px-bottom xs-margin-15px-bottom">
                        <ul
                            class="footer-horizontal-link d-flex flex-column flex-sm-row justify-content-sm-center justify-content-md-start">
                           @if(session()->get('language') == 'gujrati')
                            <li><a href="#">ગોપનીયતા નીતિ</a></li>
                            <li><a href="#">કાનૂની નોટિસ</a></li>
                            <li><a href="#">સેવાની શરતો</a></li> 
                           @else
                            <li><a href="#">Privacy policy</a></li>
                            <li><a href="#">Legal notice</a></li>
                            <li><a href="#">Terms of service</a></li>
                           @endif  

                        </ul>
                    </div>
                    <div class="col-12 col-md-6 text-start text-sm-center text-md-end last-paragraph-no-margin">

                        @if(session()->get('language') == 'gujrati')
                         <p>&copy; {{date('Y')}} બધા હકો અમારી પાસે રાખેલા છે. દ્વારા સાઇટ <a href="https://www.dukeinfosys.com/"
                                target="_blank" class="text-decoration-line-bottom text-white">ડ્યુક ઇન્ફોસિસ</a></p>
                        @else
                        <p>&copy; {{date('Y')}} All Rights Reserved. Site By <a href="https://www.dukeinfosys.com/"
                                target="_blank" class="text-decoration-line-bottom text-white">Duke Infosys</a></p>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </footer>