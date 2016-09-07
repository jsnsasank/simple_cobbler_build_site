<!DOCTYPE html>
<html>
  <head>
        <title>Linux build site</title>
   </head>
  <body>
<?php include 'header.php' ; ?>

<div align="justify"><font color="#2B2BA0"><span style="font-family: Verdana; font-weight: normal; font-style: normal; text-decoration: none;">
Hi, This site is useful to build your Linux machine.It uses the cobbler frame work in the backround and generate the iso image with given details.
Please enter the hostname,ip,mac details in repsetive fileds and select the profile from drop down. I'll keep adding the new profiles <br>
<br> Built by : Lal Pasha shaik <br> </span>
 </font></div>
<br>
<br>

<div align="left"><font size="3">
<form action="formprocess.php" method="post">
Host Name: <input type="text" name="HOST"></br>
<br>
<td>Profile:</td>
<select name="profile" >
<option value="OEL6u5_32bit-i386">OEL6u5_32bit-i386</option>
<option value="OEL6u5_64bit-i386">OEL6u5_64bit-i386</option>
<option value="OEL5u6_64bit-i386">OEL6u5_64bit-i386</option>
<option value="OEL5u3_64bit-i386">OEL6u5_64bit-i386</option>
</select>
<br><br>
Mac address: <input type="text" name="MAC">
<br><br>
IPaddress: <input type="text" name="IPADDR">
<br><br>
Gateway: <input type="text" name="GATEWAY">
<br><br>
<td colspan="2" style="text-align: center;">
<input type="submit" name="submit" value="Submit" /> </td>
</font></div>
<br><br>
  </body>
</form>
</html>

