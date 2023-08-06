<?php 
  session_start();
  include 'config.php';
  include 'connect.php';
    if(isset($_POST['submit'])){
        $email=$_POST['email'];
        $password=$_POST['password'];
        if(!empty($email)&&!empty($password)){
            $sql = "SELECT * FROM users WHERE email='$email' AND password='$password' ";
            $result = mysqli_query($conn,$sql);
            if(mysqli_num_rows($result)>0)
            {
                $row=mysqli_fetch_assoc($result);
                $_SESSION['userid']=$row['id'];
                $_SESSION['logged_in']=true;
                // header("Location:homepage.php");
                echo "<script> window.location.href='homepage.php';</script>";
            }
            else
            {  
                $error=" * Inavlid Email or password.";
                }
        }
        else if(empty($email)&&empty($password)){
            $emailerror=" * Email can't be empty.";
            $passworderror=" * Password can't be empty.";
        }
        else if(empty($password)){
            $passworderror=" * Password can't be empty.";
        }
        else{
            $emailerror=" * Email can't be empty.";
        }
} 
      
?>
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="login.css?v=<?$version?>">
    <title>login page</title>
</head>
<body>
    <section class="first-section" >
        
        <div class="form-box">
            <div class="form-value">
                <form method="POST" action="<?php $_SERVER['PHP_SELF']; ?>">
                <h2>Login</h2>
                <div class="inputbox margin">
                    <ion-icon name="mail-outline"></ion-icon>
                    <input type="email" id="email" name="email">
                    <label for="email">Email</label>
                </div>  
                    <p class="error">   
                            <?php 
                                if(isset($emailerror)){
                                 echo $emailerror; 
                                }
                                ?>
                    </p>
                
                <div class="inputbox margin">
                    <div class="icons">
                        <ion-icon name="eye-outline" class="show"></ion-icon>
                        <ion-icon name="eye-off-outline" class="hide"></ion-icon>
                    </div>
                    <input type="password" id="password" name="password">
                    <label for="password">Password</label>
                  
                </div>
                <p class="error">
                        <?php 
                        if(isset($passworderror)){
                            echo" $passworderror"; 
                        }
                     ?>
                </p>
                <div class="forget">
                    <label for=""> <a href="#">Forgot Password?</a></label>
                </div>
                <button name="submit">Log in</button>

                <div class="register">
                    <p>Don't have an account?&nbsp; <a href="signup.php">Register</a></a></p>
                </div>
                <span class="error" style="font-size:15px;font-weight:bold;">
                        <?php  
                        if(isset($error)){
                     echo $error; 
                        }
                     ?>
                </span>
                </form> 
            </div>
        </div>
    </section>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
<script src="login.js?v=<?$version?>"></script>
</body>
</html>