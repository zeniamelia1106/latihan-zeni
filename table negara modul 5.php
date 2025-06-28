<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Negara ASEAN, Ibukota & Kode</title>
    <style>
        table, th, td {
            border: 1px solid black;
            border-collapse: collapse;
            padding: 8px;
        }
    </style>
</head>
<body>
<table>
    <tr>
        <th>Negara</th>
        <th>Ibukota</th>
        <th>Kode Telepon</th>
    </tr>
    <?php
    $asean = [
        ["negara" => "Indonesia",  "ibukota" => "D.K.I. Jakarta",     "kode" => "+62"],
        ["negara" => "Singapura",  "ibukota" => "Singapura",          "kode" => "+65"],
        ["negara" => "Malaysia",   "ibukota" => "Kuala Lumpur",       "kode" => "+60"],
        ["negara" => "Brunei",     "ibukota" => "Bandar Seri Begawan","kode" => "+673"],
        ["negara" => "Thailand",   "ibukota" => "Bangkok",            "kode" => "+66"],
        ["negara" => "Laos",       "ibukota" => "Vientiane",          "kode" => "+856"],
        ["negara" => "Filipina",   "ibukota" => "Manila",             "kode" => "+63"],
        ["negara" => "Myanmar",    "ibukota" => "Naypyidaw",          "kode" => "+95"]
    ];

    foreach ($asean as $data) {
        echo "<tr>";
        echo "<td>" . $data["negara"] . "</td>";
        echo "<td>" . $data["ibukota"] . "</td>";
        echo "<td>" . $data["kode"] . "</td>";
        echo "</tr>";
    }
    ?>
</table>
</body>
</html>
