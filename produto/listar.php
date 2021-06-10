<table>
    <tr>
        <th>ID</th>
        <th>Tipo</th>
        <th>Plataforma</th>
        <th>Quantidade</th>
    </tr>

<?php
    include('classes/Produto.class.php');

    $produtos = Produto::listar();

    if($produtos){
        foreach($produtos as $produto){
?>
    <tr>
        <td><?php echo $produto->getId();?></td>
        <td><?php echo $produto->getTipo();?></td>
        <td><?php echo $produto->getPlataforma();?></td>
        <td><?php echo $produto->getQuantidade();?></td>
    </tr>
<?php
        }
    }else{
        echo "<tr><td colspan='4'> Nenhum Registro Encontrado.</td></tr>";
    }
?>

</table>