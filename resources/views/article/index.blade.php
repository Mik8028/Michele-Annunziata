<x-layout>
    <div class="container-fluid p-5 bg-info text-center display-index">
        <div class="row justify-content-center">
            <h1 class="display-1 h1-index">
                Tutti gli Articoli
            </h1>
        </div>
    </div>
    <div class="container my-5">

        @foreach($articles as $article)
        <div class="col-12 col-md-3">

            <x-card2 title="{{ $article->title }}" subtitle="{{ $article->subtitle }}" image="{{ $article->image }}" category="{{ $article->category->name }}" data="{{ $article->created_at->format('d/m/Y') }}" user="{{ $article->user->name }}" url="{{ route('article.show' , compact('article')) }}" urlCategory=" {{ route('article.byCategory' , ['category' => $article->category->id]) }}" urlEditor=" {{ route('article.byEditor', ['user' => $article->user->id]) }}" />
        </div>
        @endforeach

    </div>
</x-layout>