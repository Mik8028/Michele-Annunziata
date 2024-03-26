
{{-- inizio Card precedente --}}

{{-- <div class="card card-h">
    <img src="{{ Storage::url($image) }}" alt="" class="card-img-top">
    <div class="card-body h-50 ">
        <h5 class="card-title">{{ $title }}</h5>
        <p class="card-text">{{ $subtitle }}</p>
        @if ($category)
            <a href="{{ $urlCategory }}"
                class="small text-muted d-flex justify-content-center align-items-center">{{ $category }}</a>
        @else
            <p class="small text-muted fst-italic text-capitalize">
                Non categorizzato
            </p>
        @endif
        <span class="text-muted small fst-italic">tempo di lettura {{ $readDuration }} min</span>

        @if ($tags)
            <p class="small fst-italic text-capitalize ">
                @foreach ($tags as $tag)
                    #{{ $tag->name }}
                @endforeach
            </p>
        @endif


    </div>

    <div class="card-footer text-muted d-flex justify-content-center align-items-center">
        <a href="{{ $urlEditor }}">Redatto il {{ $data }} da {{ $user }}</a>
        <a href="{{ $url }}" class="btn btn-warning btn-login text-white">Leggi</a>
    </div>
</div> --}}

{{-- fine Card precedente --}}


 <div class="bodyCard">

    <div class="containerCard">
        <div class="cardAnimate">
            <div class="imgBx">
                <img src="{{ Storage::url($image) }}">
            </div>
            <div class="content">
                       <h2>{{ $title }}</h2>
                       <p>{{ $subtitle }}</p>

                       @if ($category)
                       <a href="{{ $urlCategory }}">{{ $category }}</a>
                       @else
             
                           <p>
                             Non categorizzato
                           </p>
             
                       @endif
                       <span class="text-muted small fst-italic">tempo di lettura {{ $readDuration }} min</span>
             
                       @if ($tags)
                         <p>
                             @foreach ($tags as $tag)
                                 #{{ $tag->name }}
                             @endforeach
                         </p>
                       @endif


                       

                <p><a href="{{ $urlEditor }}">Redatto il {{ $data }} da {{ $user }}</a></p>
                <a href="{{ $url }}">Leggi</a>
            </div>
        </div>
    </div>

</div> 
