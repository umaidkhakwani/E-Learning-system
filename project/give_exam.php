<html>

<head>
    <title>
       give exam
    </title>
    <link rel="stylesheet" href="css/inf.css">
    <link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/7f6d91d128.js" crossorigin="anonymous"></script>
</head>

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
        <div id="headings">
            <h1>
            give exam
            </h1>
        </div>
    </nav>
	
	<div class="signupform">
        <div class="signupformheader">
            <h1>
            </h1>
        </div>

        <div class="signupformdata">
           <?php

        

        $con = mysqli_connect("localhost","root","","elearning");
            $id=$_POST['id'];
            $pass=$_POST['pass'];
           $course=$_POST['course'];
           
           
            
           
        

           ?>     
           
           <?php if ($course==126): ?>
           
           <form method="post" action="c++_exam.php">
           <input type="hidden" name="id" value="<?php echo $id; ?>">
           <input type="hidden" name="pass" value="<?php echo $PASS; ?>">
           <input type="hidden" name="course" value="<?php echo $course; ?>">
           <button type="submit">give exam</button>
        </form>


       
        <?php else: ?>
            <?php if ($course==123): ?>
           
           <form method="post" action="english_exam.php">
           <input type="hidden" name="id" value="<?php echo $id; ?>">
           <input type="hidden" name="pass" value="<?php echo $PASS; ?>">
           <input type="hidden" name="course" value="<?php echo $course; ?>">
           <button type="submit">give exam</button>
        </form>
        <?php else: ?>

            <?php if ($course==130): ?>
           
           <form method="post" action="html_exam.php">
           <input type="hidden" name="id" value="<?php echo $id; ?>">
           <input type="hidden" name="pass" value="<?php echo $PASS; ?>">
           <input type="hidden" name="course" value="<?php echo $course; ?>">
           <button type="submit">give exam</button>
        </form>
        <?php else: ?>
            <?php if ($course==128): ?>
           
           <form method="post" action="science_exam.php">
           <input type="hidden" name="id" value="<?php echo $id; ?>">
           <input type="hidden" name="pass" value="<?php echo $PASS; ?>">
           <input type="hidden" name="course" value="<?php echo $course; ?>">
           <button type="submit">give exam</button>
        </form>
        <?php else: ?>


            
            <?php endif; ?> 


            <?php endif; ?> 




        <?php endif; ?> 



         
        <?php endif; ?> 


        </div>
    </div>

    <div class="signupdesigningbutton">

        <div class="signupdesigningbuttondata">
            <h1>
               Feel Free to Contact
            </h1>
            <p>
                If you are having a Problem? Contact Any time to E-Learning-Portal
				Our team will respond you soon on your email.
            </p>

            <div class="signupclickbutton">
                <button>
					         <a href="contactus.html">TAKE ME TO CONTACT PAGE</a>
                </button>
            </div>
        </div>
    </div>
</body>

</html>