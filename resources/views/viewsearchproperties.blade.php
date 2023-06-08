<!doctype html>
<html class="no-js" lang="zxx">

<!-- Mirrored from preview.colorlib.com/theme/rolast/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 31 May 2023 10:49:04 GMT -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Real Estate</title>
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
    <script nonce="41e67e53-e3ec-4318-b074-aa78fe1f2615">
        (function(w,d){!function(a,b,c,d){a[c]=a[c]||{};a[c].executed=[];a.zaraz={deferred:[],listeners:[]};a.zaraz.q=[];a.zaraz._f=function(e){return function(){var f=Array.prototype.slice.call(arguments);a.zaraz.q.push({m:e,a:f})}};for(const g of["track","set","debug"])a.zaraz[g]=a.zaraz._f(g);a.zaraz.init=()=>{var h=b.getElementsByTagName(d)[0],i=b.createElement(d),j=b.getElementsByTagName("title")[0];j&&(a[c].t=b.getElementsByTagName("title")[0].text);a[c].x=Math.random();a[c].w=a.screen.width;a[c].h=a.screen.height;a[c].j=a.innerHeight;a[c].e=a.innerWidth;a[c].l=a.location.href;a[c].r=b.referrer;a[c].k=a.screen.colorDepth;a[c].n=b.characterSet;a[c].o=(new Date).getTimezoneOffset();if(a.dataLayer)for(const n of Object.entries(Object.entries(dataLayer).reduce(((o,p)=>({...o[1],...p[1]})),{})))zaraz.set(n[0],n[1],{scope:"page"});a[c].q=[];for(;a.zaraz.q.length;){const q=a.zaraz.q.shift();a[c].q.push(q)}i.defer=!0;for(const r of[localStorage,sessionStorage])Object.keys(r||{}).filter((t=>t.startsWith("_zaraz_"))).forEach((s=>{try{a[c]["z_"+s.slice(7)]=JSON.parse(r.getItem(s))}catch{a[c]["z_"+s.slice(7)]=r.getItem(s)}}));i.referrerPolicy="origin";i.src="../../cdn-cgi/zaraz/sd0d9.js?z="+btoa(encodeURIComponent(JSON.stringify(a[c])));h.parentNode.insertBefore(i,h)};["complete","interactive"].includes(b.readyState)?zaraz.init():a.addEventListener("DOMContentLoaded",zaraz.init)}(w,d,"zarazData","script");})(window,document);
    </script>

</head>

<body>


    {{--<div id="preloader-active">
        <div class="preloader d-flex align-items-center justify-content-center">
            <div class="preloader-inner position-relative">
                <div class="preloader-circle"></div>
                <div class="preloader-img pere-text">
                    <img src="{{asset('assets/assets/img/logo/loder.png')}}" alt="">
                </div>
            </div>
        </div>
    </div>
    --}}

    <header>
        <div class="header-area">
            <div class="main-header ">
                <div class="header-bottom  header-sticky">
                    <div class="container-fluid">
                        <div class="d-flex align-items-center justify-content-between flex-wrap">

                            <div class="logo">
                                <a href="#"><img src="{{asset('assets/assets/img/logo/logo.png')}}" alt=""></a>
                            </div>
                            <div class="menu-wrapper d-flex align-items-center">

                                <div class="main-menu d-none d-lg-block">
                                    <nav>
                                        <ul id="navigation">
                                            <li><a href="#">Home</a></li>
                                            <li><a href="#">Property</a></li>
                                            <li><a href="#">About</a></li>
                                            <li><a href="#">Blog</a></li>
                                            <li><a href="#">Contact</a></li>
                                        </ul>
                                    </nav>
                                </div>

                                <div class="header-right-btn f-right d-flex align-items-center">
                                    <a href="#" class="header-btn2 d-none d-lg-block"><i class="fas fa-phone-alt"></i>
                                        +10 (65) 672 2674</a>
                                </div>
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

        <div class="slider-area position-relative slider-bg1 hero-overly tab-style">
            <div class="slider-active">

                <div class="single-slider slider-height d-flex align-items-center">
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-9 col-lg-10 col-md-10 ">
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <section class="services-section section-padding40">
            <div class="container">
                <div class="row">
                    <div class="col-xl-8">
                        <div class="section-tittle mb-50 ">
                            <h2>Searching for the Best Items?</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    @foreach ($searchresults->chunk(3) as $chunk)
                    <div class="row">
                        @foreach ($chunk as $searchresult)
                        <div class="col-lg-4 col-md-4 col-sm-6">
                            <div class="single-cat mb-30">
                                <div class="cat-img">
                                    <img src="{{ asset($searchresult->image) }}">
                                </div>
                                <div class="cat-cap">
                                    <h5><a href="{{url('view-property/'.$searchresult->id)}}">{{$searchresult->description}}</a>
                                    </h5>
                                    <p><i class="fas fa-map-marker-alt"></i> Nairobi, Kenya</p>
                                    <div class="pricing d-flex justify-content-between align-items-center">
                                        <span>{{$searchresult->property_name}}</span>
                                        <span class="price">{{$searchresult->property_price}}</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                    @endforeach
                </div>

            </div>
        </section


        <div class="completed-cases">
            <div class="container-fluid p-0">
                <div class="row no-gutters align-items-center">

                    <div class="col-xl-4 col-lg-5 col-md-8">
                        <div class="single-cases-info">
                            <h3>Just browse away.<br> It’s all here.</h3>
                            <p class="top-content">Rhoncus est pellen tesque elit ullam corper dignissim cras
                                tincidunt lobortis feugiat. Et netus malesuada fames.</p>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                                eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                Rhoncus est pellen tesque elit ullamcorper dignissim cras
                                tincidunt lobortis feugiat.</p>
                            <a href="gallery.html" class="btn">Browse Property</a>
                        </div>
                    </div>

                    <div class="col-xl-8 col-lg-7 col-md-12">
                        <div class=" completed-active owl-carousel">
                            <div class="single-cases-img">
                                <img src="{{asset('assets/assets/img/gallery/gallery1.png')}}" alt="">
                            </div>
                            <div class="single-cases-img">
                                <img src="{{asset('assets/assets/img/gallery/gallery2.png')}}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <section class="our-client section-padding40 fix">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="single-cat text-center mb-40">
                            <div class="cat-img">
                                <img src="{{asset('assets/assets/img/gallery/client1.png')}}" alt="">
                                <div class="numbering">1</div>
                            </div>
                            <div class="cat-cap">
                                <h5><a href="#">Choose a category</a></h5>
                                <p>Rhoncus est pellen tesque elit ullam corper dignissim.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="single-cat text-center mb-40">
                            <div class="cat-img">
                                <img src="{{asset('assets/assets/img/gallery/client2.png')}}" alt="">
                                <div class="numbering">2</div>
                            </div>
                            <div class="cat-cap">
                                <h5><a href="#">Find real estate</a></h5>
                                <p>Rhoncus est pellen tesque elit ullam corper dignissim.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="single-cat text-center mb-40">
                            <div class="cat-img">
                                <img src="{{asset('assets/assets/img/gallery/client3.png')}}" alt="">
                                <div class="numbering">3</div>
                            </div>
                            <div class="cat-cap">
                                <h5><a href="#">Take the keys</a></h5>
                                <p>Rhoncus est pellen tesque elit ullam corper dignissim.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="single-cat text-center mb-40">
                            <div class="cat-img">
                                <img src="{{asset('assets/assets/img/gallery/client4.png')}}" alt="">
                                <div class="numbering">4</div>
                            </div>
                            <div class="cat-cap">
                                <h5><a href="#">Live happy</a></h5>
                                <p>Rhoncus est pellen tesque elit ullam corper dignissim.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <div class="team-area section-padding">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="cl-xl-7 col-lg-8 col-md-10">

                        <div class="section-tittle text-center mb-60">
                            <h2>Meet Our Agents</h2>
                        </div>
                    </div>
                </div>
                <div class="c-row">
                    <div class="team-active">
                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <div class="single-team mb-30 text-center">
                                <div class="team-img">
                                    <img src="{{asset('assets/assets/img/gallery/team1.png')}}" alt="">
                                    <div class="team-caption">

                                        <div class="team-social">
                                            <ul>
                                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                                <li><a href="#"><i class="fas fa-globe"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="team-info">
                                    <h3><a href="#">Buster Hyman</a></h3>
                                    <p>Dual Agent</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <div class="single-team mb-30 text-center">
                                <div class="team-img">
                                    <img src="{{asset('assets/assets/img/gallery/team2.png')}}" alt="">
                                    <div class="team-caption">

                                        <div class="team-social">
                                            <ul>
                                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                                <li><a href="#"><i class="fas fa-globe"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="team-info">
                                    <h3><a href="#">Buster Hyman</a></h3>
                                    <p>Dual Agent</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <div class="single-team mb-30 text-center">
                                <div class="team-img">
                                    <img src="{{asset('assets/assets/img/gallery/team3.png')}}" alt="">
                                    <div class="team-caption">

                                        <div class="team-social">
                                            <ul>
                                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                                <li><a href="#"><i class="fas fa-globe"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="team-info">
                                    <h3><a href="#">Buster Hyman</a></h3>
                                    <p>Dual Agent</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <div class="single-team mb-30 text-center">
                                <div class="team-img">
                                    <img src="{{asset('assets/assets/img/gallery/team2.png')}}" alt="">
                                    <div class="team-caption">

                                        <div class="team-social">
                                            <ul>
                                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                                <li><a href="#"><i class="fas fa-globe"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="team-info">
                                    <h3><a href="#">Buster Hyman</a></h3>
                                    <p>Dual Agent</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <div class="single-team mb-30 text-center">
                                <div class="team-img">
                                    <img src="assets/img/gallery/team3.png" alt="">
                                    <div class="team-caption">

                                        <div class="team-social">
                                            <ul>
                                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                                <li><a href="#"><i class="fas fa-globe"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="team-info">
                                    <h3><a href="#">Buster Hyman</a></h3>
                                    <p>Dual Agent</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="location-house fix">
            <div class="container-fluid p-0">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="location-active owl-carousel">
                            <div class="single-instagram">
                                <img src="assets/img/gallery/location1.png" alt="">
                                <a href="#" class="location-btn">London (20)</a>
                            </div>
                            <div class="single-instagram">
                                <img src="assets/img/gallery/location2.png" alt="">
                                <a href="#" class="location-btn">Texas (20)</a>
                            </div>
                            <div class="single-instagram">
                                <img src="assets/img/gallery/location3.png" alt="">
                                <a href="#" class="location-btn">New York (20)</a>
                            </div>
                            <div class="single-instagram">
                                <img src="assets/img/gallery/location4.png" alt="">
                                <a href="#" class="location-btn">Tokyo (20)</a>
                            </div>
                            <div class="single-instagram">
                                <img src="assets/img/gallery/location4.png" alt="">
                                <a href="#" class="location-btn">Sidney (20)</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

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
    <script src="{{asset('assets/assets/js/jquery.form.jsv')}}"></script>
    <script src="{{asset('assets/js/jquery.validate.min.js')}}"></script>
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
        data-cf-beacon='{"rayId":"7cfea5e92f834f93","version":"2023.4.0","b":1,"token":"cd0b4b3a733644fc843ef0b185f98241","si":100}'
        crossorigin="anonymous"></script>
</body>