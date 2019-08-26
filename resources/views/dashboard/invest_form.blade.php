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
                        <h4 class="title">Deposit 1</h4>
                        <p class="category">Fill the form to invest</p>
                    </div>

                    <div class="panel-body">
                        <form class="form-horizontal" method="POST" action="/home/investment/store/{{ Auth::user()->id}}">
                            {{ csrf_field() }}

                            <div class="form-group{{ $errors->has('bundle_plan') ? ' has-error' : '' }}">
                                <label for="bundle_plan" class="col-md-4 control-label">Bundle Plan</label>

                                <div class="col-md-6">
                                    <select id="bundle_plan" class="form-control" name="bundle_plan" value="">
                                        <option value="Bronze">Bronze</option>
                                        <option value="Silver">Silver</option>
                                        <option value="Gold">Gold</option>
                                        <option value="Diamond">Diamond</option>
                                    </select>

                                    @if ($errors->has('bundle_plan'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('bundle_plan') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('amount') ? ' has-error' : '' }}">
                                <label for="password" class="col-md-4 control-label">Amount($)</label>

                                <div class="col-md-6">
                                    <input id="amount" type="text" class="form-control" name="amount" required>

                                    @if ($errors->has('amount'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('amount') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('wallet_id') ? ' has-error' : '' }}">
                                <label for="password" class="col-md-4 control-label">Wallet Address</label>

                                <div class="col-md-6">
                                    <input id="wallet_id" type="text" class="form-control" name="wallet_id" required>

                                    @if ($errors->has('wallet_id'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('wallet_id') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('wallet_email') ? ' has-error' : '' }}">
                                <label for="password" class="col-md-4 control-label">Wallet Email</label>

                                <div class="col-md-6">
                                    <input id="wallet_email" type="text" class="form-control" name="wallet_email" required>

                                    @if ($errors->has('wallet_email'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('wallet_email') }}</strong>
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
