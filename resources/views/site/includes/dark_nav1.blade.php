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
                            @auth
                            @isset(auth()->user()->profile->image)
                                <img src="{{auth()->user()->profile->image}}" width="40px" height="40px" class="mt-1" >
                            @endisset
                            @endauth
                            <!-- <i class="fa fa-sign-out-alt"></i> -->
                            {{-- <svg width="48" height="48" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M24 48C37.2548 48 48 37.2548 48 24C48 10.7452 37.2548 0 24 0C10.7452 0 0 10.7452 0 24C0 37.2548 10.7452 48 24 48Z" fill="white" fill-opacity="0.01"/>
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M19.9271 35.4582C20.5529 35.4582 20.9701 35.0415 20.9701 34.4165C20.9701 33.7915 20.5529 33.3748 19.9271 33.3748H14.7123C14.0865 33.3748 13.6693 32.9582 13.6693 32.3332V15.6665C13.6693 15.0415 14.0865 14.6248 14.7123 14.6248H19.9271C20.5529 14.6248 20.9701 14.2082 20.9701 13.5832C20.9701 12.9582 20.5529 12.5415 19.9271 12.5415H14.7123C12.9392 12.5415 11.5834 13.8957 11.5834 15.6665V32.3332C11.5834 34.104 12.9392 35.4582 14.7123 35.4582H19.9271ZM32.3385 23.5832C32.4428 23.8957 32.4428 24.2082 32.3385 24.4165C32.3385 24.5207 32.2342 24.6248 32.1299 24.729L27.958 28.8957C27.7494 29.104 27.4365 29.2082 27.2279 29.2082C27.0193 29.2082 26.7064 29.104 26.4978 28.8957C26.0807 28.479 26.0807 27.854 26.4978 27.4373L28.8967 25.0415H18.8842C18.2584 25.0415 17.8412 24.6248 17.8412 23.9998C17.8412 23.3748 18.2584 22.9582 18.8842 22.9582H28.8967L26.4978 20.5623C26.0807 20.1457 26.0807 19.5207 26.4978 19.104C26.915 18.6873 27.5408 18.6873 27.958 19.104L32.1299 23.2707C32.182 23.3228 32.2081 23.3748 32.2342 23.4269C32.2603 23.479 32.2863 23.5311 32.3385 23.5832Z" fill="white"/>
                            </svg> --}}

                            <div class="dropdown show">
                                <a class=" dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <svg width="48" height="48" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M24 48C37.2548 48 48 37.2548 48 24C48 10.7452 37.2548 0 24 0C10.7452 0 0 10.7452 0 24C0 37.2548 10.7452 48 24 48Z" fill="white" fill-opacity="0.01"/>
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M19.9271 35.4582C20.5529 35.4582 20.9701 35.0415 20.9701 34.4165C20.9701 33.7915 20.5529 33.3748 19.9271 33.3748H14.7123C14.0865 33.3748 13.6693 32.9582 13.6693 32.3332V15.6665C13.6693 15.0415 14.0865 14.6248 14.7123 14.6248H19.9271C20.5529 14.6248 20.9701 14.2082 20.9701 13.5832C20.9701 12.9582 20.5529 12.5415 19.9271 12.5415H14.7123C12.9392 12.5415 11.5834 13.8957 11.5834 15.6665V32.3332C11.5834 34.104 12.9392 35.4582 14.7123 35.4582H19.9271ZM32.3385 23.5832C32.4428 23.8957 32.4428 24.2082 32.3385 24.4165C32.3385 24.5207 32.2342 24.6248 32.1299 24.729L27.958 28.8957C27.7494 29.104 27.4365 29.2082 27.2279 29.2082C27.0193 29.2082 26.7064 29.104 26.4978 28.8957C26.0807 28.479 26.0807 27.854 26.4978 27.4373L28.8967 25.0415H18.8842C18.2584 25.0415 17.8412 24.6248 17.8412 23.9998C17.8412 23.3748 18.2584 22.9582 18.8842 22.9582H28.8967L26.4978 20.5623C26.0807 20.1457 26.0807 19.5207 26.4978 19.104C26.915 18.6873 27.5408 18.6873 27.958 19.104L32.1299 23.2707C32.182 23.3228 32.2081 23.3748 32.2342 23.4269C32.2603 23.479 32.2863 23.5311 32.3385 23.5832Z" fill="white"/>
                                    </svg>
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

@include('site.includes.errors')
