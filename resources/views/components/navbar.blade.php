    <nav class="navbar navbar-expand-lg navbar-light shadow-sm">
        <div class="container">
            <a class="navbar-brand" href="{{ route('dashboard') }}">
                <img src="{{ asset('assets/logo-navbar.png') }}" 
                    alt="Logo Aplikasi" 
                    class="d-inline-block align-text-top" 
                    style="height: 30px;">
            </a>
            
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">                
                <ul class="navbar-nav">
                    <li class="nav-item mx-3">
                        <a class="nav-link" href="{{ route('dashboard') }}">Home</a>
                    </li>
                    <li class="nav-item mx-3">
                        <a class="nav-link" href="{{ route('pengelolaan') }}">Details</a>
                    </li>
                    <li class="nav-item mx-3">
                        <a class="nav-link" href="{{ route('profile', ['username' => request()->query('username')]) }}">Profile</a>  
                    </li>
                </ul>
            </div>
        </div>
    </nav>
