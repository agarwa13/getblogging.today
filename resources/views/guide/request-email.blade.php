@extends('layout.guide')

@section('title','')
@section('description','')

@section('content')

    <div class="container">

        <div class="row">
            <div class="col-md-12">
                <h2>Step 4: Design your Blog</h2>
                <p>
                    In the next few lessons, you will learn how to use WordPress. Unlike all the other videos on this website, I have not created these videos myself. Instead, I regularly pay WP 101 to create and update these videos and allow me to share them with you for Free.
                </p>

                <p>
                    WP 101 has requested that I keep these videos password protected. Therefore, you need to share your email address with me so I can send you the password. Your email will not be used for anything else. In fact, we don't even store your email address.
                </p>
            </div>
        </div>

        @if( !empty($data['message']) )
        <div class="row">
            <div class="col-md-12">
                <div class="alert alert-success alert-dismissable">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    {{ $message }}
                </div>
            </div>
        </div>
        @endif

        <div class="row">
            <div class="col-md-6">
                <div class="panel panel-primary">
                    <div class="panel-body">
                        <h3>Step 1: Get the Password</h3>
                        <form method="post" action="{{ url('/reveal-password') }}">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <label for="email">Email address to send the password</label>
                                <input type="email" class="form-control" id="email" name="email" placeholder="hi@example.com">
                            </div>
                            <button type="submit" class="btn btn-primary">Send the Password</button>
                        </form>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="panel panel-primary">
                    <div class="panel-body">
                        <h3>Step 2: Reveal the Videos</h3>
                        <form method="get" action="{{ url('/store-cookie') }}">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <label for="password">Password</label>
                                <input type="password" class="form-control" id="password" name="password">
                            </div>
                            <button type="submit" class="btn btn-primary">Reveal the Videos</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection