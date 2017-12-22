<div class="container">
    <div class="row">
        <div class="col-md-12" id="guide-navbar-simple">

            <a href="{{ url('guide/step-1') }}">
                <div class="menu-item text-center @if(Request::is('guide/step-1') || Request::is('guide/step-1-with-domain')) active @endif">
                    <div class="step-number">Step 1</div>
                    <div class="step-description">Select Domain</div>
                </div>
            </a>

            <a href="{{ url('guide/step-2') }}">
                <div class="menu-item text-center @if(Request::is('guide/step-2')) active @endif">
                    <div class="step-number">Step 2</div>
                    <div class="step-description">Setup Hosting</div>
                </div>
            </a>

            <a href="{{ url('guide/step-3') }}">
                <div class="menu-item text-center @if(Request::is('guide/step-3')) active @endif">
                    <div class="step-number">Step 3</div>
                    <div class="step-description">Install WordPress</div>
                </div>
            </a>

            <a href="{{ url('guide/step-4') }}">
                <div class="menu-item text-center @if(Request::is('guide/step-4')) active @endif">
                    <div class="step-number">Step 4</div>
                    <div class="step-description">Blog Design</div>
                </div>
            </a>

            <a href="{{ url('guide/step-5') }}">
                <div class="menu-item text-center @if(Request::is('guide/step-5')) active @endif">
                    <div class="step-number">Step 5</div>
                    <div class="step-description">Get Blogging!</div>
                </div>
            </a>

        </div>
    </div>
</div>

<div id="guide-navbar-wrapper-mobile">
    <div class="step @if(Request::is('guide/step-1')) active @endif"><a href="{{ url('/guide/step-1') }}">Domain</a></div>
    <div class="step @if(Request::is('guide/step-2')) active @endif"><a href="{{ url('/guide/step-2') }}">Hosting</a></div>
    <div class="step @if(Request::is('guide/step-3')) active @endif"><a href="{{ url('/guide/step-3') }}">WordPress</a></div>
    <div class="step @if(Request::is('guide/step-4')) active @endif"><a href="{{ url('/guide/step-4') }}">Design</a></div>
    <div class="step @if(Request::is('guide/step-5')) active @endif"><a href="{{ url('/guide/step-5') }}">Launch</a></div>
</div>
<div id="guide-navbar-wrapper-mobile-border"></div>

<div id="guide-menu-divider-container">
    <hr id="guide-menu-divider">
</div>