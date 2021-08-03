
// função que atualiza o idioma dinamicamente
function idioma(idioma){
    url = base_url + "/idioma";
    $.get(url + '/'+ idioma, function(res) {
        var result = JSON.parse(res);
    })
}

function visualizarSolicitacao(solicitacao_id){
    url = base_url + "/idioma";

    $.get(url + '/'+ solicitacao_id, function(res) {
        var result = JSON.parse(res);
    })

}