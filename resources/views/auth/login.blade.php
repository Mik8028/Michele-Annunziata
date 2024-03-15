<x-layout>
 
<div class="container-fluid  text-center display-index">
        <div class="row justify-content-center">
            <h2 class="display-1 h1-index">
                Accedi
            </h2>
        </div>
    </div>

    <div class="container my-5">
        <div class="row  justify-content-center">
            <div class="col-12  col-md-8">
                @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif

                <form class="card color-form text-white rounded-4 p-5 shadow" action="{{ route('login') }}" method="POST">
                    @csrf
                   
                    <div class="mb-3">
                        <label for="email" class=" form-label">Email</label>
                        <input type="email" name="email" class="form-control rounded-5" id="email" value="{{ old('email') }}">
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password:</label>
                        <input type="password" name="password" class="form-control rounded-5" id="password" >
                    </div>
                 
                    <div class="mb-3">
                        <button class="btn btn-login btn-warning  text-white">Accedi</button>
                        <p class="small mt-2">Non sei registrato? <a href="{{ route('register') }}">Clicca qui</a> </p>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-layout>