<?php
//echo phpinfo();

//$query = "SELECT * FROM tbl_dealer as dealer "
//       . "LEFT JOIN tbl_users as user on user.dealer_id = dealer.dealer_id "
//       . "LEFT JOIN tbl_orders as order on onder.user_id = user.user_id";
$message  = 'Hi, you just received an email using sendmail!';
$headers  = 'From: ruchit.patel288@gmail.com' . "\r\n" .
            'Reply-To: sender@gmail.com' . "\r\n" .
            'MIME-Version: 1.0' . "\r\n" .
            'Content-type: text/html; charset=iso-8859-1' . "\r\n" .
            'X-Mailer: PHP/' . phpversion();
if (mail("ruchit.p@communicationcrafts.com","hello",$message,$headers)) {
    echo "hello";
} else {
    echo "sorry";
}
// multiple recipients
/*$to  = 'ruchit.p@communicationcrafts.com' . ', '; // note the comma
$to .= 'vikas.patel@communicationcrafts.com';

// subject
$subject = 'Birthday Reminders for August';

// message
$message = '
<html>
<head>
  <title>Birthday Reminders for August</title>
</head>
<body>
  <p>Here are the birthdays upcoming in August!</p>
  <table>
    <tr>
      <th>Person</th><th>Day</th><th>Month</th><th>Year</th>
    </tr>
    <tr>
      <td>Joe</td><td>3rd</td><td>August</td><td>1970</td>
    </tr>
    <tr>
      <td>Sally</td><td>17th</td><td>August</td><td>1973</td>
    </tr>
  </table>
</body>
</html>
';

// To send HTML mail, the Content-type header must be set
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=UTF-8' . "\r\n";

// Additional headers
$headers .= 'To: Mary <ruchit.p@communicationcrafts.com>, Kelly <vikas.patel@communicationcrafts.com>' . "\r\n";
$headers .= 'From: Birthday Reminder <vipul.p@communicationcrafts.com>' . "\r\n";
$headers .= 'Cc: vipul.p@communicationcrafts.com' . "\r\n";
$headers .= 'Bcc: bharatdan.g@communicationcrafts.com' . "\r\n";

// Mail it
mail($to, $subject, $message, $headers);*/
?>
