@include('templates.app')
@yield('head')
@yield('header-mobile')
@yield('sidebar')
@yield('main')
<main>
    <div class="col s12 m7 hoverable padding-card">
        <div class="card horizontal">
            <div id="install" class="card-stacked">
                <div class="card-content center">
                    <h4>Como criar atalho do GIFO na tela incial</h4>
                </div>
                <div class="card-content">
                    <h5>Google Chrome</h5>
                    <p>Neste passo a passo iremos utilizar o Google Chrome em um smartphone Android.</p>
                </div>
                <div class="divider"></div>
                <div class="card-action">
                    <h6>1. Abra o Google Chrome, acesse o site do GIFO e toque no ícone de
                        três pontos no canto superior da tela.
                    </h6>
                    <div class="row"></div>
                    <div class="row center">
                        <img class="responsive-img hoverable z-depth-2 col l4 push-l4"
                             src="{{asset('images/gifo/shortcut/1.png')}}"
                             alt="install">
                    </div>
                </div>
                <div class="card-action">
                    <h6>2. Em seguida, escolha a opção “Adicionar à tela inicial”.</h6>
                    <div class="row"></div>
                    <div class="row center">
                        <img class="responsive-img hoverable z-depth-2 col l4 push-l4"
                             src="{{asset('images/gifo/shortcut/2.png')}}"
                             alt="install">
                    </div>
                </div>
                <div class="card-action">
                    <h6>3. E por fim, toque em "Adicionar".</h6>
                    <div class="row"></div>
                    <div class="row center">
                        <img class="responsive-img hoverable z-depth-2 col l4 push-l4"
                             src="{{asset('images/gifo/shortcut/3.png')}}"
                             alt="install">
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@yield('footer')
