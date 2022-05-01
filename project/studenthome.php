<!DOCTYPE html>
<html>

<head>
    <title>
        student home page
    </title>
    <link rel="stylesheet" href="css/inf.css">
    <link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/7f6d91d128.js" crossorigin="anonymous"></script>
</head>
<?php
  
  // Initialize the session
  session_start();
  $dat=$_SESSION['ids'];
  $password=$_SESSION['pass'];
  $course;
  
  ?>
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
        <div id="navtext">
            <h1>
                E-LEARNING-SYSTEM
            
               
         
        </div>

    </nav>

   <div class="indexcenterdata">
        <div class="indexcenteredpicture">
        
            <div class="indeximagesidetext">
            <h3>WELCOME STUDENT</h3>
            <p>you are succesfully logged in to portal</p>
           <h2> <?php
                
                $nam=$_SESSION['na'];
                $password=$_SESSION['pass'];
                echo"<b> HI MR. $nam";
                
                

            ?></h2>
             

            </div>
            <div class="intropic">

            </div>

			</div>
		</div>

    <div id="features">
    <div id="galaxy">
	    <div id="gall">
		    <div id="pic1">
			    <img src="image/climb.jpg" height="350" width="500" alt="Image 1">
			    <a class="previous" href="#pic4">&lt;</a>
			    <a class="next" href="#pic2">&gt;</a>
			    <h3>MOTIVATIONAL Quotes</h3>
			    
		    </div>
		    <div id="pic2">
			    <img src="image/key.jpg" height="350" width="500" alt="Image 2">
			    <a class="previous" href="#pic1">&lt;</a>
			    <a class="next" href="#pic3">&gt;</a>
			    <h3> MOTIVATIONAL Quotes</h3>
			    
		    </div>
		    <div id="pic3">
			    <img src="image/dream.jpg" height="350" width="500" alt="Image 3">
			    <a class="previous" href="#pic2">&lt;</a>
			    <a class="next" href="#pic4">&gt;</a>
			    <h3>MOTIVATIONAL Quotes</h3>
			    
		    </div>
		    <div id="pic4">
			    <img src="image/comfort.jpg" height="350" width="500" alt="Image 4">
			    <a class="previous" href="#pic3">&lt;</a>
			    <a class="next" href="#pic1">&gt;</a>
			    <h3>MOTIVATIONAL Quotes</h3>
			    
		    </div>
		   
	    </div>
	</div>
        <h1>
            DASHBOARD
        </h1>

         <?php
                
                $nam=$_SESSION['na'];
                $password=$_SESSION['pass'];
                
                $con = mysqli_connect("localhost","root","","elearning");
                if($con){
                    echo "sucess<br>";
                    echo"<center><b>$nam DETAILS</b></center><br><br>";
                
                    $sql=" select id_assign,NAME,phonenumber,address,dob,gender,cnic,c_id,feepaid from user_table where NAME='$nam' and password='$password';";
                    $result1 = mysqli_query($con, $sql);
                    $id;
                    $name;
                    $phone;
                    $addre;
                    $cnic;
                    $dob;
                    $gender;

                    while($row=mysqli_fetch_assoc($result1))
                        
                    {
                        $course=$row['c_id'];
                        $id=$row['id_assign'];
                        $name=$row['NAME'];
                        $phone=$row['phonenumber'];
                        $addre=$row['address'];
                        $cnic=$row['cnic'];
                        $dob=$row['dob'];
                        $gender=$row['gender'];
                        echo"<center><b>id : $id</b></center><br>";
                        echo"<center><b>name : $name </b></center><br>";
                        echo"<center><b>phonenumber : $phone </b></center><br>";
                        echo"<center><b>address : $addre </b></center><br>";
                        echo"<center><b>cnic : $cnic </b></center><br>";
                        echo"<center><b>date of birth : $dob </b></center><br>";
                        echo"<center><b>gender : $gender </b></center><br><br>";

                        
                  
                    }



                }

                else{


                    echo"not conect to database<br>";



                }
                
                
                

            ?>
        
    </div>

    <div class="icon-row1">
        
        <?php $id = "$dat";
              $PASS=$password;
              $cou=$course;
              
               
        ?>
            <form method="post" action="registerstudent.php">
            <input type="hidden" name="id" value="<?php echo $id; ?>">
            <input type="hidden" name="pass" value="<?php echo $PASS; ?>">
            <button type="submit">click here to register courses</button>
            </form>
       
    

        <form method="post" action="payfee.php">
            <input type="hidden" name="id" value="<?php echo $id; ?>">
            <input type="hidden" name="pass" value="<?php echo $PASS; ?>">
            <button type="submit">click here to pay fee</button>
            </form>
           
        
        
        <form method="post" action="markattendence.php">
            <input type="hidden" name="id" value="<?php echo $id; ?>">
            <input type="hidden" name="pass" value="<?php echo $PASS; ?>">
            <button type="submit">click here mark attendence</button>
            </form>
           
       
    </div>

    <div class="icon-row2">
        
    <?php $id = "$dat";
              $PASS=$password;
              $cou=$course;
              
               
        ?>
        <form method="post" action="makequery.php">
            <input type="hidden" name="id" value="<?php echo $id; ?>">
            <input type="hidden" name="pass" value="<?php echo $PASS; ?>">
            <button type="submit">make query</button>
            </form>
          

        <form method="post" action="student_showquery.php">
            <input type="hidden" name="id" value="<?php echo $id; ?>">
            <input type="hidden" name="pass" value="<?php echo $PASS; ?>">
            <button type="submit">show answers</button>
         </form>

         
         <form method="post" action="give_exam.php">
            <input type="hidden" name="id" value="<?php echo $id; ?>">
            <input type="hidden" name="pass" value="<?php echo $PASS; ?>">
            <input type="hidden" name="course" value="<?php echo $cou; ?>">
            <button type="submit">give exam</button>
         </form>

         <form method="post" action="coursematerial.php">
            <input type="hidden" name="id" value="<?php echo $id; ?>">
            <input type="hidden" name="pass" value="<?php echo $PASS; ?>">
            <input type="hidden" name="course" value="<?php echo $cou; ?>">
            <button type="submit">course material</button>
         </form>
         
      
    </div>

    <div class="startupuser">
        <div class="writeup">
            <h2>HURRY UP! </h2>
            <h3><br> for signup click below button</h3>
            <div class="read">
                <button>
                       <a href="signup.html">Sign Up</a>
                </button>
            </div>
        </div>
    </div>

    <div class="testimonials">

        <div class="testimonialsdata">
            <div class="img">
            </div>
            <div class="info">
                <h2>
                   E-Learning-Portal
                </h2>
              
            </div>
        </div>

    </div>

  
    <div class="contact-on">
        <div class="contact-on-data">
            <h1>contact Us On</h1><br>

            <div class="ic">
                <i class="fab fa-twitter"></i>
                <i class="fab fa-youtube"></i>
                <i class="fab fa-snapchat-ghost"></i>
            </div>


        </div>
    </div>



</body>

</html>