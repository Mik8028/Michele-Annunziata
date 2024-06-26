<x-layout>
    <div class="container-fluid  text-center display-index">
        <div class="row justify-content-center">
            <h2 class="display-1 h1-index">
                Tutti gli Articoli
            </h2>
        </div>
    </div>
    <div>

        @foreach($articles as $article)
        <div>
        
            <x-card2 
            :tags="$article->tags"
            :title="$article->title"
            :subtitle=" $article->subtitle" 
            :image="$article->image " 
            :category="$article->category?->name" 
            :data=" $article->created_at->format('d/m/Y') " 
            :user=" $article->user->name " 
            :url="route('article.show' , compact('article'))" 
            :urlCategory=" $article->category ? route('article.byCategory', ['category' => $article->category->id]) : null " 
            :urlEditor="route('article.byEditor', ['user' => $article->user->id])" 
            :readDuration="$article->readDuration()"
            />
        </div>
        @endforeach

    </div>
    <x-footer />
</x-layout>