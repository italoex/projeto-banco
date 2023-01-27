<!DOCTYPE html>
<html lang="pt">
    <?php
        include_once('banco.php');
        $con = mysqli_query($conexao, "SELECT COUNT(id) AS qntd FROM tarefas");
        $result = mysqli_fetch_assoc($con);
        echo "QUANTIDADE" . $result['qntd'] . "<br>"; 
        $conta = str_pad($result['qntd'] , 4 , '0' , STR_PAD_LEFT); 
        echo $conta;
    ?>
</html>
