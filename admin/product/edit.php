<?php
    require_once("../dbconfig.php");
    
    $id = $_GET['id'];
    $sql = "SELECT * FROM products WHERE id=".$id;

    $result = mysqli_query($connection, $sql);

    $result = mysqli_query($connection, $sql);
    $row = mysqli_fetch_assoc($result);

    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $name = $_POST['name'];
        $price = $_POST['price'];
        $description = $_POST['description'];
        $f_img = $_FILES['f_img']['name'];
        $tmp = $_FILES['f_img'] [ 'tmp_name'];//for store image
        $s_img = $_FILES['s_img']['name'];
        $tmp1 = $_FILES['s_img'] [ 'tmp_name'];//for store image

        if($f_img) {
            move_uploaded_file($tmp, "f_img/$f_img");
        }
        if($s_img){
            move_uploaded_file($tmp1, "s_img/$s_img");
        }
        
        $sql = "UPDATE `products` SET `name` = '$name', `price` = '$price', `description` = '$description', `f_img` = '$f_img', `s_img` = '$s_img', `updated_at` = now()
        WHERE `id`=".$id;

        $result = mysqli_query($connection, $sql);

        if(!$result){
            echo $connection->error;
        }else{
            header('location:index.php');
        }

        $connection->close();
    }
    
    

include('./header.php');
?>

	<div class="container-fluid">
			<div class="row mb-5">
				<div class="col-md-12 text-center">
					<h1 class="fw-bolder">Edit Product</h1>
				</div>
			</div>
			<div class="row">
				<div class="col-md-8 offset-md-2">
                    <form action="?id=<?php echo $row['id']; ?>" method="post" enctype="multipart/form-data">
                        
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="floatingInput" name="name" value="<?php echo $row['name']; ?>" placeholder="price">
                            <label for="floatingInput">Name</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="floatingInput" name="price" value="<?php echo $row['price']; ?>" placeholder="price">
                            <label for="floatingInput">Price</label>
                        </div>
                        <!-- <div class="form-floating mb-3">
                            <textarea class="form-control" placeholder="Product Deatails" id="floatingTextarea" name="description">
                            </textarea>
                            <label for="floatingTextarea">Product Details</label>
                        </div> -->
                        <div class="form-group">
                            <label for="floatingTextarea">Product Details</label>
                            <textarea class="form-control" placeholder="Product Deatails" id="ckeditor" name="description">
                                <?php echo $row['description'];?>
                            </textarea>
                        </div>
                        <div class="input-group mb-3">
                            <input type="file" class="form-control" id="inputGroupFile01" name="f_img" >
                            <label class="input-group-text" for="inputGroupFile01">Select First Image File to Upload</label>
                        </div>
                        <div class="input-group mb-3">
                            <input type="file" class="form-control" id="inputGroupFile02" name="s_img" >
                            <label class="input-group-text" for="inputGroupFile02">Select Second Image File to Upload:</label>
                        </div>                
                        <input class="btn login_btn" type="submit" name="submit" value="Submit">

                    </form>
                </div>
			</div>
	</div>

<?php include_once('./footer.php'); ?>
