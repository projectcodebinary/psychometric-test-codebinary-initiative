<?php
require_once('PHPMailer/src/PHPMailer.php');
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

//index.php
session_start();

$message = '';

$connect = new PDO("mysql:host=localhost;dbname=psychometric", "root", "");

function fetch_customer_data($connect)
{
  $email=$_SESSION['email'];

 $query = "SELECT * FROM responses WHERE email= '$email'";
 $statement = $connect->prepare($query);
 $statement->execute();
 $result = $statement->fetchAll();
 $output = '
 <div class="table-responsive" style="font-size: 20px; margin-left: 10px;">
  <table class="table table-striped table-bordered">
   
 ';
 
 foreach($result as $row)
 {
   $q1to10=explode(',',$row["q1to10"]);
   $marks = $row['q1to10']; //get value of marks from the database
  
   $exp = explode("," , $marks); //explode marks data
   $m1 = $row['q11to20'];
   $exp1 = explode("," , $m1);
   $m2 = $row['q21to30'];
   $exp2 = explode("," , $m2);

   $m3 = $row['q31to40'];
   $exp3 = explode("," , $m3);
   $m4 = $row['q41to50'];
   $exp4 = explode("," , $m4);
   $m5 = $row['q51to60'];
   $exp5 = explode("," , $m5);
   $m6 = $row['q61to70'];
   $exp6 = explode("," , $m6);
   $m7 = $row['q71to80'];
   $exp7 = explode("," , $m7);

  //  foreach($exp as $mark) {
     
  //        echo $mark;
  //     }
  


  
  $output .= '
  <tr>
  1. Talk about a time when you had to work closely with someone whose personality was very different from yours.<br>
  </tr>
  
   <tr>'.$row["ques"].'</tr><br>

   <tr>
   2.	Give me an example of a time you faced a conflict while working on a team. How did you handle that?<br>
   </tr>
  
   <tr>'.$row["ques2"].'</tr><br>
   <tr>
   3.	Describe a time when you struggled to build a relationship with someone important. How did you eventually overcome that?<br>
   </tr>
  
   <tr>'.$row["ques3"].'</tr><br>
   <tr>
   4.	We all make mistakes we wish we could take back. Tell me about a time you wish you’d handled a situation differently with a <br>colleague.<br>
   </tr>
  
   <tr>'.$row["ques4"].'</tr><br>
    <tr>
   5.	Tell me about a time you needed to get information from someone who wasn’t very responsive. What did you do?<br>
   </tr>
  
   <tr>'.$row["ques5"].'</tr><br>
   <tr>
   6.	Describe a time when it was especially important to make a good impression on a client. How did you go about doing so?<br>
   </tr>
  
   <tr>'.$row["ques6"].'</tr><br>
   <tr>
   7.	Give me an example of a time when you did not meet a client’s expectation. What happened, and how did you attempt to<br> rectify the situation?<br>
   </tr>
  
   <tr>'.$row["ques7"].'</tr><br>
    <tr>
   8. Tell me about a time when you made sure a customer was pleased with your service.<br>
   </tr>
  
   <tr>'.$row["ques8"].'</tr><br>

   <tr>
   9. Describe a time when you had to interact with a difficult client. What was the situation, and how did you handle it?<br>
   </tr>
  
   <tr>'.$row["ques9"].'</tr><br>
    <tr>
   10. When you’re working with a large number of customers, it’s tricky to deliver excellent service to them all. How do you go about prioritizing your customers’ needs?<br>
   </tr>
  
   <tr>'.$row["ques10"].'</tr><br>
   <tr>
   11. Tell me about a time you were under alot of pressure. What was going on, and how did you get through it?<br>                        
   </tr>
  
   <tr>'.$row["ques11"].'</tr><br>
   <tr>
   12. Describe a time when your team or company was undregoing some change. How did that impact you, and how did you adapt?<br> 
   </tr>
  
   <tr>'.$row["ques12"].'</tr><br>
    <tr>
   13. Tell me about the first job you’ve ever had. What did you do to learn the ropes?<br>
   </tr>
  
   <tr>'.$row["ques13"].'</tr><br>
    <tr>
   14.Give me an example of a time when you had to think on your feet in order to delicately extricate yourself from a difficult or awkward situation.<br>
   </tr>
  
   <tr>'.$row["ques14"].'</tr><br>
    <tr>
   15. Tell me about a time you failed. How did you deal with the situation?<br>
   </tr>
  
   <tr>'.$row["ques15"].'</tr><br>
    <tr>
   16. Tell me about a time you had to be very strategic in order to meet all your top priorities.<br>
   </tr>
  
   <tr>'.$row["ques16"].'</tr><br>
    <tr>
   17. Describe a long-term project that you managed. How did you keep everything moving along in a timely manner?<br>
   </tr>
  
   <tr>'.$row["ques17"].'</tr><br>
    <tr>
   18. Sometimes its not just possible to get everything on your to-do list done. Tell me about a time your responsibilities got a<br> little overwhelming. What did you do?<br>
   </tr>
  
   <tr>'.$row["ques18"].'</tr><br>
   <tr> 
   19. Tell me about a time you set a goal for yourself. How did you go about ensuring that you would meet your objective?<br>
   </tr>
  
   <tr>'.$row["ques19"].'</tr><br>
    <tr>
   20. Give me an example of a time you managed numerous responsibilities. How did you handle that?<br>
   </tr>
  
   <tr>'.$row["ques20"].'</tr><br>
    <tr>
   21. Give me an example of a time when you were able to successfully persuade someone to see things your way at work.<br>                            </div>
   </tr>
  
   <tr>'.$row["ques21"].'</tr><br>
    <tr>
   22. Describe a time when you were the resident technical expert. What did you do to make sure everyone was able to<br> understand you?<br> 
   </tr>
  
   <tr>'.$row["ques22"].'</tr><br>
    <tr>
   23. Tell me about a time when you had to rely on written communication to get your ideas across to your team.<br>
   </tr>
  
   <tr>'.$row["ques23"].'</tr><br>
   <tr>
   24. Give me an example of a time when you had to explain something fairly complex to a frustrated client. How did you handle<br> this delicate situation?<br>
   </tr>
  
   <tr>'.$row["ques24"].'</tr><br>
   <tr>
   25. Tell me about a successful presentation you gave and why you think it was a hit.<br>                            </div>
   </tr>
  
   <tr>'.$row["ques25"].'</tr><br>
   <tr>
   26. Tell me about your proudest professional accomplishment.<br>
   </tr>
  
   <tr>'.$row["ques26"].'</tr><br>
   <tr>
   27. Describe a time when you saw some problem and took the initiative to correct it rather than waiting for someone else to do it.<br>
   </tr>
  
   <tr>'.$row["ques27"].'</tr><br>
   <tr>
   28. Tell me about a time when you worked under close supervision or extremely loose supervision. How did you handle that?<br>
   </tr>
  
   <tr>'.$row["ques28"].'</tr><br>
   <tr>
   29. Give me an example of a time you were able to be creative with your work. What was exciting or difficult about it?<br>
   </tr>
  
   <tr>'.$row["ques29"].'</tr><br>
  <tr> 30. Tell me about a time you were dissatisfied in your work. What could have been done to make it better?<br>
   </tr>
  
   <tr>'.$row["ques30"].'</tr><br>
   <tr>
  1. I welcome feedback on my performance from others:<br> 
    </tr>
    <tr>'.$exp['0'].'</tr><br>

    <tr>
    2. I find it easy to get my own point of view across to others: <br>
    </tr>
    <tr>'.$exp['1'].'</tr><br>
     
  <tr>
  3. I love hearing people talk about themselves: <br>
  </tr>
  <tr>'.$exp['2'].'</tr><br>
   
  <tr>
  4. I adapt easily to change:	<br>
  </tr>
  <tr>'.$exp['3'].'</tr><br>
    
  <tr>
  5. I enjoy convincing others to change their mind: <br>
  </tr>
  <tr>'.$exp['4'].'</tr><br>
  <tr>
  6. I tend to be quite a relaxed person: <br>
  </tr>
  <tr>'.$exp['5'].'</tr><br>
  7. I am happiest when I know I have provided good service to others:<br>
  </tr>
  <tr>'.$exp['6'].'</tr><br>
   
  <tr>
  8. I feel assured that I can do what is expected of me: <br>
  </tr>
  
  <tr>'.$exp['7'].'</tr><br>
   
  <tr>
  9. I see the funny side when people laugh at my expense: <br>
  </tr>
  
  <tr>'.$exp['8'].'</tr><br>
   
  <tr>
  10. I am quick to adapt to new circumstances: <br>
  </tr>
  
  <tr>'.$exp['9'].'</tr><br>

  <tr>
   
   11. I am usually successful defending my own viewpoint: 
   </tr><br>
   <tr>'.$exp1['0'].'</tr><br>

   <tr>
    12. I quickly pick up on others feelings and emotions:
    </tr><br>
  
    <tr>'.$exp1['1'].'</tr><br>
   <tr>
   13. I believe I deserve the success I have had:
   </tr><br>
  
   <tr>'.$exp1['2'].'</tr><br>
   14. If I see someone needs help I try to do all I can for them: 
    </tr><br>
    <tr>'.$exp1['3'].'</tr><br>
   <tr>
   15. I will adjust my thinking when faced with new information: 
    </tr><br>
  
    <tr>'.$exp1['4'].'</tr><br>
   <tr>
   16. I very much enjoy working in a team: 
   </tr><br>
  
   <tr>'.$exp1['5'].'</tr><br>
   <tr>
   17.  I dont let constructive criticism bother me:
   </tr><br>
  
   <tr>'.$exp1['6'].'</tr><br>
   <tr>
   18. I remain calm even in tense situations: 
   </tr><br>
   <tr>'.$exp1['7'].'</tr><br>
   <tr>
   19. Empathising with others comes easily to me:
   </tr><br>
  
   <tr>'.$exp1['8'].'</tr><br>
   <tr>
   20. I enjoy influencing people to my way of thinking:
   </tr><br>
  
   <tr>'.$exp1['9'].'</tr><br>
   <tr>
   21. I feel positive about myself and my capabilities: 
   <br>
   </tr>
  
   <tr>'.$exp2['0'].'</tr><br>
   <tr>
   22. I am comfortable when faced with uncertainity: 
    <br>   </tr>
  
    <tr>'.$exp2['1'].'</tr><br>
   <tr>
   23. Taking other people feelings into consideration is important for me: 
    </tr><br>
    <tr>'.$exp2['2'].'</tr><br>
   <tr>
   24. Creating team spirit comes naturally to me: 
		<br>   </tr>
    <tr>'.$exp2['3'].'</tr><br>
   <tr>
   25. I thrive on juggling multiple demands: 
   <br>   </tr>
  
   <tr>'.$exp2['4'].'</tr><br>
   <tr>
   26. I enjoy meeting people from backgrounds very different to my own: 
    <br>    </tr>
  
   <tr>'.$exp2['5'].'</tr><br>
   <tr>
   27. Getting buy-in from others comes easily to me:<br> 
   </tr>
  
   <tr>'.$exp2['6'].'</tr><br>
   <tr>
   28. Understanding my own strengths is important to me:<br>
   </tr>
   <tr>'.$exp2['7'].'</tr><br>
   <tr>

   29. I find it comes easily to read others emotions:
   <br>   </tr>
  
   <tr>'.$exp2['8'].'</tr><br>
    <tr>
   30. I welcome difficult and stretching assignments:
    <br>
  
    <tr>'.$exp2['9'].'</tr><br>
    <tr>
   31. It takes a lot to make me angry:
		<br>
   </tr>
  
   <tr>'.$exp3['0'].'</tr><br>
   <tr>
   32. I am most effective when I am working in a team:
		<br>
   </tr>
  
   <tr>'.$exp3['1'].'</tr><br>
   <tr>
   33. I often put the needs of others above my own:
   <br>
   </tr>
  
   <tr>'.$exp3['2'].'</tr><br>
    <tr>
   34. I can cope with high levels of stress easily:
   <br>
   </tr>
  
   <tr>'.$exp3['3'].'</tr><br>

  <tr> 35. I think it is valuable to recognise my own shortcomings:
   <br>
   </tr>
  
   <tr>'.$exp3['4'].'</tr><br>
<tr>
   36. Building friendships at work is important to me:
   <br>
   </tr>
  
   <tr>'.$exp3['5'].'</tr><br>
<tr>
   37. I like to think of myself as being supportive and helpful: 
   <br>
   </tr>
  
   <tr>'.$exp3['6'].'</tr><br>
<tr>
   38. I dont tend to lose my temper easily: 
		<br>
   </tr>
   <tr>'.$exp3['7'].'</tr><br>
<tr>
   39. I am confident in my own capabilities:
		<br>
   </tr>
   <tr>'.$exp3['8'].'</tr><br>

   <tr>
   40. I prefer working in a harmonious team:
		<br>
   </tr>
  
   <tr>'.$exp3['9'].'</tr><br>
   <tr>

   41. I tend to be quite a relaxed person: 
   <br>
</tr>

<tr>'.$exp4['0'].'</tr><br>
<tr>
42. I am happy to take the lead in a group	 	
		<br>
</tr>

<tr>'.$exp4['1'].'</tr><br>
<tr>
43. More radical ideas appeal to me more than traditional ones	 
		<br>
</tr>

<tr>'.$exp4['2'].'</tr><br>
<tr>
44. I value the opinions of others			
		<br>
</tr>

<tr>'.$exp4['3'].'</tr><br>
<tr>
45. I tend to be the centre of attention quite often
		<br>
</tr>

<tr>'.$exp4['4'].'</tr><br>
<tr>
46. I adapt easily to change
		<br>
</tr>

<tr>'.$exp4['5'].'</tr><br>
<tr>
47. Taking other peoples feelings into consideration is important to me	
		<br>
</tr>

<tr>'.$exp4['6'].'</tr><br>
<tr>
48. I believe that rules are there to be followed		
		<br>
</tr>

<tr>'.$exp4['7'].'</tr><br>
<tr>
49. I can cope with high levels of stress easily
		<br>
</tr>

<tr>'.$exp4['8'].'</tr><br>

<tr>
50. I like to get involved in intellectual debate	 
		<br>
</tr>
<tr>'.$exp4['9'].'</tr><br>

<tr>
51. I like to think of myself as being supportive and helpful:
		<br>
</tr>

<tr>'.$exp5['0'].'</tr><br>
<tr>
52. I believe that taking care of the details is very important:
		<br>
</tr>


<tr>'.$exp5['1'].'</tr><br>
<tr>
53. I can cope with high levels of stress easily:
		<br>
</tr>


<tr>'.$exp5['2'].'</tr><br>
<tr>
54. I like to get involved in intellectual debate:
		<br>
</tr>

<tr>'.$exp5['3'].'</tr><br>
<tr>
55. I like to think of myself as being supportive and helpful:
		<br>
</tr>


<tr>'.$exp5['4'].'</tr><br>

<tr>
56. I believe that taking care of the details is very important:
		<br>
</tr>


<tr>'.$exp5['5'].'</tr><br>

<tr>
57. I remain calm even in tense situations:
		<br>
</tr>

<tr>'.$exp5['6'].'</tr><br>

<tr>
58. I like my life to happen at a fast pace:
    <br>
</tr>


<tr>'.$exp5['7'].'</tr><br>

<tr>
59. I have a strong sense of adventure:
		<br>
</tr>


<tr>'.$exp5['8'].'</tr><br>

<tr>
60. I prefer having very challenging goals and tasks:
		<br>
</tr>


<tr>'.$exp5['9'].'</tr><br>


<tr>
61. I remain calm even in tense situations:		<br>
</tr>


<tr>'.$exp6['0'].'</tr><br>

<tr>
62. I like my life to happen at a fast pace:
    <br></tr>

    <tr>'.$exp6['1'].'</tr><br>

<tr>
63. I have a strong sense of adventure:
		<br></tr>

    <tr>'.$exp6['2'].'</tr><br>

<tr>
64. I prefer having very challenging goals and tasks:
		<br></tr>

    <tr>'.$exp6['3'].'</tr><br>

<tr>
65. I tend to get over setbacks easily:
		<br></tr>

    <tr>'.$exp6['4'].'</tr><br>

<tr>
66. I enjoy building relationships with all sorts of people	:
		<br></tr>
    <tr>'.$exp6['5'].'</tr><br>

<tr>
67. I get excited by new theories and abstract ideas:
		<br>
</tr>
<tr>'.$exp6['6'].'</tr><br>

<tr>
68. I like to plan my work in advance:
		<br></tr>

    <tr>'.$exp6['7'].'</tr><br>

<tr>
69. I try not to let things get me down:
<br></tr>

<tr>'.$exp6['8'].'</tr><br>

<tr>
70. I have a wide circle of contacts and friends:
		<br></tr>

    <tr>'.$exp6['9'].'</tr><br>

<tr>
71. I often put the needs of others above my own:
<br></tr>

<tr>'.$exp7['0'].'</tr><br>

<tr>
72. Hitting deadlines is very important to me:
            <br>
</tr>

<tr>'.$exp7['1'].'</tr><br>
<tr>
73. I enjoy influencing people to my way of thinking:
            <br></tr>

            <tr>'.$exp7['2'].'</tr><br>

<tr>
74. I think of myself as being extremely conscientious:
            <br></tr>

<tr>'.$exp7['3'].'</tr><br>


<tr>
75. If I see someone needs help I try to do all I can for them:
    <br></tr>

    <tr>'.$exp7['4'].'</tr><br>


<tr>
76. I love hearing about new ideas and innovations:
            <br></tr>

            <tr>'.$exp7['5'].'</tr><br>


<tr>
77. I dont feel anxious or tense very often:
            <br></tr>

            <tr>'.$exp7['6'].'</tr><br>


<tr>
78. I enjoy having variety in my work:
            <br></tr>
            <tr>'.$exp7['7'].'</tr><br>


<tr>
79. I love hearing people talk about themselves:
            <br></tr>
            <tr>'.$exp7['8'].'</tr><br>


<tr>
80. I enjoy competitive situations:
            <br></tr>
            <tr>'.$exp7['9'].'</tr><br>
  
  ';
 }
 $output .= '
  </table>
 </div>
 ';
 return $output;
}

if(isset($_POST["action"]))
{
 include('pdf.php');
 $file_name = md5(rand()) . '.pdf';
 $html_code = '<link rel="stylesheet" href="bootstrap.min.css">';
 $html_code .= fetch_customer_data($connect);
 $pdf = new Pdf();
 $pdf->load_html($html_code);
 $pdf->render();
 $file = $pdf->output();
 file_put_contents($file_name, $file);
 
 
// Instantiation and passing `true` enables exceptions
$mail = new PHPMailer(true);
 
 //$mail->IsSMTP();        //Sets Mailer to send message using SMTP
//  $mail->Host = 'smtpout.secureserver.net';  //Sets the SMTP hosts of your Email hosting, this for Godaddy
//  $mail->Port = '80';        //Sets the default SMTP server port
//  $mail->SMTPAuth = true;       //Sets SMTP authentication. Utilizes the Username and Password variables
  $mail->Username = 'cassiavaz.33.cv@gmail.com';     //Sets SMTP username
 $mail->Password = '**********';     //Sets SMTP password
 $mail->SMTPSecure = '';       //Sets connection prefix. Options are "", "ssl" or "tls"
 $mail->From = 'info@webslesson.info';   //Sets the From email address for the message
 $mail->FromName = 'Webslesson.info';   //Sets the From name of the message
 $mail->AddAddress('cassiavaz.33.cv@gmail.com', 'Name');  //Adds a "To" address
 $mail->WordWrap = 50;       //Sets word wrapping on the body of the message to a given number of characters
 $mail->IsHTML(true);       //Sets message type to HTML    
 $mail->AddAttachment($file_name);         //Adds an attachment from a path on the filesystem
 $mail->Subject = 'Customer Details';   //Sets the Subject of the message
 $mail->Body = 'Please Find Customer details in attach PDF File.';    //An HTML or plain text message body
 if($mail->Send())        //Send an Email. Return true on success or false on error
 {
  $message = '<label class="text-success">Responses have been send successfully...</label>';
 }
 unlink($file_name);
}

?>
<!DOCTYPE html>
<html>
 <head>
  <title>Create PDF </title>
  <script src="jquery.min.js"></script>
  <link rel="stylesheet" href="bootstrap.min.css" />
  <script src="bootstrap.min.js"></script>
 </head>
 <body>
  <br />
  <div class="container">
   <h3 align="center" style="font-size: x-large; ">Send a PDF of your Responses</h3>
   <br />
   <form method="post" style="font-size: 20px;">
    <input type="submit" name="action" class="btn btn-danger"style="font-size: 20px; background-color: tan; margin-left: 20px;" value="PDF Send" /><?php echo $message; ?>
   </form>
   <br />
   <?php
   echo fetch_customer_data($connect);
   ?>   
  </div>
  <br />
  <br />
 </body>
</html>
