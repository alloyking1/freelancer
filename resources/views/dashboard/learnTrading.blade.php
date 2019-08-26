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
                        <h4 class="title">Learn To Trade</h4>
                        <p>Check out our free cources to step up your trading game.</p>
                    </div>


                    <br>
                    <div class="panel-body">
                        <div class="col-md-12">
                            <div class="card card-profile">
                                
                                <div class="content">
                                    <h1 class="category text-gray">Coming Soon</h1>
                                    <h4 class="card-title text-gray">Join Us now!</h4>
                                    <p class="card-content text-gray">
                                        Professional tutorial courses that will take you from beginner to advance trader in no distant time.
                                    </p>
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
