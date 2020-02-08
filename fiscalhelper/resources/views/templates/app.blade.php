<!doctype html>
<html lang="en">
@section('head')
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="{{asset("css/materialize.css")}}">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <title>FiscalHelper</title>
    </head>
@endsection
<body>
@section('body')
    <header>
        <!-- Topnav -->
        <nav class="hide-on-med-and-down light-blue accent-4">
            <div class="nav-wrapper">
                <a href="#" class="brand-logo">
                    <img class="circle z-depth-3" width="55" src="{{asset("images/logo-techx.png")}}" alt="">
                </a>
                <ul id="nav-mobile" class="right hide-on-med-and-down">
                    <li><a href="sass.html">Sass</a></li>
                    <li><a href="badges.html">Components</a></li>
                    <li><a href="collapsible.html">JavaScript</a></li>
                </ul>
            </div>
        </nav>

        <!-- Mobile topnav -->
        <nav class="hide-on-med-and-up  light-blue accent-4">
            <div class="nav-wrapper">
                <a href="#" class="brand-logo right">Logo</a>
                <ul id="nav-mobile" class="left hide-on-med-and-up">
                    <li><a href="#" data-target="slide-out" class="sidenav-trigger"><i
                                class="material-icons">menu</i></a></li>
                </ul>
            </div>
        </nav>
    </header>

    <!-- Sidebar -->
    <ul id="slide-out" class="sidenav sidenav-fixed">
        <div class="row"></div>
        <div class="row center"><h4>FiscalHelper</h4></div>
        <div class="divider"></div>
        <div class="nav-wrapper">
            <form>
                <div class="input-field">
                    <input id="search" type="search" required placeholder="Pesquisar">
                    <label class="label-icon" for="search"><i class="material-icons">search</i></label>
                    <i class="material-icons">close</i>
                </div>
            </form>
        </div>
        <div class="divider"></div>
        <ul class="collapsible expandable">
            <li>
                <div class="collapsible-header waves-effect waves-teal"><i class="material-icons">email</i>Configurar Email</div>
                <div class="collapsible-body center"><span>Lorem ipsum dolor sit amet.</span></div>
            </li>
            <li>
                <div class="collapsible-header waves-effect waves-teal"><i class="material-icons">system_update</i>Instalação do aplicativo</div>
                <div class="collapsible-body center"><span>Lorem ipsum dolor sit amet.</span></div>
            </li>
            <li>
                <div class="collapsible-header waves-effect waves-teal"><i class="material-icons">chrome_reader_mode</i>Manual de uso</div>
                <div class="collapsible-body center"><span>Lorem ipsum dolor sit amet.</span></div>
            </li>
        </ul>
    </ul>

    <main>
        <div class="container center-align">
            <h4>FiscalHelper</h4>
        </div>
        <div class="center container">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi eum explicabo
            ipsum nihil placeat? Amet eaque eum eveniet laborum ratione.
        </div>
    </main>

    <footer>

    </footer>






    <script
        src="https://code.jquery.com/jquery-2.2.4.min.js"
        integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="
        crossorigin="anonymous"></script>
    <script src="{{asset("js/materialize.js")}}"></script>
@endsection
</body>
</html>
