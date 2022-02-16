<?php 
    require('../dbconfig.php');

    if($_SERVER['REQUEST_METHOD'] == "POST" AND !empty($_POST)){
        $name = $_POST['name'];
        $price = $_POST['price'];
        $description = $_POST['description'];
        $review = $_POST['review'];
        $f_img = $_FILES['f_img']['name'];
        $tmp = $_FILES['f_img'] [ 'tmp_name'];//for store image
        $s_img = $_FILES['s_img']['name'];
        $tmp1 = $_FILES['s_img'] [ 'tmp_name'];//for store image
        
        if(empty($name)){
            $errors[] = "Product Name Field is Required<br/>";
        }

        if(empty($price)){ 
            $errors[] = "Price Field is Required<br/>";
        }

        if(empty($description)){
            $errors[] =  "description Field is Required<br/>";
        }

        if(empty($review)){ 
            $errors[] =  "review Field is Required<br/>";
        }

        if(empty($f_img)) {
            $errors[] =  "Image1 is Required<br/>";
        }else{
            move_uploaded_file($tmp, "f_img/$f_img");
        }
        
        if(empty($s_img)){
            $errors[] =  "Image2 is Required<br/>";
        }else{
            move_uploaded_file($tmp1, "s_img/$s_img");
        }

        if(empty($errors)){
            $sql = "INSERT INTO `products`(`name`, `price`, `description`, `review`, `f_img`, `s_img`, `created_at`, `updated_at`) VALUES ('$name','$price','$description', '$review','$f_img','$s_img', now(),now())";
        
            $result = $connection->query($sql);

            if(!$result){
                echo $connection->error;
            }else{
                header('location:index.php');
            }
            $messages[] = "Upload Successful!";
        }
        $connection->close();
    }
    require('./header.php');
?>



<div class="container-fluid">
    <div class="row">
        <div class="col-md-12 text-center fs-1 fw-bolder mb-3">Product Upload</div>
        <div class="col-md-8 offset-md-2">
            
            <form action="" method="post" enctype="multipart/form-data">
                <?php
                    if(!empty($errors)){
                        foreach($errors as $error){
                            echo "<p class='text-danger'>". $error ."</p>";
                        }
                    }

                    if(!empty($messages)){
                        foreach ($messages as $message) {
                            $success = "<p class='text-success fs-4'>". $message."</p>";
                        }
                        $_SESSION['success_upload'] = $success;
                    }
                    ?>
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="floatingInput" name="name" placeholder="price">
                    <label for="floatingInput">Name</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="floatingInput" name="price" placeholder="price">
                    <label for="floatingInput">Price</label>
                </div>
                <div class="form-floating mb-3">
                    <textarea name="review" class="form-control" placeholder="Leave a comment here" id="floatingTextarea"></textarea>
                    <label for="floatingTextarea">Product Review</label>
                </div>
                <div class="form-group mb-3">
                    <label for="floatingTextarea">Product Details</label>
                    <textarea class="form-control" placeholder="Product Deatails" id="ckeditor" name="description"></textarea>
                </div>
                <div class="input-group mb-3">
                    <input type="file" class="form-control" id="inputGroupFile01" name="f_img">
                    <label class="input-group-text" for="inputGroupFile01">Select First Image File to Upload</label>
                </div>
                <div class="input-group mb-3">
                    <input type="file" class="form-control" id="inputGroupFile02" name="s_img">
                    <label class="input-group-text" for="inputGroupFile02">Select Second Image File to Upload:</label>
                </div>                
                <input class="btn login_btn" type="submit" name="submit" value="Upload">
            </form>
        </div>
    </div>

    

<?php require('./footer.php'); ?>