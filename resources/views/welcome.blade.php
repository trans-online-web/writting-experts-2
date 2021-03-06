<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>ResearchExperts</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
         <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    </head>
    <body>
        <div>
            <header>
                <nav class="navbar navbar-expand-md fixed-top font">
                    <a class="navbar-brand text-light" href="#">ResearchExperts</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                      <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarCollapse">
                      <ul class="navbar-nav ml-auto">
                        <li class="nav-item active">
                          <a class="nav-link text-light" href="/howitworks">How it Works <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link text-light" href="/services">Services</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link text-light" href="/about">About Us</a>
                        </li>
                      </ul>

                      <div class="mt-2 mt-md-0">
                          @if (Route::has('login'))
                              <div class="mr-sm-2">
                                <ul class="navbar-nav ml-auto">
                                    <!-- Authentication Links -->
                                    @guest
                                        <li class="nav-item">
                                            <a href="/login" class="nav-link">{{ __('Login') }}</a>
                                        </li>
                                        @if (Route::has('register'))
                                            <li class="nav-item">
                                            <a class="nav-link" href="/register">Sign Up</a>
                                            </li>
                                        @endif
                                    @else
                                        <li class="nav-item">
                                            <a href="/task" class="btn btn-lg btn-success">Submit An Order</a>
                                        </li>
                                        <li class="nav-item dropdown">
                                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                                {{ Auth::user()->name }} <span class="caret"></span>
                                            </a>

                                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                                <a class="dropdown-item" href="/order">My Orders</a>
                                                <a class="dropdown-item" href="{{ route('logout') }}"
                                                   onclick="event.preventDefault();
                                                                 document.getElementById('logout-form').submit();">
                                                    {{ __('Logout') }}
                                                </a>

                                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                    @csrf
                                                </form>
                                            </div>
                                        </li>
                                    @endguest
                                </ul>
                              </div>
                          @endif
                      </div>
                      {{-- <div class="mt-2 mt-md-0">
                          @if (Route::has('login'))
                              <div class="mr-sm-2">
                                <ul class="navbar-nav ml-auto">
                                    <li class="nav-item">
                                        @auth
                                            <a class="nav-link text-light" href="{{ url('/home') }}">Home</a>
                                        @else
                                            <a class="nav-link text-light" href="{{ route('login') }}">Login</a>
                                    </li class="nav-item">
                                    <li>
                                            @if (Route::has('register'))
                                                <a class="nav-link" href="{{ route('register') }}">Register</a>
                                            @endif
                                        @endauth
                                    </li>
                                </ul>
                              </div>
                          @endif
                      </div> --}}
                    </div>
                  </nav>
            </header>
            <!---------------- banner section ---------------------->

             <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
          <li data-target="#myCarousel" data-slide-to="1"></li>
          <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img class="first-slide" src="/images/img1.jpg" alt="First slide">
            <div class="container">
              <div class="carousel-caption text-left">
                <h1>We Will Help You Do Your Assignments </h1>
               <h2> From initial topic to finished paper</h2>
                <p><a class="btn btn-lg btn-primary" href="/task" role="button">Make an order</a></p>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <img class="second-slide" src="/images/img2.jpg" alt="Second slide">
            <div class="container">
              <div class="carousel-caption">
                <h1>Let us take care of your order details while you enjoy your free time!</h1>

                <p><a class="btn btn-lg btn-primary" href="/register" role="button">Sign Up</a></p>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <img class="third-slide" src="/images/img3.jpg" alt="Third slide">
            <div class="container">
              <div class="carousel-caption text-left">
                <h1>24/7 Customer Support</h1>

                <p><a class="btn btn-lg btn-primary" href="/register" role="button">Sign Up</a></p>
              </div>
            </div>
          </div>
        </div>
        <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>

      <!-- Marketing messaging and featurettes
      ================================================== -->
      <!-- Wrap the rest of the page in another container to center all the content. -->

<br><br>
      <div class="container marketing">

            <!-- Three columns of text below the carousel -->
            <div class="row">
              <div class="col-lg-4">
                <img class="rounded-circle" src="/images/img5.jpg" alt="Generic placeholder image" width="140" height="140">
                <h2>Online Writer Chat</h2>
                <p>Always feel free to communicate with us any time to discuss your order, assignment details, request edits and much more.</p>
                <!-- <p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p> -->
              </div><!-- /.col-lg-4 -->
              <div class="col-lg-4">
                <img class="rounded-circle" src="/images/img4.PNG" alt="Generic placeholder image" width="140" height="140">
                <h2>Affordable Prices</h2>
                <p>We pride ourselves to offering the most affordable prices in the industry.</p>
                <!-- <p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p> -->
              </div><!-- /.col-lg-4 -->
              <div class="col-lg-4">
                <img class="rounded-circle" src="/images/img6.PNG" alt="Generic placeholder image" width="140" height="140">
                <h2>Plagiarism Free Papers</h2>
                <p>We have a very strict plagiarism policy. We always ensure that each paper goes through various plagiarism detection tools.</p>
                <!-- <p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p> -->
              </div><!-- /.col-lg-4 -->
            </div><!-- /.row -->
          </div>
            <div class="justify-content-center py-3 px-5 bg-custom">
     <div class="row justify-content-center pb-2">
        <h1 class="text-light">Features</h1>
    </div>
    <div class="row justify-content-center container-fluid pt-3">
        <div class="col-md-4">
          <div class="card p-3 align-items-center">
            <img src="./img/contract.svg" style="height: 60px; width: 60px" alt="">
            <h3 class="class1">Any Deadline - Any Subject</h3>
            <!-- <p class="pt-2 lead2">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima commodi autem, nam, a iste quia quos quidem provident magnam. Necessitatibus at ducimus odit amet mollitia facilis molestias iste pariatur atque.</p> -->
          </div>
        </div>
        <div class="col-md-4">
          <div class="card p-3 align-items-center">
            <img src="./img/notification.svg" style="height: 60px; width: 60px" alt="">
            <h3 class="class2">Email Notifications</h3>
            <!-- <p class="pt-2 lead2">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima commodi autem, nam, a iste quia quos quidem provident magnam. Necessitatibus at ducimus odit amet mollitia facilis molestias iste pariatur atque.</p> -->
          </div>
        </div>
        <div class="col-md-4">
          <div class="card p-3 align-items-center">
            <img src="./img/chat.svg" style="height: 60px; width: 60px" alt="">
            <h3 class="class3">Online Writer Chat</h3>
            <!-- <p class="pt-2 lead2">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima commodi autem, nam, a iste quia quos quidem provident magnam. Necessitatibus at ducimus odit amet mollitia facilis molestias iste pariatur atque.</p> -->
          </div>
        </div>
    </div>
    <div class="row justify-content-center container-fluid pt-3">
        <div class="col-md-4">
          <div class="card p-3 align-items-center">
            <img src="./img/bargains.svg" style="height: 60px; width: 60px" alt="">
            <h3 class="class4">Have the Bargaing Power</h3>
            <!-- <p class="pt-2 lead2">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima commodi autem, nam, a iste quia quos quidem provident magnam. Necessitatibus at ducimus odit amet mollitia facilis molestias iste pariatur atque.</p> -->
          </div>
        </div>
        <div class="col-md-4">
          <div class="card p-3 align-items-center">
            <img src="./img/file.svg" style="height: 60px; width: 60px" alt="">
            <h3 class="class5">Plagiarism Free Papers</h3>
            <!-- <p class="pt-2 lead2">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima commodi autem, nam, a iste quia quos quidem provident magnam. Necessitatibus at ducimus odit amet mollitia facilis molestias iste pariatur atque.</p> -->
          </div>
        </div>
        <div class="col-md-4">
          <div class="card p-3 align-items-center">
            <img src="./img/coin.svg" style="height: 60px; width: 60px" alt="">
            <h3 class="class6">Affordable Prices</h3>
            <!-- <p class="pt-2 lead2">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima commodi autem, nam, a iste quia quos quidem provident magnam. Necessitatibus at ducimus odit amet mollitia facilis molestias iste pariatur atque.</p> -->
         </div>
        </div>
    </div>
</div>

    <div class="container marketing">

            <!-- Three columns of text below the carousel -->
            <div class="row">
            <!-- START THE FEATURETTES -->
               <div class="clearfix"></div>
            <hr class="featurette-divider">

            <div class="row featurette">
              <div class="col-md-7"><br>
                <h1>Term paper writing services available</h1>
                <p class="lead">How can we help you? First, our term paper writing help is very affordable for students meaning what we offer is cheap but quality term paper writing. We have tackled different types of paper assignments that have made customers happy, implying we are very confident when it comes to term papers writing. We have worked on research papers and literature review assignments. Not every student can cope with all tasks since they differ mostly in the skills that are required in completing an assignment and, therefore, we provide quality term paper writing.</p>
              </div>
              <div class="col-md-5">
                <img class="featurette-image img-fluid mx-auto" src="/images/img8.jpg" alt="Generic placeholder image">
              </div>
            </div>

            <hr class="featurette-divider">

            <div class="row featurette">
              <div class="col-md-7 order-md-2"><br>
                <h2 class="featurette-heading">Do you have time in writing a term paper?</h2>
                <p class="lead">Obviously, the answer is yes; our work is based on term paper writing service, and we are always here to help you in writing a term paper. Our experts are always ready to receive any amount of work; if you need samples, ask our support team. We can take time to write custom term papers to create the sense that we are ready to work with you. The services are very cheap, and the team delivers quality term paper writing within a short deadline after ordering.</p>
              </div>
              <div class="col-md-5 order-md-1">
                <img class="featurette-image img-fluid mx-auto" src="/images/img9.jpg" alt="Generic placeholder image">
              </div>
            </div>

            <hr class="featurette-divider">

            <div class="row featurette">
              <div class="col-md-7">
                <!-- <h2 class="featurette-heading">Do you have time in writing a term paper?</h2> --><br><br>
                <p class="lead">It is very easy to order help from us with your assignment papers on our online term paper writing service portal that’s on our website. You only need to fill an order form and choose whether it is a college term paper writing or university term paper writing or a higher level or even high school term paper writing or school term paper writing specifying the number of pages you want, the level, deadline, and don’t forget special instructions for our experts to note when writing papers term.  </p>
              </div>
              <div class="col-md-5">
                <img class="featurette-image img-fluid mx-auto" src="/images/img7.jpg" alt="Generic placeholder image">
              </div>
            </div>
    </div>
  </div>
            <hr class="featurette-divider">

            <!-- /END THE FEATURETTES -->

          </div><!-- /.container -->

            <div class="justify-content-center py-3 px-5 bg-custom">
     <div class="row justify-content-center pb-2">
        <h1 class="text-light">Making an order is free. Are you ready?</h1>
    </div>
    <div class="row justify-content-center container-fluid pt-3">

        <div class="col-md-4">
          <div class="center">
            <a href="/" class="btn btn-bordered-white">Get started on your project</a>
            <!-- <p class="pt-2 lead2">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima commodi autem, nam, a iste quia quos quidem provident magnam. Necessitatibus at ducimus odit amet mollitia facilis molestias iste pariatur atque.</p> -->
          </div>
        </div>

    </div>


        </div>

        </div>
    </div>
</div>




             @include('includes.footer')
        </div>
        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
    </body>
</html>
