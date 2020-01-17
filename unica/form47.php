<?php
$conn= mysqli_connect("localhost","root","","psychometric");
if(!$conn){
    die("Connection failed". mysqli_connect_error());
    
}

session_start();
if(isset($_POST['submit']))
{
    $email=$_SESSION['email'];

    $x=$_POST['71'];
	 $a=$_POST['72'];
     $b=$_POST['73'];
     $c=$_POST['74'];
     $d=$_POST['75'];
     $e=$_POST['76'];
     $f=$_POST['77'];
    $g=$_POST['78'];
    $h=$_POST['79'];
     $i=$_POST['80'];
    

   $response=$x.','.$a.','.$b.','.$c.','.$d.','.$e.','.$f.','.$g.','.$h.','.$i ;
    // echo $x;
    $sql = "UPDATE responses  SET q71to80='$response'
	WHERE email='$email' ";
    // $sql="INSERT INTO responses (q71to80) VALUES ('$response')";
    
    mysqli_query($conn,$sql);
   
    header("Location: genpdf.php");
    
    
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
        <form method="POST" action="form47.php" style="padding-left: 30%;">
            71. I often put the needs of others above my own:
            <br>
                <input type="radio" name="71" value="strongly disagree" required> Strongly Disagree
                <input type="radio" name="71" value="disagree">  Disagree
                <input type="radio" name="71" value="agree"> Agree
                <input type="radio" name="71" value="strongly agree"> Strongly Agree<br>
                <br>  		 	 	 	 	 
            72. Hitting deadlines is very important to me:
            <br>
                <input type="radio" name="72" value="strongly disagree"required> Strongly Disagree
                <input type="radio" name="72" value="disagree">  Disagree
                <input type="radio" name="72" value="agree"> Agree
                <input type="radio" name="72" value="strongly agree"> Strongly Agree<br>
                <br>  						
            
            
            
            73. I enjoy influencing people to my way of thinking:
            <br>
                <input type="radio" name="73" value="strongly disagree"required> Strongly Disagree
                <input type="radio" name="73" value="disagree">  Disagree
                <input type="radio" name="73" value="agree"> Agree
                <input type="radio" name="73" value="strongly agree"> Strongly Agree<br>
                <br>  		 	 	 	 	 
            74. I think of myself as being extremely conscientious:
            <br>
                <input type="radio" name="74" value="strongly disagree"required> Strongly Disagree
                <input type="radio" name="74" value="disagree">  Disagree
                <input type="radio" name="74" value="agree"> Agree
                <input type="radio" name="74" value="strongly agree"> Strongly Agree<br>
                <br>  		 	 	 	 	 
            75. If I see someone needs help I try to do all I can for them:
            <br>
                <input type="radio" name="75" value="strongly disagree"required> Strongly Disagree
                <input type="radio" name="75" value="disagree">  Disagree
                <input type="radio" name="75" value="agree"> Agree
                <input type="radio" name="75" value="strongly agree"> Strongly Agree<br>
                <br>  		 	 	 	 	 
            76. I love hearing about new ideas and innovations:
            <br>
                <input type="radio" name="76" value="strongly disagree"required> Strongly Disagree
                <input type="radio" name="76" value="disagree">  Disagree
                <input type="radio" name="76" value="agree"> Agree
                <input type="radio" name="76" value="strongly agree"> Strongly Agree<br>
                <br>  						
            
            
            77. I don't feel anxious or tense very often:
            <br>
                <input type="radio" name="77" value="strongly disagree"required> Strongly Disagree
                <input type="radio" name="77" value="disagree">  Disagree
                <input type="radio" name="77" value="agree"> Agree
                <input type="radio" name="77" value="strongly agree"> Strongly Agree<br>
                <br>  		 	 	 	 	 
            78. I enjoy having variety in my work:
            <br>
                <input type="radio" name="78" value="strongly disagree"required> Strongly Disagree
                <input type="radio" name="78" value="disagree">  Disagree
                <input type="radio" name="78" value="agree"> Agree
                <input type="radio" name="78" value="strongly agree"> Strongly Agree<br>
                <br>  		 	 	 	 	 
            79. I love hearing people talk about themselves:
            <br>
                <input type="radio" name="79" value="strongly disagree"required> Strongly Disagree
                <input type="radio" name="79" value="disagree">  Disagree
                <input type="radio" name="79" value="agree"> Agree
                <input type="radio" name="79" value="strongly agree"> Strongly Agree<br>
                <br>  		 	 	 	 	 
            80. I enjoy competitive situations:
            <br>
                <input type="radio" name="80" value="strongly disagree"required> Strongly Disagree
                <input type="radio" name="80" value="disagree">  Disagree
                <input type="radio" name="80" value="agree"> Agree
                <input type="radio" name="80" value="strongly agree"> Strongly Agree<br>
                <br>  						
            <input type="submit" name="submit"style="margin-left: 20%; background: silver;">

               
                
            </div>						
            
            
    
        </form>
        
    </div>
</body>