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

        let usuario_ofertante = (valor[10]);

        if (usuario_ofertante == true) {
            $("#divOfertante").html(`
            <button id="btnRecusarProposta" type="submit" class="btn btn-danger btnRecusar">Recusar</button>
            <button id="btnAceitarProposta" type="submit" class="btn btn-success btnAceitar">Aceitar</button>`);
        }

        let status_Anuncio = (valor[11]);
        let status_Proposta = (valor[12]);
        let statusNome_Anuncio = "";
        let statusNome_Proposta = "";

        if (status_Anuncio == "1")
            statusNome_Anuncio = "Aberto";
        else
            statusNome_Anuncio = "Finalizado";

        if (status_Proposta == "1")
            statusNome_Proposta = "Em negociação";
        else if (status_Proposta == "2")
            statusNome_Proposta = "Finalizada";
        else
            statusNome_Proposta = "Cancelada";

        $("#statusAnuncio").html(statusNome_Anuncio);
        $("#statusProposta").html(statusNome_Proposta);




    });


});