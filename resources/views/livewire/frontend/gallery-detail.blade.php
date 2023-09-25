<div>
     <!-- start section -->
    <section class="parallax bg-extra-dark-gray p-0" data-parallax-background-ratio="0.5"
        style="background-image:url('assets/images/parallaxbg_header.jpg');">
        <div class="container">
            <div class="row justify-content-center">
                <div
                    class="col-12 col-lg-9 text-center full-screen d-flex flex-column justify-content-center padding-8-rem-tb md-landscape-h-600px">
                    <span
                        class="alt-font letter-spacing-5px text-white text-uppercase font-weight-500 margin-35px-bottom">In the Media</span>
                    <h1
                        class="alt-font font-weight-700 title-large text-shadow-double-large text-white text-uppercase mb-0 letter-spacing-minus-4px margin-4-half-rem-bottom sm-no-text-shadow sm-letter-spacing-minus-1-half">
                        <span class="text-border text-border-width-2px">Photo</span><br /> Gallery</h1>
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
                    <h1 class="alt-font text-extra-dark-gray font-weight-500 no-margin-bottom d-inline-block">Photo Gallery
                    </h1>
                </div>
                <div
                    class="col-xl-4 col-lg-6 text-center text-lg-end breadcrumb justify-content-center justify-content-lg-end text-small alt-font md-margin-15px-top">
                    <ul>
                        <li><a href="index.html">Home</a></li>
                        <li>Photo Gallery</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- end page title -->

    <section class="half-section">
        <div class="container position-relative">
            <div class="row">
                <div class="col-lg-12">
                    <div class="row align-items-center">
                        <div class="col-lg-9">
                            <div class="alt-font font-weight-500 my-3 d-flex">
                                <span class="flex-shrink-0 w-30px h-1px bg-tussock opacity-7 align-self-center margin-20px-right"></span>
                                <div class="flex-grow-1"><span class="text-tussock text-uppercase">Photo Gallery</span>
                                </div>
                            </div>
                            <h5 class="alt-font text-dark-purple font-weight-600 w-85 margin-30px-bottom xl-w-100">{{$category_name}}</h5>
                        </div>
                        <div class="col-lg-3 text-lg-end">
                            <a href="{{url('photo-gallery')}}" class="btn btn-fancy btn-medium btn-dark-purple">Back to Gallery</a>
                        </div>
                    </div>
                    
                    

                    <div class="row justify-content-center">
                        <div class="col-12">
                            <ul class="portfolio-overlay portfolio-wrapper grid grid-loading grid-4col xl-grid-4col lg-grid-4col md-grid-2col sm-grid-2col xs-grid-2col gutter-extra-large text-center">
                                <li class="grid-sizer"></li>
                               @if(isset($records) && count($records)>0 )                      
                                  @foreach ($records as  $record)    
                                <!-- start lightbox gallery item -->
                                <li class="grid-item wow animate__fadeIn">
                                    <a href="{{ getGallerydetail($record->image) }}" title="" data-group="lightbox-gallery" class="lightbox-group-gallery-item">
                                        <div class="portfolio-box">
                                            <div class="portfolio-image bg-medium-slate-blue">
                                                <img src="{{ getGallerydetail($record->image)}}" alt="" />
                                                <div class="portfolio-hover justify-content-end d-flex flex-column padding-50px-tb lg-padding-30px-tb xs-padding-15px-tb">
                                                    <i class="feather icon-feather-zoom-in portfolio-plus-icon font-weight-300 text-white absolute-middle-center icon-small move-top-bottom"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <!-- end lightbox gallery item -->
                              
                              @endforeach
                           @endif
                            </ul>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
</div>
