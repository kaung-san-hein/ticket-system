<nav class="navbar navbar-default">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href={{ asset("/") }}>Learning Laravel</a>
        </div>
        <!-- Navbar Right -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
                <li class="active"><a href={{ asset("/") }}>Home</a></li>
                <li><a href={{ asset("/about") }}>About</a></li>
                <li><a href={{ asset("/contact") }}>Contact</a></li>
                <li><a href={{ asset("/blog") }}>Blog</a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Member
                        <span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                        @if(Auth::check())
                            @role('manager')
                                <li><a href={{ asset("/admin") }}>Dashboard</a></li>
                            @endrole
                            <li><a href={{ asset("/users/logout") }}>Logout</a></li>
                        @else
                            <li><a href={{ asset("/users/register") }}>Register</a></li>
                            <li><a href={{ asset("/users/login") }}>Login</a></li>
                        @endif
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>