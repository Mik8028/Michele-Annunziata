<!-- <div class="card">
    <img src="{{ Storage::url($image) }}" alt="" class="card-img-top">
    <div class="card-body h-50 ">
        <h5 class="card-title">{{ $title }}</h5>
        <p class="card-text">{{ $subtitle }}</p>
        <a href="{{ $urlCategory }}" class="small text-muted d-flex justify-content-center align-items-center">{{ $category }}</p>
      
    
    </div>
     
    <div class="card-footer text-muted d-flex justify-content-center align-items-center">
        <a href="{{ $urlEditor }}">Redatto il {{ $data }} da {{ $user }}</a>
        <a href="{{ $url }}" class="btn btn-info btn-read text-white">Leggi</a>
    </div>
</div> -->



<!-- <div class="card mb-3" style="width: 800px;">
  <div class="row g-0">
    <div class="col-md-4">
    <img src="{{ Storage::url($image) }}" alt="" class="card-img-top">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
        <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
      </div>
    </div>
  </div>
</div> -->




<section class="dark">

  <div class="container1  py-2">


    <article class="postcard dark blu">
      <a class="postcard__img_link" href="#">
        <a href="{{ $urlEditor }}"><img class="postcard__img" src="{{ Storage::url($image) }}" alt="Image Title" /></a>
      </a>
      <div class="postcard__text">
        <h1 class="postcard__title blu ">{{$title}} </h1>
        <div class="postcard__subtitle small">
          <time datetime="2020-05-25 12:00:00">
            <i class="fas fa-calendar-alt mr-2"></i>{{ $subtitle }}
          </time>
        </div>
        <div class="postcard__bar"></div>
        
        
        
        @if ($category)
          <h6 class="postcard__title blu"><a href="{{ $urlCategory }}" class="sizeCategory">Categoria: {{ $category }}</a></h6>
          
          @else

              <p >
                Non categorizzato
              </p>

          @endif
        

        @if ($tags)
            <p class="small fst-italic text-capitalize">
                @foreach($tags as $tag)
                    #{{ $tag->name }}
                @endforeach
            </p>
        @endif

        <h6 class="postcard__title blu"><a href="{{ $urlEditor }}" <strong class="ss">Redatto il {{ $data }} da:</strong><strong class="adm">  {{ $user }}</strong></a></h6>
        <ul class="postcard__tagbox">
          <!-- <li class="tag__item"><i class="fas fa-tag mr-2"></i>{{ $category }}</li> -->

          <li class="tag__item play blu">
            <a href="{{ $url }}" class="redatt">Leggi</a>
          </li>
        </ul>
      </div>
    </article>



  </div>
</section>