$(document).ready(function () {
    $.post('php/proposta_dados.php', function (retorna) {
        let retornou = retorna;
        console.log(retornou);

        let valor = [];
        valor = (retornou.split("|"));

        let tituloAnuncio = (valor[0]);
        let ofertante = (valor[1]);
        let condicaoAnuncio = (valor[2]);
        let descricaoAnuncio = (valor[3]);
        let imgAnuncio = (valor[4]);

        let condicaoText = "";

        if (condicaoAnuncio == "1")
            condicaoText = "Novo";
        else if (condicaoAnuncio == "2")
            condicaoText = "Usado (Como Novo)";
        else
            condicaoText = "Usado (Aceitável)";

        $("#anuncioTitulo").html(tituloAnuncio);
        $("#ofertanteAnuncio").html(ofertante);
        $("#condicaoAnuncio").html(condicaoText);
        $("#descricaoAnuncio").html(descricaoAnuncio);
        $("#imgAnuncio").html(`<img src="${imgAnuncio}" class="card-img-top"></img>`);

        let interessado = (valor[5]);
        let produtoProposta = (valor[6]);
        let condicaoProposta = (valor[7]);
        let mensagemProposta = (valor[8]);
        let imgProposta = (valor[9]);

        if (condicaoProposta == "1")
            condicaoText = "Novo";
        else if (condicaoProposta == "2")
            condicaoText = "Usado (Como Novo)";
        else
            condicaoText = "Usado (Aceitável)";

        $("#interessado").html(interessado);
        $("#produtoProposta").html(produtoProposta);
        $("#condicaoProposta").html(condicaoText);
        $("#mensagemProposta").html(mensagemProposta);
        $("#imgProposta").html(`<img src="${imgProposta}" class="card-img-top"></img>`);



    });


});