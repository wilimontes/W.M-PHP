<?php
$db = new PDO('mysql:host=localhost; dbname=financiera', 'root', 'wilichas123');
$sql = "SELECT * FROM cliente";
$listado = $db->query($sql)->fetchAll(PDO::FETCH_ASSOC);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado - PDO</title>
</head>
<body>
    <?php
        foreach($listado as $cliente):
    ?>
            <h3><?php echo $cliente['razon_social']?></h3>
            <ul>
                <li><?php echo $cliente['direccion']?></li>
            </ul>
    <?php
        endforeach;
    ?>
</body>
</html>