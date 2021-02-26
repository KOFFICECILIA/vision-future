<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @yield('title')
    
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/styles.css')}}">
    @yield('css')
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light my-navbar">
        <a class="navbar-brand" href="{{url('/')}}">
            <div class="logo">
                
            </div>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        
        <div class="collapse navbar-collapse mt-3" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto w-100">
                <li class="nav-item active">
                    <a class="nav-link" href="{{url('/')}}">Accueil</a>
                </li>
                {{--<li class="nav-item">
                    <a class="nav-link" href="{{url('/verification')}}">Identification</a>
                </li>--}}
                @if(!Auth::check())
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Ecole
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item nav-link" href="{{url('/school/inscription')}}">Inscription</a>
                    <a class="dropdown-item nav-link" href="{{url('/school/connexion')}}">Connexion</a>
                </div>
                
                </li>
                @endif
                <li class="nav-item">
                    <a class="nav-link" href="{{url('about')}}">A Propos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="#footer" tabindex="-1" aria-disabled="true">contact</a>
                </li>
            </ul>
            @if(!Auth::guard('school')->check())
              <form class="form-inline w-100 ml-auto navbar-form">
                <a href="{{url('/school/connexion')}}" class="primary-btn">Se connecter</a>
              </form>
            @else
              <form id="logout-form" class="form-inline w-100 ml-auto navbar-form" action="{{url('/logout')}}" method="POST">
                @csrf
                <a href="{{url('/logout')}}" class="primary-btn" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Se déconnecter</a>
              </form>
              <!-- <a class="dropdown-item" href="{{ Auth::check() ? url('/admin/logout') :  url('/restaurant/logout') }}" class="btn btn-default btn-flat"
                  onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                  <i class="fa fa-lock"></i>@lang('auth.sign_out')
              </a> -->
            @endif
        </div>
    </nav>
    
    @yield('content')

    <!-- main section end -->
    <!-- Footer -->
    <footer id="footer">
        <div class="container">
          <div class="row footer-divider">
              <div class="col-4">
                  <div class="text-center">
                    <a class="navbar-brand" href="{{url('/')}}">
                        <div class="logo">
                        </div>
                    </a>
                    <h4>Nous espérons que votre visite sur notre site vous donnera entièrement satisfaction. Venez cerner quelques facettes de notre maison. Et puisque la perfection n’est pas de ce monde, nous restons ouverts à vos idées novatrices, vos critiques et vos propositions.</h4>
                  </div>
              </div>
            <div class="col-4">
              <div class="text-center">
                <div class="footer-info">
                  <p>Mobile &nbsp; - &nbsp; +225 01 02 03 04 05</p>
                  <p>Mail  &nbsp; - &nbsp; eduNum@gmail.com</p>
                </div>
                <ul class="d-flex mt-4">
                  <li class="footer-social facebook">
                    <a href="#">
                      <img src="{{asset('images/facebook.svg')}}" alt="facebook" class="img-fluid">
                    </a>
                  </li>
                  <li class="footer-social linkedin">
                    <a href="#">
                      <img src="{{asset('images/linkedin.svg')}}" alt="linkedin" class="img-fluid">
                    </a>
                  </li>
                  <li class="footer-social twitter">
                    <a href="#">
                      <img src="{{asset('images/twitter.svg')}}" alt="twitter" class="img-fluid">
                    </a>
                  </li>
                  <li class="footer-social youtube">
                    <a href="#">
                      <img src="{{asset('images/youtube.svg')}}" alt="youtube" class="img-fluid">
                    </a>
                  </li>
                </ul>
              </div>
            </div>
            <div class="col-4">
              <div class="footer-party-rigth text-center">
                <p>S'inscrire à la newsletter</p>
                <p>Oui, j’accepte de recevoir cette newsletter !</p>
                <form action="">
                  <input type="email" name="email" id="email" placeholder="email">
                  <a href="#">
                    <button type="button" class="button-footer">Envoyer</button>
                  </a>
                </form>
              </div>
            </div>
          </div>
          <div class="footer-description">
            <p>© 2021 Education Numerique - All rights reserved</p>
          </div>
        </div>
      </footer>

    

    <script src="{{asset('js/jquery.min.js')}}"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    @yield('scripts')
</body>
</html>
