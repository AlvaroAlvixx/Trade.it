$(document).ready(function () {
    $.post('php/anuncio_destaques.php', function (retorna) {
        let retornou = retorna;
        if (retornou == "") {
            $("#divDestaque").html("Nenhum anúncio encontrado");
        } else {

            let valor = [];
            valor = (retornou.split("|"));

            let texto = '';
            let i = 0;

            while (i < (valor.length - 1) && i < 6) {
                texto = texto + `
                <div class="col-2"">
                    <a href="anuncio.php" onclick="define_anuncio('${valor[i]}')">
                        <div class="card cardGeral">
                            <img src="${valor[i]}" class="card-img-top">
                        </div>
                    </a>
                </div>`

                $("#divDestaque").html(texto);
                i++;
            }
        }

    });

    $.post('php/anuncio_dados.php', function (retorna) {
        let retornou = retorna;

        let valor = [];
        valor = (retornou.split("|"));

        let titulo = (valor[0]);
        let descricao = (valor[1]);
        let interesses = (valor[2]);
        let imagens = (valor[3]);
        let status = (valor[4]);
        let condicao = (valor[5]);
        let nomeOfertante = (valor[6]);
        let emailOfertante = (valor[7]);
        let logado = (valor[8]);
        let statusNome = "";

        if (condicao == "1")
            condicoes = "Novo";
        else if (condicao == "2")
            condicoes = "Usado (Como Novo)";
        else
            condicoes = "Usado (Aceitável)";

        if (status == "1")
            statusNome = "Aberto";
        else
            statusNome = "Finalizado";

        $("#id_titulo").html(`<h4>${titulo}</h4>`);
        $("#id_status").html(statusNome);
        $("#id_interesses").html(interesses);
        $("#id_condicao").html(condicoes);
        $("#id_descricao").html(descricao);
        $("#id_imagem").html(`<img src="${imagens}" class="card-img-top">`);
        $("#id_ofertante").html(nomeOfertante);

        if (logado != "" && logado != emailOfertante) {
            $("#btn_troca").html(`<button id="btnTrocar" type="submit" class="btn btn-primary btnNovoAnuncio">Propor troca</button>`);
        }
    });
});

function frete() {
    $("#pFrete").html("Frete Grátis");
};

function define_anuncio(valor) {
    console.log(valor);
    document.cookie = `anuncioClicado = ${valor}`;
};