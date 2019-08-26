@extends('layout.app')

@section('content')
<div class="wrapper">
    @include('inc.auth_sidebar')

    <div class="main-panel">
        @include('inc.auth_nav')
        <div class="container-fluid">
        <div class="row">
            <br><br><br><br><br><br>
            <div class="col-md-8 col-md-offset-2">
                <div class="card">
                    <div class="card-header" data-background-color="purple">
                        <h4 class="title">Your Account Manager</h4>
                    </div>


                    <br>
                    <div class="panel-body">
                        <div class="">
                                <div class="card card-profile">
                                    <div class="card-avatar">
                                        <a href="#pablo">
                                            <img class="img" src="https://mondrian.mashable.com/uploads%252Fcard%252Fimage%252F934995%252F9f835659-aa85-4a42-a413-2f55b94e0f47.jpeg%252Ffit-in__1200x9600.jpeg?signature=NAEzJcX6HxgNsn6oFyttzqSB2SU=&source=https%3A%2F%2Fblueprint-api-production.s3.amazonaws.com" />
                                        </a>
                                    </div>

                                    <div class="content">
                                        <h6 class="category text-gray">Account manager / Trader</h6>
                                        <h4 class="card-title">Adala Thompson</h4>
                                        <p class="card-content">
                                            Get in touch with your account manager for reports, complains and informations.
                                        </p>
                                        
                                        <a href="#pablo" class="btn btn-primary btn-round">Contact</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                </div>
            </div>
        </div>
        @include('inc.auth_footer')
    </div>

</div>
@endsection
