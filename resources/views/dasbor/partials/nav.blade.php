<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container px-5">
        <a class="navbar-brand" href="{{ url('dasbor') ?? '' }}">
            <img src="{{ asset('assets/img/' . env('APP_FAVICON')) }}" alt="logo dasbor" height="34px">
            {{ env('APP_NAME') ?? '' }}
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <span class="text-light nav-link">
                        Selamat datang <span class="fw-bold">{{ Auth::user()->name ?? '' }}</span>
                    </span>
                </li>
                <li class="nav-item">
                    {{-- <a class="nav-link link-light fw-bold" href="{{ 'logout' }}">
                        <i class="fa-solid fa-sign-out"></i> Logout
                    </a> --}}

                    <form id="logout-form" action="{{ route('logout') }}" method="POST">
                        @csrf
                        <button type="submit" class="btn link-light fw-bold">
                            <i class="fa-solid fa-sign-out"></i> Logout
                        </button>
                    </form>
                </li>
            </ul>
        </div>
    </div>
</nav>