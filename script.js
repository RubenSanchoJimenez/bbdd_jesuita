'use strict'

const divJesuita = document.getElementById("jesuita");
const divLugar = document.getElementById("lugar");
const divVisita = document.getElementById("visita");

divJesuita.style.display = "block"
divLugar.style.display = "none"
divVisita.style.display = "none"

function mostrarJesuita() {
    divJesuita.style.display = "block"
    divLugar.style.display = "none"
    divVisita.style.display = "none"
}
function mostrarLugar() {
    divJesuita.style.display = "none"
    divLugar.style.display = "block"
    divVisita.style.display = "none"
}
function MostrarVisita() {
    divJesuita.style.display = "none"
    divLugar.style.display = "none"
    divVisita.style.display = "block"
}