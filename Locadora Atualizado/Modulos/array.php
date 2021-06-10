<html>
    <body>
        <?php
        $testeArray = array();
        $testeArray[] = array("codigoDoCliente" => 0, "email" => 'PedroP@gmail.com', "senha" => "11111a", "cep" => "99999-999", "telefone" => "99999-9999");
        $testeArray[] = array("codigoDoCliente" => 1, "email" => 'carlos@gmail.com', "senha" => "22222b", "cep" => "99999-998", "telefone" => "99999-9998");
        $testeArray[] = array("codigoDoCliente" => 2, "email" => 'Jorje@gmail.com', "senha" => "33333c", "cep" => "99999-997", "telefone" => "99999-9997");
        $testeArray[] = array("codigoDoCliente" => 2, "email" => 'Felipe@gmail.com', "senha" => "44444d", "cep" => "99999-996", "telefone" => "99999-9996");
        $testeArray[] = array("codigoDoCliente" => 2, "email" => 'smith@gmail.com', "senha" => "55555e", "cep" => "99999-995", "telefone" => "99999-9995");
        
        
        
        echo "<pre>";
        print_r($testeArray);
        echo "</pre>";
        ?>

        <table>
            <tr>
                <th> CodigoDoCliente </th>
                <th> Email </th>
                <th> Endereco </th>
                <th> CEP </th>
                <th> Telefone </th>
            </tr>
            <?php
            foreach($testeArray as $teste){
            ?>
            <tr>
                <td> <?php echo $teste["codigoDoCliente"] ?> </td>
                <td> <?php echo $teste["email"] ?> </td>
                <td> <?php echo $teste["senha"] ?> </td>
                <td> <?php echo $teste["cep"] ?> </td>
                <td> <?php echo $teste["telefone"] ?> </td>
            </tr>
            <?php
            }
            ?>
        </table>
    </body>
</html>