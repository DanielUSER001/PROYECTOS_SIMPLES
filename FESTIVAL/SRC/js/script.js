document.addEventListener("DOMContentLoaded", function () {
    crearGaleria()
    navegacionFija()
    resaltarEnlace()
    scrollnav()
})



function navegacionFija () {
    const header = document.querySelector(".header");
    const  contenidoFestival = document.querySelector(".contenido-festival");

    window.addEventListener("scroll", function () {
        if( contenidoFestival.getBoundingClientRect().bottom < 1) {
            header.classList.add("fixed")
        }
        else {
            header.classList.remove("fixed")

        }

    })

}



function crearGaleria() {
    const galeria = document.querySelector(".galeria-imagenes");
    const CANTIDAD_IMAGENES = 16;

    for (let i = 1; i <= CANTIDAD_IMAGENES; i++) {
        const imagen = document.createElement('PICTURE');

        imagen.innerHTML = `
    <source srcset="build/img/gallery/thumb/${i}.avif" type="image/avif">
    <source srcset="build/img/gallery/thumb/${i}.webp" type="image/webp">
    <img loading="lazy" width="200" height="300" src="build/img/gallery/thumb/${i}.jpg" alt="imagen galeria">
`;



        galeria.appendChild(imagen);

        //event handler
        imagen.onclick = function () {
            mostrarimagen(i);
        }
    }
}

function mostrarimagen(i) {
    const imagen = document.createElement('PICTURE');

    imagen.innerHTML = `
<source srcset="build/img/gallery/full/${i}.avif" type="image/avif">
<source srcset="build/img/gallery/full/${i}.webp" type="image/webp">
<img loading="lazy" width="200" height="300" src="build/img/gallery/full/${i}.jpg" alt="imagen galeria">
`;


    //boton cerra modal
    const botonCerrarModal = document.createElement("BUTTON")
    botonCerrarModal.textContent = "X";
    botonCerrarModal.classList.add("btn-cerrar");
    botonCerrarModal.onclick = cerraModal;






    //back oscuro
    const modal = document.createElement("DIV")
    modal.classList.add("modal")
    modal.onclick = cerraModal;

    modal.appendChild(imagen);
    modal.appendChild(botonCerrarModal)

    const body = document.querySelector("body");
    body.appendChild(modal)
    body.classList.add("overflow-hidden");

}

function cerraModal() {
    const modal = document.querySelector(".modal");
    modal.classList.add("fade-out");


    setInterval(() => {
        modal?.remove();
        const body = document.querySelector("body");
        body.classList.remove("overflow-hidden")
    }, 300);


}

function resaltarEnlace () {
    document.addEventListener("scroll", function () {
        const sectiones = document.querySelectorAll("section");
        const navlinks =  document.querySelectorAll(".navegacion-principal a")

        let actual = " ";

        sectiones.forEach( secction => {
            const secctionTop = secction.offsetTop;
            const secctionHeigth = secction.clientHeight;

            if(window.scrollY >= (secctionTop - secctionHeigth / 3)) {
                actual = secction.id;
            }
            
        })

        navlinks.forEach(link => {
            if(link.getAttribute("href") === "#" + actual) {
                link.classList.add("active");

            }
            else {
                link.classList.remove("active");

            }
        })
    })

}

function scrollnav () {
    const navlinks = document.querySelectorAll(".navegacion-principal a")
    navlinks.forEach( link => {
        link.addEventListener("click", e => {
            e.preventDefault()
            const sectionScroll = e.target.getAttribute("href")
            const section = document.querySelector(sectionScroll)
            section.scrollIntoView({behavior: "smooth"})
            

        })
    })
   
}