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

    <!-- List.js (it helps to search on website )-->
    <script src="list.js"></script>
    <!-- List.js (it helps to search on website )-->

    <!-- My files -->
    <link rel="stylesheet" href="style.css">
    <script type="text/javascript" src="Scripts.js"></script>
    <!-- My files -->
</head>




<body>
    <div id='firms'>
        <!-- input to search trought database -->
        <input type="text" class="search" placeholder="Search" onfocus="focuss(this)" onblur="blurr(this)">
        <!-- input to search trought database -->
        
        <!-- Table where the results are shown-->
        <table class="table table-hover">
            <thead>
                <tr>
                    <th scope="col">NOME</th>
                    <th scope="col">TLM</th>
                    <th scope="col">MORADA</th>
                    <th scope="col">HORÁRIO</th>
                    <th scope="col">Observações</th>
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
                $n = 0;
                while ($row = mysqli_fetch_array($result)) {

                    echo "<tr>" .
                        "<td class = 'nome'>" . htmlspecialchars($row['NOME']) .
                        "<td class = 'TLM'>" . htmlspecialchars($row['TLM']) .
                        "<td class = 'morada' id = '$n'>" . htmlspecialchars($row['MORADA']);
                    $n = $n + 1;
                    echo "<td class = 'hor_rio'>" . htmlspecialchars($row['HOR_RIO']) .
                        "<td class = 'observa_es' >" . htmlspecialchars($row['Observa_es']) .
                        "<td><button id = '$n' onclick='Mapy(this)'>MAPS</button> </td>
                    </tr>";
                    $n = $n + 1;
                }
                $n = $n * 10;
                echo $n;


                ?>
            </tbody>
        </table>
    </div>
</body>

</html>