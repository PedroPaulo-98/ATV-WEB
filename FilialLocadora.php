<html>
    <body background="https://www.wasd.pt/wp-content/uploads/1369161846-xbox-one-16.jpg">
        <h1> Locadoras Filiais </h1>
        <p> Lista de Locadoras Filiais </p>
        <h2> Lista </h2>
        <table>
        <tr>
        <th> CodLocadora </th>
                <th> Nome </th>
                <th> endereço </th>
                <th> CEP </th>
                <th> Telefone </th>
            </tr>
            <tr>
                <td> 0 </td>
                <td> Locadora Xbox mil grau </td>
                <td> Rua 1 </td>
                <td> 99999-999 </td>
                <td> 99999-9999 </td>
            </tr>
            <tr>
                <td> 1 </td>
                <td> Locadora Caxista 100% </td>
                <td> Rua 2  </td>
                <td> 99999-998 </td>
                <td> 99999-9998 </td>
            </tr>
            <tr>
                <td> 2 </td>
                <td> Locadora só Halo </td>
                <td> Rua 3 </td>
                <td> 99999-997 </td>
                <td> 99999-9997 </td>
            </tr>
            <tr>
                <td> 3 </td>
                <td> Locadora Caxista 100% 2  </td>
                <td> Rua 4 </td>
                <td> 99999-996 </td>
                <td> 99999-9996 </td>
            </tr>
            <tr>
                <td> 4 </td>
                <td> Locadora Chief Livre </td>
                <td> Rua 5 </td>
                <td> 99999-995 </td>
                <td> 99999-9995 </td>
            </tr>
            
        </table>
        <h2> Formulario para novas filiais</h2>
        <form>
        Email: <input type = "text" name = "email" size = 32 maxlenght = 20/>
        <br/>
        Senha: <input type = "password" name = "senha" size = 32 maxlenght = 10/>
        <br/>
        Nome: <input type = "text" name = "Nome" size = 32 maxlenght = 20/>
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