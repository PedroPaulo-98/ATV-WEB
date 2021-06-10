<html>
    <body background="https://www.wasd.pt/wp-content/uploads/1369161846-xbox-one-16.jpg">
        <h1> Jogos </h1>
        
        <?php     
        $nome = $_POST['nome'];
        $tipo = $_POST['tipo'];
        $plataforma =  $_POST["plataforma"];
        $Multiplayer =  $_POST["Multiplayer"];                 
        ?>

        <h2>
        Nome: <?php echo $nome; ?> <br/>       
        Tipo: <?php echo $tipo; ?><br/>
        Plataforma: <?php echo $plataforma; ?> <br/> 
        Multiplayer: <?php echo $Multiplayer; ?>  
        </h2>

        <p> Jogos cadastrados na locadora </p>
        <h2> Lista </h2>
        <?php
        $Jogo = array();
        $Jogos[] = array("codJogo" => 0, "NomeDoJogo" => 'Halo MC', "Tipo" => "FPS", "Plataforma" => "Xbox One", "Multiplayer" => "Online e Local");
        $Jogo[] = array("codJogo" => 1, "NomeDoJogo" => 'Call of Duty MW3', "Tipo" => "FPS", "Plataforma" => "Xbox one e 360", "Multiplayer" => "Online e Local");
        $Jogo[] = array("codJogo" => 2, "NomeDoJogo" => 'Lego Batman 2', "Tipo" => "Infantil", "Plataforma" => "Xbox 360", "Multiplayer" => "Local");
        $Jogo[] = array("codJogo" => 3, "NomeDoJogo" => 'Metal Gear Solid HD ', "Tipo" => "Stealth", "Plataforma" => "Xbox one e 360", "Multiplayer" => "Não tem");
        $Jogo[] = array("codJogo" => 4, "NomeDoJogo" => 'far cry 3', "Tipo" => "FPS", "Plataforma" => "Xbox one e 360", "Multiplayer" => "Online e Local");

        ?>
        <table>
            <tr>
                <th> Fotos </th>
            <tr>
                <th> <img src="https://media.gamestop.com/i/gamestop/10115398/Halo-The-Master-Chief-Collection?$pdp$&bg=rgb(0,0,0)" width="300" > </th>
            </tr>
            <tr>
            <th> <img src="https://media.gamestop.com/i/gamestop/10091051/Call-of-Duty-Modern-Warfare-3?$pdp$&bg=rgb(0,0,0)" width="300" > </th>   
            </tr>
            <tr>
            <th> <img src="https://images.tcdn.com.br/img/img_prod/842845/jogo_xbox_360_novo_lego_batman_2_dc_super_heroes_2605_1_cbfc22bf250ee3e9dab4dcd8beeb6dbb.jpg" width="300" > </th>
            </tr>
            <tr>
            <th> <img src="https://images-na.ssl-images-amazon.com/images/I/81dW0SiAn1L._AC_SL1500_.jpg" width="300" > </th>
            </tr>
            <tr>
            <th> <img src="https://images-na.ssl-images-amazon.com/images/I/91%2BXb6CXvFL._AC_SX385_.jpg" width="300" >  </th>
            </tr>
        </table>
        <table>
            <tr>
                <th> codJogo </th>
                <th> NomeDoJogo </th>
                <th> Tipo </th>
                <th> Plataforma </th>
                <th> Multiplayer </th>
            </tr>

            <?php
            foreach($Jogos as $Jogo){
            ?>
            <tr>
                <td> <?php echo $Jogo["codigoDoProduto"] ?> </td>
                <td> <?php echo $Jogo["NomeDoJogo"] ?> </td>
                <td> <?php echo $Jogo["Tipo"] ?> </td>
                <td> <?php echo $Jogo["Plataforma"] ?> </td>
                <td> <?php echo $Jogo["Multiplayer"] ?> </td>
            </tr>
            <?php
            }
            ?>

        </table>
        <h2> Formulario </h2>
        <form method = "post">
        Nome:  <input type = "text" name = "nome" size = 32 maxlenght = 20/>
        <br/>      
        tipo: <Select name = "tipo">
            <option value = "FPS"> FPS </option>
            <option value = "Infantil"> Infantil </option> 
            <option value = "Stealth"> Stealth </option>          
        </Select>
        <br/>
        Plataforma: <Select name = "Plataforma">
            <option value = "Xbox one"> Xbox one </option>
            <option value = "Xbox 360"> Xbox 360 </option> 
            <option value = "Xbox one e 360"> Xbox one e 360 </option>  
        <br/>
        Multiplayer: <Select name = "Multiplayer"> 
            <option value = "Online"> Online </option>
            <option value = "Local"> Local </option>
            <option value = "Não tem"> Não tem </option> 
            <option value = "Online e Local"> Online e Local </option>          
        <br/>
        <br/>
        <input type = "submit" name = "botaoEnviar" value = "Cadastrar"/> 

        </form>
    </body>
</html>