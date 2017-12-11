@extends('layout.welcome')

@section('title','Privacy Policy')
@section('description','Privacy Policy for Get Blogging Today')

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
@endsection