<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio Vat</title>
</head>
<body>
    <h1>Registro de OS</h1>
    <div>    
        <form method="POST" action="index.php">
            <label for="solicitante">Solicitante da OS </label>
            <input type="text" name="nome" id="NOME"placeholder="Digite o nome completo aqui" size="30" required><br><br>

            <label for="ocorrencia">Ocorrencia da OS</label>
            <input type="text" name="ocorrencia" id="ocorrencia" placeholder="Escreva a ocorrência da OS. EX: CPU INOPERANTE." size="50" required><br><br>

            <label for="descricao">Descrição da OS</label>
            <input type="text" name="descricao" id="descricao" placeholder="Descreva a ocorrência e os testes realizados" size = "100" required><br><br>

            <button type="submit">Confirmar</button><br><br>
    
        </form>
    </div>

    <div>
        <br><br><button type="submit" name="Consulta" value="Consultar">Consultar OS</button>

    </div>
</body>
</html>