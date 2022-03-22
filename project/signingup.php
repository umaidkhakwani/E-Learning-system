<html>

<head>
    <title>
        SignUpcompleted
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

        if(isset($_POST['submit'])){
        $con = mysqli_connect("localhost","root","","elearning");
  
            if($con){
            // echo "sucess<br>";
  
                $nam=$_POST['name'];
                $phonenum=$_POST['phoneno'];
                $gender=$_POST['gender'];
                $birth=$_POST['birthday'];
                $fathername=$_POST['fathername'];
                $address=$_POST['address'];
                $typereg=$_POST['user'];
                $password=$_POST['pwd'];
                $cnic=$_POST['cnic'];
                $roll=(rand(100000,200000));
                $balance=(rand(100000,200000));
                $accnum=(rand(1000,5000));
                $sql=" select cnic from user_table where cnic='$cnic';";
                $result1 = mysqli_query($con, $sql);
                $checkcnic=False;
               
                
                while($row=mysqli_fetch_assoc($result1))
                {
                   $checkcnic=true;
   
                }
                if($checkcnic==False){
                    if($typereg=='Teacher'){
                        $sql = "insert into user_table ( id_assign,NAME,phonenumber,gender,dob,fathername,address,registartiontype,password,cnic)
                        VALUES ('$roll','$nam','$phonenum','$gender','$birth','$fathername','$address','2',$password,$cnic)";
                        if ($con->query($sql) === TRUE) {
                            // echo "New record created successfully in Teacher";
                            echo '<div align="center">' ."New record created successfully in Teacher" .'</div>';
                          } else {
                            echo "Error: " . $sql . "<br>" . $con->error;
                          }
    
                    }
                    else{
                        $sql = "insert into user_table ( id_assign,NAME,phonenumber,gender,dob,fathername,address,registartiontype,password,cnic)
                        VALUES ('$roll','$nam','$phonenum','$gender','$birth','$fathername','$address','3',$password,$cnic)";
                        if ($con->query($sql) === TRUE) {
                            // echo "New record created successfully in student";
                            echo '<div align="center">' ."New record created successfully in student" .'</div>';
                            $sql = "insert into accounts (cnic,accnumber,balance)
                            VALUES ('$cnic','$accnum','$balance')";
                            if ($con->query($sql) === TRUE) {
                                // echo "New record created successfully in accounts";
                                echo '<div align="center">' ."New record created successfully in accounts" .'</div>';
                            
                              } else {
                                echo "Error: " . $sql . "<br>" . $con->error;
                              }

                          } else {
                            echo "Error: " . $sql . "<br>" . $con->error;
                          }
                    }
                   
                    
                    
    
                }
                else{
                    // echo"user already exists so i am not registering you again..";
                    echo '<div align="center">' ."user already exists so i am not registering you again.." .'</div>';
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