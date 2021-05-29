$(document).ready(function () {

    $.post('php/search.php', function (retorna) {
        let retornou = retorna;
        console.log(retornou);
        if (retornou == "") {
            $("#divResults").html("Nenhum resultado encontrado");
        } else {

            let valor = []
            valor = (retornou.split("|"));
            console.log(valor[0]);

            let texto = '';
            let i = 0;

            while (i < (valor.length - 1)) {
                texto = texto + `
                <div class="col-md-3 divImg">
                    <a href="anuncio.php" onclick="define_anuncio('${valor[i]}')">
                         <img src="${valor[i]}" class="card-img-top">
                    </a>
                 </div>`

                $("#divResults").html(texto);
                i++;
            }
        }

    });

    $.post('php/search_dados.php', function (retorna) {
        let retornou = retorna;
        $("#result").html(`Resultado de "${retornou}"`);
        document.cookie = `pesquisa = %%`;
        document.cookie = `categoriaClicada = %%`;
    });

});


