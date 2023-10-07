<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
    <title>
        @if(session()->get('language') == 'gujrati')
        શ્રી નંદકુંવરબા ક્ષત્રિય કન્યા વિદ્યાલય - ભાવનગર, ગુજરાત
        @else
        Shri Nandkunverba Kshatriya Kanya Vidyalaya - Bhavnagar, Gujrat
        @endif
    </title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="author" content="">
    <meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1" />
     <!-- OR -->
    {!! SEO::generate() !!}
    {{-- @stack('keywords') --}}
    <!-- BEGIN: CSS -->
    @php
        $headerSnippets = App\Models\Headersnippets::get();
    @endphp
        @forelse($headerSnippets as $snippet)
            {{ $snippet->description }}
        @empty
        @endforelse


     <link rel="stylesheet" href="{{asset('assets/css/font-icons.min.css')}}">
     <link rel="stylesheet" href="{{asset('assets/css/theme-vendors.min.css')}}">
     <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
     <link rel="stylesheet" href="{{asset('assets/css/responsive.css')}}">
     <style>
/* floating btn */
.floating_btn a i {
    padding-right:0px;
}

.banner_floating_sec {
    position: fixed;
    right: 0;
    top:200px;
    z-index: 99;
}
.banner_floating_sec_mobile {
    position: fixed;
    padding:18px 8px 8px;
    bottom:0px;
    left:0;
    right:0;
    z-index: 99;
    margin:0 auto;
    /* background: linear-gradient(0deg, rgba(255,255,255,1) 0%, rgba(255,255,255,0) 50%); */
}

.floating_btn {
    text-align:left;
    margin-bottom:0px;
    width:110px;
    background: #e31e24;
    position: absolute;
    right: 0px;
    cursor: pointer;
    -webkit-transition: all ease .5s;
    -moz-transition: all ease .5s;
    -ms-transition: all ease .5s;
    -o-transition: all ease .5s;
    transition: all ease .5s;
    text-transform: uppercase;
}

.floating_btn.active {
    left: 0;
}

/*.floating_btn_1 {
    top: 0px;
}*/
.floating_btn_1 {
    top: 0px;
    transform: rotate(-90deg);
    right: -20px;
    width: 110px;
    text-align: center;
    background:#00bbf9 !important;
    padding: 5px 0px;
}

.floating_btn_1:hover {
    background:#333045!important;
    right: -20px;
}
.floating_btn_2 {
   top: 120px;
    transform: rotate(-90deg);
    right: -20px;
    width: 110px;
    text-align: center;
    padding: 5px 0px;
}
.floating_btn_2:hover { 
    background:#333045;
    right: -20px;
}

.floating_btn a {
    color: #fff;
}

.floating_btn:hover a{ color:#fff; text-decoration:none;}
     </style>   

     @livewireStyles

</head>

<body class="h-100">
    <!-- start page loader -->
    <div class="page-loader"></div>
    <!-- end page loader -->
    <!-- start header -->
    @include('livewire.frontend.common.header')
    <!-- end header -->
   
    {{ $slot }}

    <!-- start footer -->
    @include('livewire.frontend.common.footer')
    <!-- end footer -->

    <!-- floating btn for desktop/laptop -->
    <div class="banner_floating_sec d-md-block d-sm-none d-none">
        <div class="floating_btn floating_btn_1"><a href="{{ route('english.language') }}" ><span>English</span> </a></div>
        <div class="floating_btn floating_btn_2"><a href="{{ route('gujrati.language') }}" ><span>Gujarati</span> </a></div>
    </div>
    
    <!-- floating btn for mobile view -->
    <div class="banner_floating_sec_mobile d-md-none d-sm-block d-block">
        <div class="row">
            <div class="col-6"><a href="{{ route('english.language') }}" class="btn btn-primary w-100">English</a></div>
            <div class="col-6"><a href="{{ route('gujrati.language') }}" class="btn btn-danger w-100">Gujarati</a></div>
        </div>
    </div>


    <!-- start scroll to top -->
    <a class="scroll-top-arrow" href="javascript:void(0);"><i class="feather icon-feather-arrow-up"></i></a>
    <!-- end scroll to top -->
    <!-- javascript -->

     @livewireScripts

    <script src="{{asset('assets/js/jquery.min.js')}}"></script>
    <script src="{{asset('assets/js/theme-vendors.min.js')}}"></script>
    <script src="{{asset('assets/js/main.js')}}"></script>
</body>

</html>