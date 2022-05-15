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
 ?>
           <?php

        if(isset($_POST['submit']))
        {
            $con = mysqli_connect("localhost","root","","elearning");
    
            if($con)
            {
                // echo "sucess<br>";
                $marks=$_POST['marks'];
                $id=$_POST['id'];
                $grade=$_POST['grade'];
                
                
                $sql = "select studnet_id from exam_result where studnet_id='$id' ";
                $result1 = mysqli_query($con, $sql);
                $checking=false;
                
                
                
                while($row=mysqli_fetch_assoc($result1))
                {
                $checking=true;
                }
                       
                        if($checking==true){
                            $sql = "UPDATE exam_result SET marks='$marks' ,grade='$grade' where studnet_id='$id' ";
                            if ($con->query($sql) === TRUE) 
                            {
                                // echo "Record updated successfully";
                                echo '<div align="center">' ."Record updated successfully<br>" .'</div>';
                                
                                
                               
                            } 
                            else{

                                    echo"error";

                            }

                        }
                        else
                        {
                            
                            echo"the student is not found in exam table";

                        }
                            
                            
                               
            
                                  
            }
            else
            {
                echo "not sucess<br>";
            }
            
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