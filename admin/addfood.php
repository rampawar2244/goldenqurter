<?php  
session_start();
include('includes/header.php');
include('includes/navbar.php');
include('./config/config.php');
?>
<?php
if(isset($_POST['submit'])){

    $food_name = $_POST['food_name'];
    $category = $_POST['category'];
    $food_type = $_POST['food_type'];
    $price = $_POST['price'];
    $details = $_POST['details'];

 $image = $_FILES['image']['name'];
     $image_loc = $_FILES['image']['tmp_name'];
    $image_name = $_FILES['image']['name'];
    $image_desc = $image_name;
    move_uploaded_file($image_loc, './../images/food_image/' . $image_name);

    $food_data = json_encode(
        array(
            'food_name' => $food_name,
            'price' => $price,
            'details' => $details,
            'food_image' => $image_desc,
            
        ),
        JSON_FORCE_OBJECT
    );

    $sql = "INSERT INTO `food`( `food_data`, `food_type`, `category`) 
    VALUES ('$food_data','$food_type','$category')";
    $sql_run = mysqli_query($con,$sql);
    if($sql_run){
        ?>
        <script type="text/javascript">alert("success");</script>
        <?php 
    }
    else{
        echo " not  added";
    }
}
?>

<div class="card-body">
  
<div class="card">
<div class="card-header bg-dark">
    <h1 class="text-center text-white "> Add Food </h1>
</div>
</div><br><br>
<hr>
<div class="table-responsive">
    
    <form action="" method="post" enctype="multipart/form-data">
    
<div class="form-group">
    <label for="">Insert Food Name</label>
    <input type="text" name="food_name" class="form-control">
</div>
<div class="form-group">
    <label for="">Select Food Category</label>
<select name="category" id="" class="form-control">
    <option >Select Food Category</option>
    <option value="morning_quarters">Morning Quarters</option>
    <option value="quarters"> Quarters</option>
    <option value="empanadas"> Empanadas</option>
    <option value="sides&snacks"> Sides & Snacks</option>
    <option value="ontherocks">On The Rocks</option>
    <option value="creamblendedfrappes">Cream Blended Frappes</option>
    <option value="shakes">Shakes</option>
    <option value="pattiseries">Pattiseries</option>
    <option value="brews">Brews</option>
</select>
</div>

<div class="form-group">
    <label for="">Select Food Sub Category</label>
    <select name="food_type" id="" class="form-control">
        <option >Select Food Type</option>
    <option value="veg">Veg</option>
    <option value="non_veg">Non Veg</option>
    <option value="egg">Egg</option>
</select>
</div>

<div class="form-group">
    <label for="">Insert  Food Price</label>
    <input type="text" name="price" class="form-control">
</div>
<div class="form-group">
    <label for="">Insert Details</label>
    <textarea name="details" id="" cols="30" rows="5" class="form-control"></textarea> 
</div>


<div class="form-group">
    <label for="">Insert  Food Image</label>
    <input type="file" name="image" class="form-control">
</div>
<button type="submit" name="submit" class="form-control btn btn-success">Submit</button>
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
    <th>Food Name</th>
    <th> Food Type</th>
    <th>Category</th>
    <th>Price</th>
    <th>Details</th>
    <th>Image</th>
    <th>Action</th>
</tr>
<?php 
                           
                           $number=1;
                           $sql =
                                "SELECT * FROM food ORDER BY id DESC";
$sql_run = mysqli_query($con,$sql);
                        while($row = mysqli_fetch_array($sql_run)){
                    ?>
          <tr>
    <td><?php echo $number ?></td>
    <td><?php $data = json_decode($row['food_data'], true);
                                    echo $data['food_name'];  ?></td>
    <td><?php echo $row['food_type']?></td>
    <td><?php echo $row['category']?></td>
    <td><?php $data = json_decode($row['food_data'], true);
                                    echo $data['details'];  ?></td>
    <td><img src="../images/food_image/<?php $data = json_decode($row['food_data'], true);
                                    echo $data['food_image'];  ?>" height="100px" width="auto" ></td>
    <td><?php echo $row['id'] ?></td>
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