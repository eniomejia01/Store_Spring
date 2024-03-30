document.addEventListener('DOMContentLoaded', function() { 

    iniciarApp();


});


function iniciarApp() {

    mostrarSeccion(); //muestra y oculata las secciones
    //togglePasswordVisibility(); //muestra y oculta la contraseña

}



function mostrarSeccion() {
    const mostrarElementos = document.querySelectorAll(".botons");
    const mostrarListas = document.querySelectorAll(".propiedades");

    mostrarElementos.forEach((elemento, index) => {
        elemento.addEventListener("click", () => {
            mostrarListas[index].classList.toggle("oculto");
            toggleIcon(elemento);
        });
    });
}

function toggleIcon(element) {
    const icono = element.querySelector("i");

    if (icono && icono.classList) {
        if (icono.classList.contains("bi-dash-circle-fill")) {
            icono.classList.remove("bi-dash-circle-fill");
            icono.classList.add("bi", "bi-plus-circle-fill");
        } else if (icono.classList.contains("bi-plus-circle-fill")) {
            icono.classList.remove("bi-plus-circle-fill");
            icono.classList.add("bi", "bi-dash-circle-fill");
        }
    }
}



// Obtener todos los h2 
const headers = document.querySelectorAll("h2");

// Iterar y aplicar lógica a cada uno 
headers.forEach(header => {
    toggleIcon(header); 
});

function togglePasswordVisibility() {
    let passwordField = document.getElementById("password");
    let toggleIcon = document.querySelector(".toggle-password");

    if (passwordField.type === "password") {
        passwordField.type = "text";
      toggleIcon.innerHTML = "&#128064;"; // Icono de ojo abierto
    } else {
        passwordField.type = "password";
        toggleIcon.innerHTML = "&#128065;"; // Icono de ojo cerrado
    }
}

