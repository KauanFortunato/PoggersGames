function addDinheiro(valor) {
    $.ajax({
        type: 'POST',
        url: './config/add-dinheiro-carteira.php',
        data: { valor: valor },
        success: function(data) {
            var dinheiro = data.saldo + '€';
            $('.saldo').html(dinheiro);
        },
        error: function(error){
            console.log('Erro na solicitação AJAX: ' + error);
        }
    });
}