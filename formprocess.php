<html>
<head>
<title>Download iso</title>
</head>
<body>
<?php include 'header.php' ; ?>


<div align="justify"><font color="#2B2BA0"><span style="font-family: Verdana; font-weight: normal; font-style: normal; text-decoration: none;">
Once you submit all the details, your iso will be generated below. Please click the link to download the file. You can boot using this file.
<br>
To add new server please <a href=http://192.168.1.123/build.php>Click here</a> . Don't press the back button

<br><br> Built by : Lal Pasha shaik <br> </span>
 </font></div>

<?php

$hostname = $_POST['HOST'];
$profile =  $_POST['profile'];
$mac     =  $_POST['MAC'];
$ipaddr  =  $_POST['IPADDR'];
$gateway = $_POST['GATEWAY'];


$cblrsysadd="cobbler system add --name=$hostname --profile=$profile --mac=$mac --ip-address=$ipaddr --gateway=$gateway" ;

$output = shell_exec("$cblrsysadd;echo $?") ;

$x = 0;
if ($output == $x):
        echo '<br>';
        echo 'Given inputs are accepted by cobbler.. creating ISO..';
        echo '<br>' ;

        #$syslist = shell_exec("cobbler system list") ;
        #echo '<br>';
        #echo "$syslist" ;
        #echo '<br>';

$build_iso="cobbler buildiso --systems=$hostname";
$runiso = shell_exec("$build_iso;echo $?");
$y = 0;
if ($runiso == $y):

        $sleep = shell_exec("sleep 10");

         echo '<br>';

        copy('./generated.iso', "./iso/$hostname.iso");
        $sleep = shell_exec("sleep 10");

        echo '<br>';

echo "<a href=http://192.168.1.123/iso/$hostname.iso>Click here to download the iso</a>" ;

else:
echo 'Error occured';
echo '<br>';
echo "$output";
echo '<br>';
echo "$build_iso";
echo '<br>';

endif;



else:
        echo '<br>';
        echo 'Some error occured, Please provide the correct details..' ;
        echo '<br>' ;
        echo "$output" ;
        echo '<br>' ;
endif;


?>

</body>
</html>
