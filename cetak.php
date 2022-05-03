<!DOCTYPE HTML>
<html>
    <head>
        <title>Home</title>
        <link rel="stylesheet" type="text/css" href="style.css"/>
    </head>
    <body>
        <h1 align="center">DATA MAHASISWA</h1>
        <table>
            <tr>
                <th> Foto </th>
                <th> ID </th>
                <th> Nama </th>
                <th> Alamat </th>
            </tr>
            <?php
                include "myconnection.php";

                $query = "SELECT * FROM student ";
                $result = mysqli_query($connect , $query);
                
                if(mysqli_num_rows($result) > 0){
                    while($row = mysqli_fetch_array($result)){
            ?>
            <tr>            
                <td> <img width = 100 src=" images/<?php echo $row["foto"]?>" alt=""></td>
                <td> <?php echo $row["id"]; ?> </td>
                <td> <?php echo $row["name"]; ?> </td>
                <td> <?php echo $row["address"]; ?> </td>
            </tr>
            <?php
                    }
                }
            ?>
        </table>
        <script>
                window.print();
        </script>
    </body>
</html>



