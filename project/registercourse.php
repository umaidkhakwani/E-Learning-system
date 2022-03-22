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
                $pass=$_POST['pass'];
                $id=$_POST['id'];
                $c_id=$_POST['cid'];
                // $course=NULL;
                $pre=NULL;
                $typereg=NULL;
                $nam=NULL;
                // echo"$id , $pass";
                $cid=NULL;
                $prere=NULL;
                
                $sql=" select c_id,cnic,registartiontype,NAME from user_table where id_assign='$id' and password='$pass' ;";
                $result1 = mysqli_query($con, $sql);
                
                $checkuser=False;
                
                while($row=mysqli_fetch_assoc($result1))
                {
                   
                    $nam=$row['NAME'];
                    $typereg=$row['registartiontype'];
                    $checkuser=true;
                    $course=$row['c_id'];
                    
                }
                
                if($checkuser==True)
                {
                    if($course==NULL)
                    { 
                        $sql=" select course_id,prereq_id from courses where course_name='$c_id';";

                        $result1 = mysqli_query($con, $sql);
                        $checkcourse=False;
                       
                        while($row=mysqli_fetch_assoc($result1))
                        {
                            $cid=$row['course_id'];
                            $prere=$row['prereq_id'];
                            $checkcourse=true;         
                        }
                        if($checkcourse==true)
                        {
                            if($prere==NULL)
                            {
                                $sql = "UPDATE user_table SET c_id='$cid' where id_assign='$id' and password='$pass'";
                                if ($con->query($sql) === TRUE) 
                                {
                                    // echo "Record updated successfully";
                                    echo '<div align="center">' ."Record updated successfully<br>" .'</div>';
                                    
                                    $sql = "insert into passedcourses (id,c_id) values('$id','$cid')";
                                    if ($con->query($sql) === TRUE) 
                                    {
                                        // echo "Record updated successfully in pased courses";
                                        echo '<div align="center">' ."Record updated successfully in pased courses<br>" .'</div>';
                                      
                                    } 
                                    else 
                                    {
                                        echo "Error updating record: " . $conn->error;
                                    }
                                } 
                                else 
                                {
                                    echo "Error updating record: " . $conn->error;
                                }
                               

                                   
                            }
                            else
                            {
                                $sql=" select id,c_id from passedcourses where c_id='$prere' and id='$id';";

                                $result1 = mysqli_query($con, $sql);
                                $checkprereq=False;
                               
                                while($row=mysqli_fetch_assoc($result1))
                                {
                                    $checkprereq=true;         
                                }
                                if($checkprereq==true)
                                {
                                    $sql = "UPDATE user_table SET c_id='$cid' where id_assign='$id' and password='$pass'";
                                    if ($con->query($sql) === TRUE) 
                                    {
                                        // echo "Record updated successfully";
                                        $sql = "insert into passedcourses (id,c_id) values('$id','$course')";
                                        if ($con->query($sql) === TRUE) 
                                        {
                                            // echo "Record updated successfully in pased courses";
                                            echo '<div align="center">' ."Record updated successfully in pased courses<br>" .'</div>';
                                          
                                        } 
                                        else 
                                        {
                                            echo "Error updating record: " . $conn->error;
                                        }
                                    } 
                                    else 
                                    {
                                        echo "Error updating record: " . $conn->error;
                                    }
                                }
                                else
                                {
                                    // echo"prereg is not cleared yet<br>";
                                    echo '<div align="center">' ."prereg is not cleared yet<br>" .'</div>';
                                }

                            }
                               

                        }
                    }
                    else
                    {
                        // echo"user is already registered in course code : $course";
                        echo '<div align="center">' ."user is already registered in course code : $course" .'</div>';
                    }
                        

                }
                else
                {
                    echo"user not found<br>";
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