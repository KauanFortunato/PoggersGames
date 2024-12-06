$(document).ready(function() {
    $('#ordenar-por-select').change(function(){
        var selectOption = $(this).children("option:selected").val();
        console.log(selectOption);
        function carregarProdutos() {
            $.ajax({
                url: '../php/get-produtos.php',
                type: 'GET',
                data: { ordenarPor: selectOption }, 
                success: function(response) {
                    // Remover a classe da div retornada para evitar aninhamento indesejado
                    // Substituir a div existente pela nova div
                    $('.grid-container').replaceWith(response);
                },
                error: function(xhr, status, error) {
                    console.error(status, error);
                }
            });
        }
        carregarProdutos()
    })
});

document.addEventListener('DOMContentLoaded', function() {
    $.ajax({
        url: '../php/get-produtos.php',
        type: 'GET',
        data: { ordenarPor: 'lancamento' }, 
        success: function(response) {
            // Inserir o HTML dos produtos no container
            $('.grid-items-filtro').append(response);
        },
        error: function(xhr, status, error) {
            console.error(status, error);
        }
    });
});
