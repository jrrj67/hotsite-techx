@include('templates.app')
<title>Como usar o FiscalWeb</title>
@yield('head')
@yield('header-mobile')
@yield('sidebar')
@yield('main')
<main>
    <div class="col s12 m7 hoverable padding-card">
        <div class="card horizontal">
            <div id="install" class="card-stacked">
                <div class="card-content center">
                    <h4>Como usar o FiscalWeb</h4>
                </div>
                <div class="card-content">
                    <h5>Sincronizar</h5>
                    <p>Sempre que o aplicativo for iniciado, você deve Sincronizar todos os formulários. Para isso, siga
                        os próximo passos: </p>
                </div>
                <div class="divider"></div>
                <div class="card-action">
                    <h6>1. No canto superior direito, toque em menu.</h6>
                    <div class="row"></div>
                    <div class="row center">
                        <img class="responsive-img hoverable z-depth-2" src="{{asset('images/manual/1.png')}}"
                             alt="install">
                    </div>
                </div>
                <div class="card-action">
                    <h6>2. Em seguida, toque em Sincronizar.</h6>
                    <div class="row"></div>
                    <div class="row center">
                        <img class="responsive-img hoverable z-depth-2" src="{{asset('images/manual/2.png')}}"
                             alt="install">
                    </div>
                </div>
                <div class="card-action">
                    <h6>3. Toque em Atualizar Formulários.</h6>
                    <div class="row"></div>
                    <div class="row center">
                        <img class="responsive-img hoverable z-depth-2" src="{{asset('images/manual/3.png')}}"
                             alt="install">
                    </div>
                </div>
                <div class="card-action">
                    <h6>4. Aguarde até a sincronização terminar, pode demorar alguns minutos.</h6>
                    <div class="row"></div>
                    <div class="row center">
                        <img class="responsive-img hoverable z-depth-2" src="{{asset('images/manual/4.png')}}"
                             alt="install">
                    </div>
                </div>
                <div class="card-action">
                    <h6>5. Após a finalizar a sincronização, toque OK.</h6>
                    <div class="row"></div>
                    <div class="row center">
                        <img class="responsive-img hoverable z-depth-2" src="{{asset('images/manual/5.png')}}"
                             alt="install">
                    </div>
                </div>
                <div class="divider"></div>
                <div class="card-content">
                    <h5>Preenchimento de formulário</h5>
                    <p>O gestor responsável pelo formulário irá informar qual deverá ser preenchido. Para começar a
                        preencher um formulário, você deve procurá-lo na tela inicial do aplicativo, como no
                        exemplo:</p>


                    <div class="carousel" data-indicators="true">

                        <a class="carousel-item" href="#"><img src="{{asset('images/manual/6.png')}}"></a>

                        <a class="carousel-item" href="#"><img src="{{asset('images/manual/7.png')}}"></a>

                        <a class="carousel-item" href="#"><img src="{{asset('images/manual/8.png')}}"></a>

                        <a class="carousel-item" href="#"><img src="{{asset('images/manual/9.png')}}"></a>

                    </div>

                </div>


                <div class="card-action">
                    <h6>1. Para preencher os formulários, insira todos os campos obrigatórios, e toque AVANÇAR.</h6>
                    <div class="row"></div>
                    <div class="row center">
                        <img class="responsive-img hoverable z-depth-2" src="{{asset('images/manual/10.png')}}"
                             alt="install">
                    </div>
                </div>
                <div class="card-action">
                    <h6>2. Após finalizar um formulário, você terá a opção de iniciar um novo preenchimento do mesmo
                        formulário.</h6>
                    <div class="row"></div>
                    <div class="row center">
                        <img class="responsive-img hoverable z-depth-2" src="{{asset('images/manual/11.png')}}"
                             alt="install">
                    </div>
                </div>
                <div class="divider"></div>
                <div class="card-content">
                    <h5>Envio de formulário</h5>
                    <p>Para enviar o formulário, toque em menu > Sincronizar > Enviar dados.</p>


                    <div class="carousel" data-indicators="true">

                        <a class="carousel-item" href="#"><img src="{{asset('images/manual/12.png')}}"></a>

                        <a class="carousel-item" href="#"><img src="{{asset('images/manual/13.png')}}"></a>

                        <a class="carousel-item" href="#"><img src="{{asset('images/manual/14.png')}}"></a>

                    </div>


                </div>

                <div class="divider"></div>
                <div class="card-content">
                    <h5>Histórico de respostas</h5>
                    <p>Para acessar todos os formulários que você respondeu, toque em menu > Respostas.</p>
                    <div class="carousel" data-indicators="true">

                        <a class="carousel-item" href="#"><img src="{{asset('images/manual/15.png')}}"></a>

                        <a class="carousel-item" href="#"><img src="{{asset('images/manual/16.png')}}"></a>

                        <a class="carousel-item" href="#"><img src="{{asset('images/manual/17.png')}}"></a>

                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@yield('footer')
