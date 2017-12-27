@extends('layout.guide')

@section('title','')
@section('description','')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2>2. Register your Domain Name and Setup Hosting</h2>
                <h3>Use Google Domains to Register your Domain</h3>
                <p>
                    A domain registrar allows you to claim or register your domain name. Once you have registered your domain name, no one else can use it. There are thousands of domain registrars. The cost of registering a domain is the same on almost all of the domain registrars, however, they are not all made equal.
                </p>

                <p>
                    I highly recommend using <a href="https://domains.google/#/">Google Domains</a> to register your domain name. I will show you how to register your domain name with Google Domains in the following video (or you can <a href="#">download / print the presentation</a> that contains the same steps). You can read the aside if you are curious why I recommend Google Domains.
                </p>

                <div class="well">
                    <h4>Aside: Why do I recommend Google Domains?</h4>
                    <p>
                        Google Domains offers free Private Registration. Every other registrar charges for private registration. Private registration hides your personal information like your address from public view. <strong>Without it, anyone could look up your phone number, home address and email address by just knowing your domain name.</strong> As a result, you receive many phone calls and emails from people with unsolicited offers as well as people trying to outright scam you. With Google Domain's free private registration, Google protects your information. If you are interested, <a class="" href="{{ url('https://vimeo.com/209030342') }}" target="_blank">watch my video to see how easily scam artists can look up your personal information if you do not use Google's private registration.</a>
                    </p>
                </div>

                <p>To get started:</p>


            </div>
        </div>

        <div class="row">
            <div class="col-md-6">
                <a target="_blank" href="https://domains.google/#/" class="btn btn-lg btn-primary btn-block">Open Google Domains in a New Window</a>
            </div>
        </div>

        <div class="row row-after-button">
            <div class="col-md-12">
                <p>
                    Follow along the video below to register your domain name privately. Alternatively, you can also <a href="{{ url('#') }}">download the instructions as a presentation</a>.
                </p>
            </div>
        </div>

        <div class="row">
            <div class="col-md-8">
                <div class="border embed-responsive embed-responsive-16by9">
                    <iframe src="https://player.vimeo.com/video/248909073" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                </div>
            </div>
        </div>


        <div class="row">
            <div class="col-md-12">


                <h3 class="m-t-lg">Use Site Ground to Host your Blog</h3>
                <p>
                    A hosting company provides a place to store your website and it allows people around the world to see your website. Like Domain Registrar's, there are thousands of such companies but WordPress (the most popular blogging platform in the world) only recommends three of those. As a Web Developer, I have created dozens of websites on all three and strongly recommend <a href="{{ url('/siteground') }}">Site Ground</a>. Read the aside to understand why I recommend Site Ground.</p>

                <div class="well">
                    <h4>Aside: Why do I recommend Site Ground?</h4>
                    <p>
                        Site Ground uses modern computers and software. As a result, your blog is displayed more quickly and is more secure. People visiting your blog are less likely to get hacked and your own website remains in your control.
                    </p>
                    <p>
                        Site Ground is one of the most affordable hosting providers. It only costs $3.95 per month to sign up with Site Ground when you go through a link on Get Blogging Today, thus making it one of the cheapest hosting providers.
                    </p>
                    <p>
                        Site Ground offers excellent customer service. This is extremely rare among hosting service providers.
                    </p>
                    <p>
                        If you are curious, you can learn more by <a href="https://vimeo.com/247904236">watching a video I created that compares the three hosting providers recommended by WordPress.org</a>.
                    </p>

                </div>

                <p>
                    Click on the button below to open the plans page on <a href="{{ url('/siteground') }}">Site Ground</a>. After that, you can follow along the video or presentation (both have the same instructions) to setup hosting with <a href="{{ url('/siteground') }}">Site Ground</a>.
                </p>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6">
                <a target="_blank" href="{{ url('/siteground') }}" class="btn btn-lg btn-primary btn-block">Open Site Ground in a New Window</a>
            </div>
        </div>

        <div class="row row-after-button">
            <div class="col-md-12">
                <p>Follow along the video below to setup hosting with <a href="{{ url('/siteground') }}">Site Ground</a>. Alternatively, you can also download the instructions as a presentation.</p>
            </div>
        </div>

        <div class="row">
            <div class="col-md-8">
                    <div class="border embed-responsive embed-responsive-16by9">
                        <iframe src="https://player.vimeo.com/video/248910709" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                    </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">

                <h3>Finally, let's connect Google Domains to Site Ground</h3>
                <p>
                    We need to let Google Domains know that Site Ground is hosting our website. Follow along this video (or download the presentation), to complete the necessary steps to get Google Domains and Site Ground work together.
                </p>
            </div>
        </div>

        <div class="row">
            <div class="col-md-8">
                <div class="border embed-responsive embed-responsive-16by9">
                    <iframe src="https://player.vimeo.com/video/248910893" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="alert yellow-border m-t-m">
                    <h4>
                        Congratulations! You have now registered your domain name, setup hosting  and connected the two! In the next step, we will make your website secure and install WordPress, the software that run's almost every successful blogger's website. Don't worry, <a href="{{ url('/siteground') }}">Site Ground</a> makes all of it very easy.
                    </h4>
                </div>

                <h3 class="text-right"><a href="{{ url('guide/step-3') }}">Step 3: Install WordPress >> </a></h3>
            </div>
        </div>

    </div>

@endsection