  <header class="dark-bb">
      <nav class="navbar navbar-expand-lg">
          <a class="navbar-brand" href="/"><img src="{{ url('assets/img/fav.png') }}" alt="logo"></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#headerMenu"
              aria-controls="headerMenu" aria-expanded="false" aria-label="Toggle navigation">
              <i class="icon ion-md-menu"></i>
          </button>

          <div class="collapse navbar-collapse" id="headerMenu">
              <ul class="navbar-nav mr-auto">
                  <a class="nav-link" href="/">Exchange</a>
                  <li class="nav-item dropdown">
                      <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown"
                          aria-haspopup="true" aria-expanded="false">
                          Markets
                      </a>
                      <div class="dropdown-menu">
                          <a class="dropdown-item" href="{{ url('market') }}">Markets</a>

                      </div>
                  </li>

                  <li class="nav-item dropdown">
                      <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown"
                          aria-haspopup="true" aria-expanded="false">
                          Dashboard
                      </a>
                      <div class="dropdown-menu">
                          <a class="dropdown-item" href="{{ url('profile') }}">Profile</a>
                      </div>
                  </li>
              </ul>
              <ul class="navbar-nav ml-auto">
                  {{-- <li class="nav-item header-custom-icon">
                      <a class="nav-link" href="#" id="changeThemeLight">
                          <i class="icon ion-md-sunny"></i>
                      </a>
                  </li> --}}
                  <li class="nav-item header-custom-icon">
                      <a class="nav-link" href="#" id="clickFullscreen">
                          <i class="icon ion-md-expand"></i>
                      </a>
                  </li>

                  <li class="nav-item dropdown header-img-icon">

                      @if (auth()->user())
                          <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown"
                              aria-haspopup="true" aria-expanded="false">
                              <img src="assets/img/avatar.svg" alt="avatar"> </a>
                      @else
                          <a href="{{ url('login') }}" role="button" class="nav-link mt-2 bg-danger text-light">Login </a>
                      @endif






                     


                      @if (auth()->user())
                          @php
                              $profileImage = auth()
                                  ->user()
                                  ->getFirstMediaUrl('profile_image');
                          @endphp
                          <div class="dropdown-menu">
                              <div class="dropdown-header d-flex flex-column align-items-center">
                                  <div class="figure mb-3">
                                      <img src="{{ $profileImage ? $profileImage : url('assets/img/avatar.svg') }}" alt="">
                                  </div>
                                  <div class="info text-center">
                                      <p class="name font-weight-bold mb-0">{{ auth()->user()->name }}</p>
                                      <p class="email text-muted mb-3">{{ auth()->user()->email }}</p>
                                  </div>
                              </div>
                              <div class="dropdown-body">
                                  <ul class="profile-nav">
                                      <li class="nav-item">
                                          <a href="{{ url('profile') }}" class="nav-link">
                                              <i class="icon ion-md-person"></i>
                                              <span>Profile</span>
                                          </a>
                                      </li>


                                      <li class="nav-item">
                                          <a href="{{ url('logout') }}" class="nav-link red">
                                              <i class="icon ion-md-power"></i>
                                              <span>Log Out</span>
                                          </a>
                                      </li>

                                  </ul>
                              </div>
                          </div>
                      @endif
                  </li>
              </ul>
          </div>
      </nav>
  </header>
