<html>

<head>
    <title>
       course material
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
            course material
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
           
           if($course==126){


            header("Location: c++.html");
           }
           else if($course==128){
            header("Location: science.html");
           }
           else if($course==130){
            header("Location: html.html");
        }
        else if($course==127){
            header("Location: php.html");
        }
        else if($course==129){
            header("Location: java.html");
        }
        else if($course==123){
            header("Location: english.html");
        }
        else if($course==124){
            header("Location: math.html");
        }
        else if($course==125){
            header("Location: python.html");
        }
        
            
           
        

           ?>     
         


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