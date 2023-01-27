<!DOCTYPE html>
<html lang="pt">
    <?php include_once('banco.php'); 
    $banco = mysqli_query($conexao, "SELECT * FROM banco");?>
    <form action="funcao2.php" method="POST">
        Nome<input type="text" name="nome"><br>
        CPF<input type="number" name="cpf"><br>
        Endereço<input type="text" name="endereco"><br>
        Banco:<br>
        <?php while($radio = $banco->fetch_array()){?> 
            <?php echo $radio['banco']?><input type="radio" name="banco" value="VALOR DO BANCO";>
            <br>
        <?php $i++; } ?>
        <input type="submit" name="submit">
    </form>
    <?php 
    if(isset($_POST['submit']))
    {   
        $banco = $_POST['banco'];
        $con = mysqli_query($conexao, "SELECT COUNT(id) AS qntd FROM tarefas");
        $result = mysqli_fetch_assoc($con);
        $conta = str_pad($result['qntd'] , 6 , '0' , STR_PAD_LEFT);
        $nome = $_POST['nome'];
        $cpf = $_POST['cpf'];
        $endereco = $_POST['endereco'];
        $result = mysqli_query($conexao, "INSERT INTO tarefas(nome, cpf, endereco, numeroconta, banco) VALUES ('$nome', '$cpf', '$endereco', '$conta', '$banco')");
        echo "Conta Criada com sucesso<br>";
        echo "Número da conta: " . $conta;?>
        <a href="menu.html">Clique aqui para voltar</a>;
        <?php }
?>
</html>

