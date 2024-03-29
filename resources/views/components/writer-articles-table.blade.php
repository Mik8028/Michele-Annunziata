<table class="table table-striped table-hover border">
    <thead class="table-dark">
        <tr>
            <th class="thAshtagWrithr" scope="col">#</th>
            <th class="thtitleWriter" scope="col">Titolo</th>
            <th class="thSubTitleWriter" scope="col">Sottotitolo</th>
            <th class="thCategoryWriter" scope="col">Categoria</th>
            <th class="thTagsWriter" scope="col">Tags</th>
            <th class="thCreatedWriter" scope="col">Creato il</th>
            <th class="thAzioniWriter" scope="col">Azioni</th>
        </tr>
    </thead>
    <tbody> 
        @foreach ($articles as $article)
            <tr>
                <th scope="row">{{ $article->id }}</th>
<td>{{ $article->title }}</td>
<td>{{ $article->subtitle }}</td>
<td>{{ $article->category->name ?? 'Non categorizzato' }}</td>
<td>
    @foreach ($article->tags as $tag)
        {{ $tag->name }}
    @endforeach
</td>
<td>{{ $article->created_at->format('d/m/Y') }}</td>
<td>
    <div class="d-flex flex-column flex-md-row">
        <a href="{{ route('article.show', compact('article')) }}" class="btn btn-info text-white sizeTesto mb-2 mb-md-0 mr-md-2">Leggi l'articolo</a>
      
        <a href="{{ route('article.edit', compact('article')) }}" class="btn btn-warning text-white sizeTesto mb-2 mb-md-0 mr-md-2">Modifica l'articolo</a>
      
        <form action="{{ route('article.destroy', compact('article')) }}" method="POST" class="mb-2 mb-md-0">
            @csrf
            @method('delete')
            <button type="submit" class="btn btn-danger sizeTesto">Elimina articolo</button>
        </form>
    </div>
</td>


            </tr>
        @endforeach
    </tbody>
</table>
