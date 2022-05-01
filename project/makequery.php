<html>

<head>
    <title>
        make query
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
               make query
            </h1>
        </div>
    </nav>
	
	<div class="signupform">
        <div class="signupformheader">
            <h2>
                
            </h2>
        </div>

        <div class="signupformdata">
                 <?php
                    $pass=$_POST['pass'];
                    $id=$_POST['id'];
                 ?>
            <form action="makequery1.php" method= "post">
            <input type="hidden" name="id" value="<?php echo $id; ?>">
            <input type="hidden" name="pass" value="<?php echo $pass; ?>">
            <h3>type your query here!</h3>
				<textarea name="textarea" rows="5" cols="30" placeholder="Comment text."></textarea>
				<h3>enter teacher ID</h3>
                <input type="text" id="teacherid" name="teacherid" placeholder="ID Here" size="40">
				<br>
				<br>
                <br><br>
                <button type="submit" name="submit" > Submit</button>
                
            </form>
			
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