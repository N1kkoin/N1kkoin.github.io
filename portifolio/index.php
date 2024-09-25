<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nikkoin Portifólio</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="alternate icon" href="../images/icone.ico"> <!-- Ajuste o caminho -->
    <link rel="icon" href="../images/icone.svg"> <!-- Ajuste o caminho -->
</head>


<body class="body_portifolio">
    <?php include('../code/navbar.php'); ?>
    <!-- Use ../ para voltar um nível -->

    <div>
        <header class="header_portifolio">
            <h1>Portifólio</h1>
            <p>Qual é o portifólio que deseja ver?</p>
            <div class="button-container">
                <a href="#design-grafico" class="button">Design Gráfico</a>
                <a href="#web-design" class="button">Web Design | Front-end</a>
                <a href="#ilustracoes" class="button">Ilustrações</a>
            </div>
        </header>

        <main class="main_portifolio">
            <div id="design-grafico" class="section">
                <h2 data-link="/portifolio#design-grafico"><i class="fa-solid fa-link"></i> Design Gráfico</h2>


            </div>
            <div class="portfolio-container">
                <!-- Imagem 1 -->
                <div class="portfolio-item" data-overlay="overlay1">
                    <img src="/images/dg/coworking/coworkingfam.png" alt="Imagem 1" class="portfolio-image">
                </div>
                <!-- Imagem 2 -->
                <div class="portfolio-item" data-overlay="overlay2">
                    <img src="/images/dg/dg3.png" alt="Imagem 2" class="portfolio-image">
                </div>
                <!-- Imagem 3 -->
                <div class="portfolio-item" data-overlay="overlay3">
                    <img src="/images/dg/dg5.png" alt="Imagem 3" class="portfolio-image">
                </div>
                <!-- Imagem 4 -->
                <div class="portfolio-item" data-overlay="overlay4">
                    <img src="/images/dg/dg4.png" alt="Imagem 3" class="portfolio-image">
                </div>
            </div>

            <!-- Overlays -->
            <div id="overlay1" class="overlay">
                <div class="overlay-content">
                    <h2>Título Imagem 1</h2>
                    <p>Texto descritivo para a Imagem 1.</p>
                    <button class="close-overlay">Fechar</button>
                </div>
            </div>

            <div id="overlay2" class="overlay">
                <div class="overlay-content">
                    <h2>Título Imagem 2</h2>
                    <p>Texto descritivo para a Imagem 2.</p>
                    <button class="close-overlay">Fechar</button>
                </div>
            </div>

            <div id="overlay3" class="overlay">
                <div class="overlay-content">
                    <h2>Título Imagem 3</h2>
                    <p>Texto descritivo para a Imagem 3.</p>
                    <button class="close-overlay">Fechar</button>
                </div>
            </div>

            <div id="overlay4" class="overlay">
                <div class="overlay-content">
                    <h2>Título Imagem 3</h2>
                    <p>Texto descritivo para a Imagem 3.</p>
                    <button class="close-overlay">Fechar</button>
                </div>
            </div>

            <div id="front-end" class="section">
                <h2 data-link="/portifolio#web-design"><i class="fa-solid fa-link"></i> Web Design | Front-end</h2>
            </div>

            <div class="portfolio-container">
                <!-- Imagem 1 -->
                <div class="portfolio-item" data-overlay="overlay1">
                    <img src="/images/fe/infofamimg.png" alt="Imagem 1" class="portfolio-image">
                </div>
                <!-- Imagem 2 -->
                <div class="portfolio-item" data-overlay="overlay2">
                    <img src="/images/fe/seja_veloz/sejavelozimg.png" alt="Imagem 2" class="portfolio-image">
                </div>
                <!-- Imagem 3 -->
                <div class="portfolio-item" data-overlay="overlay3">
                    <img src="/images/fe/hospitalfam.jpg" alt="Imagem 3" class="portfolio-image">
                </div>
                <!-- Imagem 4 -->
                <div class="portfolio-item" data-overlay="overlay3">
                    <img src="/images/fe/templeteemail.png" alt="Imagem 3" class="portfolio-image">
                </div>
            </div>

            <!-- Overlays -->
            <div id="overlay1" class="overlay">
                <div class="overlay-content">
                    <h2>Título Imagem 1</h2>
                    <p>Texto descritivo para a Imagem 1.</p>
                    <button class="close-overlay">Fechar</button>
                </div>
            </div>

            <div id="overlay2" class="overlay">
                <div class="overlay-content">
                    <h2>Título Imagem 2</h2>
                    <p>Texto descritivo para a Imagem 2.</p>
                    <button class="close-overlay">Fechar</button>
                </div>
            </div>

            <div id="overlay3" class="overlay">
                <div class="overlay-content">
                    <h2>Título Imagem 3</h2>
                    <p>Texto descritivo para a Imagem 3.</p>
                    <button class="close-overlay">Fechar</button>
                </div>
            </div>

            <div id="ilustracoes" class="section">
                <h2 data-link="/portifolio#ilustracoes"><i class="fa-solid fa-link"></i> Ilustrações</h2>
            </div>

            <div class="portfolio-container">
                <!-- Imagem 1 -->
                <div class="portfolio-item" data-overlay="overlay1">
                    <img src="/images/i/i3.png" alt="Imagem 1" class="portfolio-image">
                </div>
                <!-- Imagem 2 -->
                <div class="portfolio-item" data-overlay="overlay2">
                    <img src="/images/i/i2.png" alt="Imagem 2" class="portfolio-image">
                </div>
                <!-- Imagem 3 -->
                <div class="portfolio-item" data-overlay="overlay3">
                    <img src="/images/i/i5.png" alt="Imagem 3" class="portfolio-image">
                </div>
                <!-- Imagem 4 -->
                <div class="portfolio-item" data-overlay="overlay4">
                    <img src="/images/i/i4.png" alt="Imagem 3" class="portfolio-image">
                </div>
            </div>

            <!-- Overlays -->
            <div id="overlay1" class="overlay">
                <div class="overlay-content">
                    <h2>Título Imagem 1</h2>
                    <p>Texto descritivo para a Imagem 1.</p>
                    <button class="close-overlay">Fechar</button>
                </div>
            </div>

            <div id="overlay2" class="overlay">
                <div class="overlay-content">
                    <h2>Título Imagem 2</h2>
                    <p>Texto descritivo para a Imagem 2.</p>
                    <button class="close-overlay">Fechar</button>
                </div>
            </div>

            <div id="overlay3" class="overlay">
                <div class="overlay-content">
                    <h2>Título Imagem 3</h2>
                    <p>Texto descritivo para a Imagem 3.</p>
                    <button class="close-overlay">Fechar</button>
                </div>
            </div>

        </main>

        <?php include('../code/footer.php'); ?>
        <!-- Use ../ para voltar um nível -->

    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="../code/script.js"></script>
    <script>
      // links quando clicar nos titulos /////////////////////////////////////////////////////////////////////

        // Selecionar todos os h2
        document.querySelectorAll('h2').forEach(h2 => {
            h2.addEventListener('click', function () {
                // Obter o link do atributo data-link
                const link = window.location.origin + this.getAttribute('data-link');

                // Criar um elemento temporário para copiar o link
                const tempInput = document.createElement('input');
                tempInput.value = link;
                document.body.appendChild(tempInput);
                tempInput.select();
                document.execCommand('copy');
                document.body.removeChild(tempInput);

                // Selecionar o ícone dentro do h2
                const icon = this.querySelector('i');
                const originalClass = icon.className; // Salvar a classe original do ícone

                // Mudar para o ícone de confirmação (usando um ícone diferente, por exemplo, um ícone de check)
                icon.className = 'fa-solid fa-check';

                // Após 1 segundo (1000 ms), voltar ao ícone original
                setTimeout(() => {
                    icon.className = originalClass;
                }, 1000); // Tempo em milissegundos (1 segundo)
            });
        });

        // portifólio imagens e overlay /////////////////////////////////////////////////////////////////////////////////////////////

        // Selecionar todos os itens do portfólio
        document.querySelectorAll('.portfolio-item').forEach(item => {
            item.addEventListener('click', function () {
                // Obter o ID do overlay a ser exibido
                const overlayId = this.getAttribute('data-overlay');
                const overlay = document.getElementById(overlayId);

                // Exibir o overlay
                overlay.classList.add('show');
            });
        });

        // Selecionar todos os botões de fechar
        document.querySelectorAll('.close-overlay').forEach(button => {
            button.addEventListener('click', function () {
                // Fechar o overlay
                this.closest('.overlay').classList.remove('show');
            });
        });

    </script>
</body>


</html>