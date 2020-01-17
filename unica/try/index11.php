<?php

$conn= mysqli_connect("localhost","root","","psychometric");
if(!$conn){
    die("Connection failed". mysqli_connect_error());
    echo"hy";
}


if(isset($_POST['submit']))
{
require('fpdf.php');

$pdf = new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial','B',16);


    
    $x=$_POST['message1'];
    $a=$_POST['message2'];
     $b=$_POST['message3'];
     $c=$_POST['message4'];
     $d=$_POST['message5'];
     $e=$_POST['message6'];
     $f=$_POST['message7'];
    $g=$_POST['message8'];
    $h=$_POST['message9'];
     $i=$_POST['message10'];
    

   
    // echo $x;
  
    $sql="INSERT INTO responses (ques, ques2, ques3 ,ques4, ques5, ques6, ques7, ques8, ques9, ques10) VALUES ('$x','$a','$b','$c','$d','$e','$f','$g', '$h','$i')";
    $pdf->Cell(40,10,$x);
$pdf->Output();
    mysqli_query($conn,$sql);
    // header("Location: index12.php");
    
    // if (mysqli_num_rows($result) > 0) {
    //     // output data of each row
    //     while($row = mysqli_fetch_assoc($result)) {
    //         echo "id: " . $row["ques"]."<br>";
    //     }
    // } else {
    //     echo "0 results";
    // }
    
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <!--   meta tags-->
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
                    <h2 class="title">Let's Start</h2>
                </div>
                <div class="card-body">
                    <form method="POST" action="index11.php">
                       
                        <div class="form-row" >     
                            <div class="name">
                                1. Talk about a time when you had to work closely with someone whose personality was very different from yours.<br>
                            </div>
                            <div class="value">
                                <div class="input-group">
                                    <textarea class="textarea--style-6" name="message1" placeholder="Enter your answer" ></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">
                                2.	Give me an example of a time you faced a conflict while working on a team. How did you handle that?<br>

                            </div>
                            <div class="value">
                                <div class="input-group">
                                    <textarea class="textarea--style-6" name="message2" placeholder="Enter your answer" ></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">
                                3.	Describe a time when you struggled to build a relationship with someone important. How did you eventually overcome that?<br>

                            </div>
                            <div class="value">
                                <div class="input-group">
                                    <textarea class="textarea--style-6" name="message3" placeholder="Enter your answer" ></textarea>
                                </div>
                            </div>
                        </div>
                            
                        <div class="form-row">
                            <div class="name">
                                4.	We all make mistakes we wish we could take back. Tell me about a time you wish you’d handled a situation differently with a <br>colleague.<br>

                            </div>
                            <div class="value">
                                <div class="input-group">
                                    <textarea class="textarea--style-6" name="message4" placeholder="Enter your answer" ></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">
                                5.	Tell me about a time you needed to get information from someone who wasn’t very responsive. What did you do?<br>
                            </div>
                                <div class="value">
                                <div class="input-group">
                                    <textarea class="textarea--style-6" name="message5" placeholder="Enter your answer" ></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">
                                6.	Describe a time when it was especially important to make a good impression on a client. How did you go about doing so?<br>

                            </div>
                            <div class="value">
                                <div class="input-group">
                                    <textarea class="textarea--style-6" name="message6" placeholder="Enter your answer" ></textarea>
                                </div>
                            </div>
                        </div>
                        


                        <div class="form-row">
                            <div class="name">
                                7.	Give me an example of a time when you did not meet a client’s expectation. What happened, and how did you attempt to<br> rectify the situation?<br>

                            </div>
                            <div class="value">
                                <div class="input-group">
                                    <textarea class="textarea--style-6" name="message7" placeholder="Enter your answer" ></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">
                                8. Tell me about a time when you made sure a customer was pleased with your service.<br>

                            </div>
                            <div class="value">
                                <div class="input-group">
                                    <textarea class="textarea--style-6" name="message8" placeholder="Enter your answer" ></textarea>
                                </div>
                            </div>
                        </div>

                        
                        <div class="form-row">
                            <div class="name">
                                9. Describe a time when you had to interact with a difficult client. What was the situation, and how did you handle it?<br>

                            </div>
                            <div class="value">
                                <div class="input-group">
                                    <textarea class="textarea--style-6" name="message9" placeholder="Enter your answer" ></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">
                                10. When you’re working with a large number of customers, it’s tricky to deliver excellent service to them all. How do you go about prioritizing your customers’ needs?<br>

                            </div>
                            <div class="value">
                                <div class="input-group">
                                    <textarea class="textarea--style-6" name="message10" placeholder="Enter your answer" ></textarea>
                                </div>
                            </div>
                        </div>
                        <input type="submit" name="submit" href="index12.php">
                        
                        <!-- <button class="btn btn--radius-2 btn--blue-2" type="submit" name="submit">
                        <a href="">Next</a>
                    </button> -->
                    </form>
                </div>
                <!-- <div class="card-footer">
                    <button class="btn btn--radius-2 btn--blue-2" type="submit">
                        <a href="index12.html">Next</a>
                    </button>
                </div> -->
            </div>
        </div>
    </div>

    <!-- Jquery JS-->
    <script src="vendor/jquery/jquery.min.js"></script>


    <!-- Main JS-->
    <script src="js/global.js"></script>

</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>
<!-- end document -->