<html>

<head>
    <title>
       answerquery
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
            answerquery
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

        if(isset($_POST['submit'])){

        $con = mysqli_connect("localhost","root","","elearning");
            $id=$_POST['id'];
            $pass=$_POST['pass'];
            $message=$_POST['textarea'];
            $sendto=$_POST['studentid'];
            echo"$id";
            if($con){
            
                $sql = "insert into queries (id,message,registration_type,reciever)
                VALUES ('$id','$message',2,'$sendto')";
                if ($con->query($sql) === TRUE) {
                    
                    echo '<div align="center">' ."succesfull query" .'</div>';
                    header( "refresh:2;url=studenthome.php" );
                    exit();
                  } else {
                    echo "Error: " . $sql . "<br>" . $con->error;
                  }
            
  
             

               

            
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