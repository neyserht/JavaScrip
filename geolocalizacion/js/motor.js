var opciones =
{
    enableHighAccuracy: true,
    timeout: 5000,
    maximumAge: 0
    // Indicamos que la geolocalización no se obtena de una valor almacenado en caché
};

function exito(pos){
    var crd = pos.coords;
    var d1 = document.getElementById("d1");
    d1.innerHTML = "Posicion actual: <br>Laitud: "+ crd.latitude + "<br> Logitud: " + crd.longitude + "<br>Margen de error: "+ crd.accuracy + " metros";
};

function error(err){
    console.warn("Codigo de error: "+err.code + " Mensaje de error: " + err.message)
}

function geo()
{
    navigator.geolocation.getCurrentPosition(exito, error, opciones);
}