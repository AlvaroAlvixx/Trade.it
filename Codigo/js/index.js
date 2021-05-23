$(document).ready(function () {
    $.post('index_destaques.php', function (retorna) {
        //$("#divDestaque").html(retorna);
        let retornou = retorna;
        if (retornou == "") {
            $("#divDestaque").html("Nenhum anúncio encontrado");
        } else {

            let valor = []
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
});

function define_anuncio(valor) {
    console.log(valor);
    document.cookie = `anuncioClicado = ${valor}`;
};

function define_categoria(valor) {
    console.log(valor);
    document.cookie = `categoriaClicada = ${valor}`;
};

