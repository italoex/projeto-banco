<?php
    if(isset($_POST['submit']))
    {
        include_once('banco.php');
        $nome = $_POST['nome'];   
        $result = mysqli_query($conexao, "SELECT * FROM tarefas WHERE nome='Italo'");
        while ($dados = $result->fetch_array()){
            if(isset($dados['nome']))
                echo "Nome: " . $dados['nome'] . "<br>";
            if(isset($dados['cpf']))
                echo "CPF: " . $dados['cpf'] . "<br>";
            if(isset($dados['banco']))
                echo "Banco: " . $dados['banco'] . "<br>";
            if(isset($dados['numeroconta']))
                echo "Numero da conta: " . $dados['numeroconta'] . "<br>";
            if(isset($dados['numeroagencia']))
                echo "Numero da agência: " . $dados['numeroagencia'] . "<br>";
            if(isset($dados['bandeira']))
                echo "Bandeira: " . $dados['bandeira'] . "<br>";
            if(isset($dados['endereco']))
                echo "Endereço: " . $dados['endereco'] . "<br>";
        }
    }
?>
<!DOCTYPE html>
<html lang="pt">
    <form action="funcao5.php" method="POST">
        Nome do Cliente: <input type="text" name="nome"><br>
        <input type="submit" name="submit">
</form>
</html>