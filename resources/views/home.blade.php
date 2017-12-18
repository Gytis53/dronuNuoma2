@extends('layouts.master')

@section('title')
    Home Page
@endsection

@section('content')
    <shadow></shadow><style></style>
    <head>
        <meta charset="UTF-8">
        <title>    Home Page
        </title>

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="http://localhost/dronuNuoma/public/css/main.css">

    </head>
    <html lang="en" class=" js no-touch csstransforms3d csstransitions"><head>
        <meta charset="UTF-8">
        <title>    Home Page
        </title>

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="http://localhost/dronuNuoma/public/css/main.css">

    </head>
    <body>
        <section style="background: url(http://www.pembrokeshirecoastalforum.org.uk/wp-content/uploads/2017/03/8a5149_75dd2d1db1a140559da4b84658b81343-mv2.jpg);" class="divider">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">

                        <h2 class="h1 text-uppercase no-margin">Nuomos punktai</h2>
                        <p>Raskite žemėlapyje</p><a href="http://localhost/dronuNuoma/public/map" class="btn btn-template wide shop-now" style="background: #111111">Peržiūrėti</a>
                    </div>
                </div>
            </div>
            <a href="#" class="navbar-left"><img src="/DNCORNER.png"></a>
        </section>
        <!-- Categories Section-->
        <section class="categories">
            <div class="container">
                <header class="text-center">
                    <h2 class="text-uppercase"><small>Didžiausias dronų pasirinkimas</small>Kategorijos:</h2>
                </header>
                <div class="row text-left">
                    <div class="col-lg-6"><a href="http://localhost/dronuNuoma/public/shop/index">
                            <div style="background-image: url(http://theflycompany.co.uk/wp-content/uploads/2015/03/UAV_Blog_header.jpg);" class="item d-flex align-items-end">
                                <div class="content">
                                    <h3 class="h5">Nuoma</h3>
                                </div>
                            </div></a></div>
                    <div class="col-lg-6"><a href="http://localhost/dronuNuoma/public/shop/index">
                            <div style="background-image: url(https://images.monoprice.com/mp/category/gadgets/drones/drones_header_1600x500.jpg);" class="item d-flex align-items-end">
                                <div class="content">
                                    <h3 class="h5">Parduotuvė</h3>
                                </div>
                            </div></a></div>

                </div>
            </div>
        </section>
        {{--<!-- Men's Collection -->--}}
        {{--<section class="men-collection gray-bg">--}}
            {{--<div class="container">--}}
                {{--<header class="text-center">--}}
                    {{--<h2 class="text-uppercase"><small>Dronų nuoma</small>Dronų nuoma</h2>--}}
                {{--</header>--}}
                {{--<!-- Products Slider-->--}}

            {{--</div>--}}
        {{--</section>--}}







        <!-- Overview Popup    -->

        <div id="scrollTop"><i class="fa fa-long-arrow-up"></i></div>
        {{--<!-- Footer-->--}}
        {{--<footer class="main-footer">--}}
            {{--<!-- Service Block-->--}}
            {{--<div class="services-block">--}}
                {{--<div class="container">--}}
                    {{--<div class="row">--}}
                        {{--<div class="col-lg-6 d-flex justify-content-center justify-content-lg-start">--}}
                            {{--<div class="item d-flex align-items-center">--}}
                                {{--<div class="icon"><i class="icon-truck"></i></div>--}}
                                {{--<div class="text">--}}
                                    {{--<h6 class="no-margin text-uppercase">Nemokamas atsiėmimas ir pristatymas</h6>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                        {{--<div class="col-lg-6 d-flex justify-content-center">--}}
                            {{--<div class="item d-flex align-items-center">--}}
                                {{--<div class="icon"><i class="icon-coin"></i></div>--}}
                                {{--<div class="text">--}}
                                    {{--<h6 class="no-margin text-uppercase">Pinigų grąžinimo garantija</h6>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}

                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}


            {{--<div class="copyrights">--}}
                {{--<div class="container">--}}
                    {{--<div class="row d-flex align-items-center">--}}
                        {{--<div class="text col-md-6">--}}
                            {{--<p>© 2017 <a href="http://dronunuoma.tk" target="_blank">Alaus Baronai</a></p>--}}
                        {{--</div>--}}
                        {{--<div class="payment col-md-6 clearfix">--}}
                            {{--<ul class="payment-list list-inline-item pull-right">--}}
                                {{--<li class="list-inline-item"><img src="https://d32d8xzgnjxuvk.cloudfront.net/hub/1-2/img/visa.svg" alt="..."></li>--}}
                                {{--<li class="list-inline-item"><img src="https://d32d8xzgnjxuvk.cloudfront.net/hub/1-2/img/mastercard.svg" alt="..."></li>--}}
                                {{--<li class="list-inline-item"><img src="https://d32d8xzgnjxuvk.cloudfront.net/hub/1-2/img/paypal.svg" alt="..."></li>--}}
                                {{--<li class="list-inline-item"><img src="https://d32d8xzgnjxuvk.cloudfront.net/hub/1-2/img/western-union.svg" alt="..."></li>--}}
                            {{--</ul>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</footer>--}}

        <div id="style-switch" class="collapse">
            <h4 class="text-uppercase">Select theme colour</h4>
            <form class="mb-3">
                <select name="colour" id="colour" class="form-control style-switch-select">
                    <option value="">select colour variant</option>
                    <option value="default">violet</option>
                    <option value="pink">pink</option>
                    <option value="green">green</option>
                    <option value="red">red</option>
                    <option value="sea">sea</option>
                    <option value="blue">blue</option>
                </select>
            </form>
            <p><img src="https://d32d8xzgnjxuvk.cloudfront.net/hub/1-2/img/template-mac.png" alt="" class="img-fluid"></p>
            <p class="text-muted text-small">Stylesheet switching is done via JavaScript and can cause a blink while page loads. This will not happen in your production code.</p>
        </div>
        <!-- Javascript files-->
        <script src="https://d32d8xzgnjxuvk.cloudfront.net/hub/1-2/vendor/jquery/jquery.min.js"></script>
        <script src="https://d32d8xzgnjxuvk.cloudfront.net/hub/1-2/vendor/popper.js/umd/popper.min.js"> </script>
        <script src="https://d32d8xzgnjxuvk.cloudfront.net/hub/1-2/vendor/bootstrap/js/bootstrap.min.js"></script>
        <script src="https://d32d8xzgnjxuvk.cloudfront.net/hub/1-2/vendor/jquery.cookie/jquery.cookie.js"> </script>
        <script src="https://d32d8xzgnjxuvk.cloudfront.net/hub/1-2/vendor/owl.carousel/owl.carousel.min.js"></script>
        <script src="https://d32d8xzgnjxuvk.cloudfront.net/hub/1-2/vendor/owl.carousel2.thumbs/owl.carousel2.thumbs.min.js"></script>
        <script src="https://d32d8xzgnjxuvk.cloudfront.net/hub/1-2/vendor/bootstrap-select/js/bootstrap-select.min.js"></script>
        <script src="https://d32d8xzgnjxuvk.cloudfront.net/hub/1-2/vendor/nouislider/nouislider.min.js"></script>
        <script src="https://d32d8xzgnjxuvk.cloudfront.net/hub/1-2/js/front.js"></script>


    </div>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>

    </body></html>
@endsection
{{--@section('styles')--}}
    {{--<link href="{{URL::to('css/carousel.css')}}" rel="stylesheet">--}}
{{--@endsection--}}