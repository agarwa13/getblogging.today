@extends('layout.guide')

@section('title','')
@section('description','')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2>2. Register your Domain Name and Setup Hosting</h2>
                <p>
                    A hosting company provides a place to store your website and it allows people around the world to see your website. There are thousands of such companies but WordPress only recommends three of those. As a Web Developer, I have created dozens of websites on all three and strongly recommend Site Ground for a variety of reasons.
                </p>
                <p>
                    To complete this step you can click on the button below to open the plans page on Site Ground. After that, you can follow along the video or presentation (both have the same instructions) to register the domain you chose in the previous step and setup hosting with Site Ground.
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
                <p>Follow along the video below to register your domain name and setup hosting with Site Ground. Alternatively, you can also download the instructions as a presentation.</p>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe src="https://player.vimeo.com/video/209041772" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                    </div>

                <div class="text-center m-t-m">
                    <p>OR</p>
                    <a class="download-presentation-link" href="#">Download Presentation</a>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="alert yellow-border m-t-m">
                    <h4>
                        Congratulations! You have now registered your domain name and you have a reliable hosting service ready to go. In the next step, we will install WordPress, the software that run's almost every successful blogger's website. Don't worry, Site Ground makes installing WordPress extremely easy.
                    </h4>
                </div>

                <h3 class="text-right"><a href="{{ url('guide/step-3') }}">Step 3: Install WordPress >> </a></h3>
            </div>
        </div>

    </div>

@endsection