<?php
   include('connect.php');
    $g = $_POST['title'];
    $a =$_POST['accomplish_date'];
   $d =$_POST['descriptions'];
   $s =$_POST['status'];
    $id= $_POST['id'];
 
    $query ="UPDATE goal SET title ='$g', accomplish_date ='$a', descriptions ='$d', status ='$s'  WHERE id='$id'";
    if(mysqli_query($conn,$query)){
        header('location:../home.php?msg=successfully updated');
    }else{
        header('location:../home.php?msg=' .mysqli_error($conn));
    
}

?>
