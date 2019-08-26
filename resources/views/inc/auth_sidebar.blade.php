<div class="sidebar" data-color="purple" data-image="../assets/img/sidebar-1.jpg">
    <!--
        Tip 1: You can change the color of the sidebar using: data-color="purple | blue | green | orange | red"

        Tip 2: you can also add an image using data-image tag
    -->

    <div class="logo">
        <a href="3" class="simple-text">
            {{env('APP_NAME')}}
        </a>
    </div>

    <div class="sidebar-wrapper">
        <ul class="nav">
            <li class="{{ Request::is('home') ? 'active' : null }}">
                <a href="/home">
                    <i class="material-icons">dashboard</i>
                    <p>Dashboard</p>
                </a>
            </li>
            <li class="{{ Request::is('home/investment') ? 'active' : null }}">
                <a href="/home/investment">
                    <i class="material-icons">attach_money</i>
                    <p>Investments</p>
                </a>
            </li>
            <li class="{{ Request::is('home/manager') ? 'active' : null }}">
                <a href="/home/manager">
                    <i class="material-icons">work</i>
                    <p>Your Account manager</p>
                </a>
            </li>
            <li class="{{ Request::is('home/trade') ? 'active' : null }}">
                <a href="/home/trade">
                    <i class="material-icons">shop</i>
                    <p>Learn to trade with us</p>
                </a>
            </li>
            <li class="{{ Request::is('logout') ? 'active' : null }}">
                <a href="{{ route('logout') }}"
                    onclick ="event.preventDefault();
                        document.getElementById('logout-form').submit();">
                        <i class="material-icons">logout</i>
                    Logout
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    {{ csrf_field() }}
                </form>
            </li>

        </ul>
    </div>
   
</div>
