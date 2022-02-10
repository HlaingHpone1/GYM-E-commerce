<?php require('./header.php'); 
?>



<div class="container-fluid">
    <div class="row">
        <div class="col-md-12 text-center fs-1 fw-bolder mb-3">Product Upload</div>
        <div class="col-md-8 offset-md-2">
            
            <form action="check.php" method="post" enctype="multipart/form-data">
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="floatingInput" name="name" placeholder="price">
                    <label for="floatingInput">Name</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="floatingInput" name="price" placeholder="price">
                    <label for="floatingInput">Price</label>
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
                <input class="btn login_btn" type="submit" name="submit" value="Submit">
            </form>
        </div>
    </div>

    

<?php require('./footer.php'); ?>