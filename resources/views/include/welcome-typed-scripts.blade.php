Create a <span id="typed"></span> Blog
<div id="typed-strings">
    <p>Personal</p>
    <p>Fashion</p>
    <p>Design</p>
    <p>Photography</p>
    <p>Food</p>
    <p>Fitness</p>
    <p>Sports</p>
    <p>Hunting</p>
    <p>Religion</p>
    <p>Philosophy</p>
    <p>Marketing</p>
    <p>Real Estate</p>
    <p>Politics</p>
    <p>Lifestyle</p>
</div>

@push('scripts')
<script>
    $(document).ready(function(){
        var typed = new Typed('#typed', {
            stringsElement: '#typed-strings',
            typeSpeed: 100,
            backSpeed: 50,
            backDelay: 500,
            startDelay: 0,
            loop: true
        });
    });
</script>
@endpush

