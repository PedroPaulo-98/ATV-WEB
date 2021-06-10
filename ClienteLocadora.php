<html>
    <body background="https://www.wasd.pt/wp-content/uploads/1369161846-xbox-one-16.jpg">
        <h1> Cadastro de Cliente </h1>
        <p> Modulo de cadastro de cliente para alugar Jogos </p>
        <h2> Lista </h2>
        <table>
        <tr>
        <th> CodigoDoCliente </th>
                <th> Email </th>
                <th> Endereco </th>
                <th> CEP </th>
                <th> Telefone </th>
            </tr>
            <tr>
                <td> 0 </td>
                <td> PedroP@gmail.com </td>
                <td> Rua 1 </td>
                <td> 99999-999 </td>
                <td> 99999-9999 </td>
            </tr>
            <tr>
                <td> 1 </td>
                <td> carlos@gmail.com </td>
                <td> Rua 2  </td>
                <td> 99999-998 </td>
                <td> 99999-9998 </td>
            </tr>
            <tr>
                <td> 2 </td>
                <td> Jorje@gmail.com </td>
                <td> Rua 3 </td>
                <td> 99999-997 </td>
                <td> 99999-9997 </td>
            </tr>
            <tr>
                <td> 3 </td>
                <td> Felipe@gmail.com </td>
                <td> Rua 4 </td>
                <td> 99999-996 </td>
                <td> 99999-9996 </td>
            </tr>
            <tr>
                <td> 4 </td>
                <td> smith@gmail.com </td>
                <td> Rua 5 </td>
                <td> 99999-995 </td>
                <td> 99999-9995 </td>
            </tr>
            
        </table>
        <h2> Formulario </h2>
        <form>
        Email: <input type = "text" name = "email" size = 32 maxlenght = 20/>
        <br/>
        Senha: <input type = "password" name = "senha" size = 32 maxlenght = 10/>
        <br/>
        CEP:     <input type = "text" name = "CEP" size = 32 maxlenght = 20/>
        <br/>
        <br/>
        Xbox é o melhor console? <input type = "Radio" name = "resposta" value = "True"/> Sim <input type = "Radio" name = "resposta" value = "False"/> Não
        <br/>
        Qual console é melhor? (possivel cancelamento de cadastro) <Select name = "Resposta">
            <option value = "True"> Xbox </option>
            <option value = "False"> Playbosta </option>           
        </Select>
        <br/>
        <br/>
        <input type = "submit" name = "botaoEnviar" value = "Cadastrar"/> 
        

        </form>
    </body>
</html>