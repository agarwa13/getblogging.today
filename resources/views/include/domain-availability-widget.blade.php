<div id="domain-availability">

    <div class="form-wrapper">
        <form method="get" action="{{ url('/guide/step-1-with-domain') }}">
            <div class="form-group">
                <label for="domain_name">Type the Domain Name Here</label>
                <input type="text" class="form-control" id="domain_name" name="domain_name" placeholder="example.com">
            </div>
            <button type="submit" class="btn btn-block btn-primary">Check Availability</button>
        </form>
    </div>

    <div class="alert-wrapper" >
        <div class="alert alert-{{$alert_type}}">
            {!! $domain_availability !!}
        </div>
    </div>

</div>
<div class="clearfix"></div>