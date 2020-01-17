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
    $x=$_POST['31'];
	 $a=$_POST['32'];
     $b=$_POST['33'];
     $c=$_POST['34'];
     $d=$_POST['35'];
     $e=$_POST['36'];
     $f=$_POST['37'];
    $g=$_POST['38'];
    $h=$_POST['39'];
     $i=$_POST['40'];
    

   $response=$x.','.$a.','.$b.','.$c.','.$d.','.$e.','.$f.','.$g.','.$h.','.$i ;
    // echo $x;
	$sql = "UPDATE responses  SET q31to40='$response'
	WHERE email='$email' ";
    // $sql="INSERT INTO responses (q31to40) VALUES ('$response')";
    
    mysqli_query($conn,$sql);
    header("Location: form44.php");

    
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
    
    <div class="check-form">
        <form method="POST" action="form43.php" style="padding-left: 30%;">
            31. It takes a lot to make me angry:
		<br>
            <input type="radio" name="31" value="strongly disagree"required> Strongly Disagree
            <input type="radio" name="31" value="disagree">  Disagree
            <input type="radio" name="31" value="agree"> Agree
			<input type="radio" name="31" value="strongly agree"> Strongly Agree<br>
			<br>  	 	 	 
		32. I am most effective when I am working in a team:
		<br>
            <input type="radio" name="32" value="strongly disagree"required> Strongly Disagree
            <input type="radio" name="32" value="disagree">  Disagree
            <input type="radio" name="32" value="agree"> Agree
			<input type="radio" name="32" value="strongly agree"> Strongly Agree<br>
			<br> 				
		
		
		
		33. I often put the needs of others above my own:
		<br>
            <input type="radio" name="33" value="strongly disagree"required> Strongly Disagree
            <input type="radio" name="33" value="disagree">  Disagree
            <input type="radio" name="33" value="agree"> Agree
			<input type="radio" name="33" value="strongly agree"> Strongly Agree<br>
			<br> 	 	 	 	 	 
		34. I can cope with high levels of stress easily:
		<br>
            <input type="radio" name="34" value="strongly disagree"required> Strongly Disagree
            <input type="radio" name="34" value="disagree">  Disagree
            <input type="radio" name="34" value="agree"> Agree
			<input type="radio" name="34" value="strongly agree"> Strongly Agree<br>
			<br> 	 	 	 	 	 
		35. I think it is valuable to recognise my own shortcomings:
		<br>
            <input type="radio" name="35" value="strongly disagree"required> Strongly Disagree
            <input type="radio" name="35" value="disagree">  Disagree
            <input type="radio" name="35" value="agree"> Agree
			<input type="radio" name="35" value="strongly agree"> Strongly Agree<br>
			<br>  	 	 	 	 
		36. Building friendships at work is important to me:
		<br>
            <input type="radio" name="36" value="strongly disagree"required> Strongly Disagree
            <input type="radio" name="36" value="disagree">  Disagree
            <input type="radio" name="36" value="agree"> Agree
			<input type="radio" name="36" value="strongly agree"> Strongly Agree<br>
			<br> 					
		
		
			
		37. I like to think of myself as being supportive and helpful: 
		<br>
            <input type="radio" name="37" value="strongly disagree"required> Strongly Disagree
            <input type="radio" name="37" value="disagree">  Disagree
            <input type="radio" name="37" value="agree">  Agree
			<input type="radio" name="37" value="strongly agree"> Strongly Agree<br>
			<br>  	 	 	 
		38. I don't tend to lose my temper easily: 
		<br>
            <input type="radio" name="38" value="strongly disagree"required> Strongly Disagree
            <input type="radio" name="38" value="disagree">  Disagree
            <input type="radio" name="38" value="agree"> Agree
			<input type="radio" name="38" value="strongly agree"> Strongly Agree<br>
			<br> 	 	 	 	 	 
		39. I am confident in my own capabilities:
		<br>
            <input type="radio" name="39" value="strongly disagree"required> Strongly Disagree
            <input type="radio" name="39" value="disagree">  Disagree
            <input type="radio" name="39" value="agree"> Agree
			<input type="radio" name="39" value="strongly agree"> Strongly Agree<br>
			<br> 	 	 	 	 	 
		40. I prefer working in a harmonious team:
		<br>
            <input type="radio" name="40" value="strongly disagree"required> Strongly Disagree
            <input type="radio" name="40" value="disagree">  Disagree
            <input type="radio" name="40" value="agree"> Agree
			<input type="radio" name="40" value="strongly agree"> Strongly Agree<br>
            <br> 
            <input type="submit" name="submit"style="margin-left: 20%; background: silver;">
           
        </form>
    </div>
</body>