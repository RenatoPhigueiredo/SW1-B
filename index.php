<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>primeira aula</title>
</head>
<body>
    <?php
    $minhaLista=[];
    $minhaLista[]="laranja";
    $minhaLista[]="maça";
    $minhaLista[]="maverick";
    $minhaLista[]="civicSI";

    echo"<pre>";
    print_r($minhaLista);

    echo"<ol>";
    for ($i =0; $i < count($minhaLista); $i++)
    {
        echo"<li>$minhaLista[$i]</li>";
    }
    echo"</ol>";

    echo"<table border='2'>";
    foreach($minhaLista as $item)
    {
        echo"<tr><td>$item</td></tr>";

    }
    echo"</table>";

    $professores=[];
    $professores[]=["ID" => "1", "nome"=>"renato", "ativo"=>"1"];
    $professores[]=["ID" => "2", "nome"=>"maria", "ativo"=>"1"];
    $professores[]=["ID" => "3", "nome"=>"lacerda", "ativo"=>"0"];

    echo"<table border='2'>";
    foreach($professores as $professor)
    {
        echo"
        <tr>
            <td>$professor[ID]</td>
            <td>$professor[nome]</td>
            <td>$professor[ativo]</td>
        </tr>
        ";
    }
    
    echo"</table>";

    ?>

    
</body>
</html>