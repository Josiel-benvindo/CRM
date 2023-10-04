document.addEventListener("DOMContentLoaded", function() {
  var botaoLerMais = document.getElementById("botao-ler-mais");
  var maisConteudo = document.querySelector(".mais-conteudo");

  botaoLerMais.addEventListener("click", function() {
      if (maisConteudo.style.display === "none") {
          maisConteudo.style.display = "block";
          botaoLerMais.innerText = "Ler Menos";
      } else {
          maisConteudo.style.display = "none";
          botaoLerMais.innerText = "Ler Mais";
      }
  });
});