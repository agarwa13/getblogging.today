@extends('layout.default')

@section('title','Testimonials - Get Blogging Today')
@section('description','See what people are saying about Get Blogging Today')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2>Testimonials</h2>
                <p>The last time I did a major overhaul of this tutorial (early 2017), I showed the tutorial to 25 students as I developed it in exchange for their detailed feedback. I incorporated a lot of their feedback to improve the tutorial. They made some positive comments as they reviewed the material. Here are some of the positive remarks they had.</p>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row grid">
            @foreach($testimonials as $testimonial)
            <div class="col-md-4 grid-item">
                <div class="panel panel-default testimonial">
                    <div class="panel-body">
                        <blockquote>
                            <p>{{$testimonial}}</p>
                        </blockquote>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
@endsection

@section('scripts')
<script>
    $('.grid').masonry({
        // options
        itemSelector: '.grid-item',
        columnWidth: '.grid-item'
    });
</script>
@endsection