<!DOCTYPE html>
<html lang="en">

<head>

    <title>Crypo</title>
    @include('layouts.header')

</head>

<body id="dark">
    @include('layouts.nav')


    <div class="markets ptb70">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="markets-container">
                        <div class="markets-content">
                            <h2>BTC Index</h2>
                            <p>7340.65</p>
                            <span class="green"> + 0.45%</span>
                        </div>
                        <div class="markets-chart">
                            <div id="marketsChartBtcLight"></div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="markets-container">
                        <div class="markets-content">
                            <h2>ETH Index</h2>
                            <p>146.58</p>
                            <span class="red"> - 5.09%</span>
                        </div>
                        <div class="markets-chart">
                            <div id="marketsChartEthLight"></div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="markets-container">
                        <div class="markets-content">
                            <h2>LTC Index</h2>
                            <p>44.49</p>
                            <span class="green"> + 2.14%</span>
                        </div>
                        <div class="markets-chart">
                            <div id="marketsChartLtcLight"></div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="markets-pair-list">




                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Pairs</th>
                                    <th>Coin</th>
                                    <th>Last Price</th>
                                    <th>Change (24H)</th>
                                    <th>High (24H)</th>
                                    <th>Low (24h)</th>
                                    <th>Volume (24h)</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr >
                                    <td><i class="icon ion-md-star"></i> ETH/BTC</td>
                                    <td><img src="../assets/img/icon/1.png" alt="eth"> ETH</td>
                                    <td>7394.06</td>
                                    <td class="green">+0.78%</td>
                                    <td>7444.91</td>
                                    <td>7267.06</td>
                                    <td>431,687,258.77</td>
                                </tr>
                                <tr data-href="/">
                                    <td><i class="icon ion-md-star"></i> EOS/BTC</td>
                                    <td><img src="../assets/img/icon/2.png" alt="vid"> EOS</td>
                                    <td>6984.06</td>
                                    <td class="red">-1.65%</td>
                                    <td>6554.91</td>
                                    <td>6548.06</td>
                                    <td>431,684,298.45</td>
                                </tr>
                                <tr data-href="/">
                                    <td><i class="icon ion-md-star"></i> LTC/BTC</td>
                                    <td><img src="../assets/img/icon/3.png" alt="bitcoin"> LTC</td>
                                    <td>4582.06</td>
                                    <td class="green">+2.62%</td>
                                    <td>7444.91</td>
                                    <td>4646.06</td>
                                    <td>431,687,258.23</td>
                                </tr>
                                <tr data-href="/">
                                    <td><i class="icon ion-md-star"></i> KCS/BTC</td>
                                    <td><img src="../assets/img/icon/4.png" alt="bitcoin"> KCS</td>
                                    <td>7394.06</td>
                                    <td class="red">-0.94%</td>
                                    <td>7444.91</td>
                                    <td>7267.06</td>
                                    <td>431,687,258.33</td>
                                </tr>
                                <tr data-href="/">
                                    <td><i class="icon ion-md-star"></i> COTI/BTC</td>
                                    <td><img src="../assets/img/icon/5.png" alt="bitcoin"> COTI</td>
                                    <td>7394.06</td>
                                    <td class="green">+0.78%</td>
                                    <td>7444.91</td>
                                    <td>7267.06</td>
                                    <td>431,687,258.53</td>
                                </tr>
                                <tr data-href="/">
                                    <td><i class="icon ion-md-star"></i> TRX/BTC</td>
                                    <td><img src="../assets/img/icon/6.png" alt="bitcoin"> TRX</td>
                                    <td>7394.06</td>
                                    <td class="green">+0.71%</td>
                                    <td>7444.91</td>
                                    <td>7267.06</td>
                                    <td>431,687,258.53</td>
                                </tr>
                                <tr data-href="/">
                                    <td><i class="icon ion-md-star"></i> XMR/BTC</td>
                                    <td><img src="../assets/img/icon/7.png" alt="bitcoin"> XMR</td>
                                    <td>7394.06</td>
                                    <td class="red">-0.73%</td>
                                    <td>7444.91</td>
                                    <td>7267.06</td>
                                    <td>431,687,258.77</td>
                                </tr>
                                <tr data-href="/">
                                    <td><i class="icon ion-md-star"></i> ADA/BTC</td>
                                    <td><img src="../assets/img/icon/8.png" alt="bitcoin"> ADA</td>
                                    <td>7394.06</td>
                                    <td class="red">-1.20%</td>
                                    <td>7444.91</td>
                                    <td>7267.06</td>
                                    <td>431,687,258.35</td>
                                </tr>
                                <tr data-href="/">
                                    <td><i class="icon ion-md-star"></i> BNB/BTC</td>
                                    <td><img src="../assets/img/icon/9.png" alt="bitcoin"> BNB</td>
                                    <td>7394.06</td>
                                    <td class="green">+0.74%</td>
                                    <td>7444.91</td>
                                    <td>7267.06</td>
                                    <td>431,687,258.23</td>
                                </tr>
                                <tr data-href="/">
                                    <td><i class="icon ion-md-star"></i> NEO/BTC</td>
                                    <td><img src="../assets/img/icon/10.png" alt="bitcoin"> NEO</td>
                                    <td>7394.06</td>
                                    <td class="red">-0.78%</td>
                                    <td>7444.91</td>
                                    <td>7267.06</td>
                                    <td>431,687,258.77</td>
                                </tr>

                            </tbody>
                        </table>






                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('layouts.footer')

</body>

</html>
