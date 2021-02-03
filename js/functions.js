function mostrarContraseña(){
    var g = document.getElementById("mostrar");
    if(g.type === "password"){
       g.type= "text";
    }else{
       g.type = "password";
    }
}