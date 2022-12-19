
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
    if(empty(trim($_POST["username"]))){
        $username_err = "PLEASE ENTER YOUR USERNAME";
    } else{
        $username = trim($_POST["username"]);
    }
    
    // Check if password is empty
    if(empty(trim($_POST["password"]))){
        $password_err = "PLEASE ENTER YOUR PASSWORD";
    } else{
        $password = trim($_POST["password"]);
    }
    
    // Validate credentials
    if(empty($username_err) && empty($password_err)){
        // Prepare a select statement
        $sql = "SELECT id, username, password FROM users WHERE username = ?";
        
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
                            $_SESSION["id"] = $id;
                            $_SESSION["username"] = $username;                            
                            
                            // Redirect user to welcome page
                            header("location: poep.php");
                        } else{
                            // Password is not valid, display a generic error message
                            $login_err = "INVALID USERNAME OR PASSWORD";
                        }
                    }
                } else{
                    // Username doesn't exist, display a generic error message
                    $login_err = "INVALID USERNAME OR PASSWORD";
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="../js/script.js" defer></script>
    <meta charset="UTF-8">
    <title>Login</title>
</head>
<button onclick="myFunction()" id="dark-mode" class="fa fa-moon-o w3-circle"></button>
        <a href="" id="logo"><img src="../images/logo.png" alt="Logo" width="60"></a>
    <!--******************** MENU ********************-->
    <div class="container">
        <!-- This checkbox will give us the toggle behavior, it will be hidden, but functional -->
        <input id="toggle" type="checkbox">
        <!-- IMPORTANT: Any element that we want to modify when the checkbox state changes go here, being "sibling" of the checkbox element -->
        <!-- This label is tied to the checkbox, and it will contain the toggle "buttons" -->
        <label class="toggle-container" for="toggle">
            <!-- If menu is open, it will be the "X" icon, otherwise just a clickable area behind the hamburger menu icon -->
            <span class="button button-toggle"></span>
        </label>
        <!-- The nav menu -->
        <div id="nav-center">
            <nav class="nav">
                <a class="nav-item" href="">Home</a>
                <a class="nav-item" href="">Upload</a>
                <a class="nav-item" href="">Log uit</a>
            </nav>
        </div>
    </div>

<h1 class="titel">LOGIN</h1>
<body>
    <div class="container2">

        <?php 
        if(!empty($login_err)){
            echo '<div class="alert alert-danger">' . $login_err . '</div>';
        }        
        ?>

        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <div class="wrap">
                <label class="label">NAAM</label><br>
                <input type="text" name="username"  placeholder="NAAM" class="form-control input <?php echo (!empty($username_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $username; ?>"><br>
                <span class="invalid-feedback"><?php echo $username_err; ?></span>
            </div>
            <br><br>
            <div class="wrap">
                <label class="label">WACHTWOORD</label><br>
                <input type="password" name="password" placeholder="WACHTWOORD" class="form-control input <?php echo (!empty($password_err)) ? 'is-invalid' : ''; ?>"><br>
                <span class="invalid-feedback"><?php echo $password_err; ?></span>
            </div><br>
            <div class="wrap">
                <input type="submit" class="login-knop" value="LOGIN">
            </div>
        </form>
    </div>
</body>
</html>