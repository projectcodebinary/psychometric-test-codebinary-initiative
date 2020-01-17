<?php

$conn= mysqli_connect("localhost","root","","psychometric");
if(!$conn){
    die("Connection failed". mysqli_connect_error());
    echo"hy";
}
session_start();
// secho $_SESSION['email'];

if(isset($_POST['submit']))
{
    $email=$_SESSION['email'];
    $x=$_POST['message11'];
    $a=$_POST['message12'];
     $b=$_POST['message13'];
     $c=$_POST['message14'];
     $d=$_POST['message15'];
     $e=$_POST['message16'];
     $f=$_POST['message17'];
    $g=$_POST['message18'];
    $h=$_POST['message19'];
     $i=$_POST['message20'];
    

   
    
    $sql = "UPDATE responses  SET ques11 ='$x', ques12='$a', ques13='$b',ques14='$c',ques15='$d',ques16='$e',ques17='$f',ques18='$g',ques19='$h', ques20='$i'
    WHERE email='$email' ";
    // $sql="INSERT INTO responses (ques11, ques12, ques13 ,ques14, ques15, ques16, ques17, ques18, ques19, ques20) VALUES ('$x','$a','$b','$c','$d','$e','$f','$g', '$h','$i')";
    
    mysqli_query($conn,$sql);
    header("Location: index13.php");
    
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
                    <form method="POST" action="index12.php">
                       
                        <div class="form-row">
                            <div class="name">
                               

                                11. Tell me about a time you were under alot of pressure. What was going on, and how did you get through it?<br>                        
                             </div>
                            <div class="value">
                                <div class="input-group">
                                    <textarea class="textarea--style-6" name="message11" placeholder="Enter your answer" required ></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">
                                
                                12. Describe a time when your team or company was undregoing some change. How did that impact you, and how did you adapt?<br> 
                            </div>
                            <div class="value">
                                <div class="input-group">
                                    <textarea class="textarea--style-6" name="message12" placeholder="Enter your answer" required ></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">
                                13. Tell me about the first job you’ve ever had. What did you do to learn the ropes?<br>
                               </div>
                            <div class="value">
                                <div class="input-group">
                                    <textarea class="textarea--style-6" name="message13" placeholder="Enter your answer" required></textarea>
                                </div>
                            </div>
                        </div>
                            
                        <div class="form-row">
                            <div class="name">
                                14.Give me an example of a time when you had to think on your feet in order to delicately extricate yourself from a difficult or awkward situation.<br>

                            </div>
                            <div class="value">
                                <div class="input-group">
                                    <textarea class="textarea--style-6" name="message14" placeholder="Enter your answer"required ></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">

                                 15. Tell me about a time you failed. How did you deal with the situation?<br>

                                </div>
                            <div class="value">
                                <div class="input-group">
                                    <textarea class="textarea--style-6" name="message15" placeholder="Enter your answer"required ></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">
                                16. Tell me about a time you had to be very strategic in order to meet all your top priorities.<br>

                            </div>
                            <div class="value">
                                <div class="input-group">
                                    <textarea class="textarea--style-6" name="message16" placeholder="Enter your answer"required ></textarea>
                                </div>
                            </div>
                        </div>
                        


                        <div class="form-row">
                            <div class="name">
                                17. Describe a long-term project that you managed. How did you keep everything moving along in a timely manner?<br>

                            </div>
                            <div class="value">
                                <div class="input-group">
                                    <textarea class="textarea--style-6" name="message17" placeholder="Enter your answer"required ></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">
                                18. Sometimes its not just possible to get everything on your to-do list done. Tell me about a time your responsibilities got a<br> little overwhelming. What did you do?<br>

                            </div>
                            <div class="value">
                                <div class="input-group">
                                    <textarea class="textarea--style-6" name="message18" placeholder="Enter your answer"required ></textarea>
                                </div>
                            </div>
                        </div>

                        
                        <div class="form-row">
                            <div class="name">
                                19. Tell me about a time you set a goal for yourself. How did you go about ensuring that you would meet your objective?<br>

                            </div>
                            <div class="value">
                                <div class="input-group">
                                    <textarea class="textarea--style-6" name="message19" placeholder="Enter your answer"required ></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">
                                20. Give me an example of a time you managed numerous responsibilities. How did you handle that?<br>

                            </div>
                            <div class="value">
                                <div class="input-group">
                                    <textarea class="textarea--style-6" name="message20" placeholder="Enter your answer"required ></textarea>
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