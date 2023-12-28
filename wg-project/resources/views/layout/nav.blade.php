<header data-menu-anima="fade-in">
    <div class="navbar navbar-default" role="navigation">
        <div class="navbar-mini">
            <div class="container">
                <div class="nav navbar-nav navbar-left">
                    <span><i class="fa fa-phone"></i>(530) 616-6714</span>
                    <hr />
                    <span><i class="fa fa-envelope-o"></i>info@WG.com</span>
                    <hr />
                    <span><i class="fa fa-clock-o"></i> Mon - Fri: 9:00 - 18:00 </span>
                </div>
              
            </div>
        </div>
        <div class="navbar navbar-main mega-menu-fullwidth">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle">
                        <i class="fa fa-bars"></i>
                    </button>
                    <a class="navbar-brand" href="{{route('index')}}"><img src="{{asset('images/logo.png')}}" alt="logo" /> </a>
                </div>
                <div class="collapse navbar-collapse navbar-right">
                    <ul class="nav navbar-nav">
                        <li class="dropdown {{ request()->is('/') ? 'active' : '' }}">
                            <a href="{{ route('index') }}" class="dropdown-toggle" data-toggle="dropdown" role="button">Home</a>
                        </li>
                        <li class="dropdown  {{ request()->is('about') ? 'active' : '' }}">
                            <a href="{{ route('about') }}" class="dropdown-toggle" data-toggle="dropdown" role="button">About Us <span class="caret"></span></a>
                            <ul class="dropdown-menu multi-level">
                                <li><a href="{{ route('about') }}">Overview</a></li>
                                <li><a href="{{ route('about.team') }}">Our Team</a></li>
                                <li><a href="{{ route('about.approach') }}">Approach</a></li>
                            </ul>
                        </li>
                        <li class="dropdown {{ request()->is('service') ? 'active' : '' }}">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button">Services <span class="caret"></span></a>
                            <ul class="dropdown-menu multi-level">
                                <li class="dropdown dropdown-submenu">
                                    <a href="{{ route('service.wealth') }}" class="dropdown-toggle" data-toggle="dropdown">Wealth Management</a>
                                    <ul class="dropdown-menu">
                                        <li><a href="#">Family Office</a></li>
                                        <li><a href="#">Comprehensive View</a></li>
                                        <li><a href="#">Inheritance Planning</a></li>
                                    </ul>
                                </li>
                                <li><a href="../../portfolio-3.html">Retirement Planning</a></li>
                                <li><a href="../../portfolio-4.html">Real Estate</a></li>
                                <li><a href="../../portfolio-5.html">Private Equity</a></li>
                                <li><a href="../../portfolio-5.html">Hedge Funds</a></li>
                            </ul>
                        </li>
                        <li class="dropdown {{ request()->is('faq') ? 'active' : '' }}">
                            <a href="{{ route('faq') }}" class="dropdown-toggle" data-toggle="dropdown" role="button">FAQ</a>
                        </li>
                        <li class="dropdown {{ request()->is('contact') ? 'active' : '' }}">
                            <a href="{{ route('contact') }}" class="dropdown-toggle" data-toggle="dropdown" role="button">Contact</a>
                        </li>
                    </ul>
                 <!--   <div class="nav navbar-nav navbar-right">
                        <div class="search-box-menu">
                            <div class="search-box scrolldown">
                                <input type="text" class="form-control" placeholder="Search for...">
                            </div>
                            <button type="button" class="btn btn-default btn-search">
                                <span class="fa fa-search"></span>
                            </button>
                        </div>
                        <ul class="nav navbar-nav lan-menu">
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"><img src="../../../images/en.png" alt="lan" />EN <span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="#"><img src="../../../images/it.png" alt="lan" />IT</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>-->
                </div>
            </div>
        </div>
    </div>
</header>
