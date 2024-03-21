<x-layout>


  <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel" data-bs-interval="3000">

    <div id="carouselExampleCaptions" class="carousel slide">
      <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
      </div>
    
    
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="storage\images\5.jpg" class="d-block w-100" alt="...">
        
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
        <img src="storage\images\car2.jpg" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h5 class="text-black fw-bold textShadow">Condividi il tuo articolo!</h5>
          <p class="text-black fw-bold textShadow">Entra nella nostra community</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="storage\images\car3.png" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h5 class="text-black fw-bold textShadow">Revisiona gli articoli!</h5>
          <p class="text-black fw-bold textShadow">Collabora con noi</p>
        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
    </div>
  </div>
  <!-- <div class="container-fluid p-5 bg-info text-center text-white">
                    <div class="row justify-content-center">
                        <h1 class="display-1">
                            The Aulab Post
                        </h1>
                    </div>
                </div> -->

  @if (session('message'))
  <div class="alert alert-success text-center">
    {{session('message')}}
  </div>
  @endif
  <div class="container my-5">
    <div class="row justify-content-center">
      @foreach($articles as $article)
      <div class="col-12 col-md-3 pb-5">

        <x-card 
          :tags="$article->tags"
          title="{{ $article->title }}"
          subtitle="{{ $article->subtitle }}" 
          image="{{ $article->image }}" 
          category="{{ $article->category?->name }}" 
          data="{{ $article->created_at->format('d/m/Y') }}" 
          user="{{ $article->user->name }}" 
          url="{{route('article.show' , compact('article'))}}" 
          urlCategory=" {{ $article->category ? route('article.byCategory', ['category' => $article->category->id]) : null }}" 
          urlEditor=" {{ route('article.byEditor', ['user' => $article->user->id])  }}" 
        />
      </div>
      @endforeach
    </div>
  </div>




  <!-- inizio form accedi -->




  <div class="container card p-5 shadow my-5 cardHomepageBg">
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
  </div>



  <!-- Footer -->

 <x-footer />




  <!-- fine form accedi -->


</x-layout>