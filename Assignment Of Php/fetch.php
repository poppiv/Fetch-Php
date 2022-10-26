<?php



$con=mysqli_connect("localhost","root","","forming");

if(!$con){
  echo "Database Not Connected";
}

?>






<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body
        {
            background-color: #000;
        }
        table
        {
            display: flex;
            justify-content: center;
            border: none;
        }
        table tr th
        {
            height: 4vh;
            width: 150px;
            padding: 10px 20px;
            font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
            background-color: lightgreen;
        }
        table tr td
        {
            padding: 8px 16px;
            font-family:  'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
            background-color: lightblue;
            
        }
    </style>
</head>
<body>

   <div class="container">
    <div class="col-md-8 mx-auto">
        <table class="table table-hover table-striped" border="2">
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Email</th>
                <th>Password</th>
                <th>Country</th>
            </tr>
            <?php
               $query="select * from windo";
               $result=mysqli_query($con,$query);
               while($i=mysqli_fetch_assoc($result)){
                echo "<tr>";
                echo "<td>{$i['Id']}</td>";
                echo "<td>{$i['Name']}</td>";
                echo "<td>{$i['Email']}</td>";
                echo "<td>{$i['Password']}</td>";
                echo "<td>{$i['Country']}</td>";
                echo "</tr>";
               }
            ?>
        </table>
    </div>
   </div>
    
</body>
</html>