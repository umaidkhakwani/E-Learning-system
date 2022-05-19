<html>

<head>
    <title>
        details-updated
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
               update info
            </h1>
        </div>
    </nav>
	
	<div class="signupform">
        <div class="signupformheader">
            <h2>
               details of all users..
            </h2>
        </div>

        <div class="signupformdata">
                 <?php
                 if(isset($_POST['submit'])){
                    $con = mysqli_connect("localhost","root","","elearning");
                    if($con){
                        echo "sucess<br>";
                        $id=$_POST['id'];
                        echo"<center><b>user detail</b></center><br><br>";
                    
                        $sql=" select id_assign,NAME,phonenumber,address,password from user_table where id_assign=$id;";
                        $result1 = mysqli_query($con, $sql);
                        
                        echo "<center><table border='3'>

                        <tr>
                        
                        <th>Id</th>
                        
                        <th>name</th>
                        
                        <th>phonenumber</th>
                        
                        <th>address</th>
                        <th>password</th>
                        
                        </tr> ";
                        
                         $checkingdata=false;
                        
                        while($row = mysqli_fetch_array($result1))
                        
                          {
                            $checkingdata=true;
                          echo "<tr>";
                        
                          echo "<td>" . $row['id_assign'] . "</td>";
                        
                          echo "<td>" . $row['NAME'] . "</td>";
                        
                          echo "<td>" . $row['phonenumber'] . "</td>";
                        
                          echo "<td>" . $row['address'] . "</td>";
                          echo "<td>" . $row['password'] . "</td>";
                        
                          echo "</tr>";
                        
                          }

                        
                        echo "</table></center>";
                          if($checkingdata==false){
                            echo"<br>";
                            echo"no data exists";
                            // usleep(3000000);
                            header( "refresh:2;url=update-info.php" );
                            exit();
                            // header("Location: update-info.php");

                          }
                        echo"<br>";
                          
                          
                          mysqli_close($con);
                       
                      }
                      else{
                          mysqli_error($con);
                      }
                     

                 }
                
                    
                   
                 ?>
           
			
            <div class="signuptextbox">
            <h3>enter details to update</h3>
            <form action="updating_changes_database.php" method= "post">
                <input type="hidden" name="id" value="<?php echo $id; ?>">
                <h3>phone no</h3>
                <input type="tel" id="phoneno" name="phoneno" placeholder="123-45-678"  >
                <br><br>
				<br>
                <h3>ADDRESS</h3>
                <input type="text" id="address" name="address" placeholder="address" >
                <br><br>
                
                <h3>password</h3>
                <input type="password" id="pwd" name="pwd" >
                <br>
                <br>
                <button type="submit" name="submit" > Submit</button>
                
            </form>
                
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