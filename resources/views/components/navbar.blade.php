<nav class="navbar navbar-expand-lg colornav fixed-top navbar-shadow">
    <div class="container-fluid">
   
  
    
    
    
    
   
        <a class="navbar-brand text-white" href="{{ route('homepage') }}">AulabPost</a>
       
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link text-white " href="{{ route('article.create') }}">Inserisci un Articolo</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="{{ route('article.index') }}">Tutti gli Articoli</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="{{ route('careers') }}">Lavora con noi</a>
                </li>

                @auth
                @if(Auth::user()->is_admin)
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('admin.dashboard') }}">Dashboard Admin</a>
                </li>
                @endif
                @if(Auth::user()->is_revisor)
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('revisor.dashboard') }}">Dashboard del revisore</a>
                </li>
                @endif
                <li class="nav-item dropdown ">
                    <a  class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        Benvenuto  {{ Auth::user()->name }} 
                    </a>
                    <ul class="dropdown-menu ">
                        <li class="nav-item ">
                            <form action="{{ route('logout') }}" id="logout-form" method="POST">
                                @csrf
                                <button type="submit" class="btn nav-link blackText">Logout</button>
                            </form>
                        </li>
                    </ul>
                </li>
                @endauth

                @guest
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        Benvenuto Ospite
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item " href="{{ route('register') }}">Registrati</a></li>
                        <li><a class="dropdown-item " href="{{ route('login') }}">Accedi</a></li>
                    </ul>
                </li>
                @endguest

            </ul>
        </div>
    </div>
</nav>