//SE OCTIENE LA PREFERENCIA DEL TEMA SELECCIONADO
const valor = localStorage.getItem('tema');


document.addEventListener("DOMContentLoaded", function () {
    
    




    eventlistener();
    if (valor === "claro") { document.body.classList.remove("dark-mode"); }

    if (valor === "oscuro") { document.body.classList.add("dark-mode"); }


    // FUNCIÓN ELIMINAR ALERTA
    let mensajes = document.querySelectorAll('.alerta.error');

    if (mensajes.length === 0) {
        mensajes = document.querySelectorAll('.alerta.fallido');
    }
    if (mensajes.length === 0) {
        mensajes = document.querySelectorAll('.alerta.correcto');
    }

    if (mensajes.length > 0) {

        setTimeout(() => {
            
            


            mensajes.forEach(mensaje => {
                mensaje.remove();
            });
         

        }, 4000);
    }


});






function eventlistener() {


    const mobile_menu = document.querySelector(".mobile-menu");
    mobile_menu.addEventListener("click", mostrar_mobile_menu);
    const dark_mode_btn = document.querySelector(".contenedor-dark-img");
    dark_mode_btn.addEventListener("click", dark_mode);
}


function mostrar_mobile_menu() {

    const mobile_menu = document.querySelector(".navegacion");
    if (mobile_menu.classList.contains("mostrar_menu")) {
        mobile_menu.classList.remove("mostrar_menu");
    }
    else {
        mobile_menu.classList.add("mostrar_menu");
    }
}

function dark_mode() {

    
    $.ajax({
        url: 'admin/solicitudes.php',
        method: 'POST',
        data: {last_check_time: '1970-01-01 00:00:00'},
        dataType: 'json',
        success: function(data) {
            // Procesar datos
            console.log(data);
        },
        error: function(jqXHR, textStatus, errorThrown) {
            console.log("error")
            console.log(jqXHR, textStatus, errorThrown);
            // Manejo de errores
        }
    });


    if (valor === "claro") { localStorage.setItem('tema', 'oscuro'); }
    else { localStorage.setItem('tema', 'claro'); }


    // CREA LA CLASE SI NO, LA QUITA //
    document.body.classList.toggle("dark-mode");
}
