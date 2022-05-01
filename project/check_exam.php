<html>

<head>
    <title>
        course registration
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
            registration page
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
  $s_id;
                $ans;
                $sub;
 ?>
           <?php

        
            $con = mysqli_connect("localhost","root","","elearning");
    
            if($con)
            {
                // echo "sucess<br>";
                $pass=$_POST['pass'];
                $id=$_POST['id'];
                $cid;
                
                
                $sql=" select c_id from user_table where id_assign='$id' and password='$pass' ;";
                $result1 = mysqli_query($con, $sql);
                
            
                
                while($row=mysqli_fetch_assoc($result1))
                {
                   
                   $cid=$row['c_id'];
                   
                    
                }

                $sql=" select studnet_id,subject,answers,marks,grade from exam_result where subject='$cid';";
                $result1 = mysqli_query($con, $sql);
                $s_id;
                $ans;
                $sub;
                
                
                
                while($row=mysqli_fetch_assoc($result1))
                {
                    $s_id=$row['studnet_id'];
                    $sub=$row['subject'];
                    $ans=$row['answers'];

                    echo"<center><b>student id : $s_id</b></center>";
                    echo"<center><b>subject : $sub </b></center><br>";
                    echo"<center><b>answers : $ans </b></center><br>";
                    echo"<center>-----------------------------------</center><br>";
                   
                 
                    
                }


                
                
                                  
            }
            else
            {
                echo "not sucess<br>";
            }
            
        



    

           ?>     
           
			
           <form action="check_exam2.php" method= "post">
            
           <h3>enter student id!</h3>
            <input type="text" id="id" name="id" placeholder="enter id" size="40">
            <h3>enter marks!</h3>
            <input type="text" id="marks" name="marks" placeholder="marks" size="40">
				<h3>enter grade</h3>
                <input type="text" id="grade" name="grade" placeholder="grade" size="40">
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