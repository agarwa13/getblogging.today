@extends('layout.guide')

@section('title','')
@section('description','')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-12">

                <h2>3. Install WordPress</h2>
                <h3>Secure your Website</h3>
                <p>
                    Before we install WordPress, we should ensure we have an SSL certificate. An SSL certificate protects the privacy of people who visit our website. It prevents hackers from stealing their information. You know you are on a website that is secured by an SSL certificate when you see a padlock in the address bar.
                </p>

                <img src="#" class="img-responsive" alt="Image of Padlock in different browsers">

                <p>
                    Follow the quick video below to ensure your visitors are protected:
                </p>
            </div>
        </div>

        <div class="row">
            <div class="col-md-8">
                <div class="embed-responsive embed-responsive-16by9">
                    <iframe src="https://player.vimeo.com/video/209117005" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <h3>Setup Cloud Flare</h3>
                <p>
                    Cloud Flare is just awesomeness. You see, Site Ground provides a computer in one location, say Chicago. The further away someone is from Chicago, the slower the website appears to that person. Cloud Flare solves this problem by essentially making copies of parts of your website all over the world!
                </p>
                <p>
                    Follow the video below to setup Cloud Flare. Since Site Ground is a Cloud Flare partner, the integration is seamless and setup only takes a few seconds.
                </p>
            </div>
        </div>

        <div class="row">
            <div class="col-md-8">
                <div class="embed-responsive embed-responsive-16by9">
                    <iframe src="https://player.vimeo.com/video/209117005" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <h3>Install WordPress</h3>
                <p>
                    Now we are ready to install WordPress. WordPress gives us the ability to create a beautiful blog without having to write a single line of code! Follow the video below to install WordPress:
                </p>
            </div>
        </div>

        <div class="row">
            <div class="col-md-8">
                <div class="embed-responsive embed-responsive-16by9">
                    <iframe src="https://player.vimeo.com/video/209117005" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="alert yellow-border m-t-m">
                    <h4>
                        Congratulations! You now have a fast and secure WordPress website. In the next lesson, I will show you how to use WordPress. Specifically, we will talk about how you can change how your blog looks, how you can add content (blog posts) to your blog, how you can add images to your blog and more.
                    </h4>
                </div>

                <h3 class="text-right"><a href="{{ url('guide/step-4') }}">Step 4: Design your Blog >> </a></h3>
            </div>
        </div>

    </div>

@endsection