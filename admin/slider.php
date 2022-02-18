<?php  
session_start();
include('includes/header.php');
include('includes/navbar.php');
include('./config/config.php');
?>
<?php
if(isset($_POST['submit'])){
 $bannner = $_FILES['banner']['name'];
     $banner_loc = $_FILES['banner']['tmp_name'];
    $banner_name = $_FILES['banner']['name'];
    $banner_desc = $banner_name;
    move_uploaded_file($banner_loc, './../images/banner/' . $banner_name);

    $sql = "INSERT INTO `slider`(`banner`) VALUES ('$banner_desc')";
    $sql_run = mysqli_query($con,$sql);
}
?>

<div class="card-body">
  
<div class="card">
<div class="card-header bg-dark">
    <h1 class="text-center text-white "> Change or Upload Slider</h1>
</div>
</div><br><br>
<hr>
<div class="table-responsive">
    
    <form action="" method="post" enctype="multipart/form-data">
<div class="form-group">
    <label for="">Insert Image</label>
    <input type="file" name="banner" class="form-control">
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
    <th>Image</th>
    <th>Id</th>
    <th>Action</th>
</tr>
<?php
$sql = "SELECT * FROM `slider` ORDER  BY id DESC";
$sql_run = mysqli_query($con,$sql);
if(mysqli_num_rows($sql_run)> 0){
    $number = 1;
    while( $row = mysqli_fetch_array($sql_run)){
?>
          <tr>
    <td><?php echo $number ?></td>
    <td><img src="../images/banner/<?php echo $row['banner']; ?>" height="100px" width="auto" ></td>
    <td><?php echo $row['id'] ?></td>
    <td><button type="submit" name="delete" class="btn btn-danger"><a href="deletehappystory.php?id=<?php echo $row['id']; ?>">Delete</a> </button></td>
</tr>
<?php
$number++;
    }

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