<html>
    <head>
        
    </head>
    <body>
        <form action="" method="POST" enctype="multipart/form-data">
            <input type="file" name="file"/>
            <input type="submit" name="submit" value="submit"/>
        </form>
    </body>
</html>
<?php
    if(isset($_POST['submit']))
    {
        #commented code is also used..
//    	//The form has been submitted, prep a nice thank you message
//    	$output = '<h1>Thanks for your file and message!</h1>';
//    	//Set the form flag to no display (cheap way!)
//    	$flags = 'style="display:none;"';
//        
//    	//Deal with the email
//    	$to = "ruchit.p@communicationcrafts.com,vikas.patel@communicationcrafts.com";
//    	$subject = 'a file for you';
//
////    	$message = strip_tags($_POST['message']);
//    	$message = "message";
//    	$attachment = chunk_split(base64_encode(file_get_contents($_FILES['file']['tmp_name'])));
//    	$filename = $_FILES['file']['name'];
//
//    	$boundary =md5(date('r', time())); 
//
//    	$headers = "From: bharatdan.g@communicationcrafts.com\r\nReply-To: webmaster@example.com";
//    	$headers .= "\r\nMIME-Version: 1.0\r\nContent-Type: multipart/mixed; boundary=\"_1_$boundary\"";
//
//    	$message="This is a multi-part message in MIME format.
//
//--_1_$boundary
//Content-Type: multipart/alternative; boundary=\"_2_$boundary\"
//
//--_2_$boundary
//Content-Type: text/plain; charset=\"iso-8859-1\"
//Content-Transfer-Encoding: 7bit
//
//$message
//
//--_2_$boundary--
//--_1_$boundary
//Content-Type: application/octet-stream; name=\"$filename\" 
//Content-Transfer-Encoding: base64 
//Content-Disposition: attachment 
//
//$attachment
//--_1_$boundary--";
//
//    	mail($to, $subject, $message, $headers);
//    }
        
        
        $to = "ruchit.p@communicationcrafts.com";
        $from = "vikas.patel@communicationcrafts.com";
        $subject = "attachement testing";

        //set message of Email
//        $message = "<p>Hello &nbsp;.',</p>';
        $message = "<p>Please find attached monthly statement of your account.</p>";
        $message .= "<p>Thanks & Regards,<br />Admin</p>";

        $separator = md5(time());
        $eol = "\n";
        $attachment = chunk_split(base64_encode(file_get_contents($_FILES['file']['tmp_name'])));
        $filename = $_FILES['file']['name'];
        //set header for mail and attachment of pdf
        $headers  = "From: ".$from.$eol;
        $headers .= "MIME-Version: 1.0".$eol;
        $headers .= "Content-Type: multipart/mixed; boundary=\"".$separator."\"".$eol.$eol;
        $headers .= "Content-Transfer-Encoding: 7bit".$eol;
        $headers .= "This is a MIME encoded message.".$eol.$eol;
        $headers .= "--".$separator.$eol;
        $headers .= "Content-Type: application/octet-stream;name=\"".$filename."\"".$eol;
        $headers .= "Content-Transfer-Encoding: base64".$eol;
        $headers .= "Content-Disposition: attachment".$eol.$eol;
        $headers .= $attachment.$eol.$eol;
        $headers .= "--".$separator."--";

        $ok = mail($to, $subject, $message, $headers);
    }

?>
