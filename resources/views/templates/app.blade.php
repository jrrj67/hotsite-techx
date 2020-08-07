<!doctype html>
<html lang="en">
@section('head')
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="apple-touch-icon" type="image/x-icon" sizes="128x128" href="{{asset('images/logo-techx.png')}}">
        <link rel="stylesheet" href="{{asset("css/materialize.css")}}">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <title>Ajuda TechX</title>
    </head>
@endsection
<body>
@section('header')
    <header>
        <div class="hide-on-med-and-down">
            <div class="container">
                <div class="row"><h4>Teste</h4></div>
            </div>

            <div class="divider"></div>
        </div>
    @endsection

    @section('header-mobile')
        <!-- Mobile topnav -->
            <nav class="hide-on-med-and-up logo-color">
                <div class="nav-wrapper">
                    <a href="{{route('home')}}" class="brand-logo right logo-mobile"><img class="circle z-depth-3"
                                                                                          width="45"
                                                                                          src="{{asset("images/logo-techx.png")}}"
                                                                                          alt=""></a>
                    <ul id="nav-mobile" class="left hide-on-med-and-up">
                        <li><a href="#" data-target="slide-out" class="sidenav-trigger"><i
                                        class="material-icons">menu</i></a></li>
                    </ul>
                </div>
            </nav>
    </header>
@endsection

@section('sidebar')
    <!-- Sidebar -->
    <ul id="slide-out" class="sidenav sidenav-fixed hoverable z-depth-3">
        <div class="row"></div>
        <div class="container">
            <div class="row center"><a href="{{route('home')}}"><img class="circle z-depth-3 hoverable" width="80"
                                                                     src="{{asset("images/logo-techx.png")}}"
                                                                     alt=""></a></div>
        </div>
        <div class="center"><h4>Ajuda TechX</h4></div>
        <div class="divider"></div>
        <div class="nav-wrapper">
            <div class="row">
                <div class="input-field col s12">
                    <form action="{{route('search')}}" method="post" autocomplete="off">
                        @csrf
                        <i class="material-icons prefix">search</i>
                        <label for="autocomplete-input">Pesquisar</label>
                        <input name="search" type="text" id="autocomplete-input" class="autocomplete">
                        @if(Session::get('error'))
                            <div class="right">
                                <span class="red-text">
                                    {{Session::get('error')}}
                                </span>
                            </div>
                        @endif
                    </form>
                </div>
            </div>
        </div>
        <div class="divider"></div>
        <ul class="collapsible expandable">
            <li>
                <div class="collapsible-header waves-effect waves-techx"><i class="material-icons">email</i>Configurar
                    email TechX
                </div>
                <div class="collapsible-body collection">
                    <span>
                        <a class="collection-item" href="{{route('email_config')}}#outlook">
                            <logo>
                                <img class="logo-padding" width="30" src="{{asset('images/outlook-logo.png')}}" alt=""
                                     style="padding-right: 10px;">
                            </logo>
                            Outlook
                        </a>
                    </span>
                </div>
                <div class="collapsible-body collection">
                    <span>
                        <a class="collection-item" href="{{route('email_config')}}#gmail">
                            <logo>
                                <img class="logo-padding" width="30" src="{{asset('images/gmail-logo.png')}}" alt=""
                                     style="padding-right: 10px;">
                            </logo>
                            Gmail
                        </a>
                    </span>
                </div>
                <div class="collapsible-body collection">
                    <span>
                        <a class="collection-item" href="{{route('email_config')}}#samsung">
                            <logo>
                                <img class="logo-padding" width="30" src="{{asset('images/samsung-logo.png')}}" alt=""
                                     style="padding-right: 10px;">
                            </logo>
                            Samsung Email
                        </a>
                    </span>
                </div>
                <div class="collapsible-body collection">
                    <span>
                        <a class="collection-item" href="{{route('email_config')}}#recover">
                            <logo>
                                <img class="logo-padding" width="30" src="{{asset('images/password-icon.png')}}" alt=""
                                     style="padding-right: 10px;">
                            </logo>
                            Recuperar senha
                        </a>
                    </span>
                </div>
            </li>
            <li>
                <div class="collapsible-header waves-effect waves-techx"><i class="material-icons">build</i>
                    FiscalWeb
                </div>
                <div class="collapsible-body collection">
                    <span>
                        <a class="collection-item" href="{{route('install_config')}}">
                            <logo>
                                <img class="logo-padding" width="30" src="{{asset('images/install-logo.png')}}" alt=""
                                     style="padding-right: 10px;">
                            </logo>
                            Como instalar
                        </a>
                    </span>
                </div>
                <div class="collapsible-body collection">
                    <span>
                        <a class="collection-item" href="{{route('manual_config')}}">
                            <logo>
                                <img class="logo-padding" width="30" src="{{asset('images/guide-icon.png')}}" alt=""
                                     style="padding-right: 10px;">
                            </logo>
                            Como usar
                        </a>
                    </span>
                </div>
            </li><li>
                <div class="collapsible-header waves-effect waves-techx"><i class="material-icons">directions_car</i>
                    GIFO
                </div>
                <div class="collapsible-body collection">
                    <span>
                        <a class="collection-item" href="{{route('shortcut_config')}}">
                            <i class="logo-padding material-icons" style="padding-right: 10px; color: #212121">apps</i>
                            Como adicionar atalho
                        </a>
                    </span>
                </div>
            </li>
        </ul>
    </ul>
@endsection

@section('main')
@endsection

@section('footer')

    <footer class="page-footer logo-color">
        <div class="footer-copyright logo-color">
            <div class="container">
                <div class="right">© 2020 TechX</div>
            </div>
        </div>
    </footer>

    <script
            src="https://code.jquery.com/jquery-2.2.4.min.js"
            integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="
            crossorigin="anonymous"></script>
    <script src="{{asset("js/materialize.js")}}"></script>
@endsection
</body>
</html>
