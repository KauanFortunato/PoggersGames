<?php
    include_once('../../php/config.php');

    $nome = $_POST['nome'];
    $valor = $_POST['valor'];
    $valor_antigo = $_POST['valor_antigo'];
    $lancamento = $_POST['lancamento'];
    $publisher = $_POST['publisher'];
    $pagina = $_POST['pagina'];
    $imagem = $_POST['imagem'];
    $tipo_prod = $_POST['tipo_prod'];
    
    $sql = "INSERT INTO produto (nome, valor, valor_antigo, lancamento, publisher, pagina, imagem, tipo_prod)
     VALUES ('$nome', '$valor', '$valor_antigo', '$lancamento', '$publisher', '$pagina', '$imagem', '$tipo_prod')";

    if($mysqli->query($sql) === TRUE){
        $_SESSION['msg'] = "Produto adicionado +";
        header("Location: {$_SERVER['HTTP_REFERER']}");
    }else{
        echo 'ERRO! Dados não foram inseridos.';
    }