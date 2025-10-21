function cambiarColor(id,cl,x){
    if(x==1){
        document.getElementById(id).style.backgroundColor = cl;
    }else{
        let elementos = document.getElementsByClassName(id);
        console.log("El valor del Array es:"+elementos.length);
        for(let i = 0; i < elementos.length; i++){
            elementos[i].style.backgroundColor = cl;
        }
    }
}