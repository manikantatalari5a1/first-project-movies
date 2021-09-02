<?php include('header.php')?>
<?php include('database_conn.php');?>
<?php

if(isset($_POST['submit']))
{
   $name=$_POST['name'];
   $actor=$_POST['actor'];
   $actors=$_POST['actors'];
   $director=$_POST['director'];
   $date=$_POST['date'];
   $query=mysqli_query($conn,"insert into movies(name,actor,actors,director,released) values('$name','$actor','$actors','$director','$date')") or die("not inserted");
   header('Location:retrive.php');
  }



?>
<div class=" bg-light vh-100 d-flex">
   <div class="col-lg-3 m-auto">
     <div class="card">
         <div class="font-weight-bold text-center pt-4 mb-n4 btn-block">Movies</div>
       <div class="card-body">
          <form action="login.php" method="post">
             <div class="form-group md-form">
              <input type="text" class="form-control" name="name">
               <label>Name</label>
             </div> 
             <div class="form-group md-form">
              <input type="text" class="form-control" name="actor">
               <label>Actor</label>
             </div>
             <div class="form-group md-form">
              <input type="text" class="form-control" name="actors">
               <label>Actors</label>
             </div>
             <div class="form-group md-form">
              <input type="text" class="form-control" name="director">
               <label>Director</label>
             </div>
             <div class="form-group md-form">
              <input type="date" class="form-control" name="date">
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