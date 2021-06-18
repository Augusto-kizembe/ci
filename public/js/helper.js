
// função que atualiza o idioma dinamicamente
function idioma(idioma){
    url = base_url + "/idioma";
    $.get(url + '/'+ idioma, function(res) {
        var result = JSON.parse(res);
    })
}