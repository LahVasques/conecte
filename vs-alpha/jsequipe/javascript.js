$(document).ready(function() {
  const equipe = [
    {
      nome: "Julia Dias",
      cargo: "Front End",
      paragrafo: "Transforma designs em páginas reais, cuida para que funcione em qualquer dispositivo e garante que a navegação seja simples e agradável.",
      foto: "imgequipe/julia.jpg"
    },
    {
      nome: "Tayna Dias",
      cargo: "Design",
      paragrafo: "Responsável por planejar e criar a aparência visual e a experiência do usuário. Garante que o site seja atraente, funcional e intuitivo. Em resumo, ela transforma ideias em designs que conectam estética e usabilidade.",
      foto: "imgequipe/tayna.jpg"
    },
    {
      nome: "Laiss Tie",
      cargo: "Backend",
      paragrafo: "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea comodo consequat. Duis aute irure dolor in reprehenderit ",
      foto: "imgequipe/laiss.jpg"
    },
    {
      nome: "Amanda Araújo",
      cargo: "Backend",
      paragrafo: "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea comodo consequat. Duis aute irure dolor in reprehenderit ",
      foto: "imgequipe/amanda.jpg"
    },
    {
      nome: "Yasmim Alves",
      cargo: "Front End",
      paragrafo: "Transforma designs em páginas reais, cuida para que funcione em qualquer dispositivo e garante que a navegação seja simples e agradável.",
      foto: "imgequipe/yasmim.jpg"
    }
  ];

  let index = 0;

  $("#trocar").click(function() {
    index = (index + 1) % equipe.length;

    // Adiciona classe de saída
    $("#troca").addClass("sair");

    setTimeout(() => {
      $("#nome").text(equipe[index].nome);
      $("#cargo").text(equipe[index].cargo);
      $("#paragrafo").text(equipe[index].paragrafo);
      $("#foto").attr("src", equipe[index].foto);
      
      $("#troca").removeClass("sair").addClass("entrar");

      setTimeout(() => {
        $("#troca").removeClass("entrar");
      }, 100);
    }, 500);
  });
});
