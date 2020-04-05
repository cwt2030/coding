/*
testing form submit action to the same page 
copy the file guess.php 

a- test the file in your browser 

b- in the top php section create the varible $message and assign to it the welcome massage that is already availbale as <h1> 

c- Replace the text "Welcome to the gussing machine"
with a php  script that acho that $message variable 

d- Update the top php section to include the following :

*/

<?php
if (isset($_POST['guess']))
{
    $message ="welcom to the guessing machinr";

}
else
{
    $message =$_POST['guess'];
}
?>
<html>
    <body>
         <h1>
                welcome to the guessing machine

         </h1>
         <form action="<?php echo $_SERVER[PHP_SELF]?>"method="POST">
        <p><strong> Type your guess here :</strong> <input type="text"> name="guess">
            </p>
            <p><input type="submit" value="submit your guess"></p>
        </form>
    </body>
</html>