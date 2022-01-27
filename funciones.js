function calcularCoste(){
    var numNoches = document.getElementById("numNoches").value;
    var resultado1 = costeHotel(numNoches);

    var destino = document.getElementById("ciudad_destino").value;
    var resultado2 = costeAvion(destino);

    var resultado3 = costeAlquilerCoche(numNoches);

    /Saber si el factor esta seleccionado con coche o no /
    var pres = document.getElementById("coches").value;
    var r = siNo(pres);

    if(r == "no"){
        var resultadoTotal = resultado1 + resultado2;
        document.getElementById("result").value = resultadoTotal;
    } else{
        var resultadoTotal = resultado1 + resultado2 + resultado3;
        document.getElementById("result").value = resultadoTotal;
    }
}
function costeHotel(n){
    var costeEstancia = n * 140;
    return costeEstancia;
}
function costeAvion(ciudad){
    if(ciudad == "oviedo"){
        return 15;
    } else if(ciudad == "quito"){
        return 10;
    } else if(ciudad == "japon"){
        return 100;
    } else if(ciudad == "rio"){
        return 90;
    }else if(ciudad == "rusia"){
        return 1200;
    }
}
function costeAlquilerCoche(n){
        var coste = n*40;
        if(n>7){
            coste -=50;
        } else if(n>3){
            coste -= 20;
        }
        return coste;
}
function siNo(m){
    if(m == "ninguno"){
        return "no";
    }
}