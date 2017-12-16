@extends('layout.welcome')

@section('title','How to Start a Blog - Get Blogging Today')
@section('description','Free guide to show you how to create a blog that is beautiful and functional, all in an easy step-by-step tutorial (with pictures and videos).')

@push('head-scripts')
@endpush

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
            </div>
        </div>

        <div class="row">
            <div class="col-md-6">
                Need some text here.
            </div>
            <div class="col-md-6">
                <blockquote>Start a Timer. <br> Follow this tutorial. <br>If you don't have a blog within 20 minutes, <strong>I will personally create one for you</strong>.</blockquote>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <h1>Need Call to Action Here.</h1>
            </div>
        </div>

    </div>


    <div class="jumbotron">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="text-center">
                        <h2>Make Any Kind of Blog you Like</h2>
                        <h4>
                            These are real blogs that you can create using this tutorial.
                        </h4>
                    </div>
                </div>
            </div>
            @include('include.example-sites')

            <div class="row m-t-m">
                <div class="col-md-12 text-center">
                    <a href="{{url('/guide/step-1')}}" class="btn btn-lg btn-yellow">
                        @include('include.welcome-typed-scripts')
                    </a>

                </div>
            </div>

        </div>
    </div>

    <div class="container">
        <div class="row m-b-m">
            <div class="col-md-offset-2 col-md-8">

                <div class="text-center">
                    <h2>The Get Blogging Today Advantage</h2>
                </div>
                <h3><span class="glyphicon glyphicon-ok" aria-hidden="true"></span> The Easiest Guide to Follow</h3>
                <p>
                    Even if you regularly struggle with using a computer, this guide will ensure you are succecssful. No experience or technical skills are required to start your blog with this guide.
                </p>
                <h3>
                    <span class="glyphicon glyphicon-ok" aria-hidden="true"></span> Download and Print versions available
                </h3>
                <p>You can download a PDF with annotated pictures for each step of the process and follow along. Alternatively, you can follow the same content via the video tutorial on the website.</p>
                <h3>
                    <span class="glyphicon glyphicon-ok" aria-hidden="true"></span> Regularly updated
                </h3>
                <p>
                    This guide is updated regularly. Therefore, everything will look exactly as is shown in this guide when you follow my steps. I spend 10 hours per month on average to make sure this guide is up to date.
                </p>
                <h3><span class="glyphicon glyphicon-ok" aria-hidden="true"></span> Works on all devices (Mobile, Tablet and Laptops)</h3>
                <p>
                    This website is built so that you can watch and implement the lessons on any device. Your smartphone included! Really, you can start a blog with this guide from your smartphone!
                </p>
                <h3><span class="glyphicon glyphicon-ok" aria-hidden="true"></span> Free guide</h3>
                <p>
                    I get a commission from one of the companies I recommend (Site Ground). As a result, this guide is completely free for your use. Typically, I would charge 300-600$ for this guide.
                </p>
                <h3><span class="glyphicon glyphicon-ok" aria-hidden="true"></span> Support available</h3>
                <p>
                    There is an icon on the bottom right of every page. Click on it to chat with my instantly. I am here to support you.
                </p>
                <h3><span class="glyphicon glyphicon-ok" aria-hidden="true"></span> Guaranteed success</h3>
                <p>
                    Here's the deal. Start a timer and get going through this guide. If you don't have a blog up in 20 minutes, I will create your blog for you.
                </p>

                <div class="text-center">
                    <a id="welcome-button" href="{{ url('/guide/step-1') }}" class="btn btn-lg btn-yellow m-t-lg">Create a Blog Today</a>
                </div>

            </div>
        </div>
    </div>

@endsection