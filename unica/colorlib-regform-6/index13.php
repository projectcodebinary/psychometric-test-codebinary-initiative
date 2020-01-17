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
    
    $x=$_POST['message21'];
    $a=$_POST['message22'];
     $b=$_POST['message23'];
     $c=$_POST['message24'];
     $d=$_POST['message25'];
     $e=$_POST['message26'];
     $f=$_POST['message27'];
    $g=$_POST['message28'];
    $h=$_POST['message29'];
     $i=$_POST['message30'];
    

   
    
     $sql = "UPDATE responses  SET ques21 ='$x', ques22='$a', ques23='$b',ques24='$c',ques25='$d',ques26='$e',ques27='$f',ques28='$g',ques29='$h', ques30='$i'
     WHERE email='$email' ";
  
    //$sql="INSERT INTO responses (ques21, ques22, ques23 ,ques24, ques25, ques26, ques27, ques28, ques29, ques30) VALUES ('$x','$a','$b','$c','$d','$e','$f','$g', '$h','$i')";
    
    mysqli_query($conn,$sql);
    header("Location: ../form4.php");
    
    
}
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Psychometric test">
	<meta name="keywords" content="event, unica, creative, html">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="img/favicon.ico" rel="shortcut icon"/>
    <!-- Title Page-->
    <title>Test</title>

    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">


    <link href="https://fonts.googleapis.com/css?family=Rubik:400,400i,500,500i,700,700i" rel="stylesheet">
	<!-- special fonts -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">

    <!-- Main CSS-->
    <link href="css/main.css" rel="stylesheet" media="all">
    <link rel="stylesheet" href="css/bootstrap.min.css"/>
	<link rel="stylesheet" href="css/font-awesome.min.css"/>
	<link rel="stylesheet" href="css/themify-icons.css"/>
	<link rel="stylesheet" href="css/magnific-popup.css"/>
	<link rel="stylesheet" href="css/animate.css"/>
	<link rel="stylesheet" href="css/owl.carousel.css"/>
	<link rel="stylesheet" href="css/style.css"/>
	<link href="css/main.css" rel="stylesheet" media="all">

</head>

<body>
    
    
    <div class="page-wrapper bg-dark p-t-100 p-b-50">
        
        <div class="wrapper wrapper--w900">
            <div class="card card-6">
                <div class="card-heading">
                    <h2 class="title">Continue...</h2>
                </div>
                <div class="card-body">
                    <form method="POST"action="index13.php">
                       
                        <div class="form-row">
                            <div class="name">
                                21. Give me an example of a time when you were able to successfully persuade someone to see things your way at work.<br>                            </div>
                            <div class="value">
                                <div class="input-group">
                                    <textarea class="textarea--style-6" name="message21" placeholder="Enter your answer" required></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">
                                22. Describe a time when you were the resident technical expert. What did you do to make sure everyone was able to<br> understand you?<br> 
                            </div>
                            <div class="value">
                                <div class="input-group">
                                    <textarea class="textarea--style-6" name="message22" placeholder="Enter your answer"required></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">
                                23. Tell me about a time when you had to rely on written communication to get your ideas across to your team.<br>
                            </div>
                            <div class="value">
                                <div class="input-group">
                                    <textarea class="textarea--style-6" name="message23" placeholder="Enter your answer"required></textarea>
                                </div>
                            </div>
                        </div>
                            
                        <div class="form-row">
                            <div class="name">
                                24. Give me an example of a time when you had to explain something fairly complex to a frustrated client. How did you handle<br> this delicate situation?<br>
                            </div>
                            <div class="value">
                                <div class="input-group">
                                    <textarea class="textarea--style-6" name="message24" placeholder="Enter your answer"required></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">
                                25. Tell me about a successful presentation you gave and why you think it was a hit.<br>                            </div>
                            <div class="value">
                                <div class="input-group">
                                    <textarea class="textarea--style-6" name="message25" placeholder="Enter your answer"required></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">
                                26. Tell me about your proudest professional accomplishment.<br>
                            </div>
                            <div class="value">
                                <div class="input-group">
                                    <textarea class="textarea--style-6" name="message26" placeholder="Enter your answer"required></textarea>
                                </div>
                            </div>
                        </div>
                        


                        <div class="form-row">
                            <div class="name">
                                27. Describe a time when you saw some problem and took the initiative to correct it rather than waiting for someone else to do it.<br>
                            </div>
                            <div class="value">
                                <div class="input-group">
                                    <textarea class="textarea--style-6" name="message27" placeholder="Enter your answer"required></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">
                                28. Tell me about a time when you worked under close supervision or extremely loose supervision. How did you handle that?<br>
                            </div>
                            <div class="value">
                                <div class="input-group">
                                    <textarea class="textarea--style-6" name="message28" placeholder="Enter your answer" required></textarea>
                                </div>
                            </div>
                        </div>

                        
                        <div class="form-row">
                            <div class="name">
                                29. Give me an example of a time you were able to be creative with your work. What was exciting or difficult about it?<br>
                            </div>
                            <div class="value">
                                <div class="input-group">
                                    <textarea class="textarea--style-6" name="message29" placeholder="Enter your answer" required></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">
                                30. Tell me about a time you were dissatisfied in your work. What could have been done to make it better?<br>
                            </div>
                            <div class="value">
                                <div class="input-group">
                                    <textarea class="textarea--style-6" name="message30" placeholder="Enter your answer"required></textarea>
                                </div>
                            </div>
                        </div>
                        <input type="submit" name="submit"style=" font-size: large; background-color: gray; font-family: serif;">
                        

                    </form>
                </div>
                
            </div>
        </div>
    </div>

    <!-- Jquery JS-->
    <script src="vendor/jquery/jquery.min.js"></script>


    <!-- Main JS-->
    <script src="js/global.js"></script>

</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>
<!-- end document-->