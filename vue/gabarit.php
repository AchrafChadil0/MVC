<?php
function arrayToTable($data) {
    
    $table = '<table>';
    $table .= '<tr>';

    foreach (array_keys($data[0]) as $key) {
        $table .= '<th>' . $key . '</th>';
    }
    $table .= '</tr>';

    foreach ($data as $row) {
        $table .= '<tr>';
        foreach ($row as $value) {
        $table .= '<td>' . $value . '</td>';
    }
        $table .= '</tr>';
    }

        $table .= '</table>';
    
    return $table;
}


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Welcome!</h1>

    <style>

    table {
      border-collapse: collapse;
    }
    th, td {
      border: 1px solid black;
      padding: 8px;
    }

    </style>
    
    
</body>
</html>
