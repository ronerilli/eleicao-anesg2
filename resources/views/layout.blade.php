<body>
    <div class="app-container app-theme-white body-tabs-shadow fixed-sidebar fixed-header">
       <div class="app-header header-shadow">
                <div class="app-header__logo" >
                <div class="logo-src"></div>
                
                <div class="header__pane ml-auto">
                    <div>
                        <button type="button" class="hamburger close-sidebar-btn hamburger--elastic" data-class="closed-sidebar">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
                    </div>
                </div>
            </div>
            <div class="app-header__mobile-menu">
                <div>
                    <button type="button" class="hamburger hamburger--elastic mobile-toggle-nav">
                        <span class="hamburger-box">
                            <span class="hamburger-inner"></span>
                        </span>
                    </button>
                </div>
            </div>
            <div class="app-header__menu">
                <span>
                    <button type="button" class="btn-icon btn-icon-only btn btn-primary btn-sm mobile-toggle-header-nav">
                        <span class="btn-icon-wrapper">
                            <i class="fa fa-ellipsis-v fa-w-6"></i>
                        </span>
                    </button>
                </span>
            </div>    <div class="app-header__content">
                <div class="app-header-left">
                    
                    <ul class="header-menu nav">
                        <li class="nav-item">
                            <a href="{{ url('/') }}" class="nav-link">
                                
                                Eleição Anesg 2020
                            </a>
                        </li>
                       
                    </ul>        </div>
                <div class="app-header-right">
                    <div class="header-btn-lg pr-0">
                        <div class="widget-content p-0">
                            <div class="widget-content-wrapper">
                                <div class="widget-content-left">
                                    <div class="btn-group">
                                        <a data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="p-0 btn">
                                            
                                            <i class="fa fa-angle-down ml-2 opacity-8"></i>
                                        </a>
                                        <div tabindex="-1" role="menu" aria-hidden="true" class="dropdown-menu dropdown-menu-right">
                                        @guest    
                                        @if (Route::has('login'))
                                        <a href="{{ url('login') }}">
                                            <button type="button" tabindex="0" class="dropdown-item">Login</button>
                                        </a>   
                                        @endif
                                        @if (Route::has('register'))
                                        <a href="{{ url('register') }}">
                                            <button type="button" tabindex="0" class="dropdown-item">Registro</button>
                                        </a>
                                        @endif
                                        @else
                                        
                                        <button type="button" tabindex="0" class="dropdown-item">{{ Auth::user()->name }}</button>
                                      
                                        <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                         </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                        @endguest 
                                        </form> 
                                        </div>
                                    </div>
                                </div>                                
                            </div>
                        </div>
                    </div>        </div>
            </div>
        </div>        <div class="ui-theme-settings">
            
        </div>        <div class="app-main">
                <div class="app-sidebar sidebar-shadow">
                    <div class="app-header__logo">
                        <div class="logo-src"></div>
                        <div class="header__pane ml-auto">
                            <div>
                                <button type="button" class="hamburger close-sidebar-btn hamburger--elastic" data-class="closed-sidebar">
                                    <span class="hamburger-box">
                                        <span class="hamburger-inner"></span>
                                    </span>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="app-header__mobile-menu">
                        <div>
                            <button type="button" class="hamburger hamburger--elastic mobile-toggle-nav">
                                <span class="hamburger-box">
                                    <span class="hamburger-inner"></span>
                                </span>
                            </button>
                        </div>
                    </div>
                    <div class="app-header__menu">
                        <span>
                            <button type="button" class="btn-icon btn-icon-only btn btn-primary btn-sm mobile-toggle-header-nav">
                                <span class="btn-icon-wrapper">
                                    <i class="fa fa-ellipsis-v fa-w-6"></i>
                                </span>
                            </button>
                        </span>
                    </div>    <div class="scrollbar-sidebar">
                        <div class="app-sidebar__inner">
                            <ul class="vertical-nav-menu">
                                <li class="app-sidebar__heading">Eleição</li>
                                <li>
                                    <a href="{{ url('votacaonacional') }}">
                                        
                                        </i>Vote - Diretoria Nacional
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ url('votacaoconselhofiscal') }}">
                                        
                                        </i>Vote - Conselho Fiscal
                                    </a>
                                </li>
                                <li>
                                    <a href="votacaoestadual">
                                        
                                        </i>Vote - Delegacias Estaduais
                                    </a>
                                </li>



                                </li>
                                                                
                                
                        </div>
                    </div>
                </div>    <div class="app-main__outer">
                    <div class="app-main__inner">
                        <div class="app-page-title">
                            <div class="page-title-wrapper">
                                <div class="page-title-heading">
                                    <h2>@yield('title')</h2>
                                                                
                                </div>
                                   </div>
                        </div>            <div class="text-center">

                        <div>
                        @include('flash-message')
                        @yield('content') </div>
                            
                        </div>
                        <div class="row">
                            <div class="col-md-12 col-lg-6">
                                
                            <div>
                        </div>
                        <div class="row">
                            
                            
                        </div>
                        <div class="row">
                            <div>
                        </div>
                        <div class="row">                            
                    </div>
                        </div>
                
        </div>
    </div>
<script type="text/javascript" src="js/main.js"></script></body>
</html>
