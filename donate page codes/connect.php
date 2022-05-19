<?php
//databes connection code
if (isset($_POST['First_Name']))
{
$con=mysqli_connect("localhost","root","","trasaction details");

//get the post records
$First_name = $_POST['First_name'];
$Last_name = $_POST['Last_name'];
$email = $_POST['email'];
$Date_of_Birth = $_POST['Date_of_Birth'];
$gender = $_POST['gender'];
$Pay = $_POST['Pay'];
$card_number = $_POST['card_number'];
$card_CVC = $_POST['card_CVC '];

//database insert sql code
$sql ="INSERT INTO `details` (`id`, `First_Name`,`Last_Name`,`email`,
`Date_of_Birth`,`gender`,`Pay`, `card_number`, `card_CVC`) VALUES('0', '$First_Name','$Last_Name',
'$email','$Date_of_Birth','$gender','$Pay', '$card_number', '$card_CVC')";

//insert in database
//rs is a variable for holding the connection

$rs = mysqli_query ($con, $sql);

if($rs)
{

	echo "Donation suuccessfull";
}

}
else
{
	echo " donation un successfull";

}

?>
 