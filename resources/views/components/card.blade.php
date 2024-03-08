<div class="card">
    <img src="{{ Storage::url($image) }}" alt="" class="card-img-top">
    <div class="card-body">
        <h5 class="card-title">{{ $title }}</h5>
        <p class="card-text">{{ $subtitle }}</p>
        <a href="{{ $urlCategory }}" class="small text-muted d-flex justify-content-center align-items-center">{{ $category }}</p>
      
    
    </div>
     
    <div class="card-footer text-muted d-flex justify-content-center align-items-center">
        <a href="{{ $urlEditor }}">Redatto il {{ $data }} da {{ $user }}</a>
        <a href="{{ $url }}" class="btn btn-info text-white">Leggi</a>
    </div>
</div>