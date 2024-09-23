<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nikkoin Design</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="style.css">
    <link rel="alternate icon" href="images/icone.ico">
    <link rel="icon" href="images/icone.svg">
</head>

<body>
    <?php include 'code/navbar.php'; ?>

    <div class="index_nh">
        <header>
            <div class="fundodiferenciado">
                <div class="contatos">
                    <a href="mailto:nikkoin@hotmail.com" title="Email"><i class="far fa-envelope"></i></a>
                    <a href="https://www.instagram.com/nikkoin_/" title="Instagram"><i class="fab fa-instagram"></i></a>
                    <a href="https://www.linkedin.com/in/nicoleheguy/" title="Linkedin"><i
                            class="fa-brands fa-linkedin-in"></i></a>
                </div>
                <img class="nikkoinlogo" src="images/Marca_NH.svg">
                <p class="escrevendo" id="typewriter">Nikkon</p>
            </div>
        </header>

        <!--<div class="fundodiferenciado-main">
            eve
        </div>-->
        <main>
            <div class="frase">
                <i class="fa-solid fa-quote-left"></i> Tudo o que nos rodeia reflete a visão de um designer.  <i class="fa-solid fa-quote-right"></i>
            </div>
            <div class="citacao"><i class="fa-solid fa-minus"></i> Nicole Heguy <span style=" color: #c2d7dd;">(eu
                    :)</span>
            </div>

            </br>
            <div class="imagem-texto-sobre">
                <div>
                    <p>
                        Me chamo Nicole Heguy. Iniciei minha carreira como Designer Gráfico e, atualmente,
                        também trabalho como Web Designer e Dev Front-end (HTML, CSS e JS). Amo resolver problemas, um
                        dos
                        motivos que me levaram a me interessar por UI/UX Design.
                    </p>
                    <p>
                        Em todos os meus trabalhos, tento pensar em como o usuário receberá as informações. Mesmo
                        acompanhando
                        as tendências do mercado, minha intenção é criar interfaces e artes <b>atemporais</b>, que
                        permaneçam
                        relevantes e funcionais, até que o cliente deseje renovar o design por uma nova visão, e não por
                        obsolescência.
                    </p>
                    <p>
                        Atualmente, como freelancer, realizo diversos tipos de projetos, com foco em desenvolver sites
                        responsivos personalizados em HTML, CSS e JS. Também ofereço serviços de hospedagem e manutenção
                        para os
                        sites que desenvolvo. Estou aberta a outros tipos de trabalho conforme a necessidade dos
                        clientes.
                    </p>
                </div>
                <div class="imagem-container ">
                    <img src="images/eu.jpg">
                    <div class="legenda">Foto não está editada - RD Summit 2023</div>
                </div>

            </div>

            <section class="graficos">
                <div>
                    <h2><i class="fa-solid fa-code"></i> Desenvolvimento</h2>
                    <div class="wrap">
                        <div class="barGraph">
                            <ul class="graph">
                                <span class="graph-barBack">
                                    <li class="graph-bar" data-value="70">
                                        <span class="graph-legend"><i class="fa-brands fa-html5"></i> HTML5</span>
                                    </li>
                                </span>
                                <span class="graph-barBack">
                                    <li class="graph-bar" data-value="80">
                                        <span class="graph-legend"><i class="fa-brands fa-css3"></i> CSS3</span>
                                    </li>
                                </span>
                                <span class="graph-barBack">
                                    <li class="graph-bar" data-value="50">
                                        <span class="graph-legend"><i class="fa-brands fa-js"></i> JavaScript</span>
                                    </li>
                                </span>

                            </ul>
                        </div>
                    </div>
                </div>
                <div>
                    <h2><i class="fa-solid fa-paintbrush"></i> Design</h2>
                    <div class="wrap">
                        <div class="barGraph">
                            <ul class="graph">
                                <span class="graph-barBack">
                                    <li class="graph-bar" data-value="75">
                                        <span class="graph-legend">UI/UX Design</span>
                                    </li>
                                </span>
                                <span class="graph-barBack">
                                    <li class="graph-bar" data-value="85">
                                        <span class="graph-legend">Affinity Designer</span>
                                    </li>
                                </span>
                                <span class="graph-barBack">
                                    <li class="graph-bar" data-value="90">
                                        <span class="graph-legend">Adobe Photoshop</span>
                                    </li>
                                </span>


                            </ul>
                        </div>
                    </div>
                </div>
            </section>

            <section style="margin-top: -50px;">
                <h2>Interesses</h2>
                Jogos
                Arte
                Aprender
                Gatos

            </section>


        </main>
        <section class="depoisdo_main">
    <h2>Conheça um pouco do meu trabalho</h2>
    <div class="work-grid">
        <div class="work-item">
            <a href="#design-grafico">
                <img src="images/dg/coworking/coworkingfam_3.png" alt="Design Gráfico">
                <h3>Design Gráfico</h3>
            </a>
        </div>
        <div class="work-item">
            <a href="#web-design">
                <img src="images/fe/infofamimg.png" alt="Web Design | Front-end">
                <h3>Web Design | Front-end</h3>
            </a>
        </div>
        <div class="work-item">
            <a href="#ilustracao">
                <img src="images\i\i2.png" alt="Ilustração">
                <h3>Ilustração</h3>
            </a>
        </div>
    </div>
</section>

        <?php include 'code/footer.php'; ?>
     
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="script.js"></script>
</body>

</html>