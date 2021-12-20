<link rel="stylesheet" href="{{ asset('css/styles.css') }}">
<link rel="stylesheet" href="{{ asset('css/styles2.css') }}">

<style>
    .dropdown {
        font-family: "Poppins";
    }

    .dropdown .dropdown-menu .dropdown-item:hover {
        background-color: #7D2639;
        color: #fff;
    }
</style>

@php( $logout_url = View::getSection('logout_url') ?? config('adminlte.logout_url', 'logout') )

@if (config('adminlte.use_route_url', false))
    @php( $logout_url = $logout_url ? route($logout_url) : '' )
@else
    @php( $logout_url = $logout_url ? url($logout_url) : '' )
@endif

<nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
    <div class="container">
        <a class="navbar-brand " href="/"><img class="img-fluid" src="{{asset('img/paw.png')}}" width="100" alt="..." /></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            Menu
            <i class="fas fa-bars ms-1"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav text-capitalize ms-auto py-4 py-lg-0">
                <li class="nav-item"><a class="nav-link" href="/berita">Our Team</a></li>
                <li class="nav-item"><a class="nav-link" href="/laporankeuangan">Order</a></li>
                <li class="nav-item"><a class="nav-link" href="/term">Term</a></li>
                <li class="nav-item"><a class="nav-link" href="/gambar">Contact Us</a></li>
                @if(Auth::guest())
                <li class="nav-item"><a class="nav-link" href="/login">Login</a></li>
                @else(Auth::user())
                <li class="nav-item">
                    <a class="nav-link" href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        {{ __('adminlte::adminlte.log_out') }}
                    </a>
                    <form id="logout-form" action="{{ $logout_url }}" method="POST" style="display: none;">
                        @if(config('adminlte.logout_method'))
                        {{ method_field(config('adminlte.logout_method')) }}
                        @endif
                        {{ csrf_field() }}
                    </form>
                </li>
                @endif
            </ul>
        </div>
    </div>
</nav>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="{{asset('js/jquery-3.3.1.min.js')}}"></script>
<script src="{{asset('js/popper.min.js')}}"></script>
<script src="{{asset('js/bootstrap.min.js')}}"></script>