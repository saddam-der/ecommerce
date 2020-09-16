<nav class="navbar navbar-expand-lg navbar-light  relative-top" >
    <div class="container">
        <a class="navbar-brand" href="{{ route('order.index') }}">Dreamapps</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive"
            aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto pt-3">
                @if(auth()->user())
                <li class="nav-item mr-4">
                    <a class="nav-link" href="#"><i class="fa fa-user"></i> Account</a>
                </li>
                <li class="nav-item  mr-4">
                    <a class="nav-link" href="{{ route('order') }}"><i class="fa fa-shopping-cart"></i> Cart</a>
                </li>                
                <li class="nav-item">
                  <a class="nav-link" href="#" data-toggle="modal" data-target="#logoutModal"><i class="fa fa-sign-in"></i> Logout</a>
                </li>
                @endif

                @if(auth()->guest())
                <li class="nav-item">
                  <a class="nav-link" href="{{ route('login') }}"><i class="fa fa-sign-in"></i> Login</a>
                </li>
                @endif
            </ul>
        </div>
    </div>
</nav>
<div class="container">
    <hr>
    <nav class="navbar mb-4">
        {{-- <ul class="navbar-nav">
            <li class="nav-item active">
                <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                <a class="nav-link" href="#"><span class="sr-only">(current)</span></a>
            </li>
        </ul> --}}
    </nav>
</div>
