$(document).ready(function() {
    $('#tabelaRequisicoes').DataTable({
        language: {
            search: "Pesquisar",
            lengthMenu:    "Motrar _MENU_ linhas",
            info:           "Mostrando _START_ até _END_ de _TOTAL_ linhas",
            infoEmpty:      "Affichage de l'&eacute;lement 0 &agrave; 0 sur 0 &eacute;l&eacute;ments",
            paginate: {
                first:      "primeiro",
                previous:   "anterior",
                next:       "próximo",
                last:       "último"
            },
            "sDom":' <"barraPesquisa"f><"top"l>rt<"bottom"ip><"clear">'
        }
    });
} );

