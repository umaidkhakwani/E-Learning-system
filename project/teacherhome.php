<!DOCTYPE html>
<html>

<head>
    <title>
        teacher homepage
    </title>
    <link rel="stylesheet" href="css/inf.css">
    <link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/7f6d91d128.js" crossorigin="anonymous"></script>
</head>
<?php
  
  // Initialize the session
  session_start();
  $dat=$_SESSION['ids'];
 
  
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
            <h3>WELCOME TEACHER</h3>
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
            Features
        </h1>
    </div>

    <div class="icon-row1">
        <div class="ic1">
            <i class="fas fa-book"></i>
            <h2>multiple courses</h2>
            <p>
            signup and register for the course.
            </p>

        </div>
        <div class="ic2">
			<i class="fas fa-tasks"></i>
              <h2>weekly plans</h2>
			<p>
               weekly classes with activities
            </p>
           
        </div>
        <div class="ic3">
            <i class="fas fa-smile"></i>
            <h2>scholorships</h2>
            <p>
                offers scholorships for bright students.
            </p>
           
        </div>
    </div>

    <div class="icon-row2">
        <div class="ic4">
            <i class="fas fa-percent"></i>
            <h2>special discounts</h2>
            <p>
                offers special discounts for the parents works for NGO
            </p>
        </div>
        <div class="ic5">
            <i class="fas fa-chalkboard-teacher"></i>
            <h2>Experience faculty</h2>
            <p>
               The faculty is well educated.
            </p>
        </div>
        <div class="ic6">
            <i class="fas fa-school"></i>
            <h2>well maintained classrooms</h2>
            <p>
              offers sperate furnished classrooms for every class.
            </p>
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