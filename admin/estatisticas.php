<?php
    session_start();
    include('../main_templates/header_footer/header.php');

    if($_SESSION['tipo-user'] != 'admin'){
        header("Location: {$_SERVER['HTTP_REFERER']}");
    }
?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <link rel="icon" href="../img/IconeLogo.ico" type="img/x-icon">
        <link rel="stylesheet" type="text/css" href="../main_templates/css/style_header_footer.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta charset="utf-8">

        <title> Poggers Games</title>

        <script src="../main_templates/scripts/master-template.js"></script>
        <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    </head>
    <body>
        
    </body>
</html>

<?php
    include('../main_templates/header_footer/footer.php');
?>