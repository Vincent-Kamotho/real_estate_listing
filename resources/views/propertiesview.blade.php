<!doctype html>
<html class="no-js" lang="zxx">

<!-- Mirrored from preview.colorlib.com/theme/rolast/blog_details.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 31 May 2023 10:50:33 GMT -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>View Properties</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="manifest" href="site.html">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">

    <link rel="stylesheet" href="{{asset('assets/assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/assets/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/assets/css/slicknav.css')}}">
    <link rel="stylesheet" href="{{asset('assets/assets/css/animate.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/assets/css/animated-headline.css')}}">
    <link rel="stylesheet" href="{{asset('assets/assets/css/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{asset('assets/assets/css/fontawesome-all.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/assets/css/themify-icons.css')}}">
    <link rel="stylesheet" href="{{asset('assets/assets/css/slick.css')}}">
    <link rel="stylesheet" href="{{asset('assets/assets/css/nice-select.css')}}">
    <link rel="stylesheet" href="{{asset('assets/assets/css/style.css')}}">
    <script nonce="9c1692f3-e7bf-411e-9df8-c14949d97086">
        (function(w,d){!function(a,b,c,d){a[c]=a[c]||{};a[c].executed=[];a.zaraz={deferred:[],listeners:[]};a.zaraz.q=[];a.zaraz._f=function(e){return function(){var f=Array.prototype.slice.call(arguments);a.zaraz.q.push({m:e,a:f})}};for(const g of["track","set","debug"])a.zaraz[g]=a.zaraz._f(g);a.zaraz.init=()=>{var h=b.getElementsByTagName(d)[0],i=b.createElement(d),j=b.getElementsByTagName("title")[0];j&&(a[c].t=b.getElementsByTagName("title")[0].text);a[c].x=Math.random();a[c].w=a.screen.width;a[c].h=a.screen.height;a[c].j=a.innerHeight;a[c].e=a.innerWidth;a[c].l=a.location.href;a[c].r=b.referrer;a[c].k=a.screen.colorDepth;a[c].n=b.characterSet;a[c].o=(new Date).getTimezoneOffset();if(a.dataLayer)for(const n of Object.entries(Object.entries(dataLayer).reduce(((o,p)=>({...o[1],...p[1]})),{})))zaraz.set(n[0],n[1],{scope:"page"});a[c].q=[];for(;a.zaraz.q.length;){const q=a.zaraz.q.shift();a[c].q.push(q)}i.defer=!0;for(const r of[localStorage,sessionStorage])Object.keys(r||{}).filter((t=>t.startsWith("_zaraz_"))).forEach((s=>{try{a[c]["z_"+s.slice(7)]=JSON.parse(r.getItem(s))}catch{a[c]["z_"+s.slice(7)]=r.getItem(s)}}));i.referrerPolicy="origin";i.src="../../cdn-cgi/zaraz/sd0d9.js?z="+btoa(encodeURIComponent(JSON.stringify(a[c])));h.parentNode.insertBefore(i,h)};["complete","interactive"].includes(b.readyState)?zaraz.init():a.addEventListener("DOMContentLoaded",zaraz.init)}(w,d,"zarazData","script");})(window,document);
    </script>
</head>

<body>

    <div id="preloader-active">
        <div class="preloader d-flex align-items-center justify-content-center">
            <div class="preloader-inner position-relative">
                <div class="preloader-circle"></div>
                <div class="preloader-img pere-text">
                    <img src="{{asset('assets/assets/img/logo/loder.png')}}" alt="">
                </div>
            </div>
        </div>
    </div>

    <header>

        <div class="header-area">
            <div class="main-header ">
                <div class="header-bottom  header-sticky">
                    <div class="container-fluid">
                        <div class="d-flex align-items-center justify-content-between flex-wrap">

                            <div class="logo">
                                <a href="#"><img src="{{asset('assets/assets/img/logo/logo.png')}}" alt=""></a>
                            </div>
                            

                            <div class="col-12">
                                <div class="mobile_menu d-block d-lg-none"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </header>
    <main>

        <div class="slider-area slider-bg2 ">
            <div class="single-slider d-flex align-items-center slider-height2">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-5 col-md-8 col-sm-10">
                            <div class="hero__caption hero__caption2 pt-50">
                                <h2>{{$property->property_subtype}} Details</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <section class="blog_area single-post-area section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 posts-list">
                        <div class="single-post">
                            <div class="feature-img">
                                <img class="img-fluid" src="{{ asset($property->image) }}" alt="">
                            </div>
                            <div class="blog_details">
                                <h2 style="color: #2d2d2d;">Second divided from form fish beast made every of seas
                                    all gathered us saying he our
                                </h2>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="blog_right_sidebar">
                            <aside class="single_sidebar_widget post_category_widget">
                                <h2 class="widget_title" style="color: #2d2d2d;">{{$property->description}}</h2>
                                <ul class="list cat-list">
                                    <li>
                                        <h2 class="d-flex">Ksh {{$property->property_price}}</h2>
                                        <h2 class="d-flex">Contact: {{$property->property_owner}}</h3>
                                    </li>
                                </ul>
                            </aside>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    

    <div id="back-top">
        <a title="Go to Top" href="#"> <i class="fas fa-level-up-alt"></i></a>
    </div>


    <script src="{{asset('assets/assets/js/vendor/modernizr-3.5.0.min.js')}}"></script>
    <script src="{{asset('assets/assets/js/vendor/jquery-1.12.4.min.js')}}"></script>
    <script src="{{asset('assets/assets/js/popper.min.js')}}"></script>
    <script src="{{asset('assets/assets/js/bootstrap.min.js')}}"></script>

    <script src="{{asset('assets/assets/js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('assets/assets/js/slick.min.js')}}"></script>
    <script src="{{asset('assets/assets/js/jquery.slicknav.min.js')}}"></script>

    <script src="{{asset('assets/assets/js/wow.min.js')}}"></script>
    <script src="{{asset('assets/assets/js/animated.headline.js')}}"></script>
    <script src="{{asset('assets/assets/js/jquery.magnific-popup.js')}}"></script>
    <script src="{{asset('assets/assets/js/jquery.nice-select.min.js')}}"></script>

    <script src="{{asset('assets/assets/js/jquery.counterup.min.js')}}"></script>
    <script src="{{asset('assets/assets/js/waypoints.min.js')}}"></script>
    <script src="{{asset('assets/assets/js/jquery.countdown.min.js')}}"></script>
    <script src="{{asset('assets/assets/js/hover-direction-snake.min.js')}}"></script>

    <script src="{{asset('assets/assets/js/contact.js')}}"></script>
    <script src="{{asset('assets/assets/js/jquery.form.js')}}"></script>
    <script src="{{asset('assets/assets/js/jquery.validate.min.js')}}"></script>
    <script src="{{asset('assets/assets/js/mail-script.js')}}"></script>
    <script src="{{asset('assets/assets/js/jquery.ajaxchimp.min.js')}}"></script>

    <script src="{{asset('assets/assets/js/plugins.js')}}"></script>
    <script src="{{asset('assets/assets/js/main.js')}}"></script>

    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
 function gtag(){dataLayer.push(arguments);}
 gtag('js', new Date());

 gtag('config', 'UA-23581568-13');
    </script>
    <script defer
        src="https://static.cloudflareinsights.com/beacon.min.js/v52afc6f149f6479b8c77fa569edb01181681764108816"
        integrity="sha512-jGCTpDpBAYDGNYR5ztKt4BQPGef1P0giN6ZGVUi835kFF88FOmmn8jBQWNgrNd8g/Yu421NdgWhwQoaOPFflDw=="
        data-cf-beacon='{"rayId":"7cfea63ebc4e9cdd","version":"2023.4.0","b":1,"token":"cd0b4b3a733644fc843ef0b185f98241","si":100}'
        crossorigin="anonymous"></script>
</body>

<!-- Mirrored from preview.colorlib.com/theme/rolast/blog_details.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 31 May 2023 10:50:36 GMT -->

</html>