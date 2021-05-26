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
        let condicoes = "";

        if (status == "1")
            condicoes = "Novo";
        else if (status == "2")
            condicoes = "Usado (Como Novo)";
        else
            condicoes = "Usado (Aceitável)";

        $("#id_titulo").html(`<h4>${titulo}</h4>`);
        $("#id_interesses").html(interesses);
        $("#id_condicao").html(condicoes);
        $("#id_descricao").html(descricao);
        $("#id_imagem").html(`<img src="${imagens}" class="card-img-top">`);
    });
});

function frete() {
    $("#pFrete").html("Frete Grátis");
};

function define_anuncio(valor) {
    console.log(valor);
    document.cookie = `anuncioClicado = ${valor}`;
};