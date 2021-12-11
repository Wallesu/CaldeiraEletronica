function enviaDados(){
    const textoCampos = document.getElementsByClassName('campoForm')
    if(validaCampos(textoCampos).length > 0){
        exibeErros()
        event.preventDefault()
    }
}
function validaCampos(textoCampos){
    const erros = []
    
        for (let i = 0; i < textoCampos.length; i++) {
            try {
                const campoName = textoCampos[i].name
                if(campoName == 'nome' || campoName == 'email' || campoName == 'senha' || campoName == 'cidade'  || campoName == 'bairro' || campoName == 'rua'){
                    if(textoCampos[i].value.length == 0) throw `O campo ${textoCampos[i].name} precisa ser preenchido`
                    if(textoCampos[i].value.length < 3) throw `O campo ${textoCampos[i].name} precisar ter ao menos 3 caracteres`
                }
                
            } catch (error) {
                erros.push(error)
            }
        }
    return erros
}
function exibeErros(){
    const textoCampos = document.getElementsByClassName('campoForm')
    const listaErros = document.getElementById('listaErros')
    removeTodosFilhos(listaErros)

    var li = []
    for (let i = 0; i < validaCampos(textoCampos).length; i++) {
        li[i] = document.createElement('LI')
        li[i].appendChild(document.createTextNode(validaCampos(textoCampos)[i]))
        listaErros.appendChild(li[i])
    }  
}
function removeTodosFilhos(elementoPai) {
    while (elementoPai.firstChild) {
        elementoPai.removeChild(elementoPai.firstChild);
    }
}

