<?php 
 include 'config.php';
  include 'connect.php';
    if(isset($_POST['submit'])){
        $first_name=$_POST['first_name'];
        $last_name=$_POST['last_name'];
        $gender=$_POST['gender'];
        $date = $_POST['date'];
        $email=$_POST['email'];
        $password=$_POST['password'];
        if(!empty($first_name)&&!empty($last_name)&&!empty($email)&&!empty($date)&&!empty($password)&&!empty($gender)){
            $sql = "SELECT * FROM users WHERE email='$email'";
            $result = mysqli_query($conn, $sql);
            if(mysqli_num_rows($result) > 0)
            {
                $emailerror=" * Email Already exists.";
            }
            else
            {
        
                $sql = "INSERT INTO users (first_name,last_name,gender,birth_date,email,password) VALUES ( '$first_name' , '$last_name ', '$gender', '$date','$email','$password')";

                $result = mysqli_query($conn, $sql);

                if($result){
                    // header("Location:login.php");
                    echo "<script> window.location.href='login.php';</script>";
                }
            }
        }
        else{
            $error=" * Enter the credentials first.";
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
    <section class="second-section">
        <div class="form-box1">
            <div class="form-value">
                <form onsubmit="return CheckPassword(document.form1.password)" name="form1" method="POST" action="<?php $_SERVER['PHP_SELF']; ?>" >
                <h2>Register Here :</h2>
                <div class="names ">
                    <div class="inputbox ">
                        <input type="text" name="first_name">
                        <label for="text">First Name</label>
                    </div>
                    <div class="inputbox ">
                    <input type="text" name="last_name">
                    <label for="text">Last Name</label>
                    </div>
                </div>
                <div class="inputbox-gender ">
                <select name="gender" id="gender">
                    <option class="gender-option" >Gender :</option>
                    <option class="gender-option" value="Male">Male</option>
                    <option class="gender-option" value="Female">Female</option>
                    <option class="gender-option" value="Others">Others</option>
                </select>
                
                </div>
                <div class="inputbox-date ">
                <input type="Date" name="date">
                
                </div>
                <div class="inputbox margin">
                <ion-icon name="mail-outline"></ion-icon>
                <input type="email" name="email">
                <label for="email">Email</label>
                </div>
                     <p class="s_error">
                        <?php 
                        if(isset($emailerror)){
                     echo $emailerror; 
                        }
                     ?>
                     </p>
                <div class="inputbox">
                    <div class="icons">
                        <ion-icon name="eye-outline" class="show"></ion-icon>
                        <ion-icon name="eye-off-outline" class="hide"></ion-icon>
                    </div>
                    <input type="password" name="password" id="password" >
                    <label for="password">Password</label>
                </div>
                
               
                <button class="submit" name="submit" >Sign up</button>
    
                <div class="register" >
                    <p>Already have an account?&nbsp; <a href="login.php">Sign in</a></a></p>

                    </div>
                    <p class="s_error" id="format">
                        <?php 
                        if(isset($error)){
                     echo $error; 
                        }
                     ?>
                    </p> 
                </form> 
                
            </div>
            
        </div>
    </section>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    

<script src="signup.js"></script>
</body>
</html>