
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

<div id="guide-navbar-wrapper-mobile">
    <div class="step active">Step 1</div>
    <div class="step">Step 2</div>
    <div class="step">Step 3</div>
    <div class="step">Step 4</div>
    <div class="step">Step 5</div>
</div>
<div id="guide-navbar-wrapper-mobile-border"></div>

<div id="guide-menu-divider-container">
    <hr id="guide-menu-divider">
</div>