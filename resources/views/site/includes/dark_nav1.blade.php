<div class="main-nav">
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container my-3">
            <!-- <a class="navbar-brand" href="#">Navbar</a> -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <form class="form-inline my-2 my-lg-0">
                        <svg class="search" width="19" height="19" viewBox="0 0 19 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path opacity="0.8" d="M18.6937 17.4023L12.607 11.3156C13.5516 10.0945 14.0625 8.60156 14.0625 7.03125C14.0625 5.15156 13.3289 3.38906 12.0023 2.06016C10.6758 0.73125 8.90859 0 7.03125 0C5.15391 0 3.38672 0.733594 2.06016 2.06016C0.73125 3.38672 0 5.15156 0 7.03125C0 8.90859 0.733594 10.6758 2.06016 12.0023C3.38672 13.3312 5.15156 14.0625 7.03125 14.0625C8.60156 14.0625 10.0922 13.5516 11.3133 12.6094L17.4 18.6937C17.4178 18.7116 17.439 18.7258 17.4624 18.7354C17.4857 18.7451 17.5107 18.7501 17.5359 18.7501C17.5612 18.7501 17.5862 18.7451 17.6095 18.7354C17.6328 18.7258 17.654 18.7116 17.6719 18.6937L18.6937 17.6742C18.7116 17.6564 18.7258 17.6352 18.7354 17.6119C18.7451 17.5885 18.7501 17.5635 18.7501 17.5383C18.7501 17.513 18.7451 17.488 18.7354 17.4647C18.7258 17.4414 18.7116 17.4202 18.6937 17.4023ZM10.7438 10.7438C9.75 11.7352 8.43281 12.2812 7.03125 12.2812C5.62969 12.2812 4.3125 11.7352 3.31875 10.7438C2.32734 9.75 1.78125 8.43281 1.78125 7.03125C1.78125 5.62969 2.32734 4.31016 3.31875 3.31875C4.3125 2.32734 5.62969 1.78125 7.03125 1.78125C8.43281 1.78125 9.75234 2.325 10.7438 3.31875C11.7352 4.3125 12.2812 5.62969 12.2812 7.03125C12.2812 8.43281 11.7352 9.75234 10.7438 10.7438Z" fill="white"/>
                        </svg>
                        <input class="form-control mr-sm-2 ml-auto" type="search" aria-label="Search">
                        <!-- <button class="btn btn-outline-success my-2 my-sm-0 ml-auto" type="submit">Search</button> -->
                    </form>
                   @auth
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
                    @else
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('login')}}">Login</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('register')}}">Apply</a>
                        </li>
                   @endauth
                </ul>
            </div>
        </div><!-- container -->
    </nav>
</div>
<div class="white-line"></div>

{{-- @include('site.includes.errors') --}}
