<nav class="navbar navbar-expand-lg navbar-light">
    <div class="container">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item first-child">
          <a class="nav-link text-uppercase" href="ProtalHomepageApproved.html">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-uppercase" href="OpportunitymainDealsPage.html">opportunities</a>
        </li>
      </ul>

      <div class="user-icon ml-auto">
        <div class="row ml-2">
            <div class="dropdown show">
                <a class=" dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    @auth
                        @isset(auth()->user()->profile->image)
                            @if (auth()->user()->profile->image != null)
                                <img src="{{auth()->user()->profile->image}}" width="40px" height="40px" class="mt-1 rounded-circle" >
                            @else
                                <img src="{{asset('assets/images/users/profile.png')}}" width="40px" height="40px" class="mt-1" >
                            @endif
                        @else
                            <img src="{{asset('assets/images/users/profile.png')}}" width="40px" height="40px" class="mt-1" >
                        @endisset
                    @endauth
                </a>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                    <a class="dropdown-item" href=" {{route('profile.show')}} ">My Profile</a>
                    <a class="dropdown-item" href=" {{route('logout')}} ">Logout</a>
                </div>
            </div>
        </div>
    </div>

    </div>
    </div><!-- container -->
</nav>
  <div class="line"></div>

  {{-- @include('site.includes.errors') --}}
