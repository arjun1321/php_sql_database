<?php 

include('connection.php');

$username = $email = $password = null;
$nameError = $emailError = $passwordError = null;

 if( isset( $_POST["add"] ) ) {

        // build a function that validates data
        function validateFormData( $formData ) {
            $formData = trim( stripcslashes( htmlspecialchars( $formData ) ) );
            
            return $formData;
        }
        
        if(!$_POST["username"]) {
            $nameError = "Please enter username <br>";
            
        } else {
            $username = validateFormData( $_POST["username"] );
        }
        
        
        if(!$_POST["email"]) {
            $emailError = "Please enter your email <br>";
        } else {
            $email = validateFormData( $_POST["email"] );
        }
        
        
        if( !$_POST["password"] ) {
            $passwordError = "Please enter a password <br>";
        } else {
            $password = validateFormData( $_POST["password"] );
        }
    }

if( $username && $email && $password ) {
    
    $query = "INSERT INTO users (id, username, password, email, sign_update, biography) VALUES (NULL, '$username', '$password', '$email', CURRENT_TIMESTAMP, 'Hello! I\'m Jackson. This is my bio.')";
    
    if( mySqli_query( $conn, $query ) ) {
                echo "<div class='alert alert-success'>New record in database!</div>";
            } else {
                echo "Error: ". $query . "<br>" . mysqli_error($conn);
            }
}





?>



<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <title>MySQL Insert</title>

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
        
        <h1>MySQL Insert</h1>
        
        <?php
           
        
        
        
        
        
        
        ?>
        <p class="text-danger">* Required fields</p>
        
        <form action="<?php echo htmlspecialchars(  $_SERVER["PHP_SELF"]); ?>" method="post">
           
           <small class="text-danger">* <?php echo $nameError; ?></small>
            <input type="text" placeholder="Username" name="username"><br><br>
            
            <small class="text-danger">* <?php echo $emailError; ?></small>
            <input type="text" placeholder="Email" name="email"><br><br>
            
            <small class="text-danger">* <?php echo $passwordError; ?></small>
            <input type="password" placeholder="Password" name="password"><br><br>
            
            <input type="submit" name="add" value="Add Entry">
        </form>
        
    </div>

    
    

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
  </body>
</html>















