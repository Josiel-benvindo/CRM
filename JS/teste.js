//document.addEventListener("DOMContentLoaded", function () {
  //  const botao = document.getElementById("mostrar-esconder");
    //const div = document.getElementById("minha-div");

    //botao.addEventListener("click", function () {
      //  if (div.style.display === "none" || div.style.display === "") {
        //    div.style.display = "block";
        //} else {
          //  div.style.display = "none";
        //}
    //});
//});

document.addEventListener("DOMContentLoaded", function () {
    const botao = document.getElementById("rolar-botao");
    const divDestino = document.getElementById("eficiencia");

    botao.addEventListener("click", function () {
        divDestino.scrollIntoView({ behavior: "smooth" });
    });
});