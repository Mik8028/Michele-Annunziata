<x-layout>

    <div class="container-fluid  text-center display-index">
        <div class="row justify-content-center">
            <h2 class="display-1 h1-index">
                Modifica un articolo
            </h2>
        </div>
    </div>

    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-12 col-md-8">
                @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>

                @endif
                <form action="{{route('article.update', compact('article'))}}" method="post" class="card p-5 color-form text-white shadow" enctype="multipart/form-data">
                    @csrf
                    @method('put')
                    <div class="mb-3">
                        <label for="title" class="form-label">Titolo:</label>
                        <input type="text" name="title" class="form-control rounded-5" id="title" value="{{$article->title}}">
                    </div>

                    <div class="mb-3">
                        <label for="subtitle" class="form-label">Sottotitolo:</label>
                        <input type="text" name="subtitle" class="form-control rounded-5" id="subtitle"
                            value="{{$article->subtitle}}">
                    </div>

                    <div class="mb-3">
                        <label for="image" class="form-label">Immagine:</label>
                        <input type="file" name="image" class="form-control rounded-5" id="image">
                    </div>
                    <div class="mb-3">
                        <label for="tags" class="form-label">Tags</label>
                        <input  name="tags" class="form-control rounded-5" id="tags" value="{{ $article->tags->implode('name',',') }}">
                        <span class="small fst-italic">Dividi ogni tag con una virgola</span>
                    </div>

                    <div class="mb-3">
                        <label for="category" class="form-label">Categoria:</label>
                        <select name="category" id="category" class="form-control rounded-5 text-capitalize">
                            @foreach ($categories as $category)
                            <option value="{{ $category->id}}" @if ($article->category && $category->id == $article->category->id) selected @endif>{{$category->name}}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="body" class="form-label ">Corpo del testo:</label>
                        <textarea name="body" id="body" cols="30" rows="7" class="form-control rounded-4">
                        {{$article->body}}
                    </textarea>
                    </div>

                    <div class="mt-2 d-flex justify-content-center">
                        <button class="btn btn-warning btn-login text-white">Modifica articolo</button>
                    </div>
                </form>

            </div>
        </div>
    </div>
    
    <x-footer />

</x-layout>
