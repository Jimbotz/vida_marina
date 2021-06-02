Swal.fire({
    title: "Bienvenido UwU",
    text: "Espero te guste el contenido",
    icon: "info",
    timer: 3000,
    timerProgressBar: true,
    allowOutsideClick: false,
    allowEnterKey: false,
    confirmButtonColor: '#4fb4de',
    showCloseButton: true

    // background: "#9de1f4"
    // footer: "<span>footer</span>"
    // html: ''

    // toast: true,
    // position: "top-end",
    // backdrop: true

})

function alerta(){
    Swal.fire({
        title: "Bienvenido UwU",
        text: "Espero te guste el contenido",
        icon: "info",
        timer: 3000,
        timerProgressBar: true
    })
}


function notAcount(){
    Swal.fire({
        title: "Primero necesito que inicies sesion",
        text: "Es para que disfrutes de más contenido",
        icon: "error",
        timer: 5000,
        timerProgressBar: true,
        confirmButtonColor: '#4fb4de',
    })
}
