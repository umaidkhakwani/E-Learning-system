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
           
           if($con){
               echo "sucess<br>";
              
               $sql=" select marks from exam_result where studnet_id='$id' and subject='$course';";
               $result1 = mysqli_query($con, $sql);
               
               $mark=0;
               $check=false;
               while($row=mysqli_fetch_assoc($result1))
                   
               {
                   
                   $mark=$row['marks'];
                   echo"<center><b>$mark</b></center><br>";
                   if($mark>=40){
                    $check=true;
                    break;
                   }
                  
                   
                  

               }

               if($check==true){
                header("Location: downloadcertificate1.html");


               }
               else{
                echo"<center><b>your marks are not enough to get certificate..</b></center><br>";


               }

           }

           else{
               echo"not conect to database<br>";

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