'use strict'

const divJesuita = document.getElementById("jesuita");
const divLugar = document.getElementById("lugar");
const divVisita = document.getElementById("visita");

const selectJesuita = document.getElementById("accionJesuita");
const nuevoIdInputJesuita = document.getElementById("nuevoIdJesuita");

const selectLugar = document.getElementById("accionLugar");
const nuevoIdInputLugar = document.getElementById("nuevoIpLugar");

divJesuita.style.display = "block"
divLugar.style.display = "none"
divVisita.style.display = "none"
nuevoIdInputJesuita.style.display = "none";
nuevoIdInputLugar.style.display = "none";

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

document.addEventListener("DOMContentLoaded", function() {
    // Agrega un evento "change" al elemento select para detectar cambios en la selección.
    selectJesuita.addEventListener("change", function() {
        // Verifica si la opción seleccionada es "Modificar".
        if (selectJesuita.value === "Modificar") {
            // Muestra el input si se selecciona "Modificar".
            nuevoIdInputJesuita.style.display = "block";
        } else {
            // Oculta el input si no se selecciona "Modificar".
            nuevoIdInputJesuita.style.display = "none";
        }
    });
    
    // Similarmente, puedes hacer lo mismo para selectLugar si es necesario.
    selectLugar.addEventListener("change", function() {
        if (selectLugar.value === "Modificar") {
            nuevoIdInputLugar.style.display = "block";
        } else {
            nuevoIdInputLugar.style.display = "none";
        }
    });
});