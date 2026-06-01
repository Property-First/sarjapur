<?php
$name=$_POST['name'];
$telephone=$_POST['telephone'];
$email=$_POST['email'];
$ip=$_POST['00NF000000DAKs6'];
$source = $_POST['source']; 
extract($_POST, EXTR_OVERWRITE);
$headers  = "MIME-Version: 1.0\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
$headers .= "From: propertyfirstconsulting@gmail.com\n";
$recipient="lmt@property-first.com";

$message="\ Godrej Sarjapur Bangalore \n";
$subject=" Godrej Sarjapur Bangalore -  Instant CallBack";
$message = '<table width="500" border="0" align="left" cellpadding="0" cellspacing="0" bgcolor="#FFF" style="font-weight: 700;font-size: 12px;color: #666;font-family:Arial, Helvetica, sans-serif; background-color:#FFFFFF;">
  <tr bgcolor="#545080">
    <td width="500" colspan="2" style="font-weight: 700;font-size: 13px;color: #FFF; border: 1px solid #CCC; border-bottom:none; border-right:none; padding:10px;"> Godrej Sarjapur Bangalore - PPC(Internal) - CallBack</td>
  </tr>
   <tr>
  
    <td width="250" style="border: 1px solid #CCC; border-bottom:none; border-right:none; padding:10px;">IP Address</td>
    <td width="250" style="border: 1px solid #CCC; border-bottom:none; padding:10px;">'.$ip.'</td>
    
  </tr>
  <tr>
    <td width="250" style="border: 1px solid #CCC; border-bottom:none; border-right:none; padding:10px;">Name</td>
    <td width="250" style="border: 1px solid #CCC; border-bottom:none; padding:10px;">'.$name.'</td>
  </tr>
  <tr>
    <td width="250" style="border: 1px solid #CCC; border-bottom:none; border-right:none; padding:10px;">Telephone</td>
    <td width="250" style="border: 1px solid #CCC; border-bottom:none; padding:10px;">'.$telephone.'</td>
  </tr>';
  if($email!='')
  {
	  
  $message.=' <tr>
    <td width="250" style="border: 1px solid #CCC; border-bottom:none; border-right:none; padding:10px;">Email</td>
    <td width="250" style="border: 1px solid #CCC; border-bottom:none; padding:10px;">'.$email.'</td>
  </tr>';
  }
  $message .='</table>';

mail($recipient, $subject, $message, $headers);
echo "<meta http-equiv='REFRESH' content='0;url=thankyou.html'>";
$headers1="";
?>