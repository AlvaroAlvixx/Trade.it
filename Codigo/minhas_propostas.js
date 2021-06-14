$(document).ready(function () {
    $.post('php/exibe_minhas_propostas.php', function (retorna) {
        let retornou = retorna;
        console.log(retornou);

        if (retornou == "") {
            $("#minhasPropostas").html("Nenhuma proposta encontrado");
        } else {

            let valor = []
            valor = (retornou.split("|"));

            let texto = '';
            let i = 0;

            while (i < (valor.length - 1)) {
                texto = texto + `<fieldset class="fieldsetProposta">
                <div class="row">
                    <div class="col-2 divImagem">
                        <div class="row">
                            <div class="col-12">
                                <div class="imagem">
                                <img src="${valor[(i + 2)]}" class="card-img-top">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-8">
                        <div class="row">
                            <div class="col-12">
                                <div class="infoProposta">
                                    <div class="row">
                                        <label for="anuncio" class="lblInfo"> Anúncio: </label>
                                        <label id="anuncio">&nbsp${valor[i]}</label >
                                    </div >
                                    <div class="row">
                                        <label for="proposta" class="lblInfo"> Proposta: </label>
                                        <label id="proposta">&nbsp${valor[i + 1]}</label>
                                    </div>
                                    <div class="row">
                                        <label for="status" class="lblInfo"> Status: </label>
                                        <label id="status">&nbsp${valor[i + 3]}</label>
                                    </div>
                                </div >
                            </div >
                        </div >
                    </div >
                    <div class="col-2">
                        <div class="row">
                            <div class="col-12">
                                <div class="divBtnVerificar">
                                <a href="proposta.php" onclick="define_proposta('${valor[(i + 2)]}')">
                                    <button type="submit" id="btnVerificarProposta" class="btn btn-primary btnVerificarProposta">Verificar</button>
                                </a>
                                 </div>
                            </div>
                        </div>
                    </div>
                                </div >
                            </fieldset >
                    `
                $("#minhasPropostas").html(texto);
                i = i + 4;
            }
        }

    });
});

