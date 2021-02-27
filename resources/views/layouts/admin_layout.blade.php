<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>dashboard</title>

        <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
        <link rel="stylesheet" href="{{asset('css/styles.css')}}">
        <link rel="stylesheet" href="{{asset('css/dashs.css')}}">

        <script src="{{asset('js/jquery.min.js')}}"></script>
    </head>
        
    <body>

        <!--sidebar-->
        <div class="sidebar-box">
            <div>
                <div class="text-center mb-5 mt-5 sidebar-box-user">
                    <div class="item-center">
                        <div class="active-user mx-auto">
                            <img src="{{asset('images/undraw_book_lover_mkck.svg')}}" alt="photo de profil">
                        </div>
                    </div>
                    <div class="text-center">
                        <h4>{{Auth::guard('school')->user()->ecole}}</h4>
                        <h5 style="color:var(--color-primary)">{{ Auth::guard('school')->user()->code  }}</h5>
                    </div>
                </div>
                <div>
                    <ul class="sidebar-menu-list">
                        <li class="">
                            <a href="{{url('/dashboard')}}" class="sidebar-menu-item">
                                <img src="{{asset('images/home.svg')}}" class="icon-side" alt=""> &nbsp;
                                Accueil
                            </a>
                            <div class="sidebar-menu-dropdown">
                                <ul>
                                    <li><a href="#" class="sidebar-menudrop-item">Alpha</a></li>
                                    <li><a href="#" class="sidebar-menudrop-item">Mon compte</a></li>
                                    <li><a href="#" class="sidebar-menudrop-item">Production</a></li>
                                    <li><a href="#" class="sidebar-menudrop-item">Réseau</a></li>
                                    <li><a href="#" class="sidebar-menudrop-item">Parcours personnel</a></li>
                                    <li><a href="#" class="sidebar-menudrop-item">Centre d'information</a></li>
                                    <li><a href="#" class="sidebar-menudrop-item">Dashboard</a></li>
                                </ul>
                            </div>
                        </li>
                        {{--<li>
                            <a href="#" class="sidebar-menu-item">
                                <img src="{{asset('images/undraw_exams_g4ow.svg')}}" class="icon-side" alt=""> &nbsp;
                                Compte
                            </a>
                        </li>--}}
                        <li>
                            <a href="{{url('/classes/register')}}" class="sidebar-menu-item">
                                <img src="{{asset('images/edit.svg')}}" class="icon-side" alt=""> &nbsp;
                                Enregistrement classes
                            </a>
                        </li>
                        <li>
                            <a href="{{url('/student/register')}}" class="sidebar-menu-item">
                                <img src="{{asset('images/edit.svg')}}" class="icon-side" alt=""> &nbsp;
                                Enregistrement élèves
                            </a>
                        </li>
                        <li>
                            <a href="{{url('/verification')}}" class="sidebar-menu-item">
                                <img src="{{asset('images/verify.svg')}}" class="icon-side" alt=""> &nbsp;
                                Verification candidats
                            </a>
                        </li>
                        <li>
                            {{--<a href="#" class="sidebar-menu-item">
                                <img src="{{asset('images/undraw_exams_g4ow.svg')}}" class="icon-side" alt=""> &nbsp;
                                Parametre
                            </a>--}}
                            <form id="logout-form" class="form-inline w-100 ml-auto navbar-form" action="{{url('/logout')}}" method="POST">
                                @csrf
                                <a href="{{url('/logout')}}" class="sidebar-menu-item" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                    <img src="{{asset('images/logout.svg')}}" class="icon-side" alt="">
                                    &nbsp; Se déconnecter
                                </a>
                            </form>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    
        <!--Main-block-->
        <section class="main-block">
    
            <!--Navbar-->
            <nav class="navigation-bar u-mb-standard">
                <div class="container position-relative">
                    <div class="navigation-bar-block">
                        <a href="#" class="platform-logo">
                            Dashboard
                        </a>
                        <ul class="mb-0">
                            <li>
                                <a href="#">
                                   <img src="{{asset('images/facebook1.svg')}}" alt="icon"> 
                                </a>
                            </li>
                            
                            <li>
                                <a href="#">
                                   <img src="{{asset('images/whatsapp.svg')}}" alt="icon"> 
                                </a>
                            </li>
                            {{--<li>
                                <a href="#">
                                   <img src="Ressources/Icons/share2.svg" alt="icon"> 
                                </a>
                            </li>
                            <li>
                                <a href="#" id="sub-menu-control">
                                   <img src="Ressources/Icons/pixel.svg" alt="icon"> 
                                </a>
                            </li>--}}
                        </ul>
                    </div>
                    {{--<div class="nav-dropdown" id="navigation-sub-menu">
                        <div class="nav-dropdown-content">
                            <div>
                                <a href="#">
                                    <div class="nav-dropdown-box text-center">
                                       <img src="Ressources/Icons/mail.svg" alt="icon"> 
                                        <span>Webmail</span>
                                    </div>
                                </a>
                            </div>
                            <div>
                                <a href="#">
                                    <div class="nav-dropdown-box text-center">
                                       <img src="Ressources/Icons/mail.svg" alt="icon"> 
                                        <span>Webmail</span>
                                    </div>
                                </a>
                            </div>
                            <div>
                                <a href="#">
                                    <div class="nav-dropdown-box text-center">
                                       <img src="Ressources/Icons/mail.svg" alt="icon"> 
                                        <span>Webmail</span>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="nav-dropdown-content">
                            <div>
                                <a href="#">
                                    <div class="nav-dropdown-box text-center">
                                       <img src="Ressources/Icons/mail.svg" alt="icon"> 
                                        <span>Webmail</span>
                                    </div>
                                </a>
                            </div>
                            <div>
                                <a href="#">
                                    <div class="nav-dropdown-box text-center">
                                       <img src="Ressources/Icons/mail.svg" alt="icon"> 
                                        <span>Webmail</span>
                                    </div>
                                </a>
                            </div>
                            <div>
                                <a href="#">
                                    <div class="nav-dropdown-box text-center">
                                       <img src="Ressources/Icons/mail.svg" alt="icon"> 
                                        <span>Webmail</span>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="nav-dropdown-content">
                            <div>
                                <a href="#">
                                    <div class="nav-dropdown-box text-center">
                                       <img src="Ressources/Icons/mail.svg" alt="icon"> 
                                        <span>Webmail</span>
                                    </div>
                                </a>
                            </div>
                            <div>
                                <a href="#">
                                    <div class="nav-dropdown-box text-center">
                                       <img src="Ressources/Icons/mail.svg" alt="icon"> 
                                        <span>Webmail</span>
                                    </div>
                                </a>
                            </div>
                            <div>
                                <a href="#">
                                    <div class="nav-dropdown-box text-center">
                                       <img src="Ressources/Icons/mail.svg" alt="icon"> 
                                        <span>Webmail</span>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>--}}
                </div>
            </nav>
 
            @yield('content')

        </section>

        <script src="{{asset('js/bootstrap.min.js')}}"></script>
        <script src="{{asset('js/main.js')}}"></script>
        
    </body>
</html>