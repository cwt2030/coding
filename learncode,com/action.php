<!-- cheking User submitted data using the $_POST superglobal-->
<!-- create using the file action.php and add the following cod it -->

<?php
$user ="username";
$pass ="password";
if (isset($_POST["username"]))
{
    $user=$_POST["username"]
}
if (isset($_POST["password"]))
{
    $pass=$_POST["password"]
}
each "Dear $user, your password is " $pass";
?>

