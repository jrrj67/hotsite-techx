@include('templates.app')
@yield('head')
@yield('header-mobile')
@yield('sidebar')
@yield('main')
<main>
    <div class="col s12 m7 hoverable padding-card">
        <div class="card horizontal">
            <div id="outlook" class="card-stacked">
                <div class="card-content center">
                    <h4>Configurando email no Outlook</h4>
                </div>
                <div class="divider"></div>
                <div class="card-action">
                    <h6>1. Abra o Outlook e selecione Arquivo > Adicionar Conta.</h6>
                    <div class="row"></div>
                    <div class="row center">
                        <img class="responsive-img hoverable z-depth-2" src="{{asset('images/outlook/1.png')}}"
                             alt="outlook">
                    </div>
                </div>
                <div class="card-action">
                    <h6>2. Insira seu endereço de email e selecione Conectar.</h6>
                    <div class="row"></div>
                    <div class="row center">
                        <img class="responsive-img hoverable z-depth-2" src="{{asset('images/outlook/2.png')}}"
                             alt="outlook">
                    </div>
                </div>
                <div class="card-action">
                    <h6>2. Escolha a opção POP.</h6>
                    <div class="row"></div>
                    <div class="row center">
                        <img class="responsive-img hoverable z-depth-2" src="{{asset('images/outlook/escolher.png')}}"
                             alt="outlook">
                    </div>
                </div>
                <div class="card-action">
                    <h6>2.1 Insira as configurações abaixo e selecione Avançar.</h6>
                    <div class="row"></div>
                    <div class="row center">
                        <img class="responsive-img hoverable z-depth-2" src="{{asset('images/outlook/config.png')}}"
                             alt="outlook">
                    </div>
                </div>
                <div class="card-action">
                    <h6>3. Insira sua senha e selecione Conectar.</h6>
                    <div class="row"></div>
                    <div class="row center">
                        <img class="responsive-img hoverable z-depth-2" src="{{asset('images/outlook/insira.png')}}"
                             alt="outlook">
                    </div>
                </div>
                <div class="divider"></div>
                <div id="gmail" class="card-content center scrollspy">
                    <h4>Configurando email no Gmail</h4>
                </div>
                <div class="divider"></div>
                <div class="card-action">
                    <h6>1. No smartphone Android, abra o app Gmail. No canto superior direito, toque na sua foto do
                        perfil e em seguida toque em Adicionar outra conta. </h6>
                    <div class="row"></div>
                    <div class="row center">
                        <img class="responsive-img hoverable z-depth-2" src="{{asset('images/gmail/1.png')}}"
                             alt="gmail">
                    </div>
                </div>
                <div class="card-action">
                    <h6>2. Toque a opção Outra.</h6>
                    <div class="row"></div>
                    <div class="row center">
                        <img class="responsive-img hoverable z-depth-2" src="{{asset('images/gmail/2.png')}}"
                             alt="gmail">
                    </div>
                </div>
                <div class="card-action">
                    <h6>3. Insira seu email e toque Próxima.</h6>
                    <div class="row"></div>
                    <div class="row center">
                        <img class="responsive-img hoverable z-depth-2" src="{{asset('images/gmail/3.png')}}"
                             alt="gmail">
                    </div>
                </div>
                <div class="card-action">
                    <h6>4. Selecione a opção Pessoal (IMAP) e em seguida toque Próxima.</h6>
                    <div class="row"></div>
                    <div class="row center">
                        <img class="responsive-img hoverable z-depth-2" src="{{asset('images/gmail/4.png')}}"
                             alt="gmail">
                    </div>
                </div>
                <div class="card-action">
                    <h6>5. Insira sua senha e toque Próxima.</h6>
                    <div class="row"></div>
                    <div class="row center">
                        <img class="responsive-img hoverable z-depth-2" src="{{asset('images/gmail/5.png')}}"
                             alt="gmail">
                    </div>
                </div>
                <div class="card-action">
                    <h6>6. Apague todo o conteúdo do campo Servidor, e insira: imap.secureserver.net depois toque em
                        Próxima.</h6>
                    <div class="row"></div>
                    <div class="row center">
                        <img class="responsive-img hoverable z-depth-2" src="{{asset('images/gmail/6.png')}}"
                             alt="gmail">
                    </div>
                </div>
                <div class="card-action">
                    <h6>7. Apague todo o conteúdo do campo Servidor SMTP, e insira: smtpout.secureserver.net depois
                        toque em Próxima.</h6>
                    <div class="row"></div>
                    <div class="row center">
                        <img class="responsive-img hoverable z-depth-2" src="{{asset('images/gmail/7.png')}}"
                             alt="gmail">
                    </div>
                </div>
                <div class="card-action">
                    <h6>8. Insira seu nome no campo Seu nome, toque Próxima.</h6>
                    <div class="row"></div>
                    <div class="row center">
                        <img class="responsive-img hoverable z-depth-2" src="{{asset('images/gmail/8.png')}}"
                             alt="gmail">
                    </div>
                </div>
                <div class="divider"></div>
                <div id="samsung" class="card-content center">
                    <h4>Configurando email no Samsung Email</h4>
                </div>
                <div class="divider"></div>
                <div class="card-action">
                    <h6>1. Abra o aplicativo Samsung Email e toque em Adicionar Conta se for a primeira vez.

                        Ou vá até Configurações no aplicativo > Adicionar conta.

                        E selecione a opção de email Outro. </h6>
                    <div class="row"></div>
                    <div class="row center">
                        <img class="responsive-img hoverable z-depth-2" src="{{asset('images/samsung/1.png')}}"
                             alt="samsung">
                    </div>
                </div>
                <div class="card-action">
                    <h6>2. Insira seu endereço de email e senha da TechX. Toque em Entrar. Se já tiver outro email
                        adicionado, você pode escolher a opção Definir como conta padrão.</h6>
                    <div class="row"></div>
                    <div class="row center">
                        <img class="responsive-img hoverable z-depth-2" src="{{asset('images/samsung/2.png')}}"
                             alt="samsung">
                    </div>
                </div>
                <div class="divider"></div>
                <div id="recover" class="card-content center scrollspy">
                    <h4>Recuperação de senha</h4>
                </div>
                <p class="card-action">Verifique se seu email e senha foram digitados corretamente, caso tenha esquecido sua senha, você
                    pode recuperá-la acessando: <a
                        href="https://sso.godaddy.com/v1/account/reset?app=ox&realm=pass" target="_blank">Recuperar senha</a></p>
                <div class="divider"></div>
                <div class="card-action">
                    <h6>1. Insira seu email da TechX, e selecione Continue.</h6>
                    <div class="row"></div>
                    <div class="row center">
                        <img class="responsive-img hoverable z-depth-2" src="{{asset('images/recover/1.png')}}"
                             alt="recover">
                    </div>
                </div>
                <div class="card-action">
                    <h6>2. A seguir, você verá três opções para redefinir sua senha:</h6>
                    <blockquote>
                        Enviar um link para o seu email da TechX.
                    </blockquote>
                    <blockquote>
                        Enviar um link para seu email secundário, se houver.
                    </blockquote>
                    <blockquote>
                        Enviar um link para o administrador da sua conta. (Setor de RH da TechX)
                    </blockquote>
                    <p>Escolha uma opção e depois selecione Send Email.</p>
                    <div class="row"></div>
                    <div class="row center">
                        <img class="responsive-img hoverable z-depth-2" src="{{asset('images/recover/2.png')}}"
                             alt="recover">
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@yield('footer')
