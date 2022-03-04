<html>

<head>
    <!-- better looks for all devices-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- better looks for all devices-->

    <!-- bootstrap-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <!-- bootstrap-->
</head>

<body>

<!-- This div is import for list.js work-->
    <div id='firms'>
        <!-- input to search trought website-->
        <input type="select" id='searchinput' class="search" placeholder="Pesquisa, categoria, nome" onfocus="focuss(this)" onblur="blurr(this)">
        <!-- input to search trought website-->
        <!-- Categories -->
        <button style='position:relative' class="btn" type="button" data-toggle="collapse" data-target="#collapse" aria-expanded="false" aria-controls="collapseExample">
            Categoria
        </button>
        <div class="collapse" id="collapse">
            <div class="card card-body">

                <p><button type="button" class="btn btn-secondary" onclick='Category(this)'>Informática</button>
                    <button type="button" class="btn btn-secondary" onclick='Category(this)'>Mecatronica</button>
                    <button type="button" class="btn btn-secondary" onclick='Category(this)'>Eletrónica</button></td>
                    <button type="button" class="btn btn-secondary" onclick='Category(this)'>Clínicas Veterinárias</button>
                    <button type="button" class="btn btn-secondary" onclick='Category(this)'>Quintas Animais</button>
                    <button type="button" class="btn btn-secondary" onclick='Category(this)'>Pastelaria</button>
                    <button type="button" class="btn btn-secondary" onclick='Category(this)'>Logística</button>
                    <button type="button" class="btn btn-secondary" onclick='Category(this)'>Têxtil</button>
                    <button type="button" class="btn btn-secondary" onclick='Category(this)'>CNC</button>
                    <button type="button" class="btn btn-secondary" onclick='Category(this)'>Mecânica</button>
                    <button type="button" class="btn btn-secondary" onclick='Category(this)'>Aeroporto</button>
                    <button type="button" class="btn btn-secondary" onclick='Category(this)'>Estética</button>
                    <button type="button" class="btn btn-secondary" onclick='Category(this)'>Ginásios</button>
                    <button type="button" class="btn btn-secondary" onclick='Category(this)'>Turismo</button>
                    <button type="button" class="btn btn-secondary" onclick='Category(this)'>Restauração</button>
                    <button type="button" class="btn btn-secondary" onclick='Category(this)'>Publicidade</button>
                    <button type="button" class="btn btn-secondary" onclick='Category(this)'>Expedição</button>
                    <button type="button" class="btn btn-secondary" onclick='Category(this)'>Alarmes</button>
                    <button type="button" class="btn btn-secondary" onclick='Category(this)'>Cabeleireiros</button>
                    <button type="button" class="btn btn-secondary" onclick='Category(this)'>Construção</button>
                    <button type="button" class="btn btn-secondary" onclick='Category(this)'>Associações</button>
                    <button type="button" class="btn btn-secondary" onclick='Category(this)'>Serralharia</button>
                    <button type="button" class="btn btn-secondary" onclick='Category(this)'>Carpintaria</button>
                    <button type="button" class="btn btn-secondary" onclick='Category(this)'>Comércio</button>
                    <button type="button" class="btn btn-secondary" onclick='Category(this)'>Economia</button>
                    <button type="button" class="btn btn-secondary" onclick='Category(this)'>Arquitetura paisagistica</button>
                    <button type="button" class="btn btn-secondary" onclick='Category(this)'>Imobiliária</button>
                    <button type="button" class="btn btn-secondary" onclick='Category(this)'>Arte</button>
                    <button type="button" class="btn btn-secondary" onclick='Category(this)'>Química</button>
                    <button type="button" class="btn btn-secondary" onclick='Category(this)'>Topografos</button>
                    <button type="button" class="btn btn-secondary" onclick='Category(this)'>Impressão</button>
                    <button type="button" class="btn btn-secondary" onclick='Category(this)'>Flexografia</button>
                </p>
            </div>
        </div>
        <!-- Categories -->

        <!-- Table where the results are shown-->
        <table class="table table-hover">
            <thead>
                <tr>
                    <th scope="col">NOME</th>
                    <th scope="col">MORADA</th>
                    <th scope="col">Google Maps</th>
                </tr>
            </thead>

            <tbody class='list'>
                <?php
                $conn = mysqli_connect(
                    'localhost',
                    'root',
                    '',
                    'drivers project'
                );
                $querry = "SELECT * FROM companies_contacts ";
                $result = mysqli_query($conn, $querry);
                // 'n' is the special id that is asigned to the morada and maps 
                $n = 0;
                //Loop to show all of the sql tables
                while ($row = mysqli_fetch_array($result)) {
                    echo "<tr>" .
                        "<td class = 'categoria'>" . htmlspecialchars($row['Categoria']) . "</td>" .
                        "<td class = 'nome'>" . htmlspecialchars($row['NOME']) . "</td>" .
                        "<td id = '$n'>" . htmlspecialchars($row['MORADA']) . "</td>";
                    $n = $n + 1;
                    echo "<td><button id = '$n' onclick='Mapy(this)'>MAPS</button> </td>
                    </tr>";
                    $n = $n + 1;
                }


                ?>
            </tbody>
        </table>
        <!-- Table where the results are shown-->
    </div>
<!-- This div is import for list.js work-->

    <!-- List.js (it helps to search on the website modifying table in realtime )-->
    <script src="list.js"></script>
    <!-- List.js (it helps to search on the website modifying table in realtime )-->

    <!-- My files -->
    <script type="text/javascript" src="Scripts.js"></script>
    <link rel="stylesheet" href="style.css">
    <!-- My files -->
</body>

</html>