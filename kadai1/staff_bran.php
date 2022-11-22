<?php

if(isset($_POST['sansyo'])==true)
{
if(isset($_POST['staffcode'])==false)
   {
    header('Location:staff_mg.php');
    exit();
   }
   $staff_code=$_POST['staffcode'];
   header('Location:staff_sansyo.php?staffcode='.$staff_code);
   exit();
}


if(isset($_POST['sinki'])==true){
header('Location:staff_sinki.php');
exit();
}

if(isset($_POST['syusei'])==true)
{

    if(isset($_POST['staffcode'])==false)
{
    header('Location:staff_mg.php');
    exit();
}
    $staff_code=$_POST['staffcode'];
    header('Location:staff_syusei.php?staffcode='.$staff_code);
    exit();
}

if(isset($_POST['sakuzyo'])==true)
{
    if(isset($_POST['staffcode'])==false)
    {
        header('Location:staff_mg.php');
        exit();
    }
    $staff_code=$_POST['staffcode'];
    header('Location:staff_sakuzyo.php?staffcode='.$staff_code);
    exit();
}
?>