function define_pesquisa() {
    let pesquisa = document.getElementById("search").value;
    console.log(pesquisa);
    document.cookie = `pesquisa = ${pesquisa}`;
    window.location.href = "pesquisa.php";
};

function define_categoria(valor) {
    console.log(valor);
    document.cookie = `categoriaClicada = ${valor}`;
    window.location.href = "pesquisa.php";
};

function define_anuncio(valor) {
    console.log(valor);
    document.cookie = `anuncioClicado = ${valor}`;
};

