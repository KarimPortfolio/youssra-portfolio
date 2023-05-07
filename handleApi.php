
<?php

//header('Access-Control-Allow-Origin:*');
header('Access-Control-Allow-Origin:https://youssra-laabid-portfolio.surge.sh/');
//header('Access-Control-Allow-Headers:*');
header('Access-Control-Allow-Headers:https://youssra-laabid-portfolio.surge.sh/');
//header("Content-Type: application/json; charset=UTF-8");




if (isset($_POST["name"]) && isset($_POST["email"]) && isset($_POST["subject"]) && isset($_POST["text"]))
{

     $name = $_POST["name"];
     $email = $_POST["email"];
     $subject = $_POST["subject"];
     $content = $_POST["text"];
     
     $message = "
     <html>
     <head>
       <meta charset='UTF-8'>
       <meta http-equiv='X-UA-Compatible' content='IE=edge'>
       <meta name='viewport' content='width=device-width, initial-scale=1.0'>
       <style>
         /* CSS styles for the email */
         
         div{
             background:#eeee;
             padding-bottom:20px;
         }
         
         img{
             width:80px;
             height:80px;
             object-fit:cover;
             margin-left:45%;
         }
         h1 {
             width:100%;
             color: #5E17EB;
             text-align: center;
             font-family:'DM Sans', sans-serif;
             font-size:40px;
         }
         p{
             width:100%;
             text-align: center;
             font-size:18px;
             color:#000;
         }
         a{
             width:100%;
             text-align: center;
             text-decoration:none;
             color:#5E17EB;
             margin-left:45%;
         }
       </style>
     </head>
     <body>
       <div>
            
            <img src='https://karim-portfolio-2022.000webhostapp.com/projects/youssraportfolio/logo.png'>
           
            <h1>Hello Youssra laabid</h1>
            <p>$content</p>
            <a href='https://youssra-laabid-portfolio.surge.sh/' target='_blank' >Visit the website</a>
       </div>
     </body>
     </html>
     ";
     
     $to = "benkarim1999@gmail.com";
     $subject = $subject;
     $headers = array(
             "From" => $name,
             "Reply-To" => $name,
             "Content-type" => "text/html;charset=UTF-8"
         );
     $mailSent = mail($to,$subject,$message,$headers);
     
     if($mailSent) {
       echo "Email sent successfully!";
     } else {
       echo "Email sending failed.";
     }

    //echo $_POST["name"]. "\n".$_POST["email"]."\n".$_POST["subject"]."\n".$_POST["text"];
}


