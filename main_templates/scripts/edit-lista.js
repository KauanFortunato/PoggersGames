function remove_carrinho(N_Produto) {
    $.ajax({
        type: 'POST',
        url: '../php/remove-carrinho.php',
        data: { N_Produto: N_Produto },
        success: function(data) {
            console.log(data);
            location.reload();
            if (data.hasOwnProperty('produto')) {
                console.log(data.produto);
            } else {
                console.log('A resposta não contém a propriedade "produto".');
            }
        },
        error: function(jqXHR, textStatus, errorThrown) {
            console.log('Erro na solicitação AJAX: ' + textStatus);
            console.log('Detalhes do erro: ' + errorThrown);
        }
    });
}

function change_list(N_Produto, tipo_lista){
    $.ajax({
        type: 'POST',
        url: '../php/change_list.php',
        data: { N_Produto: N_Produto, tipo_lista: tipo_lista},
        success: function(data){
            location.reload();
            if (data.hasOwnProperty('produto')) {
                console.log(data.produto);
            } else {
                console.log('A resposta não contém a propriedade "produto".');
            }
        },
        error: function(jqXHR, textStatus, errorThrown) {
            console.log('Erro na solicitação AJAX: ' + textStatus);
            console.log('Detalhes do erro: ' + errorThrown);
        }
    });
}