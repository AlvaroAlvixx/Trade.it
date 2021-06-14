$(document).ready(function () {
    $.post('php/proposta_dados.php', function (retorna) {
        let retornou = retorna;
        //console.log(retornou);

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
            <button id="btnRecusarProposta" type="submit" class="btn btn-danger btnRecusar" onclick="define_status(3)">Recusar</button>
            <button id="btnAceitarProposta" type="submit" class="btn btn-success btnAceitar" onclick="define_status(2)">Aceitar </button>`);
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
            statusNome_Proposta = "Aceita";
        else if (status_Proposta == "3")
            statusNome_Proposta = "Recusada";
        else if (status_Proposta == "4")
            statusNome_Proposta = "Em análise pelo Trade.it";
        else if (status_Proposta == "5")
            statusNome_Proposta = "Reprovada pelo Trade.it";
        else
            statusNome_Proposta = "Aprovada pelo Trade.it";

        $("#statusAnuncio").html(statusNome_Anuncio);
        $("#statusProposta").html(statusNome_Proposta);

        let usuario_admin = (valor[13]);
        if (usuario_admin != "") {
            $("#divMenuAdmin").html(`<fieldset class="fieldsetMenuAdm" id="divMenuAdmin">
        
                <div class="row">
                    <div class="col-12">
                        <p class="tituloMenuAdm">Menu administrador</p>
                    </div>
                </div>
                <div class="row divBtnMenuAdmin">
                    <button id="btnMenuAdminAnalise" type="submit" class="btn btn-warning btnMenuAdmin" onclick="define_status(4)">Em análise</button>
                </div>
                <div class="row divBtnMenuAdmin">
                    <button id="btnMenuAdminReprovado" type="submit" class="btn btn-danger btnMenuAdmin" onclick="define_status(5)">Reprovada</button>
                </div>
                <div class="row divBtnMenuAdmin">
                    <button id="btnMenuAdminAprovado" type="submit" class="btn btn-success btnMenuAdmin" onclick="define_status(6)">Aprovada</button>
                </div>
            
        </fieldset>`);
        }
    });

    $.post('php/chat_dados.php', function (retorna) {
        let retornou = retorna;

        if (retornou == "") {
            //$("#minhasPropostas").html("Nenhuma proposta encontrado");
            console.log("nada");
        } else {

            let valor = []
            valor = (retornou.split("|"));

            let texto = '';
            let i = 1;            
            
            let user = valor[0];

            while (i < (valor.length - 1)) {
                if(user == valor[i]){
                    texto = texto + 
                    `<div class="row">
                        <div class="col-12">
                            <div class="mensagemLogado">
                                <p class="txtLogado">&nbsp ${valor[(i + 1)]}</p>
                                <p class="topicosProposta txtLogado">${valor[(i)]}: </p>
                            </div>
                            
                        </div>                       
                    </div>`
                }
                else{
                    texto = texto + 
                    `<div class="row">
                        <div class="col-12 mensagemOutros">
                            <p class="topicosProposta txtOutros">${valor[(i)]}</p>
                            <p class="txtOutros"> &nbsp ${valor[(i + 1)]} </p>
                        </div>
                        
                    </div>`
                }               

                i = i + 2;
            }
            $("#chat").html(texto);

        }

    });
});
function define_status(valor) {
    console.log("Status: " + valor);
    document.cookie = `statusClicado = ${valor}`;

    $.post('php/proposta_status.php', function (retorna) {
        let retornou = retorna;
        console.log("Id: " + retornou);
        location.reload();
    });
};
