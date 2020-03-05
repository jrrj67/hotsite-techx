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
                    <h6>1. Em seu email da TechX, abra o convite para acessar o aplicativo. E toque em Let Me In.</h6>
                    <div class="row"></div>
                    <div class="row center">
                        <img class="responsive-img hoverable z-depth-2" src="{{asset('images/install/1.png')}}"
                             alt="install">
                    </div>
                </div>
                <div class="card-action">
                    <h6>2. Em seguida, toque em Download para baixar o aplicativo Beta by Crashlytics. </h6>
                    <div class="row"></div>
                    <div class="row center">
                        <img class="responsive-img hoverable z-depth-2" src="{{asset('images/install/2.png')}}"
                             alt="install">
                    </div>
                </div>
                <div class="card-action">
                    <h6>3. Acesse em seu smartphone Android, sua pasta Downloads, e toque em Beta by Crashlytics.</h6>
                    <div class="row"></div>
                    <div class="row center">
                        <img class="responsive-img hoverable z-depth-2" src="{{asset('images/install/3.png')}}"
                             alt="install">
                    </div>
                </div>
                <div class="card-action">
                    <h6>4. Toque em Instalar.</h6>
                    <div class="row"></div>
                    <div class="row center">
                        <img class="responsive-img hoverable z-depth-2" src="{{asset('images/install/4.png')}}"
                             alt="install">
                    </div>
                </div>
                <div class="card-action">
                    <h6>5. Após a instalação, toque em Abrir. </h6>
                    <div class="row"></div>
                    <div class="row center">
                        <img class="responsive-img hoverable z-depth-2" src="{{asset('images/install/5.png')}}"
                             alt="install">
                    </div>
                </div>
                <div class="card-action">
                    <h6>6. Uma vez aberto, toque em OK para atualizar o aplicativo.</h6>
                    <div class="row"></div>
                    <div class="row center">
                        <img class="responsive-img hoverable z-depth-2" src="{{asset('images/install/6.png')}}"
                             alt="install">
                    </div>
                </div>
                <div class="card-action">
                    <h6>7. Se o seu smartphone Android não tiver permissões para atualizar, toque em CONFIGURAÇÕES.</h6>
                    <div class="row"></div>
                    <div class="row center">
                        <img class="responsive-img hoverable z-depth-2" src="{{asset('images/install/7.png')}}"
                             alt="install">
                    </div>
                </div>
                <div class="card-action">
                    <h6>8. Toque em Permitir desta fonte, e depois retorne para o aplicativo.</h6>
                    <div class="row"></div>
                    <div class="row center">
                        <img class="responsive-img hoverable z-depth-2" src="{{asset('images/install/8.png')}}"
                             alt="install">
                    </div>
                </div>
                <div class="card-action">
                    <h6>9. Toque em Instalar.</h6>
                    <div class="row"></div>
                    <div class="row center">
                        <img class="responsive-img hoverable z-depth-2" src="{{asset('images/install/9.png')}}"
                             alt="install">
                    </div>
                </div>
                <div class="card-action">
                    <h6>10. Após o término da instalação, toque em Abrir.</h6>
                    <div class="row"></div>
                    <div class="row center">
                        <img class="responsive-img hoverable z-depth-2" src="{{asset('images/install/10.png')}}"
                             alt="install">
                    </div>
                </div>
                <div class="card-action">
                    <h6>11. Insira seu nome e toque em NEXT.</h6>
                    <div class="row"></div>
                    <div class="row center">
                        <img class="responsive-img hoverable z-depth-2" src="{{asset('images/install/11.png')}}"
                             alt="install">
                    </div>
                </div>
                <div class="card-action">
                    <h6>12. Para começar usar o aplicativo, toque em LAUNCH.</h6>
                    <div class="row"></div>
                    <div class="row center">
                        <img class="responsive-img hoverable z-depth-2" src="{{asset('images/install/12.png')}}"
                             alt="install">
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@yield('footer')
