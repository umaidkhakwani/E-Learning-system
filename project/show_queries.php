<html>

<head>
    <title>
        show queries
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
           queries
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
  
  // Initialize the session
  session_start();
 ?>
           <?php

        
            $id=$_POST['id'];
            $pass=$_POST['pass'];
            echo"$id";
            $con = mysqli_connect("localhost","root","","elearning");
    
            if($con)
            {
                $sql=" select id,message from queries where registration_type=3 and reciever = '$id';";
                $result1 = mysqli_query($con, $sql);
                $student_id;
                    $message;
                  
                    while($row=mysqli_fetch_assoc($result1))
                        
                    {
                        $student_id=$row['id'];
                        $message=$row['message'];
                       
                        echo"<center><b>student id : $student_id</b></center>";
                        echo"<center><b>message : $message </b></center><br>";
                        echo"<center>-----------------------------------</center><br>";
                    
                    }
                
            
            }
            else
            {
                echo "not sucess<br>";
            }
            
           ?>     
           
			
         

           <form action="answerquery.php" method= "post">
            <input type="hidden" name="id" value="<?php echo $id; ?>">
            <input type="hidden" name="pass" value="<?php echo $pass; ?>">
            <h3>type your answer to query here!</h3>
				<textarea name="textarea" rows="5" cols="30" placeholder="Comment text."></textarea>
				<h3>enter student ID</h3>
                <input type="text" id="studentid" name="studentid" placeholder="ID Here" size="40">
				<br>
				<br>
                <br><br>
                <button type="submit" name="submit" > Submit</button>
                
            </form>

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