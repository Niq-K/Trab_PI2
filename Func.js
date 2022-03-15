function Verificar(cad){
    if(cad.nome != null){
        if (cad.email != null){
            if (cad.senha != null){
                cadastro();
            }
        }
    } else {
        alert("Os campos não foram preenchidos corretamente");
    }
}

function cadastro(){

}