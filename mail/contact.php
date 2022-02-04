<?php
// if(empty($_POST['name']) || empty($_POST['subject']) || empty($_POST['message']) || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
//   http_response_code(500);
//   exit();
// }

// // echo "<pre>";print_r($_POST);die;
// $name = strip_tags(htmlspecialchars($_POST['name']));
// $email = strip_tags(htmlspecialchars($_POST['email']));
// $m_subject = strip_tags(htmlspecialchars($_POST['subject']));
// $message = strip_tags(htmlspecialchars($_POST['message']));

// $to = "venkatesh.chidurala@monosage.com"; // Change this email to your //
// $subject = "$m_subject:  $name";
// $body = "You have received a new message from your website contact form.\n\n"."Here are the details:\n\nName: $name\n\n\nEmail: $email\n\nSubject: $m_subject\n\nMessage: $message";
// $header = "From: $email";
// $header .= "Reply-To: $email";	

// if(!mail($to, $subject, $body, $header))
//   http_response_code(500);

        $name = $_REQUEST['name'];
        $subject = $_REQUEST['subject'];
        $messageDes = $_REQUEST['message'];
        $email = $_REQUEST['email'];
        
        $to = "info@roomsinmedaram.com"; // Change this email
        // $subject = "$subject";
        $message = "You have received a new message from your website contact form.\n\n"."Here are the details:\n\nName: $name\n\nEmail: $email\n\nSubject: $subject\n\nMessage: $messageDes";
        
        
        // Set your email address where you want to receive emails. 
        $to = 'info@roomsinmedaram.in';
       $headers = "From:" . $_REQUEST["email"] . "\r\n";
    
    	$headers = $headers . "MIME-Version: 1.0" . "\r\n";
    	$headers = $headers . "Content-type: text/html; Charset=iso-8859-1" . "\r\n";
    	
       $headers = "From: ".$name;
       mail($to,$subject,$message,$headers);

    //   echo ($send_email) ? 'success' : 'error';

//   }

?>
