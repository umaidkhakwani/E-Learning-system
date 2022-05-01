<html>

<head>
    <title>
        english exam
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
               exam time
            </h1>
        </div>
    </nav>
	

	<div class="signupform">
        <div class="signupformheader">
            <h1>
                downlaod paper and submit the form..

            </h1>
            
    <p>Open a PDF file <a href="docs/english.pdf">english exam</a>.</p>
        </div>

        <?php
        $id=$_POST['id'];
        $course=$_POST['course'];
        ?>
        <div class="signupformdata">
            <form action="updateexamquery.php" method= "post">
                 <input type="hidden" name="id" value="<?php echo $id; ?>">
            
            <input type="hidden" name="course" value="<?php echo $course; ?>">
				<h3>answer 1</h3>
                <input type="text" id="ans1" name="ans1" placeholder="a/b/c/d" required pattern="[a-zA-Z\s]" >
				<br>
				<br>
                <h3>answer 2</h3>
                <input type="text" id="ans2" name="ans2" placeholder="a/b/c/d" required pattern="[a-zA-Z\s]" >
				<br>
                <h3>answer 3</h3>
                <input type="text" id="ans3" name="ans3" placeholder="a/b/c/d" required pattern="[a-zA-Z\s]" >
				<br>
               
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