<!DOCTYPE html>
<html lang="pt">
    <?php include_once('banco.php'); 
    $banco = mysqli_query($conexao, "SELECT * FROM banco");?>
    <form action="funcao8.php" method="POST">
        Nome<input type="text" name="nome"><br>
        Banco:<br>
        <?php while($radio = $banco->fetch_array()){ 
            echo $radio['banco']?><input type="radio" name="banco" value="VALOR DO BANCO";>
            <br><?php } ?>
        <input type="submit" name="submit">
    </form>
    <?php 
    if(isset($_POST['submit']))
    {   
        $banco = $_POST['banco'];
        $nome = $_POST['nome'];
        $result = mysqli_query($conexao, "SELECT * FROM tarefas WHERE nome = 'Italo', banco = 'Bradesco'");
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
        } ?>
</html>

