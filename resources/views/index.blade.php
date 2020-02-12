@include('templates.app')

@yield('head')

@yield('header-mobile')

@yield('sidebar')

@yield('main')
<main>
    <div class="container hoverable">
        <div class="col s12 m7 z-depth-3">
            <div class="card horizontal">
                <div class="card-stacked">
                    <div class="card-content">
                        <h3 class="center">Seja bem-vindo ao Ajuda TechX</h3>
                    </div>
                    <div class="card-action">
                        <blockquote>
                            <p>O Ajuda TechX é um guia básico de como configurar e utilizar o aplicativo FiscalWeb em seu
                                smartphone Android.</p>
                        </blockquote>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@yield('footer')



