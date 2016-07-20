<?php 

include('connection.php');

$query = "SELECT * FROM users";

$result = mysqli_query( $conn, $query );



?>



<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <title>MySQL Select</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    
    <div class="container">
        
        <h1>MySQL Select</h1>
        
        <?php
        
        if( mysqli_num_rows($result) > 0 ) {
    
    // we have data
    // output the data
    
    echo "<table class='table table-bordered'><tr><th>ID</th><th>Username</th><th>Email</th></tr>";
    
    while( $row = mysqli_fetch_assoc($result) ) {
        echo "<tr><td>". $row["id"] . "</td><td>" . $row["username"]. "</td><td>". $row["email"]."</td></tr>";
    }
    
    echo "</table>";
    
} else {
    echo "Ooops! No results.";
}

mysqli_close($conn);
        ?>
        
        
    </div>

    
    

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
  </body>
</html>















