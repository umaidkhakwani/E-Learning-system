<html>

<head>
    <title>
        udapte-info
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
                        $phone=$_POST['phoneno'];
                        $pass=$_POST['pwd'];
                        $addre=$_POST['address'];
                        if($phone!=''){
                            $sql=" update user_table set phonenumber='$phone' where id_assign='$id'";
                            if (mysqli_query($con, $sql)) {
                            
                                echo '<div align="center">' ."updated phonenumber<br>" .'</div>';
                                
                             
                               
            
            
                              } else {
                                echo "Error updating phonenumber: " . mysqli_error($con);
                              }
                        }
                        if($pass!=''){
                            $sql=" update user_table set password='$pass' where id_assign='$id'";
                            if (mysqli_query($con, $sql)) {
                            
                                echo '<div align="center">' ."updated password<br>" .'</div>';
                                
                             
                               
            
            
                              } else {
                                echo "Error updating password: " . mysqli_error($con);
                              }
                        }

                        if($addre!=''){
                            $sql=" update user_table set address='$addre' where id_assign='$id'";
                            if (mysqli_query($con, $sql)) {
                            
                                echo '<div align="center">' ."updated address<br>" .'</div>';
                                
                             
                               
            
            
                              } else {
                                echo "Error updating address: " . mysqli_error($con);
                              }
                        }
                      
        

                        
                        
                    
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
                      
                          
                          mysqli_close($con);
                       
                      }
                      else{
                          mysqli_error($con);
                      }
                     

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