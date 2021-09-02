<?php include('header.php');?>
<?php include('database_conn.php');?>
<?php
if(isset($_GET['id']))
{
    $id=$_GET['id'];
    $query="delete from movies where id='$id'";
    mysqli_query($conn,$query) or die("not delete");
    header('Location:retrive.php');
}

?>


<?php include('footer.php');?>