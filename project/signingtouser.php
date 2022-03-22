<html>

<head>
    <title>
        signiningtouser
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
            Sign Up completed
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
  $_SESSION['nam']=NULL;
             
  ?>
           <?php

        if(isset($_POST['submit'])){
        $con = mysqli_connect("localhost","root","","elearning");
  
            if($con){
            echo "sucess<br>";
            $_SESSION['ids'] = $_POST['id'];
            $data=$_SESSION['ids'];
            $_SESSION['ids'] = $_POST['id'];
            $password=$_SESSION['pass']=$_POST['pass'];
            $typereg=NULL;
            $nam=$_SESSION['na']=$_POST['name'];
           
              
            
                $sql=" select cnic,registartiontype,NAME from user_table where id_assign='$data' and password='$password' and NAME='$nam';";
                $result1 = mysqli_query($con, $sql);
                $checkuser=False;
                while($row=mysqli_fetch_assoc($result1))
                {
                   $nam=$row['NAME'];
                   $typereg=$row['registartiontype'];
                   $checkuser=true;
   
                }
                
                if($checkuser==True){
                    if($typereg==1){
                        
                        header("Location: adminhome.php");
    
                    }
                    else if($typereg==2){
                        header("Location: teacherhome.php");
                    }
                    else if($typereg==3){
                        header("Location: studenthome.php");
                    }
                   
                    
                    if ($con->query($sql) === TRUE) {
                      echo "New record created successfully in student";
                    } else {
                      echo "Error: " . $sql . "<br>" . $con->error;
                    }
    
                }
                else{
                    echo"user not found";
                }

               

            
            }
            else{
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