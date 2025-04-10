<!DOCTYPE html>
<html lang="pt-br">

<head>
  <title>Conecte</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/main.css">
</head>

<body>

  <!-- Primeira seção -->
  <section class="section" id="section-home">
    <nav id="nav" class="d-flex justify-content-between align-items-center px-4 py-3 shadow">
      <!-- logo - esquerda -->
      <a href="#section-home">
        <img src="img/logo.png" alt="Logo" class="logo">
      </a>
      <!-- links - direita -->
      <div id="links" class="d-flex gap-3"> <!-- display flex, gap é espaço entre os itens -->
        <a href="#section-home" class="text-decoration-none text-dark fw-bold">Home</a> <!-- texto preto, em negrito -->
        <a href="#section-quemsomos" class="text-decoration-none text-dark fw-bold">Quem Somos</a>
        <a href="#section-equipe" class="text-decoration-none text-dark fw-bold">Equipe</a>
        <a href="#section-contato" class="text-decoration-none text-dark fw-bold">Contato</a>
      </div>
    </nav>

    <div id="container-home" class="text-center text-white">
      <h1 class="fs-1">Conectando sua empresa ao futuro.</h1> <!-- font-size 1 -->
      </br>
      <p>Sente que os clientes não encontram a sua empresa? Sua identidade visual não transmite sua essência? Conecte-se com a Conecte e te conectamos com o seu cliente!</p>
      </br>
      <button class="next-section text-white" onclick="window.location.href='#section-quemsomos';">Saiba Mais</button>
    </div>
  </section>

  <!-- Segunda seção -->
  <section class="section" id="section-quemsomos">
    <div id="container-quemsomos" class="text-center text-dark">
      <p class="m-0">A Conecte nasceu com o objetivo de transformar a comunicação das pequenas empresas, oferecendo soluções inovadoras e acessíveis que simplificam a conexão com o público e promovem uma gestão eficiente. Nosso propósito é ajudar empresários a ganharem autonomia, se identificarem com suas marcas e conquistarem novos clientes, superando desafios de comunicação e atingindo novos patamares no mercado. Valorizamos a acessibilidade e a humanização, garantindo que negócios de todos os portes tenham a chance de crescer e prosperar com o nosso apoio dedicado.</p> <!-- m é de margim -->
      <p id="" class="m-1 paragrafo-saiba-mais" >A evolução tecnológica tem sido rápida e constante em todos os segmentos, especialmente no ambiente empresarial. No entanto, quando falamos sobre a comunicação para pequenas empresas, sabemos que ainda há um longo caminho a ser percorrido. Muitas vezes, elas são negligenciadas, mal representadas ou simplesmente não conseguem se conectar com seus clientes de forma eficaz. Foi com o objetivo de transformar essa realidade que a Conect Pet nasceu. </p>
      <p id="" class="m-1 paragrafo-saiba-mais" >Trabalhamos para que você, empresário, ganhe autonomia, se identifique com sua marca e seja capaz de conquistar novos clientes, gerenciando seu próprio negócio com a facilidade que sempre sonhou. Acreditamos que, com o nosso apoio, sua empresa não somente superará as dificuldades de comunicação, mas também atingirá novos patamares no seu mercado. Com valores que prezam pela acessibilidade e humanização, buscamos garantir que todas as empresas, independentemente de seu porte, tenham a oportunidade de crescer e prosperar. </p>
      <p id="" class="m-1 paragrafo-saiba-mais" >Sabemos que enfrentar desafios na comunicação com o público pode ser complicado, mas a partir de agora, isso deixa de ser um problema. Estamos aqui para transformar a maneira como sua pequena empresa se comunica e gerencia seus negócios, com dedicação e paixão pelo que fazemos. Venha para a Conect Pet e dê o próximo passo rumo ao crescimento do seu negócio! </p>
      <br>
      <button class="next-section next-section-equipe text-white text-center m-1" id="saiba-mais">Saiba Mais</button>


      <!-- imagens dos sites que fizemos -->
      <h1 class="text-black fs-4 m-5">Nossos Projetos:</h1>
      <div class="img-sites">
        <a href="https://tynaaaa.github.io/Documentando_Livros/"><img src="img/site1.png" class="img-quemsomos" alt="Imagem 1"></a>
        <a href="https://tynaaaa.github.io/Tres_Flores/"><img src="img/site2.png" class="img-quemsomos" alt="Imagem 2"></a>
      </div>
    </div>
  </section>

  <!-- Terceira seção -->
  <section class="section" id="section-equipe">
    <div class="d-flex p-5" id="container-equipe"> <!-- display flex, padding 5 -->
      <!-- retângulo de texto e setinha -->
      <div class="col-md-6 d-flex flex-column justify-content-center"> <!-- coluna de tamanho médio, largura 6 (metade da largura da tela) -->
        <div id="caixa-texto" class="caixa-texto text-center p-4">
          <img src="img/equipe/julia.jpg" class="texto-img">
          <p class="fw-bold" id="nome">Julia Dias</p>
          <p class="fw-bold" id="cargo">Front-end</p>
          <p id="conteudo-texto">Transforma designs em páginas reais, cuida para que funcione em qualquer dispositivo e garante que a navegação seja simples e agradável. Utiliza as linguagens HTML, CSS e JavaScript e trabalha junto com o back-end para integrar funções ao site ou app. Em resumo, torna a experiência do usuário funcional e atrativa.</p> <!-- texto do retangulo -->
        </div>

        <!-- setinha para mudar o texto -->
        <div class="arrow-container text-center mt-2"> <!-- margin top 3 -->
          <button id="botao-mudar-texto"> <!-- botao q tem a setinha pra mudar o texto -->
            <i class="bi bi-arrow-right"></i> <!-- i de icone, "bi" é pro navegador caçar na biblioteca do bootstrap icons, por fim exibe seta apontando pra direita -->
          </button>
        </div>
      </div>

      <!-- Imagem -->
      <div class="equipe-img col-md-6"> <!-- na metade da tela -->
        <img src="img/equipe-img.jpg" alt="Imagem da Seção Equipe">
      </div>
    </div>
  </section>

  <!-- Quarta seção -->
  <section class="section" id="section-contato">
    <div id="container-contato">
      <div class="container p-5">
        <div class="text-white d-flex flex-column align-items-center">
          <h1 class="fw-bold">Contate-nos!</h1>
          <p>Ficou com alguma dúvida?</p>
          <p>Deseja fazer um orçamento?</p>
          <p>Nossa equipe está a disposição. Fale conosco:</p>
        </div>
      </div>
      <div id="formulario" class="container py-3">
        <form method="POST" id="FormEmail" action="">
          <div id="formulario-inputs" class="row">
            <div class="container d-flex flex-column col-sm-6">
              <input placeholder="Assunto:" type="text" name="assunto">
              <input placeholder="Email:" type="email" name="email" id="">
              <!-- <select name="destinatario" id="destinatario">
                <option value="" disabled selected>Enviar mensagem para...</option>
                <option value="laiss.hoga@aluno.ifsp.edu.br">Teste1</option>
                <option value="teste2@aluno.ifsp.edu.br">Teste2</option>
                <option value="teste3@aluno.ifsp.edu.br">Teste3</option>
                <option value="teste4@aluno.ifsp.edu.br">Teste4</option>
                <option value="teste5@aluno.ifsp.edu.br">Teste5</option>
              </select> -->
                <input type="text" id="cep" name="cep" placeholder="CEP">
                <input type="text" id="endereco" name="endereco" placeholder="Endereço">
                <!-- <input type="text" id="bairro" name="bairro" placeholder="Bairro"> -->
                <input type="text" id="cidade" name="cidade" placeholder="Cidade">
                <!-- <input type="text" id="uf" name="uf" placeholder="UF"> -->
            </div>
            <div class="col-sm-6">
              <textarea name="mensagem" id="mensagem" rows="5" placeholder="Mensagem:" style="width: 100%;"></textarea>
            </div>
          </div>
          <div id="formulario-submit" class="m-4">
            <button class="text-white fw-bold" type="button">Enviar</button> <!--botão submit desativado-->
          </div>
        </form>
      </div>

      <!-- <div id="contato-wrap" class="container p-3">
        <div id="link-quemsomos" class="contatos-link">
          <a href="#section-quemsomos">
            <i class="bi bi-boxes"></i>
          </a>  
        </div>
        <div id="link-equipe" class="contatos-link">
              <a href="#section-equipe">
                <i class="bi bi-people-fill"></i>
              </a>    
        </div>
      </div> -->

    </div>
  </section>

  <!-- Seção Rodapé -->
  <!-- <section id="section-rodape">
    <div class="container-fluid">
      <div id="rodape-logo">
        <img src="img/IconeLogo.png" alt="">
      </div>
      <div id="contato-wrap" class="container p-3">
        <div id="link-instaram" class="rodape-link">
          <a href="">
            <i class="bi bi-instagram"></i>
          </a>  
        </div>
        <div id="link-wpp" class="rodape-link">
              <a href="">
                <i class="bi bi-whatsapp"></i>
              </a>    
        </div>
        <div id="link-github" class="rodape-link">
          <a href="">
            <i class="bi bi-github"></i>
          </a>    
    </div>
      </div>
    </div>
  </section> -->

  <script src="js/javascript.js">
   
  </script>
</body>

</html>
