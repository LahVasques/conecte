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
// os textos que irão alternar:
const textos = [
    "Transforma designs em páginas reais, cuida para que funcione em qualquer dispositivo e garante que a navegação seja simples e agradável. Utiliza as linguagens HTML, CSS e JavaScript e trabalha junto com o back-end para integrar funções ao site ou app. Em resumo, torna a experiência do usuário funcional e atrativa.",
    "Oiiiiiiiiiiiii",
    "EEu sou a fulanaaaaaaa",
    "Eu sou a sei la quemmmmmmmmmm"
];

let indiceTextoAtual = 0; //inicia no 0 

// pega o botao, a caixa de texto e o conteudo dela
const botaoMudarTexto = document.getElementById("botao-mudar-texto");
const caixaTexto = document.getElementById("caixa-texto");
const conteudoTexto = document.getElementById("conteudo-texto");

// função para mudar o texto no retângulo
botaoMudarTexto.addEventListener("click", () => { //qnd o botao for clicado...
    indiceTextoAtual++; //adiciona 1 no índice

    if (indiceTextoAtual >= textos.length) { //ve qnts textos tem
        indiceTextoAtual = 0; // se o índice passar da quantidade de texto, ele muda pra 0
    }

  //animação para a transição de texto
  caixaTexto.style.opacity = 0; // faz a animação de fade-out, mudando opacidade pra 0
    setTimeout(() => { //aquele ngc de executar dps de um tempo
      conteudoTexto.textContent = textos[indiceTextoAtual]; // muda o texto
      caixaTexto.style.opacity = 1; // faz a animação de fade-in, fznd aparecer o texto
  }, 500); // aguarda meio segundo antes de mudar o texto (milisegundos)
});