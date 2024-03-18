<div class="card">
    <img src="{{ Storage::url($image) }}" alt="" class="card-img-top">
    <div class="card-body h-50 ">
        <h5 class="card-title">{{ $title }}</h5>
        <p class="card-text">{{ $subtitle }}</p>
        <a href="{{ $urlCategory }}" class="small text-muted d-flex justify-content-center align-items-center">{{ $category }}</p>
        
        @if ($tags)
            <p class="small fst-italic text-capitalize">
                @foreach($tags as $tag)
                    #{{ $tag->name }}
                @endforeach
            </p>
        @endif
    
    </div>
     
    <div class="card-footer text-muted d-flex justify-content-center align-items-center">
        <a href="{{ $urlEditor }}">Redatto il {{ $data }} da {{ $user }}</a>
        <a href="{{ $url }}" class="btn btn-warning btn-login text-white">Leggi</a>
    </div>
</div>
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