<!Doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Products | Laravel</title>
    {{-- Bootstrap CSS CDN --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <div class="container-fluid">
        <div class="row vh-100 ">
            <div class="col-md-3 bg-dark">
                <ul class="pt-5 list-unstyled">
                    <li><a class="nav-link fw-bold fs-5 text-white" href="{{ route('dashboard') }}">Dashboard</a></li>
                    <li class="pt-3"><a class="nav-link fw-bold fs-5 text-white" href="{{ route('products') }}">Kelola Data Produk</a></li>
                    <li>
                        <a class="fixed-bottom nav-link fw-bold fs-5 text-white ps-4 pb-3" href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                         document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </li>
                </ul>
            </div>
            <div class="col-md-9 bg-body-secondary">
                @yield('content')
            </div>
        </div>
    </div>
    

    {{-- Bootstrap JS CDN --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>
