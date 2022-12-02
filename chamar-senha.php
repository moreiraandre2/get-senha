<?php
$str = file_get_contents('senhas-chamadas.json');

$data = json_decode($str, true);

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GetSenha</title>
</head>
<body>
    <form action="chamar.php" method="get">
        <button type="submit">chamar</button>
    </form>
<ul >
    <?php
        foreach($data as $row) {
            echo "<li>$row</li>";
        }
    ?>
</ul>

</body>
</html>