<html>
    <body background="https://www.wasd.pt/wp-content/uploads/1369161846-xbox-one-16.jpg">
        <h1> Aluguel </h1>

                

        <?php     
        $dia = $_POST['Dia'];
        $mes = $_POST['Mes'];
        $ano =  $_POST["Ano"];
        $CodJogo =  $_POST["Codigo do Jogo"];
        $status =  $_POST["status"];  
        $FormaDePagamento =  $_POST["FormaDePagamento"];           
        ?>
        <h2>
        Codigo do Jogo(s): <?php echo $CodJogo; ?>  
        Data: <?php echo $dia."/".$mes."/".$ano?> <br/>       
        Status do pedido: <?php echo $status; ?> <br/> 
        Metodo de pagamento no totem: <?php echo $FormaDePagamento; ?><br/>
        </h2>
                  

        <p> Identificar aluguel de jogos</p>
        <h2> Lista </h2>
        <?php
        $JogosAlugados = array();
        $JogosAlugados[] = array("codigoDoAluguel" => 0, "Nome" => "Halo MC", "data" => '24/02/2020', "Status" => "Alugado", "FormaDePagamento" => "Boleto", "CodJogo" => "0");
        $JogosAlugados[] = array("codigoDoAluguel" => 1, "Nome" => "Call of Duty MW3", "data" => '24/02/2020', "Status" => "Alugado", "FormaDePagamento" => "Pix", "CodJogo" => "1");
        $JogosAlugados[] = array("codigoDoAluguel" => 2, "Nome" => "Lego Batman 2", "data" => '24/02/2020', "Status" => "Esperando buscar", "FormaDePagamento" => "Cartão", "CodJogo" => "2");
        $JogosAlugados[] = array("codigoDoAluguel" => 3, "Nome" => "Metal Gear Solid HD", "data" => '24/02/2020', "Status" => "Não Alugado", "FormaDePagamento" => "Dinheiro", "CodJogo" => "3");
        $JogosAlugados[] = array("codigoDoAluguel" => 4, "Nome" => "far cry 3", "data" => '24/02/2020', "Status" => "Concluido", "Alugado" => "Cartão", "CodJogo" => "4");

        ?>
                <table>
            <tr>
                <th> CodigoDoAluguel </th>
                <th> Nome </th>
                <th> Data </th>
                <th> Status </th>
                <th> FormaDePagamento </th>
                <th> CodJogo </th>
            </tr>

            <?php
            foreach($JogosAlugados as $JogosAlugados){
            ?>
            <tr>
                <td> <?php echo $JogosAlugados["codigoDoAluguel"] ?> </td>
                <td> <?php echo $JogosAlugados["Nome"] ?> </td>
                <td> <?php echo $JogosAlugados["data"] ?> </td>
                <td> <?php echo $JogosAlugados["Status"] ?> </td>
                <td> <?php echo $JogosAlugados["FormaDePagamento"] ?> </td>
                <td> <?php echo $JogosAlugados["CodJogo"] ?> </td>
            </tr>
            <?php
            }
            ?>

            

        </table>
        <h2> Formulario para pegar no Totem na loja </h2>
        <form>      
        Data: <input type = "text" name = "Dia" size = 4 maxlenght = 4/>       
        /<input type = "text" name = "Mes" size = 4 maxlenght = 4/>
        /<input type = "text" name = "Ano" size = 4 maxlenght = 4/>

        <br/>
        <br/>      
        Metodo de pagamento no totem: <Select name = "pagamento">
            <option value = "Cartão"> Cartão </option>
            <option value = "Pix"> Pix </option> 
            <option value = "Boleto"> Boleto </option>  
            <option value = "Dinheiro"> Dinheiro </option>          
        </Select>
        <br/>
        <br/>
        Status: <Select name = "status">
            <option value = "Alugado"> Alugado </option>
            <option value = "Não Alugado"> Não Alugado </option> 
            <option value = "Esperando buscar"> Esperando buscar </option>          
        </Select>
        <br/>
        <br/>
        Codigo do Jogo: <input type = "text" name = "CodJogo" size = 5 maxlenght = 5/>
        <br/>
        <br/>
        <input type = "submit" name = "botaoEnviar" value = "Cadastrar"/> 
        
        

        </form>
    </body>
</html>
