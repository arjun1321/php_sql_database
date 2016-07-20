<?php 

include('connection.php');


        




?>



<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <title>Password Hashing</title>

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
        
        <h1>Password Hashing</h1>
        
        <?php
        
//            $password = password_hash("mypassword", PASSWORD_DEFAULT );
//            echo $password;
        
            $hashedPassword = '$2y$10$RvHJtKJqH1qDXAKruZPk8.XLnf5rKHMVHx45FvrleC9FqPzYc1UDC';
        
        if( isset( $_POST['login'] ) ) {
            
            if( password_verify( $_POST['password'], $hashedPassword ) ) {
            echo "Password is correct!";
        } else {
            echo "Incorrect password";
        }
            
        }
        
        
        
        ?>
        
        <form action="<?php echo htmlspecialchars( $_SERVER['PHP_SELF'] ); ?>" method="post">
            
            
            <label for="">* Password</label>
            <input type="password" placeholder="Password" name="password"><br><br>
            
            <input type="submit" name="login" value="Log in" class="btn btn-default">
        </form>
        
        
    </div>

    
    

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
  </body>
</html>















