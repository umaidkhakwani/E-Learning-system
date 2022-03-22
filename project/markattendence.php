<html>

<head>
    <title>
        marked attendence
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
                
            </h1>
        </div>
    </nav>
	
	<div class="signupform">
        <div class="signupformheader">
            <h1>
               attendence marked....
            </h1>
        </div>

        <div class="signupformdata">
                 <?php
                    $pass=$_POST['pass'];
                    $id=$_POST['id'];
                    $con = mysqli_connect("localhost","root","","elearning");
                    $sql=" select NAME from user_table where id_assign='$id' and password='$pass' ;";
                    $result1 = mysqli_query($con, $sql);
                    
                   $nam=NULL;
                    while($row=mysqli_fetch_assoc($result1))
                    {
                        $nam=$row['NAME'];            
                    }

    
            if($con)
            {
                $date = date('Y-m-d H:i:s');
                
                $sql = "insert into attendence (id,name,presence_date,present)
                VALUES ('$id','$nam','$date',1)";
                if ($con->query($sql) === TRUE) {
                    
                    echo '<div align="center">' ."Attendence is marked suucesfully...." .'</div>';
                  } else {
                    echo "Error: " . $sql . "<br>" . $con->error;
                  }
                

                
               
            }
            else
            {
                    echo "conection unseuccesfull<br>";
            }





                 ?>
           
			
            <div class="signuptextbox">
                
                
            </div>



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