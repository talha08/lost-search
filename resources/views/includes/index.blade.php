<div class="inner-hero-header">
    <div class="container">
        <div class="text-center logo">
            {{--<center>--}}
                {{--<h4 style="color: #868585; font-family: cursive;">--}}
                    {{--Search Lost Objects Or Persons Information and Post Found Objects <br>--}}
                    {{--Or Persons Informations To The Website To Help Others<br>--}}
                    {{--Who Have Lost Their Valuable Things Or Persons.--}}
                {{--</h4>--}}
            {{--</center>--}}

            <!-- Homepage type Section -->
            <h1 style="color: white;font-size: -webkit-xxx-large;font-weight: bold;font-family: sans-serif;">
              <span
                      class="txt-rotate"
                      data-period="2000"
                      data-rotate='[ "Lost or Found Something !!", "Search The Biggest Community!" ]'></span>
            </h1>
            <!--End of  Homepage type -->


        </div>
        <div class="relative">
            <i class="fa fa-globe ic-fade-globe"></i>
            <!-- form search -->
                {!! Form::open(array('route' => 'foundSearch','method' =>'GET', 'class' => 'form-search-home') ) !!}
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>What</label>
                            {!! Form::text('keyword', null,array('','class'=>'form-control input-lg','placeholder'=>'Content Name...','required')) !!}
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Where</label>
                            {!! Form::text('location', null,array('','class'=>'form-control input-lg','placeholder'=>'city, province, or region...', 'required')) !!}
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    {!! Form::submit('Search', array('class' => 'btn btn-t-primary btn-lg btn-theme btn-pill btn-block')) !!}
                </div>
                <div class="text-center">
                    <a href="#modal-advanced" data-toggle="modal">Advanced Job Search</a>
                </div>
                {!! Form::close() !!}
            <!-- end form search -->
        </div>
    </div>
</div>

@include('includes.modalsearch')


