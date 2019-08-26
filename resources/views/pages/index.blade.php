@extends('layout.app')

@section('content')
    <section>
        <!-- include nav -->
        @include('inc.nav')
    </section>
   <section class="banner_colored">
        <div class="banner_head">
            <h1>Dera<span style="color:#d1d12a">Trades</span></h1>
            <h4 style="color:wheat">Cryptocurrency Investment Scheme</h4>
            <p>Cryptocurrency trading and mining, Forex and Binary traders.</p>
            <a href="/login" class="btn btn-default btn-custom" style="color: #1e2756;background-color: #fff;">Log In</a>
            <a href="/register" class="btn btn-default btn-custom">Sign Up</a>
        </div>
   </section>

   <section class="banner_white">
    
        <div class="banner_head_white">
            <h1>Why Choose DeraTrade</h1>
            <p>Equipped with the cutting edge features that make a 21st Century Cryptocurrency Investment Platform, We guarantee 80%
                success in our trade outcomes. The financial market is highly volatile and requires years of practice to master. Getting started 
                with Cryptocurrecy can be a bit complex and risky. Why not invest with professionals who have
                 years of experience and get good returns.
            </p>
            <img src="{{asset('assets/custom_style/img/trust.png')}}" alt="" class=""> 
        </div>
   </section>

   <section class="">
        <div class="banner_colored_second">
            <div class="container">
                <div class="row bundle_plans">
                    <h1>Bundle Plans</h1>
                    <p>Choose a bundle plan that suits your earing, 
                        <br>
                        Sign up and invest</p>
                </div>
                <div class="row">
                    <div class="col-md-3 box">
                        
                        <h3>Bronze</h3>
                        <hr>
                        <h5><strong>30 Days</strong> Mining Lock</h5>
                        <h5><strong>$200</strong> Minimum Deposit</h5>
                        <h5><strong>$999</strong> Maximum Deposit</h5>
                        <h5><strong>25%</strong>Return On Investment</h5>
                        <h5><strong>10%</strong> Referral Bonuse For Each Referral</h5>
                        <a href="/register" class="btn btn-default btn-custom">Sign Up</a>
                    </div>
                    <div class="col-md-3 box">
                        
                        <h3>Silver</h3>
                        <hr>
                        <h5><strong>25 Days</strong> Mining Lock</h5>
                        <h5><strong>$1000</strong> Minimum Deposit</h5>
                        <h5><strong>$9,900</strong> Maximum Deposit</h5>
                        <h5><strong>40%</strong>Return On Investment</h5>
                        <h5><strong>15%</strong> Referral Bonuse For Each Referral</h5>
                        <a href="/register" class="btn btn-default btn-custom">Sign Up</a>
                    </div>
                    <div class="col-md-3 box">
                        
                        <h3>Gold</h3>
                        <hr>
                        <h5><strong>20 Days</strong> Mining Lock</h5>
                        <h5><strong>$10,000</strong> Minimum Deposit</h5>
                        <h5><strong>$49,000</strong> Maximum Deposit</h5>
                        <h5><strong>60%</strong>Return On Investment</h5>
                        <h5><strong>20%</strong> Referral Bonuse For Each Referral</h5>
                        <a href="/register" class="btn btn-default btn-custom">Sign Up</a>
                    </div>
                    <div class="col-md-3 box">
                        
                        <h3>Diamond</h3>
                        <hr>
                        <h5><strong>15 Days</strong> Mining Lock</h5>
                        <!-- <h5>3 Days Refining</h5> -->
                        <h5><strong>$50,000</strong> Minimum Deposit</h5>
                        <h5><strong>$100,000</strong> Maximum Deposit</h5>
                        <h5><strong>80%</strong>Return On Investment</h5>
                        <h5><strong>25%</strong> Referral Bonuse For Each Referral</h5>
                        <a href="/register" class="btn btn-default btn-custom">Sign Up</a>
                    </div>
                </div>
            </div>
        </div>
   </section>

    <!-- <section class="banner_white_chat">
        <div class="">
            <div class="row">
                <div class="col-md-12">
                    <h1>Coins Present Rates</h1>
                    <div>
                        <p>
                        Bitcoin is the world’s most-traded cryptocurrency which represents a massive share of the cryptocurrency market. 
                        It was the first cryptocurrency that was introduced to the public and has therefore the most developed infrastructure. It is often considered to be a trendsetter in the cryptocurrency world. Bitcoin essentially 
                        created an alternative asset class and can be used in portfolio hedging strategies especially during the turbulent markets.
                        </p>
                    </div>
                </div>

                <div class="tradingview-widget-container"></div>
                <div class="tradingview-widget-container__widget"></div>
                <div class="col-md4"></div>
                <div class="col-md-4">
                    <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-screener.js" async>
                    </script>
                </div>
                <div class="col-md-4"></div>
                        
                
            </div>
        </div>
    </section> -->

   <section class="banner_white">
   <div class="banner_head_white">
            <h1>Get Started With DeraTrade</h1>
            <h4>Unique, Sustanable and Future</h4>
            <p>Bitcoin is the world’s most-traded cryptocurrency which represents a massive share of the cryptocurrency market.
                Get started by creating an account today.
            </p>
            <a href="/login" class="btn btn-default btn-custom" style="color: #fff;background-color: #201a75;">Log In</a>
            <a href="/register" class="btn btn-default btn-custom">Sign Up</a> 
        </div>
   </section>
   <section>
       <!-- includ footer -->
       @include('inc.footer')
   </section>
@endsection

