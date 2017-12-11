@extends('layout.default')

@section('title','Privacy Policy')
@section('description','Privacy Policy for Get Blogging Today')

@section('content')

    <div class="jumbotron" id="welcome-jumbotron">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="text-center">
                        <h1 id="welcome-heading">Create a Blog in 5 minutes</h1>
                        <h2 id="welcome-tagline" class="m-t-lg">
                            Follow the
                            <span id="step-by-step"><s>step-by-step</s><span id="click-by-click">click-by-click</span></span>

                            <span id="post-click-by-click">instructions to get started</span>
                        </h2>
                    </div>
                </div>
            </div>

            <div class="row m-t-m">
                <div class="col-md-6 col-md-offset-3">
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe src="https://player.vimeo.com/video/209041772" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="text-center">
                        <div id="welcome-button" class="btn btn-lg btn-yellow m-t-lg">
                            Start Blogging
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection