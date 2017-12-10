
<div class="jumbotron" id="guide-navbar-wrapper">
    <div class="container">
        <div class="row">
            <div class="col-md-12">

                <div id="guide-navbar">

                    <div class="step">
                        <div class="image shadow">
                            <a href="{{ url('guide/step-1') }}"><div id="icon-one" class="icon-holder @if(Request::is('guide/step-1')) active @endif"></div></a>
                        </div>
                        <div class="description text-center">
                            <a class="@if(Request::is('guide/step-1')) active @endif" href="{{ url('guide/step-1') }}">Select Your<br>Domain</a>
                        </div>

                        <img class="@if(Request::is('guide/step-1')) active @endif" id="guide-menu-arrow" src="/images/triangle_pointer.png" width="59px" height="29px">

                    </div>

                    <div class="dots">
                        <span class="dot"></span>
                        <span class="dot"></span>
                    </div>


                    <div class="step">
                        <div class="image shadow">
                            <a href="{{ url('guide/step-2') }}"><div id="icon-two" class="icon-holder @if(Request::is('guide/step-2')) active @endif"></div></a>
                        </div>
                        <div class="description text-center">
                            <a class="@if(Request::is('guide/step-2')) active @endif" href="{{ url('guide/step-2') }}">Setup<br>Hosting</a>
                        </div>
                        <img class="@if(Request::is('guide/step-2')) active @endif" id="guide-menu-arrow" src="/images/triangle_pointer.png" width="59px" height="29px">
                    </div>

                    <div class="dots">
                        <span class="dot"></span>
                        <span class="dot"></span>
                    </div>

                    <div class="step">
                        <div class="image shadow">
                            <a href="{{ url('guide/step-3') }}"><div id="icon-three" class="icon-holder @if(Request::is('guide/step-3')) active @endif"></div></a>
                        </div>
                        <div class="description text-center">
                            <a class="@if(Request::is('guide/step-3')) active @endif" href="{{ url('guide/step-3') }}">Install<br>WordPress</a>
                        </div>
                        <img class="@if(Request::is('guide/step-3')) active @endif" id="guide-menu-arrow" src="/images/triangle_pointer.png" width="59px" height="29px">
                    </div>

                    <div class="dots">
                        <span class="dot"></span>
                        <span class="dot"></span>
                    </div>

                    <div class="step">
                        <div class="image shadow">
                            <a href="{{ url('guide/step-4') }}"><div id="icon-four" class="icon-holder @if(Request::is('guide/step-4')) active @endif"></div></a>
                        </div>
                        <div class="description text-center">
                            <a class="@if(Request::is('guide/step-4')) active @endif" href="{{ url('guide/step-4') }}">Design<br>Your Blog</a>
                        </div>
                        <img class="@if(Request::is('guide/step-4')) active @endif" id="guide-menu-arrow" src="/images/triangle_pointer.png" width="59px" height="29px">
                    </div>

                    <div class="dots">
                        <span class="dot"></span>
                        <span class="dot"></span>
                    </div>

                    <div class="step">
                        <div class="image shadow">
                            <a href="{{ url('guide/step-5') }}"><div id="icon-five" class="icon-holder @if(Request::is('guide/step-5')) active @endif"></div></a>
                        </div>
                        <div class="description text-center">
                            <a class="@if(Request::is('guide/step-5')) active @endif" href="{{ url('guide/step-5') }}">Get Blogging<br>Today</a>
                        </div>
                        <img class="@if(Request::is('guide/step-5')) active @endif" id="guide-menu-arrow" src="/images/triangle_pointer.png" width="59px" height="29px">
                    </div>

                </div>

            </div>
        </div>
    </div>
</div>

<div id="guide-navbar-wrapper-mobile" class="carousel slide" data-ride="carousel" data-interval="false">
    <!-- Indicators -->
    {{--<ol class="carousel-indicators">--}}
        {{--<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>--}}
        {{--<li data-target="#carousel-example-generic" data-slide-to="1"></li>--}}
        {{--<li data-target="#carousel-example-generic" data-slide-to="2"></li>--}}
        {{--<li data-target="#carousel-example-generic" data-slide-to="3"></li>--}}
        {{--<li data-target="#carousel-example-generic" data-slide-to="4"></li>--}}
    {{--</ol>--}}

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
        <div class="item active">
            <img src="/images/domain_search.png">
            <div class="carousel-caption">
                Select your Domain
            </div>
        </div>
        <div class="item">
            <img src="/images/hosting.png">
            <div class="carousel-caption">
                Setup Hosting
            </div>
        </div>
        <div class="item">
            <img src="/images/wordpress.png">
            <div class="carousel-caption">
                Install WordPress
            </div>
        </div>
        <div class="item">
            <img src="/images/design.png">
            <div class="carousel-caption">
                Design your Blog
            </div>
        </div>
        <div class="item">
            <img src="/images/launch.png">
            <div class="carousel-caption">
                Get Blogging Today
            </div>
        </div>
    </div>

    <!-- Controls -->
    <a class="left carousel-control" href="#guide-navbar-wrapper-mobile" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#guide-navbar-wrapper-mobile" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>

<div id="guide-menu-divider-container">
    <hr id="guide-menu-divider">
</div>