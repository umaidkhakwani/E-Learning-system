<html>

<head>
    <title>
        fee paid2
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
            fee paid successfully
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
                $pass=$_POST['pass'];
                $id=$_POST['id'];
                

                
                $sql=" select c_id,cnic,registartiontype,NAME from user_table where id_assign='$id' and password='$pass' ;";
                $result1 = mysqli_query($con, $sql);
                
                $checkcourse=False;
                $cnicnum=NULL;
                while($row=mysqli_fetch_assoc($result1))
                {
                    $cnicnum=$row['cnic'];
                    $nam=$row['NAME'];
                    $typereg=$row['registartiontype'];
                    $checkcourse=true;
                    $course=$row['c_id'];

                    
                }
               
                if($checkcourse==False)
                {
                    echo"not registered in any course<br>";
                }
                else
                {
                $sql=" select fee from courses where course_id='$course';";
                $result1 = mysqli_query($con, $sql);
                
               
                $feeamount=NULL;
                while($row=mysqli_fetch_assoc($result1))
                {
                   
                  $feeamount=$row['fee'];
                    
                }
                $sql=" select cnic,balance from accounts where cnic='$cnicnum';";
                $result1 = mysqli_query($con, $sql);
                
               
                $currbalance=NULL;
                while($row=mysqli_fetch_assoc($result1))
                {
                   
                  $currbalance=$row['balance'];
                    
                }
                
                $sql=" update accounts set balance='$currbalance'-'$feeamount' where cnic='$cnicnum'";
                if (mysqli_query($con, $sql)) {
                    // echo "Record updated successfully";
                    echo '<div align="center">' ."amount deducted from user account<br>" .'</div>';
                    // echo"amount deducted from user account<br>";
                    $sql=" update user_table set feepaid=TRUE where cnic='$cnicnum'";
                    if (mysqli_query($con, $sql)) {
                        // echo "Record updated successfully";
                        // echo"fee is succesfull paid<br>";
                        echo '<div align="center">' ."fee is succesfull paid<br>" .'</div>';
                        
    
                      } else {
                        echo "Error updating record: " . mysqli_error($con);
                      }


                  } else {
                    echo "Error updating record: " . mysqli_error($con);
                  }

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