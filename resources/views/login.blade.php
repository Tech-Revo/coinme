<!DOCTYPE html>
<html lang="en">

<head>

    <title>Coin Me</title>
    @include('layouts.header')
    @livewireStyles()

</head>

<body id="dark">
    @include('layouts.nav')


    <div class="vh-100 d-flex justify-content-center">
        <div class="form-access my-auto">
            <form action="{{ url('login') }}" method="post">
                @csrf
                <span>Sign In</span>
                <div class="form-group">
                    <input type="email" class="form-control" placeholder="Email Address"  name="email"/>
                    @error('email')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" placeholder="Password" name="password" />
                    @error('password')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>
                <div class="text-right">
                    <a href="/reset">Forgot Password?</a>
                </div>
                <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="form-checkbox">
                    <label class="custom-control-label" for="form-checkbox">Remember me</label>
                </div>
                <button type="submit" class="btn btn-primary">Sign In</button>
            </form>
            <h2>Don't have an account? <a href="{{url('register')}}" wire:navigate>Sign up here</a></h2>
        </div>
    </div>





    @include('layouts.footer')
    @livewireScripts()
   
</body>

</html>
