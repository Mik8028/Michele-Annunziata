<table class="table table-striped table-hover border></table">
    <thead class="">
    <tr>
        <th class="th-hashtag-r" scope="col" >#</th>
        <th class="th-title-r" scope="col" >Titolo</th>
        <th class="th-subtitle-r" scope="col" >Sottotitolo</th>
        <th class="th-redactor-r" scope="col" >Redattore</th>
        <th class="th-azione-r" scope="col" >Azioni</th>

    </tr>
    </thead>
    <tbody>
        @foreach ($articles as $article)
            <tr>
                <th scope="row"> {{$article->id}}</th>
                <td>{{$article->title}}</td>
                <td>{{$article->subtitle}}</td>
                <td>{{$article->user->name}}</td>
                <td class="text-center">    
                    @if (is_null($article->is_accepted))
                        <a href="{{route('article.show',compact('article'))}}" class="btn btn-warning btn-login text-white">Leggi l'articolo</a>
                    @else
                        <form class="text-center" action="{{route('revisor.undoArticle',compact('article'))}}" method="post">
                            @csrf
                            <button class="btn btn-login btn-warning text-white ">Riporta in revisione</button>
                        </form>
                    @endif
                </td>
            </tr>
        @endforeach
    </tbody>
</table>