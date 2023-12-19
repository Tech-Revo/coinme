<!DOCTYPE html>
<html lang="en">

<head>

    <title>Coin Me | Settings</title>
    @include('layouts.header')
    @livewireStyles()

</head>

<body id="dark">
    @include('layouts.nav')


    <div class="container mt-5">

        <div class="row">

            <div class="col-md-4 settings">
                <div class="card" id="settings-profile">
                    <div class="card-body">
                        <h3 class="card-title">Privacy Setting</h3>
                        <p class="card-text text-light">Change your account password!</p>
                        <a href="#" class="card-link">Click Here</a>
                    </div>
                </div>
            </div>


           @if (empty(auth()->user()->transaction_password))
                <div class="col-md-4 settings">
                    <div class="card" id="settings-profile">
                        <div class="card-body">
                            <h3 class="card-title">Transaction Setting</h3>
                            <p class="card-text text-light">Set up your transaction password!</p>
                            <a href="#" class="card-link">Click Here</a>
                        </div>
                    </div>
                </div>
            @else
            <div class="col-md-4 settings">
                <div class="card" id="settings-profile">
                    <div class="card-body">
                        <h3 class="card-title">Privacy Setting</h3>
                        <p class="card-text text-light">Change your account password!</p>
                        <a href="#" class="card-link">Click Here</a>
                    </div>
                </div>
            </div>
            @endif


            <div class="col-md-4 settings">
                <div class="card" id="settings-profile">
                    <div class="card-body">
                        <h3 class="card-title">Privacy Setting</h3>
                        <p class="card-text text-light">Change your account password!</p>
                        <a href="#" class="card-link">Click Here</a>
                    </div>
                </div>
            </div>


        </div>

    </div>





    @include('layouts.footer')
    @livewireScripts()

</body>

</html>
