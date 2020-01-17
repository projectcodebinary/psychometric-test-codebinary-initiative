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
    $x=$_POST['41'];
	 $a=$_POST['42'];
     $b=$_POST['43'];
     $c=$_POST['44'];
     $d=$_POST['45'];
     $e=$_POST['46'];
     $f=$_POST['47'];
    $g=$_POST['48'];
    $h=$_POST['49'];
     $i=$_POST['50'];
    

   $response=$x.','.$a.','.$b.','.$c.','.$d.','.$e.','.$f.','.$g.','.$h.','.$i ;
    // echo $x;
	$sql = "UPDATE responses  SET q41to50='$response'
	WHERE email='$email' ";
    // $sql="INSERT INTO responses (q41to50) VALUES ('$response')";
    
    mysqli_query($conn,$sql);
    header("Location: form45.php");
    
    
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
        <form method="POST" action="form44.php" style="padding-left: 30%;">
            41. I tend to be quite a relaxed person: 
		<br>
            <input type="radio" name="41" value="strongly disagree"required> Strongly Disagree
            <input type="radio" name="41" value="disagree">  Disagree
            <input type="radio" name="41" value="agree"> Agree
			<input type="radio" name="41" value="strongly agree"> Strongly Agree<br>
			<br>  	 	 	 	 
		42. I am happy to take the lead in a group	 	
		<br>
            <input type="radio" name="42" value="strongly disagree"required> Strongly Disagree
            <input type="radio" name="42" value="disagree">  Disagree
            <input type="radio" name="42"value="agree"> Agree
			<input type="radio" name="42" value="strongly agree"> Strongly Agree<br>
			<br>  	 	 	 	 
		43. More radical ideas appeal to me more than traditional ones	 
		<br>
            <input type="radio" name="43" value="strongly disagree"required> Strongly Disagree
            <input type="radio" name="43" value="disagree">  Disagree
            <input type="radio" name="43" value="agree"> Agree
			<input type="radio" name="43" value="strongly agree"> Strongly Agree<br>
			<br>  		 	 	 	 
		44. I value the opinions of others			
		<br>
            <input type="radio" name="44" value="strongly disagree"required> Strongly Disagree
            <input type="radio" name="44" value="disagree">  Disagree
            <input type="radio" name="44" value="agree"> Agree
			<input type="radio" name="44" value="strongly agree"> Strongly Agree<br>
			<br>  			
		
		
		45. I tend to be the centre of attention quite often
		<br>
            <input type="radio" name="45" value="strongly disagree"required> Strongly Disagree
            <input type="radio" name="45" value="disagree">  Disagree
            <input type="radio" name="45" value="agree"> Agree
			<input type="radio" name="45" value="strongly agree"> Strongly Agree<br>
			<br>  		 	 	 	 	 
		46. I adapt easily to change
		<br>
            <input type="radio" name="46" value="strongly disagree"required> Strongly Disagree
            <input type="radio" name="46" value="disagree">  Disagree
            <input type="radio" name="46" value="agree"> Agree
			<input type="radio" name="46" value="strongly agree"> Strongly Agree<br>
			<br>  		 	 	 	 	 
		47. Taking other people's feelings into consideration is important to me	
		<br>
            <input type="radio" name="47" value="strongly disagree"required> Strongly Disagree
            <input type="radio" name="47" value="disagree">  Disagree
            <input type="radio" name="47" value="agree"> Agree
			<input type="radio" name="47" value="strongly agree"> Strongly Agree<br>
			<br>  	 	 	 	 	 
		48. I believe that rules are there to be followed		
		<br>
            <input type="radio" name="48" value="strongly disagree"required> Strongly Disagree
            <input type="radio" name="48" value="disagree">  Disagree
            <input type="radio" name="48" value="agree"> Agree
			<input type="radio" name="48" value="strongly agree"> Strongly Agree<br>
			<br>  				
		
		

		49. I can cope with high levels of stress easily
		<br>
            <input type="radio" name="49" value="strongly disagree"required> Strongly Disagree
            <input type="radio" name="49" value="disagree">  Disagree
            <input type="radio" name="49" value="agree"> Agree
			<input type="radio" name="49" value="strongly agree"> Strongly Agree<br>
			<br>  		 	 	 	 	 
		50. I like to get involved in intellectual debate	 
		<br>
            <input type="radio" name="50" value="strongly disagree"required> Strongly Disagree
            <input type="radio" name="50" value="disagree">  Disagree
            <input type="radio" name="50" value="agree"> Agree
			<input type="radio" name="50" value="strongly agree"> Strongly Agree<br>
            <br>  
            
            <input type="submit" name="submit"style="margin-left: 20%; background: silver;">
           
        </form>
    </div>
</body>