<x-layout>
    <div class="container-fluid  text-center display-index">
        <div class="row justify-content-center">
            <h2 class="display-1 h1-index">
               Tutti gli articoli per : {{ $query }} 
            </h2>
        </div>
    </div>
    
   
    <div class="container my-5">
        <div class="row justify-content-center">
        @foreach($articles as $article)
            <div class="col-12 col-md-3">
                
                <x-card 
                    :tags="$article->tags"
                    title="{{ $article->title }}" 
                    subtitle="{{ $article->subtitle }}" 
                    image="{{ $article->image }}"
                    category="{{ $article->category->name }}" 
                    data="{{ $article->created_at->format('d/m/Y') }}"  
                    user="{{ $article->user->name }}" 
                    url="{{ route('article.show' , compact('article')) }}"
                    urlCategory=" {{ route('article.byCategory', ['category' => $article->category->id]) }}"
                    urlEditor=" {{ route('article.byEditor', ['user' => $article->user->id]) }}"
                />
            </div>
            @endforeach
        </div>
    </div>
</x-layout>