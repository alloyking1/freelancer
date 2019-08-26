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
                        <h4 class="title">Deposit 2</h4>
                        <p class="category">Upload your Evidence of payment</p>
                    </div>

                    <div class="panel-body">
                        <div class="" style="padding-left:10px; padding-right:10px;">
                            <img src="{{asset('assets/custom_style/img/btc_jaga.png')}}" alt="" class="" style="width:33%; height:33%;">
                            <h2>Your transaction will remain incomplete until you upload prove of payment</h2>
                            <h5>Payment Method:Bitcoin</h5>
                            <h3>Send Payment To:</h3>
                            <br>
                            <p style="font-size:1.2rem;">1PAnYDMZzmEa1vmKtLCBLYJGJW6ecN3EXH</p> 
                        </div>
                        <form class="form-horizontal" method="POST" action="/home/investment/img/store/{{ Auth::user()->id}}" enctype="multipart/form-data">
                            {{ csrf_field() }}

                            <div class="form-group{{ $errors->has('payment_proof') ? ' has-error' : '' }}">
                                <label for="payment_proof" class="col-md-4 control-label">payment_proof</label>

                                <div class="col-md-6">
                                    <input id="payment_proof" type="file" class="form-control" name="payment_proof" value="" required autofocus>

                                    @if ($errors->has('payment_proof'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('payment_proof') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                            
                            <div class="form-group">
                                <div class="col-md-8 col-md-offset-4">
                                    <button type="submit" class="btn btn-primary">
                                        Continue
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        @include('inc.auth_footer')
    </div>

</div>
@endsection
