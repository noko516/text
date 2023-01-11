<?php

if(isset($_POST['disp'])==true)
{
if(isset($_POST['kadaicode'])==false)
   {
    header('Location:kadai_ng.php');
    exit();
   }
   $staff_code=$_POST['kadaicode'];
   header('Location:kadai_disp.php?kadaicode='.$kadai_code);
   exit();
}


if(isset($_POST['add'])==true){
header('Location:kadai_add.php');
exit();
}

if(isset($_POST['edit'])==true)
{

    if(isset($_POST['kadaicode'])==false)
{
    header('Location:kadai_ng.php');
    exit();
}
    $staff_code=$_POST['kadaicode'];
    header('Location:kadai_edit.php?kadaicode='.$kadai_code);
    exit();
}

if(isset($_POST['delete'])==true)
{
    if(isset($_POST['kadaicode'])==false)
    {
        header('Location:kadai_ng.php');
        exit();
    }
    $staff_code=$_POST['kadaicode'];
    header('Location:kadai_delete.php?kadaicode='.$kadai_code);
    exit();
}
?>