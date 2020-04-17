<header class="doc-header">
    <nav class="navbar navbar-expand-md navbar-light shadow-sm" style="background-color:#0000CC">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/') }}" style="color:#ffffff">
                {{ config('app.name', 'Laravel') }}
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Left Side Of Navbar -->
                <ul class="navbar-nav mr-auto">

                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="navbar-nav ml-auto" style="color:#ffffff">
                    <!-- Authentication Links -->
                    @guest
                        <li class="nav-item">
                            <a class="nav-link" style="color:#ffffff" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                        @if (Route::has('register'))
                            <li class="nav-item">
                                <a class="nav-link" style="color:#ffffff" href="{{ route('register') }}">{{ __('Register') }}</a>
                            </li>
                        @endif
                    @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                                    document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    @endguest
                </ul>
            </div>
        </div>
    </nav>
    <div class="container-fluid">
        <div class="row p-4">
            <div class="col-md-6">
                <a href="" class="inline-block logo-link">
                    <img src="{{ url('storage/logocarrasco.png') }}" alt="" style="max-width: 100%;" class="logo-image">
                </a>
            </div>
            <div class="col-md-3">
                <form class="navbar-form navbar-left">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Search">
                        <select name="" id="" class="form-control" >
                            <option value="">Insert vehicle</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-default">Submit</button>
                </form>
            </div>
            <div class="col-md-3" style="background-color:lightgrey">
                <div class="pr-2">
                    <span class="navbar-text">
                        <h5>Nombre Empresa</h5>
                    </span>
                    <span class="navbar-text">
                        Phone: 900-XXX-XXX
                    </span>
                </div>
            </div>
        </div>
    </div>
    <nav class="navbar navbar-expand navbar-light clearfix bg-white shadow-sm" style="background-color:#85929e">
            <ul class="nav navbar-nav">
                <li class="nav-item">
                    <a class="button btn-nav" href="" style="text-decoration:none;">
                        <img src="{{ url('storage/icon.png') }}" alt="">
                        <p><h6>Tractor</h6></p>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="button btn-nav" href="">
                        <img src="{{ url('storage/icon2.png') }}" alt="" >
                        <p><h6>Truck</h6></p>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="button btn-nav" href="" style="text-decoration:none;">
                        <img src="{{ url('storage/icon-8.png') }}" alt="" >
                        <p><h6>Tanktrailer</h6></p>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="button btn-nav" href="" style="text-decoration:none;">
                        <img src="{{ url('storage/tankcontainers.png') }}" alt="" >
                        <p><h6 style="size:100%">Tunkcontainer</h6></p>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="button btn-nav" href="" style="text-decoration:none;">
                        <img src="{{ url('storage/icon-4.png') }}" alt="" >
                        <p><h6>Trailer</h6></p>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="button btn-nav" href="" style="text-decoration:none;">
                        <img src="{{ url('storage/icon-3.png') }}" alt="" >
                        <p><h6>Drawbartrailer</h6></p>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="button btn-nav" href="" style="text-decoration:none;">
                        <img src="{{ url('storage/icon-6.png') }}" alt="" >
                        <p><h6>Van</h6></p>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="button btn-nav" href="" style="text-decoration:none;">
                        <img src="{{ url('storage/icon-9.png') }}" alt="" >
                        <p><h6>Machinery</h6></p>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="button btn-nav" href="" style="text-decoration:none;">
                        <img src="{{ url('storage/icon_parts.png') }}" alt="" >
                        <p><h6>Parts</h6></p>
                    </a>
                </li>
            </ul>
    </nav>
    <nav class="navbar navbar-expand-md navbar-light shadow-sm" style="background-color:#0000CC">
        <div class="container" style="margin-left:10px">
            <ul class="breadcrumb" style="color:#ffffff; background-color:transparent;">
                <li style="color:#ffffff;">You are here: Home<span class="divider"></span></li>
            </ul>
            <!--ul class="breadcrumb" style="color:#ffffff; background-color:transparent;">
                <li><a href="{{ url('locale/en') }}" ><i class="fa fa-language"></i>
                <img src="/storage/Flags/UK.png" style="max-width:10%" alt="UK"></a></li>
                <li><a href="{{ url('locale/es') }}" ><i class="fa fa-language"></i>
                    <img src="/storage/Flags/Spain.png" style="max-width:10%" alt="ES"></a></li>
            </ul-->
        </div>
    </nav>
</header>
