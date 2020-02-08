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
                    <h3 class="center">Seja bem-vindo ao FiscalHelper</h3>
                </div>
                <div class="card-action">
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Voluptates, accusamus magnam. Ab ea architecto minus exercitationem facilis nisi quisquam illo officiis labore molestias odio ipsa, asperiores unde hic esse modi.</p>
                </div>
              </div>
            </div>
          </div>
    </div>
</main>
@yield('footer')



