@extends('layouts.app')

@section('title', 'Opprtunity Main Deals')

@section('content')

    @include('site.includes.dark_nav2')

      <!-- Welcome Div -->
      <div class="welcome">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-6 welcome-text">
              <h2>Welcome Visit</h2>
              <p class="lead">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ex dolorum rerum in error nam perferendis voluptate iure enim, sunt eveniet amet consectetur!</p>
            </div>
            <div class="col-md-6 welcome-img">
            </div>
          </div>
        </div>
      </div>
        <!-- Select Opportunities -->
        <div class="select-opp mt-5">
          <div class="container-fluid">
            <h3 class="text-uppercase">Select Your opportunities</h3>
            <div class="row mt-4">
              <div class="col-1"></div>
              <div class="col-sm-6 col-md-2 col-lg-2"> <a href=""><button class="opp">All opportunities</button></a> </div>
              <div class="col-sm-6 col-md-2 col-lg-2"> <a href=""><button class="opp">Your opportunities</button></a> </div>
              <div class="col-sm-6 col-md-2 col-lg-2"> <a href=""><button class="opp">Open opportunities</button></a> </div>
              <div class="col-sm-6 col-md-2 col-lg-2"> <a href=""><button class="opp">Closed opportunities</button></a> </div>
              <div class="col-sm-6 col-md-2 col-lg-2"> <a href=""><button class="opp">Your Investments</button></a> </div>
              <div class="col-1"></div>
            </div>
          </div>
        </div>

        <!-- Open Opportunities -->
        <div class="open-opp">
          <div class="container-fluid">
            <h3 class="text-uppercase">open opportunities</h3>
            <div class="row mt-4">
              <div class="col-md-1"></div>

              <div class="col-md-3" >
                <div class="card w-100" style="width: 18rem;">
                  <img src="{{asset('site/images/opp.png')}}" class="card-img-top img-thumbnail">
                  <div class="card-body">
                    <h5 class="card-title">lorem title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk .</p>
                    <ul class="list-unstyled">
                      <li>
                       <i class="fas fa-arrow-circle-right fa-sm arrow"></i>
                       Lorem ipsum dolor sit amet.
                      </li>
                      <li>
                       <i class="fas fa-arrow-circle-right fa-sm arrow"></i>
                       Lorem ipsum dolor sit amet.
                      </li>
                    </ul>
                    <a href="OpportunityReacted.html" class="btn btn-primary">view more</a>
                  </div>
                </div>
              </div>

              <div class="col-md-1"></div>

              <div class="col-md-3">
                <div class="card w-100" style="width: 18rem;">
                  <img src="{{asset('site/images/opp.png')}}" class="card-img-top img-thumbnail" height="150px">
                  <div class="card-body">
                    <h5 class="card-title">lorem title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk .</p>
                    <ul class="list-unstyled">
                      <li>
                       <i class="fas fa-arrow-circle-right fa-sm arrow"></i>
                       Lorem ipsum dolor sit amet.
                      </li>
                      <li>
                       <i class="fas fa-arrow-circle-right fa-sm arrow"></i>
                       Lorem ipsum dolor sit amet.
                      </li>
                    </ul>
                    <a href="OpportunityReacted.html" class="btn btn-primary">view more</a>
                  </div>
                </div>
              </div>

              <div class="col-md-1"></div>

              <div class="col-md-3">
                <div class="card w-100" style="width: 18rem;">
                  <img src="{{asset('site/images/opp.png')}}" class="card-img-top img-thumbnail" height="150px">
                  <div class="card-body">
                    <h5 class="card-title">lorem title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk .</p>
                    <ul class="list-unstyled">
                      <li>
                       <i class="fas fa-arrow-circle-right fa-sm arrow"></i>
                       Lorem ipsum dolor sit amet.
                      </li>
                      <li>
                       <i class="fas fa-arrow-circle-right fa-sm arrow"></i>
                       Lorem ipsum dolor sit amet.
                      </li>
                    </ul>
                    <a href="OpportunityReacted.html" class="btn btn-primary">view more</a>
                  </div>
                </div>
              </div>
            </div>

            <div class="row mt-4 mb-3">
              <div class="col-md-1"></div>
              <div class="col-sm-6 col-md-4 col-lg-2"> <button class="opp text-uppercase">view all opportunities</button> </div>
            </div>

            <div class="br-line"></div>

          </div>
        </div>

        <!-- Closed Opportunities -->
        <div class="open-opp">
          <div class="container-fluid">
            <h3 class="text-uppercase">closed opportunities</h3>
            <div class="row">
              <div class="col-md-1"></div>

              <div class="col-md-3" >
                <div class="card w-100" style="width: 18rem;">
                  <img src="{{asset('site/images/opp.png')}}" class="card-img-top img-thumbnail">
                  <div class="card-body">
                    <h5 class="card-title">lorem title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk .</p>
                    <ul class="list-unstyled">
                      <li>
                       <i class="fas fa-arrow-circle-right fa-sm arrow"></i>
                       Lorem ipsum dolor sit amet.
                      </li>
                      <li>
                       <i class="fas fa-arrow-circle-right fa-sm arrow"></i>
                       Lorem ipsum dolor sit amet.
                      </li>
                    </ul>
                    <a href="OpportunityReacted.html" class="btn btn-primary">view more</a>
                  </div>
                </div>
              </div>

              <div class="col-md-1"></div>

              <div class="col-md-3">
                <div class="card w-100" style="width: 18rem;">
                  <img src="{{asset('site/images/opp.png')}}" class="card-img-top img-thumbnail" height="150px">
                  <div class="card-body">
                    <h5 class="card-title">lorem title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk .</p>
                    <ul class="list-unstyled">
                      <li>
                       <i class="fas fa-arrow-circle-right fa-sm arrow"></i>
                       Lorem ipsum dolor sit amet.
                      </li>
                      <li>
                       <i class="fas fa-arrow-circle-right fa-sm arrow"></i>
                       Lorem ipsum dolor sit amet.
                      </li>
                    </ul>
                    <a href="OpportunityReacted.html" class="btn btn-primary">view more</a>
                  </div>
                </div>
              </div>

              <div class="col-md-1"></div>

              <div class="col-md-3">
                <div class="card w-100" style="width: 18rem;">
                  <img src="{{asset('site/images/opp.png')}}" class="card-img-top img-thumbnail" height="150px">
                  <div class="card-body">
                    <h5 class="card-title">lorem title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk .</p>
                    <ul class="list-unstyled">
                      <li>
                       <i class="fas fa-arrow-circle-right fa-sm arrow"></i>
                       Lorem ipsum dolor sit amet.
                      </li>
                      <li>
                       <i class="fas fa-arrow-circle-right fa-sm arrow"></i>
                       Lorem ipsum dolor sit amet.
                      </li>
                    </ul>
                    <a href="OpportunityReacted.html" class="btn btn-primary">view more</a>
                  </div>
                </div>
              </div>
            </div>

            <div class="row mt-4 mb-3">
              <div class="col-md-1"></div>
              <div class="col-sm-6 col-md-4 col-lg-2"> <button class="opp text-uppercase">view all opportunities</button> </div>
            </div>

            <div class="br-line"></div>

          </div>
        </div>

          <!-- Your Opportunities -->
          <div class="open-opp">
            <div class="container-fluid">
              <h3 class="text-uppercase">Your opportunities</h3>
              <div class="row">
                <div class="col-md-1"></div>

                <div class="col-md-3" >
                  <div class="card w-100" style="width: 18rem;">
                    <img src="{{asset('site/images/opp.png')}}" class="card-img-top img-thumbnail">
                    <div class="card-body">
                      <h5 class="card-title">lorem title</h5>
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk .</p>
                      <ul class="list-unstyled">
                        <li>
                         <i class="fas fa-arrow-circle-right fa-sm arrow"></i>
                         Lorem ipsum dolor sit amet.
                        </li>
                        <li>
                         <i class="fas fa-arrow-circle-right fa-sm arrow"></i>
                         Lorem ipsum dolor sit amet.
                        </li>
                      </ul>
                      <a href="OpportunityReacted.html" class="btn btn-primary">view more</a>
                    </div>
                  </div>
                </div>

                <div class="col-md-1"></div>

                <div class="col-md-3">
                  <div class="card w-100" style="width: 18rem;">
                    <img src="{{asset('site/images/opp.png')}}" class="card-img-top img-thumbnail" height="150px">
                    <div class="card-body">
                      <h5 class="card-title">lorem title</h5>
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk .</p>
                      <ul class="list-unstyled">
                        <li>
                         <i class="fas fa-arrow-circle-right fa-sm arrow"></i>
                         Lorem ipsum dolor sit amet.
                        </li>
                        <li>
                         <i class="fas fa-arrow-circle-right fa-sm arrow"></i>
                         Lorem ipsum dolor sit amet.
                        </li>
                      </ul>
                      <a href="OpportunityReacted.html" class="btn btn-primary">view more</a>
                    </div>
                  </div>
                </div>

                <div class="col-md-1"></div>

                <div class="col-md-3">
                  <div class="card w-100" style="width: 18rem;">
                    <img src="{{asset('site/images/opp.png')}}" class="card-img-top img-thumbnail" height="150px">
                    <div class="card-body">
                      <h5 class="card-title">lorem title</h5>
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk .</p>
                      <ul class="list-unstyled">
                        <li>
                         <i class="fas fa-arrow-circle-right fa-sm arrow"></i>
                         Lorem ipsum dolor sit amet.
                        </li>
                        <li>
                         <i class="fas fa-arrow-circle-right fa-sm arrow"></i>
                         Lorem ipsum dolor sit amet.
                        </li>
                      </ul>
                      <a href="OpportunityReacted.html" class="btn btn-primary">view more</a>
                    </div>
                  </div>
                </div>
              </div>

              <div class="row mt-4 mb-3">
                <div class="col-md-1"></div>
                <div class="col-sm-6 col-md-4 col-lg-2"> <button class="opp text-uppercase">view all opportunities</button> </div>
              </div>

              <div class="br-line"></div>

            </div>
          </div>

          <!-- Your Investment -->
          <div class="open-opp" style="margin-bottom:50px;">
            <div class="container-fluid">
              <h3 class="text-uppercase">Your Investment</h3>
              <div class="row">
                <div class="col-md-1"></div>

                <div class="col-md-3" >
                  <div class="card w-100" style="width: 18rem;">
                    <img src="{{asset('site/images/opp.png')}}" class="card-img-top img-thumbnail">
                    <div class="card-body">
                      <h5 class="card-title">lorem title</h5>
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk .</p>
                      <ul class="list-unstyled">
                        <li>
                         <i class="fas fa-arrow-circle-right fa-sm arrow"></i>
                         Lorem ipsum dolor sit amet.
                        </li>
                        <li>
                         <i class="fas fa-arrow-circle-right fa-sm arrow"></i>
                         Lorem ipsum dolor sit amet.
                        </li>
                      </ul>
                      <a href="OpportunityReacted.html" class="btn btn-primary">view more</a>
                    </div>
                  </div>
                </div>

                <div class="col-md-1"></div>

                <div class="col-md-3">
                  <div class="card w-100" style="width: 18rem;">
                    <img src="{{asset('site/images/opp.png')}}" class="card-img-top img-thumbnail" height="150px">
                    <div class="card-body">
                      <h5 class="card-title">lorem title</h5>
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk .</p>
                      <ul class="list-unstyled">
                        <li>
                         <i class="fas fa-arrow-circle-right fa-sm arrow"></i>
                         Lorem ipsum dolor sit amet.
                        </li>
                        <li>
                         <i class="fas fa-arrow-circle-right fa-sm arrow"></i>
                         Lorem ipsum dolor sit amet.
                        </li>
                      </ul>
                      <a href="OpportunityReacted.html" class="btn btn-primary">view more</a>
                    </div>
                  </div>
                </div>

                <div class="col-md-1"></div>

                <div class="col-md-3">
                  <div class="card w-100" style="width: 18rem;">
                    <img src="{{asset('site/images/opp.png')}}" class="card-img-top img-thumbnail" height="150px">
                    <div class="card-body">
                      <h5 class="card-title">lorem title</h5>
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk .</p>
                      <ul class="list-unstyled">
                        <li>
                         <i class="fas fa-arrow-circle-right fa-sm arrow"></i>
                         Lorem ipsum dolor sit amet.
                        </li>
                        <li>
                         <i class="fas fa-arrow-circle-right fa-sm arrow"></i>
                         Lorem ipsum dolor sit amet.
                        </li>
                      </ul>
                      <a href="OpportunityReacted.html" class="btn btn-primary">view more</a>
                    </div>
                  </div>
                </div>
              </div>

              <div class="row mt-4 mb-3">
                <div class="col-md-1"></div>
                <div class="col-sm-6 col-md-4 col-lg-2"> <button class="opp text-uppercase">view all opportunities</button> </div>
              </div>
            </div>
          </div>

@endsection
