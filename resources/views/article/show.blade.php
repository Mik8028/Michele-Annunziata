<x-layout>
    <div class="container-fluid text-center display-index">
        <div class="row justify-content-center">
            <h1 class="display-3 h1-index">
            {{$article->title}}
            </h1>
        </div>
    </div>

    <div class="container my-5 ">
        <div class="row ">

            <div class="text-center">
                <img src="{{Storage::url($article->image)}}" alt="" class="img-fluid ">

                <div class="text-center">
                    <h2>{{$article->subtitle}}</h2>
                    <div class="my-3 text-muted fst-italic">
                        <p>Redatto da {{$article->user->name}} il {{$article->created_at->format('d/m/Y')}} </p>
                    </div>
                </div>

                <hr>
                <div class="text-break">
                    <p>{{ $article->body }}</p>
                </div>
                

                

                <div class="d-flex justify-content-center ">
                    @if (Auth::user()&&Auth::user()->is_revisor)
                    <form action="{{route('revisor.acceptArticle',compact('article'))}}" method="post">
                        @csrf
                        <button class="btn btn-success text-white me-5  ">Accetta articolo</button>
                    </form>
                    <form action="{{route('revisor.rejectArticle',compact('article'))}}" method="post">
                        @csrf
                        <button class="btn btn-danger text-white">Rifiuta articolo</button>
                    </form>
                    @endif
                </div>

                <div class="text-center m-4">
                    <a href="{{route ('article.index') }}" class="btn btn-login btn-warning text-white my-5 ">
                        Torna indietro
                    </a>
                </div>
                
            </div>
        </div>
    </div>
    <x-footer />
</x-layout>