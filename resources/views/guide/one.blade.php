@extends('layout.guide')

@section('title','Choose a Domain Name')
@section('description','')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-12">

                <h2>1. Choose a Domain Name</h2>
                <p>
                    For the uninitiated, the domain name is the address of your website. This is what someone can type into the browser to reach your website. For example, you can type "google.com" in your browser to reach Google's website.
                </p>

                <p>
                    If you already know the domain name you would like to use, you can check to make sure it is available and no one else has already taken it.
                </p>

                <div class="panel panel-default">
                    <div class="panel-body domain-availability-panel">
                        <h4>Check the Availability of your Domain Name</h4>
                        @include('include.domain-availability-widget')
                    </div>
                </div>

                <h3>How to Select a Domain Name</h3>
                <p>
                    If you are unsure of which domain name you want to use, I have some tips to help you select your domain name. Here are a few different ways to think about your domain name. You can use</p>
                <ul>
                    <li>your own name (example: "nikhilagarwal.com")</li>
                    <li>the name of your business (example: "seattlepetstore.com")</li>
                    <li>or a completely arbitrary name that your creative mind has come up with.</li>
                </ul>

                <h3>Domain Name Selection Tips</h3>
                <h4>1. Use a domain name ending with dot-com (".com")</h4>
                <p class="m-l-sm">Dot-com domains are popular and people searching for your website may automatically assume that your website has a domain name ending with dot-com.</p>

                <h4>2. 15 Characters or Less</h4>
                <p class="m-l-sm">As a rule of thumb, you don't want to use a long domain name. People don't usually remember long domain names. In addition, there is a greater chance of them making a typo.</p>

                <h4>3. Avoid using numbers</h4>
                <p class="m-l-sm">Having a number in your domain name may confuse people. For example, consider the domain "mysecondhouse.com". People may think, it is "my2ndhouse.com".</p>

                <h4>4. Avoid using double letters</h4>
                <p class="m-l-sm">Domains like "thesecrettrain.com" may also confuse people. For example, they may think it is actually "thesecretrain.com" with a single t instead of two t's.</p>

                <div class="alert yellow-border m-t-m">
                    <h4>
                        Awesome! Now that you have selected a domain name and have checked that it is available, in the next step we are going to register that domain name so that no one else can use it. We will also setup hosting. More about that in the next step.
                    </h4>
                </div>

                <h3 class="text-right"><a href="{{ url('guide/step-2') }}">Step 2: Register Domain and Setup Hosting >> </a></h3>

            </div>
        </div>
    </div>

@endsection