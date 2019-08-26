@extends('layout.app')

@section('content')
<div class="wrapper">
    @include('inc.auth_sidebar')

    <div class="main-panel">
        @include('inc.auth_nav')
        <br><br><br><br>
        <!-- TradingView Widget BEGIN -->
        <div class="tradingview-widget-container">
            <div id="technical-analysis"></div>
            <div class="tradingview-widget-copyright"><a href="https://www.tradingview.com/symbols/AAPL/" rel="noopener" target="_blank"><span class="blue-text">AAPL chart</span></a> by TradingView</div>
            <script type="text/javascript" src="https://s3.tradingview.com/tv.js"></script>
            <script type="text/javascript">
            new TradingView.widget(
            {
            "container_id": "technical-analysis",
            "width": 998,
            "height": 610,
            "symbol": "AAPL",
            "interval": "D",
            "timezone": "exchange",
            "theme": "Light",
            "style": "1",
            "toolbar_bg": "#f1f3f6",
            "withdateranges": true,
            "hide_side_toolbar": false,
            "allow_symbol_change": true,
            "save_image": false,
            "studies": [
                "ROC@tv-basicstudies",
                "StochasticRSI@tv-basicstudies",
                "MASimple@tv-basicstudies"
            ],
            "show_popup_button": true,
            "popup_width": "1000",
            "popup_height": "650",
            "locale": "en"
            }
            );
            </script>
        </div>
        <!-- TradingView Widget END -->
        
        <!-- TradingView Widget BEGIN -->
        <div class="col-lg-3 col-md-3 col-sm-6">
            <div class="tradingview-widget-container">
            <div class="tradingview-widget-container__widget"></div>
            <div class="tradingview-widget-copyright"><a href="https://www.tradingview.com/symbols/NASDAQ-AAPL/technicals/" rel="noopener" target="_blank"><span class="blue-text">Technical Analysis for AAPL</span></a> by TradingView</div>
            <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-technical-analysis.js" async>
            {
            "width": 425,
            "height": 410,
            "symbol": "NASDAQ:AAPL",
            "locale": "en",
            "interval": "1D"
            }
            </script>
            </div>
        </div>
        <!-- TradingView Widget END -->
        
        <div class="col-lg-3 col-md-6 col-sm-6">
            <!-- TradingView Widget BEGIN -->
            <div class="tradingview-widget-container">
            <div class="tradingview-widget-container__widget"></div>
            <div class="tradingview-widget-copyright"><a href="https://www.tradingview.com/markets/cryptocurrencies/" rel="noopener" target="_blank"><span class="blue-text">Bitcoin and Altcoin Prices</span></a> by TradingView</div>
            <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-market-quotes.js" async>
            {
            "title_raw": "Cryptocurrencies",
            "symbolsGroups": [
                {
                "symbols": [
                    {
                    "name": "BITFINEX:BTCUSD"
                    },
                    {
                    "name": "BITFINEX:ETHUSD"
                    },
                    {
                    "name": "BITFINEX:XRPUSD"
                    },
                    {
                    "name": "COINBASE:BCHUSD"
                    },
                    {
                    "name": "COINBASE:LTCUSD"
                    },
                    {
                    "name": "BITFINEX:IOTUSD"
                    }
                ],
                "name": "Overview"
                },
                {
                "symbols": [
                    {
                    "name": "BITFINEX:BTCUSD"
                    },
                    {
                    "name": "COINBASE:BTCEUR"
                    },
                    {
                    "name": "COINBASE:BTCGBP"
                    },
                    {
                    "name": "BITFLYER:BTCJPY"
                    },
                    {
                    "name": "WEX:BTCRUR"
                    },
                    {
                    "name": "CME:BTC1!"
                    }
                ],
                "name": "Bitcoin"
                },
                {
                "symbols": [
                    {
                    "name": "BITFINEX:XRPUSD"
                    },
                    {
                    "name": "KRAKEN:XRPEUR"
                    },
                    {
                    "name": "KORBIT:XRPKRW"
                    },
                    {
                    "name": "BITSO:XRPMXN"
                    },
                    {
                    "name": "BINANCE:XRPBTC"
                    },
                    {
                    "name": "BITTREX:XRPETH"
                    }
                ],
                "name": "Ripple"
                },
                {
                "symbols": [
                    {
                    "name": "COINBASE:ETHUSD"
                    },
                    {
                    "name": "KRAKEN:ETHEUR"
                    },
                    {
                    "name": "KRAKEN:ETHGBP"
                    },
                    {
                    "name": "KRAKEN:ETHJPY"
                    },
                    {
                    "name": "POLONIEX:ETHBTC"
                    },
                    {
                    "name": "WEX:ETHLTC"
                    }
                ],
                "name": "Ethereum"
                },
                {
                "symbols": [
                    {
                    "name": "COINBASE:BCHUSD"
                    },
                    {
                    "name": "BITSTAMP:BCHEUR"
                    },
                    {
                    "name": "CEXIO:BCHGBP"
                    },
                    {
                    "name": "POLONIEX:BCHBTC"
                    },
                    {
                    "name": "HITBTC:BCHETH"
                    },
                    {
                    "name": "WEX:BCHLTC"
                    }
                ],
                "name": "Bitcoin Cash"
                }
            ],
            "title": "Cryptocurrencies",
            "title_link": "/markets/cryptocurrencies/prices-all/",
            "locale": "en",
            "height": 450,
            "width": 770
            }
            </script>
            </div>
            <!-- TradingView Widget END -->
        </div>

        @include('inc.auth_footer')
    </div>

</div>
@endsection
