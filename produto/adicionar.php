<?php
if(isset($_POST['botao']) && $_POST['botao'] == "Salvar"){
    include("classes/Produto.class.php");
    include("classes/DB.class.php");

    $produto = new Produto();
    $produto->settipo($_POST['tipo']);
    $produto->setplataforma($_POST['plataforma']);
    $produto->setQuantidade($_POST['quantidade']);
    $produto->adicionar();   

}
?>

<h1>ADICIONAR Produto</h1>

<form method="post" action="">
tipo do jogo: <input type='text' name='tipo'> <br/>
plataforma do jogo: <input type='text' name='plataforma'><br/>
Quantidade do Produto: <input type='text' name='quantidade'><br/>
<input type='submit' name='botao' value="Salvar">
</form>

