<?php
    session_start();

    if(isset($_SESSION['email']) && isset($_SESSION['senha'])){
        include_once('config.php');

        $id_user = $_SESSION['id_user'];
        $preco_final = $_POST['preco_final'];
        $qtd_produtos = $_POST['qtd_produtos'];

        $sql_carteira = "SELECT * FROM carteira WHERE id_user = ?";
        $stmt = $mysqli->prepare($sql_carteira);
        $stmt->bind_param("i", $id_user);
        $stmt->execute();

        $resultado = $stmt->get_result();
        
        if($resultado->num_rows > 0){
            $carteira = $resultado->fetch_assoc();
            if($carteira['dinheiro'] - $preco_final >= 0){
                $_SESSION['dinheiro'] = $carteira['dinheiro'] - $preco_final;

                $sql_att_saldo = "UPDATE carteira SET dinheiro = ? WHERE id_user = ?";
                $stmt = $mysqli->prepare($sql_att_saldo);
                $stmt->bind_param("di", $_SESSION['dinheiro'], $id_user);
                $stmt->execute();

                $id_user = $_SESSION['id_user'];
                $sql_remove_carrinho = "DELETE FROM lista_e_compra WHERE id_user = ? AND tipo_lista = 1";
                $stmt = $mysqli->prepare($sql_remove_carrinho);
                $stmt->bind_param("i", $id_user);
                $stmt->execute();

                $sql_compra = "INSERT INTO compra (valor_compra, qtd_produtos, id_user) VALUES (?,?,?)";
                $stmt = $mysqli->prepare($sql_compra);
                $stmt->bind_param("dii", $preco_final, $qtd_produtos, $id_user);
                $stmt->execute();

                $i = 0;
                while($i < $qtd_produtos){
                    $sql_att_prod = "UPDATE produto SET comprados = comprados + 1 WHERE N_Produto = ?";
                    $stmt = $mysqli->prepare($sql_att_prod);
                    $stmt->bind_param("i", $_POST['produto'.$i]);
                    $stmt->execute();
                    $i++;
                }
                $stmt->close();

                header("Location: {$_SERVER['HTTP_REFERER']}");
            }else{
                header("Location: {$_SERVER['HTTP_REFERER']}");
            }
        }
    }

    $stmt->close();
    $mysqli->close();
?>