@extends('layout.app')

@section('content')
<div class="wrapper">
	@include('inc.auth_sidebar')

	<div class="main-panel">
		@include('inc.auth_nav')

		<div class="content">
			<div class="container-fluid">
				<div class="row">
					@if (Session::has('message'))
						<div class="alert alert-info">{{Session::get('message')}}</div>
					@endif
				</div>

				<div class="row">
					<div class="col-lg-3 col-md-6 col-sm-6">
						<div class="card card-stats">
							<div class="card-header" data-background-color="orange">
								<i class="material-icons">playlist_add</i>
							</div>
							<div class="card-content">
								<p class="category">Investment Plan</p>
								<!-- invested amount -->
								@if(count($investment) <= 0)
									<h3 class="title">You have not invested yet</h3>
								@elseif(count($investment))
								<h3 class="title">{{$investment->bundle_plan}}</h3>
									<h3 class="title">${{$investment->amount}}</h3>
								@endif
							</div>
							<div class="card-footer">
								<div class="stats">
									<i class="material-icons text-danger">warning</i>
								</div>
							</div>
						</div>
					</div>

					<div class="col-lg-3 col-md-6 col-sm-6">
						<div class="card card-stats">
							<div class="card-header" data-background-color="green">
								<i class="material-icons">account_balance_wallet</i>
							</div>
							<div class="card-content">
								<p class="category">Expected Withdrawer</p>
								<!-- expected earnigs -->
								@if(count($investment) <= 0)
									<h3 class="title">You have not invested yet</h3>
								@elseif($investment->investment_status === 0)
									<h3 class="title">Investment Pending approval</h3>
								@elseif($investment->investment_status === 1)
									<h3 class="title">${{$investment->due_earnings}}</h3>
								@endif
							</div>
							<div class="card-footer">
								<a href="/home/investment/withdraw/{id}" type="submit" class="btn btn-primary">
									<i class="material-icons left">attach_money</i>withdraw
								</a>
							</div>
						</div>
					</div>

					<div class="col-lg-3 col-md-6 col-sm-6">
						<div class="card card-stats">
							<div class="card-header" data-background-color="blue">
								<i class="material-icons">extension</i>
							</div>
							<div class="card-content">
								<p class="category">Referral Bonuse</p>
								<!-- expected earnigs -->
								@if(count($investment) <= 0)
									<h3 class="title">No investment yet</h3>
								@elseif($investment->ref_bonuse <= 0)
									<h3 class="title">No referral bonuse</h3>
								@elseif($investment->investment_status === 1)
									<h3 class="title">${{$investment->ref_bonuse}}</h3>
								@endif
							</div>
							
							<div class="card-footer">
								<div class="stats">
									<a href="/home/investment/refwithdraw/{id}" type="submit" class="btn btn-primary" style="background-color:green;">
										<i class="material-icons left">attach_money</i>withdraw
									</a>
								</div>
							</div>
						</div>
					</div>

					<div class="col-lg-3 col-md-6 col-sm-6">
						<div class="card card-stats">
							<div class="card-header" data-background-color="red">
								<i class="material-icons">account_box</i>
							</div>
							<div class="card-content">
								<p class="category">Referral Link</p>
								<!-- expected earnigs -->
								<div>
									{{url('/register?ref='. Auth::user()->email)}}
								</div>
							</div>
							<div class="card-footer">
								<div class="stats">
									<i class="material-icons text-danger">good</i>
									<p>Copy and share link to earn more</p>
								</div>
							</div>
						</div>
					</div>

				</div>

				<div class="col-lg-3 col-md-6 col-sm-6">
					<!-- TradingView Widget BEGIN -->
					<div class="tradingview-widget-container">
						<div class="tradingview-widget-container__widget"></div>
						<div class="tradingview-widget-copyright"><a href="https://www.tradingview.com/markets/cryptocurrencies/" rel="noopener" target="_blank"><span class="blue-text">Bitcoin and Altcoin Prices</span></a> by TradingView</div>
						<script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-market-overview.js" async>
						{
						"title_raw": "Cryptocurrencies",
						"belowLineFillColorGrowing": "rgba(60, 188, 152, 0.05)",
						"gridLineColor": "rgba(233, 233, 234, 1)",
						"scaleFontColor": "rgba(218, 221, 224, 1)",
						"title": "Cryptocurrencies",
						"tabs": [
							{
							"title_raw": "Overview",
							"symbols": [
								{
								"s": "BITFINEX:BTCUSD"
								},
								{
								"s": "BITFINEX:ETHUSD"
								},
								{
								"s": "BITFINEX:XRPUSD"
								},
								{
								"s": "COINBASE:BCHUSD"
								},
								{
								"s": "COINBASE:LTCUSD"
								},
								{
								"s": "BITFINEX:IOTUSD"
								}
							],
							"quick_link": {
								"href": "/markets/cryptocurrencies/prices-all/",
								"title": "More Cryptocurrencies"
							},
							"title": "Overview"
							},
							{
							"title_raw": "Bitcoin",
							"symbols": [
								{
								"s": "BITFINEX:BTCUSD"
								},
								{
								"s": "COINBASE:BTCEUR"
								},
								{
								"s": "COINBASE:BTCGBP"
								},
								{
								"s": "BITFLYER:BTCJPY"
								},
								{
								"s": "WEX:BTCRUR"
								},
								{
								"s": "CME:BTC1!"
								}
							],
							"quick_link": {
								"href": "/markets/cryptocurrencies/prices-bitcoin/",
								"title": "More Bitcoin Pairs"
							},
							"title": "Bitcoin"
							},
							{
							"title_raw": "Ripple",
							"symbols": [
								{
								"s": "BITFINEX:XRPUSD"
								},
								{
								"s": "KRAKEN:XRPEUR"
								},
								{
								"s": "KORBIT:XRPKRW"
								},
								{
								"s": "BITSO:XRPMXN"
								},
								{
								"s": "BINANCE:XRPBTC"
								},
								{
								"s": "BITTREX:XRPETH"
								}
							],
							"quick_link": {
								"href": "/markets/cryptocurrencies/prices-ripple/",
								"title": "More Ripple Pairs"
							},
							"title": "Ripple"
							},
							{
							"title_raw": "Ethereum",
							"symbols": [
								{
								"s": "COINBASE:ETHUSD"
								},
								{
								"s": "KRAKEN:ETHEUR"
								},
								{
								"s": "KRAKEN:ETHGBP"
								},
								{
								"s": "KRAKEN:ETHJPY"
								},
								{
								"s": "POLONIEX:ETHBTC"
								},
								{
								"s": "WEX:ETHLTC"
								}
							],
							"quick_link": {
								"href": "/markets/cryptocurrencies/prices-ethereum/",
								"title": "More Ethereum Pairs"
							},
							"title": "Ethereum"
							},
							{
							"title_raw": "Bitcoin Cash",
							"symbols": [
								{
								"s": "COINBASE:BCHUSD"
								},
								{
								"s": "BITSTAMP:BCHEUR"
								},
								{
								"s": "CEXIO:BCHGBP"
								},
								{
								"s": "POLONIEX:BCHBTC"
								},
								{
								"s": "HITBTC:BCHETH"
								},
								{
								"s": "WEX:BCHLTC"
								}
							],
							"quick_link": {
								"href": "/markets/cryptocurrencies/prices-bitcoin-cash/",
								"title": "More Bitcoin Cash Pairs"
							},
							"title": "Bitcoin Cash"
							}
						],
						"plotLineColorFalling": "rgba(255, 74, 104, 1)",
						"plotLineColorGrowing": "rgba(60, 188, 152, 1)",
						"showChart": true,
						"title_link": "/markets/cryptocurrencies/prices-all/",
						"locale": "en",
						"symbolActiveColor": "rgba(242, 250, 254, 1)",
						"belowLineFillColorFalling": "rgba(255, 74, 104, 0.05)",
						"height": 660,
						"width": 400
						}
						</script>
					</div>
					<!-- TradingView Widget END -->
				</div>
				
			</div>
		</div>
		@include('inc.auth_footer')
	</div>


@endsection
