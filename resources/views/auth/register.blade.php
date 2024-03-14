<x-layout>
        <div class="container-fluid  text-center display-index">
            <div class="row justify-content-center">
                <h2 class="display-1 h1-index">
                    Registrati
                </h2>
            </div>
        </div>

    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-12 col-md-8">
                @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif

                <form class="card color-form text-white p-5 shadow" action="{{ route('register') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="username" class="form-label">Username:</label>
                        <input type="text" name="name" class="form-control rounded-5" id="username" value="{{ old('name') }}">
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" name="email" class="form-control rounded-5" id="email" value="{{ old('email') }}">
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password:</label>
                        <input type="password" name="password" class="form-control rounded-5" id="password" >
                    </div>
                    <div class="mb-3">
                        <label for="password_confirmation" class="form-label">Conferma Password:</label>
                        <input type="password" name="password_confirmation" class="form-control rounded-5" id="password_confirmation">
                    </div>
                    <div class="mb-3">
                        <button class="btn btn-login text-white">Registrati</button>
                        <p class="small mt-2">Gia registrato? <a href="{{ route('login') }}">Clicca qui</a> </p>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-layout>