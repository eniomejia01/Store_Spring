document.addEventListener('DOMContentLoaded', function() { 

    iniciarApp();


});


function iniciarApp() {

    mostrarSeccion(); //muestra y oculata las secciones

}




// function mostrarSeccion() {
//     const mostrarElementos = document.querySelectorAll(".botons");
//     const mostrarListas = document.querySelectorAll(".propiedades");
//     // const productos = document.querySelectorAll(".productos");
    

//     mostrarElementos.forEach((elemento, index) => {
//         elemento.addEventListener("click", () => {
//         mostrarListas[index].classList.toggle("oculto");
//         toggleIcon(elemento);
//         });  
//     });

// }

// function toggleIcon(element) {

//     const icono = element.querySelector("i");


//     element.addEventListener("click", () => {
//         if(icono.classList.contains("bi-dash-circle-fill")) {
//             icono.classList.remove("bi-dash-circle-fill"); 
//             icono.classList.add("bi", "bi-plus-circle-fill");
//         } else {
//             icono.classList.remove("bi-plus-circle-fill");
//             icono.classList.add("bi", "bi-dash-circle-fill");
//         }
//     });

// }


// function toggleIcon(element) {

//     element.addEventListener("click", () => {

//         const icono = element.querySelector("i");

//         if (icono && icono.classList.contains("bi-dash-circle-fill")) {
//             icono.classList.remove("bi-dash-circle-fill");
//             icono.classList.add("bi", "bi-plus-circle-fill");
//         } else if (icono) {
//             icono.classList.remove("bi-plus-circle-fill");
//             icono.classList.add("bi", "bi-dash-circle-fill");
//         }
//     });

// }

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

// function toggleIcon(element) {
//     const icono = element.querySelectorAll("i"); // Cambiado el selector

//     if (icono && icono.classList.contains("bi-dash-circle-fill")) {
//         icono.classList.remove("bi-dash-circle-fill");
//         icono.classList.add("bi", "bi-plus-circle-fill");
//     } else if (icono) {
//         icono.classList.remove("bi-plus-circle-fill");
//         icono.classList.add("bi", "bi-dash-circle-fill");
//     }
// }

// Obtener todos los h2 
const headers = document.querySelectorAll("h2");

// Iterar y aplicar lógica a cada uno 
headers.forEach(header => {
    toggleIcon(header); 
});


