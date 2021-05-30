$(document).ready(function () {

    $.post('php/criar_proposta_dados.php', function (retorna) {
        let retornou = retorna;
        let valor = [];
        valor = (retornou.split("|"));

        let titulo = (valor[0]);
        let descricao = (valor[1]);
        let imagens = (valor[2]);

        $("#idTitulo").html(`Anúncio: ${titulo}`);
        $("#idDescricao").html(descricao);
        $("#idImagem").html(`<img src="${imagens}" class="card-img-top">`);
    });
});
