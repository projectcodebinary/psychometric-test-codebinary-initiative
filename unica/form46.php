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
    
    $x=$_POST['61'];
	 $a=$_POST['62'];
     $b=$_POST['63'];
     $c=$_POST['64'];
     $d=$_POST['65'];
     $e=$_POST['66'];
     $f=$_POST['67'];
    $g=$_POST['68'];
    $h=$_POST['69'];
     $i=$_POST['70'];
    

   $response=$x.','.$a.','.$b.','.$c.','.$d.','.$e.','.$f.','.$g.','.$h.','.$i ;
    // echo $x;
	$sql = "UPDATE responses  SET q61to70='$response'
	WHERE email='$email' ";
    // $sql="INSERT INTO responses (q61to70) VALUES ('$response')";
    
    mysqli_query($conn,$sql);
    header("Location: form47.php");
    
 
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
        <form method="POST" action="form46.php" style="padding-left: 30%;">
            61. I remain calm even in tense situations:
		<br>
            <input type="radio" name="61" value="strongly disagree"required> Strongly Disagree
            <input type="radio" name="61" value="disagree">  Disagree
            <input type="radio" name="61" value="agree"> Agree
			<input type="radio" name="61" value="strongly agree"> Strongly Agree<br>
			<br>  		 	 	 	 	 
		62. I like my life to happen at a fast pace:
		<br>
            <input type="radio" name="62" value="strongly disagree"required> Strongly Disagree
            <input type="radio" name="62" value="disagree">  Disagree
            <input type="radio" name="62" value="agree"> Agree
			<input type="radio" name="62" value="strongly agree"> Strongly Agree<br>
			<br>  	 	 	 	 	 
		63. I have a strong sense of adventure:
		<br>
            <input type="radio" name="63" value="strongly disagree"required> Strongly Disagree
            <input type="radio" name="63" value="disagree">  Disagree
            <input type="radio" name="63" value="agree"> Agree
			<input type="radio" name="63" value="strongly agree"> Strongly Agree<br>
			<br>  		 	 	 	 	 
		64. I prefer having very challenging goals and tasks:
		<br>
            <input type="radio" name="64" value="strongly disagree"required> Strongly Disagree
            <input type="radio" name="64" value="disagree">  Disagree
            <input type="radio" name="64" value="agree"> Agree
			<input type="radio" name="64" value="strongly agree"> Strongly Agree<br>
			<br>  						
		
		
		
			<!-- Strongly disagree	Disagree	Neither	Agree	Strongly agree -->
		65. I tend to get over setbacks easily:
		<br>
            <input type="radio" name="65" value="strongly disagree"required> Strongly Disagree
            <input type="radio" name="65" value="disagree">  Disagree
            <input type="radio" name="65" value="agree"> Agree
			<input type="radio" name="65" value="strongly agree"> Strongly Agree<br>
			<br>  		 	 	 	 	 
		66. I enjoy building relationships with all sorts of people	:
		<br>
            <input type="radio" name="66" value="strongly disagree"required> Strongly Disagree
            <input type="radio" name="66" value="disagree">  Disagree
            <input type="radio" name="66" value="agree"> Agree
			<input type="radio" name="66" value="strongly agree"> Strongly Agree<br>
			<br>  		 	 	 	 
		67. I get excited by new theories and abstract ideas:
		<br>
            <input type="radio" name="67" value="strongly disagree"required> Strongly Disagree
            <input type="radio" name="67" value="disagree">  Disagree
            <input type="radio" name="67" value="agree"> Agree
			<input type="radio" name="67" value="strongly agree"> Strongly Agree<br>
			<br>  		 	 	 	 	 
		68. I like to plan my work in advance:
		<br>
            <input type="radio" name="68" value="strongly disagree"required> Strongly Disagree
            <input type="radio" name="68" value="disagree">  Disagree
            <input type="radio" name="68" value="agree"> Agree
			<input type="radio" name="68" value="strongly agree"> Strongly Agree<br>
			<br>  	 	 	 	 	 
		
		
		69. I try not to let things get me down:
		<br>
            <input type="radio" name="69" value="strongly disagree"required> Strongly Disagree
            <input type="radio" name="69" value="disagree">  Disagree
            <input type="radio" name="69" value="agree"> Agree
			<input type="radio" name="69" value="strongly agree"> Strongly Agree<br>
			<br>  		 	 	 	 	 
		70. I have a wide circle of contacts and friends:
		<br>
            <input type="radio" name="70" value="strongly disagree"required> Strongly Disagree
            <input type="radio" name="70" value="disagree">  Disagree
            <input type="radio" name="70" value="agree"> Agree
			<input type="radio" name="70" value="strongly agree"> Strongly Agree<br>
            <br> 
            
            <input type="submit" name="submit"style="margin-left: 20%; background: silver;">
            
        </form>
    </div>
</body>