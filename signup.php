
<html>
	<head>
	<title>Writing to a text file</title>
	</head>
<body>
<?php

echo "enter php";


$username = $_POST['fName'];

$email = $_POST['mail'];

$experience = $_POST['exp'];



//the data

$data = "$username | $email | $experience\n";



//open the file and choose the mode

$fh = fopen("users.txt", "a");

fwrite($fh, $data);



//close the file

fclose($fh);



print "User Submitted";
echo "done!";
header("http://www.getoystr.com");
exit();
?>
</body>


</html>

