<?php
	
	// print_r($_POST);
	// exit();
	$email = $_POST['email'];
	$name = $_POST['name'];
	$mess = $_POST['mess'];
	// subject
	$subject = 'namestrap';
	$subject1 = 'namestrap';
	//meessage send for user
	$message= '<p>Thank you for your interest in the following namestrap domain name:</p>
  <table>
  <tr>
  	<td style="font-size: 10pt;"><a href="'.$_POST['domain'].'">'.$_POST['domain'].'</a></td>
  </tr>
    <tr>
      <td>One of our representatives will be in touch with you soon to answer any questions you may have.</tr>
    <tr></tr>
     <tr><td>Regards,</td></tr>
     <tr></tr>
     <tr></tr>
     <tr><td>The namestrap Team</td></tr>

     <tr><td><a href="http://namestrap.com">namestrap.com</a></td></tr>
     <tr></tr>
     <tr><td>+1.2103380531</td></tr>	     
  </table>';
  //..........................admin mail.......................
 	$to .= 'testdata164@gmail.com';
 	$message1 = '<p>Thank you for your interest in the following namestrap domain name:</p>
                <table>
                <tr>
                	<td style="font-size: 10pt;">Domain name :<a href="'.$_POST['domain'].'">'.$_POST['domain'].'</a></td>
                </tr>
                  <tr>
                    <td style="font-size: 10pt;">Name <a href="'.$_POST['name'].'">'.$_POST['name'].'</a></td>
                  </tr>
                  <tr><td style="font-size: 10pt;">EmailID <a href="'.$_POST['email'].'">'.$_POST['email'].'</a></td></tr>
                  <tr><td style="font-size: 10pt;">Message <p href="'.$_POST['mess'].'">'.$_POST['mess'].'</p></td></tr>
                   <tr><td>Regards,</td></tr>
                   <tr></tr>
                   <tr></tr>
                   <tr><td>The namestrap Team</td></tr>

                   <tr><td><a href="http://namestrap.com">namestrap.com</a></td></tr>
                   <tr><td>+1.2103380531</td></tr>	     
                </table>';
	$headers  = 'MIME-Version: 1.0' . "\r\n";
	$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
	
if(mail($email,	$subject,$message,$headers)) {
		echo 'mail sent.';
 	} else {
		echo 'mail  not sent.';
	}		
if(mail($to, $subject1, $message1,$headers)) {
		
		echo 'This Email Send Admin.';
	} else {
		echo 'mail  not sent.';
	}

exit;
// if(mail($email, $name, $message,$headers,$subject)) {
// 		mail($admin, $name, $message1,$headers)
// 		echo 'mail sent.';
// 	} else {
// 		echo 'mail  not sent.';
// 	}

// exit;
?>



