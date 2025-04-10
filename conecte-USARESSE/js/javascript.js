// animaçãozinha de rolagem
let scrollTimeout; // armazena o temporizador (timeout) para controlar a rolagem
const nav = document.getElementById('nav'); // seleciona aquela parte de navegação

// detecta a rolagem
window.addEventListener('scroll', function() {
    nav.style.position = 'fixed';  // faz o menu de navegação ficar fixo no topo ao rolar a página, se movendo junto

    // quando a página está rolando, reduz a opacidade do menu para 0.7
    nav.style.opacity = '0.7';

    // limpa qualquer temporizador anterior em execução para evitar conflitos
    window.clearTimeout(scrollTimeout );

    //50ms após o término da rolagem, muda a opacidade para 1:
    scrollTimeout  = setTimeout(function() { //settimeout é uma função q executa dps de um tempo específico
        nav.style.opacity = '1'; // muda pra 1 a opacidade
    }, 50); // tempo de espera de 50 milissegundos após o término da rolagem
});

// Seção EQUIPE
// os dados que irão alternar: nome, cargo e conteúdo de texto
const equipe = [
    {
        imagem: "img/equipe/julia.jpg",
        nome: "Julia Dias",
        cargo: "Front-end",
        texto: "Transforma designs em páginas reais, cuida para que funcione em qualquer dispositivo e garante que a navegação seja simples e agradável. Utiliza as linguagens HTML, CSS e JavaScript e trabalha junto com o back-end para integrar funções ao site ou app. Em resumo, torna a experiência do usuário funcional e atrativa."
    },
    {
        imagem: "img/equipe/amanda.jpg",
        nome: "Amanda",
        cargo: "Back-end",
        texto: "Responsável pelo desenvolvimento do servidor, banco de dados e lógica do lado do servidor. Ele trabalha para garantir que as funcionalidades no site funcionem corretamente e que todos os dados sejam processados e armazenados de forma segura."
    },
    {
        imagem: "img/equipe/laiss.jpg",
        nome: "Laiss",
        cargo: "Gerente e Back-end",
        texto: "Laiss é responsável pelo desenvolvimento do servidor e banco de dados, garantindo o funcionamento correto das funcionalidades do site e a segurança dos dados. Além disso, atua como gerente da equipe, organizando tarefas, designando funções e coordenando o trabalho do time."
    },
    {
        imagem: "img/equipe/yasmin.jpg",
        nome: "Yasmin Novaes",
        cargo: "Front-end",
        texto: "Transforma ideias em páginas responsivas e funcionais, garantindo uma navegação fluida em qualquer dispositivo. Usa HTML, CSS e JavaScript, colaborando com o back-end para integrar as funcionalidades e proporcionar uma experiência do usuário eficiente e agradável."
    },
    {
        imagem: "img/equipe/tayna.jpg",
        nome: "Tayna Dias",
        cargo: "Designer de UX/UI",
        texto: "Trabalha com a criação de layouts e identidades visuais que representam a marca. Seu papel é garantir que a estética da interface seja atraente e funcional, trazendo uma experiência visual coesa e memorável ao usuário."
    }
    ];
    
    let indiceAtual = 0; // inicia no primeiro membro da equipe
    
    // pega o botão, a caixa de texto e os parágrafos de nome, cargo e texto
    const botaoMudarTexto = document.getElementById("botao-mudar-texto");
    const nomeTexto = document.getElementById("nome");
    const cargoTexto = document.getElementById("cargo");
    const conteudoTexto = document.getElementById("conteudo-texto");

    // função para mudar os dados no retângulo (nome, cargo e texto)
    botaoMudarTexto.addEventListener("click", () => { // quando o botão for clicado...
        indiceAtual++; // adiciona 1 no índice

        if (indiceAtual >= equipe.length) { // verifica se já passou do número de membros
            indiceAtual = 0; // reinicia para o primeiro membro
        }

        // animação para a transição de texto
        document.getElementById("caixa-texto").style.opacity = 0; // fade-out

        setTimeout(() => {
            // atualiza o nome, cargo e texto
            nomeTexto.textContent = equipe[indiceAtual].nome;
            cargoTexto.textContent = equipe[indiceAtual].cargo;
            conteudoTexto.textContent = equipe[indiceAtual].texto;
            document.querySelector(".texto-img").src = equipe[indiceAtual].imagem; // atualiza a imagem
            document.getElementById("caixa-texto").style.opacity = 1; // fade-in
        }, 500); // aguarda meio segundo antes de mudar o conteúdo        

        
});

$(document).ready(function(){
    $(".paragrafo-saiba-mais").hide();
    
    $('#saiba-mais').click(function(e) {
        $(".paragrafo-saiba-mais").toggle(1000);
    });

function limpa_formulário_cep() {
    // Limpa valores do formulário de cep.
    $("#endereco").val("");
    $("#bairro").val("");
    $("#cidade").val("");
    $("#uf").val("");
    }
    
    //Quando o campo cep perde o foco.
    $("#cep").blur(function() {
    
    //Nova variável "cep" somente com dígitos.
    var cep = $(this).val().replace(/\D/g, '');
    
    //Verifica se campo cep possui valor informado.
    if (cep != "") {
    
        //Expressão regular para validar o CEP.
        var validacep = /^[0-9]{8}$/;
    
        //Valida o formato do CEP.
        if(validacep.test(cep)) {
    
            //Preenche os campos com "..." enquanto consulta webservice.
            $("#endereco").val("...");
            $("#bairro").val("...");
            $("#cidade").val("...");
            $("#uf").val("...");
    
            //Consulta o webservice viacep.com.br/
            $.getJSON("https://viacep.com.br/ws/"+ cep +"/json/?callback=?", function(dados) {
    
                if (!("erro" in dados)) {
                    //Atualiza os campos com os valores da consulta.
                    $("#endereco").val(dados.logradouro);
                    $("#bairro").val(dados.bairro);
                    $("#cidade").val(dados.localidade);
                    $("#uf").val(dados.uf);
                } //end if.
                else {
                    //CEP pesquisado não foi encontrado.
                    limpa_formulário_cep();
                    alert("CEP não encontrado.");
                }
            });
        } //end if.
        else {
            //cep é inválido.
            limpa_formulário_cep();
            alert("Formato de CEP inválido.");
        }
    } //end if.
    else {
        //cep sem valor, limpa formulário.
        limpa_formulário_cep();
    }
    });
});
