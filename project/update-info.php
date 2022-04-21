<html>

<head>
    <title>
        update-info
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
                 $con = mysqli_connect("localhost","root","","elearning");
                    if($con){
                        echo "sucess<br>";
                        echo"<center><b>TEACHER DETAILS</b></center><br><br>";
                    
                        $sql=" select id_assign,NAME,phonenumber,address,password from user_table where registartiontype=2;";
                        $result1 = mysqli_query($con, $sql);
                        
                        echo "<center><table border='3'>

                        <tr>
                        
                        <th>Id</th>
                        
                        <th>name</th>
                        
                        <th>phonenumber</th>
                        
                        <th>address</th>
                        <th>password</th>
                        
                        </tr> ";
                        
                         
                        
                        while($row = mysqli_fetch_array($result1))
                        
                          {
                        
                          echo "<tr>";
                        
                          echo "<td>" . $row['id_assign'] . "</td>";
                        
                          echo "<td>" . $row['NAME'] . "</td>";
                        
                          echo "<td>" . $row['phonenumber'] . "</td>";
                        
                          echo "<td>" . $row['address'] . "</td>";
                          echo "<td>" . $row['password'] . "</td>";
                        
                          echo "</tr>";
                        
                          }
                        
                        echo "</table></center>";
                          
                        echo"<br>";
                        echo"<hr>";

                        echo"<center><b>Student details</b></center><br><br>";
                    
                        $sql=" select id_assign,NAME,phonenumber,address,password from user_table where registartiontype=3;";
                        $result1 = mysqli_query($con, $sql);
                        
                        echo "<center><table border='3'>

                        <tr>
                        
                        <th>Id</th>
                        
                        <th>name</th>
                        
                        <th>phonenumber</th>
                        
                        <th>address</th>
                        <th>password</th>
                        
                        </tr>";
                        
                         
                        
                        while($row = mysqli_fetch_array($result1))
                        
                          {
                        
                          echo "<tr>";
                        
                          echo "<td>" . $row['id_assign'] . "</td>";
                        
                          echo "<td>" . $row['NAME'] . "</td>";
                        
                          echo "<td>" . $row['phonenumber'] . "</td>";
                        
                          echo "<td>" . $row['address'] . "</td>";
                          echo "<td>" . $row['password'] . "</td>";
                        
                          echo "</tr>";
                        
                          }
                        
                        echo "</table></center>";
                          
                          mysqli_close($con);
                       
                      }
                      else{
                          mysqli_error($con);
                      }
                     
                    
                   
                 ?>
           
			
            <div class="signuptextbox">
            <form action="details_updated.php" method= "post">
               
				<h3>enter id to change details</h3>
                <br>
                <input type="number" id="id" name="id"  required pattern="{1,100000000}" >
				<br>
				<br>
                <br><br>
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