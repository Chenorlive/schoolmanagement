<!-- Navigation-->
<nav class="navbar navbar-light bg-light static-top">
    <div class="container">
        <a class="navbar-brand" href="frontend"><b>School Fees Payement</b></a>
        @if (Route::has('login'))
        <div class="top-right links">
            @auth
                <a class="btn btn-primary" href="{{ url('/home') }}">HomeLink</a>
            @else
                <a class="btn btn-primary" href="{{ route('login') }}">Login</a>

                @if (Route::has('register'))
                    <a class="btn btn-primary" href="{{ route('register') }}">Sign Up</a>
                @endif
            @endauth
        </div>
    @endif
    </div>
</nav>
