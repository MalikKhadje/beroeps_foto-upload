
<?php
// Initialize the session
session_start();
 
if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
   header("location: poep.php");
   exit;
}
 
// Include config file
require_once "config.php";
 
// Define variables and initialize with empty values
$username = $password = "";
$username_err = $password_err = $login_err = "";
 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
 
    // Check if username is empty
    if(empty(trim($_POST["Naam"]))){
        $username_err = "Please enter username.";
    } else{
        $username = trim($_POST["Naam"]);
    }
    
    // Check if password is empty
    if(empty(trim($_POST["Wachtwoord"]))){
        $password_err = "Please enter your password.";
    } else{
        $password = trim($_POST["Wachtwoord"]);
    }
    
    // Validate credentials
    if(empty($username_err) && empty($password_err)){
        // Prepare a select statement
        $sql = "SELECT ID, Naam, Wachtwoord FROM User WHERE Naam = ?";
        
        if($stmt = $mysqli->prepare($sql)){
            // Bind variables to the prepared statement as parameters
            $stmt->bind_param("s", $param_username);
            
            // Set parameters
            $param_username = $username;
            
            // Attempt to execute the prepared statement
            if($stmt->execute()){
                // Store result
                $stmt->store_result();
                
                // Check if username exists, if yes then verify password
                if($stmt->num_rows == 1){                    
                    // Bind result variables
                    $stmt->bind_result($id, $username, $hashed_password);
                    if($stmt->fetch()){
                        if(password_verify($password, $hashed_password)){
                            // Password is correct, so start a new session
                            session_start();
                            
                            // Store data in session variables
                            $_SESSION["loggedin"] = true;
                            $_SESSION["ID"] = $id;
                            $_SESSION["Naam"] = $username;                            
                            
                            // Redirect user to welcome page
                            header("location: poep.php");
                        } else{
                            // Password is not valid, display a generic error message
                            $login_err = "Invalid username or password.";
                        }
                    }
                } else{
                    // Username doesn't exist, display a generic error message
                    $login_err = "Invalid username or password.";
                }
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }

            // Close statement
            $stmt->close();
        }
    }
    
    // Close connection
    $mysqli->close();
}
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="../css/login.css">
    <meta charset="UTF-8">
    <title>Login</title>
    <style>
        body{ font: 14px sans-serif; }
        .wrapper{ width: 360px; padding: 20px; }
    </style>
</head>
<div id="logo">
        <img src="../images/logo.png" class="logo" alt="">
    </div>
<h1 class="titel">LOGIN</h1>
<body>
    <div class="container">

        <?php 
        if(!empty($login_err)){
            echo '<div class="alert alert-danger">' . $login_err . '</div>';
        }        
        ?>

        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <div class="wrap">
                <label class="label">NAAM</label><br>
                <input type="text" name="username"  placeholder="NAAM" class="form-control input <?php echo (!empty($username_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $username; ?>">
                <span class="invalid-feedback"><?php echo $username_err; ?></span>
            </div>
            <br><br>
            <div class="wrap">
                <label class="label">WACHTWOORD</label><br>
                <input type="password" name="password" placeholder="WACHTWOORD" class="form-control input <?php echo (!empty($password_err)) ? 'is-invalid' : ''; ?>">
                <span class="invalid-feedback"><?php echo $password_err; ?></span>
            </div><br>
            <div class="wrap">
                <input type="submit" class="login-knop" value="LOGIN">
            </div>
        </form>
    </div>
</body>
</html>