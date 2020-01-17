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
    $x=$_POST['21'];
	 $a=$_POST['22'];
     $b=$_POST['23'];
     $c=$_POST['24'];
     $d=$_POST['25'];
     $e=$_POST['26'];
     $f=$_POST['27'];
    $g=$_POST['28'];
    $h=$_POST['29'];
     $i=$_POST['30'];
    

   $response=$x.','.$a.','.$b.','.$c.','.$d.','.$e.','.$f.','.$g.','.$h.','.$i ;
    // echo $x;
	$sql = "UPDATE responses  SET q21to30='$response'
	WHERE email='$email' ";
    // $sql="INSERT INTO responses (q21to30) VALUES ('$response')";
    
    mysqli_query($conn,$sql);
    header("Location: form43.php");

    
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
<body style="background: beige">
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
    <!-- ques 11-20 --> 
    <div class="check-form">
        <form method="POST" action="form42.php"style="padding-left: 30%;">
            21. I feel positive about myself and my capabilities: 
		<br>
            <input type="radio" name="21" value="strongly disagree"required> Strongly Disagree
            <input type="radio" name="21" value="disagree">  Disagree
            <input type="radio" name="21" value="agree"> Agree
			<input type="radio" name="21" value="strongly agree"> Strongly Agree<br>
			<br>
		22. I am comfortable when faced with uncertainity: 
		<br>
            <input type="radio" name="22" value="strongly disagree"required> Strongly Disagree
            <input type="radio" name="22" value="disagree">  Disagree
            <input type="radio" name="22"value="agree"> Agree
			<input type="radio" name="22" value="strongly agree"> Strongly Agree<br>
			<br>
		
		23. Taking other people's feelings into consideration is important for me: 
		<br>
            <input type="radio" name="23" value="strongly disagree"required> Strongly Disagree
            <input type="radio" name="23" value="disagree">  Disagree
            <input type="radio" name="23"value="agree"> Agree
			<input type="radio" name="23" value="strongly agree"> Strongly Agree<br>
			<br>
		
		24. Creating team spirit comes naturally to me: 
		<br>
            <input type="radio" name="24" value="strongly disagree"required> Strongly Disagree
            <input type="radio" name="24" value="disagree">  Disagree
            <input type="radio" name="24" value="agree"> Agree
			<input type="radio" name="24" value="strongly agree"> Strongly Agree<br>
			<br> 

	
		25. I thrive on juggling multiple demands: 
		<br>
            <input type="radio" name="25" value="strongly disagree"required> Strongly Disagree
            <input type="radio" name="25" value="disagree">  Disagree
            <input type="radio" name="25" value="agree"> Agree
			<input type="radio" name="25" value="strongly agree"> Strongly Agree<br>
			<br> 	 	 	 	 
		26. I enjoy meeting people from backgrounds very different to my own: 
		<br>
            <input type="radio" name="26" value="strongly disagree"required> Strongly Disagree
            <input type="radio" name="26" value="disagree">  Disagree
            <input type="radio" name="26" value="agree"> Agree
			<input type="radio" name="26" value="strongly agree"> Strongly Agree<br>
			<br> 	 	 	 	 	 
		27. Getting buy-in from others comes easily to me: 
		<br>
            <input type="radio" name="27" value="strongly disagree"required> Strongly Disagree
            <input type="radio" name="27" value="disagree">  Disagree
            <input type="radio" name="27" value="agree"> Agree
			<input type="radio" name="27" value="strongly agree"> Strongly Agree<br>
			<br>  	 	 	 	 
		28. Understanding my own strengths is important to me:
		<br>
            <input type="radio" name="28" value="strongly disagree"required> Strongly Disagree
            <input type="radio" name="28" value="disagree">  Disagree
            <input type="radio" name="28" value="agree"> Agree
			<input type="radio" name="28" value="strongly agree"> Strongly Agree<br>
			<br> 				
		
		
		
		29. I find it comes easily to read others' emotions:
		<br>
            <input type="radio" name="29" value="strongly disagree"required> Strongly Disagree
            <input type="radio" name="29" value="disagree">  Disagree
            <input type="radio" name="29" value="agree"> Agree
			<input type="radio" name="29" value="strongly agree"> Strongly Agree<br>
			<br>  	 	 	 	 
		30. I welcome difficult and stretching assignments:
		<br>
            <input type="radio" name="30" value="strongly disagree"required> Strongly Disagree
            <input type="radio" name="30" value="disagree">  Disagree
            <input type="radio" name="30" value="agree"> Agree
			<input type="radio" name="30" value="strongly agree"> Strongly Agree<br>
			<br> 	 	 	 	 
            <input type="submit" name="submit"style="margin-left: 20%; background: silver;">
        </form>
    </div>
</body>