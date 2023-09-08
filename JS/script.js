// Abrir o popup quando o botão for clicado
document.getElementById("contatopopup").addEventListener("click", function () {
    document.getElementById("popup").style.display = "flex";
});

// Fechar o popup quando o botão de fechar for clicado
document.getElementById("closePopup").addEventListener("click", function () {
    document.getElementById("popup").style.display = "none";
});
