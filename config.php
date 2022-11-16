<?php 

    $nome = $_POST['nome'];
    $ocorrencia = $_POST['ocorrencia'];
    $descricao = $_POST['descricao'];
   

    $conexao = mysqli_connect('localhost','VAT','','desafio_vat');
    
    if($conexao->connect_errno)
    {
        die ('Não conectado');
    }
    echo 'A Conexão foi um sucesso'
    
?>