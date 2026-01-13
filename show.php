<?php
session_start();
if (isset($_SESSION["lemail"])) {
    $lemail = $_SESSION["lemail"];
    $middle = substr($lemail, 3, 5);
    if (isset($_COOKIE[$middle])) {
        echo "<body style=\"background-color:".$_COOKIE[$middle]."\"></body>";
    } else {
        echo "Cookie not set.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<style>
  body{
    background-color: <?= $bgCol ?>;
  }
    table{
        width: 50%;
        border-collapse: collapse;
        margin: 20px auto;
    }

    th, td{
        border: 1px solid black;
        padding: 10px;
        text-align: center;
        background-color: white;
    }

    th{
        background-color: green;
        color: white;
    }

    h2{
        text-align: center;
        Background-color: white;
    }
    .back{
        display: flex;
        justify-content: center;
        align-items: center;
    }
    button{
        width: 100px;
        height: 40px;
        background-color: red;
        color: white;
        border: 1px solid black;
        border-radius: 5px;
        font-size: 1.1rem;
    }
   
</style>

<body>
    

<?php

    if (isset($_POST["submitCheck"])){

        $j=1;
        $conn = mysqli_connect('localhost', 'root', '', 'aqi');

        echo "<h2>Selected Cities AQI Report</h2>";
        echo "<table>";
        echo "
        <thead>
            <tr>
                <th>Serial</th>
                <th>City</th>
                <th>Country</th>
                <th>AQI</th>
            </tr>
        </thead>
        <tbody>";

        for($i=1; $i<=20; $i++){
            if(isset($_POST["city".$i])){
                $sql = "SELECT *FROM info where id=$i";
                $result = mysqli_query($conn, $sql);
                $row = mysqli_fetch_array($result, MYSQLI_ASSOC);

                echo "<tr>";
                echo "<td>" . $j . "</td>";
                echo "<td>" . $row["city"] . "</td>";
                echo "<td>" . $row["country"] . "</td>";
                echo "<td>" . $row["aqi"] . "</td>";
                echo "</tr>";
                $j++;
            }

        }

        echo "</tbody>
        </table>";

        echo '
        <div class="back">
        <a href="require.php"><button>Back</button></a>
        </div>';
    }

?>



</body>
</html>

