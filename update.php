<?php include('header.php')?>
<?php include('database_conn.php');?>
<?php

 $id=$_GET['id'];
$sql="select * from movies where id='$id'";
$query=mysqli_query($conn,$sql);
 while($row=mysqli_fetch_assoc($query))
 {
  
    $name=$row['name'];
    
   $actor=$row['actor'];
   $actors=$row['actors'];
   $director=$row['director'];
   $date=$row['released'];

     } 
    




?>
<?php
if(isset($_POST['submit']))
{
   $name=$_POST['name'];
   $actor=$_POST['actor'];
   $actors=$_POST['actors'];
   $director=$_POST['director'];
   $date=$_POST['date'];

   $query="update movies set name='$name',actor='$actor',actors='$actors',directot='$director',date='$date' where id='$id'";
   mysqli_query($conn,$query) or die("not updated");
   header('Location:retrive.php');
  }



?>
<div class=" bg-light vh-100 d-flex">

   <div class="col-lg-3 m-auto">
     <div class="card">
         <div class="font-weight-bold text-center pt-4 mb-n4 btn-block">Movies</div>
       <div class="card-body">
          <form action="update.php" method="post">
             <div class="form-group md-form">
              <input type="text" class="form-control" name="name" value="<?php echo $name;?>">
               <label>Name</label>
             </div> 
             <div class="form-group md-form">
              <input type="text" class="form-control" name="actor" value="<?php echo $actor;?>">
               <label>Actor</label>
             </div>
             <div class="form-group md-form">
              <input type="text" class="form-control" name="actors" value="<?php echo $actors;?>">
               <label>Actors</label>
             </div>
             <div class="form-group md-form">
              <input type="text" class="form-control" name="director" value="<?php echo $director;?>">
               <label>Director</label>
             </div>
             <div class="form-group md-form">
              <input type="date" class="form-control" name="date" value="<?php echo $date;?>">
               <label>Released</label>
             </div>
             <div class="form-group">
                 <button type="submit" class="btn btn-primary btn-block" name="submit">submit</button>
             </div>
           </form>
        </div>
    </div> 
   </div>
</div>


<?php include('footer.php')?>