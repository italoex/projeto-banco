<?php
    if(isset($_POST['submit']))
    {
        include_once('banco.php');
        $banco = $_POST['banco'];
        $endereco = $_POST['endereco'];
        $bandeira = $_POST['bandeira'];
        
        $result = mysqli_query($conexao, "INSERT INTO banco(banco, endereco, bandeira) VALUES ('$banco', '$endereco', '$bandeira')");
    }
?>
<!DOCTYPE html>
<html lang="pt">
    <form action="funcao1.php" method="POST">
        Banco<input type="text" name="banco"><br>
        Endereço<input type="text" name="endereco"><br>
        Bandeira<input type="text" name="bandeira"><br>
        <input type="submit" name="submit" value="Concluir">
</form>
</html>