<?php
session_start();
  include 'connect.php';
  include 'config.php';
  if(isset($_GET['userid'])){
    $id=$_GET['userid'];
    if(isset($_POST['submit'])){
       $first_name=$_POST['first_name'];
       $last_name=$_POST['last_name'];
       $email=$_POST['email'];
       $subject=$_POST['subject'];
      $message=$_POST['message'];   
   if(!empty($first_name)&&!empty($last_name)&&!empty($email)&&!empty($subject)&&!empty($message)){
       $sql = "INSERT INTO feedback (user_id,first_name,last_name,email,subject,message) VALUES ('$id','$first_name' , '$last_name ', '$email' , '$subject' , '$message')";
       $result = mysqli_query($conn, $sql);
      if($result){
        $message = " * Delivered Successfully.";
       }
      }
      else{
        $error=" * Fields cannot be empty.";
     }
   }
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Feedback</title>
    <link rel="stylesheet" href="feedback.css?v=<?$version?>" />

    <script src="https://kit.fontawesome.com/5a78363638.js" crossorigin="anonymous"></script>
  </head>
  <body>
    <div class="header">
      <div class="content">
        
        <div class="top">
          <div class="main">
            <a href="homepage.php" class="logo"
              ><img
                id="logo"
                src="Images/logo.png"
                alt="logo "
                style="width: 180px;height: 80px;"
            /></a>
          </div>
        </div>
    
  <div class="middle">
    <section class="feedback-form">
        <div class="feedback-heading">
            <h2 class="heading-section">Contact Us</h2>
        </div>
              <div class="row">              
                  <div class="contact-wrap ">
                    <h3 class="seconday-heading" >Get in touch with us</h3>
                    <form method="POST" action="<?php $_SERVER['PHP_SELF']; ?>"  id="contactForm" name="contactForm" class="contactForm">
                      <div class="row-inline">
                     
                          <div class="form-group">
                            <label class="label" for="fname">First Name</label>
                            <input type="text" class="form-control" name="first_name" id="fname" placeholder="First Name">
                          </div>
                         
                        
                        
                          <div class="form-group">
                            <label class="label" for="lname">Last Name</label>
                            <input type="text" class="form-control" name="last_name" id="lname" placeholder="Last Name">
                          </div>
                      </div>
                      
                      <div class="form-group">
                        <label class="label" for="email">Email</label>
                        <input type="email" class="form-control" name="email" id="email" placeholder="Email">
                      </div>
                          <div class="form-group">
                            <label class="label" for="subject">Subject</label>
                            <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject">
                          </div>
                       
                        
                          <div class="form-group">
                            <label class="label" for="#">Message</label>
                            <textarea name="message" class="form-control" id="message" cols="30" rows="10" placeholder="Message"></textarea>
                          </div>
                        
                       
                          <div class="form-group">
                            <input type="submit" name="submit" class="btn ">
                            <div class="submitting"></div>
                          </div>

                          <p style="color:red;">
                            <?php
                            if(isset($message)){
                              echo $message;
                            }
                            if(isset($error)){
                              echo $error;
                            }
                            ?>
                          </p>
                      </form>
                  </div>      
                </div>
      </section>
  </div>


<script type="text/javascript">
  window.addEventListener("scroll",function(){  
    var header_right  =document.querySelector(".top");
    var header_logo = document.querySelector(".main");
    header_right.classList.toggle("sticky",window.scrollY > 0);
    header_logo.classList.toggle("sticky",window.scrollY > 0);
  })  
</script>
</body>
</html>