@extends('layout.welcome')

@section('title','How to Start a Blog - Get Blogging Today')
@section('description','Free guide to show you how to create a blog that is beautiful and functional, all in an easy step-by-step tutorial (with pictures and videos).')

@section('content')

    <div class="jumbotron" id="welcome-jumbotron">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="text-center">
                        <h1 id="welcome-heading">Create a Blog in 5 easy steps</h1>
                        <h2 id="welcome-tagline" class="m-t-m">
                            Follow the <s>step-by-step</s> <span class="yellow-text">click-by-click</span> instructions to get started
                        </h2>
                    </div>
                </div>
            </div>

            <div class="row m-t-lg">
                <div class="col-md-6 col-md-offset-3">
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe src="https://player.vimeo.com/video/209041772" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="text-center">
                        <a id="welcome-button" href="{{ url('/guide/step-1') }}" class="btn btn-lg btn-yellow m-t-lg">
                            Start Blogging
                        </a>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Hello.</h1>
                <h2>Welcome to the easiest guide to creating a blog.</h2>
                <h2>Over 4800 people have used this guide to create and I continually ask for feedback so I can improve this guide. So you are in good hands!</h2>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6">
                <p>To give you even more confidence that you can do this, I offer my personal services. Follow this guide, give it a shot. If anything doesn't work out, if you get stuck anywhere, just shoot me a note. I will personally setup your blog for you.</p>
            </div>
            <div class="col-md-6">
                <h2>I personally guarantee that you will have a beautiful blog within a few minutes or I will spend 30 minutes on Skype helping you through everything.</h2>
            </div>
        </div>


        <div class="row">
            <div class="col-md-offset-3 col-md-6">
                <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">

                    <!-- Wrapper for slides -->
                    <div class="carousel-inner" role="listbox">
                        <div class="item active">
                            <img src="/images/example-sites/beyondconstruction.jpg">
                        </div>
                        <div class="item">
                            <img src="/images/example-sites/glamorhippie-au.jpg">
                        </div>
                        <div class="item">
                            <img src="/images/example-sites/iamitalian.jpg">
                        </div>
                        <div class="item">
                            <img src="/images/example-sites/lifeonaplate.jpg">
                        </div>
                        <div class="item">
                            <img src="/images/example-sites/livetheadventure.jpg">
                        </div>
                        <div class="item">
                            <img src="/images/example-sites/msihua.jpg">
                        </div>
                        <div class="item">
                            <img src="/images/example-sites/quirkycooking.jpg">
                        </div>
                        <div class="item">
                            <img src="/images/example-sites/roadtoquiet.jpg">
                        </div>
                    </div>

                    <!-- Controls -->
                    <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </div>

    </div>

@endsection