@extends('layout.guide')

@section('title','Choose a Domain Name')
@section('description','')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-12">


                <h2 class="m-b-lg">Step 1: Select a Domain Name</h2>

                <div class="border embed-responsive embed-responsive-16by9">
                    <iframe src="https://player.vimeo.com/video/248507567" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                </div>

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
                    Here are a few different ways to think about your domain name. You can use</p>
                <ul>
                    <li>your own name (example: "nikhilagarwal.com")</li>
                    <li>the name of your business (example: "seattlepetstore.com")</li>
                    <li>or a completely arbitrary name that your creative mind has come up with.</li>
                </ul>

                <p>I also have some tips to help you select your domain name if you are struggling to choose between a few you have in mind. </p>

                <h3>Domain Name Selection Tips</h3>
                <h4>1. Use a domain name ending with dot-com (".com")</h4>
                <p class="m-l-sm">Dot-com domains are popular and people searching for your website may automatically assume that your website has a domain name ending with dot-com.</p>

                <h4>2. 15 Characters or Less</h4>
                <p class="m-l-sm">As a rule of thumb, you don't want to use a long domain name. People don't usually remember long domain names. In addition, there is a greater chance of them making a typo.</p>

                <h4>3. Avoid using numbers</h4>
                <p class="m-l-sm">Having a number in your domain name may confuse people. For example, consider the domain "mysecondhouse.com". People may think, it is "my2ndhouse.com".</p>

                <h4>4. Avoid using double letters</h4>
                <p class="m-l-sm">Domains like "thesecrettrain.com" may also confuse people. For example, they may think it is actually "thesecretrain.com" with a single t instead of two t's.</p>

                <h4>5. Use a domain name that rolls off your tongue</h4>
                <p class="m-l-sm">Pronounceable domain names like "MakeUpBySally.com" are much easier to use in a conversation than less pronounceable ones like "TheMakeUpAficionado.com". Some people may struggle to say "aficionado"</p>

                <h4>6. Avoid using trademarked words in your domain name</h4>
                <p class="m-l-sm">Avoid using trademarked words like "Disney" in your domain name. If you are unsure if a word in your domain name is trademarked, you can <a href="https://www.uspto.gov/trademarks-application-process/search-trademark-database" target="_blank">search the United States Patent and Trademark Office's Database.</a></p>

                <h4>7. Use an intuitive domain name</h4>
                <p class="m-l-sm">Domain names that can inform people what the blog is about can help bring more people to your blog. For example, it is reasonable to expect that seattlepetstore.com is a website that sells pet supplies and is located in Seattle.</p>

                <h4>8. Break the rules</h4>
                <p class="m-l-sm">Finally, don't treat the above tips as hard and fast rules. This website (getblogging.today) doesn't follow some of the tips above( like using a ".com" domain name).</p>


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