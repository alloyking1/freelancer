<nav class="navbar navbar-transparent navbar-absolute">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="/home">Home</a>
        </div>
        <div class="collapse navbar-collapse">
            
            <ul class="nav navbar-nav pull-right">
                    @guest
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/') }}">Home</a></i>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('login') }}">Login</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('register') }}">Register</a></li>
                @else
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true">
                            Welcome {{ Auth::user()->first_name }} <span class="caret"></span>
                        </a>

                        <!-- <ul class="dropdown-menu">
                            <li>
                                <a style="cursor:pointer;" href="{{ route('logout') }}"
                                    onclick touchstart="event.preventDefault();
                                                document.getElementById('logout-form').submit();">
                                    Logout
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    {{ csrf_field() }}
                                </form>
                            </li>
                        </ul> -->
                    </li>

                @endguest
            </ul>
                    
        </div>
    </div>
</nav>


