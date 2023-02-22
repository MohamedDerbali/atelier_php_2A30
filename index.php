<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $arr = [20, "hello", true, 3.14, "world"];
    $arr2 = ["name" => "ali", "age" => 20, "city" => "tunis"];
    array_push($arr, $arr2);
    // var_dump($arr);
    echo '<table border="1">
    <thead>
        <th>index</th>
        <th>value</th>
    </thead>
    <tbody>';
    for ($i = 0; $i < count($arr); $i++) {
        if (is_array($arr[$i])) {
            echo '<tr>
        <td>' . $i . '</td>
        <td>{name:' . $arr[$i]["name"] . ', age:' . $arr[$i]["age"] . ', city:' . $arr[$i]["city"] . '}</td>
        </tr>';
        } else {
            echo '<tr>
        <td>' . $i . '</td>
        <td>' . $arr[$i] . '</td>
        </tr>';
        }
    }
    echo
        '</tbody>
</table>';
    ?>


</body>

</html>