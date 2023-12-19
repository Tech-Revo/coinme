<!DOCTYPE html>
<html lang="en">

<head>

    <title>Coin Me | Sign Up</title>
    @include('layouts.header')
    @livewireStyles()

</head>

<body id="dark">
    @include('layouts.nav')


   <div class="vh-100 d-flex justify-content-center">
    <div class="form-access my-auto">
      @livewire('user-account')
      


      
      <h2>Already have an account? <a href="{{url('login')}}" wire:navigate>Sign in</a></h2>
    </div>
  </div>





    @include('layouts.footer')
    <script>
        $('tbody, .market-news ul').mCustomScrollbar({
            theme: 'minimal',
        });
    </script>
    @livewireScripts()
</body>

</html>
