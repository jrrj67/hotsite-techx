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
                    <h4>Como instalar o FiscalWeb</h4>
                </div>
                <div class="divider"></div>
                <div class="card-action">
                    <h6>
                        1. Em seu email da TechX, abra o convite para acessar o aplicativo.
                        E toque em "Download the latest build".
                    </h6>
                    <div class="row"></div>
                    <div class="row center">
                        <img class="responsive-img hoverable z-depth-2" src="{{asset('images/install/1.png')}}"
                             alt="install">
                    </div>
                </div>
                <div class="card-action">
                    <h6>2. Em seguida, toque em "Sign in with Google". </h6>
                    <div class="row"></div>
                    <div class="row center">
                        <img class="responsive-img hoverable z-depth-2 col l4 push-l4" src="{{asset('images/install/2.jpeg')}}"
                             alt="install">
                    </div>
                </div>
                <div class="card-action">
                    <h6>3. Entre com sua conta do Google, digite seu email e toque em "Próxima".</h6>
                    <div class="row"></div>
                    <div class="row center">
                        <img class="responsive-img hoverable z-depth-2 col l4 push-l4"
                             src="{{asset('images/install/3.jpeg')}}" alt="install">
                    </div>
                </div>
                <div class="card-action">
                    <h6>4. Digite sua senha do Google e toque em "Próxima".</h6>
                    <div class="row"></div>
                    <div class="row center">
                        <img class="responsive-img hoverable z-depth-2 col l4 push-l4"
                             src="{{asset('images/install/4.jpeg')}}" alt="install">
                    </div>
                </div>
                <div class="card-action">
                    <h6>5. Toque em "Download" para baixar o aplicativo do FiscalWeb. </h6>
                    <div class="row"></div>
                    <div class="row center">
                        <img class="responsive-img hoverable z-depth-2 col l4 push-l4"
                             src="{{asset('images/install/5.jpeg')}}" alt="install">
                    </div>
                </div>
                <div class="card-action">
                    <h6>6. Uma vez baixado, toque em "Abrir arquivo" para iniciar o aplicativo.</h6>
                    <div class="row"></div>
                    <div class="row center">
                        <img class="responsive-img hoverable z-depth-2 col l4 push-l4"
                             src="{{asset('images/install/6.jpeg')}}" alt="install">
                    </div>
                </div>
                <div class="card-action">
                    <h6>7. Toque em "Instalar".</h6>
                    <div class="row"></div>
                    <div class="row center">
                        <img class="responsive-img hoverable z-depth-2 col l4 push-l4"
                             src="{{asset('images/install/7.jpeg')}}" alt="install">
                    </div>
                </div>
                <div class="card-action">
                    <h6>8. Aguarde até a instalação ser concluída.</h6>
                    <div class="row"></div>
                    <div class="row center">
                        <img class="responsive-img hoverable z-depth-2 col l4 push-l4"
                             src="{{asset('images/install/8.jpeg')}}" alt="install">
                    </div>
                </div>
                <div class="card-action">
                    <h6>9. Para começar a usar o aplicativo do FiscalWeb, toque em "Abrir".</h6>
                    <div class="row"></div>
                    <div class="row center">
                        <img class="responsive-img hoverable z-depth-2 col l4 push-l4"
                             src="{{asset('images/install/9.jpeg')}}" alt="install">
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@yield('footer')
