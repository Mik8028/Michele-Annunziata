<x-layout>

    {{-- inizio vecchio carousel --}}

    {{-- <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel" data-bs-interval="3000">

    <div id="carouselExampleCaptions" class="carousel slide">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                aria-label="Slide 3"></button>
        </div>


        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="storage\images\car01.jpg" class="d-block w-100" alt="...">

                <div class="carousel-caption d-none d-md-block ">

                    <div class="d-flex flex-row">
                        <div class="p-5 ">
                            <h1 class="sizeText fw-bold">The Aulab Post</h1>
                        </div>
                    </div>

                    <h5 class="text-black fw-bold textShadow">Explore, Inspire & Share</h5>
                    <p class="text-black fw-bold"></p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="storage\images\car02.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5 class="text-black fw-bold textShadow">Condividi il tuo articolo!</h5>
                    <p class="text-black fw-bold textShadow">Entra nella nostra community</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="storage\images\car03.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5 class="text-black fw-bold textShadow">Revisiona gli articoli!</h5>
                    <p class="text-black fw-bold textShadow">Collabora con noi</p>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>



</div> --}}

    {{-- fine vecchio carousel --}}



    @if (session('message'))
        <div class="alert alert-success text-center">
            {{ session('message') }}
        </div>
    @endif



    {{-- inizio nuovo carousel --}}

 <div class="mycarousel">


        <div class="box1">
            <form class="d-flex" method="GET" action="{{ route('article.search') }}">
                <input class="form-control form-control1" type="search" placeholder="Cosa stai cercando?" aria-label="Search"
                    name="query">
                <button class="btn btn-warning-search" type="submit">Cerca</button>
            </form>
        </div>

        <div class="box2">

            <img src="storage/images/car01.jpg" alt="">


        </div>
        <div>
            <h2>The Aulab Post</h2>
        </div>
    </div> 

    {{-- fine nuovo carousel --}}



    {{-- Card Articoli --}}

    <div class="bodyCard">


        {{-- <div class="container my-5">  --}}
    {{-- <div class="row justify-content-center">    --}}

        @foreach ($articles as $article)
            {{-- <div class="col-12 col-md-4 pb-5 col-lg-3">    --}}
            <x-card :tags="$article->tags" 
                    :title="$article->title" 
                    :subtitle="$article->subtitle" 
                    :image="$article->image" 
                    :category="$article->category?->name"
                    :data="$article->created_at->format('d/m/Y')" 
                    :user="$article->user->name" 
                    :url="route('article.show', compact('article'))" 
                    :urlCategory="$article->category
                                ? route('article.byCategory', ['category' => $article->category->id])
                                : null" 
                    :urlEditor="route('article.byEditor', ['user' => $article->user->id])" 
                    :readDuration="$article->readDuration()"

                    />
            {{-- </div>    --}}
        @endforeach

    </div>
    </div>
    </div>
    </div>
    </div>

    {{-- fine card articoli --}}




    <!-- inizio form vecchio  -->

    {{-- <div class="container card p-5 shadow my-5 cardHomepageBg">
        <div class="row">
          <div class="col-12">
            <div class="container my-5">
              <div class="row justify-content-center">
                <div class="row">
    
                  <div class="col-12 col-md-6">
    
                    <h1 class="text-align-left">Entra nella nostra community!</h1>
                  </div>
                  <div class="col-12 col-md-6">
                    @if ($errors->any())
                    <div class="alert alert-danger">
                      <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                      </ul>
                    </div>
                    @endif
    
                    <form class="card card_homepage p-5 " action="{{ route('login') }}" method="POST">
                      @csrf
    
                      <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" name="email" class="form-control" id="email" value="{{ old('email') }}">
                      </div>
                      <div class="mb-3">
                        <label for="password" class="form-label">Password:</label>
                        <input type="password" name="password" class="form-control" id="password">
                      </div>
    
                      <div class="mb-3">
                        <button class="btn btn-login">Accedi</button>
                        <p class="small mt-2">Non sei registrato? <a href="{{ route('register') }}">Clicca qui</a> </p>
                      </div>
                    </form>
                  </div>
    
    
    
    
                </div>
              </div>
            </div>
          </div>
        </div>
      </div> --}}



    <!-- fine form vecchio  -->






    <!-- inizio form nuovo  -->

    <div class="container ">

        <div class="row justify-content-center">


            <div class="box  ">
                <span class="borderLine"></span>

                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif




                <form action="{{ route('login') }}" method="POST">
                    @csrf

                    <div class="contimg">
                        <img class=" fluid-image" src="storage/images/img-form11.png" alt="">
                    </div>

                    <h2>Entra nella nostra community!</h2>

                    <div class="imputBox">

                        <input type="email" name="email" class="fia01" required="requires" id="email"
                            value="{{ old('email') }}">
                        <label for="email" class="colorH2">Email</label>
                        <i></i>

                    </div>
                    <p class="text-white1">inserire almeno 8 caratteri</p>

                    <div class="imputBox">
                        <input type="password" name="password" required="requires" id="password">
                        <label for="password" class="colorH2">Password</label>

                        <i></i>
                    </div>
                    <p class="text-white1">inserire almeno 8 caratteri</p>

                    <input type="submit" value="Accedi">

                    <div class="links">
                        <p>Non sei Registrato!</p>
                        <a href="{{ route('register') }}">clicca qui</a>
                    </div>
                </form>
            </div>
        </div>

    </div>

    {{-- fine form nuovo --}}





    <!-- Footer -->

    <x-footer />

    <!-- fine footer-->


</x-layout>
