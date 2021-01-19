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
        @auth
        @isset(auth()->user()->profile->image)
            <img src="{{auth()->user()->profile->image}}" width="40px" height="40px" class="mt-1" >
        @endisset
        @endauth
        <svg width="48" height="48" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path fill-rule="evenodd" clip-rule="evenodd" d="M24 48C37.2548 48 48 37.2548 48 24C48 10.7452 37.2548 0 24 0C10.7452 0 0 10.7452 0 24C0 37.2548 10.7452 48 24 48Z" fill="white" fill-opacity="0.01"/>
          <path fill-rule="evenodd" clip-rule="evenodd" d="M22.3416 33.1663C22.8423 33.1663 23.176 32.833 23.176 32.333C23.176 31.833 22.8423 31.4997 22.3416 31.4997H18.1698C17.6691 31.4997 17.3354 31.1663 17.3354 30.6663V17.333C17.3354 16.833 17.6691 16.4997 18.1698 16.4997H22.3416C22.8423 16.4997 23.176 16.1663 23.176 15.6663C23.176 15.1663 22.8423 14.833 22.3416 14.833H18.1698C16.7513 14.833 15.6666 15.9163 15.6666 17.333V30.6663C15.6666 32.083 16.7513 33.1663 18.1698 33.1663H22.3416ZM32.2707 23.6663C32.3542 23.9163 32.3542 24.1663 32.2707 24.333C32.2707 24.4163 32.1873 24.4997 32.1038 24.583L28.7663 27.9163C28.5995 28.083 28.3491 28.1663 28.1823 28.1663C28.0154 28.1663 27.7651 28.083 27.5982 27.9163C27.2645 27.583 27.2645 27.083 27.5982 26.7497L29.5173 24.833H21.5073C21.0066 24.833 20.6729 24.4997 20.6729 23.9997C20.6729 23.4997 21.0066 23.1663 21.5073 23.1663H29.5173L27.5982 21.2497C27.2645 20.9163 27.2645 20.4163 27.5982 20.083C27.932 19.7497 28.4326 19.7497 28.7663 20.083L32.1038 23.4163C32.1456 23.458 32.1664 23.4997 32.1873 23.5413C32.2081 23.583 32.229 23.6247 32.2707 23.6663Z" fill="#663399"/>
        </svg>

      </div>

    </div>
    </div><!-- container -->
</nav>
  <div class="line"></div>

  @include('site.includes.errors')
