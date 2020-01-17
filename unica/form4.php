<?php

$conn= mysqli_connect("localhost","root","","psychometric");
if(!$conn){
    die("Connection failed". mysqli_connect_error());
    
}
session_start();
// echo $_SESSION['email'];
if(isset($_POST['submit']))
{
	$email=$_SESSION['email'];
    
    $x=$_POST['1'];
	 $a=$_POST['2'];
     $b=$_POST['3'];
     $c=$_POST['4'];
     $d=$_POST['5'];
     $e=$_POST['6'];
     $f=$_POST['7'];
    $g=$_POST['8'];
    $h=$_POST['9'];
     $i=$_POST['10'];
    

   $response=$x.','.$a.','.$b.','.$c.','.$d.','.$e.','.$f.','.$g.','.$h.','.$i ;
    // echo $x;

	$sql = "UPDATE responses  SET q1to10='$response'
	WHERE email='$email' ";
	//  $sql="INSERT INTO responses (q1to10) VALUES ('$response')";
    
    mysqli_query($conn,$sql);
    header("Location: form41.php");
    
    
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="description" content="Psychometric test">
	<meta name="keywords" content="event, unica, creative, html">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="img/favicon.ico" rel="shortcut icon"/>

	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Rubik:400,400i,500,500i,700,700i" rel="stylesheet">

	<!-- Stylesheets -->
	<link rel="stylesheet" href="css/bootstrap.min.css"/>
	<link rel="stylesheet" href="css/font-awesome.min.css"/>
	<link rel="stylesheet" href="css/themify-icons.css"/>
	<link rel="stylesheet" href="css/magnific-popup.css"/>
	<link rel="stylesheet" href="css/animate.css"/>
	<link rel="stylesheet" href="css/owl.carousel.css"/>
	<link rel="stylesheet" href="css/style.css"/>


	<title>Test</title>
</head>
<body style="background: beige;">
	<!-- Header section  -->
	<nav class="nav-section">
		<div class="container">
			
			<ul class="main-menu">
				<li ><a href="index.html">Home</a></li>
				<li class="active"><a href="form1.html">Practice Test</a></li>

			</ul>
		</div>
    </nav>
    <!-- Breadcrumb section -->
	<div class="site-breadcrumb">
		<div class="container">
            <a href="#"><i class="fa fa-home"></i> Practice test</a>
             <i class="fa fa-angle-right"></i>
			<span>Continue...</span>
		</div>
	</div>
    <!-- Breadcrumb section end -->
	<!-- Progress bar -->
<div class="container">
    <div class="check-form">
        <form method="POST" action="form4.php" style="padding-left: 30%;">
			1. I welcome feedback on my performance from others: 
			<br>
            
            <input type="radio" name="1" value="strongly disagree" required> Strongly Disagree
            <input type="radio" name="1" value="disagree">  Disagree
            <input type="radio" name="1" value="agree"> Agree
			<input type="radio" name="1" value="strongly agree"> Strongly Agree
			<br><br>
			
			2. I find it easy to get my own point of view across to others: 
			<br>
            <input type="radio" name="2" value="strongly disagree" required> Strongly Disagree
            <input type="radio" name="2" value="disagree">  Disagree
            <input type="radio" name="2" value="agree"> Agree
			<input type="radio" name="2" value="strongly agree"> Strongly Agree
			<br><br>

			3. I love hearing people talk about themselves: 
			<br>
            <input type="radio" name="3" value="strongly disagree" required> Strongly Disagree
            <input type="radio" name="3" value="disagree">  Disagree
            <input type="radio" name="3" value="agree"> Agree
			<input type="radio" name="3" value="strongly agree"> Strongly Agree
			<br><br>

			4. I adapt easily to change:	
			<br>
            <input type="radio" name="4" value="strongly disagree" required> Strongly Disagree
            <input type="radio" name="4" value="disagree">  Disagree
            <input type="radio" name="4" value="agree"> Agree
			<input type="radio" name="4" value="strongly agree"> Strongly Agree
			<br><br>

			5. I enjoy convincing others to change their mind.
			<br>
            <input type="radio" name="5" value="strongly disagree" required> Strongly Disagree
            <input type="radio" name="5" value="disagree">  Disagree
            <input type="radio" name="5" value="agree"> Agree
			<input type="radio" name="5" value="strongly agree"> Strongly Agree
			<br><br>
			6. I tend to be quite a relaxed person: 
			<br>
            <input type="radio" name="6" value="strongly disagree"required> Strongly Disagree
            <input type="radio" name="6" value="disagree">  Disagree
            <input type="radio" name="6" value="agree"> Agree
			<input type="radio" name="6" value="strongly agree"> Strongly Agree<br>
			<br>
			7. I am happiest when I know I have provided good service to others:
			<br>
            <input type="radio" name="7" value="strongly disagree" required> Strongly Disagree
            <input type="radio" name="7" value="disagree">  Disagree
            <input type="radio" name="7" value="agree"> Agree
			<input type="radio" name="7" value="strongly agree"> Strongly Agree<br>
			<br>
			8. I feel assured that I can do what is expected of me: 
			<br>
            <input type="radio" name="8" value="strongly disagree"required> Strongly Disagree
            <input type="radio" name="8" value="disagree">  Disagree
            <input type="radio" name="8" value="agree"> Agree
			<input type="radio" name="8" value="strongly agree"> Strongly Agree<br>
			<br>
			9. I see the funny side when people laugh at my expense: 
			<br>
            <input type="radio" name="9" value="strongly disagree" required> Strongly Disagree
            <input type="radio" name="9" value="disagree">  Disagree
            <input type="radio" name="9" value="agree"> Agree
			<input type="radio" name="9" value="strongly agree"> Strongly Agree<br>
			<br>
			10. I am quick to adapt to new circumstances: 
			<br>
            <input type="radio" name="10" value="strongly disagree"required> Strongly Disagree
            <input type="radio" name="10" value="disagree">  Disagree
            <input type="radio" name="10" value="agree"> Agree
			<input type="radio" name="10" value="strongly agree"> Strongly Agree<br>
			<br>
			<input type="submit" name="submit" style="margin-left: 20%; background: silver;">
            <!-- <div class="site-btn" style="margin-left: 10%;">
                <a href="form41.html">Continue...</a>
    
            </div> -->

			
        </form>
    </div>
	</div>
</body>
</html