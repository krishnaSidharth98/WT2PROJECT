<?php

    /*echo $_GET["movie_name"];
    echo "<br />";
    echo $_GET["year"];
    echo "<br />";
    echo $_GET["rating"];
    echo "<br />";*/
    $servername = "localhost";
    $username = "root";
    $password = "";
    $conn = mysqli_connect($servername, $username, $password, "dbx");
    $Movie = $_GET["movie_name"];
    $Year = $_GET["year"];
    $Rating = $_GET["rating"];
    $query = "SELECT Title from movies where (Year='$Year' and Rating>='$Rating')";

    $res =  (mysqli_query($conn, $query));
    $k = (mysqli_fetch_assoc($res));
    while ($k!= NULL) 
      var_dump ($k);
      $k = (mysqli_fetch_assoc($res));
    }

 ?>