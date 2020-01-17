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
    $x=$_POST['51'];
	 $a=$_POST['52'];
     $b=$_POST['53'];
     $c=$_POST['54'];
     $d=$_POST['55'];
     $e=$_POST['56'];
     $f=$_POST['57'];
    $g=$_POST['58'];
    $h=$_POST['59'];
     $i=$_POST['60'];
    

   $response=$x.','.$a.','.$b.','.$c.','.$d.','.$e.','.$f.','.$g.','.$h.','.$i ;
    // echo $x;
	$sql = "UPDATE responses  SET q51to60='$response'
	WHERE email='$email' ";
    // $sql="INSERT INTO responses (q51to60) VALUES ('$response')";
    
    mysqli_query($conn,$sql);
    header("Location: form46.php");
    
    
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
    
    <div class="check-form" >
        <form method="POST" action="form45.php" style="padding-left: 30%;">
            51. I like to think of myself as being supportive and helpful:
		<br>
            <input type="radio" name="51" value="strongly disagree"required> Strongly Disagree
            <input type="radio" name="51" value="disagree">  Disagree
            <input type="radio" name="51" value="agree"> Agree
			<input type="radio" name="51" value="strongly agree"> Strongly Agree<br>
			<br>  	 	 	 
		52. I believe that taking care of the details is very important:
		<br>
            <input type="radio" name="52" value="strongly disagree"required> Strongly Disagree
            <input type="radio" name="52" value="disagree">  Disagree
            <input type="radio" name="52" value="agree"> Agree
			<input type="radio" name="52" value="strongly agree"> Strongly Agree<br>
			<br>  						
		
		
			<!-- Strongly disagree	Disagree	Neither	Agree	Strongly agree -->
		53. I can cope with high levels of stress easily:
		<br>
            <input type="radio" name="53" value="strongly disagree"required> Strongly Disagree
            <input type="radio" name="53" value="disagree">  Disagree
            <input type="radio" name="53" value="agree"> Agree
			<input type="radio" name="53" value="strongly agree"> Strongly Agree<br>
			<br>  		 	 	 	 	 
		54. I like to get involved in intellectual debate:
		<br>
            <input type="radio" name="54" value="strongly disagree"required> Strongly Disagree
            <input type="radio" name="54" value="disagree">  Disagree
            <input type="radio" name="54" value="agree"> Agree
			<input type="radio" name="54" value="strongly agree"> Strongly Agree<br>
			<br>  		 	 	 	 	 
		55. I like to think of myself as being supportive and helpful:
		<br>
            <input type="radio" name="55" value="strongly disagree"required> Strongly Disagree
            <input type="radio" name="55" value="disagree">  Disagree
            <input type="radio" name="55" value="agree"> Agree
			<input type="radio" name="55" value="strongly agree"> Strongly Agree<br>
			<br>  		 	 	 	 	 
		56. I believe that taking care of the details is very important:
		<br>
            <input type="radio" name="56" value="strongly disagree"required> Strongly Disagree
            <input type="radio" name="56" value="disagree">  Disagree
            <input type="radio" name="56" value="agree"> Agree
			<input type="radio" name="56" value="strongly agree"> Strongly Agree<br>
			<br>  						
		
		
			<!-- Strongly disagree	Disagree	Neither	Agree	Strongly agree -->
		57. I remain calm even in tense situations:
		<br>
            <input type="radio" name="57" value="strongly disagree"required> Strongly Disagree
            <input type="radio" name="57" value="disagree">  Disagree
            <input type="radio" name="57" value="agree"> Agree
			<input type="radio" name="57" value="strongly agree"> Strongly Agree<br>
			<br>  		 	 	 	 	 
		58. I like my life to happen at a fast pace:
		<br>
            <input type="radio" name="58" value="strongly disagree"required> Strongly Disagree
            <input type="radio" name="58" value="disagree">  Disagree
            <input type="radio" name="58" value="agree"> Agree
			<input type="radio" name="58" value="strongly agree"> Strongly Agree<br>
			<br>  		 	 	 	 
		59. I have a strong sense of adventure:
		<br>
            <input type="radio" name="59" value="strongly disagree"required> Strongly Disagree
            <input type="radio" name="59" value="disagree">  Disagree
            <input type="radio" name="59" value="agree"> Agree
			<input type="radio" name="59" value="strongly agree"> Strongly Agree<br>
			<br>  		 	 	 	 	 
		60. I prefer having very challenging goals and tasks:
		<br>
            <input type="radio" name="60" value="strongly disagree"required> Strongly Disagree
            <input type="radio" name="60" value="disagree">  Disagree
            <input type="radio" name="60" value="agree"> Agree
			<input type="radio" name="60" value="strongly agree"> Strongly Agree<br>
            <br> 
            
            <input type="submit" name="submit"style="margin-left: 20%; background: silver;">
           
        </form>
    </div>
</body>