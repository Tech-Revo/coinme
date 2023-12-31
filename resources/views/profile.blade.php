<!DOCTYPE html>
<html lang="en">

<head>

    <title>Coin Me | Profile</title>
    @include('layouts.header')

</head>

<body id="dark">
    @include('layouts.nav')



    <div class="settings mtb15">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12 col-lg-3">
                    <div class="nav flex-column nav-pills settings-nav" id="v-pills-tab" role="tablist"
                        aria-orientation="vertical">
                        <a class="nav-link active" id="settings-profile-tab" data-toggle="pill" href="#settings-profile"
                            role="tab" aria-controls="settings-profile" aria-selected="true"><i
                                class="icon ion-md-person"></i> Profile</a>
                        <a class="nav-link" id="settings-wallet-tab" data-toggle="pill" href="#settings-wallet"
                            role="tab" aria-controls="settings-wallet" aria-selected="false"><i
                                class="icon ion-md-wallet"></i> Wallet</a>
                        <a class="nav-link" id="settings-tab" data-toggle="pill" href="#settings" role="tab"
                            aria-controls="settings" aria-selected="false"><i class="icon ion-md-settings"></i>
                            Settings</a>
                    </div>
                </div>
                <div class="col-md-12 col-lg-9">
                    <div class="tab-content" id="v-pills-tabContent">
                        <div class="tab-pane fade show active" id="settings-profile" role="tabpanel"
                            aria-labelledby="settings-profile-tab">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">General Information</h5>
                                    <div class="settings-profile">
                                        <form action="/">
                                            <img src="../assets/img/avatar.svg" alt="avatar">
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" id="fileUpload"
                                                    required />
                                                <label class="custom-file-label" for="fileUpload">Choose avatar</label>
                                            </div>
                                            <div class="form-row mt-4">
                                                <div class="col-md-6">
                                                    <label for="formFirst">First name</label>
                                                    <input id="formFirst" type="text" class="form-control"
                                                        placeholder="First name">
                                                </div>
                                                <div class="col-md-6">
                                                    <label for="formLast">Last name</label>
                                                    <input id="formLast" type="text" class="form-control"
                                                        placeholder="Last name">
                                                </div>
                                                <div class="col-md-6">
                                                    <label for="emailAddress">Email</label>
                                                    <input id="emailAddress" type="text" class="form-control"
                                                        placeholder="Enter your email">
                                                </div>
                                                <div class="col-md-6">
                                                    <label for="phoneNumber">Phone</label>
                                                    <input id="phoneNumber" type="text" class="form-control"
                                                        placeholder="Enter phone number">
                                                </div>

                                                <div class="col-md-12">
                                                    <input type="submit" value="Update">
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>

                        </div>




                        <div class="tab-pane fade" id="settings-wallet" role="tabpanel"
                            aria-labelledby="settings-wallet-tab">
                            <div class="wallet">
                                <div class="row">
                                    <div class="col-md-12 col-lg-4">
                                        <div class="nav flex-column nav-pills" role="tablist"
                                            aria-orientation="vertical">
                                            <a class="nav-link d-flex justify-content-between align-items-center active"
                                                data-toggle="pill" href="#coinBTC" role="tab" aria-selected="true">
                                                <div class="d-flex">
                                                    <img src="../assets/img/icon/18.png" alt="btc">
                                                    <div>
                                                        <h2>BTC</h2>
                                                        <p>Bitcoin</p>
                                                    </div>
                                                </div>
                                                <div>
                                                    <h3>4.5484254</h3>
                                                    <p class="text-right"><i class="icon ion-md-lock"></i> 0.0000000
                                                    </p>
                                                </div>
                                            </a>
                                            <a class="nav-link d-flex justify-content-between align-items-center"
                                                data-toggle="pill" href="#coinETH" role="tab"
                                                aria-selected="true">
                                                <div class="d-flex">
                                                    <img src="../assets/img/icon/1.png" alt="btc">
                                                    <div>
                                                        <h2>ETH</h2>
                                                        <p>Ethereum</p>
                                                    </div>
                                                </div>
                                                <div>
                                                    <h3>13.454845</h3>
                                                    <p class="text-right"><i class="icon ion-md-lock"></i> 0.0000000
                                                    </p>
                                                </div>
                                            </a>





                                        </div>
                                    </div>
                                    <div class="col-md-12 col-lg-8">
                                        <div class="tab-content">
                                            <div class="tab-pane fade show active" id="coinBTC" role="tabpanel">
                                                <div class="card">
                                                    <div class="card-body">
                                                        <h5 class="card-title">Balances</h5>
                                                        <ul>
                                                            <li
                                                                class="d-flex justify-content-between align-items-center">
                                                                <div class="d-flex align-items-center">
                                                                    <i class="icon ion-md-cash"></i>
                                                                    <h2>Total Balance</h2>
                                                                </div>
                                                                <div>
                                                                    <h3>5.5894 BTC</h3>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                        {{-- <button class="btn green">Deposit</button>
                                                        <button class="btn red">Withdraw</button> --}}
                                                    </div>
                                                </div>

                                                <div class="card">
                                                    <div class="card-body">
                                                        <h5 class="card-title">Latest Transactions</h5>
                                                        <div class="wallet-history">
                                                            <table class="table">
                                                                <thead>
                                                                    <tr>
                                                                        <th>No.</th>
                                                                        <th>Date</th>
                                                                        <th>Status</th>
                                                                        <th>Amount</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <tr>
                                                                        <td>1</td>
                                                                        <td>25-04-2019</td>
                                                                        <td><i
                                                                                class="icon ion-md-checkmark-circle-outline green"></i>
                                                                        </td>
                                                                        <td>4.5454334</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>2</td>
                                                                        <td>25-05-2019</td>
                                                                        <td><i
                                                                                class="icon ion-md-checkmark-circle-outline green"></i>
                                                                        </td>
                                                                        <td>0.5484468</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>3</td>
                                                                        <td>25-06-2019</td>
                                                                        <td><i
                                                                                class="icon ion-md-close-circle-outline red"></i>
                                                                        </td>
                                                                        <td>2.5454545</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>4</td>
                                                                        <td>25-07-2019</td>
                                                                        <td><i
                                                                                class="icon ion-md-checkmark-circle-outline green"></i>
                                                                        </td>
                                                                        <td>1.45894147</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>3</td>
                                                                        <td>25-08-2019</td>
                                                                        <td><i
                                                                                class="icon ion-md-close-circle-outline red"></i>
                                                                        </td>
                                                                        <td>2.5454545</td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-pane fade" id="coinETH" role="tabpanel">
                                                <div class="card">
                                                    <div class="card-body">
                                                        <h5 class="card-title">Balances</h5>
                                                        <ul>
                                                            <li
                                                                class="d-flex justify-content-between align-items-center">
                                                                <div class="d-flex align-items-center">
                                                                    <i class="icon ion-md-cash"></i>
                                                                    <h2>Total Balance</h2>
                                                                </div>
                                                                <div>
                                                                    <h3>4.1542 ETH</h3>
                                                                </div>
                                                            </li>

                                                        </ul>
                                                        {{-- <button class="btn green">Deposit</button>
                                                        <button class="btn red">Withdraw</button> --}}
                                                    </div>
                                                </div>

                                                <div class="card">
                                                    <div class="card-body">
                                                        <h5 class="card-title">Latest Transactions</h5>
                                                        <div class="wallet-history">
                                                            <table class="table">
                                                                <thead>
                                                                    <tr>
                                                                        <th>No.</th>
                                                                        <th>Date</th>
                                                                        <th>Status</th>
                                                                        <th>Amount</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <tr>
                                                                        <td>1</td>
                                                                        <td>25-04-2019</td>
                                                                        <td><i
                                                                                class="icon ion-md-checkmark-circle-outline green"></i>
                                                                        </td>
                                                                        <td>4.5454334</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>2</td>
                                                                        <td>25-05-2019</td>
                                                                        <td><i
                                                                                class="icon ion-md-checkmark-circle-outline green"></i>
                                                                        </td>
                                                                        <td>0.5484468</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>3</td>
                                                                        <td>25-06-2019</td>
                                                                        <td><i
                                                                                class="icon ion-md-close-circle-outline red"></i>
                                                                        </td>
                                                                        <td>2.5454545</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>4</td>
                                                                        <td>25-07-2019</td>
                                                                        <td><i
                                                                                class="icon ion-md-checkmark-circle-outline green"></i>
                                                                        </td>
                                                                        <td>1.45894147</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>3</td>
                                                                        <td>25-08-2019</td>
                                                                        <td><i
                                                                                class="icon ion-md-close-circle-outline red"></i>
                                                                        </td>
                                                                        <td>2.5454545</td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>





                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="settings" role="tabpanel" aria-labelledby="settings-tab">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">Notifications</h5>
                                    <div class="settings-notification">
                                        <ul>
                                            <li>
                                                <div class="notification-info">
                                                    <p>Update price</p>
                                                    <span>Get the update price in your dashboard</span>
                                                </div>
                                                <div class="custom-control custom-switch">
                                                    <input type="checkbox" class="custom-control-input"
                                                        id="notification1">
                                                    <label class="custom-control-label" for="notification1"></label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="notification-info">
                                                    <p>2FA</p>
                                                    <span>Unable two factor authentication service</span>
                                                </div>
                                                <div class="custom-control custom-switch">
                                                    <input type="checkbox" class="custom-control-input"
                                                        id="notification2" checked>
                                                    <label class="custom-control-label" for="notification2"></label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="notification-info">
                                                    <p>Latest news</p>
                                                    <span>Get the latest news in your mail</span>
                                                </div>
                                                <div class="custom-control custom-switch">
                                                    <input type="checkbox" class="custom-control-input"
                                                        id="notification3">
                                                    <label class="custom-control-label" for="notification3"></label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="notification-info">
                                                    <p>Email Service</p>
                                                    <span>Get security code in your mail</span>
                                                </div>
                                                <div class="custom-control custom-switch">
                                                    <input type="checkbox" class="custom-control-input"
                                                        id="notification4" checked>
                                                    <label class="custom-control-label" for="notification4"></label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="notification-info">
                                                    <p>Phone Notify</p>
                                                    <span>Get transition notification in your phone </span>
                                                </div>
                                                <div class="custom-control custom-switch">
                                                    <input type="checkbox" class="custom-control-input"
                                                        id="notification5" checked>
                                                    <label class="custom-control-label" for="notification5"></label>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>








    @include('layouts.footer')

</body>

</html>
