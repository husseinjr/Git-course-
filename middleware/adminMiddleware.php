<?php



include('../functions/myfinctions.php');

if (isset($_SESSION['auth'])){

    if($_SESSION['role_as'] != 1 )
    {
        header("Location: ../index.php");
    }
    
}
else 
{
    header("Location: ../login.php");
}
?>