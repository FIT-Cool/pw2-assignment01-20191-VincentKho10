<!DOCTYPE html>
<html>
<head>
    <title></title>
    <meta charset="UTF-8" lang="en">
    <meta name="author" content="vincent">
    <meta name="description" content="Web, PHP">
    <link rel="stylesheet" href="plugins/datatables.min.css">
    <link rel="stylesheet" href="index.css">
    <script type="text/javascript" src="plugins/datatables.min.js"></script>
</head>
<body>
<table id="myTable">
    <thead>
    <tr>
        <th>heading1</th>
        <th>heading2</th>
        <th>heading3</th>
    </tr>
    </thead>
    <tbody>
    <tr>
        <td>cont0-0</td>
        <td>cont0-1</td>
        <td>cont0-2</td>
    </tr>
    <tr>
        <td>cont1-0</td>
        <td>cont1-1</td>
        <td>cont1-2</td>
    </tr>
    <tr>
        <td>cont2-0</td>
        <td>cont2-1</td>
        <td>cont2-2</td>
    </tr>
    </tbody>
</table>
<input id="num1" type="text" style="width: 2vw">
<input id="opt" type="text" style="width: 1vw">
<input id="num2" type="text" style="width: 2vw">
<button onclick="calc()">hitung</button>
<p id="hasil">hasil disini</p>

<input id="statement" type="text">
<button onclick="calc2()">hitung</button>
<?php
    $angka1 = 15;
    $angka2 = 3.14;
    $isStudent = true;
    if($angka1 >= 20){
        echo "Angka lebih besar dari 20";
    }
?>

<script type="text/javascript" src="index.js"></script>
<script type="text/javascript">
    $(document).ready( function () {
        $('#myTable').DataTable();
    } );
</script>
</body>
</html>