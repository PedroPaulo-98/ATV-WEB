<html>
    <body background="https://www.wasd.pt/wp-content/uploads/1369161846-xbox-one-16.jpg">
        <h1> Cadastro de Cliente </h1>
                

        <?php     
        $email = $_POST['email'];
        $senha = $_POST['senha'];
        $cep =  $_POST["CEP"];      
        ?>

        <h2>
        Email: <?php echo $email; ?> <br/> 
        Senha: <?php echo $senha; ?>  <br/>
        Cep: <?php echo $cep; ?>   
        </h2>
               
        
        <p> Modulo de cadastro de cliente para alugar Jogos </p>
        <h2> Lista </h2>
        <?php
        $Clientes = array();
        $Clientes[] = array("codigoDoCliente" => 0, "email" => 'PedroP@gmail.com', "Endereco" => "Rua 1", "cep" => "99999-999", "telefone" => "99999-9999");
        $Clientes[] = array("codigoDoCliente" => 1, "email" => 'carlos@gmail.com', "Endereco" => "Rua 2", "cep" => "99999-998", "telefone" => "99999-9998");
        $Clientes[] = array("codigoDoCliente" => 2, "email" => 'Jorje@gmail.com', "Endereco" => "Rua 3", "cep" => "99999-997", "telefone" => "99999-9997");
        $Clientes[] = array("codigoDoCliente" => 3, "email" => 'Felipe@gmail.com', "Endereco" => "Rua 4", "cep" => "99999-996", "telefone" => "99999-9996");
        $Clientes[] = array("codigoDoCliente" => 4, "email" => 'smith@gmail.com', "Endereco" => "Rua 5", "cep" => "99999-995", "telefone" => "99999-9995");

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
            foreach($Clientes as $cliente){
            ?>
            <tr>
                <td> <?php echo $cliente["codigoDoCliente"] ?> </td>
                <td> <?php echo $cliente["email"] ?> </td>
                <td> <?php echo $cliente["Endereco"] ?> </td>
                <td> <?php echo $cliente["cep"] ?> </td>
                <td> <?php echo $cliente["telefone"] ?> </td>
            </tr>
            <?php
            }
            ?>
           
            
        </table>
        <h2> Formulario </h2>
        <form method="post">
        Email: <input type = "text" name = "email" size = 32 maxlenght = 20/>
        <br/>
        Senha: <input type = "password" name = "senha" size = 32 maxlenght = 10/>
        <br/>
        CEP:     <input type = "text" name = "CEP" size = 32 maxlenght = 20/>
        <br/>
        <br/>          
        </Select>
        <br/>
        <br/>
        <input type = "submit" name = "botaoEnviar" value = "Cadastrar"/> 
        
        </form>
    </body>
</html>