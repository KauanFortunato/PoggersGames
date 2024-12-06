<?php
    $ordenarPor = isset($_POST['ordenarPor']) ? $_POST['ordenarPor'] : "";

    if($ordenarPor == "lancamento") {
        echo "lancamento";
    }elseif($ordenarPor == "mais-caro") {
        // echo "valor DESC";
        getProdutosHTML('valor desc');
    }elseif($ordenarPor == "mais-barato") {
        echo "valor";
    }