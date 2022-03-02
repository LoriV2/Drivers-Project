<html>

<head>
    <!-- bootstrap-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <!-- bootstrap-->
    <!-- My files -->
    <link rel="stylesheet" href="style.css">
    <script type="text/javascript" src="Scripts.js"></script>
    <!-- My files -->
</head>

<!-- this is the category list wich will help to search faster -->
<form action="php.php" method="POST">
    <input list="Category" placeholder="Categoria" id="Categoria" onblur="blurr(this)" onfocus="focuss(this)">
    <datalist id="Category" name='Categoriia'>
        <option value="Alarmes"></option>
        <option value="Aeroporto"></option>
        <option value="Arquitetura paisagistica"></option>
        <option value="Arte"></option>
        <option value="Associações"></option>
        <option value="Cabeleireiros"></option>
        <option value="Carpintaria"></option>
        <option value="Clínicas Veterinárias"></option>
        <option value="CNC"></option>
        <option value="Comércio"></option>
        <option value="Construção"></option>
        <option value="Economia"></option>
        <option value="Eletrónica"></option>
        <option value="Estética"></option>
        <option value="Expedição"></option>
        <option value="Flexografia"></option>
        <option value="Ginásios"></option>
        <option value="Imobiliária"></option>
        <option value="Cabeleireiros"></option>
        <option value="Impressão"></option>
        <option value="Informática"></option>
        <option value="Logística"></option>
        <option value="Mecânica"></option>
        <option value="Mecatronica"></option>
        <option value="Pastelaria"></option>
        <option value="Publicidade"></option>
        <option value="Química"></option>
        <option value="Quintas Animais"></option>
        <option value="Restauração"></option>
        <option value="Serralharia"></option>
        <option value="Têxtil"></option>
        <option value="Topografos"></option>
        <option value="Turismo"></option>
    </datalist>
    <!-- this is the category list wich will help to search faster -->

    <!-- input to search trought database -->
    <input type="text" name='seearch' id="search" placeholder="Nome da companhia" onfocus="focuss(this)" onblur="blurr(this)">
    <!-- input to search trought database -->
    <input type='submit'>
</form>

<body>

    <!-- Table where the results are shown-->
    <table class="table table-hover">
        <thead>
            <tr>
                <th scope="col">NOME</th>
                <th scope="col">RESPONSÁVEL</th>
                <th scope="col">TLM</th>
                <th scope="col">MORADA</th>
                <th scope="col">HORÁRIO</th>
                <th scope="col">EMAIL</th>
                <th scope="col">Restaurantes</th>
                <th scope="col">Descrição da empresa</th>
                <th scope="col">Observações</th>
                <th scope="col">Google Maps</th>
            </tr>
        </thead>

        <tbody>
            <?php
            $conn = mysqli_connect(
                'localhost',
                'root',
                '',
                'drivers project'
            );

            $querry = "SELECT * FROM companies_contacts ";
            $result = mysqli_query($conn, $querry);
            $n = 1;
            while ($row = mysqli_fetch_array($result)) {

                echo "<tr>" . "<td>" . htmlspecialchars($row['NOME']) .
                    "<td>" . htmlspecialchars($row['RESPONS_VEL']) .
                    "<td>" . htmlspecialchars($row['TLM']) .
                    "<td id = '$n'>" . htmlspecialchars($row['MORADA']);
                $n = $n + 1;
                echo "<td>" . htmlspecialchars($row['HOR_RIO']) .
                    "<td>" . htmlspecialchars($row['EMAIL']) .
                    "<td>" . htmlspecialchars($row['Restaurantes']) .
                    "<td>" . htmlspecialchars($row['Descri_o_da_empresa']) .
                    "<td>" . htmlspecialchars($row['Observa_es']) .
                    "<td><button id = '$n' onclick='Mapy(this)'>MAPS</button> </td></tr>";
                $n = $n + 1;
            }


            ?>
        </tbody>
    </table>
</body>

</html>