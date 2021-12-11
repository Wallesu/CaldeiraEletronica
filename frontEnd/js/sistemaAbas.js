function trocarAba(evt, pagina) {
    // Declara variáveis
    var i, tabcontent, tablinks;

    // Pega todos elementos com a classe "tabcontent" e esconde
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }

    // Pega todos elementos com a classe "botaoAba" e remove a classe "ativo"
    tablinks = document.getElementsByClassName("botaoAba");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" ativo", "");
    }

    // Volta a mostrar a tab e adiciona a classe "ativo" em quem ativou ela
    document.getElementById(pagina).style.display = "flex";
    if(evt.target.id == 'botaProximo') tablinks[1].classList.add('ativo')
    evt.currentTarget.classList.add('ativo');
}