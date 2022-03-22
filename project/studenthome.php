<!DOCTYPE html>
<html>

<head>
    <title>
        student home page
    </title>
    <link rel="stylesheet" href="css/inf.css">
    <link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/7f6d91d128.js" crossorigin="anonymous"></script>
</head>
<?php
  
  // Initialize the session
  session_start();
  $dat=$_SESSION['ids'];
  $password=$_SESSION['pass'];
  
  ?>
<body>
    <nav>
        <div class="upperbar">
            <div id="navpic">
                <h1>LMS-PORTAL</h1>
            </div>
            <div id="links">
                <a href="intro.html">Home</a>
				<a href="signinpage.html">SignIn</a>
                <a href="signup.html">SignUp</a>
                <a href="contactus.html">Contact</a>
				 <a href="info.html">About</a>
            </div>


        </div>
        <div id="navtext">
            <h1>
                E-LEARNING-SYSTEM
            
               
         
        </div>

    </nav>

   <div class="indexcenterdata">
        <div class="indexcenteredpicture">
        
            <div class="indeximagesidetext">
            <h3>WELCOME STUDENT</h3>
            <p>you are succesfully logged in to portal</p>
           <h2> <?php
                
                $nam=$_SESSION['na'];
                echo"<b> HI MR. $nam"
                


            ?></h2>
             

            </div>
            <div class="intropic">

            </div>

			</div>
		</div>

    <div id="features">
        <h1>
            DASHBOARD
        </h1>
    </div>

    <div class="icon-row1">
        <div class="ic1">
        <?php $id = "$dat";
              $PASS=$password;
        
        ?>
            <form method="post" action="registerstudent.php">
            <input type="hidden" name="id" value="<?php echo $id; ?>">
            <input type="hidden" name="pass" value="<?php echo $PASS; ?>">
            <button type="submit">click here to register courses</button>
            </form>
        </div>
        <div class="ic2">

        <form method="post" action="payfee.php">
            <input type="hidden" name="id" value="<?php echo $id; ?>">
            <input type="hidden" name="pass" value="<?php echo $PASS; ?>">
            <button type="submit">click here to pay fee</button>
            </form>
           
        </div>
        <div class="ic3">
        <form method="post" action="markattendence.php">
            <input type="hidden" name="id" value="<?php echo $id; ?>">
            <input type="hidden" name="pass" value="<?php echo $PASS; ?>">
            <button type="submit">click here mark attendence</button>
            </form>
           
        </div>
    </div>

    <div class="icon-row2">
        <div class="ic4">
          
        </div>
        <div class="ic5">
           
        </div>
        <div class="ic6">
           
        </div>
    </div>

    <div class="startupuser">
        <div class="writeup">
            <h2>HURRY UP! </h2>
            <h3><br> for signup click below button</h3>
            <div class="read">
                <button>
                       <a href="signup.html">Sign Up</a>
                </button>
            </div>
        </div>
    </div>

    <div class="testimonials">

        <div class="testimonialsdata">
            <div class="img">
            </div>
            <div class="info">
                <h2>
                   E-Learning-Portal
                </h2>
              
            </div>
        </div>

    </div>

  
    <div class="contact-on">
        <div class="contact-on-data">
            <h1>contact Us On</h1><br>

            <div class="ic">
                <i class="fab fa-twitter"></i>
                <i class="fab fa-youtube"></i>
                <i class="fab fa-snapchat-ghost"></i>
            </div>


        </div>
    </div>



</body>

</html>