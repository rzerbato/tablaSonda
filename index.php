<?php
    require_once('./consulta.php');
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Listado de Lecturas</title>
</head>

<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-10">
                <table class="table table-striped">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">Fecha</th>
                            <th scope="col">Dato1</th>
                            <th scope="col">Dato2</th>
                            <th scope="col">Dato3</th>
                            <th scope="col">Dato4</th>
                            <th scope="col">Dato5</th>
                            <th scope="col">Dato6</th>
                        </tr>
                    </thead>
                    <tbody id="cuerpo">

                        <?php                        
                        foreach ($iterator as $item) {
                            echo '<tr>';
                                $fechaStr = str_replace(' ', '-', substr($item['Fecha']['S'],0,24));
                                $date=date_create_from_format("D-M-j-Y-H:i:s",$fechaStr);
                                date_sub($date,date_interval_create_from_date_string("3 hours"));
                                echo '<td>'.$date->format('d M Y H:i:s').'</td>';
                                echo '<td>'.substr($item['Datos']['S'],0,5).'</td>';
                                echo '<td>'.substr($item['Datos']['S'],5,5).'</td>';
                                echo '<td>'.substr($item['Datos']['S'],10,5).'</td>';
                                echo '<td>'.substr($item['Datos']['S'],15,5).'</td>';
                                echo '<td>'.substr($item['Datos']['S'],20,5).'</td>';
                                echo '<td>'.substr($item['Datos']['S'],25,5).'</td>';
                            echo '</tr>';
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    

</body>

</html>