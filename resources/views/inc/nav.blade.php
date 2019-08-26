<div class="container">
	<!--nav-->
	<div class="row">
		<nav class="navbar navbar-default navbar-inverse navbar-fixed-top nav-color" style="background: linear-gradient(125deg, #2C3B9C, #662D91);color: #fff;border-bottom: none;" role="navigation">
                <a class="navbar-brand" href="{{ url('/') }}"><b>D.</b>trade</a> 
		 		<div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>                        
                    </button>

		 		</div>
		 		<div class="collapse navbar-collapse" id="collapse">
			 		<ul class="nav navbar-nav pull-right">
                        @guest
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/') }}">Home</a></i>
                        </li>
                        <!--<li class="nav-item"><a class="nav-link" href="{{ url('/about') }}">About</a></li>-->
                        <!--<li class="nav-item"><a class="nav-link" href="{{ url('/#') }}">Testimonies</a></li>-->
                        <li class="nav-item"><a class="nav-link" href="{{ route('login') }}">Login</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ route('register') }}">Register</a></li>
                    @else
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true">
                                {{ Auth::user()->first_name }} <span class="caret"></span>
                            </a>

                            <ul class="dropdown-menu">
                                <li>
                                    <a href="{{ route('logout') }}"
                                        onclick touchstart="event.preventDefault();
                                                    document.getElementById('logout-form').submit();">
                                        Logout
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        {{ csrf_field() }}
                                    </form>
                                </li>
                            </ul>
                        </li>
                    @endguest
                     </ul>
                     
			 	</div>	
		</nav>
	</div>
</div>

