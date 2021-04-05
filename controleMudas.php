<?php  

include 'crudMudas.php';


    require_once "csrf.php";
 
    // Validação da requisição
    if (CSRF::validate_token($_POST["csrf_token"]))
    {
        $opcao = $_POST['opcao'];

        if ($opcao == "Cadastrar") {
            $nome = $_POST["nome"];
            $localizacao= $_POST["localizacao"];
            $quantidade= $_POST["quantidade"];

            cadastrarProduto($nome, $localizacao,$quantidade);
            header("location: cadastrarMudas.php");
        }


    }
    else
    {
        echo "<script>alert('user não autorizado');</script>";
        echo "<script>window.location = 'index.php';</script>";
    }



?>