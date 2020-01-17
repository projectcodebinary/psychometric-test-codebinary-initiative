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
    $x=$_POST['11'];
	 $a=$_POST['12'];
     $b=$_POST['13'];
     $c=$_POST['14'];
     $d=$_POST['15'];
     $e=$_POST['16'];
     $f=$_POST['17'];
    $g=$_POST['18'];
    $h=$_POST['19'];
     $i=$_POST['20'];
    

   $response=$x.','.$a.','.$b.','.$c.','.$d.','.$e.','.$f.','.$g.','.$h.','.$i ;
    // echo $x;
	$sql = "UPDATE responses  SET q11to20='$response'
	WHERE email='$email' ";
    // $sql="INSERT INTO responses (q11to20) VALUES ('$response')";
    
    mysqli_query($conn,$sql);
    header("Location: form42.php");
    
    
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
    <!-- ques 11-20 -->
    <div class="check-form">
        <form method="POST" action="form41.php"style="padding-left: 30%;">
            11. I am usually successful defending my own viewpoint: 
			<br>
            <input type="radio" name="11" value="strongly disagree"required> Strongly Disagree
            <input type="radio" name="11" value="disagree">  Disagree
            <input type="radio" name="11" value="agree"> Agree
			<input type="radio" name="11" value="strongly agree"> Strongly Agree<br>
			<br>
			12. I quickly pick up on others' feelings and emotions:
			<br>
            <input type="radio" name="12" value="strongly disagree"required> Strongly Disagree
            <input type="radio" name="12" value="disagree">  Disagree
            <input type="radio" name="12" value="agree"> Agree
			<input type="radio" name="12" value="strongly agree"> Strongly Agree<br>
			<br>
			13. I believe I deserve the success I have had:
			<br>
            <input type="radio" name="13" value="strongly disagree"required> Strongly Disagree
            <input type="radio" name="13" value="disagree">  Disagree
            <input type="radio" name="13" value="agree"> Agree
			<input type="radio" name="13" value="strongly agree"> Strongly Agree<br>
			<br> 	 
		14. If I see someone needs help I try to do all I can for them: 
		<br>
            <input type="radio" name="14" value="strongly disagree"required> Strongly Disagree
            <input type="radio" name="14" value="disagree">  Disagree
            <input type="radio" name="14" value="agree"> Agree
			<input type="radio" name="14" value="strongly agree"> Strongly Agree<br>
			<br>

		15. I will adjust my thinking when faced with new information: 
		<br>
            <input type="radio" name="15" value="strongly disagree"required> Strongly Disagree
            <input type="radio" name="15" value="disagree">  Disagree
            <input type="radio" name="15" value="agree"> Agree
			<input type="radio" name="15" value="strongly agree"> Strongly Agree<br>
			<br>	 	 	 	 	 
		16. I very much enjoy working in a team: 
		<br>
            <input type="radio" name="16" value="strongly disagree"required> Strongly Disagree
            <input type="radio" name="16" value="disagree">  Disagree
            <input type="radio" name="16" value="agree"> Agree
			<input type="radio" name="16" value="strongly agree"> Strongly Agree<br>
			<br>
		
		17.  I don't let constructive criticism bother me:
		<br>
            <input type="radio" name="17" value="strongly disagree"required> Strongly Disagree
            <input type="radio" name="17" value="disagree">  Disagree
            <input type="radio" name="17" value="agree"> Agree
			<input type="radio" name="17" value="strongly agree"> Strongly Agree<br>
			<br>

		18. I remain calm even in tense situations: 
		<br>
            <input type="radio" name="18" value="strongly disagree"required> Strongly Disagree
            <input type="radio" name="18" value="disagree">  Disagree
            <input type="radio" name="18" value="agree"> Agree
			<input type="radio" name="18" value="strongly agree"> Strongly Agree<br>
			<br>
		19. Empathising with others comes easily to me:
		<br>
            <input type="radio" name="19" value="strongly disagree"required> Strongly Disagree
            <input type="radio" name="19" value="disagree">  Disagree
            <input type="radio" name="19" value="agree"> Agree
			<input type="radio" name="19" value="strongly agree"> Strongly Agree<br>
			<br>
		20. I enjoy influencing people to my way of thinking:
		<br>
            <input type="radio" name="20" value="strongly disagree"required> Strongly Disagree
            <input type="radio" name="20" value="disagree">  Disagree
            <input type="radio" name="20" value="agree"> Agree
			<input type="radio" name="20" value="strongly agree"> Strongly Agree<br>
			<br>
            <input type="submit" name="submit"style="margin-left: 20%; background: silver;">
           
        </form>
    </div>
</body>