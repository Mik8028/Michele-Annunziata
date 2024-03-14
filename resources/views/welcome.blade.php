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
        
        <div class="carousel-caption d-none d-md-block">

          <div class="d-flex flex-row">
            <div class="p-5 ">
              <h1 class="sizeText fw-bold">The Aulab Post</h1>
            </div>
          </div>
          
          <h5 class="text-black fw-bold">Explore, Inspire & Share</h5>
          <p class="text-black fw-bold"></p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="https://picsum.photos/1000/801" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h5 class="text-black fw-bold">Condividi il tuo articolo!</h5>
          <p class="text-black fw-bold">Entra nella nostra comunity</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="https://picsum.photos/1000/802" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h5 class="text-black fw-bold">Revisiona gli articoli!</h5>
          <p class="text-black fw-bold">Collabora con noi</p>
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
      <div class="col-12 col-md-3">

        <x-card title="{{ $article->title }}" subtitle="{{ $article->subtitle }}" image="{{ $article->image }}" category="{{ $article->category->name }}" data="{{ $article->created_at->format('d/m/Y') }}" user="{{ $article->user->name }}" url="{{route('article.show' , compact('article'))}}" urlCategory=" {{ route('article.byCategory', ['category' => $article->category->id]) }}" urlEditor=" {{ route('article.byEditor', ['user' => $article->user->id])  }}" />
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
                <img src="/storage/images/logo2.jpg" alt="Bootstrap" width="400" height="400">
                <h1>.......</h1>
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

  <div class="space">
    <footer class="text-center  text-lg-start text-white mt-1" style="background-color: #1c2331">
      <!-- Section: Social media -->
      <section class="d-flex justify-content-center p-2" style="background-color: #ffc800cc">
        <!-- Left -->
        <div class="me-5 ">
          <span>Get connected with us on social networks:</span>
          
          <i class="bi bi-facebook me-1 ms-1"></i>
          <i class="bi bi-instagram me-1"></i>
          <i class="bi bi-twitter me-1"></i>
          <i class="bi bi-skype me-1"></i>
        </div>
        <!-- Left -->

        <!-- Right -->
        <div>
          <a href="" class="text-white me-4">
            <i class="fab fa-facebook-f"></i>
          </a>
          <a href="" class="text-white me-4">
            <i class="fab fa-twitter"></i>
          </a>
          <a href="" class="text-white me-4">
            <i class="fab fa-google"></i>
          </a>
          <a href="" class="text-white me-4">
            <i class="fab fa-instagram"></i>
          </a>
          <a href="" class="text-white me-4">
            <i class="fab fa-linkedin"></i>
          </a>
          <a href="" class="text-white me-4">
            <i class="fab fa-github"></i>
          </a>
        </div>
        <!-- Right -->
      </section>
      <!-- Section: Social media -->

      <!-- Section: Links  -->
      <section class="">
        <div class="container text-center text-md-start mt-5">
          <!-- Grid row -->
          <div class="row mt-3">
            <!-- Grid column -->
            <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
              <!-- Content -->
              <h6 class="text-uppercase fw-bold">Azienda</h6>
              <hr class="mb-4 mt-0 d-inline-block mx-auto" style="width: 60px; background-color: #7c4dff; height: 2px" />
              <p>
              The Aulab Post offre articoli di qualità su una vasta gamma di argomenti, dalla tecnologia alla cultura. Esplora il nostro sito per contenuti informativi e coinvolgenti.
              </p>
            </div>
            <!-- Grid column -->

            <!-- Grid column -->
            <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
              <!-- Links -->
              <h6 class="text-uppercase fw-bold">Prodotti</h6>
              <hr class="mb-4 mt-0 d-inline-block mx-auto" style="width: 60px; background-color: #7c4dff; height: 2px" />
              <p>
                <a href="#!" class="text-white">MDBootstrap</a>
              </p>
              <p>
                <a href="#!" class="text-white">MDWordPress</a>
              </p>
              <p>
                <a href="#!" class="text-white">BrandFlow</a>
              </p>
              <p>
                <a href="#!" class="text-white">Bootstrap Angular</a>
              </p>
            </div>
            <!-- Grid column -->

            <!-- Grid column -->
            <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
              <!-- Links -->
              <h6 class="text-uppercase fw-bold">Link utili</h6>
              <hr class="mb-4 mt-0 d-inline-block mx-auto" style="width: 60px; background-color: #7c4dff; height: 2px" />
              <p>
                <a href="#!" class="text-white">Your Account</a>
              </p>
              <p>
                <a href="#!" class="text-white">Become an Affiliate</a>
              </p>
              <p>
                <a href="#!" class="text-white">Shipping Rates</a>
              </p>
              <p>
                <a href="#!" class="text-white">Help</a>
              </p>
            </div>
            <!-- Grid column -->

            <!-- Grid column -->
            <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
              <!-- Links -->
              <h6 class="text-uppercase fw-bold">Contatti</h6>
              <hr class="mb-4 mt-0 d-inline-block mx-auto" style="width: 60px; background-color: #7c4dff; height: 2px" />
              <p><i class="bi bi-geo-alt me-1"></i> Roma, RM 00118, ITA</p>
              <p><i class="bi bi-envelope-at me-1"></i> coders.aulab@live.it</p>
              <p><i class="bi bi-telephone me-1"></i> + 06 234 567 88</p>
              <p><i class="bi bi-telephone me-1"></i> + 06 234 567 89</p>
            </div>
            <!-- Grid column -->
          </div>
          <!-- Grid row -->
        </div>
      </section>
      <!-- Section: Links  -->

      <!-- Copyright -->
      <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2)">
        Â© 2024 Copyright:
        <a class="text-white">TheCoders.com</a>
      </div>
      <!-- Copyright -->
    </footer>
    <!-- Footer -->
  </div>




  <!-- fine form accedi -->


</x-layout>