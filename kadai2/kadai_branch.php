<?php

if(isset($_POST['disp'])==true)
{
if(isset($_POST['kadaicode'])==false)
   {
    header('Location:kadai_ng.php');
    exit();
   }
   $kadai_code=$_POST['kadaicode'];
   header('Location:kadai_disp.php?kadaicode='.$kadai_code);
   exit();
}


if(isset($_POST['add'])==true){
header('Location:kadai_add.php');
exit();
}


    if(isset($_POST['kadaicode'])==false)
{
    header('Location:kadai_ng.php');
    exit();
}

if(isset($_POST['delete'])==true)
{
    if(isset($_POST['kadaicode'])==false)
    {
        header('Location:kadai_ng.php');
        exit();
    }
    $kadai_code=$_POST['kadaicode'];
    header('Location:kadai_delete.php?kadaicode='.$kadai_code);
    exit();
}
?>