<?php  
session_start();
include('includes/header.php');
include('includes/navbar.php');
include('./config/config.php');
?>
<?php
if(isset($_POST['submit'])){
 $bannner = $_FILES['flifer']['name'];
     $flifer_loc = $_FILES['flifer']['tmp_name'];
    $flifer_name = $_FILES['flifer']['name'];
    $flifer_desc = $flifer_name;
    move_uploaded_file($flifer_loc, './../images/home_flifer/' . $flifer_name);

    $title = $_POST['title'];
    $subtitle = $_POST['subtitle'];
    $descr = $_POST['descr'];

    $sql = "INSERT INTO `home_flifer`(`title`, `subtitle`, `descr`,`flifer_image`)
     VALUES ('$title','$subtitle','$descr','$flifer_desc')";
    $sql_run = mysqli_query($con,$sql);
}
?>

<div class="card-body">
  
<div class="card">
<div class="card-header bg-dark">
    <h1 class="text-center text-white "> Upload Flifer</h1>
</div>
</div><br><br>
<hr>
<div class="table-responsive">
    
    <form action="" method="post" enctype="multipart/form-data">
<div class="form-group">
    <label for="">Insert Flifer</label>
    <input type="file" name="flifer" class="form-control">
</div>
<div class="form-group">
    <label for="">Insert Title</label>
    <input type="text" name="title" class="form-control">
</div>
<div class="form-group">
    <label for="">Insert Subtitle</label>
    <input type="text" name="subtitle" class="form-control">
</div>
<div class="form-group">
    <label for="">Insert Description</label>
    <input type="text" name="descr" class="form-control">
</div>
<button type="submit" name="submit" class="form-control">Submit</button>
</form>

<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<hr>
<div class="card">
    <div class="card-header bg-dark">
        <h1 class="text-center text-white"> List Of Inserted images</h1>
    </div>
    <div class="card-body">
        <table class="table" border="2">
<tr>
    <th>Sr. No</th>
    <th>Title</th>
    <th> SubTitle</th>
    <th>Image</th>
    <th>Id</th>
    <th>Description</th>
    <th>Action</th>
</tr>
<?php 
                           
                           $number=1;
                           $sql =
                                "SELECT * FROM home_flifer";
$sql_run = mysqli_query($con,$sql);
                        while($row = mysqli_fetch_array($sql_run)){
                    ?>
          <tr>
    <td><?php echo $number ?></td>
    <td><?php echo $row['title'] ?></td>
    <td><?php echo $row['subtitle']?></td>
    <td><img src="../images/home_flifer/<?php echo $row['flifer_image']; ?>" height="100px" width="auto" ></td>
    <td><?php echo $row['id'] ?></td>
    <td><?php echo $row['descr'] ?></td>
    <td><button type="submit" name="delete" class="btn btn-danger"><a href="deletehome_flifer.php?id=<?php echo $row['id']; ?>">Delete</a> </button></td>
</tr>
<?php
$number++;
    }


?>

        </table>
    </div>
</div>

</div>
</div>


<!-- !-- /.container-fluid --> 

<?php
include('includes/script.php');
include('includes/footer.php');
?>