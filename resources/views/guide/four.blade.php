@extends('layout.guide')

@section('title','')
@section('description','')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2>Step 4: Design your Blog</h2>
            </div>
        </div>

        <div class="row">
            <div class="col-md-4">
                <ul>
                @foreach($videos as $video)
                    <li>
                        <a href="#{{$video['id']}}">
                            {{$video['title']}}
                        </a>
                    </li>

                    @if($loop->iteration % 7 == 0)
                        </ul>
                        </div>
                        <div class="col-md-4">
                        <ul>
                    @endif

                @endforeach
                </ul>
            </div>
        </div>


        <div class="row">

                @foreach($videos as $video)
                <div class="col-md-6">
                    <h3 id="{{$video['id']}}">{{$video['title']}}</h3>
                    <div class="border embed-responsive embed-responsive-16by9">
                        <iframe src="https://player.vimeo.com/video/{{$video['id']}}" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                    </div>
                </div>
                @endforeach

        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="alert yellow-border m-t-m">
                    <h4>
                        Awesome! At this point, you should have a visually appealing blog and you know how to add articles to your blog. You are a blogger! Now, let's get your blog in front of people who are eager to read it, learn how you can make money from your blog and more.
                    </h4>
                </div>

                <h3 class="text-right next-step"><a href="{{ url('guide/step-5') }}">Step 5: Get Blogging >> </a></h3>
            </div>
        </div>

    </div>

@endsection